<h2>Bisherige Spenden:</h2>
<?php
include_once("organisations.php");
$directory="donations";
$anzahl=count(scandir($directory))-2;
echo "<h3>(Bisher haben sich schon ".$anzahl." von euch entschieden)</h3>";
$calculated=[];

foreach (scandir($directory) as $orgafile) {
    if (!is_dir($orgafile)) {
        $content=file_get_contents($directory."/".$orgafile);
        if (!isset($donate[$content])) {
            $donate[$content]=0;
        }
        $donate[$content]=$donate[$content]+1;
    }
}

foreach ($donate as $organisation => $betrag) {
    echo "<b>".$organisation."</b>: ".$betrag."€<br>";
}
?>
