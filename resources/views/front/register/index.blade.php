    @extends('layout.app')
    @section('content')

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
            <div class="category-tab">
                <form action="{{ route('register-next')}}" method="POST">
                    @csrf
                <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="section cat-option select-category post-option">
                        <h4>Select a Category</h4>
                        <ul role="tablist" class="nav nav-tabs">
                            @foreach ($categories as $category)
                            
                            <li><a href="#cat{{ $category->id }}" for="category{{$category->id}}" aria-controls="cat1" role="tab" data-toggle="tab"> <span class="select">
                                <img src="{{asset('home/images/icon/'.$category->image.'.png')}}" alt="My Image">
                            </span> {{ $category->name }}  </a>
                            
                            <input type="radio" name='category_id' value="{{$category->id}}" id='category{{$category->id}}' hidden>
                            </li>
                        @endforeach

                            
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="section tab-content subcategory post-option">
                        <h4>Select a subcategory</h4>
                        @foreach ($categories as $category)
                        <div role="tabpanel" class="tab-pane" id="cat{{$category->id}}">
                            <ul>
                            @foreach ($subcategories as $subcategory)
                       
                                @if ($category->id == $subcategory->category_id)
                                <li><label for='subcategory{{$subcategory->id}}'>{{$subcategory->name }}</a>
                                <input type="radio" name='sub_category_id' value="{{$subcategory->id}}" id='subcategory{{$subcategory->id}}'    ></li>
                                @endif
                          
                           @endforeach
                            </ul>
                        </div>
                     
                    @endforeach

                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="section tab-content location post-option">
                        <h4>Select a Location</h4>
                        <div class="m3">
                            <label for="districts">District</label>
                            <select name="districts" id="districts" class="form-control"> 
                                @foreach ( $districts  as   $district )
                                    
                                <option value="{{$district->id}}">{{$district->name_en}}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="m3">
                            <label for="city">City</label>
                            <select name="city" id="city" class="form-control" > 
                                <option value="">Select One</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="section next-stap post-option">
                        <h2>Post an Ad in just <span>30 seconds</span></h2>
                        <p>Please DO NOT post multiple ads for the same items or service. All duplicate, spam and wrongly categorized ads will be deleted.</p>
                        <div class="btn-section">
                            <input type="submit" value="Next" class="btn-all-site"> 
                            
                            <a href="#" class="btn-info">or Cancle</a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            </div>
            
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('#districts').change(function () {
            var cityId = $(this).val();
            
            if (cityId) {
                // $('#city').prop('disabled', true);

                $.ajax({
                    url: '/api/cities/' + cityId,
                    type: 'GET',
                    success: function (response) {
                        $('#city').empty().append('<option value="">Select a Cities</option>');

                        $.each(response, function (key, cities) {

                            $('#city').append('<option value="' + cities.id + '">' + cities.name_en + '</option>');
                        });

                        $('#city').prop('city', false);
                    }
                });
              

            } else {
                $('#city').empty().append('<option value="">Select a Province</option>');
                // $('#city').prop('disabled', false);
            }
        });
    });
</script>
@endsection