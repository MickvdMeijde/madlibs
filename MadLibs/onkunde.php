<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title> MadLibs </title>
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
        <form action="onkunde1.php" method="post">
            <p>Wat zou je graag willen kunnen? <input type="text" name="skill" autocomplete=off></p>
            <p>Met welke persoon kun je goed opschieten? <input type="text" name="person1" autocomplete=off></p>
            <p>Wat is je favoriete getal? <input type="text" name="number" autocomplete=off></p>
            <p>Wat heb je altijd bij je als je op vakantie gaat? <input type="text" name="vacation" autocomplete=off></p>
            <p>Wat is je beste persoonlijke eigenschap? <input type="text" name="personal" autocomplete=off></p>
            <p>Wat is je slechtste persoonlijke eigenschap? <input type="text" name="persWorst" autocomplete=off></p>
            <p>wat is het ergste dat je kan overkomen? <input type="text" name="worst" autocomplete=off></p>
            <button class="submit" type="submit">send</button>
        </form>
    </body>
</html>