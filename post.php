<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["sex"];
$uid=$_POST["uid"];
$branch=$_POST["branch"];
$ph_no=$_POST["ph_no"];
$email=$_POST["email"];
$dob=htmlspecialchars($_POST["dob"],ENT_QUOTES);
$nickname=htmlspecialchars($_POST["nickname"],ENT_QUOTES);
$address=htmlspecialchars($_POST["address"],ENT_QUOTES);
$habbies=htmlspecialchars($_POST["habbies"],ENT_QUOTES);
$positive=htmlspecialchars($_POST["positive"],ENT_QUOTES);
$negative=htmlspecialchars($_POST["negative"],ENT_QUOTES);
$color=htmlspecialchars($_POST["color"],ENT_QUOTES);
$movie=htmlspecialchars($_POST["movie"],ENT_QUOTES);
$actor=htmlspecialchars($_POST["actor"],ENT_QUOTES);
$actress=htmlspecialchars($_POST["actress"],ENT_QUOTES);
$sports=htmlspecialchars($_POST["sports"],ENT_QUOTES);
$place=htmlspecialchars($_POST["place"],ENT_QUOTES);
$food=htmlspecialchars($_POST["food"],ENT_QUOTES);
$feedback=htmlspecialchars($_POST["feedback"],ENT_QUOTES);
mysql_connect("localhost","root","") or die("We can't connect to server");
mysql_select_db('slambook');
mysql_query("INSERT INTO student (fname,lname,gender,uid,branch,ph_no,email,dob,nickname,address,habbies,positive,negative,color,movie,actor,actress,sports,place,food,feedback) Values('$fname','$lname','$gender','$uid','$branch','$ph_no','$email','$dob','$nickname','$address','$habbies','$positive','$negative','$color','$movie','$actor','$actress','$sports','$place','$food','$feedback')") or die(mysql_error());
$count=mysql_affected_rows();
if($count>0){
	echo "<script>alert('Done!Thank you...');</script>";
}else {
	echo "<script>alert('Some Problem Not Done !!');</script>";
}
//echo "Thank you for entered your details....!";
?>
