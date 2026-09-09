<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firma Przewozowa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Firma przewozowa Półdarmo</h1>
    </header>
    <nav>
        <a href="#">kwerenda1</a>
        <a href="#">kwerenda2</a>
        <a href="#">kwerenda3</a>
        <a href="#">kwerenda4</a>
    </nav>
    <main>
        <section class="lewa">

            <h2>Zadania do wykonania</h2>

            <table>

                <tr class="sektor">
                    <th>Zadanie do wykonania</th>
                    <th>Data realizaji</th>
                    <th>Akcja</th>
                </tr>
                <tr>
                    <td>Przewóz mebli z Nawrot 13 na ulicę Długą 8</td>
                    <td>2019-11-06</td>
                    <td>
                        
                        <form action="skrypt1.php" method="POST">
                            <input type="hidden" value="1" name="id">
                            <button class="usun">usuń</button>

                        </form>
                            
                    </td>
                </tr>
              
            </table>
            <form action="skrypt2.php" method="POST">
                <label for="zadanie">Zadanie do wykonania:</label>
                <input type="text" id="zadanie" name="zadanie">
                <br>
                <label for="data">Data realizacji:</label>
                <input type="date" id="data" name="data">
                <button type="submit">Dodaj</button>
            </form>
        </section>
        <section class="prawa">
            <img src="auto.png" alt="auto firmowe">
            <h3>Nasza specjalność</h3>
            <ul>
                <li>Przeprowadzki</li>
                <li>Przewóz mebli</li>
                <li>Przesyłki gabarytowe</li>
                <li>Wynajem pojazdów</li>
                <li>Zakupy towarów</li>
            </ul>
        </section>

    </main>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>