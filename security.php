<?
SESSION_START();

IF (!isset($_SESSION['username'])){
	echo "sorry you can't use this page";
	exit();
}

$result=$mysqli_query("select * from driver_user, maint_person_user, fuel_user, admin_user WHERE username='$_SESSION[username]'");
  $row_cnt = mysqli_num_rows($result);


IF ($row_cnt!="1"){
	echo "sorry you can't use this page";
	exit();

?>