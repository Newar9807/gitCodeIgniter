<?php
    include('head.php');
    ?>
        <h1 style="color: blue;">Login</h1>
        <strong>
            <form action="" method="POST">
                <label for="">Name:</label>
                <input type="text" name="name" placeholder="Enter your Name"> <br>
                <label for="">Password:</label>
                <input type="password" name="pass" placeholder="Enter your Password"> <br>
                <button type="submit" name="btn">login</button>
            </form>
        </strong>
    <?php 
                // echo anchor('user/view/login','<button>Submit</button>');
    

    if(isset(($_POST['btn'])) && $_POST['name'] != "" && $_POST['pass'] != ""){
        $nam = $_POST['name'];
        $pass = $_POST['pass'];
        $conn = mysqli_connect('localhost', 'root', '', 'shop') ;//or die('database connection error');
        $sql = "SELECT * FROM `users`";
        $res = mysqli_query($conn, $sql) or die('first query connection error');
        $data = mysqli_fetch_all($res);
        $check = false;
        foreach($data as $key=>$value){
            if($data[$key][1] == $nam && $data[$key][2] == $pass){
                session_start();
                $_SESSION['userId'] = $data[$key][0];
                mysqli_close($conn);
                $check = true;
                break;
            }
        }
        if($check){
            header('location:addItem.php');
        }
    }
    else{
        echo "Please Fill Up all the boxes!!!";
    }

    include('foot.php');