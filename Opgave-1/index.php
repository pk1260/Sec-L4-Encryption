<?php
/**
 * Created by PhpStorm.
 * User: pascalkuiper
 * Date: 2019-10-03
 * Time: 10:46
 */

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <title>CSS Template</title>
</head>
<body>
<div class="wrapper">
    <form action="form.php" class="form">
        <input type="text"      name="Voornaam"     value="voornaam"        maxlength="25"  class="inputfile"                       >   <br>
        <input type="text"      name="Achternaam"   value="achternaam"      maxlength="128" class="inputfile"                       >   <br>
        <input type="text"      name="Straat"       value="straat"          maxlength="48"  class="inputfile"       id="straat"     >
        <input type="text"      name="Huisnr"       value="huisnr"          maxlength="11"  class="inputfile"       id="nummer"     >   <br>
        <input type="text"      name="Postcode"     value="postcode-nummer" maxlength="6"   class="inputfile"                       >   <br>
        <input type="text"      name="Woonplaats"   value="woonplaats"      maxlength="24"  class="inputfile"                       >   <br>
        <input type="email"     name="Email"        value="email"           maxlength="254" class="inputfile"                       >   <br>
        <input type="tel"       name="Telefoon"     value="telefoonnummer"  maxlength="11"  class="inputfile"                       >   <br>
        <input type="submit"                        value="Verzend">
    </form>
</div>
</body>
