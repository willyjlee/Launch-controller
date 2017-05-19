<?php

// pass the username and password (thru https)
function auth($username, $password) {
  $srv = "localhost";
  $user = "root";
  $pass = "pinetree";
  $db = "login_db";
  $conn = mysqli_connect($srv,$user,$pass,$db);

  if(!$conn){
    $ret['status'] = "-1";//"failed db connection";
    return json_encode($ret);
  }
  //$username = $_POST['username'];
  //$password_hash = password_hash($_POST['password']);

  $res = mysqli_query($conn, "SELECT * FROM user");
  $row = mysqli_fetch_array($res);

  if(!$res){
   $ret['status'] = '-3';
   return json_encode($ret);// no user found in table
  }

  if($username==$row['username'] && password_verify($password,$row['password_hash'])){
    $ret['status'] = "1";// ok
  }else{
    $ret['status'] = "0";//"incorrect login";
  }
  //$pass = mysqli_fetch_field($res);
  //$ret['pass'] = $pass;
  mysqli_close($conn);
  return json_encode($ret);
}

?>
