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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
      <h2>An wen soll deine Spende gehen?</h2>
      <form id="orgachooser" action="processing.php" method="post">
      <fieldset>
          <legend>Wähle eine Organisation aus oder nenne ein eigenes Spendenziel: </legend>
          <label for="radio-1">SOS Kinderdörfer</label>
          <input class="radio" type="radio" value ="SOS Kinderdörfer" name="organisation" id="radio-1">
          <label for="radio-2">Deutsches Rotes Kreuz</label>
          <input class="radio" type="radio" value ="Deutsches Rotes Kreuz" name="organisation" id="radio-2">
          <label for="radio-3">DKMS - deutsche Knochmarkspenderdatei</label>
          <input class="radio" type="radio" value ="DKMS - deutsche Knochmarkspenderdatei" name="organisation" id="radio-3">
          <label for="radio-4">Eigene Organistation angeben</label>
          <input class="radio" type="radio" value ="own" name="organisation" id="radio-4">
            <textarea id="freetext" name="freetext" rows="4" cols="50" disabled></textarea>
      </fieldset>

      <input type="submit" name="submit" id="submit"/>
    </form>
    <div id="response"></div>
  </body>
</html>
