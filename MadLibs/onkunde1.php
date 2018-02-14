<?php
    $Skill = $_POST['skill'];
    $Person1 = $_POST['person1'];
    $Number = $_POST['number'];
    $Vacation = $_POST['vacation'];
    $Personal = $_POST['personal'];
    $Worst = $_POST['worst'];
    $PersWorst = $_POST['persWorst'];
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
        <p>Er zijn veel mensen die niet kunnen <?php echo $Skill; ?>. Neem nou meneer <?php echo $Person1 ?> zelfs met behulp van een <?php echo $Vacation ?> of <?php echo $Number; ?>.</p>
        Dat heeft niet te maken met een gebrek aan <?php echo $Personal; ?>, maar met een teveel aan <?php echo $PersWorst; ?>. Teveel <?php echo $PersWorst; ?> leidt tot <?php echo $Worst ?> en dat is niet goed als je wilt <?php echo $Skill; ?>. Helaas voor <?php echo $Person1 ?>.
    </body>
</html>