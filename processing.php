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

  echo "<div class='saved'><p>In Ordnung - dein Advents-Euro wird an folgende Stelle gespendet:<br><span class='orgadonation'><b>".$organisation."</b></span></p></div>";
  echo "<div class='afterdonationsdone'><p>Du kannst hier immer wieder herkommen und nachsehen, wie der aktuelle Stand ist.</p>";
  echo "<p>Außerdem hast du bis Heiligabend Zeit, deine Meinung noch einmal zu ändern (wenn du möchtest). Heiligabend wird der Kalender dann alle Spenden vornehmen. :)</p></div>";
  echo "<button id='closeresponse'>OK</button>";
}

?>
