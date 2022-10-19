<!-- <strong>
   <form action="" method="POST">
        <label for="">Name:</label>
        <input type="text" name="name" placeholder="Enter your Name"> <br>
        <label for="">Password:</label>
        <input type="password" name="pass" placeholder="Enter your Password"> <br>
        <button type="submit">Register</button>
        <?php 
            // echo anchor('user/view/login','<button>Submit</button>');
        ?>
   </form>
</strong> -->

<h1 style="color: red;">Register</h1>
<strong>
    <form action="userData" method="POST">
        <label for="">Name:</label>
        <input type="text" name="name" placeholder="Enter your Name"> <br>
        <label for="">Password:</label>
        <input type="password" name="pass" placeholder="Enter your Password"> <br>
        <button type="submit" name="btn">Register</button>
    </form>
</strong>