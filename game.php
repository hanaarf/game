<?php
include 'db.php';
if(!isset($_SESSION['id'])) header("location:index.php");
$id = $_SESSION['id'];
$sql = "Select * from users where id = '$id'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/game.css">
</head>
<body onkeydown="key()" onkeyup="key2()">

<div class="kotak"></div>
<div class="player">
            <?php
            echo "PLAYER : ";
            echo $row['username' ];
            echo " #";
            echo $row['id'];
            ?>
    </div>
<div class="smua">
    <div class="chose">
          <label>Choose Color : </label>
          <input id="warna" type="color">
    </div>
    <div class="btn">
          <button> <a href="logout.php">Logout</a></button>
          <button id="start" onclick="startGame()">start </button>
    </div>

</div>
<footer>
	<p>
		Developed by
		<a href="">HanaA</a>
	</p>
</footer>

<script src="asset/kdgame.js"></script>
</body>

</html>

