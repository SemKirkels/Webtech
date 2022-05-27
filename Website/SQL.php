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
    <?php
        $verbinding = mysql_connect("80.112.22.24", "Pynq_Server", "WirWbe20-", "Webtech"); //mysql_connect(Serveradres, Username, Wachtwoord, Naam Database)

        if($verbinding)
        {
            echo "Verbinding Geslaagd! <br>";
        }
        else
        {
            die("Verbinding niet geslaagd! Foutcode: ".mysqli_connect_error()); //Eindigt het script als de connectie niet gelukt is.
        }
    ?>
</body>
</html>
