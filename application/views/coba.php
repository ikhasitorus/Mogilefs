<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="<?=base_url()?>lib/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <!-- Demo page code -->
	<script type="text/JavaScript">
$(document).ready(function() { 

	$('.btn-submit').click(function(e){
	
		// Declare the function variables:
		// Parent form, form URL, email regex and the error HTML
		var $formId = $(this).parents('form');
		var formAction = $formId.attr('action');
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		var $error = $('<span class="error"></span>');

		// Prepare the form for validation - remove previous errors
		$('li',$formId).removeClass('error');
		$('span.error').remove();

		// Validate all inputs with the class "required"
		$('.required',$formId).each(function(){
			var inputVal = $(this).val();
			var $parentTag = $(this).parent();
			if(inputVal == ''){
				$parentTag.addClass('error').append($error.clone().text('Required Field'));
			}
			
			// Run the email validation using the regex for those input items also having class "email"
			if($(this).hasClass('email') == true){
				if(!emailReg.test(inputVal)){
					$parentTag.addClass('error').append($error.clone().text('Enter valid email'));
				}
			}
			
			// Check passwords match for inputs with class "password"
			if($(this).hasClass('password') == true){
				var password1 = $('#password-1').val();
				var password2 = $('#password-2').val();
				if(password1 != password2){
				$parentTag.addClass('error').append($error.clone().text('Passwords must match'));
				}
			}
		});

		// All validation complete - Check if any errors exist
		// If has errors
		if ($('span.error').length > 0) {
			
			$('span.error').each(function(){
				
				// Set the distance for the error animation
				var distance = 5;
				
				// Get the error dimensions
				var width = $(this).outerWidth();
				
				// Calculate starting position
				var start = width + distance;
				
				// Set the initial CSS
				$(this).show().css({
					display: 'block',
					opacity: 0,
					right: -start+'px'
				})
				// Animate the error message
				.animate({
					right: -width+'px',
					opacity: 1
				}, 'slow');
				
			});
		} else {
			$formId.submit();
		}
		// Prevent form submission
			e.preventDefault();
	});
	
	// Fade out error message when input field gains focus
	$('.required').focus(function(){
		var $parent = $(this).parent();
		$parent.removeClass('error');
		$('span.error',$parent).fadeOut();
	});
});
</script>

<style type="text/css">
body,html,div,blockquote,img,label,p,h1,h2,h3,h4,h5,h6,pre,ul,ol,li,dl,dt,dd,form,a,fieldset,input,th,td{border:0;outline:none;margin:0;padding:0;}
body{height:100%;background:#fff;color:#1f1f1f;font-family:Arial,Verdana,sans-serif;font-size:13px;padding:7px 0;}
ul, ol{list-style:none;}
.text-center {text-align: center; padding: 10px 0;}
.wrap {width: 960px; margin: 0 auto;}

/* Tutorial CSS */
/*Form styles*/
.styled {
font: 15px Arial, sans-serif; 
width: 422px; 
margin: 40px auto; 
background: url(images/bg_form.png) no-repeat 0 0; 
padding-top: 20px;
}
.styled fieldset {
background: url(images/bg_form.png) no-repeat 0 100%; 
padding: 0 25px 20px 25px; 
position: relative;
}
/* Form rows */
.styled fieldset li.form-row {
margin-bottom: 5px; 
padding: 3px 0; 
clear: both; 
position: relative;
}
.styled label {
display: block; 
font-weight: bold; 
float: left; 
width: 200px; 
line-height: 24px; 
padding-top: 4px; 
color: #555;
}
.styled label.double {
padding-top: 0; 
line-height: 20px; 
margin-top: -3px;
}
.styled fieldset li.button-row {
margin-bottom: 0; 
padding: 5px 0 0; 
text-align: right;
}
/* Text input styles */
/* Default */
.styled input.text-input {
height: 22px;
width: 254px;
padding: 5px 8px; 
background: url(images/bg_input.png) no-repeat 0 0;  
border: none;   
font: normal 15px Arial, sans-serif;
color: #333;
line-height: 1em;
}

/* Form Validation */
.styled span.error {
font: bold 11px Arial, sans-serif;
color:#fff;
text-shadow: 1px 1px 1px #000;
display: none; 
background: url(<?=base_url()?>images/arrow_error.png) no-repeat 0 center; 
height: 11px;
padding: 7px 15px 10px 20px; 
line-height: 1em; 
position: absolute; 
top: 3px; 
right: 0; 
border-right: 1px solid #6c0202;
}
.styled fieldset li.error input.text-input {
background-position: 0 -64px;
}
</style>
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    <div class="sidebar-nav">
        <form class="search form-inline">
            <input type="text" placeholder="Search...">
        </form>
        <a href="#" class="nav-header" ><i class="icon-folder-close"></i>Domain</a>
        <a href="#" class="nav-header" ><i class="icon-folder-close"></i>Class</a>
		<a href="#" class="nav-header" ><i class="icon-file"></i>File</a>
    </div>
	
    <div class="navbar">
        <div class="navbar-inner">
               
                <a class="brand" href=""><span class="first">GDP Venture</span> <span class="second">Company</span></a>
        </div>
    </div>    
  <div class="content">
        <div class="header">
			<h1 class="page-title">Domain</h1>
    </div>
        <div class="container-fluid">
            <div class="row-fluid">
                    
				<div class="wrap">
  <h2 class="text-center">jQuery Validation With Animated Error Messages</h2>
	   
          <form id="form-sign-up" class="styled" action="" method="post">
	  	    <fieldset>
			  <h3>Register Now!</h3>
			  <ol>
			    <li class="form-row"><label>Name:</label>
				  <input name="name" type="text" class="text-input required" />
				</li>
				<li class="form-row"><label>Email:</label>
				  <input name="email" type="text" id="register-email" class="text-input required email" />
				</li>
				<li class="form-row"><label>Password:</label>
				  <input name="password" type="password" id="password-1" class="text-input required password" />
				</li>
				<li class="form-row"><label>Repeat Password:</label>
				  <input name="password" type="password" id="password-2" class="text-input required password" />
				</li>
				<li class="button-row">
				  <input type="image" src="images/btn_sign_up_off.png" alt="Sign Up" value="OK" class="btn-submit img-swap" />
				</li>
			  </ol>
			</fieldset>
		  </form>
         
		  <p class="text-center"><a href="http://www.designchemical.com/blog/index.php/jquery/jquery-animated-error-messages-form-validation/">View blog post</a></p>
	  </div>
				
				<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h3 id="myModalLabel">Delete Confirmation</h3>
					</div>
					<div class="modal-body">
						<p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
						<button class="btn btn-danger" data-dismiss="modal">Delete</button>
					</div>
				</div>


                    
                    
            </div>
        </div>
    </div>
    

    <script src="<?=base_url()?>lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>



  </body>
</html>
    
