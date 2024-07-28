<?php
    include './db_connect.php';

   if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql_query = mysqli_query($conn, "insert into users_info(name, email, mobile, password)
    value('{$name}', '{$email}', '{$mobile}', '{$password}')
    ");

    if($sql_query){
        echo "data insert successfully";
    }
   }



?>

<html>
    <head>

    </head>
    <body>
       <form method="post">
        Name: <input type="text" name="name" placeholder="enter name"> <br>    
        Email: <input type="text" name="email" placeholder="enter email"> <br>
        Mobile: <input type="text" name="mobile" placeholder="enter mobile"> <br>
        Pass: <input type="pass" name="password" placeholder="enter password"> <br>
        <button type="submit">Add</button>
       </form>

    </body>
</html>