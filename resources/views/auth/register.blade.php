<!DOCTYPE html>
<html lang="en">


<head>
    <title>Register page</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="http://127.0.0.1:8000/frontend/images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="http://127.0.0.1:8000/frontend/css/materialize.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/frontend/css/bootstrap.css" rel="stylesheet" />
    <link href="http://127.0.0.1:8000/frontend/css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="http://127.0.0.1:8000/frontend/css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
   <section>
		<div class="ad-log-main">
			<div class="ad-log-in">
				<div class="ad-log-in-logo">
					<a href="index-2.html"><img src="http://127.0.0.1:8000/frontend/images/logo.png" alt=""></a>
				</div> 
				<div class="ad-log-in-con">
			<div class="log-in-pop-right">
                    <h4>Register</h4>
                        <form action="{{route('register')}}" method="POST">
                          @csrf
                              <div>
                            <div class="input-field s12">
                              <div class="input-field s12">
                                <input type="text" name="name" class="form-control"
                                placeholder="Enter Your Full Name">
                               
                            </div>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                              <div class="input-field s12">
                                <input type="email" name="email"  class="form-control"
                                placeholder="Enter Your Email">
                               
                            </div>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                              <div class="input-field s12">
                                <input type="password"  name="password" class="form-control"
                                placeholder="Enter Your Password">
                               
                            </div>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                              <div class="input-field s12">
                                <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Confirmation Password">
                            </div>
                            </div>
                          </div>
                          <div>
                  
                          <br>
                          <div>
                              <button class="btn btn-info-in-blok">Register</button>      
                          <div>
                          </form>
                              <div class="input-field s12"> <a href="{{ route('login') }}">Already have an Account</a> </div>
                          </div>
                  </div>
          </div>
        </div>
      </div>
     </section>

    <!--Import jQuery before materialize.js-->
    <script src="http://127.0.0.1:8000/frontend/js/main.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/js/materialize.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/js/custom.js"></script>
</body>

</html>