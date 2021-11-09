<?php
session_start();
if(!isset($_SESSION['user']) || !isset($_POST)) {
    header('Location: index.php');
    exit();
}

if ($_POST) {
  $organisation=$_POST['organisation'];
  if ($organisation=="own") {
    $organisation=$_POST['freetext'];
  }
  $contents=$_SESSION['user'].": ".$organisation;
  $newfile="donations/".$_SESSION['user'].".txt";
  $fh = fopen($newfile, 'w') or die("Can't create file");
  file_put_contents($newfile, $contents);

  echo "<div class='saved'>In Ordnung - dein Advents-Euro wird an folgende Stelle gespendet:<br><b>".$organisation."</b></div>";
  echo "<div class='afterdonationsdone'>Sobald alle Spenden getätigt sind, kannst du hier wieder vorbeischauen und nachsehen, wohin die ganzen Spenden gegangen sind.</div>";
}

?>