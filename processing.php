<?php
session_start();
if(!isset($_SESSION['user']) || !isset($_POST)) {
    header('Location: index.php');
    exit();
}

if ($_POST) {
  echo '<script src="js/script.js"></script>';
  $organisation=$_POST['organisation'];
  if ($organisation=="own") {
    $organisation=$_POST['freetext'];
  }

  $dir="donations";
  $contents=$organisation;
  $newfile=$dir."/".$_SESSION['user'].".txt";
  if (!file_exists($newfile)) {
      touch($newfile);
  }
  $fh = fopen($newfile, 'w') or die("Can't create file");
  file_put_contents($newfile, $contents);

  echo "<div class='saved'>In Ordnung - dein Advents-Euro wird an folgende Stelle gespendet:<br><b>".$organisation."</b></div>";
  echo "<div class='afterdonationsdone'>Sobald alle Spenden getätigt sind, kannst du hier wieder vorbeischauen und nachsehen, wohin die ganzen Spenden gegangen sind.</div>";
  echo "<button id='closeresponse'>OK</button>";
}

?>
