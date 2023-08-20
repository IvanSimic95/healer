<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

if(!$conn){ //CHECK DB CONNECTION FIRST
$submitStatus = "Database Error!";
$EMessage = 'Could not Connect to Database Server:'.mysqli_error($conn);
$returnData = [$submitStatus,$EMessage];
echo json_encode($returnData);
die();
}

$request = $_SERVER['REQUEST_METHOD'];

if ($request === 'POST') {

$user_birthday = $_POST['form_day']."-".$_POST['form_month']."-".$_POST['form_year'];
$birthday = new DateTime($user_birthday);
$interval = $birthday->diff(new DateTime);

$user_age = $interval->y;

$pixel_number = $_POST['pixel_number'];


$user_name = $_POST['form_name'];
$user_name = htmlspecialchars($user_name, ENT_QUOTES);
$user_name = normalizeChars($user_name);
$user_email = $_POST['form_email'];
$order_product = $_POST['product'];
$order_priority = $_POST['priority'];
$order_date = date('Y-m-d H:i:s');

$affid = $_POST['aff_id'];
$subid = $_POST['subid'];
$subid2 = $_POST['subid2'];

$newaffid = $_POST['affid'];
$s1 = $_POST['s1'];
$s2 = $_POST['s2'];

isset($_POST['fbp']) ? $uFBP = $_POST['fbp'] : $uFBP = "";
isset($_POST['fbc']) ? $uFBC = $_POST['fbc'] : $uFBC = "";

$parser = new TheIconic\NameParser\Parser();
$name = $parser->parse($user_name);

$fName = $name->getFirstname();
$lName = $name->getLastname();

$oStatus = "pending";
    
$findGenderFunc = findGender($fName);
$userGender = $findGenderFunc['0']['gender'];
$userGenderAcc = $findGenderFunc['0']['accuracy'];

$fbCampaign = $_SESSION['fbCampaign'];
$fbAdset = $_SESSION['fbAdset'];
$fbAd = $_SESSION['fbAd'];

$user_agent = $_POST['user_agent'];
$user_ip = $_POST['user_ip'];

if($userGender=="male"){
$partnerGender = "female";
}else{
$partnerGender = "male";
}

$returnURL = "https://".$domain."/success.php";
$returnEncoded = base64_encode($returnURL);



$_SESSION['orderFName'] = $fName;
$_SESSION['orderLName'] = $lName;
$_SESSION['orderAge'] = $user_age;
$_SESSION['orderBirthday'] = $user_birthday;
$_SESSION['orderGender'] = $userGender;
$_SESSION['orderPartnerGender'] = $partnerGender;


if($order_product == "futurespouse"){

  switch ($order_priority){
    case "48":
      $cbproduct = "16";
      $cbprice = "29.99";
    break;
  
    case "24":
      $cbproduct = "17";
      $cbprice = "39.99";
    break;
  
    case "12":
      $cbproduct = "18";
      $cbprice = "49.99";
    break;
  }

}else{


switch ($order_priority){
  case "48":
    $cbproduct = "1";
    $cbprice = "29.99";
  break;

  case "24":
    $cbproduct = "2";
    $cbprice = "39.99";
  break;

  case "12":
    $cbproduct = "3";
    $cbprice = "49.99";
  break;
}

}
$order_product_nice = "Soulmate Drawing";

$order_product_test = ucwords($order_product);
switch ($order_product_test) {
  case "Husband":
    if($partnerGender=="male"){
      $order_product_nice  = "Future Husband Drawing";
    }else{
        $order_product_nice  = "Future Wife Drawing";
    }
    break;
    case "Futurespouse":
      if($partnerGender=="male"){
        $order_product_nice  = "Future Husband Drawing";
      }else{
        $order_product_nice  = "Future Wife Drawing";
      }
      break;
case "Pastlife":
    $order_product_nice = "Past Life Drawing";
    break;
case "Baby":
    $order_product_nice = "Future Baby Drawing";
    break;
case "Soulmate":
    $order_product_nice = "Soulmate Drawing";
    break;
case "Twinflame":
    $order_product_nice = "Twin Flame Drawing";
        break;
        case "Spiritguide":
          $order_product_nice = "Spirit Guide Drawing";
              break;
              case "Higherself":
                $order_product_nice = "Higher Self Drawing";
                    break;
}

$sql = "INSERT INTO orders (cookie_id, user_age, first_name, last_name, user_name, birthday, order_status, order_date, order_email, order_product, order_product_nice, order_priority, order_price, buygoods_order_id, user_sex, genderAcc, pick_sex, user_agent, user_ip, pixel, fbc, fbp, fbCampaign, fbAdset, fbAd, affid, s1, s2) 
VALUES ('$cookie_id', '$user_age', '$fName', '$lName', '$user_name', '$user_birthday', '$oStatus', '$order_date', '$user_email', '$order_product', '$order_product_nice', '$order_priority', '$cbprice', '', '$userGender', '$userGenderAcc', '$partnerGender', '$user_agent', '$user_ip', '$pixel_number', '$uFBC', '$uFBP', '$fbCampaign', '$fbAdset', '$fbAd', '$newaffid', '$s1', '$s2')";

if(mysqli_query($conn,$sql)){
$lastRowInsert = mysqli_insert_id($conn);
$subidfull5 = $lastRowInsert."|".$domain."|".$cookie_id."|".$cookie_id2."|".$cookie_id3;
$subid5 = base64_encode($subidfull5);
$submitStatus = "Success";
$SuccessMessage = "Information saved, Redirecting you to Payment Page Now!";
$redirectPayment = "https://gabeaff_melissapsy.pay.clickbank.net/?cbskin=39040&cbtimer=1593&cbfid=52316&cbitems=".$cbproduct."&name=".$user_name."&email=".$user_email."&cookie_ID=".$cookie_id."&order_ID=".$lastRowInsert."&main_ID=".$lastRowInsert."&encdata=".$subid5;

$recoverPayment = "https://gabeaff_melissapsy.pay.clickbank.net/?cbskin=39040&cbtimer=1661&cbfid=52316&cbitems=".$cbproduct."&name=".$user_name."&email=".$user_email."&cookie_ID=".$cookie_id."&order_ID=".$lastRowInsert."&encdata=".$subid5."&main_ID=".$lastRowInsert."&femail=recovery&coupon=KM6CMMI";

$sqlupdate = "UPDATE `orders` SET `cart_recover`='$recoverPayment' WHERE order_id='$lastRowInsert'";
if ($conn->query($sqlupdate) === TRUE) {
 
} 



$returnData = [$submitStatus,$SuccessMessage,$redirectPayment];

$_SESSION['UserEmail'] = $user_email;

$_SESSION['fbc'] = $UserFBC;
$_SESSION['fbp'] = $UserFBP;

$_SESSION['fbfirepixel'] = 1;
$_SESSION['fborderID'] = $lastRowInsert;
$_SESSION['fborderPrice'] = $cbprice;
$_SESSION['fbproduct'] = $order_product;

$_SESSION['fbfirepixel'] = 1;

$_SESSION['PixelDATA'] = "1";
$_SESSION['Pixelemail'] = $user_email;
$_SESSION['Pixelfname'] = $fName;
$_SESSION['Pixellname'] = $lName;
$_SESSION['Pixelgender']= $userGender;
$_SESSION['Pixeldob']   = date("Ymd", strtotime($user_birthday));
$_SESSION['PixelID']    = $lastRowInsert;

echo json_encode($returnData);
} else {
$lastRowInsert = "";
$submitStatus = "Error";
$ErrorMessage = "Error: " . $sql . "" . mysqli_error($conn);
$returnData = [$submitStatus,$ErrorMessage];
echo json_encode($returnData);
}
$_SESSION['lastorder'] = $lastRowInsert;

$conn->close();



}else{
echo "Direct access is not allowed!";  
}


?>