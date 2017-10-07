<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">



<head>
  	<title>Employee site</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!-- The main style sheet -->
  	<link rel="stylesheet" href="main.css" type="text/css" media="screen" />

	<!-- START Fx.Slide -->
	<!-- The CSS -->
  	<link rel="stylesheet" href="fx.slide.css" type="text/css" media="screen" />
    <!-- Mootools - the core -->
	<script type="text/javascript" src="js/mootools-1.2-core-yc.js"></script>
    <!--Toggle effect (show/hide login form) -->
	<script type="text/javascript" src="js/mootools-1.2-more.js"></script>
	<script type="text/javascript" src="js/fx.slide.js"></script>
	<!-- END Fx.Slide -->

</head>

<body>
	<!-- Login -->
	<div id="login">
		<div class="loginContent">
			<form action="copyright.html" method="post">
				<label for="log"><b>Username: </b></label>
				<input class="field" type="text" name="username" id="log" value="" size="18" />
				<label for="pwd"><b>Password:</b></label>
				<input class="field" type="password" name="password" id="pwd" size="18" />
				<input type="submit" name="submit" value="" class="button_login" />
				<input type="hidden" name="redirect_to" value=""/>
			</form>
			
			<!-- <div class="right">Not a member? <a href="#">Register</a> | <a href="#">Lost your password?</a></div> -->
		</div>
		<div class="loginClose"><a href="#" id="closeLogin">Close Panel</a></div>
	</div> <!-- /login -->

    <div id="container">
		<div id="top">
		<!-- login -->
			<ul class="login">
		    	<li class="left">&nbsp;</li>
		        <li>Hello Guest!</li>
				<li>|</li>
				<li><a id="toggleLogin" href="#">Log In</a></li>
                                <li>|</li>
                                <li><a href="contact.html">Contact US!</a></li>
			</ul> <!-- / login -->
		</div> <!-- / top -->

        <div class="clearfix"></div>


		<div id="content">
                    <span style="font-family: vhia; font-size: 50px;">Employee site</span>&nbsp;&nbsp;<img src="images/logo.png" alt="" height="70px" width="70px" /><br/><br/><br/>
                    <span style="font-family: arial; font-size: 30px; color: #11673B; margin-left: 50%">Web Based Payroll</span><br/><br/><br/>
                    <span style="font-family: cursive; font-size: 20px; color: #782929; margin-left: 70%">Payroll Anywhere, Anytime</span>
		</div><!-- / content -->
        <div class="clearfix"></div>
	</div><!-- / container -->

        

</body>

</html>
