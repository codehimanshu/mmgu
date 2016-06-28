<?php
	session_start();
	if(isset($_POST["submit"]))
	{
		$link=mysql_connect('localhost','root','');
		$db=mysql_select_db('mmgu',$link) or die(mysql_error());
		$name=$_POST["name"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$city=$_POST["city"];
		$comment=$_POST["comment"];
		$result=mysql_query("INSERT INTO contact VALUES ('','$name','$email','$phone','$city','$comment')",$link) or die(mysql_error());
		$_SESSION["status"]=true;
		header("Location: contact.php");
	}
?>