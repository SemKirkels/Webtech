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
    
    switch(uren)
    {
        case 0:
            uren = "00";
            break;
        case 1:
            uren = "01";
            break;
        case 2:
            uren = "02";
            break;
        case 3:
            uren = "03";
            break;
        case 4:
            uren = "04";
            break;
        case 5:
            uren = "05";
            break;
        case 6:
            uren = "06";
            break;
        case 7:
            uren = "07";
            break;
        case 8:
            uren = "08";
            break;
        case 9:
            uren = "09";
            break;
        default:
            break;
    }

    switch(min)
    {
        case 0:
            min = "00";
            break;
        case 1:
            min = "01";
            break;
        case 2:
            min = "02";
            break;
        case 3:
            min = "03";
            break;
        case 4:
            min = "04";
            break;
        case 5:
            min = "05";
            break;
        case 6:
            min = "06";
            break;
        case 7:
            min = "07";
            break;
        case 8:
            min = "08";
            break;
        case 9:
            min = "09";
            break;
        default:
            break;
    }

    switch(sec)
    {
        case 0:
            sec = "00";
            break;
        case 1:
            sec = "01";
            break;
        case 2:
            sec = "02";
            break;
        case 3:
            sec = "03";
            break;
        case 4:
            sec = "04";
            break;
        case 5:
            sec = "05";
            break;
        case 6:
            sec = "06";
            break;
        case 7:
            sec = "07";
            break;
        case 8:
            sec = "08";
            break;
        case 9:
            sec = "09";
            break;
        default:
            break;
    }
    
    document.getElementById('Uren').innerHTML = uren;
    document.getElementById('Minuten').innerHTML = min;
    document.getElementById('Seconden').innerHTML = sec;
    document.getElementById('Dag').innerHTML = dag;
}

setInterval(displayTime, 10);