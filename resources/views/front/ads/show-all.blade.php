@extends('layout.app')
@section('content')
<section id="main" class="clearfix category-page main-categories">
    <div class="container">
        <div class="breadcrumb-section">

            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Electronics & Gedget</li>
            </ol>
            <h2 class="title">Mobile Phones</h2>
        </div>
        <div class="banner">

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
        <div class="category-info">
            <div class="row">

                <div class="col-lg-3 col-md-4">
                    <div class="category-accordion tr-accordion" id="accordion">
                        <div class="card">
                            <div class="card-header" id="heading-1">
                                <button data-toggle="collapse" data-target="#collapse-1" aria-expanded="true"
                                    aria-controls="collapse-1">All Categories</button>
                            </div>
                            <div id="collapse-1" class="collapse show" aria-labelledby="heading-1"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li><a href="categories.html"><i
                                                    class="icofont icofont-laptop-alt"></i>Electronics &
                                                Gedget<span>(1029)</span></a></li>
                                        <li><a href="#"><i class="icofont icofont-police-car-alt-2"></i>Cars &
                                                Vehicles<span>(1228)</span></a></li>
                                        <li><a href="#"><i
                                                    class="icofont icofont-building-alt"></i>Property<span>(178)</span></a>
                                        </li>
                                        <li><a href="#"><i class="icofont icofont-ui-home"></i>Home &
                                                Garden<span>(7163)</span></a></li>
                                        <li><a href="#"><i class="icofont icofont-animal-dog"></i>Pets &
                                                Animals<span>(8709)</span></a></li>
                                        <li><a href="#"><i class="icofont icofont-nurse"></i>Health &
                                                Beauty<span>(3129)</span></a></li>
                                        <li><a href="#"><i class="icofont icofont-hockey"></i>Hobby, Sport &
                                                Kids<span>(2019)</span></a></li>
                                        <li><a href="#"><i class="icofont icofont-burger"></i>Food &
                                                Agriculture<span>(323)</span></a></li>
                                        <li><a href="#"><i class="icofont icofont-girl-alt"></i>Women &
                                                Children<span>(425)</span></a></li>
                                        <li><a href="#"><i class="icofont icofont-gift"></i>Gift &
                                                Presentation<span>(3223)</span></a></li>
                                        <li><a href="#"><i class="icofont icofont-architecture-alt"></i>Office
                                                Product<span>(3283)</span></a></li>
                                        <li><a href="#"><i class="icofont icofont-animal-cat-alt-1"></i>Arts,
                                                Crafts & Sewing<span>(3221)</span></a></li>
                                        <li><a href="#"><i
                                                    class="icofont icofont-abc"></i>Others<span>(3129)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-2">
                                <button class="collapsed" data-toggle="collapse" data-target="#collapse-2"
                                    aria-expanded="false" aria-controls="collapse-2">Condition</button>
                            </div>
                            <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <label for="new"><input type="checkbox" name="new" id="new">
                                        New</label>
                                    <label for="used"><input type="checkbox" name="used" id="used">
                                        Used</label>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-3">
                                <button class="collapsed" data-toggle="collapse" data-target="#collapse-3"
                                    aria-expanded="false" aria-controls="collapse-3">Price</button>
                            </div>
                            <div id="collapse-3" class="collapse" aria-labelledby="heading-3"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <div class="price-range">
                                        <div class="price">
                                            <span>$100 - <strong>$700</strong></span>
                                            <div class="dropdown category-dropdown pull-right">
                                                <a data-toggle="dropdown" href="#"><span
                                                        class="change-text">USD</span><i
                                                        class="fa fa-caret-square-o-down"></i></a>
                                                <ul class="dropdown-menu category-change">
                                                    <li><a href="#">$05</a></li>
                                                    <li><a href="#">$10</a></li>
                                                    <li><a href="#">$15</a></li>
                                                    <li><a href="#">$20</a></li>
                                                    <li><a href="#">$25</a></li>
                                                </ul>
                                            </div>
                                            <input type="text" value data-slider-min="0" data-slider-max="700"
                                                data-slider-step="5" data-slider-value="[250,450]"
                                                id="price"><br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-4">
                                <button class="collapsed" data-toggle="collapse" data-target="#collapse-4"
                                    aria-expanded="false" aria-controls="collapse-4">Posted By</button>
                            </div>
                            <div id="collapse-4" class="collapse" aria-labelledby="heading-4"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <label for="individual"><input type="checkbox" name="individual"
                                            id="individual"> Individual</label>
                                    <label for="dealer"><input type="checkbox" name="dealer" id="dealer">
                                        Dealer</label>
                                    <label for="reseller"><input type="checkbox" name="reseller" id="reseller">
                                        Reseller</label>
                                    <label for="manufacturer"><input type="checkbox" name="manufacturer"
                                            id="manufacturer"> Manufacturer</label>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading-5">
                                <button class="collapsed" data-toggle="collapse" data-target="#collapse-5"
                                    aria-expanded="false" aria-controls="collapse-5">Posted By</button>
                            </div>
                            <div id="collapse-5" class="collapse" aria-labelledby="heading-5"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <input type="text" placeholder="Search Brand" class="form-control">
                                    <label for="apple"><input type="checkbox" name="apple" id="apple">
                                        Apple</label>
                                    <label for="htc"><input type="checkbox" name="htc" id="htc">
                                        HTC</label>
                                    <label for="micromax"><input type="checkbox" name="micromax" id="micromax">
                                        Micromax</label>
                                    <label for="nokia"><input type="checkbox" name="nokia" id="nokia">
                                        Nokia</label>
                                    <label for="others"><input type="checkbox" name="others" id="others">
                                        Others</label>
                                    <label for="samsung"><input type="checkbox" name="samsung" id="samsung">
                                        Samsung</label>
                                    <span class="border"></span>
                                    <label for="acer"><input type="checkbox" name="acer" id="acer">
                                        Acer</label>
                                    <label for="bird"><input type="checkbox" name="bird" id="bird">
                                        Bird</label>
                                    <label for="blackberry"><input type="checkbox" name="blackberry"
                                            id="blackberry"> Blackberry</label>
                                    <label for="celkon"><input type="checkbox" name="celkon" id="celkon">
                                        Celkon</label>
                                    <label for="ericsson"><input type="checkbox" name="ericsson" id="ericsson">
                                        Ericsson</label>
                                    <label for="fly"><input type="checkbox" name="fly" id="fly">
                                        Fly</label>
                                    <label for="g-fone"><input type="checkbox" name="g-fone" id="g-fone">
                                        g-Fone</label>
                                    <label for="gionee"><input type="checkbox" name="gionee" id="gionee">
                                        Gionee</label>
                                    <label for="haier"><input type="checkbox" name="haier" id="haier">
                                        Haier</label>
                                    <label for="hp"><input type="checkbox" name="hp" id="hp">
                                        HP</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-lg-7">
                    <div class="section recommended-ads">

                        <div class="featured-top">
                            <h4>Recommended Ads for You</h4>
                            <div class="dropdown pull-right">

                                <div class="dropdown category-dropdown">
                                    <h5>Sort by:</h5>
                                    <a data-toggle="dropdown" href="#"><span
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

                        <div class="ad-item row">

                            <div class="item-image-box col-lg-4">
                                <div class="item-image">
                                    <a href="details.html"><img src="images/listing/1.jpg" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                            </div>

                            <div class="item-info col-lg-8">

                                <div class="ad-info">
                                    <h3 class="item-price">$800.00</h3>
                                    <h4 class="item-title"><a href="#">Apple TV - Everything you need to
                                            know!</a></h4>
                                    <div class="item-cat">
                                        <span><a href="#">Electronics & Gedgets</a></span> /
                                        <span><a href="#">Tv & Video</a></span>
                                    </div>
                                </div>

                                <div class="ad-meta">
                                    <div class="meta-content">
                                        <span class="dated"><a href="#">7 Jan, 16 10:10 pm </a></span>
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

                        <div class="ad-item row">
                            <div class="item-image-box col-lg-4">

                                <div class="item-image">
                                    <a href="details.html"><img src="images/trending/2.jpg" alt="Image"
                                            class="img-fluid"></a>
                                    <span class="featured-ad">Featured</span>
                                    <a href="#" class="verified" data-toggle="tooltip" data-placement="left"
                                        title="Verified"><i class="fa fa-check-square-o"></i></a>
                                </div>
                            </div>

                            <div class="item-info col-lg-8">

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
                            <div class="item-image-box col-lg-4">

                                <div class="item-image">
                                    <a href="details.html"><img src="images/trending/3.jpg" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                            </div>

                            <div class="item-info col-lg-8">

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
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Individual"><i class="fa fa-user"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ad-item row">
                            <div class="item-image-box col-lg-4">

                                <div class="item-image">
                                    <a href="details.html"><img src="images/trending/4.jpg" alt="Image"
                                            class="img-fluid"></a>
                                    <span class="featured-ad">Featured</span>
                                </div>
                            </div>

                            <div class="item-info col-lg-8">

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
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Individual"><i class="fa fa-user"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ad-item row">
                            <div class="item-image-box col-lg-4">

                                <div class="item-image">
                                    <a href="details.html"><img src="images/listing/5.jpg" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                            </div>

                            <div class="item-info col-lg-8">

                                <div class="ad-info">
                                    <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                                    <h4 class="item-title"><a href="#">Samsung Slim NoteBook</a></h4>
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
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Individual"><i class="fa fa-user"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ad-item row">
                            <div class="item-image-box col-lg-4">

                                <div class="item-image">
                                    <a href="details.html"><img src="images/listing/6.jpg" alt="Image"
                                            class="img-fluid"></a>
                                    <span class="featured-ad">Featured</span>
                                </div>
                            </div>

                            <div class="item-info col-lg-8">

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
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Individual"><i class="fa fa-user"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ad-item row">
                            <div class="item-image-box col-lg-4">

                                <div class="item-image">
                                    <a href="details.html"><img src="images/listing/7.jpg" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                            </div>

                            <div class="item-info col-lg-8">

                                <div class="ad-info">
                                    <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                                    <h4 class="item-title"><a href="#">Philips Streo Headphone</a></h4>
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
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Individual"><i class="fa fa-user"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ad-item row">
                            <div class="item-image-box col-lg-4">

                                <div class="item-image">
                                    <a href="details.html"><img src="images/listing/8.jpg" alt="Image"
                                            class="img-fluid"></a>
                                    <span class="featured-ad">Featured</span>
                                </div>
                            </div>

                            <div class="item-info col-lg-8">

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
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Individual"><i class="fa fa-user"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ad-section text-center">
                            <a href="#"><img src="images/ads/3.jpg" alt="Image" class="img-fluid"></a>
                        </div>

                        <div class="ad-item row">
                            <div class="item-image-box col-lg-4">

                                <div class="item-image">
                                    <a href="details.html"><img src="images/listing/9.jpg" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                            </div>

                            <div class="item-info col-lg-8">

                                <div class="ad-info">
                                    <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                                    <h4 class="item-title"><a href="#">Nikon Disital Camera</a></h4>
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
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Individual"><i class="fa fa-user"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ad-item row">
                            <div class="item-image-box col-lg-4">

                                <div class="item-image">
                                    <a href="details.html"><img src="images/listing/10.jpg" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                            </div>

                            <div class="item-info col-lg-8">

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
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Individual"><i class="fa fa-user"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ad-item row">
                            <div class="item-image-box col-lg-4">

                                <div class="item-image">
                                    <a href="details.html"><img src="images/listing/11.jpg" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                            </div>

                            <div class="item-info col-lg-8">

                                <div class="ad-info">
                                    <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                                    <h4 class="item-title"><a href="#">Samsung Mega Monitor</a></h4>
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
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Individual"><i class="fa fa-user"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ad-item row">
                            <div class="item-image-box col-lg-4">

                                <div class="item-image">
                                    <a href="details.html"><img src="images/listing/12.jpg" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                            </div>

                            <div class="item-info col-lg-8">

                                <div class="ad-info">
                                    <h3 class="item-price">$800.00</h3>
                                    <h4 class="item-title"><a href="#">Cannon Disital Camera</a></h4>
                                    <div class="item-cat">
                                        <span><a href="#">Camera & Magazines</a></span> /
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
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Individual"><i class="fa fa-user"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ad-item row">
                            <div class="item-image-box col-lg-4">

                                <div class="item-image">
                                    <a href="details.html"><img src="images/listing/13.jpg" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                            </div>

                            <div class="item-info col-lg-8">

                                <div class="ad-info">
                                    <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                                    <h4 class="item-title"><a href="#">Samsung Smart Watch</a></h4>
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
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Individual"><i class="fa fa-user"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ad-item row">
                            <div class="item-image-box col-lg-4">

                                <div class="item-image">
                                    <a href="details.html"><img src="images/listing/14.jpg" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                            </div>

                            <div class="item-info col-lg-8">

                                <div class="ad-info">
                                    <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                                    <h4 class="item-title"><a href="#">Accer Thinest Laptop</a></h4>
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
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Individual"><i class="fa fa-user"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <ul class="pagination ">
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a>...</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#">20</a></li>
                                <li><a href="#">30</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 d-none d-lg-block">
                    <div class="advertisement text-center">
                        <a href="#"><img src="images/ads/2.jpg" alt class="img-fluid"></a>
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
