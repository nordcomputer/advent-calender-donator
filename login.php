<html>
    <head>
        <meta name="robots" content="noindex">
        <script src="https://use.fontawesome.com/0b72ae67e3.js"></script>
    </head>
    <body>

      <form id="loginform" action="index.php" method="post">
        <h1>Advent Advent, ein Lichtlein brennt</h1>
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
        <?php if (!empty($_POST)) {?>
          <div class="errormessage">Unbekannte Benutzername/Passwort Kombination</div>
        <?php } ?>
      </form>

    </body>

</html>
