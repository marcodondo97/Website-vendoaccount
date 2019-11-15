<?php
session_start();
require 'connessione.php';
$username=$_POST['username'];
$password=md5( $_POST ['password']);


				 $query3="SELECT username FROM persona WHERE username='$username' AND password= '$password' ";
				  $result=mysql_query($query3);
				  if(mysql_num_rows($result)==1){
					$_SESSION['username'] = $username;
					  header('location: profilo.php');
				  }
				  else
					  echo"<script type='text/javascript'>alert('Username o Password errati');
window.location = 'log.php';</script>";
?>