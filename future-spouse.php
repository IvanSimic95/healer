<?php 
$t_product_name = "futurespouse";
$t_product_form_name = "futurespouse";
$title = "Future Spouse Drawing | Soulmate Healer";
$description = "I will provide you with your future spouse drawing";

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
                                <img class="img-fluid" src="/images/future-spouse-01.png" style="border-radius: 0.5rem;" alt="alternative">
                            </div>  
                        </div>  
                   </div>				

                   <div class="col-lg-6 col-xl-5">
						<div class="header-box">
                        <h5 style="margin-top: 10px;">Future Spouse Drawing</h5>
						<h4 style="text-align: center;font-size: 15px;font-weight: 500;margin-top:-10px;">
						<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>
						<span style="font-size:13px;"><?php echo $count; ?> reviews</span>
						</h4>
						<p style="color: #000;text-align: left;padding: 0px 17px;margin-top: 23px;">
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> 99% Accuracy <br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> 100% Satisfaction guarantee<br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> Order now, receive within 6hours
						</p>
						
						<h2 class="new_prce" style="font-size: 35px;display: inline-block;">$29</h2>  
                        <h2 class="old_price" style="display:none!important;font-size: 25px;opacity: 0.25;display: inline-block;text-decoration: line-through;">$299</h2> 
						<p style="display:none;">You save <span class="saveda"><b>$270</b> (90%)</span></p>
						</div>
						
						

						<div id="order" class="form-container">
						<p style="text-align:center;margin-top: -20px;font-size: 15px;">Fill in the form below to book your reading!</p>
                        <form id="ajax-form" data-toggle="validator" data-focus="false">
								<div class="form-group">
									<input type="text" class="form-control-input" id="sname" name="form_name" required>
									<label class="label-control" for="sname">Full Name</label>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<input type="email" class="form-control-input" id="semail" name="form_email" required>
									<label class="label-control" for="semail">Email Address</label>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
                                <div class="form_box">
                                    <div style="text-align:start;">Your Birth Date:</div>
                                    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/date.php'; ?>
                                </div>
									<div class="help-block with-errors"></div>
								</div>
                                
                                <div class="form_box input-group form-group" style="    padding-bottom: 52px;">
  
                                    <input id="prio6" type="radio" name="priority" value="6">
                                    <label for="prio6"><span><i style="color:#ffaf00;" class="fas fa-bolt" aria-hidden="true"></i>6h</span></label>
                                    
                                    <input id="prio24" type="radio" name="priority" value="24">
                                    <label for="prio24"> <span><i style="color:#c19bff;" class="fas fa-stopwatch" aria-hidden="true"></i>24h</span></label>
                                    
                                    <input id="prio48" type="radio" name="priority" value="48" checked="true">
                                    <label for="prio48"> <span><i  class="fas fa-clock" aria-hidden="true"></i>48h</span></label>
                                </div>

                            <input class="product" type="hidden" name="product" value="futurespouse">
                            <div id="error" class="alert alert-danger" style="display: none"></div>

								<div class="form-group">
									<button id="submitbtn" type="submit" class="form-control-submit-button">PLACE AN ORDER <i class="fa-solid fa-arrow-right"></i></button>
								</div>
								
								<img style="width: 100%;" src="/images/payment-icons.webp">
								<p style="font-size:12px;margin-top:7px;margin-bottom: -10px;"><img style="width: 100%;max-width: 28px;padding: 3px;" src="/images/tarot-cards.png">Only accepting 1 more order for today! <i class="fa-solid fa-fire-flame-curved"></i> 4 Sold</p>
								
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
                        <h2>FUTURE SPOUSE PSYCHIC DRAWING</h2>
						<p><b> <center> <FONT COLOR="#d9480d"> A GLIMPSE INTO YOUR DESTINED PARTNERSHIP </FONT> </b> </center> </p>						
<br> <p>Step into the realm of the unknown and unveil the face of your future life partner with the <strong>Future Spouse Psychic Drawing.</strong> While fate writes a captivating story, I offer you the chance to peek into its pages, introducing you to the one destined to stand by your side.</p>
<br> <p>Every sketch I craft is a harmonious blend of intuitive insights, psychic vibrations, and artistry. Using a mix of clairvoyance and deep spiritual connection, I embark on a journey through time, capturing the essence of the person with whom you&apos;ll share life&apos;s most intimate moments.</p>
<br> <p>To initiate this sacred process, I&apos;ll need your name and birthdate. Guided by the stars and the universe&apos;s whispers, I&apos;ll channel your future spouse&apos;s energy. The resulting portrait transcends mere lines and shades; it echoes with the laughter, dreams, and shared moments awaiting you.</p>
<br> <p>Unveiling your future spouse isn&apos;t just about knowing their face. It&apos;s about preparing your heart for the love, lessons, and shared experiences that will define your journey together.</p>
<br> <p><strong>EXCLUSIVE PERSPECTIVE: Deciphering the Astral Blueprint of Your Romantic Destiny</strong></p>
<p>With each intricately crafted portrait, I journey deeper into the celestial tapestry, unveiling the intricate weave of fates that connect you to your future spouse. Discover the preordained encounters that will seamlessly merge your paths, the trials destined to solidify your union, and the pivotal moments that will shape the core of your shared experiences. By interpreting this astral blueprint, I illuminate the profound nuances, commitments, and ethereal pledges sculpted by the universe for your shared journey.</p>
<br> <p>From individuals seeking clarity to celebrated personalities wanting a glance into their love future, my drawings have illuminated the path for many. Choosing the &quot;Future Spouse Psychic Drawing&quot; is more than a purchase; it&apos;s an invitation to a transformative experience of love and self-discovery.</p>
<br> <p><strong>OUR VOW OF TRUST: A Bond That Respects Your Faith</strong></p>
<p>If my vision doesn&apos;t unfold as perceived within the provided timeframe, a full refund will be honored, a testament to our shared trust and spiritual commitment.</p>
<br> <p><strong>UTMOST CONFIDENTIALITY: Digital Delivery Ensuring Privacy</strong></p>
<p>Your uniquely crafted drawing and accompanying insights will be discreetly delivered to your provided email, safeguarding your privacy. While the universe may know your story, our journey together remains confidential.</p>
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
    if (this.value == '6') {
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