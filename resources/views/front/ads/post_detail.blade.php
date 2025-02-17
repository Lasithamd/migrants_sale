@extends('layout.app')
@section('content')
    <section id="main" class="clearfix ad-details-page">
        <div class="container">
            <div class="breadcrumb-section">

                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Ad Post</li>
                </ol>
                <h2 class="title">Mobile Phones</h2>
            </div>
            <div class="adpost-details">
                <div class="row">
                    <div class="col-lg-8">
                        <form action="#">
                            <fieldset>
                                <div class="section postdetails">
                                    <h4>Sell an item or service <span class="pull-right">* Mandatory Fields</span></h4>
                                    <div class="form-group selected-product">
                                        <ul class="select-category list-inline">
                                            <li>
                                                <a href="ad-post.html">
                                                    <span class="select">
                                                        <img src="images/icon/2.png" alt="Images" class="img-fluid">
                                                    </span>
                                                    Electronics & Gedgets
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="#">Phablet & Tablets</a>
                                            </li>
                                        </ul>
                                        <a class="edit" href="#"><i class="fa fa-pencil"></i>Edit</a>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3">Type of ad<span class="required">*</span></label>
                                        <div class="col-sm-9 user-type">
                                            <input type="radio" name="sellType" value="newsell" id="newsell"> <label
                                                for="newsell">I want to sell </label>
                                            <input type="radio" name="sellType" value="newbuy" id="newbuy"> <label
                                                for="newbuy">want to rent</label>
                                        </div>
                                    </div>
                                    <div class="row form-group add-title">
                                        <label class="col-sm-3 label-title">Title for your Ad<span
                                                class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="text"
                                                placeholder="ex, Sony Xperia dual sim 100% brand new ">
                                        </div>
                                    </div>
                                    <div class="row form-group add-image">
                                        <label class="col-sm-3 label-title">Photos for your ad <span>(This will be your
                                                cover photo )</span> </label>
                                        <div class="col-sm-9">
                                            <h5><i class="fa fa-upload" aria-hidden="true"></i>Select Files to Upload / Drag
                                                and Drop Files <span>You can add multiple images.</span></h5>
                                            <div class="upload-section">
                                                <label class="upload-image" for="upload-image-one">
                                                    <input type="file" id="upload-image-one">
                                                </label>
                                                <label class="upload-image" for="upload-image-two">
                                                    <input type="file" id="upload-image-two">
                                                </label>
                                                <label class="upload-image" for="upload-image-three">
                                                    <input type="file" id="upload-image-three">
                                                </label>
                                                <label class="upload-image" for="upload-imagefour">
                                                    <input type="file" id="upload-imagefour">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group select-condition">
                                        <label class="col-sm-3">Condition<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="radio" name="itemCon" value="new" id="new">
                                            <label for="new">New</label>
                                            <input type="radio" name="itemCon" value="used" id="used">
                                            <label for="used">Used</label>
                                        </div>
                                    </div>
                                    <div class="row form-group select-price">
                                        <label class="col-sm-3 label-title">Price<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <label>LKR</label>
                                            <input type="text" class="form-control" id="text1">
                                            <input type="radio" name="price" value="negotiable" id="negotiable">
                                            <label for="negotiable">Negotiable </label>
                                        </div>
                                    </div>
                                    <div class="row form-group brand-name">
                                        <label class="col-sm-3 label-title">Brand Name<span
                                                class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="ex, Sony Xperia">
                                        </div>
                                    </div>
                                    <div class="row form-group additional">
                                        <label class="col-sm-3 label-title">Additional<span
                                                class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="checkbox">
                                                <label for="camera"><input type="checkbox" name="camera"
                                                        id="camera"> Camera</label>
                                                <label for="dual-sim"><input type="checkbox" name="dual-sim"
                                                        id="dual-sim"> Dual SIM</label>
                                                <label for="keyboard"><input type="checkbox" name="keyboard"
                                                        id="keyboard"> Physical keyboard</label>
                                                <label for="3g"><input type="checkbox" name="3g"
                                                        id="3g"> 3G</label>
                                                <label for="gsm"><input type="checkbox" name="gsm"
                                                        id="gsm"> GSM</label>
                                                <label for="screen"><input type="checkbox" name="screen"
                                                        id="screen"> Touch screen</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group model-name">
                                        <label class="col-sm-3 label-title">Model</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="model"
                                                placeholder="ex, Sony Xperia dual sim 100% brand new ">
                                        </div>
                                    </div>
                                    <div class="row form-group item-description">
                                        <label class="col-sm-3 label-title">Description<span
                                                class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="textarea" placeholder="Write few lines about your products" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9 offset-sm-3">
                                            <p>5000 characters left</p>
                                        </div>
                                    </div>
                                </div>

                                
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
                            </fieldset>
                        </form>
                    </div>

                    <div class="col-lg-4">

                        <div class="section next-stap post-option">
                            <h2>Post an Ad in just <span>30 seconds</span></h2>
                            <div class="section">
                                <h4>Make your Ad Premium </h4>
                                
                                <ul class="premium-options">
                                    <li class="premium">
                                        <input type="radio" name="premiumOption" value="day-one" id="day-one">
                                        <label for="day-one">Regular Ad Per Day</label>
                                        <span>$20.00</span>
                                    </li>
                                    <li class="premium">
                                        <input type="radio" name="premiumOption" value="day-two" id="day-two">
                                        <label for="day-two">Top Ad for 3 days</label>
                                        <span>$30.00</span>
                                    </li>
                                    <li class="premium">
                                        <input type="radio" name="premiumOption" value="day-three" id="day-three">
                                        <label for="day-three">Top Ad for 7 days</label>
                                        <span>$50.00</span>
                                    </li>
                                    <li class="premium">
                                        <input type="radio" name="premiumOption" value="day-four" id="day-four">
                                        <label for="day-four">Daily Bump Up for 7 days</label>
                                        <span>$100.00</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-section">
                                <button type="submit" class="btn btn-primary">Post Your Ad</button>
                                <a href="#" class="btn-info">or Cancle</a>
                            </div>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
