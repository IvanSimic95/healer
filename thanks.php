<?php 
$title = "Thank you for your Order! | Soulmate Healer";
$description = "You have finished your order process!";
include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; ?>
<style>
    .col-md-offset-3{
        margin-left: 25%;
    }
  
@media (max-width: 767px) {
    .col-md-offset-3{
        margin-left: 0%;
    }
}

    </style>

    <!-- Header -->
    <header class="ex-6-header" style="min-height:80vh">
        <div class="header-content">
            <div class="container">
              
                   <div class="col-md-offset-3">
					<div style="margin-top:0px;">
                   

<div class="col-md-8 " style="border:2px solid orange; border-radius:0.5rem;background-color: rgba(242, 236, 231, 0.9);
    ">
<div class="wrap-white">


<h1>Dashboard</h1>
    <h6>Enter the email you used for purchase and we will log you in!</h6>

		
 </div>
 <div class="wrap-white">
	<div class="contact_form">
    <img id="profile-img" class="profile-img-card img-thumbnail m-4" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png">
    <form id="contactForm" data-toggle="validator" data-focus="false">
							
								<div class="form-group">
									<input type="email" class="form-control-input" id="semail" required>
									<label class="label-control" for="semail">Email*</label>
									<div class="help-block with-errors"></div>
								</div>

                    
							
								<div class="form-group">
									<button id="submitbtn" type="submit" class="form-control-submit-button">Login <i class="fa-solid fa-arrow-right"></i></button>
								</div>
								
							
							</form>
	</div>
 </div>
</div>



					</div>
                   </div>				
          
 


<br clear="all">			
				
            </div>  
        </div>  
    </header>  

    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/footer.php'; ?>			