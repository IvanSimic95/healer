<?php 
$t_product_name = "pastlife";
$t_product_form_name = "pastlife";
$title = "Past Life Drawing | Soulmate Healer";
$description = "I will provide you with your psychic purification";

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; ?>
<?php


$lower = strtolower($t_product_name);
$sql = "SELECT * FROM review_total WHERE product = '".$t_product_name."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if(isset($row['reviews'])){
    $count = $row['reviews'];

}else{
    $count = 1128;
}

?>
    <!-- Header -->
    <header class="ex-6-header">
        <div class="header-content">
            <div class="container">
                <div class="row">
	
                   <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="/images/products/pastlife.png" style="border-radius: 0.5rem;" alt="alternative">
                            </div>  
                        </div>  
                   </div>				

                   <div class="col-lg-6 col-xl-5">
						<div class="header-box">
                        <h5 style="margin-top: 10px;">Past Life Drawing</h5>
						<h4 style="text-align: center;font-size: 15px;font-weight: 500;margin-top:-10px;">
						<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>
						<span style="font-size:13px;"><?php echo $count; ?> reviews</span>
						</h4>
						<p style="color: #000;text-align: left;padding: 0px 17px;margin-top: 23px;">
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> 99% Accuracy <br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> 100% Satisfaction guarantee<br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> Order today, receive within 1-3 days
						</p>
						
						<h2 class="new_prce" style="font-size: 35px;display: inline-block;">$21</h2>  
                        <h2 class="old_price" style="font-size: 25px;opacity: 0.25;display: inline-block;text-decoration: line-through;">$499</h2> 
						<p>You save <span class="saveda"><b>$480</b> (95%)</span></p>
						</div>
						
						

						<div id="order" class="form-container">
						<p style="text-align:center;margin-top: -20px;font-size: 15px;">Fill in the form below to book your reading!</p>
                        <form id="ajax-form" data-toggle="validator" data-focus="false">
								<div class="form-group">
									<input type="text" class="form-control-input" id="sname" name="form_name" required>
									<label class="label-control" for="sname">Name</label>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<input type="email" class="form-control-input" id="semail" name="form_email" required>
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
                                
                               

                            <input class="product" type="hidden" name="product" value="pastlife">
                            <input class="product" type="hidden" name="priority" value="24">
                            <div id="error" class="alert alert-danger" style="display: none"></div>

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
                        <h2>Rediscover Yourself: Delve into Your Past Life Psychic Portrait</h2>
                        <p>In the vast chronicles of time, every soul leaves an indelible imprint. These imprints hold secrets, lessons, and memories that shape who we are today. Have you ever wondered why you're drawn to a particular era, place, or even a melody that seems hauntingly familiar? These aren't mere coincidences but echoes from a life once lived. The <b>Past Life Psychic Portrait</b> is your unique gateway to unlock these mysteries.</p>
                        <p>Crafted with unparalleled precision by the renowned Soulmate Healer, this service offers more than just a visual representation of your past self. It unveils the rich tapestry of experiences, emotions, and events that culminated into the person you are now. Each portrait is not merely an artistic endeavor but a mirror into a realm long gone, reflecting a version of you waiting to be acknowledged.</p>
                        <p>Understanding our past lives offers an invaluable perspective on our current existence. It deciphers repetitive patterns we unknowingly follow, provides context to those unexplained fears or affinities, and offers closure to unresolved emotions carried over lifetimes. Recognizing and embracing these facets can be profoundly healing. By making peace with our past, we pave a clearer path for our present and future.</p>
                        <p>Moreover, knowledge of your past life can also provide a deeper understanding of your relationships. Recognizing soul connections from lifetimes ago can help foster stronger bonds in this one. It offers clarity on why certain individuals have such a significant impact on our lives or why we feel an inexplicable bond with them.</p>
                        <p>With the <b>Past Life Psychic Portrait</b>, you're not just receiving a piece of art; you're gaining a tool of self-discovery and empowerment. It's an insightful compass, guiding you to make more informed decisions, build more meaningful connections, and lead a life aligned with your soul's true purpose.</p>
                        <p>In a world where the future is uncertain, what better way to arm oneself than with the wisdom of the past? Don't let your past lives remain mere shadows. Let them illuminate your current journey, filling it with understanding, purpose, and unparalleled depth.</p>
                        <p>Embrace the continuum of your soul's story. By knowing where you've been, you shape where you're headed with greater clarity and conviction.</p>
                        
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
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/allproducts.php'; ?>

<br clear="all">			
				
            </div>  
        </div>  
    </header>  

  
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/footer.php'; ?>
    