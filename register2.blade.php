<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Materials and Manufacturing in Healthcare Network | Register Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	@include("admin.analytics")
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets/css/animate.min.css" rel="stylesheet" />
	<link href="/assets/css/style.min.css" rel="stylesheet" />
	<link href="/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
@include("admin.cookiebanner")
		
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
						@if(Session::has('msg'))
						<script type="text/javascript">
						alert('Account created successfully...');
						</script>
						@elseif(Session::has('msg_interest'))
						<script type="text/javascript">
						alert('Interest form submitted successfully. You will be contacted via email as soon as possible');
						</script>
						@elseif(Session::has('mismatch'))
						<script type="text/javascript">
						alert('Passwords mismatched');
						</script>
						@elseif(Session::has('msg_interest2'))
						<script type="text/javascript">
						alert('Registration completed successfully, click login to access your dashboard');
						</script>
						@elseif(Session::has('msg2'))
						<script type="text/javascript">
						alert('User with that email already exist please use a diffrent email address...');
						</script>
						@elseif(Session::has('uplerror'))
						<script type="text/javascript">
						alert('Invalid passport photograph format, use only png,jpeg,jpg');
						</script>
						@elseif(Session::has('err'))
						<small>Invalid Username or Password...</small>
						
						@else(msg == "" or msg==NULL)
							<!--<small>Your files are with you everywhere you go...</small>-->
						@endif
                        
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin register -->
        <div class="register register-with-news-feed">
            <!-- begin news-feed 
            <div class="news-feed">
                <div class="news-image">
                    <img src="/assets/img/login-bg/bg-8.jpg" alt="" />
                </div>
                <div class="news-caption">
                    
                </div>
            </div>
			-->
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div >
                <!-- begin register-header -->
                <h3 align="center">
                   Membership Registration Form
                   
                </h3>
                <!-- end register-header -->
                <!-- begin register-content -->
                <div class="register-content">
                    <form action="/register/new_complete" method="POST"  enctype="multipart/form-data" class="margin-bottom-0">
					
					<label class="control-label" for="fname">First name <span class="text-danger">*</span> </label></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="fname" class="form-control"  value="{{$u->first_name}}" name="first_name"  required readonly />
                            </div>
                        </div>
						
						
						<label class="control-label" for="lname">Last name <span class="text-danger">*</span> </label></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="lname" class="form-control"  value="{{$u->last_name}}" name="last_name"  required readonly />
                            </div>
                        </div>
						
						
                      
						
						 <label class="control-label" for="org">Organisation </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="org" class="form-control" placeholder="Organisation e.g., University College London" name="institution"  value="{{$u->institution}}"   readonly/>
                            </div>
                        </div>
						
						<label class="control-label" for="role">Role title </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="role" class="form-control" placeholder="e.g., Professor" name="designation"  />
                            </div>
                        </div>
						
						
						
						
						<div class="dropdown" scroll>
										<button class="btn btn-primary" type="button" 
										id="sampleDropdownMenu" data-toggle="dropdown">
										Click to research interest select keywords 
										</button> or add  <input  type="checkbox"  name="other" id="ck" value="other" onClick="OtherField()"  /> other keywords 
										<div class="dropdown-menu" style="overflow-y: scroll; height:250px; padding:0.5em 1em;">
										@foreach($kw as $k)
										
										 </span> <input id="key"  name="keywords[]" value="{{$k->id}}" type="checkbox"  />&nbsp; {{$k->name}}
										
										 <br/>
										
										 @endforeach
	
										</div>
										</div>
										
										
										<div class="row m-b-15" id="oth">
						
                            <div class="col-md-12">
							<br/>
                                <input type="text"  class="form-control" placeholder="If other is selected, type in the keyword" name="other"   />
								
                            </div>
                        </div>
						
						
						<label class="control-label" for="bio">Brief bio/background, this will be visible to other members (maximum number of characters: 200)<span class="text-danger">*</span> </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <textarea type="text" id="bio" name="bio" class="form-control"  maxlength="200" required> </textarea>
                            </div>
                        </div>
						
						<label class="control-label" for="why">Why do you want to join the network? (maximum number of characters: 200)<span class="text-danger">*</span> </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="why" name="reason" class="form-control"  maxlength="200"  value="{{$u->joining_reason}}" required readonly/> 
                            </div>
                        </div>
						
						<label class="control-label" for="link">LinkedIn (optional)</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="link" name="linkedin" class="form-control"   /> 
                            </div>
                        </div>
						
						<label class="control-label" for="twitter">Twitter (optional)</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="twitter" name="twitter" class="form-control"  /> 
                            </div>
                        </div>
						
						<label class="control-label" for="webpage">Webpage (optional)</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="webpage" name="webpage" class="form-control"  /> 
                            </div>
                        </div>
						
						
                        <label class="control-label" for="email">Email <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="email" id="email" class="form-control" placeholder="Email address" name="email"  value="{{$u->email}}" required readonly/>
								<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
								<input type="hidden" name="role" value="user"/>
                            </div>
                        </div>
						
						<label class="control-label" for="pic">Profile Picture </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="file" id="pic" class="form-control"  name="pic"   />
								
                            </div>
                        </div>
						
						
						
						
						
                        <div class="row m-b-15" id="oth">
						
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="If other is selected, type in the keyword" name="other"   />
								
                            </div>
                        </div>
						
						<label class="control-label" for="pass">Password (minimum of 8 characters) <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" id="pass" name="password" minlength="8"   required />
								<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
								<input type="hidden" name="role" value="user"/>
                            </div>
                        </div>
                       
					   <label class="control-label" for="cpass">Confirm Password <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" id="cpass" name="cpassword" minlength="8"  required />
								<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
			
                            </div>
                        </div>
                       
						
						
                        <div class="checkbox m-b-30">
                             <label>
                                <input type="checkbox" required /> By clicking Show Interest Button, you agree to our <a href="https://www.ucl.ac.uk/disclaimer/ ">Terms</a> and that you have read our <a href=" https://www.ucl.ac.uk/privacy/">Data Policy</a>, including our <a href="https://www.ucl.ac.uk/legal-services/privacy/cookie-policy">Cookie Use</a>.
                            </label>
                        </div>
						
						<div class="checkbox m-b-30">
                            <label>
                                <input type="checkbox" name="news_email" /> Click to receives notification when new public story is posted.
                            </label>
                        </div>
						
						<div class="checkbox m-b-30">
                            <label>
                                <input type="checkbox" name="matching_email" /> Click to receives notification when you are selected as partner.
                            </label>
                        </div>
						
						
                        <div class="register-buttons">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            Already a member? Click <a href="/login">Login</a> to sign in.
                        </div>
                        <hr />
                        <p class="text-center">
                            &copy; Materials and Manufacturing in Healthcare Network <?php echo date('Y') ?>
                        </p>
                    </form>
                </div>
                <!-- end register-content -->
            </div>
            <!-- end right-content -->
        </div>
        <!-- end register -->
        
        <!-- begin theme-panel -->
        
        <!-- end theme-panel -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets/crossbrowserjs/respond.min.js"></script>
		<script src="/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
<style type="text/css">
   	  #oth{display:none;}
	  
   </style>
   
   <script>
   function OtherField(){
			var checkBox = document.getElementById("ck");
		  // Get the output text
		  	
		  // If the checkbox is checked, display the output text
		  if (checkBox.checked == true){
		   $('#oth').css('display','block');
		  } else {
			$('#oth').css('display','none');
		  }   
   			
		
		
		}
   </script>
   
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>
</html>
s