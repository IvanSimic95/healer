<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
echo "Starting abbandoned-carts.php...<br><br>";


// 1. Check and select abanconed orders.

	$sqlpending = "SELECT * FROM `abandoned` WHERE active = '1'";
	$resultpending = $conn->query($sqlpending);
	if($resultpending->num_rows == 0) {
	   echo "No Orders with pending cart abandon email to be sent";
	}else{
        echo "Pending Orders: ".$resultpending->num_rows."<br><br>";

while($row = $resultpending->fetch_assoc()) {
   
			$id = $row["id"];
			$user = $row["user"];
			$email = $row["email"];
			$name = $row["name"];
			$orderID = $row["order_id"];
			$product = $row["product"];
			$time = $row["time"];
			$link = $row["link"];
			$first = $row["first"];
			$second = $row["second"];
			$third = $row["third"];
		
			//Get the time difference
			$delta = time() - strtotime($time);
			$difference = $delta / 60;
			echo "Minutes difference: ".$difference;

		//REMOVE AFTER TEST 
		if($user == "10018"){
			//First create TalkJS User
			$ch = curl_init();
			$data = [
			"id" => $user,
			"name" => $name,
			"email" => [$email],
			"role" => "abcustomer",
			"photoUrl" => "https://avatars.dicebear.com/api/adventurer/".$email.".svg?skinColor=variant02",
			"custom" => ["email" => $email, "lastOrder" => $orderID]
			];
			$data1 = json_encode($data);
			curl_setopt($ch, CURLOPT_URL, 'https://api.talkjs.com/v1/zQQphoB0/users/'.$orderID);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
				
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
				
			$headers = array();
			$headers[] = 'Content-Type: application/json';
			$headers[] = 'Authorization: Bearer sk_live_SMK73rLbx7kUaOJ2Pur99ZE6RVnygEVv';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				
			$result = curl_exec($ch);
			if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
			}
			curl_close($ch);
			echo $result;

			//Now create new conversation
			$ch2 = curl_init();

			$data2 = [
			"subject" => "Order #".$orderID." | ".$product,
			"participants" => ["administrator", $user],
			"custom" => ["status" => "Not Paid"]
			];

			$data22 = json_encode($data2);
			curl_setopt($ch2, CURLOPT_URL, 'https://api.talkjs.com/v1/zQQphoB0/conversations/'.$orderID);
			curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, 'PUT');

			curl_setopt($ch2, CURLOPT_POSTFIELDS, $data22);

			$headers = array();
			$headers[] = 'Content-Type: application/json';
			$headers[] = 'Authorization: Bearer sk_live_SMK73rLbx7kUaOJ2Pur99ZE6RVnygEVv';
			curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers);

			$result2 = curl_exec($ch2);
			if (curl_errno($ch2)) {
				echo 'Error:' . curl_error($ch2);
			}
			curl_close($ch2);
			echo $result2;
			//END CREATE CONVERSATION








			//Sending First Message
			if($difference >= "20" && $first == "0"){
				

				$sqlupdate = "UPDATE `abandoned` SET `first`='1' WHERE id='$id'";
				if ($conn->query($sqlupdate) === TRUE) {
					echo "sending first message";
					$message = "This is first message trying to recover your order";

					//SEND MESSAGE TO TALKJS
					$ch = curl_init();
					$data = [
					[
						"sender"  => "administrator",
						"text" => $message,
						"type" => "UserMessage"
					]];
					$data1 = json_encode($data);
					curl_setopt($ch, CURLOPT_URL, 'https://api.talkjs.com/v1/zQQphoB0/conversations/' . $orderID . '/messages');
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
					curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
					$headers = array();
					$headers[] = 'Content-Type: application/json';
					$headers[] = 'Authorization: Bearer sk_live_SMK73rLbx7kUaOJ2Pur99ZE6RVnygEVv';
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
					$result = curl_exec($ch);
					if (curl_errno($ch)) {
						echo 'Error:' . curl_error($ch);
					}
					curl_close($ch);

				}

			//Sending Second Message
			}elseif($difference >= "1440" && $first == "1" && $second == "0"){

				$sqlupdate = "UPDATE `abandoned` SET `second`='1' WHERE id='$id'";
				if ($conn->query($sqlupdate) === TRUE) {
					echo "sending second message";
					$message = "This is second message trying to recover your order";

					//SEND MESSAGE TO TALKJS
					$ch = curl_init();
					$data = [
					[
						"sender"  => "administrator",
						"text" => $message,
						"type" => "UserMessage"
					]];
					$data1 = json_encode($data);
					curl_setopt($ch, CURLOPT_URL, 'https://api.talkjs.com/v1/zQQphoB0/conversations/' . $orderID . '/messages');
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
					curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
					$headers = array();
					$headers[] = 'Content-Type: application/json';
					$headers[] = 'Authorization: Bearer sk_live_SMK73rLbx7kUaOJ2Pur99ZE6RVnygEVv';
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
					$result = curl_exec($ch);
					if (curl_errno($ch)) {
						echo 'Error:' . curl_error($ch);
					}
					curl_close($ch);

					
				}
			
			//Sending Third Message
			}elseif($difference >= "2880" && $first == "1" && $second == "1" && $third == "0"){
				
					echo "sending third message";
					$message = "This is third message trying to recover your order";

					//SEND MESSAGE TO TALKJS
					$ch = curl_init();
					$data = [
					[
						"sender"  => "administrator",
						"text" => $message,
						"type" => "UserMessage"
					]];
					$data1 = json_encode($data);
					curl_setopt($ch, CURLOPT_URL, 'https://api.talkjs.com/v1/zQQphoB0/conversations/' . $orderID . '/messages');
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
					curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
					$headers = array();
					$headers[] = 'Content-Type: application/json';
					$headers[] = 'Authorization: Bearer sk_live_SMK73rLbx7kUaOJ2Pur99ZE6RVnygEVv';
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
					$result = curl_exec($ch);
					if (curl_errno($ch)) {
						echo 'Error:' . curl_error($ch);
					}
					curl_close($ch);


			}	

			
		}

 
            
}

           
}


    echo "<br><hr>"
 ?>
