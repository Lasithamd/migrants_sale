
@extends('layout.app')
@section('content')
    <section id="main" class="clearfix category-page main-categories">
        <div class="container">
            <div class="breadcrumb-section">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    @isset($subcatName)
                    <h2 class="title"> {{$categoryName}}</h2>
                   
                    @endisset
                   
                </ol>
              
                    @isset($subcatName)
                    <h2 class="title"> {{$subcatName}}</h2>
                    @else
                    <h2 class="title">  {{$categoryName}}</h2>
                    @endisset
                   
            </div>
            <div class="banner">
                
     
            <div class="category-info">
               
                <div class="row">

                    <div class="col-lg-3 col-md-4">
                        <div class="category-accordion tr-accordion" id="accordion">
                            <div class="card">
                                <div class="card-header" id="heading-1"> <button data-toggle="collapse"
                                        data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">All
                                        Categories</button> </div>
                                <div id="collapse-1" class="collapse show" aria-labelledby="heading-1"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            @foreach ($categories as $item)
                                                <li> <a href="{{ route('ads-categories', ['id' => $item->id]) }}">
                                                        <img style=" width: 20px;"
                                                            src="{{ asset('home/images/icon/' . $item->image . '.png') }}"
                                                            alt="s">
                                                        {{ $item->name }}<span> ({{ $item->category_count }}) </span></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-2"> <button class="collapsed" data-toggle="collapse"
                                        data-target="#collapse-2" aria-expanded="false"
                                        aria-controls="collapse-2">Condition</button> </div>
                                <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">
                                    <div class="card-body"> <label for="new"><input type="checkbox" name="new"
                                                id="new">
                                            New</label> <label for="used"><input type="checkbox" name="used"
                                                id="used">
                                            Used</label> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-3"> <button class="collapsed" data-toggle="collapse"
                                        data-target="#collapse-3" aria-expanded="false"
                                        aria-controls="collapse-3">Price</button> </div>
                                <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="price-range">
                                            <div class="price"> <span>$100 - <strong>$700</strong></span>
                                                <div class="dropdown category-dropdown pull-right"> <a
                                                        data-toggle="dropdown" href="#"><span
                                                            class="change-text">USD</span><i
                                                            class="fa fa-caret-square-o-down"></i></a>
                                                    <ul class="dropdown-menu category-change">
                                                        <li><a href="#">$05</a></li>
                                                        <li><a href="#">$10</a></li>
                                                        <li><a href="#">$15</a></li>
                                                        <li><a href="#">$20</a></li>
                                                        <li><a href="#">$25</a></li>
                                                    </ul>
                                                </div> <input type="text" value data-slider-min="0" data-slider-max="700"
                                                    data-slider-step="5" data-slider-value="[250,450]" id="price"><br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-4"> <button class="collapsed" data-toggle="collapse"
                                        data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">Posted
                                        By</button> </div>
                                <div id="collapse-4" class="collapse" aria-labelledby="heading-4"
                                    data-parent="#accordion">
                                    <div class="card-body"> <label for="individual"><input type="checkbox"
                                                name="individual" id="individual"> Individual</label> <label
                                            for="dealer"><input type="checkbox" name="dealer" id="dealer">
                                            Dealer</label> <label for="reseller"><input type="checkbox" name="reseller"
                                                id="reseller">
                                            Reseller</label> <label for="manufacturer"><input type="checkbox"
                                                name="manufacturer" id="manufacturer">
                                            Manufacturer</label> </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-5"> <button class="collapsed"
                                        data-toggle="collapse" data-target="#collapse-5" aria-expanded="false"
                                        aria-controls="collapse-5">Posted By</button>
                                </div>
                                <div id="collapse-5" class="collapse" aria-labelledby="heading-5"
                                    data-parent="#accordion">
                                    <div class="card-body"> <input type="text" placeholder="Search Brand"
                                            class="form-control">
                                        <label for="apple"><input type="checkbox" name="apple" id="apple">
                                            Apple</label> <label for="htc"><input type="checkbox" name="htc"
                                                id="htc"> HTC</label> <label for="micromax"><input type="checkbox"
                                                name="micromax" id="micromax">
                                            Micromax</label> <label for="nokia"><input type="checkbox" name="nokia"
                                                id="nokia">
                                            Nokia</label> <label for="others"><input type="checkbox" name="others"
                                                id="others">
                                            Others</label> <label for="samsung"><input type="checkbox" name="samsung"
                                                id="samsung">
                                            Samsung</label> <span class="border"></span> <label for="acer"><input
                                                type="checkbox" name="acer" id="acer"> Acer</label> <label
                                            for="bird"><input type="checkbox" name="bird" id="bird">
                                            Bird</label> <label for="blackberry"><input type="checkbox" name="blackberry"
                                                id="blackberry"> Blackberry</label> <label for="celkon"><input
                                                type="checkbox" name="celkon" id="celkon"> Celkon</label> <label
                                            for="ericsson"><input type="checkbox" name="ericsson" id="ericsson">
                                            Ericsson</label> <label for="fly"><input type="checkbox" name="fly"
                                                id="fly">
                                            Fly</label> <label for="g-fone"><input type="checkbox" name="g-fone"
                                                id="g-fone">
                                            g-Fone</label> <label for="gionee"><input type="checkbox" name="gionee"
                                                id="gionee">
                                            Gionee</label> <label for="haier"><input type="checkbox" name="haier"
                                                id="haier">
                                            Haier</label> <label for="hp"><input type="checkbox" name="hp"
                                                id="hp">
                                            HP</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 col-lg-7">
                        <div class="section recommended-ads">
                            <div class="banner-form banner-form-full">
                                <form action="#">
            
                                    <input type="text" class="form-control" placeholder="Type Your key word"> <button type="submit"
                                        class="form-control" value="Search">Search</button>
                                </form>
                            </div>
                            <div class="featured-top">
                                <h4>Recommended Ads for You</h4>
                                <div class="dropdown pull-right">
                                    <div class="dropdown category-dropdown">
                                        <h5>Sort by:</h5> <a data-toggle="dropdown" href="#"><span
                                                class="change-text">Popular</span><i
                                                class="fa fa-caret-square-o-down"></i></a>
                                        <ul class="dropdown-menu category-change">
                                            <li><a href="#">Featured</a></li>
                                            <li><a href="#">Newest</a></li>
                                            <li><a href="#">All</a></li>
                                            <li><a href="#">Bestselling</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @foreach ($adsData as $ads)
                                <div class="ad-item row">
                                    <div class="item-image-box col-lg-4">
                                        <div class="item-image">
                                            <a href="{{ route('ads-details', ['id' => $ads->id]) }}">
                                                <?php $x = 0; ?>
                                                @foreach ($image as $img)
                                                    @if ($img->ads_id == $ads->id)
                                                        @if ($x != $img->ads_id)
                                                            <img src="{{ asset('/uploads/featurd/' . $img->link) }}"
                                                                alt="Image" class="{{ $img->name }}">
                                                            <?php $x = $img->ads_id; ?>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-info col-lg-8">
                                        <div class="ad-info">
                                            <h3 class="item-price">LKR {{ $ads->price }}</h3>
                                            <h4 class="item-title"><a href="#">{{ $ads->title }}</a></h4>
                                            <div class="item-cat"> <span><a href="#">{{ $ads->cname }}</a></span>
                                                / <span><a href="#">{{ $ads->subname }}</a></span>
                                            </div>
                                            <span>{{ $ads->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div>
                                @if ($text != 'single')
                                    {{ $adsData->links() }}
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 d-none d-lg-block">
                        <div class="advertisement text-center"> <a href="#">
                            asds<img src="images/ads/2.jpg" alt
                                    class="img-fluid"></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="something-sell" class="clearfix parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="title">Do you have something-sell?</h2>
                    <h4>Post your ad for free on Migrants Sale.com</h4> <a href="ad-post.html" class="btn btn-primary">Post Your
                        Ad</a>
                </div>
            </div>
        </div>
    </section>
@endsection
