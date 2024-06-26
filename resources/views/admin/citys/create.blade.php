@extends('admin.layout')

@section('content')
    <div class="mb-3 card">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image: url(&quot;/static/media/corner-4.62f4f1af783636384960.png&quot;); border-top-right-radius: 0.375rem; border-bottom-right-radius: 0.375rem;">
        </div>
        <div class="position-relative card-body">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="mb-0">City List</h3>
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
                <form action="{{ '/admin/city/store' }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Country</label>
                        <select name="country" id="country" class="form-control">
                            <option value="1">Select One</option>
                            @foreach ($countries as $item)
                                <option value='{{ $item->id }}'>{{ $item->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Country</label>

                        <label for="province">Provinces</label>
                        <select name="province" id="province" disabled class="form-control">
                            <option value="">Select One</option>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#country').change(function () {
            var provinceId = $(this).val();

            if (provinceId) {
                $('#province').prop('disabled', true);

                $.ajax({
                    url: '/api/provinces/' + provinceId,
                    type: 'GET',
                    success: function (response) {
                        $('#province').empty().append('<option value="">Select a Province</option>');

                        $.each(response, function (key, provinces) {

                            $('#province').append('<option value="' + provinces.id + '">' + provinces.name + '</option>');
                        });

                        $('#province').prop('disabled', false);
                    }
                });
            } else {
                $('#province').empty().append('<option value="">Select a Province</option>');
                $('#province').prop('disabled', true);
            }
        });
    });
</script>