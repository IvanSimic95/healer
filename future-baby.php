<?php 
$t_product_name = "FUTURE BABY";
$t_product_form_name = "futurebaby";
$title = "Future Baby Drawing | Soulmate Healer";
$description = "I will provide you with your future baby drawing";

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; ?>
<?php


$sql = "SELECT * FROM reviews WHERE review_moderated = 'approved' AND product = '".$t_product_name."' ORDER BY review_date DESC";
$result = $conn->query($sql);
$count = $result->num_rows;


?>
    <!-- Header -->
    <header class="ex-6-header">
        <div class="header-content">
            <div class="container">
                <div class="row">
	
                   <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="/images/soulmate-01.png" style="border-radius: 0.5rem;" alt="alternative">
                            </div>  
                        </div>  
                   </div>				

                   <div class="col-lg-6 col-xl-5">
						<div class="header-box">
                        <h5 style="margin-top: 10px;">Future Baby Drawing & Reading</h5>
						<h4 style="text-align: center;font-size: 15px;font-weight: 500;margin-top:-10px;">
						<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>
						<span style="font-size:13px;"><?php echo $count; ?> reviews</span>
						</h4>
						<p style="color: #000;text-align: left;padding: 0px 17px;margin-top: 23px;">
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> 99% Accuracy <br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> 100% Satisfaction guarantee<br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> Order today, receive within 1-3 days
						</p>
						
						<h2 class="new_prce" style="font-size: 35px;display: inline-block;">$29</h2>  
                        <h2 class="old_price" style="font-size: 25px;opacity: 0.25;display: inline-block;text-decoration: line-through;">$299</h2> 
						<p>You save <span class="saveda"><b>$270</b> (90%)</span></p>
						</div>
						
						

						<div id="order" class="form-container">
						<p style="text-align:center;margin-top: -20px;font-size: 15px;">Fill in the form below to book your reading!</p>
							<form id="signUpForm" data-toggle="validator" data-focus="false">
								<div class="form-group">
									<input type="text" class="form-control-input" id="sname" required>
									<label class="label-control" for="sname">Name</label>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<input type="email" class="form-control-input" id="semail" required>
									<label class="label-control" for="semail">Email</label>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
                                <div class="form_box">
    <div style="text-align:start;">Your Birth Date*</div>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/date.php'; ?>
  </div>
									<div class="help-block with-errors"></div>
								</div>
                                
                                <div class="form_box input-group form-group" style="    padding-bottom: 52px;">
  
        <input id="prio12" type="radio" name="priority" value="12">
        <label for="prio12"><span><i style="color:#ffaf00;" class="fas fa-bolt" aria-hidden="true"></i>12h</span></label>
        
		<input id="prio24" type="radio" name="priority" value="24">
        <label for="prio24"> <span><i style="color:#c19bff;" class="fas fa-stopwatch" aria-hidden="true"></i>24h</span></label>
		
		<input id="prio48" type="radio" name="priority" value="48" checked="true">
        <label for="prio48"> <span><i  class="fas fa-clock" aria-hidden="true"></i>48h</span></label>
      </div>
							
								<div class="form-group">
									<button id="submitbtn" type="submit" class="form-control-submit-button">PLACE AN ORDER <i class="fa-solid fa-arrow-right"></i></button>
								</div>
								
								<img style="width: 100%;" src="/images/payment-icons.webp">
								<p style="font-size:12px;margin-top:7px;margin-bottom: -10px;"><img style="width: 100%;max-width: 28px;padding: 3px;" src="/images/tarot-cards.png">Only accepting 4 more readings for today! <i class="fa-solid fa-fire-flame-curved"></i> 27 Sold</p>
								
							</form>
						</div>
								<br clear="all">
                    </div>  
                </div> 
				
				
	<div style="background-color:#f5f5f5;margin-right: 0px;margin-left: 0px;border-radius:0.5rem;" class="row">
         <div class="col-lg-12 col-xl-12">
            <div style="margin-top: 15px;margin-bottom:15px;" class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>INTRODUCING THE SOULMATE HEALER: YOUR KEY TO ETERNAL LOVE</h2>
                        <p>I am the Soulmate Healer, a master in the realm of psychic artistry, uniquely qualified to bring you face to face with your soul's true counterpart. I don't just offer predictions; I unlock the door to a love that will light up your life with joy, passion, and boundless fulfillment.</p>
                        <p>My soulmate portraits are no mere drawings; they're a magical blend of deep psychic connection and artistic talent. I channel a synergy of empathic projection, clairsentience, and clairvoyance, enhanced by my rich knowledge in spiritual healing and psychic artistry. I hold the power to see the unseen - to discern that perfect moment when you're ready to embrace true love and the ways to dismantle any walls that stand in your way.</p>
                        <p>All I need is your name and date of birth to embark on this mystical journey. My process is a sacred ritual: I plunge into a deep meditative trance, connecting to the cosmic consciousness where your soulmate awaits. The features, the life details, the love story that is destined for you, all come into vivid focus. My hand moves as if by magic, bringing to life an exquisitely detailed portrait, paired with a heartfelt description of your soulmate's personality. Finally, I tap into the vibrations of your aura, pinpointing that fateful moment when your worlds will collide.</p>
                        <p>  Finding your soulmate is a transformative experience, like the unfolding of a magnificent rose. Your love will be delicate yet enduring, replacing past sorrows with radiant joy. You will find yourself propelled forward, inspired to chase your dreams with a heart shielded by love and protection. </p>
	                     <p> <b> EXCLUSIVE BONUS: The Cosmic Alignment of Your Love Paths </b>  </p>
	                     <p>  Your soulmate is not just a romantic partner; they are the mirror of your soul, guiding you towards profound self-discovery and deeper understanding. Their presence will mark a seismic shift in your life, unlocking unparalleled emotional and spiritual growth. </p>
	                     <p>  My unparalleled insights have captivated the hearts of stars and celebrities, drawing thousands to my door in search of their soulmate. I have unfailingly answered each call, for every soul deserves to bask in the glow of true love. Should you choose to join this sacred journey, I will be your steadfast companion, ensuring that your heart's desires are manifested in their fullest form. </p>
	                     <p> <center> <b> A COMMITMENT TO PRIVACY: Digital Delivery Only </b> </center>   </p>
	                     <p> Your order will be securely delivered to the email address you provide, and will also be readily accessible from the user dashboard. Rest assured, your physical address remains confidential.  </p>
	
                        <a style="width:100%;text-align:center;" class="btn-solid-reg" href="#order">ORDER</a>
                    </div> <br clear="all">
                </div>  
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="/images/soulmate-04.png" alt="alternative">
                    </div> 
                </div> 
            </div>
         </div>
	</div>


<br/>	
	
	<div style="background-color:#f5f5f5;margin-right: 0px;margin-left: 0px;border-radius:0.5rem;" class="row">
         <div class="col-lg-12 col-xl-12">
            <div style="margin-top: 15px;margin-bottom:15px;" class="row">
			
			<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/review-total.php'; ?>
			
            <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/reviews.php'; ?>
			
			
            </div>
         </div>
	</div>
    <br>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/bestseller.php'; ?>

<br clear="all">			
				
            </div>  
        </div>  
    </header>  

    <script>
jQuery('input[name="priority"]').change(function(){
    if (this.value == '12') {
        jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$49').animate({'opacity': 1}, 200);});
		jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('$499').animate({'opacity': 0.25}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('<b>$450</b> (90%)').animate({'opacity': 1}, 400);});	
    }
    if (this.value == '24') {
		jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$39').animate({'opacity': 1}, 200);});
		jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('$399').animate({'opacity': 0.25}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('<b>$360</b> (90%)').animate({'opacity': 1}, 400);});
    }
    if (this.value == '48') {
		jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$29').animate({'opacity': 1}, 200);});
		jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('$299').animate({'opacity': 0.25}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('<b>$270</b> (90%)').animate({'opacity': 1}, 400);});
    }
})
</script>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/footer.php'; ?>