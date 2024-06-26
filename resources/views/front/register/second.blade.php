@extends('layout.app')
@section('content')
<section id="main" class="clearfix ad-details-page">
    <div class="container">
        <div class="breadcrumb-section">            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Ad Post</li>
            </ol>
            <h2 class="title">{{ $subcategories->name }}</h2>
        </div>
        <div class="adpost-details">
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ route('resgister-third') }}" method="POST">
                        @csrf
                        <fieldset>
                            <div class="hidden">
                                <input type="text" name="sub_category_id" id="" value="{{ $subcategories->id }}" hidden>
                                <input type="text" name="category_id" id="" value="{{ $categories->id }}" hidden>
                                <input type="text" name="city_id" value="{{$location->id}}" hidden>
                            </div>
                            <div class="section postdetails">                                <div class="form-group selected-product">
                                    <ul class="select-category list-inline">
                                        <li>
                                            <a href="ad-post.html">
                                                <span class="select">
                                                    <img src="{{ asset('home/images/icon/' . $categories->image . '.png') }}" alt="Images" class="img-fluid">
                                                </span>
                                                {{ $categories->name }}
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="#">{{ $subcategories->name }}</a>
                                        </li>
                                    </ul>
                                    <a class="edit" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$location->name_en}}</span></a>
                                </div>
                                @include('front.forms.vehicle')
                                <div class="row section agreement">
                                    <button type="submit" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>                <div class="col-lg-4">
                    <div class="section quick-rules">
                        <h4>Quick rules</h4>
                        <p class="lead">Posting an ad on <a href="#">Migrants Sale.com</a> is free! However, all ads
                            must follow our rules:</p>
                        <ul>
                            <li>Make sure you post in the correct category.</li>
                            <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                            <li>Do not upload pictures with watermarks.</li>
                            <li>Do not post ads containing multiple items unless it's a package deal.</li>
                            <li>Do not put your email or phone numbers in the title or description.</li>
                            <li>Make sure you post in the correct category.</li>
                            <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                            <li>Do not upload pictures with watermarks.</li>
                            <li>Do not post ads containing multiple items unless it's a package deal.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection