<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/session.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
date_default_timezone_set('Europe/Bucharest');
error_reporting(E_ALL);
ini_set('display_errors', '1');

$debounce = 1;
$startpixel  = 1;

$FBPixel  = "692217912347910";

$FBPurchasePixel = "";
$FBViewContent = "";
$productMETA = "";


//Data for FB Conversions API
$accessToken1 = "EAAxkvwzdc3kBAM3YGxUaEygEr7cdXJ9bxE8hGZC2tfmkW9BXAWZA67HcZB0SyoDYrMLs9Afgp086Yqm55zDg";
$accessToken2 = "DZAdoLErhsa7kHwFJVZA7C6HBMqdIsERWoJ8zXZAeaQtDqFgAMCTa8K0kVMdp3EPZBYGhnOjPjTOg9KkjPelq9Mu1qmvU9iTZBrm";
$fbAccessToken = $accessToken1 . $accessToken2;

$saccessToken1 = "EAAxkvwzdc3kBAIvvgoZABpvbTN46utbt6lItTSl7BLRJRSfZAk5BoZBnzk6X6ZB8beFD9nIUjZBKZB7Xf";
$saccessToken2 = "puADsSevecDUs63SUTIZBHalcWG5iUXCPsZA3qv5qpJNA5K6iNPyj05yKho68TZAPnqvKCDfgzondZBXksQxVKhMbYG2y8F5JQ7Mrm8a6";
$sfbAccessToken = $saccessToken1 . $saccessToken2;

$sendFBAPI = 0; #Set to 1 to send data via api


#error_reporting(0);
#ini_set('display_errors', 0);

//Error to show users that try to buy but they are blacklisted
$BlacklistError = "Unexpected Error";

//START Order Messages
$processingWelcome = "We are now processing your *Order #%ORDERID%*\n\nYour order will be delivered to your email in %PRIORITY% hours or less.\n\nIf this is your first order your new account will be created automatically\n\nIn order to automatically login to your account just <%EMAILLINK%|Click Here!>\n\n_With Love!_\n*Soulmate Healer*";


//Complete Soulmate, Twin Flame & Future Spouse Text added Before and After Order Text
$generalOrderHeader = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! As we continue, please make yourself comfortable and feel wholeheartedly everything I've seen while connecting with your aura and energy. I hope that sharing this with you will kindle a light of joy in your heart, and let you know that beautiful things are on the way.\n\n";
$generalOrderFooter = "\nIt was such a pleasure doing your reading, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Soulmate Healer* ";

//Complete text used when user purchased premium but no reading
$generalOrderHeaderNoReading = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! Your drawing is complete and I hope you will enjoy it!";
$generalOrderFooterNoReading = "\nIt was such a pleasure doing your drawing, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Soulmate Healer* ";

//Complete text when user purchased no reading and no premium
$generalOrderNoReading = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! \nIt was such a pleasure doing your drawing, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Soulmate Healer*  ";

//Complete Future Baby Text added Before and After Order Text
$babyOrderHeader = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! As we continue, please make yourself comfortable and feel wholeheartedly everything I've seen while connecting with your aura and energy. I hope that sharing this with you will kindle a light of joy in your heart, and let you know that beautiful things are on the way.\n\n";
$babyOrderFooter = "\n\nIt was such a pleasure doing your reading, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Soulmate Healer*";

//Complete Reading Text added Before and After Order Text
$readingOrderHeader = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! As we continue, please make yourself comfortable and feel wholeheartedly everything I've seen while connecting with your aura and energy. I hope that sharing this with you will kindle a light of joy in your heart, and let you know that beautiful things are on the way.\n\n";
$readingOrderFooter = "\n\nIt was such a pleasure doing your reading, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Soulmate Healer*";

//Complete Past Life Text added Before and After Order Text
$pastOrderHeader = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! As we continue, please make yourself comfortable and feel wholeheartedly everything I've seen while connecting with your aura and energy. I hope that sharing this with you will kindle a light of joy in your heart, and let you know that beautiful things are on the way.\n\n";
$pastOrderFooter = "\n\nIt was such a pleasure doing your reading, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Soulmate Healer*";


//Order Processing & Order Complete Notifications
$OrderProcessingMessage = "Your Order status is now set to *Processing*!";

$OrderCompleteMessage = "Your Order status is now set to *Complete*!";
$ContinueConvoMsg = "If you want to chat with Soulmate Healer, simply reply to this conversation!";
//END Order Messages

$monthlyEnergyHeader = "Dear %FIRSTNAME%,\n\nYour monthly Energy Reading for %MONTH% is ready!\n\n";
$monthlyEnergyFooter = "\n\nWith warmth and insight,\nSoulmate Healer";

$weeklyEnergyHeader = "Dear %FIRSTNAME%,\n\nYour Energy Reading for next week is ready!\n\n";
$weeklyEnergyFooter = "\n\nWith warmth and insight,\nSoulmate Healer";


//EMAIL TEXTS
$AbandonSubject = "The Timer's Going Off on Your Order!";
$AbandonMessage = "Look's like you forgot to finish your order... But don't worry, we kept it safe for you! Click the button below to finish your purchase & get closer to your soulmate.";
include_once $_SERVER['DOCUMENT_ROOT'].'/config/functions.php';
?>