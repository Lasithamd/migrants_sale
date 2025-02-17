@extends('layout.app')
@section('content')
<!-- TinyMCE CDN -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        
<script>
  tinymce.init({
    selector: 'textarea#editor',
  });
</script>
    <section id="main" class="clearfix ad-post-page">
        <div class="container">
            <div class="breadcrumb-section">

                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Ad Post</li>
                </ol>
                <h2 class="title">Post Free Ad</h2>
            </div>
            <div id="ad-post">
                <div class="container">
                    <form action="{{ 'ads/ad-post-details' }}" method="POST">
                        {{-- category --}}
                        <div class="row">
                            <div class="half-form mb-3">
                                <label  class="form-label">Category</label>
                                <select name="category" class=" form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="half-form  mb-3">
                                <label  class="form-label">Sub Category</label>
    
                                {{-- sub category --}}
                                <select name="subcategory" class="form-control">
                                    <option value="">Select Sub Category</option>
                                    @foreach ($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="half-form mb-3">
                                <label  class="form-label">Country</label>
    
                                <label for="province">Provinces</label>
                                <select name="province" id="province" disabled class="form-control">
                                    <option value="">Select One</option>
                                </select>
                            </div>
                        </div>
                        {{-- title	description	price --}}
                        <div class="row">
                            <div class="half-form mb-3">
                                <label  class="form-label">Title</label>                             
                                <input type="text" name="title" id="title"  class="form-control">
                            </div>
                            <div class="half-form mb-3">
                                <label  class="form-label">Price</label>                             
                                <input type="number" name="price"  class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label  class="form-label">Title</label>                             
                                <textarea id="editor" name='description'></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="row category-tab"> 
                    <div class="col-lg-4 col-md-6">
                        <div class="section cat-option select-category post-option">
                            <h4>Select a subcategory</h4>
                            <fieldset >
                            <ul role="tablist" class="nav nav-tabs">


                                <li> <input type="text" name="category" id="1" hidden value="1">
                                    <a href="#cat1" aria-controls="cat1" role="tab" data-toggle="tab" for='1'>
                                        <span class="select">
                                            <img src="{{ asset('home/images/icon/1.png') }}" alt="Images" class="img-">
                                        </span>
                                        Cars & Vehicles
                                    </a>
                                </li>

                                <li class="active link-active"><input type="text" name="category" id="2" hidden
                                        value="2"><a href="#cat2" aria-controls="cat2" role="tab" for="2"
                                        data-toggle="tab">
                                        <span class="select">
                                            <img src="{{ asset('home/images/icon/2.png') }}" alt="Images"
                                                class="img-fluid">
                                        </span>
                                        Electronics & Gedgets
                                    </a></li>
                                <li><a href="#cat3" aria-controls="cat3" role="tab" data-toggle="tab">
                                        <span class="select">
                                            <img src="{{ asset('home/images/icon/3.png') }}" alt="Images"
                                                class="img-fluid">
                                        </span>
                                        Real Estate
                                    </a></li>
                                <li><a href="#cat4" aria-controls="cat4" role="tab" data-toggle="tab">
                                        <span class="select">
                                            <img src="{{ asset('home/images/icon/4.png') }}" alt="Images"
                                                class="img-fluid">
                                        </span>
                                        Sports & responsive
                                    </a></li>
                                <li><a href="#cat5" aria-controls="cat5" role="tab" data-toggle="tab">
                                        <span class="select">
                                            <img src="{{ asset('home/images/icon/5.png') }}" alt="Images"
                                                class="img-fluid">
                                        </span>
                                        Fshion & Beauty
                                    </a></li>
                                <li><a href="#cat6" aria-controls="cat6" role="tab" data-toggle="tab">
                                        <span class="select">
                                            <img src="{{ asset('home/images/icon/6.png') }}" alt="Images"
                                                class="img-fluid">
                                        </span>
                                        Pets & Animals
                                    </a></li>
                                <li><a href="#cat7" aria-controls="cat7" role="tab" data-toggle="tab">
                                        <span class="select">
                                            <img src="{{ asset('home/images/icon/7.png') }}" alt="Images"
                                                class="img-fluid">
                                        </span>
                                        Job Openings
                                    </a></li>
                                <li><a href="#cat8" aria-controls="cat8" role="tab" data-toggle="tab">
                                        <span class="select">
                                            <img src="{{ asset('home/images/icon/9.png') }}" alt="Images"
                                                class="img-fluid">
                                        </span>
                                        Home Appliances
                                    </a></li>
                                <li><a href="#cat9" aria-controls="cat9" role="tab" data-toggle="tab">
                                        <span class="select">
                                            <img src="{{ asset('home/images/icon/10.png') }}" alt="Images"
                                                class="img-fluid">
                                        </span>
                                        Matrimony Services
                                    </a></li>
                                <li><a href="#cat10" aria-controls="home10" role="tab" data-toggle="tab">
                                        <span class="select">
                                            <img src="{{ asset('home/images/icon/11.png') }}" alt="Images"
                                                class="img-fluid">
                                        </span>
                                        Music & Arts
                                    </a></li>
                                <li><a href="#cat11" aria-controls="cat11" role="tab" data-toggle="tab">
                                        <span class="select">
                                            <img src="{{ asset('home/images/icon/12.png') }}" alt="Images"
                                                class="img-fluid">
                                        </span>
                                        Miscellaneous
                                    </a></li>
                                <li><a href="#cat12" aria-controls="cat12" role="tab" data-toggle="tab">
                                        <span class="select">
                                            <img src="{{ asset('home/images/icon/8.png') }}" alt="Images"
                                                class="img-fluid">
                                        </span>
                                        Books & Magazines
                                    </a></li>
                            </ul>
                            </fieldset>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="section tab-content subcategory post-option">
                            <h4>Select a subcategory</h4>
                            <div role="tabpanel" class="tab-pane" id="cat1">
                                <ul>
                                    <li><a href="javascript:void(0)">Cars & Buses</a></li>
                                    <li><a href="javascript:void(0)">Motorbikes & Scooters</a></li>
                                    <li><a href="javascript:void(0)">Bicycles and Three Wheelers</a></li>
                                    <li><a href="javascript:void(0)">Three Wheelers</a></li>
                                    <li><a href="javascript:void(0)">Trucks, Vans & Buses</a></li>
                                    <li><a href="javascript:void(0)">Tractors & Heavy-Duty</a></li>
                                    <li><a href="javascript:void(0)">Auto Parts & Accessories</a></li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane active show" id="cat2">
                                <ul>
                                    <li><a href="javascript:void(0)">Laptop & Computer</a></li>
                                    <li><a href="javascript:void(0)">Mobile Phones</a></li>
                                    <li><a href="javascript:void(0)">Phablet & Tablets</a></li>
                                    <li><a href="javascript:void(0)">Audio & MP</a></li>
                                    <li><a href="javascript:void(0)">Accessories</a></li>
                                    <li><a href="javascript:void(0)">Cameras</a></li>
                                    <li><a href="javascript:void(0)">Mobile Accessories</a></li>
                                    <li><a href="javascript:void(0)">TV & Video</a></li>
                                    <li><a href="javascript:void(0)">Other Electronics</a></li>
                                    <li><a href="javascript:void(0)">TV & Video Accessories</a></li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="cat3">
                                <ul>
                                    <li><a href="javascript:void(0)">Houses & Plots</a></li>
                                    <li><a href="javascript:void(0)">Lands & property</a></li>
                                    <li><a href="javascript:void(0)">Plots & Lands</a></li>
                                    <li><a href="javascript:void(0)">Apartment</a></li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="cat4">
                                <ul>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="cat5">
                                <ul>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="cat6">
                                <ul>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="cat7">
                                <ul>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="cat8">
                                <ul>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="cat9">
                                <ul>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="cat10">
                                <ul>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="cat11">
                                <ul>
                                    <li><a href="javascript:void(0)">Sub Category Item</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="section next-stap post-option">
                            <h2>Post an Ad in just <span>30 seconds</span></h2>
                            <p>Please DO NOT post multiple ads for the same items or service. All duplicate, spam and
                                wrongly categorized ads will be deleted.</p>
                            <div class="btn-section">
                                <a href="{{ route('ads.postDetail') }}" class="btn">Next</a>
                                <a href="#" class="btn-info">or Cancle</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center">
                        <div class="ad-section">
                            <a href="#"><img src="images/ads/3.jpg" alt="Image" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
