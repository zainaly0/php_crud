<?php
include './db_connect.php';

$data = mysqli_query($conn, 'select * from users_info');
// $users = mysqli_fetch_array($data);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = mysqli_query($conn, "delete from users_info where id='{$id}'");
    if($delete){
        echo 'delete data successfully';
    }
}


echo "<table border=2>";
    echo "<tr>";
        echo "<th>id</th>";
        echo "<th>Name</th>";
        echo "<th>email</th>";
        echo "<th>mobile</th>";
        echo "<th>password</th>";
        echo "<th>Action</th>";
    echo "</tr>";

    while($users = mysqli_fetch_array($data)){
        echo "<tr>";
            echo "<td>{$users['id']}</td>";
            echo "<td>{$users['name']}</td>";
            echo "<td>{$users['email']}</td>";
            echo "<td>{$users['mobile']}</td>";
            echo "<td>{$users['password']}</td>";
            echo "<td>
            <button><a href='edit_user.php/?id={$users['id']}'>Edit</a></button>
            <button><a href='show_users.php/?id={$users['id']}'>Delete</a></button>
            </td>";
        
        echo "</tr>";
    }



echo "</table>";