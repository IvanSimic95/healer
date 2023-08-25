<?php
$title = "Special One-Time-Offer!";
$description = "Almost Complete...";
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/header.php'; 


$orderID = "10002";
$userID = "10001";
$first_name = "Ivan";
$order_email = "ivan.simic2903@gmail.com";
$order_product_nice = "Soulmate Drawing";
$order_product_codename = "soulmate";

$signature = hash_hmac('sha256', strval($orderID), 'sk_test_omv9jN0lymrWKOJ2kvyL4yOOHwRDVL8W');
?>
 <div id="talkjs-container-<?php echo $orderID; ?>" style="width: 90%; margin: 30px; height: 500px; position:fixed;bottom:0;right:0;z-index:999;display:none !important">
     <i>Loading chat...</i>
 </div>

<script>
    (function(t,a,l,k,j,s){
    s=a.createElement('script');s.async=1;s.src="https://cdn.talkjs.com/talk.js";a.head.appendChild(s)
    ;k=t.Promise;t.Talk={v:3,ready:{then:function(f){if(k)return new k(function(r,e){l.push([f,r,e])});l
    .push([f])},catch:function(){return k&&new k()},c:l}};})(window,document,[]);
</script>


<script>  
    Talk.ready.then(function() {
      var other = new Talk.User({
          id: "<?php echo $userID; ?>",
          name: "<?php echo $first_name; ?>",
          email: "<?php echo $order_email; ?>",
          photoUrl: "https://avatars.dicebear.com/api/adventurer/<?php echo $order_email; ?>.svg?skinColor=variant02",
          role: "customer",
          custom: {
          email: "<?php echo $order_email; ?>",
          lastOrder: "<?php echo $orderID; ?>"
          }
      });
      var me = new Talk.User({
          id: "administrator",
          name: "Soulmate Healer",
          email: "info@soulmatehealer.com",
          photoUrl: "https://avatars.dicebear.com/api/adventurer/<?php echo $order_email; ?>.svg?skinColor=variant02",
          role: "admin"
      });
      window.talkSession = new Talk.Session({
          appId: "tO6umIcS",
          me: other
      });
      var conversation = talkSession.getOrCreateConversation("<?php echo $orderID; ?>");
          conversation.setAttributes({
          subject: "<?php echo "Order #" . $orderID . " | " .$order_product_nice; ?>",
          custom: { 
          category: "<?php echo $order_product_codename; ?>", 
          status: "Paid"
          }
      });

      conversation.setParticipant(other);
      conversation.setParticipant(me);

        var chatbox = window.talkSession.createChatbox(conversation);
        chatbox.mount(document.getElementById("talkjs-container-<?php echo $orderID; ?>"));
    })

</script>
