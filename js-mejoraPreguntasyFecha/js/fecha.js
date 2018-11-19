window.onload = function () {
    var myOwnDate = new Date();

    var actualDayNumber = myOwnDate.getDate();
    var actualMonth = myOwnDate.getMonth();
    var actualDayName = myOwnDate.getDay();
    var actualFullYear = myOwnDate.getFullYear();

    var daysArray = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
    var monthsArray = ['Ene.', 'Feb.', 'Mar.', 'Abr.', 'May.', 'Jun.', 'Jul.', 'Ago.', 'Sep.', 'Oct.', 'Nov', 'Dic'];

    document.querySelector('h3').innerText = `${daysArray[actualDayName]} ${actualDayNumber} de ${monthsArray[actualMonth]} de ${actualFullYear}.`;

    var otraFecha = new Date(2018, 11, 25);

    console.log('Dias hasta navidad:', `${Math.ceil(((otraFecha.getTime() - myOwnDate.getTime()) / (1000 * 60 * 60 * 24)))}`);
};














	