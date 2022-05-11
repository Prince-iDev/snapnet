@extends('users.layouts.layout')
@section('content')

<div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Settings</h3>
            <h6 class="font-weight-normal mb-0">Edit and Update your Profile</h6>
          </div>
          <div class="col-12 col-xl-4">
           <div class="justify-content-end d-flex">
            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
              <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
               <i class="mdi mdi-calendar"></i> Today (<?php echo date('d-F-Y');?>)
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                <a class="dropdown-item" href="#">January - March</a>
                <a class="dropdown-item" href="#">March - June</a>
                <a class="dropdown-item" href="#">June - August</a>
                <a class="dropdown-item" href="#">August - November</a>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>

    <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-8 mx-auto">
            <div class="card">
             <div class="card-body">
                <h4 class="card-title">Edit Profile Below<i class="icon-down"></i></h4>
                
                <form action="{{ url('users/register-citizens') }}" method="post"
                class="update-profile-form" id="update-profile-form" name="update-profile-form">@csrf

                    {{-- Error Response Display --}}
                    @if(Session::has('err_msg'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Error:</strong> {{ Session::get('err_msg'); }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif {{-- Login Response Display Ends--}}

                    {{-- Success Response Display --}}
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Error:</strong> {{ Session::get('success'); }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif {{-- Login Response Display Ends--}}
                    <div class="form-group">
                          <label>Name</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="icon-head"> </i></span>
                            </div>
                            <input type="text" class="form-control" name="name" id="surname" aria-label="Username" required="">
                          </div>
                      </div>
                      <div class="form-group">
                          <label>gender</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="icon-head"> </i></span>
                            </div>
                            <input type="text" class="form-control" name="gender" aria-label="Username" required="">
                          </div>
                      </div>
                  <div class="form-group">
                    <label>Address</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">@</i></span>
                      </div>
                    <input type="text" name="address" class="form-control" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="new_password">Mobile Number</label>
                    <div class="input-group">
                       <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ti-mobile"></i></i></span>
                        </div>
                    <input type="text" class="form-control" name="pone" id="new_password"   required="">
                    </div>
                  </div>
                  <div class="form-group">
                     <label for="confirm_password">State</label>
                     <div class="input-group">
                       <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ti-location-pin"></i></span>
                        </div>
                    <input type="text" class="form-control" name="state" id="confirm_password" required="">
                   </div>
                  </div>
                  <div class="form-group">
                    <label for="current_password">LGA</label>
                    <div class="input-group">
                       <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ti-lock"></i></span>
                        </div>
                    <input type="text" class="form-control" name="lga" id="current_password" placeholder="Your Current Password" required="">
                   </div>
                    <span id="check_password"></span>
                  </div>
                  <div class="form-group">
                    <label for="confirm_password">Ward</label>
                     <div class="input-group">
                       <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ti-user"></i></i></span>
                        </div>
                    <input type="text" class="form-control" name="ward" id="confirm_password" required="">
                   </div>
                  </div>
                  <button type="submit" class="btn btn-primary mr-2">Register</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
                </div>
            </div>
          </div>
        </div>
      </div>

  </div>
  <!-- content-wrapper ends -->

@endsection

