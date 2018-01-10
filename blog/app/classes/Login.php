<?php


namespace App\classes;
use App\classes\Database;


class Login
{
    public function adminLoginCheck($data){
       $email = $data['email'];
       $password = md5($data['password']);
       $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

       if(mysqli_query(Database::dbConnection(), $sql)){
          $query_result =  mysqli_query(Database::dbConnection(), $sql);
          $user =  mysqli_fetch_assoc($query_result);
          if($user){
              header('Location: Dashboard.php');
          }else{
              $message = "Please use valid email address and password";
              return $message;
          }
          echo '<pre>';
          print_r($user);
       }else{
           die("Query problem".mysqli_query(Database::dbConnection(), $sql));
       }
    }

}