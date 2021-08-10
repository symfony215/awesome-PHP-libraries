
<!DOCTYPE html>
<html>
<head>
	<title>Admin-Home</title>
	<link rel="stylesheet" type="text/css" href="./styles/admin_login.css">
</head>
<body>

<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout_admin.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: admin_login.php");
     exit();
}
 ?>