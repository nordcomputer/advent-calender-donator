<h2>Bisherige Spenden:</h2>
<?php
include_once("organisations.php");
$directory="donations";
$anzahl=count(scandir($directory))-2;
$calculated=[];

foreach (scandir($directory) as $orgafile) {
    if (!is_dir($orgafile)) {
        $content=file_get_contents($directory."/".$orgafile);
        if (!isset($donate[$content])) {
            $donate[$content]=0;
        }
        if ($content!=""){
            $donate[$content]=$donate[$content]+1;
        }
    }
}

foreach ($donate as $organisation => $betrag) {
    if ($betrag!=0) {
        echo "<span class='orgadonation'><b>".$organisation.":</b> ".$betrag."€</span><br>";
    }
}
?>
