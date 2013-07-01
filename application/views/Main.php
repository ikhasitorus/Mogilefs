<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mogilefs</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>stylesheets/theme.css">
    <link rel="stylesheet" href="<?=base_url()?>lib/font-awesome/css/font-awesome.css">

    <script src="<?=base_url()?>lib/jquery-1.7.2.min.js" type="text/javascript"></script>

    <!-- Demo page code -->
<script type="text/JavaScript">
$(document).ready(function() { 

	$('.btn-primary').click(function(e){
	
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
					right: start+'px'
				})
				// Animate the error message
				.animate({
					right: width+'px',
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
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
	ul, ol{list-style:none;}
		.text-center {text-align: center; padding: 10px 0;}
		.wrap {width: 500px; margin: 0 auto;}
	/* Tutorial CSS */
	/* Form rows */
	.styled fieldset li.form-row {
		margin-bottom: 5px; 
		padding: 5px 0; 
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
		text-align: center;
	}
	/* Text input styles */
	/* Default */
	.styled input.text-input {
		height: 22px;
		width: 254px;
		padding: 5px 8px; 
		background: url(<?=base_url()?>images/bg_input.png) no-repeat 0 0;  
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
  </head>
  
  <body class=""> 
		<div class="navbar">
        <div class="navbar-inner">
		<ul class="nav pull-right">
			<li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> Jack Smith
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">My Account</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="sign-in.html">Logout</a></li>
                        </ul>
                    </li>
		</ul>
            <a class="brand" href=""><span class="first">GDP Venture</span> <span class="second">Company</span></a>
        </div>
    </div>    
  <?php
	//session_destroy();
	
	//$_SESSION["IsLogin"] = "hai";
	if($this->session->userdata('loggedin')== ''){
	?> 
			
		         
			<div class="sidebar-nav">
			<form class="search form-inline">
			    <input type="text" placeholder="Search...">
			</form>
			<a href="#" class="nav-header" ><i class="icon-folder-close"></i>Domain</a>
				<a href="#" class="nav-header" ><i class="icon-folder-close"></i>Class</a>
				<a href="#" class="nav-header" ><i class="icon-file"></i>File</a>
		    </div>
		    <div class="content">
			<div class="header">
					<h1 class="page-title"><?= $title?></h1>
		    </div>

			

						<?$this->view($content);?>
				    
				    
			    </div>
			</div>
		    </div>
		    
		   
	<?php }
?>  
     <script src="<?=base_url()?>lib/bootstrap/js/bootstrap.js"></script>
		    <script type="text/javascript">
			$("[rel=tooltip]").tooltip();
			$(function() {
			    $('.demo-cancel-click').click(function(){return false;});
			});
    </script>
                    <footer>
                        <p><center>&copy; 2013. IkhaSitorus&OlgaSianturi</p>

                    </footer>
  </body>
</html>