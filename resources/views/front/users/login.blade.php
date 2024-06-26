@extends('layout.app')
   @section('content')

    
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 400px;">
      <div class="card-body">
        <h3 class="card-title text-center mb-4">Login</h3>
        <form>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center mt-3">
          <p>Don't have an account? <a href="register.html">Register here</a></p>
        </div>
      </div>
    </div>
  </div>
@endsection