<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islandia</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1><a href="obiekty.php">Zwiedzaj Islandie</a></h1>
    </header>
    <aside>
        <h3>Do zwiedzania</h3>
        <ul>
                <li>Wodospady:
                    <ol>
                        <?php
                        include_once('skrypt1.php');
                        ?>
                    </ol>
                </li>
        </ul>
        <ul>
                <li>Siedliska zwierząt::
                    <ol>
                    <?php
                        include_once('skrypt2.php');
                        ?>
                    </ol>
                </li>
        </ul>
    </aside>
    <main>
        <h2>Galeria</h2>
        <section name="skrypt3" id="skrypt3" method="POST"></section>
        
    </main>
    <footer>
        <hr>
        <p>Autor: 0000000</p>
    </footer>
</body>
</html>