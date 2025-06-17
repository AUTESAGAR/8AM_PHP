<?php 
  session_start();
  require "./src/Razorpay.php";
  use Razorpay\Api\Api;
  use Razorpay\Api\Order;
  $api_key = "rzp_test_8MOHjs3ghe55Nv";
  $api_secret = "BaPpPwqx1gSmEFoU0v0SOjCS"; 

  $id = $_POST['id'];
  $conn = mysqli_connect("localhost","root","","trading");
  $query = "SELECT * FROM `courses` WHERE `id`='$id'";
  $run = mysqli_query($conn,$query);
  $course_data = mysqli_fetch_assoc($run);     
  
  $course_id = $course_data['id'];
  $title = $course_data['title'];
  $description = $course_data['description'];
  $fees = $course_data['fees'];  
  
  try{
    $api = new Api($api_key, $api_secret);    
    $order = $api->order->create([
      'receipt' => 'receipt_'.time(),
      'amount' => $fees * 100,
      'currency' => 'INR', 
      'notes'=> [
        'Product Name '=> $title,
        'Product Description'=> $description,
      ]
    ]);
    $order_id = $order['id'];
    $amount = $order['amount'];
    echo json_encode([
      "order_id"=>$order_id,
      "amount"=>$amount,
      "course_id"=>$course_id,
    ]);
  }
  catch(Exception $e){
    die("Error".$e->getMessage());
  }
?>
