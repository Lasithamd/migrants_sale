@extends('layout.app')
   @section('content')

   <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 400px;">
      <div class="card-body">
        <h3 class="card-title text-center mb-4">Register</h3>
        <form>
          <div class="form-group">
            <label for="travel-country">Travel Country</label>
            <input type="text" class="form-control" id="travel-country" placeholder="Enter travel country">
          </div>
          <div class="form-group">
            <label for="language">Language</label>
            <input type="text" class="form-control" id="language" placeholder="Enter language">
          </div>
          <div class="form-group">
            <label for="job-field">Job Field</label>
            <input type="text" class="form-control" id="job-field" placeholder="Enter job field">
          </div>
          <div class="form-group">
            <label for="travel-date">Travel Date</label>
            <input type="date" class="form-control" id="travel-date">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>        </form>
        <div class="text-center mt-3">
          <p>Already have an account? <a href="login.html">Login here</a></p>
        </div>
      </div>
    </div>
  </div>
  
  @endsection