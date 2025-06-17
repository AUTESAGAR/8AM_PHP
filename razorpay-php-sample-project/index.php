<?php
    session_start();
    $_SESSION['user_id']=1;
    $conn =mysqli_connect("localhost", "root", "", "trading");
    $query = "SELECT * FROM `courses`";
    $run = mysqli_query($conn,$query);    
?>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<?php while ($course_data = mysqli_fetch_assoc($run)) { ?>    
    <img src="<?php echo $course_data['banner']; ?>">
    <?php echo $course_data['title']; ?>
    <?php echo $course_data['description']; ?>
    <?php echo $course_data['fees']; ?>
    <button>
        <a class='paynow' data-id="<?php echo $course_data["id"]; ?>">Buy Now</a>
    </button>
    <hr color="red">
<?php } ?>

<script>
$(document).ready(function(){
    $(document).on("click",".paynow",function(){
      var id = $(this).data("id");
      $.ajax({
        type : "POST",
        url : "order.php",
        data : {id},
        success:function(response){            
          var order_id = JSON.parse(response).order_id;
          var amount = JSON.parse(response).amount;
          var course_id = JSON.parse(response).course_id;
          startPayment(order_id,amount,course_id);
        }})})});
  // Payment CheckOut Function
  function startPayment(order_id,amount,course_id) {
var options = {
        key: "rzp_test_8MOHjs3ghe55Nv", // Enter the Key ID generated from the Dashboard
        amount: amount, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        currency: "INR",
        name: "VIT Trading Services",
        description: "Test transaction",
        image: "./static/logo/final.jpg",
        order_id: order_id, // This is a sample Order ID. Pass the `id` obtained in the response of Step 1
        prefill: {
          name: "Read User Name From DB",
          email: "Read User Email From DB",
          contact: "Read User Mobile From DB",
        },
        notes: {address: "Read User Address From DB",},
        theme: {"color": "#3399cc"},
        // Payment Success Handler
        "handler": function (response){
          $.ajax({
            url: "PayStatusSubmit.php", // PHP file to execute
            type: "POST",
            data: { data: course_id },
            success: function(response) {
              alert("Payment Success", response);
              setTimeout(() => {
                window.location.replace("http://localhost/11.30_AM_PHP/Trading/singlepage.php");
              }, 500);
            }
          });
        }
      };
      var rzp = new Razorpay(options);
      rzp.open();
      // Payment Faluire Handler
      rzp.on('payment.failed', function (response){alert(response.error.reason);});
    }
  </script>