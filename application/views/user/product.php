<h1>LogIn by userID = <?php 
    // echo $_SESSION['userId'];
?></h1>
<br>
<form action="productdata" method="post">
    <label for="">Enter Item Name</label>
    <input type="text" name="name">
    <label for="">Enter Quantity</label>
    <input type="number" name="quantity">
    <button type="submit" name="btn">ADD</button>
</form>