@extends('admin.layout')

@section('content')
    <div class="mb-3 card">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image: url(&quot;/static/media/corner-4.62f4f1af783636384960.png&quot;); border-top-right-radius: 0.375rem; border-bottom-right-radius: 0.375rem;">
        </div>
        <div class="position-relative card-body">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="mb-0">District List</h3>
                    <p class="mt-2">Indicate the current page’s location within a navigational hierarchy that automatically
                        adds separators via CSS.</p>
                        <a href="{{route('admin.district.create')}}"></a>
                </div>
            </div>
        </div>
        
    </div>
    <div class="mb-3 card">
        <div class="position-relative card-body">
            <div class="row">
                <table class="table caption-top">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name EN</th>
                        <th scope="col">Name SI</th>
                        <th scope="col">Name TA</th>
                        <th scope="col">Province</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($district as $item)
                          
                      <tr>
                        <th scope="row">
                          {{  $item->id}}
                        </th>
                        <td>  {{  $item->name_en }}</td>
                        <td>  {{  $item->name_si}}</td>
                        <td>  {{  $item->name_ta}}</td>
                        <td>  {{  $item->province['name_en']}}</td>
                        <td> </td>
                        
                      </tr>
                      @endforeach
                    
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
