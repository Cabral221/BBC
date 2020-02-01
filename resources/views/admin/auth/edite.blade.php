
@extends('layouts/admin/app')
@section('body')
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
</div>


        
        <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
      <div class="card shadow ">
        <!-- Card Header - Dropdown -->
        <div class="card-header pb-0">
        <h4 class="text-dark text-capitalize"> Update Administrator Compte </h4>
       </div>
        <!-- Card Body -->
        <div class="card-body">
                    <h6 class="text-capitalize text-bold text-primary">user information  :</h6>
                    <p class=""> UserName  :  <span class="text-bold text-capitalize text-dark ml-5"> {{ Auth::user()->name }} </span></p>
                    <p class=""> Email-adress  :  <span class="text-bold  text-dark ml-4"> {{ Auth::user()->email }} </span></p>
                    <p class=""> Password  :  <span class="text-bold ml-5 text-danger"> ..................................... </span></p>
              
       <div class="text-center mb-4 text-capitalize text-danger">please fill in the fields below to modify your profile</div>
            <form method="put" action="{{ route('admin.update', Auth::user()->id) }}">
        
            {{ method_field('PUT') }}
            <div class="row">
              <div class="col-xl-6">
              <label for="name" class="">Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ Auth::user()->name }}" name="name" value="{{ old('name') }}" placeholder="Enter name" required autocomplete="name" autofocus>
                        
                @error('name')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
              </div>
                
                
               <div class="col-xl-6">
               <label for="email" class="">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ Auth::user()->email }}" name="email" value="{{ old('email') }}" placeholder="Enter email" required autocomplete="email" autofocus>
                        
                @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
               </div>

                </div>

                <label for="password" class="mt-3">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required autocomplete="current-password">
                        
                @error('password')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror

                <div class="row mt-3">
                <div class="col-xl-6"><button type="submit" class="btn btn-primary btn-block">Update</button></div>
                <div class="col-xl-6"><button type="reset" class="btn btn-success btn-block">Reinitialiser</button></div>
                </div>
            </form>

      
        </div>
        </div>
        </div>
        </div>



</div>
@endsection
