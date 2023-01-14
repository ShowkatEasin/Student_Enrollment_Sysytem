<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>User Registration</title>

    <!-- vendor css -->
    <link href="{{ asset('backend') }}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/bracket.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Register <span class="tx-info">Here</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">Online Shopping</div>

        <form action="{{ route('register') }}" method="POST">
            @csrf

       {{-- name --}}

       <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter your Full Name" name="name">
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div><!-- form-group -->


         {{-- email --}}
       <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter your Email" name="email">
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div><!-- form-group -->

         {{-- password --}}
         <div class="form-group">
            <input type="password" class="form-control" placeholder="Enter your password" name="password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div><!-- form-group -->

          {{-- confirm password --}}
         <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirm your password" name="password_confirmation">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div><!-- form-group -->
  
        <div class="form-group">
          
         <div class="row row-xs">
            <div class="col-sm-4">
              
            </div><!-- col-4 -->
            <!-- col-4 -->
            <!-- col-4 -->
          </div><!-- row -->
        </div><!-- form-group -->
        
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>

       

        <div class="mg-t-40 tx-center">Not y et a member? <a href="{{ route('login') }}" class="tx-info">Sign In</a></div>
      </div><!-- login-wrapper -->

    </form>
    
    </div><!-- d-flex -->

    
    {{-- Script --}}

    <script src="{{ asset('backend') }}/lib/jquery/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{ asset('backend') }}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend') }}/lib/select2/js/select2.min.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>
