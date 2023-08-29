<?php 
$t_product_name = "FUTURE BABY";
$t_product_form_name = "futurebaby";
$title = "Future Baby Drawing | Soulmate Healer";
$description = "I will provide you with your future baby drawing";

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; ?>
<?php


$lower = strtolower($t_product_name);
$sql = "SELECT * FROM review_total WHERE product = '".$t_product_form_name."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = $row['reviews'];
?>
    <!-- Header -->
    <header class="ex-6-header">
        <div class="header-content">
            <div class="container">
                <div class="row">
	
                   <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="/images/future-baby.png" style="border-radius: 0.5rem;" alt="alternative">
                            </div>  
                        </div>  
                   </div>				

                   <div class="col-lg-6 col-xl-5">
						<div class="header-box">
                        <h5 style="margin-top: 10px;">Future Baby Drawing Psychic Drawing</h5>
						<h4 style="text-align: center;font-size: 15px;font-weight: 500;margin-top:-10px;">
						<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>
						<span style="font-size:13px;"><?php echo $count; ?> reviews</span>
						</h4>
						<p style="color: #000;text-align: left;padding: 0px 17px;margin-top: 23px;">
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> 99% Accuracy <br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> 100% Satisfaction guarantee<br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> Order now, receive within 6 hours
						</p>
						
						<h2 class="new_prce" style="font-size: 35px;display: inline-block;">$15</h2>  
                        <h2 class="old_price" style="font-size: 25px;opacity: 0.25;display: inline-block;text-decoration: line-through;">$149</h2> 
						<p>You save <span class="saveda"><b>$134</b> (90%)</span></p>
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
                                <div style="text-align:start;">Delivery Priority:</div>
                                <div class="form_box input-group form-group" style="    padding-bottom: 52px;">
  
                                    <input id="prio6" type="radio" name="priority" value="6">
                                    <label for="prio6"><span><i style="color:#ffaf00;" class="fas fa-bolt" aria-hidden="true"></i>6h</span></label>
                                    
                                    <input id="prio24" type="radio" name="priority" value="24">
                                    <label for="prio24"> <span><i style="color:#c19bff;" class="fas fa-stopwatch" aria-hidden="true"></i>24h</span></label>
                                    
                                    <input id="prio48" type="radio" name="priority" value="48" checked="true">
                                    <label for="prio48"> <span><i  class="fas fa-clock" aria-hidden="true"></i>48h</span></label>
                                </div>
                                
                              

                            <input class="product" type="hidden" name="product" value="futurebaby">
                        
                            <div id="error" class="alert alert-danger" style="display: none"></div>

								<div class="form-group">
									<button id="submitbtn" type="submit" class="form-control-submit-button">PLACE YOUR ORDER <i class="fa-solid fa-arrow-right"></i></button>
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
                        <h2>FUTURE BABY PSYCHIC DRAWING</h2>
						<p><b> <center> <FONT COLOR="#d9480d">  BEHOLD TOMORROW'S BLESSING, TODAY</FONT> </b> </center> </p>			
 <p>Venture beyond the veil of time and witness a heartwarming preview of your family&apos;s radiant addition with the &quot;Future Baby Psychic Drawing.&quot; Unfolding tomorrow&apos;s joy today, this experience connects you with the tender promise of life yet to blossom.</p>
<br><p>Each portrait I craft is an intimate synthesis of psychic intuition, artistry, and profound emotional resonance. By channeling the energies of future potentialities and aligning with life&apos;s wondrous cycles, I capture not just a likeness but the essence of your unborn child.</p>
<br><p>To initiate this delicate voyage, I&apos;ll need your name and birthdate. Bathed in the gentle glow of creation and universal harmonies, I&apos;ll venture into future possibilities, sketching a portrayal that resonates with love, innocence, and the unique spirit of your forthcoming child.</p>
<br><p>Witnessing the face of your future baby is about more than mere anticipation. It&apos;s a celestial connection, a bridge between the present&apos;s love and tomorrow&apos;s boundless potential.</p>
<br><p><strong>PROFOUND REVELATIONS: Navigating the Nebulae of Your Lineage</strong></p>
<p>With the drawing, I extend deeper insights into the astral trails surrounding your lineage. Gain understanding of the karmic bonds, ancestral echoes, and soul journeys that contribute to the arrival of this new soul into your world. Recognize the patterns and promises interwoven through generations, readying your heart and soul for the love and wisdom this new life will usher in.</p>
<br><p>From hopeful parents-to-be to families awaiting another miracle, my drawings have been a beacon of hope and a testament to the beauty of life&apos;s cycles. By choosing the <b> Future Baby Psychic Drawing</b>, you&apos;re not just seeking a glimpse; you&apos;re celebrating the continuum of life, love, and legacy.</p>
<br><p><strong>A SACRED PROMISE: Your Trust, Our Ethereal Pact</strong></p>
<p>If the constellations of time and life evolve differently than perceived, you are guaranteed a full refund. This vow honors the fluid nature of life and our enduring commitment to truth and trust.</p>
<br><p><strong>ABSOLUTE PRIVACY: Digitally Delivered with Reverence</strong></p>
<p>Your cherished portrait and profound insights will be securely and discreetly dispatched to your nominated email, ensuring that this intimate journey remains a sacred communion between us.</p>              
				 <a style="width:100%;text-align:center;" class="btn-solid-reg" href="#order">ORDER </a>
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
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/allproducts.php'; ?>

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