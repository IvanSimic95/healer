<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
echo "Starting abbandoned-carts.php...<br><br>";


// 1. Check and select paid orders.

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
			$orderID = $row["order_id"];
			$product = $row["product"];
			$time = $row["time"];
			$link = $row["link"];
			$first = $row["first"];
			$second = $row["second"];
			$third = $row["third"];
		

						
			//First create TalkJS User with same ID as conversation
			$ch = curl_init();
			$data = [
			"id" => $user,
			"name" => $customerName,
			"email" => [$orderEmail],
			"role" => "customer",
			"photoUrl" => "https://avatars.dicebear.com/api/adventurer/".$orderEmail.".svg?skinColor=variant02",
			"custom" => ["email" => $orderEmail, "lastOrder" => $orderId]
			];
			$data1 = json_encode($data);
			curl_setopt($ch, CURLOPT_URL, 'https://api.talkjs.com/v1/zQQphoB0/users/'.$orderId);
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
			"subject" => "Order #".$orderId." | ".$order_product_nice,
			"participants" => ["administrator", $userID],
			"custom" => ["status" => "Paid"]
			];

			$data22 = json_encode($data2);
			curl_setopt($ch2, CURLOPT_URL, 'https://api.talkjs.com/v1/zQQphoB0/conversations/'.$orderId);
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

            
}

           
}


    echo "<br><hr>"
 ?>
