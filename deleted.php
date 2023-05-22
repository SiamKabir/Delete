<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        ID : &nbsp;<input type="text" name="id"> <br> <br>
        <input type="submit" name="submit" value ="Send Data">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'student';

    $conn = mysqli_connect($host,$user,$pass,$dbname);
    $sql = "DELETE FROM `info` WHERE `ROLL` = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo 'Data Deleted';
    }
    else{
        echo 'Data Not Deleted';
    }
}
?>
