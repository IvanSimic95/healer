<?php 
$t_product_name = "personal";
$t_product_form_name = "personal";
$title = "Personal Psychic Reading | Soulmate Healer";
$description = "I will provide you with your personal reading";

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; ?>
<?php


$lower = strtolower($t_product_name);
$sql = "SELECT * FROM review_total WHERE product = '".$t_product_name."'";
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
                                <img class="img-fluid" src="/images/reading.png" style="border-radius: 0.5rem;" alt="alternative">
                            </div>  
                        </div>  
                   </div>				

                   <div class="col-lg-6 col-xl-5">
						<div class="header-box">
                        <h5 style="margin-top: 10px;">Personal Psychic Reading</h5>
						<h4 style="text-align: center;font-size: 15px;font-weight: 500;margin-top:-10px;">
						<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><br>
						<span style="font-size:13px;"><?php echo $count; ?> reviews</span>
						</h4>
						<p style="color: #000;text-align: left;padding: 0px 17px;margin-top: 23px;">
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> 99% Accuracy <br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> 100% Satisfaction guarantee<br/>
						<i class="fas fa-check-square" style="color: #0bd10b;"></i> Order now, receive within 6hours
						</p>
						
						<h2 class="new_prce" style="font-size: 35px;display: inline-block;">$49</h2>  
                        <h2 class="old_price" style="font-size: 25px;opacity: 0.25;display: inline-block;text-decoration: line-through;">$299</h2> 
						<p>You save <span class="saveda"><b>$270</b> (90%)</span></p>
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
                         

                            <input class="product" type="hidden" name="product" value="personal">
                            <input class="product" type="hidden" name="priority" value="24">
                            <div id="error" class="alert alert-danger" style="display: none"></div>

								<div class="form-group">
									<button id="submitbtn" type="submit" class="form-control-submit-button">PLACE YOUR ORDER <i class="fa-solid fa-arrow-right"></i></button>
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
                        <h2>PERSONAL PSYCHIC READING</h2>
						<p><b> <center> <FONT COLOR="#d9480d">   DECODING THE MYSTERIES OF YOUR JOURNEY</FONT> </b> </center> </p>									
<p>Delve into the unseen dimensions of your life and unlock the mysteries of your past, present, and future with my <b> Personal Psychic Reading </b> service. </p>
<br> <p>Every reading I provide is a nuanced blend of intuitive insights, heightened perception, and deep spiritual connectivity. Guided by the universe&apos;s rhythms and resonances, I translate the ethereal whispers and subtle energies surrounding you into comprehensible revelations about your journey.</span></p>
<br> <p>A psychic reading isn&apos;t merely a predictive tool; it&apos;s a compass for your soul. Gain clarity on life&apos;s intricate mazes, discover latent potentials waiting to be unleashed, and understand the karmic threads weaving through your experiences.</span></p>
<p>&nbsp;</span></p>
<br> <p><strong>PROFOUND CLARITY: Navigating Life&apos;s Multidimensional Terrain</strong></p>
<p>Delve deep into the whispers of your heart, the ambitions driving your career, the subtle cues about your well-being, and other hidden intricacies shaping your life. With each revelation, you&apos;ll gain a clearer perspective, arming you with knowledge to face life&apos;s challenges and joys with renewed vigor.</span></p>
<br> <p><strong>INSIGHTS THAT RESONATE: Love, Achievement, Health, and Beyond</strong></p>
<p>This reading aims to be more than just a window; it&apos;s a beacon of enlightenment. Whether you&apos;re in search of direction in matters of the heart, seeking foresight for professional endeavors, or hoping to understand your physical and emotional well-being, this reading provides illumination across all spectrums.</span></p>
<br> <p>Countless seekers from varied walks of life have turned to these insights, not just for answers, but for deeper understanding and enlightenment. Choosing the &quot;Psychic Reading&quot; is a step towards harnessing your potential, deepening your self-awareness, and embracing life&apos;s profound truths.</span></p>
<br> <p><strong>OUR SACRED BOND: An Assurance of Genuine Insight</strong></p>
<p>If, at any moment, my revelations don&apos;t echo with your life&apos;s rhythm or inner truths, a full refund stands as our unwavering commitment to authenticity, integrity, and your spiritual journey.</span></p>
<br> <p><strong>UTMOST PRIVACY: Discreetly Delivered Insights</strong></p>
<p>Your detailed reading, steeped in profound revelations, will be sent with the utmost respect and privacy to your preferred email. Our connection, expansive in its reach and depth, remains a treasured and confidential exchange between us.</span></p>
<p>&nbsp;</span></p>
<p>&nbsp;</p>
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