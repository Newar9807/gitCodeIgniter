<?php
    include('head.php');
    ?>
        <h1 style="color: red;">Register</h1>
        <strong>
            <form action="" method="POST">
                <label for="">Name:</label>
                <input type="text" name="name" placeholder="Enter your Name"> <br>
                <label for="">Password:</label>
                <input type="password" name="pass" placeholder="Enter your Password"> <br>
                <button type="submit" name="btn">Register</button>
            </form>
        </strong>
    <?php 
                // echo anchor('user/view/login','<button>Submit</button>');
    

    if(isset(($_POST['btn'])) && $_POST['name'] != "" && $_POST['pass'] != ""){
        $nam = $_POST['name'];
        $pass = $_POST['pass'];
        $conn = mysqli_connect('localhost', 'root', '', 'shop') ;//or die('database connection error');
        $sql = "INSERT INTO `users`(`name`, `password`) VALUES ('$nam', '$pass')";
        $res = mysqli_query($conn, $sql) or die('first query connection error');
        mysqli_close($conn);
        header('location:login.php');
    }
    else{
        echo "Please Fill Up all the boxes!!!";
    }

    include('foot.php');