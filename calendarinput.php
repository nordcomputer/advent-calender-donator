<?php
session_start();
if(!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Adventskalender Spendenaktion</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <script src="https://use.fontawesome.com/0b72ae67e3.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
      <div id="background"></div>
      <button><a href="logout.php">Logout</a></button>
      <div class="chooseandsee">
        <?php include_once("explain.php");?>


          <form id="orgachooser" action="processing.php" method="post">

          <fieldset>
              <legend>Wähle eine Organisation aus oder nenne ein eigenes Spendenziel: </legend>
              <?php
              $checked="";
              $directory="donations";
              $orgafile=$_SESSION['user'].".txt";
              include_once("organisations.php");
              if (!file_exists($directory."/".$orgafile)) {
                  touch($directory."/".$orgafile);
              }
              $content=file_get_contents($directory."/".$orgafile);

              $already=false;
              foreach ($organisations as $id => $organisation) {

                  if ($organisation == $content) {
                    $checked="checked";
                    $already=true;
                  }
                  echo "<label for='radio-$id'><span class='orgaspan'>$organisation</span><i class='fa fa-heart'></i></label>";
                  echo "<input class='radio' type='radio' value ='$organisation' name='organisation' id='radio-$id' $checked><br>";
                  $checked="";
              }



              if ($already!=true && isset($content) && $content!="") {?>

              <label for="radio-<?php echo count($organisations)+1;?>"><span class='orgaspan'>Eigene Organistation angeben</span><i class='fa fa-heart'></i></label>
              <input class="radio own" type="radio" value ="own" name="organisation" id="radio-<?php echo count($organisations)+1;?>" checked><br>
              <textarea id="freetext" name="freetext" rows="4" cols="50"><?php echo $content; ?></textarea>

            <?php } else { ?>
              <label for="radio-<?php echo count($organisations)+1;?>"><span class='orgaspan'>Eigene Organistation angeben</span><i class='fa fa-heart'></i></label>
              <input class="radio own" type="radio" value ="own" name="organisation" id="radio-<?php echo count($organisations)+1;?>"><br>
              <textarea id="freetext" name="freetext" rows="4" cols="50" disabled></textarea>
            <?php } ?>
          </fieldset>

          <input type="submit" name="submit" id="submit"/>
        </form>
        <div id="calculate"><?php include_once("alldonations.php"); ?></div>
    </div>
    <div id="response"></div>
  </body>
</html>
