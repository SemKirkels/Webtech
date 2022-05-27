<!doctype HTML>
<HTML>
<head>
    <title>SQL Pagina</title>

    <link rel="stylesheet" href="CSS/Layout.css">
    <link rel="icon" href="ICONS/icon_1.gif"> 

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<head>
<body>
    <ul class="navigatie_balk">
        <li>
            <a href="Index.html">
                <img src="ICONS/home.png" alt="Home"  width="16" height="16">
            </a>
        </li>

        <li>
            <a href = 'HTML_Lesrooster_even_weken.html'>Lesrooster even weken</a>
        </li>

        <li>
            <a href = 'HTML_Lesrooster_oneven_weken.html'>Lesrooster oneven weken</a>
        </li>

        <li>
            <a href = 'HTML_Contact.html'>Contact</a>
        </li>

        <li>
            <a href = 'Weeknummer.php'>Weeknummer</a>
        </li>

        <li>
            <a href = 'AjaxCall.html'>Examenrooster</a>
        </li>

        <li>
            <a href = 'SQL.php'>SQL</a>
        </li>
    </ul>
<<<<<<< Updated upstream

    <?php
        $verbinding = mysql_connect("80.112.22.24", "Pynq_Server", "WirWbe20-", "Webtech"); //mysql_connect(Serveradres, Username, Wachtwoord, Naam Database)
=======
    <div>
        <?php
            $verbinding = mysql_connect("localhost", "Pynq_Server", "WirWbe20-", "Webtech"); //mysql_connect(Serveradres, Username, Wachtwoord, Naam Database)
>>>>>>> Stashed changes

            if($verbinding)
            {
                echo "Verbinding Geslaagd! <br>";
            }
            else
            {
                die("Verbinding niet geslaagd! Foutcode: ".mysqli_connect_error()); //Eindigt het script als de connectie niet gelukt is.
            }

            $sql="SELECT Dag, Uur, Vak FROM Examenrooster_SQL";

<<<<<<< Updated upstream
        $resultaat = mysqli_query($verbinding, $sql);
        if(mysqli_num_rows($resultaat) > 0)
        {
            while($row = mysqli_fetch_array($resultaat))
=======
            $resultaat=mysqli_query($verbinding, $sql);
            if(mysqli_num_rows($resultaat) > 0)
>>>>>>> Stashed changes
            {
                while($row = mysqli_fetch_array($resultaat))
                {
                    echo $row[1]." ".$row[2]." "$row[3];
                    echo "<br>";
                }
            }

            mysqli_close($verbinding);
        ?>
    </div>
</body>
</h