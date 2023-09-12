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
  if(isset($_POST['text'])){
    $text = htmlspecialchars(strip_tags($_POST['text']));
  }else{
    $text = "";
  }

$user_birthday = $_POST['form_day']."-".$_POST['form_month']."-".$_POST['form_year'];
$birthday = new DateTime($user_birthday);
$interval = $birthday->diff(new DateTime);

$user_age = $interval->y;


$user_name = $_POST['form_name'];
$user_name = htmlspecialchars($user_name, ENT_QUOTES);
$user_name = normalizeChars($user_name);
$user_email = $_POST['form_email'];
$order_product = $_POST['product'];
$order_priority = $_POST['priority'];
$order_date = date('Y-m-d H:i:s');

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


if($userGender=="male"){
$partnerGender = "female";
}else{
$partnerGender = "male";
}


if($order_product == "soulmate"){

  switch ($order_priority){
    case "48":
      $cbproduct = "513356";
      $cbprice = "29";
    break;
  
    case "24":
      $cbproduct = "513365";
      $cbprice = "39";
    break;
  
    case "1":
      $cbproduct = "513366";
      $cbprice = "59";
    break;
  }

}elseif($order_product == "twinflame"){


switch ($order_priority){
  case "48":
    $cbproduct = "513421";
    $cbprice = "29";
  break;

  case "24":
    $cbproduct = "513422";
    $cbprice = "39";
  break;

  case "1":
    $cbproduct = "513428";
    $cbprice = "59";
  break;
}

}elseif($order_product == "futurespouse"){

  
switch ($order_priority){
  case "48":
    $cbproduct = "513430";
    $cbprice = "29";
  break;

  case "24":
    $cbproduct = "513431";
    $cbprice = "39";
  break;

  case "1":
    $cbproduct = "513432";
    $cbprice = "59";
  break;
}

}elseif($order_product == "purification"){


      $cbproduct = "513773";
      $cbprice = "199";


    }elseif($order_product == "ask"){

      $cbproduct = "516008";
      $cbprice = "21";

}elseif($order_product == "futurebaby"){

  switch ($order_priority){
    case "48":
      
  $cbproduct = "513837";
  $cbprice = "23";
    break;
  
    case "24":
      $cbproduct = "514031";
      $cbprice = "33";
    break;
  
    case "1":
      $cbproduct = "514032";
      $cbprice = "53";
    break;
    }

}elseif($order_product == "personal"){
  $cbproduct = "513960";
  $cbprice = "49";
}elseif($order_product == "pastlife"){
  $cbproduct = "514037";
  $cbprice = "21";
}elseif($order_product == "energyw"){
  $cbproduct = "513783";
  $cbprice = "9";
}elseif($order_product == "thoughts"){
  $cbproduct = "000000";
  $cbprice = "23";
}elseif($order_product == "husband"){
  switch ($order_priority){
    case "48":
      $cbproduct = "00000";
      $cbprice = "29";
    break;
  
    case "24":
      $cbproduct = "00000000";
      $cbprice = "39";
    break;
  
    case "1":
      $cbproduct = "000000000";
      $cbprice = "59";
    break;
  }
}else{
  
switch ($order_priority){
  case "48":
    $cbproduct = "513421";
    $cbprice = "29";
  break;

  case "24":
    $cbproduct = "513422";
    $cbprice = "39";
  break;

  case "6":
    $cbproduct = "513428";
    $cbprice = "59";
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
    case "Ask":
      $order_product_nice = "Ask Me Anything";
      break;
    case "Personal":
      $order_product_nice = "Personal Psychic Reading";
      break;
    case "futurebaby":
      $order_product_nice = "Future Baby Drawing";
      break;
    case "Purification":
    $order_product_nice = "Psychic Purification";
    break;
    case "Energyw":
      $order_product_nice = "Weekly Energy Reading";
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


    //blacklist check
    $sql123 = "SELECT * FROM blacklist WHERE email = '".$user_email."'";
    $result123 = $conn->query($sql123);
    if ($result123){
    $row123 = mysqli_num_rows($result123);
    if ($row123 > 0){
      $lastRowInsert = "";
      $submitStatus = "Error";
      $ErrorMessage = $BlacklistError;
      $returnData = [$submitStatus,$ErrorMessage];
      echo json_encode($returnData);
}else{
               
   


$sql5 = "SELECT * FROM users WHERE email = '".$user_email."'";
    $result5 = $conn->query($sql5);
    if ($result5){
        $row5 = mysqli_num_rows($result5);
            if ($row5 > 0){
                $createUser = 0;
                $row2 = $result5->fetch_assoc();
                $userID = $row2['id'];
            }else{
                $createUser = 1;
            }
    }

    if($createUser == 1){
        $sql65 = "INSERT INTO users (first_name, last_name, full_name, email, age, dob, genderAcc, gender, partner_gender)
        VALUES ('$fName', '$lName', '$user_name', '$user_email', '$user_age', '$user_birthday', '$userGenderAcc', '$userGender','$partnerGender')";

        
        if ($conn->query($sql65) === TRUE) {
            $userID = mysqli_insert_id($conn);
        } else {
            //Error
        }
        

    }
    

$sql = "INSERT INTO orders (user_id, user_age, first_name, last_name, user_name, birthday, order_status, order_date, order_email, order_product, order_product_nice, order_priority, order_price, buygoods_order_id, gender, genderAcc, partner_gender) 
VALUES ('$userID', '$user_age', '$fName', '$lName', '$user_name', '$user_birthday', '$oStatus', '$order_date', '$user_email', '$order_product', '$order_product_nice', '$order_priority', '$cbprice', '', '$userGender', '$userGenderAcc', '$partnerGender')";



if(mysqli_query($conn,$sql)){
$lastRowInsert = mysqli_insert_id($conn);
$submitStatus = "Success";
$SuccessMessage = "Information saved, Redirecting you to Payment Page Now!";
$redirectPayment = "https://www.digistore24.com/product/".$cbproduct."?custom=".$lastRowInsert;

if($order_product == "ask"){
  $sql2 = "INSERT INTO ask (order_id, text) VALUES ('$lastRowInsert', '$text')";
 if ($conn->query($sql2) === TRUE) {

} else {
  //Error
}

}


$returnData = [$submitStatus,$SuccessMessage,$redirectPayment];

$_SESSION['product'] = $order_product_nice;
$_SESSION['name'] = $fName;
$_SESSION['shortproduct'] = str_replace("Drawing","",$order_product_nice);

$_SESSION['UserEmail'] = $user_email;
$_SESSION['UserID'] = $userID;

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

}
}

}else{
echo "Direct access is not allowed!";  
}
