<!doctype html>

<html class="no-js" lang="">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>School ERP</title>

<link rel="icon" type="image/ico" href="assets/images/favicon.ico" />

<meta name="description" content="">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- vendor css files -->

<link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">

<link rel="stylesheet" href="{{ asset('assets/js/vendor/animsition/css/animsition.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/js/vendor/chosen/chosen.css') }}">

<link href="{{ asset('assets/css/select2.css') }}" rel="stylesheet" />

<link rel="stylesheet" href="{{ asset('assets/css/flag-icon.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/vendor/simple-line-icons.css') }}">



<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/akstyle.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

<script src="{{ asset('assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>

</head>

<body id="school" class="appWrapper">

    <div class="auth-main akn_loginpage">

        <div class="container">

   <div class="slideIn">

            <!-- image and information -->

            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12 no-padding fitxt-center">
            <div class="image-area">
    <div class="content">
        <div class="login_logoholder">
            <img src="{{ asset('assets/images/logo.jpg') }}" class="login-left logo" height="" alt="School ERP">
        </div>
        <div class="image-hader">
            <h2>Welcome To</h2>
        </div>
        <div class="center img-hol-p">
            
           <h4 class="logo_text"><span>School</span> ERP</h4>
      
        </div>
        <hr>
        <div class="address">
            <p>Check Out our Social Links</p>
        </div>			
        <div class="f-social-links center">
            <a href="#" target="_blank">
                <span class="fab fa5-facebook-f"></span>
            </a>
            <a href="#" target="_blank">
                <span class="fab fa5-twitter"></span>
            </a>
            <a href="#" target="_blank">
                <span class="fab fa5-linkedin-in"></span>
            </a>
            <a href="#" target="_blank">
                <span class="fab fa5-youtube"></span>
            </a>
        </div>

    
    </div>
    </div>
            </div>



            <!-- Login -->

            <div class="col-lg-6 col-lg-offset-right-1 col-md-6 col-md-offset-right-1 col-sm-12 col-xs-12 no-padding">

                <div class="sign-area loginlist-buttons">           

                        <div class="cr-acc flex-center">

                            <a href="{{ route('admin-login')}}" class="cacc">
                            <img src="{{ asset('assets/images/loginicon_superadmin.png')}}"
class="login-icon forindex" />
                            Admin Login</a>

                        </div>

                        <div class="cr-acc flex-center">

                            <a href="{{ route('teacher-login')}}" class="cacc">
                            <img src="{{ asset('assets/images/loginicon_teacher.png')}}"
class="login-icon forindex" /> Teacher Login</a>

                        </div>	
						
<div class="cr-acc flex-center">

                            <a href="{{ route('accounts-login')}}" class="cacc">
                            <img src="{{asset('assets/images/accountant.svg')}}" class="login-icon forindex filter-white--new" /> Accountant Login</a>

                        </div>

	<div class="cr-acc flex-center">
  
                            <a href="{{ route('reception-login')}}" class="cacc">
                            <img src="{{asset('assets/images/receptionist.svg')}}" class="login-icon forindex filter-white--new" /> Receptionist Login</a>

    </div>
						
						
						<div class="cr-acc flex-center">

                            <a href="{{ route('parent-login')}}" class="cacc">
                            <img src="{{ asset('assets/images/loginicon_parents.png')}}"
class="login-icon forindex" /> Parent Login</a>

                        </div>	

						<div class="cr-acc flex-center">

                            <a href="{{ route('student-login')}}" class="cacc">
                            <img src="{{ asset('assets/images/loginicon_student.png')}}"
class="login-icon forindex" /> Student Login</a>

                        </div>	

                </div>

            </div>

        </div> 

        </div>

        </div>

   <!-- ============================================

============== Vendor JavaScripts ===============

============================================= --> 

<script src="assets/js/jquery-1.12.4.min.js" ></script>

<script src="assets/js/jquery-background-slideshow.js" ></script>

<script>

  $(document).ready(function () {



        $("body").backgroundSlideshow({

            onBeforeTransition: function (index) {

                console.log("before transition", index)

            },

            onAfterTransition: function (index) {

                console.log("after transition", index)

            },

            transitionDuration: 3000,

            fixed: true,

            images: [

            "assets/images/login-parents1.jpg",

                "assets/images/login-parents2.jpg",

                "assets/images/login-parents3.jpg",

                "assets/images/login-parents4.jpg"

            ]

        })









    })

</script>

</body>

</html>