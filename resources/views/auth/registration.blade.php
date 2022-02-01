@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Employee Register</div>
                  <div class="card-body">
  
                      <form action="{{ route('register.post') }}" method="POST">
                          @csrf
                          <div class="contact-form">
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" class="form-control" name="name"  autofocus>
                                  
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="Phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                              <div class="col-md-6">
                                  <input type="text" id="Phone" class="form-control" name="Phone"  autofocus>
                                 
                                      <span class="text-danger">{{ $errors->first('Phone') }}</span>
                                  
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email"  autofocus>
                                  
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" >
                                  
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  
                              </div>
                          </div>

  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                        </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection
@section('script')
<script>
    if ($("#contact_form").length > 0) {
        $("#contact_form").validate({
 
            rules: {
                name: {
                    required: true,
                    maxlength: 50
                },
 
                Phone: {
                    required: true,
                    minlength: 10,
                },

                email: {
                    required: true,
                    maxlength: 50,
                    email: true,
                },
 
                password: {
                    required: true,
                    minlength: 5,
                    maxlength: 15,
                },
            },
            messages: {
 
                name: {
                    required: "Please enter name",
                },
                Phone: {
                    required: "Please enter Phonenumber",
                },
                email: {
                    required: "Please enter valid email",
                    email: "Please enter valid email",
                    maxlength: "The email name should less than or equal to 50 characters",
                },
                password: {
                    required: "Please enter valid Password",
                },
 
            },
        })
    } 
 </script>
@endsection