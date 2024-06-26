@extends('layout.app')
@section('content')
    <section id="main" class="clearfix ad-details-page">
        <div class="container">
            <div class="breadcrumb-section">

                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Ad Post</li>
                </ol>
                <h2 class="title">{{ $subcategories->name }}</h2>
            </div>
            <div class="adpost-details">
                <div class="row">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-lg-8">
                        <form action="{{ route('final-step', ['id' => $ads['id']]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <fieldset>
                                <div class="section postdetails">
                                    <h4>Sell an item or service <span class="pull-right"><i class="fa fa-map-marker"
                                                aria-hidden="true"></i> {{ $location->name_en }}</span></h4>
                                    <div class="form-group selected-product">
                                        <ul class="select-category list-inline">
                                            <li>
                                                <a href="ad-post.html">
                                                    <span class="select">
                                                        <img src="{{ asset('home/images/icon/' . $categories->image . '.png') }}"
                                                            alt="Images" class="img-fluid">
                                                    </span>
                                                    {{ $categories->name }}
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="#">{{ $subcategories->name }}</a>
                                            </li>
                                            <li class="active">
                                                <a href="#">{{ $ads['title'] }}</a>
                                            </li>
                                        </ul>
                                        <a class="edit" href="#"><i class="fa fa-pencil"></i>Edit</a>
                                    </div>

                                    <div class="row form-group add-image">
                                        <label class="col-sm-3 label-title">Featured Image <span>(This will be your
                                                cover photo )</span> </label>
                                        <div class="col-sm-9">
                                            <h5><i class="fa fa-upload" aria-hidden="true"></i>Select Files to Upload /
                                                Drag and Drop Files <span>You can add single image.</span></h5>
                                            <div class="upload-section">
                                                <label class="upload-image" for="upload-image-featured">
                                                    <input type="file" id="upload-image-featured" name="image0">
                                                </label>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group add-image">
                                        <label class="col-sm-3 label-title">Photos for your ad <span>(This will be your
                                                gallery photo )</span> </label>
                                        <div class="col-sm-9">
                                            <h5><i class="fa fa-upload" aria-hidden="true"></i>Select Files to Upload /
                                                Drag and Drop Files <span>You can add multiple images.</span></h5>
                                            <div class="upload-section">
                                                <label class="upload-image" for="upload-image-one">
                                                    <input type="file" id="upload-image-one" name="image1">
                                                </label>
                                                <label class="upload-image" for="upload-image-two">
                                                    <input type="file" id="upload-image-two" name="image2">
                                                </label>
                                                <label class="upload-image" for="upload-image-three">
                                                    <input type="file" id="upload-image-three" name="image3">
                                                </label>
                                                <label class="upload-image" for="upload-imagefour">
                                                    <input type="file" id="upload-imagefour" name="image4">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <h4>Seller Information</h4>

                                    <div class="row form-group">
                                        <label class="col-sm-3 label-title">Your Name<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="ex, Jhon Doe">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 label-title">Your Email ID<span
                                                class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="ex, jhondoe@mail.com">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 label-title">Mobile Number<span
                                                class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mobileNumber" class="form-control"
                                                placeholder="ex, +912457895">
                                        </div>
                                    </div>

                                </div>

                                <div class="checkbox section agreement">
                                    <label for="send">
                                        <input type="checkbox" name="send" id="send">
                                        Send me Migrants Sale Email/SMS Alerts for people looking to buy mobile handsets in www By
                                        clicking "Post"
                                    </label>
                                    <button type="submit" class="btn btn-primary">Post Your Ad</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>

                    <div class="col-lg-4">
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
