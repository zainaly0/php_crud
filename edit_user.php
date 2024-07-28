<?php
include './db_connect.php';
$id = $_GET['id'];
$getuser = mysqli_query($conn, "select * from users_info where id='{$id}'");
$data = mysqli_fetch_array($getuser);

if($_POST){
    $uname = $_POST['name'];
    $uemail = $_POST['email'];
    $umobile = $_POST['mobile'];
    $upassword = $_POST['password'];

    $update = mysqli_query($conn, "update users_info set name='{$uname}', email='{$uemail}', mobile='{$umobile}', password='{$upassword}' where id='{$id}'");
    if ($update) {
       echo "successfully";
    } else {
        echo "Data update failed.";
    }
}



?>


<html>
    <head>

    </head>
    <body>
       <form method="post">
        Name: <input type="text" name="name" value="<?php echo $data['name'] ;?>" placeholder="enter name"> <br>    
        Email: <input type="text" name="email" value="<?php echo $data['email'] ;?>" placeholder="enter email"> <br>
        Mobile: <input type="text" name="mobile" value="<?php echo $data['mobile'] ;?>" placeholder="enter mobile"> <br>
        Pass: <input type="pass" name="password" value="<?php echo $data['password'] ;?>" placeholder="enter password"> <br>
        <button type="submit">Add</button>
       </form>

    </body>
</html>