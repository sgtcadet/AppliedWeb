<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}

//TODO: Add a video background: "https://www.youtube.com/watch?v=QiZNSzWIaLo" 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center;}
        .page-header{width: 500px;}
    </style>
</head>
<body>
    <div class="page-header">
        <h1><b><?php echo htmlspecialchars($_SESSION['username']); ?> !!</b>.<br/>You were the Chosen One! You were supposed to destroy the Sith, not join them. You were supposed to bring balance to the force, not leave it in darkness.</h1>
    </div>
    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</body>
</html>