@extends('admin.layout')

@section('content')
    <div class="mb-3 card">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image: url(&quot;/static/media/corner-4.62f4f1af783636384960.png&quot;); border-top-right-radius: 0.375rem; border-bottom-right-radius: 0.375rem;">
        </div>
        <div class="position-relative card-body">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="mb-0">Country List</h3>
                    <p class="mt-2">Indicate the current page’s location within a navigational hierarchy that automatically
                        adds separators via CSS.</p>
                    <a href="{{ route('admin.province.create') }}"></a>
                </div>
            </div>
        </div>

    </div>
    <div class="mb-3 card">
        <div class="position-relative card-body">
            <div class="row">
                <form action="{{ '/admin/province/store' }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Country</label>
                        <select name="country" id="country" class="form-control">
                            <option value="1">Select One</option>
                            @foreach ($countries as $item)
                            <option value='{{$item->id}}'>{{$item->name}}</option>   
                            @endforeach
                           
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Canada">
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
