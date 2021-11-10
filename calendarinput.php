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
    <title></title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
      <h2>An wen soll deine Spende gehen?</h2>
      <form id="orgachooser" action="processing.php" method="post">
      <fieldset>
          <legend>Wähle eine Organisation aus oder nenne ein eigenes Spendenziel: </legend>
          <?php
          include_once("organisations.php");
          foreach ($organisations as $id => $organisation) {
              echo "<label for='radio-$id'>$organisation</label>";
              echo "<input class='radio' type='radio' value ='$organisation' name='organisation' id='radio-$id'>";
          }

          ?>
          <label for="radio-<?php echo count($organisations)+1;?>">Eigene Organistation angeben</label>
          <input class="radio" type="radio" value ="own" name="organisation" id="radio-<?php echo count($organisations)+1;?>">
            <textarea id="freetext" name="freetext" rows="4" cols="50" disabled></textarea>
      </fieldset>

      <input type="submit" name="submit" id="submit"/>
    </form>
    <div id="response"></div>
    <div id="calculate"><?php include_once("alldonations.php"); ?></div>
  </body>
</html>
