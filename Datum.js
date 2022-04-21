function displayTime()
{
    var dateTime = new Date();
    var uren = dateTime.getHours();
    var min = dateTime.getMinutes();
    var sec = dateTime.getSeconds();
    var tempDag = dateTime.getDay();
    let dag;

    switch(tempDag)
    {
        case 0:
            dag = "Zondag";
            break;
        case 1:
            dag = "Maandag";
            break;
        case 2:
            dag = "Dinsdag";
            break;
        case 3:
            day = "Woensdag";
            break;
        case 4:
            dag = "Donderdag";
            break;
        case 5:
            dag = "Vrijdag";
            break;
        case 6:
            dag = "Zaterdag";
            break;
        default:
            dag = "ErrorInScript";
            break;
    }
    
    document.getElementById('Uren').innerHTML = uren;
    document.getElementById('Minuten').innerHTML = min;
    document.getElementById('Seconden').innerHTML = sec;
    document.getElementById('Dag').innerHTML = dag;
}

setInterval(displayTime, 10);