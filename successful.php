<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
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
        <h1><b>Hello <?php echo htmlspecialchars($_SESSION['username']); ?> !!</b>.<br/>Your registration was successful!</h1>
    </div>
    <p><a href="welcome.php" class="btn btn-primary">Continue</a></p>
</body>
</html>