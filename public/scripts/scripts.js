'use strict';

agCookie.create('example-cookie', true, 1);

var readValue = agCookie.read('example-cookie');

console.log(readValue);

agCookie.erase('example-cookie');

function markoFunkcija(args) {
    console.log(args);

    return true;
}
'use strict';

var picker = new Pikaday({
    field: document.getElementById('datepicker'),
    isRTL: true,
    firstDay: 1,
    minDate: new Date(),
    i18n: {
        previousMonth: 'Prec',
        nextMonth: 'Suiv',
        months: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
        weekdays: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
        weekdaysShort: ['D', 'L', 'M', 'M', 'J', 'V', 'S']
    }
});