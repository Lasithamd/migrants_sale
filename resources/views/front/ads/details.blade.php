@extends('layout.app')
@section('content')
    <section id="main" class="clearfix details-page">
        <div class="container">
            <div class="breadcrumb-section">

                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Electronics & Gedget</a></li>
                    <li>Mobile Phone</li>
                </ol>
                <h2 class="title">Mobile Phones</h2>
            </div>
            <div class="section banner">

                <div class="banner-form banner-form-full">
                    <form action="#">

                        <div class="dropdown category-dropdown">
                            <a data-toggle="dropdown" href="#"><span class="change-text">Select Category</span> <i
                                    class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu category-change">
                                <li><a href="#">Fashion & Beauty</a></li>
                                <li><a href="#">Cars & Vehicles</a></li>
                                <li><a href="#">Electronics & Gedgets</a></li>
                                <li><a href="#">Real Estate</a></li>
                                <li><a href="#">Sports & Games</a></li>
                            </ul>
                        </div>

                        <div class="dropdown category-dropdown language-dropdown ">
                            <a data-toggle="dropdown" href="#"><span class="change-text">United Kingdom</span> <i
                                    class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu  language-change">
                                <li><a href="#">United Kingdom</a></li>
                                <li><a href="#">United States</a></li>
                                <li><a href="#">China</a></li>
                                <li><a href="#">Russia</a></li>
                            </ul>
                        </div>
                        <input type="text" class="form-control" placeholder="Type Your key word">
                        <button type="submit" class="form-control" value="Search">Search</button>
                    </form>
                </div>
            </div>
            <div class="section slider">
                <div class="row">

                    <div class="col-lg-7">
                        <div id="product-carousel" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <?php $count = 0; ?>
                                @foreach ($image as $img)
                                    @if ($count == 0)
                                        <li data-target="#product-carousel" data-slide-to="<?php echo $count;
                                        $count++; ?>"
                                            class="active">
                                            <img src="{{ asset('/uploads/gallery/' . $img->link) }}" alt="Carousel Thumb"
                                                class="img-fluid">
                                        </li>
                                    @elseif ($count != 0)
                                        <li data-target="#product-carousel" data-slide-to="<?php echo $count;
                                        $count++; ?>">
                                            <img src="{{ asset('/uploads/gallery/' . $img->link) }}" alt="Carousel Thumb"
                                                class="img-fluid">
                                        </li>
                                    @endif
                                @endforeach

                            </ol>

                            <div class="carousel-inner" role="listbox">
                                <?php $count = 0; ?>
                                @foreach ($image as $img)
                                    @if ($count == 0)
                                        <div class="item carousel-item active">
                                            <div class="carousel-image">

                                                <img src="{{ asset('/uploads/gallery/' . $img->link) }}" alt="Featured Image"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    @elseif ($count != 0)
                                        <div class="item carousel-item ">
                                            <div class="carousel-image">

                                                <img src="{{ asset('/uploads/gallery/' . $img->link) }}" alt="Featured Image"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    @endif
                                    <?php $count++; ?>
                                @endforeach

                            </div>

                            <a class="left carousel-control" href="#product-carousel" role="button" data-slide="prev">
                                <i class="fa fa-chevron-left"></i>
                            </a>
                            <a class="right carousel-control" href="#product-carousel" role="button" data-slide="next">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="slider-text">
                           
                            <h3 class="title">{{$ad->title}}</h3>
                            <h5>LKR {{$ad->price}}</h5>
                            <span class="icon"><i class="fa fa-clock-o"></i><a href="#"> {{$ad->created_at}} </a></span>
                            <span class="icon"><i class="fa fa-map-marker"></i><a href="#"> </a></span>
                      
                                    

                            <div class="short-info">
                               
                                <p><strong>Condition: </strong><a href="#">New</a> </p>
                                <p><strong>Brand: </strong><a href="#">Apple</a> </p>
                                <p><strong>Features: </strong><a href="#">Camera,</a> <a href="#">Dual
                                        SIM,</a> <a href="#">GSM,</a> <a href="#">Touch screen</a> </p>
                                <p><strong>Model: </strong><a href="#">iPhone 6</a></p>
                            </div>

                            <div class="contact-with">
                                <h4>Contact with </h4>
                                <span class="btn btn-red show-number">
                                    <i class="fa fa-phone-square"></i>
                                    <span class="hide-text">Click to show phone number </span>
                                    <span class="hide-number">012-1234567890</span>
                                </span>
                              
                            </div>

                            <div class="social-links">
                                <h4>Share this ad</h4>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-tumblr-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description-info">
                <div class="row">

                    <div class="col-md-8">
                        <div class="description">
                            <h4>Description</h4>
                            <p>{{$ad->description}}</p><br>
                           
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="short-info">
                            <h4>Short Info</h4>

                            <ul>
                                <li><i class="fa fa-shopping-cart"></i><a href="#">Delivery: Meet in person</a></li>
                                <li><i class="fa fa-user-plus"></i><a href="#">More ads by <span>Yury
                                            Corporation</span></a></li>
                                <li><i class="fa fa-print"></i><a href="#">Print this ad</a></li>
                                <li><i class="fa fa-reply"></i><a href="#">Send to a friend</a></li>
                                <li><i class="fa fa-heart-o"></i><a href="#">Save ad as Favorite</a></li>
                                <li><i class="fa fa-exclamation-triangle"></i><a href="#">Report this ad</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommended-info">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section recommended-ads">
                            <div class="featured-top">
                                <h4>Recommended Ads for You</h4>
                            </div>
                            @foreach($adsData as $item)
                            <div class="ad-item row">

                                <div class="item-image-box col-lg-4">
                                    <div class="item-image">
                                        <a href="details.html">
                                            @foreach ($profile as $img)
                                            @if ($item->id == $img->ads_id)
                                            <img src="{{ asset('/uploads/featurd/' . $img->link) }}" alt="Image"
                                                class="img-fluid"></a>
                                                @endif
                                                @endforeach
                                    </div>
                                </div>
                                <div class="item-info col-lg-8">

                                    <div class="ad-info">
                                        <h3 class="item-price">LKR {{ $item->price }}</h3>
                                        <h4 class="item-title"><a href="#">{{$item->title}}</a></h4>
                                        <div class="item-cat">
                                            <span><a href="#">Electronics & Gedgets</a></span> /
                                            <span><a href="#">Tv & Video</a></span>
                                        </div>
                                    </div>

                                    <div class="ad-meta">
                                        <div class="meta-content">
                                            <span class="dated"><a href="#">{{ $item->updated_at }} </a></span>
                                            <a href="#" class="tag"><i class="fa fa-tags"></i> New</a>
                                        </div>

                                        <div class="user-option pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                            <a class="online" href="#" data-toggle="tooltip" data-placement="top"
                                                title="Individual"><i class="fa fa-user"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="recommended-cta">
                            <div class="cta">

                                <div class="single-cta">

                                    <div class="cta-icon icon-secure">
                                        <img src="images/icon/13.png" alt="Icon" class="img-fluid">
                                    </div>
                                    <h4>Secure Trading</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div>

                                <div class="single-cta">

                                    <div class="cta-icon icon-support">
                                        <img src="images/icon/14.png" alt="Icon" class="img-fluid">
                                    </div>
                                    <h4>24/7 Support</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div>

                                <div class="single-cta">

                                    <div class="cta-icon icon-trading">
                                        <img src="images/icon/15.png" alt="Icon" class="img-fluid">
                                    </div>
                                    <h4>Easy Trading</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                </div>

                                <div class="single-cta">
                                    <h5>Need Help?</h5>
                                    <p><span>Give a call on</span><a href="tellto:08048100000"> 08048100000</a></p>
                                </div>
                            </div>
                        </div>
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
                    <h4>Post your ad for free on Migrants Sale.com</h4>
                    <a href="ad-post.html" class="btn btn-primary">Post Your Ad</a>
                </div>
            </div>
        </div>
    </section>
@endsection
