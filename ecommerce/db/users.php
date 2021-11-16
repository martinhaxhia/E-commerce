<?php
require_once 'connection.php';

function getUserById($user_id): ?array
{

    $connection = getDbConnection();

    $sql = "SELECT id, name, email FROM users where id=$user_id";

    $result = $connection->query ($sql);

    $connection->close ();

    return $result->fetch_assoc ();

}

function registerUser($name, $username, $email, $password){

    $connection= getDbConnection ();
    $hashed_password = password_hash($password,PASSWORD_DEFAULT);
    $check = mysqli_query($connection,"Select id from users where username='$username'");
    $result = mysqli_fetch_assoc($check);
    if ($result == 0) {
        $insert_query = "Insert into users ( name, username, email, password) values ('$name','$username','$email','$hashed_password')";
        return mysqli_query($connection,$insert_query);
    }
    return null;

}

function loginUser($username, $password) {

    $connection= getDbConnection ();
    $query = "Select id,password from users where username='$username'";
    $checkuser = mysqli_query($connection,$query);
    $data = mysqli_fetch_array($checkuser);
    if(isset($data) && isset($data['password'])){
        if(password_verify($password, $data['password'] )) {
            return $data;
        }
    }
    return  null;
}








