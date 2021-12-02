# Willkommen beim Adventskalender Gruppenspender
Die Idee hinter dieser Seite geht zurück auf eine Gruppe von 24 Personen, in der jeder ein kleines "Geschenk"
bastelt - 24 mal. Man trifft sich vor dem 1. Dezember und jeder Gruppenteilnehmer erhält 24 (andere) kleine Pakete,
so dass jeder am Ende 24 "Türchen" zum Öffnen hat.
Diese Repository ist mein Beitrag.

## Wie funktioniert das ganze?
Für jeden Gruppenteilnehmer muss ein Benutzername und ein Passwort erstellt werden. Diese werden den Mitgliedern mitgeteilt (ich habe 24 kleine Kärtchen mit einem QR Code und den verschiedenen Zugangsdaten geschrieben, die als "Türchen" an die Gruppe verteilt wurden).

Daraufhin kann sich jeder Gruppenteilnehmer mit seinen Zugangsdaten einloggen und sich aussuchen, an wen eine Spende von 1€ gehen soll.
Wenn alle Teilnehmer ihre Entscheidung eingetragen haben, spendet der Ersteller der Seite (in diesem Fall also ich), die entsprechenden Beträge an die jeweiligen Organisationen.

Auf der Seite kann jeder sehen, welche Organisation wieviel Geld bekommt und auch selber eine eigene Organisation eintragen.

## Voraussetzungen
Es wird ein laufender PHP Server benötigt

## Installation
- Klone diese Repository auf deinen Webserver:

`git clone git@github.com:nordcomputer/advent-calender-donator.git .`
oder lade sie herunter und speichere sie mit einem FTP Programm auf dem Server.
- Kopiere die Datei `restricted/sample-passwords.php`nach `restricted/passwords.php` und erstelle für jeden Gruppenteilnehmer 
einen Benutzernamen und ein gehaschtes Passwort in der Datei.

## Optional
- Passe die Spendenziele in `organisations.php` an



**Ich wünsche frohe Feiertage :)**

