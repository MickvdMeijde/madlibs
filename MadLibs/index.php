<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title> MadLibs </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <header>
             <h3>mad libs</h3>
        </header>
        <section id="container">
            <nav>
                <h3><a href="index.php">Er heerst paniek...</a></h3>
                <h3><a href="onkunde.php">Onkunde</a></h3>
            </nav>
            <main>
                <form action="paniek.php" method="post">
                    <p>Welk dier zou je nooit als huisdier willen hebben? <input type="text" name="animal" autocomplete=off></p>
                    <p>Wie is de belandrijkste persoon in je even? <input type="text" name="person" autocomplete=off></p>
                    <p>In welk land zou je graag willen wonen? <input type="text" name="country" autocomplete=off></p>
                    <p>Wat doe je als je je verveelt? <input type="text" name="bored" autocomplete=off></p>
                    <p>Met welk speelgoed speelde je als kind het meest? <input type="text" name="toy" autocomplete=off></p>
                    <p>Bij welke docent spijbel je het liefst? <input type="text" name="skipClass" autocomplete=off></p>
                    <p>Als je € 100.000,- had, wat zou je dan kopen? <input type="text" name="rich" autocomplete=off></p>
                    <p>Wat is je favoriete bezigheid? <input type="text" name="favourite" autocomplete=off></p>
                    <button class="submit" type="submit">send</button>
                </form>
            </main>
        </section>
    </body>
</html>