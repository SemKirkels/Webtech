<!doctype HTML>
<HTML>
<head>
    <title>SQL Pagina</title>

    <link rel="stylesheet" href="CSS/Layout.css">
    <link rel="icon" href="ICONS/icon_1.gif"> 

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
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
    
    <div class='SQL'>
        <?php
        $hostname = "Pynq_Server";
        $username = "Pynq_Server";
        $password = "";
        $db = "WebTech";

        $dbconnect=mysqli_connect($hostname, $username, $password, $db);
        if($dbconnect->connect_error)
        {
            die("Database connection failed: " . $dbconnect->connect_error);
        }
        ?>

        <?php
        $query = mysqli_query($dbconnect, "SELECT * FROM Uur") or die (mysqli_error($dbconnect));

        while($row = mysqli_fetch_array($query))
        {
            echo
            <tr>
            <td>{$row ['veld1']}</td>
            <td>{$row ['veld2']}</td>
            <td>{$row ['veld3']}</td>
            <td>{$row ['veld4']}</td>
            <td>{$row ['veld5']}</td>
            </tr>;
        }

        $query = mysqli_query($dbconnect, "SELECT * FROM Dag") or die (mysqli_error($dbconnect));

        while($row = mysqli_fetch_array($query))
        {
            echo
            <tr>
            <td>{$row ['veld1']}</td>
            <td>{$row ['veld2']}</td>
            <td>{$row ['veld3']}</td>
            <td>{$row ['veld4']}</td>
            <td>{$row ['veld5']}</td>
            </tr>;
        }

        $query = mysqli_query($dbconnect, "SELECT * FROM Vak") or die (mysqli_error($dbconnect));

        while($row = mysqli_fetch_array($query))
        {
            echo
            <tr>
            <td>{$row ['veld1']}</td>
            <td>{$row ['veld2']}</td>
            <td>{$row ['veld3']}</td>
            <td>{$row ['veld4']}</td>
            <td>{$row ['veld5']}</td>
            </tr>;
        }
        ?>
        </div>
</body>
</HTML>