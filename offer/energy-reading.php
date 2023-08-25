<?php
$title = "Special One-Time-Offer!";
$description = "Almost Complete...";
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/header.php'; ?>
<script src="https://www.digistore24.com/service/digistore.js"></script><script>digistoreUpsell()</script>
<style>
    .col-md-offset-3 {
        margin-left: 25%;
    }

    .ex-6-header {
        padding-top: 5rem;
    }
    #submitbtn{
        font-size:28px;
        width: 80%;
    text-align: center;
  
    }

    @media (max-width: 767px) {
        .col-md-offset-3 {
            margin-left: 0%;
        }
        #submitbtn{
            font-size:18px;
        }
    }

    .navbar {
        display: none;
    }

    .progress-bar {

        border-radius: 0.33rem;
        height: 40px;
    }

    .small-progress-bar .progress-bar {
        line-height: 36px;
        height: 35px;
        font-size: 14px;
    }

    .progress-bar-striped_active {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        -webkit-background-size: 40px 40px;
        background-size: 40px 40px;
        -webkit-animation: progress-bar-stripes 2s linear infinite reverse;
        -o-animation: progress-bar-stripes 2s linear infinite reverse;
        animation: progress-bar-stripes 2s linear infinite reverse;
    }

    .progress-bar {
        -webkit-transition: width .25s ease, height .25s ease, font-size .25s ease;
        -moz-transition: width .25s ease, height .25s ease, font-size .25s ease;
        -ms-transition: width .25s ease, height .25s ease, font-size .25s ease;
        -o-transition: width .25s ease, height .25s ease, font-size .25s ease;
        transition: width .25s ease, height .25s ease, font-size .25s ease;
    }

    .progressbar_w_75 {
        width: 75%;
    }

    .progress {
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        margin-top: 15px;
        border-radius: 0.33rem;
        height: 40px;
    }
    .img-fluid{
        width:350px;
    }
    .elButton{
        padding-top:15px;
        padding-bottom:15px;
        padding-left:35px;
        padding-right:35px;
        margin-top:30px;
    }

    .elButtonShadow3 {
    -webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.7);
    -moz-box-shadow: 0 1px 5px rgba(0,0,0,0.7);
    box-shadow: 0 1px 5px rgba(0,0,0,0.7);
}

.elButtonShadow3 {
    -webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.7);
    -moz-box-shadow: 0 1px 5px rgba(0,0,0,0.7);
    box-shadow: 0 1px 5px rgba(0,0,0,0.7);
}

.elButtonSubtle {
    border: 1px solid rgba(0,0,0,0.1);
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2);
    -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2);
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 4px;
}


.elButton{
    font-weight:bold;
    text-decoration:none;
    color: rgb(255, 255, 255); 
    background-color: orange; 
    font-size: 28px;
}
p{
    max-width:none!important;
}
.text{
    padding:10px;
    text-align:start;
}
.textbold{
    font-weight:bold;
}
.textcenter{
    text-align:center;
}
</style>

<!-- Header -->
<header class="ex-6-header" style="min-height:80vh">
    <div class="header-content">
        <div class="container" style="max-width:1100px;">

            <div style="margin-top:0px;">


                <div class="p-4" style="border:2px solid orange; border-radius:0.5rem;background-color: white;">
                    <div class="row m-0 p-0 progress-pc" style="border:1px solid;border-color: rgba(47, 47, 47, 0.168627);border-radius:0.33rem;">
                        <div class="col-12 col-sm-12 col-md-4" style="padding:10px; font-weight:bold;">STEP 1: ORDER COMPLETE</div>
                        <div class="col-12 col-sm-12 col-md-4" style="padding:10px; background: orange; color:white; font-weight:bold;">STEP 2.1: CUSTOMIZE ORDER</div>
                        <div class="col-12 col-sm-12 col-md-4" style="padding:10px; font-weight:bold;">STEP 3: SELECTIONS COMPLETED</div>
                    </div>

                    <div class="row m-0 p-0 progress-phone" style="border:1px solid;border-color: rgba(47, 47, 47, 0.168627);border-radius:0.33rem;">
                        <div class="col-4 " style="padding:10px; font-weight:bold;">STEP 1</div>
                        <div class="col-4 " style="padding:10px; background: orange; color:white; font-weight:bold;">STEP 2</div>
                        <div class="col-4 " style="padding:10px; font-weight:bold;">STEP 3</div>
                    </div>

                    <h1 style="margin:0;padding-top:25px;padding-bottom:10px;">A Special Thank-You Gift</h1>

                    <div class="progress">
                        <div class="progress-bar progress-bar-striped_active progressbar_w_75" role="progressbar" style="background-color: orange;">Almost Complete...</div>
                    </div>


                    <h1 style="margin:0;padding-top:25px;padding-bottom:10px;">Now I'm Going To Make You A Very Special, One-Time Offer…</h1>
                    <h6>..that's only available right here - <u>right now</u>.</h6>

                    <img class="img-fluid" src="/images/products/energy-reading.png" style="width:450px;"><br>

                    <div class="text"><p style="font-size: 23px;font-weight:bold;">I want to send you a monthly energy reading for special guidance.</p>  </div> 
                    
                    <div class="text"><p style="font-size:22px;max-width:none;">If you give me your permission, I will use your unique natal chart and my lifetime of experience in astrology and reading the stars in order to help you find your soulmate and navigate the challenges that your relationship will undoubtedly face.</p></div>
                    
                    <div class="text"><p style="font-size:22px;max-width:none;">Many relationships undoubtably fail due to inexperienced people trying to navigate through the rough terrain of love on their own. But a skilled person can make sure you’re always going in the right direction, and that you always know what’s coming in the distance. </p></div>
                    
                    <div class="text"><p style="font-size:22px;max-width:none;">As someone who is passionate about astrology and has experience with cold reading technique, I can create convincing and unique predictions for you and your soulmate. </p></div>
                    
                    <div class="text textcenter"><p class="textbold" style="font-size:22px;max-width:none;">"Allow me to be your personal cupid and guardian angel that will deliver a guide to help you through love and life on a monthly basis” </p></div>
                    
                    <div class="text textcenter"><p class="textbold" style="font-size:22px;max-width:none;">Get my monthly energy reading for only $15/month </p><p>(a 50% discount from the normal price of $30/month)</p><p style="font-size:22px;max-width:none;">You will lock this discounted price in for LIFE -- your price will never increase!</p></div>
                    
                    <img class="img-fluid" src="/images/red-arrow.png"><br>

                    <a href="https://www.digistore24.com/answer/yes?template=light" id="submitbtn" type="submit" class="form-control-submit-button submit-pc"> YES! Add to order!</a>

                    <a href="https://www.digistore24.com/answer/yes?template=light" id="submitbtn" type="submit" class="form-control-submit-button submit-phone"><i class="fa fa-shopping-cart"></i> Add to order!</a>

                    <div class="text textcenter"><p style="font-size:100%;">You can cancel your energy reading membership anytime by contacting us directly.  It's that simple.</p></div>

                    <div style="padding:25px;"><a href="https://www.digistore24.com/answer/no" id="link-8186-428-431" class="" target="_parent">No Thanks, I don't need this now</a></div>

                    <div style="padding:25px;"><p style="font-size:22px;max-width:none;">This one-time offer is only available right here, right now. When you leave this page, it's gone forever and you won't have the option for color, so click the button now...</p></div>

                    <div style="padding:25px;"><p style="font-size:20px;max-width:none;">Plus get a 60 day money back guarantee if you aren't satisfied.</p></div>

                </div>


            </div>
        </div>

        <style>
            .submit-pc{
                display:block
            }
            .progress-pc{
                display:flex;
            }
            .submit-phone, .progress-phone{
                display:none;
            }
            @media only screen and (max-width: 400px) {
                .submit-pc{
                    display:none;
                }
                .submit-phone{
                display:block;
            }
                
            }

            @media only screen and (max-width: 768px) {
                .progress-pc{
                    display:none;
                }
                .progress-phone{
                display:flex;
            }
                
            }
            .form-control-submit-button{
                font-size: 28px;
    font-weight: bold;
    /* vertical-align: middle; */
    line-height: 50px;
    padding: 15px 35px 15px 35px;
    height: 80px;
    border-radius: 0.33rem;

    background-color: orange;
    text-decoration: none;
    width: fit-content;
    margin: 0 auto;
            }
            #finalnotice {
                color: #3c763d;
                background-color: #dff0d8;
                border-color: #d6e9c6;
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid #0000;
                border-radius: 6px;
                text-align: center;
                font-weight: bold;
                font-size: 105%;
            }

            #finalnoticeinfo {
                color: #004085;
                background-color: #cce5ff;
                border-color: #b8daff;
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid #0000;
                border-radius: 6px;
                text-align: center;
                font-weight: bold;
                font-size: 105%;
            }

            .label-control {
                top: 0.125rem !important;
                opacity: 1 !important;
                font-size: 0.75rem !important;
                font-weight: 700 !important;
            }
        </style>


        <br clear="all">

    </div>
    </div>
</header>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/footer.php'; ?>