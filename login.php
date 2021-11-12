<html>
    <head>
        <meta name="robots" content="noindex">
        <script src="https://use.fontawesome.com/0b72ae67e3.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>Adventskalender-Gruppenspender</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="login">
      <div id="background"></div>
      <form id="loginform" action="index.php" method="post">
        <div class="tuerchen3 active"><span class="tuerchentext">3<br>Öffne mich!</span></div>
        <div class="behindthedoor">
            <h1>Advent Advent, ein Lichtlein brennt</h1>
            <div class="is-relative">
              <i class="fa fa-user" aria-hidden="true"></i>
              <input type="text" placeholder="Benutzername" name="user">
              <!-- <label for="user">Benutzername eingeben</label> -->
            </div>
            <div class="is-relative">
              <i class="fa fa-unlock-alt" aria-hidden="true"></i>
              <input type="password" placeholder="Passwort" id="passwordinput" name="password"> <i class="pshow fa fa-eye" aria-hidden="true"></i>
              <!-- <label for="password">Passwort eingeben</label> -->
            </div>
            <input class="loginbutton" type="submit" value="Einloggen"/>
            <?php if (!empty($_POST)) {?>
              <div class="errormessage">Unbekannte Benutzername/Passwort Kombination</div>
            <?php } ?>
        </div>
      </form>

    </body>

</html>
