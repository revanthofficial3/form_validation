<?php 
require 'db_conn.php';

if($_SERVER["REQUEST_METHOD"]=='POST'){
    $name = $_POST['name'];
    $password =password_hash($_POST['password'],PASSWORD_DEFAULT);
    $address = $_POST['address'] ;
    $email = $_POST['email'];
    $district = $_POST['district'];
    $gender = $_POST['gender'];
    $languages = isset($_POST['languages'])?implode(",",$_POST['languages']):'';
    $about = $_POST['about'];


    $sql = "INSERT INTO users(name,password,address,email,district,gender,languages,about)VALUES(:name,:password,:address,:email,:district,:gender,:languages,:about)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name'=>$name,
        ':password'=>$password,
        ':address'=>$address,
        ':email'=>$email,
        ':district'=>$district,
        ':gender'=>$gender,
        ':languages'=>$languages,
        ':about'=>$about,
    ]);
    //  echo "
    // <a href='view.php'>View</a>";
    header("Location:view.php");
}
?>