    <?php
        $conn=mysqli_connect("localhost","root","","ecom");
        $query = "SELECT * FROM `products`";
        $run=mysqli_query($conn,$query);
        while($data=mysqli_fetch_assoc($run)){ ?>
            <form action="" method="post">
                <?php echo $data['pro_name']; ?>  
                <input type="hidden" name="pro_name" id="" value="<?php echo $data['pro_name']; ?>">
                <?php echo $data['pro_price']; ?>
                <input type="hidden" name="pro_price" id="" value="<?php echo $data['pro_price']; ?>">
                <a href="">Buy Now</a>
            </form>
    <?php } ?>

    <?php
        $q="SELECT * FROM `user` JOIN `orders` ON orders.user_id = user.id";
        $r=mysqli_query($conn,$q);
        $f=mysqli_num_rows($r);
        // echo $f."<hr>";
        $f1 = mysqli_fetch_assoc($r);
        echo "<pre>";
        print_r($f1);
    ?>
