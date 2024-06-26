<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Ads;
use Illuminate\Support\Facades\Http;
use App\Models\Category;
use App\Models\Cities;
use App\Models\SubCategory;
use App\Models\User;
// Country,city, prophp artisan config:clearince
use App\Models\Country;
use App\Models\Province;
use App\Models\City;
use App\Models\Districts;
use App\Models\Image;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Str;
use function PHPUnit\Framework\isEmpty;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);

            // Save the image path or perform any additional logic

            return "Image uploaded successfully!";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    // Ads Detail Page 
    public function show(int $ads)
    {
        $adsData = $this->loadMyAdList();
        $profile=$this->loadImageList();
        // Retrieve the ad data based on the provided ID
        $ad = DB::table('ads')
            ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
            ->leftJoin('sub_categories', 'sub_categories.id', '=', 'ads.sub_category_id')
            ->leftJoin('cities', 'cities.id', '=', 'ads.city_id')
            ->select('ads.*', 'categories.name as cname', 'sub_categories.name as subname')
            ->where('ads.id', $ads)
            ->first();
        $image = DB::table('images')
            ->leftJoin('ads', 'ads.id', '=', 'images.ads_id')
            ->select('images.*')->where('images.ads_id', $ads)->where('images.status', 0)
            ->get();


        return view('front.ads.details', compact('ad', 'image', 'adsData','profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ads $ads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ads $ads)
    {
        //
    }



    // postDetail
    public function postDetail(Request $request)
    {

        $data = $request->all();
        $data['user_id']  = 1;

        $ad = Ads::create($data);
        $newlyCreatedId = $ad->id;

        $data = $this->uploadImage($request, $newlyCreatedId);

        // $this->uploadImage('image1',);
        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);

            // Save the image path or perform any additional logic

            return "Image uploaded successfully!";
        } else {
            return "No Image Uploaded!";
        }
        // print_r($request->all());
        die();
        return view('front.ads.ad-post-details');
        // $ads = $request->all();
        //    print_r($ads);
    }
    public function uploadImage(Request  $request, int $id)
    {

        $imagelist = ['image1', 'image2', 'image3', 'image4'];
        $name = $request->input('title');
        print_r($request);
        for ($i = 0; $i < count($imagelist); $i++) {
            // print_r($imagelist[$i]);
            if ($request->hasFile('image1')) {
                print_r($imagelist[$i]);
                die();
                $image = $request->file($request->$imagelist[$i]);
                $imageNames = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageNames);

                // Save the image path or perform any additional logic

                Image::create([
                    'ads_id' => $id,
                    'name' => $name,
                    'link' => $imageNames
                ]);
                return true;
            } else {
                return false;
            }
        }
    }
    // Ads register Steps 1-----------------------------------------------------------------------------
    public function register()
    {
        $categories = Category::where('status', '=', '1')->get();
        $subcategories = SubCategory::orderBy('category_id')->get();
        $districts = Districts::all();
        return view('front.register.index', compact('categories', 'subcategories', 'districts'));
    }
    // Ads register Steps 2-----------------------------------------------------------------------------
    public function registerNext(Request $request)
    {
        $data = $request->all();


        $location = DB::table('districts')
            ->join('cities', 'districts.id', '=', 'cities.district_id')
            ->select('*', 'districts.name_en')
            ->where('cities.id', '=', $data['city'])
            ->first();

        $subcategories = SubCategory::find($data['sub_category_id']);
        $categories = Category::find($subcategories['category_id']);
        return view('front.register.second', compact('categories', 'subcategories', 'location'));
    }

    // Ads register Steps 3-----------------------------------------------------------------------------

    public function resgisterThird(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',

        ]);

        $data = $request->all();
        $data['slug'] = $this->slugGenerator($data['title'], $data['sub_category_id'], $data['city_id']);
        $data['user_id']  = 1;
        $data = $this->checkFeature($data);
        $ads = Ads::create($data);
        // $adsId = $ad->id;

        $location = DB::table('districts')
            ->join('cities', 'districts.id', '=', 'cities.district_id')
            ->select('*', 'districts.name_en')
            ->where('cities.id', '=', $data['city_id'])
            ->first();

        $categories = Category::find($data['category_id']);
        $subcategories = SubCategory::find($data['sub_category_id']);

        return view('front.register.third', compact('categories', 'subcategories', 'location', 'ads'));
    }

    public function finalStep(Request $request)
    {

        $data = $request->all();

        // $dataList = Ads::find($data['id']);

        for ($i = 0; $i <= 4; $i++) {
            $fieldName = 'image' . ($i);

            // Assuming your file input names are image1, image2, etc.
            if ($request->hasFile($fieldName)) {

                $image = $request->file($fieldName);

                $imageNames = time() . $i . '.' . $image->getClientOriginalExtension();

                // Save the image path or perform any additional logic
                if ($i == 0) {
                    $image->move(public_path('uploads/featurd'), $imageNames);

                    Image::create([
                        'ads_id' => $data['id'],
                        'name' => 'Ads Images',
                        'status' => 1,
                        'link' => $imageNames
                    ]);
                } else {
                    $image->move(public_path('uploads/gallery'), $imageNames);
                    Image::create([
                        'ads_id' => $data['id'],
                        'name' => 'Ads Images',
                        'status' => 0,
                        'link' => $imageNames
                    ]);
                }

                // You may want to continue the loop instead of returning immediately
            }
        }

        return redirect()->route('ads.myads')->with('success', 'City Created Successfully');
    }

    //-----------------------------------------Slug Generator -----------------------------------------------------

    public function slugGenerator(String $title, int $id, int $city_id)
    {

        $slug = Str::slug($title, "-") . $id . $city_id;
        $slugcheck = Ads::where('slug', '=', $slug)->get();
        if ($slugcheck->count() > 0) {
            return false;
        } else {
            return $slug;
        }
    }

    //-----------------------------------------Feature Validaton-----------------------------------------------------

    public function checkFeature(array $data)
    {
        $feactue = ['feature1', 'feature2', 'feature3', 'feature4', 'feature5', 'feature6'];

        foreach ($feactue as $item) {

            if ($data[$item] == null) {
                $data[$item] = 'NA';
            }
        }
        return $data;
    }

    //-----------------------------------------End Registrton -----------------------------------------------------
    public function myads()
    {

        $adsData = $this->loadMyAdList();
        $image=$this->loadImageList();

        // $adsData = Ads::where('user_id', '=', 1)->get();
        // $categories=Category::all();
        // $subcategories = SubCategory::all();
        // $img=Image::all();
        return view('front.ads.myads', compact('adsData', 'image'));
    }
    public function loadImageList()
    {
        $image = Image::where('status', '=', '1')->get();
        return $image;
    }
    public function loadMyAdList()
    {
        $adsData = DB::table('ads')
            ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
            ->leftJoin('sub_categories', 'sub_categories.id', '=', 'ads.sub_category_id')
            ->leftJoin('cities', 'cities.id', '=', 'ads.city_id')
            ->select('ads.*', 'categories.name as cname', 'sub_categories.name as subname')
            ->get();

        return $adsData;
    }
    public function loadList()
    {
        $text = 'multiple';
        // $categories = categoryCount();
        $categories = $this->categoryCount();
        $adsData = DB::table('ads')
            ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
            ->leftJoin('sub_categories', 'sub_categories.id', '=', 'ads.sub_category_id')
            ->leftJoin('cities', 'cities.id', '=', 'ads.city_id')
            ->select('ads.*', 'categories.name as cname', 'sub_categories.name as subname')
            ->paginate(25);

        $image = DB::table('images')
            ->leftJoin('ads', 'ads.id', '=', 'images.ads_id')
            ->select('images.*')->get();

        return view('front.ads-categories', compact('adsData', 'image', 'text', 'categories'));
    }

    public function loadCategories(int $id)
    {
        $categoryName = $this->categoryName($id);

        $text = 'single';
        $categories = $this->categoryCount();
        $adsData = DB::table('ads')
            ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
            ->leftJoin('sub_categories', 'sub_categories.id', '=', 'ads.sub_category_id')
            ->leftJoin('cities', 'cities.id', '=', 'ads.city_id')
            ->select('ads.*', 'categories.name as cname', 'sub_categories.name as subname')
            ->where('ads.category_id', '=', $id)->get();


        $image = DB::table('images')
            ->leftJoin('ads', 'ads.id', '=', 'images.ads_id')
            ->select('images.*')->get();

        return view('front.ads-categories', compact('adsData', 'image', 'categories', 'text', 'categoryName'));
    }
    public function loadSubCategories(int $id)
    {
        $subcategories = SubCategory::where('category_id', '=', $id)->get();
        return view('front.ads-sub-categories', compact('subcategories'));
    }

    public function categoryCount()
    {
        $ads = DB::table('ads')
            ->leftJoin('categories', 'categories.id', '=', 'ads.category_id')
            ->select('ads.category_id', DB::raw('count(*) as category_count'), 'categories.id', 'categories.name', 'categories.image')
            ->groupBy('ads.category_id', 'categories.name', 'categories.image', 'categories.id')
            ->get();

        return $ads;
    }

    public function categoryName(int $id)
    {
        $category = Category::where('id', $id)->first()->name;
        return $category;
    }
    public function categorySubCatName(int $id)
    {
        $subcatName = SubCategory::find($id)->first()->name;
        return $subcatName;
    }
}
