@extends('layout.app') 
@section('content') 


<section id="home-one-info" class="clearfix home-one">

<div id="banner-two" class="parallax-section" style="background-image: url('/home/images/banner.jpg')">
    <div class="row text-center">

        <div class="col-sm-12 ">
            <div class="banner">
                <h1 class="title">Shop, Save, and Discover </h1>
                <h3>Your Online Marketplace for Migrants in Sri Lanka</h3>

                <div class="banner-form">
                    <form action="#">

                        <div class="dropdown category-dropdown">
                            <a data-toggle="dropdown" href="#"><span class="change-text">Select
                                    Category</span> <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu category-change">
                                @foreach ($category as $categoryItem)
                                <li><a href="#">{{$categoryItem->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <input type="text" class="form-control" placeholder="Type Your key word">
                        <button type="submit" class="form-control" value="Search">Search</button>
                    </form>
                </div>

                
            </div>
        </div>
    </div>
</div>
    
    <section class="section-category"> 
    <div class="container">
    <div class="section category-ad text-center">
        <ul class="category-list">
            @foreach ($category as $categoryItem)
            <li class="category-item">
                <div class="cate-div">
                    <a href="{{ route('ads-categories', ['id' => $categoryItem->id]) }}">
                        <div class="category-icon"><img  src="{{ asset('home/images/icon/' . $categoryItem->image . '.png') }}"  alt="images" class="img-fluid">
                        </div>
                        <span class="category-title">{{$categoryItem->name}}</span>
                      
    
                    </a>
                </div>
               
            </li>
            @endforeach
            
            
        </ul>
        
    </div>

    </div>
    </section>

<div class="container">

    <div class="section featureds">
        <div class="row">
            <div class="col-sm-12">
                <div class="featured-top">
                    <h4>Featured Ads</h4>
                </div>
            </div>
        </div>

        <div class="featured-slider">
            <div id="featured-slider-two">

                @foreach ($ads as $item)
                <div class="featured">
                    <a href="{{ route('ads-details', ['id' => $item->id]) }}"><div class="featured-image" style="background-image:url({{ asset('/uploads/featurd/' . $item->imageLink) }})"></div></a>

                    <div class="ad-info">
                       
                        <h4 class="item-title"><a href="#"><a href="{{ route('ads-details', ['id' => $item->id]) }}">{{$item->title}}</a></h4>
                        <h6 class="item-price">LKR {{$item->price}}</h5>
                        <div class="item-cat">
                            <span><a href="#">{{$item->cname}}>{{$item->subname}}</a></span>
                        </div>
                    </div>

                    <div class="ad-meta">
                        <div class="meta-content">
                            <span class="dated"><a href="#">{{(explode(" ",$item->updated_at)[0])}} </a></span>
                        </div>

                        <div class="user-option pull-right">
                            <a href="#" data-toggle="tooltip" data-placement="top"
                                title="{{$item->cname}}>{{$item->subname}}"><i class="fa fa-map-marker"></i> </a>
                         
                        </div>
                    </div>
                </div>
                @endforeach
                
                
           
        </div>
    </div>

    <div class="ad-section text-center">
        <a href="#"><img src="home/images/ads/3.jpg" alt="Image" class="img-fluid"></a>
    </div>

    <div class="section trending-ads">
        <div class="section-title tab-manu">
            <h4>Trending Ads</h4>

            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a class="active" href="#recent-ads" data-toggle="tab">Recent
                        Ads</a></li>
                <li role="presentation"><a href="#popular" data-toggle="tab">Popular Ads</a></li>
                <li role="presentation"><a href="#hot-ads" data-toggle="tab">Hot Ads</a></li>
            </ul>
        </div>

        <div class="tab-content">

            <div role="tabpanel" class="tab-pane fade in active show" id="recent-ads">

                <div class="ad-item row">

                    <div class="item-image-box col-md-5 col-lg-3">
                        <div class="item-image">
                            <a href="details.html"><img src="home/images/listing/1.jpg" alt="Image"
                                    class="img-fluid"></a>
                            <a href="#" class="verified" data-toggle="tooltip" data-placement="left"
                                title="Verified"><i class="fa fa-check-square-o"></i></a>
                        </div>
                    </div>

                    <div class="item-info col-md-7 col-lg-9">

                        <div class="ad-info">
                            <h3 class="item-price">$50.00</h3>
                            <h4 class="item-title"><a href="#">Apple TV - Everything you need to know!</a>
                            </h4>
                            <div class="item-cat">
                                <span><a href="#">Electronics & Gedgets</a></span> /
                                <span><a href="#">Tv & Video</a></span>
                            </div>
                        </div>

                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                                <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                            </div>

                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a class="online" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Dealer"><i class="fa fa-suitcase"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ad-item row">
                    <div class="item-image-box col-md-5 col-lg-3">

                        <div class="item-image">
                            <a href="details.html"><img src="home/images/trending/2.jpg" alt="Image"
                                    class="img-fluid"></a>
                        </div>
                    </div>

                    <div class="item-info col-md-7 col-lg-9">

                        <div class="ad-info">
                            <h3 class="item-price">$250.00 <span>(Negotiable)</span></h3>
                            <h4 class="item-title"><a href="#">Bark Furniture, Handmade Bespoke
                                    Furniture</a></h4>
                            <div class="item-cat">
                                <span><a href="#">Home Appliances</a></span> /
                                <span><a href="#">Sofa</a></span>
                            </div>
                        </div>

                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                                <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                            </div>

                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a class="online" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Dealer"><i class="fa fa-suitcase"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ad-item row">
                    <div class="item-image-box col-md-5 col-lg-3">

                        <div class="item-image">
                            <a href="details.html"><img src="home/images/trending/4.jpg" alt="Image"
                                    class="img-fluid"></a>
                            <a href="#" class="verified" data-toggle="tooltip" data-placement="left"
                                title="Verified"><i class="fa fa-check-square-o"></i></a>
                        </div>
                    </div>

                    <div class="item-info col-md-7 col-lg-9">

                        <div class="ad-info">
                            <h3 class="item-price">$800.00</h3>
                            <h4 class="item-title"><a href="#">Rick Morton- Magicius Chase</a></h4>
                            <div class="item-cat">
                                <span><a href="#">Books & Magazines</a></span> /
                                <span><a href="#">Story book</a></span>
                            </div>
                        </div>

                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                                <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                            </div>

                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i
                                        class="fa fa-user"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ad-item row">
                    <div class="item-image-box col-md-5 col-lg-3">

                        <div class="item-image">
                            <a href="details.html"><img src="home/images/trending/3.jpg" alt="Image"
                                    class="img-fluid"></a>
                        </div>
                    </div>

                    <div class="item-info col-md-7 col-lg-9">

                        <div class="ad-info">
                            <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                            <h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
                            <div class="item-cat">
                                <span><a href="#">Electronics & Gedgets</a></span> /
                                <span><a href="#">Mobile Phone</a></span>
                            </div>
                        </div>

                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                                <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                            </div>

                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i
                                        class="fa fa-suitcase"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="popular">
                <div class="ad-item row">
                    <div class="item-image-box col-md-5 col-lg-3">

                        <div class="item-image">
                            <a href="details.html"><img src="home/images/trending/3.jpg" alt="Image"
                                    class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="item-info col-md-7 col-lg-9">

                        <div class="ad-info">
                            <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                            <h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
                            <div class="item-cat">
                                <span><a href="#">Electronics & Gedgets</a></span> /
                                <span><a href="#">Mobile Phone</a></span>
                            </div>
                        </div>

                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                                <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                            </div>

                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i
                                        class="fa fa-suitcase"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ad-item row">
                    <div class="item-image-box col-md-5 col-lg-3">

                        <div class="item-image">
                            <a href="details.html"><img src="home/images/trending/2.jpg" alt="Image"
                                    class="img-fluid"></a>
                        </div>
                    </div>

                    <div class="item-info col-md-7 col-lg-9">

                        <div class="ad-info">
                            <h3 class="item-price">$250.00 <span>(Negotiable)</span></h3>
                            <h4 class="item-title"><a href="#">Bark Furniture, Handmade Bespoke
                                    Furniture</a></h4>
                            <div class="item-cat">
                                <span><a href="#">Home Appliances</a></span> /
                                <span><a href="#">Sofa</a></span>
                            </div>
                        </div>

                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                                <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                            </div>

                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a class="online" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Dealer"><i class="fa fa-suitcase"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ad-item row">

                    <div class="item-image-box col-md-5 col-lg-3">
                        <div class="item-image">
                            <a href="details.html"><img src="home/images/trending/1.jpg" alt="Image"
                                    class="img-fluid"></a>
                            <a href="#" class="verified" data-toggle="tooltip" data-placement="left"
                                title="Verified"><i class="fa fa-check-square-o"></i></a>
                        </div>
                    </div>

                    <div class="item-info col-md-7 col-lg-9">

                        <div class="ad-info">
                            <h3 class="item-price">$50.00</h3>
                            <h4 class="item-title"><a href="#">Apple TV - Everything you need to know!</a>
                            </h4>
                            <div class="item-cat">
                                <span><a href="#">Electronics & Gedgets</a></span> /
                                <span><a href="#">Tv & Video</a></span>
                            </div>
                        </div>

                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                                <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                            </div>

                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a class="online" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Dealer"><i class="fa fa-suitcase"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ad-item row">
                    <div class="item-image-box col-md-5 col-lg-3">

                        <div class="item-image">
                            <a href="details.html"><img src="home/images/trending/4.jpg" alt="Image"
                                    class="img-fluid"></a>
                            <a href="#" class="verified" data-toggle="tooltip" data-placement="left"
                                title="Verified"><i class="fa fa-check-square-o"></i></a>
                        </div>
                    </div>

                    <div class="item-info col-md-7 col-lg-9">

                        <div class="ad-info">
                            <h3 class="item-price">$800.00</h3>
                            <h4 class="item-title"><a href="#">Rick Morton- Magicius Chase</a></h4>
                            <div class="item-cat">
                                <span><a href="#">Books & Magazines</a></span> /
                                <span><a href="#">Story book</a></span>
                            </div>
                        </div>

                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                                <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                            </div>

                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i
                                        class="fa fa-user"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="hot-ads">
                <div class="ad-item row">
                    <div class="item-image-box col-md-5 col-lg-3">

                        <div class="item-image">
                            <a href="details.html"><img src="home/images/trending/4.jpg" alt="Image"
                                    class="img-fluid"></a>
                            <a href="#" class="verified" data-toggle="tooltip" data-placement="left"
                                title="Verified"><i class="fa fa-check-square-o"></i></a>
                        </div>
                    </div>

                    <div class="item-info col-md-7 col-lg-9">

                        <div class="ad-info">
                            <h3 class="item-price">$800.00</h3>
                            <h4 class="item-title"><a href="#">Rick Morton- Magicius Chase</a></h4>
                            <div class="item-cat">
                                <span><a href="#">Books & Magazines</a></span> /
                                <span><a href="#">Story book</a></span>
                            </div>
                        </div>

                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                                <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                            </div>

                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i
                                        class="fa fa-user"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ad-item row">

                    <div class="item-image-box col-md-5 col-lg-3">
                        <div class="item-image">
                            <a href="details.html"><img src="home/images/trending/1.jpg" alt="Image"
                                    class="img-fluid"></a>
                            <a href="#" class="verified" data-toggle="tooltip" data-placement="left"
                                title="Verified"><i class="fa fa-check-square-o"></i></a>
                        </div>
                    </div>

                    <div class="item-info col-md-7 col-lg-9">

                        <div class="ad-info">
                            <h3 class="item-price">$50.00</h3>
                            <h4 class="item-title"><a href="#">Apple TV - Everything you need to know!</a>
                            </h4>
                            <div class="item-cat">
                                <span><a href="#">Electronics & Gedgets</a></span> /
                                <span><a href="#">Tv & Video</a></span>
                            </div>
                        </div>

                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                                <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                            </div>

                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a class="online" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Dealer"><i class="fa fa-suitcase"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ad-item row">
                    <div class="item-image-box col-md-5 col-lg-3">

                        <div class="item-image">
                            <a href="details.html"><img src="home/images/trending/3.jpg" alt="Image"
                                    class="img-fluid"></a>
                        </div>
                    </div>

                    <div class="item-info col-md-7 col-lg-9">

                        <div class="ad-info">
                            <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                            <h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
                            <div class="item-cat">
                                <span><a href="#">Electronics & Gedgets</a></span> /
                                <span><a href="#">Mobile Phone</a></span>
                            </div>
                        </div>

                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                                <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                            </div>

                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i
                                        class="fa fa-suitcase"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ad-item row">
                    <div class="item-image-box col-md-5 col-lg-3">

                        <div class="item-image">
                            <a href="details.html"><img src="home/images/trending/2.jpg" alt="Image"
                                    class="img-fluid"></a>
                        </div>
                    </div>

                    <div class="item-info col-md-7 col-lg-9">

                        <div class="ad-info">
                            <h3 class="item-price">$250.00 <span>(Negotiable)</span></h3>
                            <h4 class="item-title"><a href="#">Bark Furniture, Handmade Bespoke
                                    Furniture</a></h4>
                            <div class="item-cat">
                                <span><a href="#">Home Appliances</a></span> /
                                <span><a href="#">Sofa</a></span>
                            </div>
                        </div>

                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
                                <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                            </div>

                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a class="online" href="#" data-toggle="tooltip" data-placement="top"
                                    title="Dealer"><i class="fa fa-suitcase"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cta text-center">
        <div class="row">

            <div class="col-md-4">
                <div class="single-cta">

                    <div class="cta-icon icon-secure">
                        <img src="home/images/icon/13.png" alt="Icon" class="img-fluid">
                    </div>
                    <h4>Secure Trading</h4>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="single-cta">

                    <div class="cta-icon icon-support">
                        <img src="home/images/icon/14.png" alt="Icon" class="img-fluid">
                    </div>
                    <h4>24/7 Support</h4>
                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="single-cta">

                    <div class="cta-icon icon-trading">
                        <img src="home/images/icon/15.png" alt="Icon" class="img-fluid">
                    </div>
                    <h4>Easy Trading</h4>
                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


        
@endsection 