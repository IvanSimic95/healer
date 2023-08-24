<?php
$title = "Special One-Time-Offer!";
$description = "Almost Complete...";
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/header.php'; ?>

<style>
    .col-md-offset-3 {
        margin-left: 25%;
    }

    .ex-6-header {
        padding-top: 5rem;
    }

    @media (max-width: 767px) {
        .col-md-offset-3 {
            margin-left: 0%;
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
</style>

<!-- Header -->
<header class="ex-6-header" style="min-height:80vh">
    <div class="header-content">
        <div class="container" style="max-width:1100px;height:1000px;">

            <div style="margin-top:0px;">


              

            </div>
        </div>

        <style>
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