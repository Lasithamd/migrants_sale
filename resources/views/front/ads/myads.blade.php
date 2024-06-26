@extends('layout.app')@section('content')
<section id="main" class="clearfix myads-page">
    <div class="container">
        <div class="breadcrumb-section">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Ad Post</li>
            </ol>
            <h2 class="title">My Ads</h2>
        </div>
        <div class="ad-profile section">
            <div class="user-profile">
                <div class="user-images"> <img src="images/user.jpg" alt="User Images" class="img-fluid"> </div>
                <div class="user">
                    <h2>Hello, <a href="#">Jhon Doe</a></h2>
                    <h5>You last logged in at: 14-01-2018 6:40 AM [ USA time (GMT + 6:00hrs)]</h5>
                </div>
                <div class="favorites-user">
                    <div class="my-ads"> <a href="my-ads.html">23<small>My ADS</small></a> </div>
                    <div class="favorites"> <a href="#">18<small>Favorites</small></a> </div>
                </div>
            </div>
            <ul class="user-menu">
                <li><a href="my-profile.html">Profile</a></li>
                <li class="active"><a href="my-ads.html">My ads</a></li>
                <li><a href="favourite-ads.html">Favourite ads</a></li>
                <li><a href="archived-ads.html">Archived ads </a></li>
                <li><a href="pending-ads.html">Pending approval</a></li>
                <li><a href="delete-account.html">Close account</a></li>
            </ul>
        </div>
        <div class="ads-info">
            <div class="row">
                <div class="col-md-8">
                    <div class="my-ads section">
                        <h2>My ads</h2>
                        @foreach ($adsData as $item)
                            <div class="ad-item row">
                                <div class="item-image-box col-lg-4">
                                    <div class="item-image">
                                        @foreach ($image as $img)
                                            @if ($item->id == $img->ads_id)
                                                <a href="details.html"><img src="{{ asset('/uploads/featurd/' . $img->link) }}"
                                                        alt="Image" class="img-fluid">{{ $img->name }}</a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="item-info col-lg-8">
                                    <div class="ad-info">
                                        <h3 class="item-price">LKR {{ $item->price }}</h3>
                                        <h4 class="item-title"><a href="#">{{ $item->title }}</a> </h4>
                                        <div class="item-cat"> <span><a href="#">{{ $item->cname }}</a></span> /
                                            <span><a href="#">{{ $item->subname }}</a></span> </div>
                                    </div>
                                    <div class="ad-meta">
                                        <div class="meta-content"> <span class="dated">Posted On: <a
                                                    href="#">{{ $item->created_at }} </a></span> <span
                                                class="visitors">Visitors: 221</span> </div>
                                        <div class="user-option pull-right"> <a class="edit-item" href="#"
                                                data-toggle="tooltip" data-placement="top" title="Edit this ad"><i
                                                    class="fa fa-pencil"></i></a> <a class="delete-item" href="#"
                                                data-toggle="tooltip" data-placement="top" title="Delete this ad"><i
                                                    class="fa fa-times"></i></a> </div>
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
                                <div class="cta-icon icon-secure"> <img src="images/icon/13.png" alt="Icon"
                                        class="img-fluid"> </div>
                                <h4>Secure Trading</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                            <div class="single-cta">
                                <div class="cta-icon icon-support"> <img src="images/icon/14.png" alt="Icon"
                                        class="img-fluid"> </div>
                                <h4>24/7 Support</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                            <div class="single-cta">
                                <div class="cta-icon icon-trading"> <img src="images/icon/15.png" alt="Icon"
                                        class="img-fluid"> </div>
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
@endsection
