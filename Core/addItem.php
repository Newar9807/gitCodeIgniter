<?php
    include('head.php');
    session_start();
    ?>

    <h1>LogIn by userID = <?php echo $_SESSION['userId'];?></h1>
    <br>
    <form action="" method="post">
        <label for="">Enter Item Name</label>
        <input type="text" name="name">
        <label for="">Enter Quantity</label>
        <input type="number" name="quantity">
        <button type="submit" name="btn">ADD</button>
    </form>

<?php
    if(isset($_POST['btn']) && $_POST['name'] != "" && $_POST['quantity'] != ""){
        $nam = $_POST['name'];
        $quantity = $_POST['quantity'];
        $user = $_SESSION['userId'];
        $conn = mysqli_connect('localhost', 'root', '', 'shop');
        $sql = "INSERT INTO `product`(`item`, `quantity`, `userid`) VALUES ('$nam', '$quantity', '$user')";
        $res = mysqli_query($conn, $sql) or die('first query connection error');
        echo "Item Added Successfully";
    }

    include('foot.php');
