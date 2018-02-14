<?php
    $Animal = $_POST['animal'];
    $Person = $_POST['person'];
    $Country = $_POST['country'];
    $Bored = $_POST['bored'];
    $Toy = $_POST['toy'];
    $SkipClass = $_POST['skipClass'];
    $Rich = $_POST['rich'];
    $Fav = $_POST['favourite'];
?>
<html lang="en">
<!DOCTYPE HTML>
    <head>
        <title> Onkunde </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.php">Start</a></li>
                <li><a href="onkunde.php">Geschiedenis</a></li>
            </ul>
        </nav>
        <main>
            <p>Er heerst paniek in het koninkrijk <?php echo $Country; ?>. Koning <?php echo $SkipClass ?> is ten einde raad en als koning <?php echo $SkipClass ?> ten einde raad is dan roept hij zijn ten-einde-raadsheer <?php echo $Person; ?>.</p>
            <p>"<?php echo $Person; ?>! Het is een ramp! Het is een schande!"</p>
            <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
            <p>"Mijn <?php echo $Animal; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $Toy ?> voor hem gekocht!"</p>
            <p>"Majesteit, uw <?php echo $Animal; ?> komt vast vanzelf weer terug?"</p>
            <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $Fav ?> leren?"</p>
            <p>"Maar Sire, daar kunt u toch uw <?php echo $Rich ?> voor gebruiken."</p>
            <p>"<?php echo $Person; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
            <p>"<?php echo $Bored ?>, sire."</p>
        </main>
    </body>
</html>