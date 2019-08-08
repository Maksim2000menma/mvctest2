<?php

class Model_Login extends Model
{

  public static function GetLogin($login, $password){
    $connection = mysqli_connect("localhost", "root", "");
    $select_db = mysqli_select_db($connection,'appusers');
    mysqli_query($connection, "SET CHARACTER SET 'utf8'");

    $result=mysqli_query($connection, "SELECT * FROM userinfo WHERE (login = '$login') AND (password = '$password')");
    //$row=mysqli_fetch_array($result);


    return $result;
  }

}
