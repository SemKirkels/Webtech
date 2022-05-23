<!DOCTYPE html>

<html lang="NL">
<header>
        <title>Weeknummer</title>
        <link rel="stylesheet" href="CSS/Layout.css">
        <link rel="icon" href="ICONS/icon_1.gif"> 

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</header>
<body>
    <ul class="navigatie_balk">
        <li>
            <a href="index.html">
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
        </ul>
    <div class="Klok">
        <?php
            $tempDate = date("Y-m-d");
            $duedt = explode("-", $tempDate);
            $date  = mktime(0, 0, 0, $duedt[1], $duedt[2], $duedt[0]);
            $week  = (int)date('W', $date);
            echo "Het is week: " . $week;
        ?>
    </div>
</body>
</html>



