<?php session_start(); ?>
<?php if(!isset($_SESSION['user']) || empty($_SESSION['user'])) :?>
<?php include_once("restricted/passwords.php");?>
<?php if (!empty($_POST)): ?>
<?php $loginuser=$_POST['user'];?>
<?php $password=$user[$loginuser];?>
<?php $sendpassword=$_POST['password'];?>
<?php endif; ?>
<?php if(password_verify($sendpassword, $password)):?>
<?php $_SESSION['user']=$loginuser; ?>
<?php header('Location: calendarinput.php'); ?>
<?php exit(); ?>

<?php else: ?>
		<html>
		<head>

      <meta name="robots" content="noindex">
			<script src="https://use.fontawesome.com/0b72ae67e3.js"></script>
		</head>
		<body>

			<form id="loginform" action="index.php" method="post">
				<img src="https://www.megabike24.de/media/wysiwyg/pictures/MEGABIKE-Logo-Original.svg" class="logo">
				<h1>Click & Collect</h1>
				<div class="is-relative">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" placeholder="Benutzername" name="user">
					<label for="user">Benutzername eingeben</label>
				</div>
				<div class="is-relative">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
					<input type="password" placeholder="Passwort" name="password">
					<label for="password">Passwort eingeben</label>
				</div>
				<input type="submit" value="Einloggen"/>
				<?php if (!empty($_POST['user']) && !empty($_POST['password'])):?>
					<div class="errormessage">Unbekannte Benutzername/Passwort Kombination</div>
				<?php endif; ?>
			</form>

		</body>

		</html>
<?php endif; ?>
<?php else: ?>
<?php header('Location: markt.php'); ?>
<?php exit(); ?>
<?php endif; ?>
