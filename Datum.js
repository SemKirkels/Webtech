function displayTime()
{
    var dateTime = new Date();
    var uren = addLeadingZeros(dateTime.getHours(), 2);
    var min = addLeadingZeros(dateTime.getMinutes(), 2);
    var sec = addLeadingZeros(dateTime.getSeconds(), 2);
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

function addLeadingZeros(num, totalLength)
{
    return String(num).padStart(totalLength, '0');
}

setInterval(displayTime, 10);