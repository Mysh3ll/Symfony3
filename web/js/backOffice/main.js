// $(document).ready(function () {
//
//
//     // Array of events dates
//     var eventDates = [];
//     // Array of title of the event
//     var eventTitre = [];
//     // Array of type of event
//     var eventLibelle = [];
//     // Array of room of event
//     var eventSalle = [];
//
//     // Request Ajax to get all booked seats from database
//     $.ajax({
//         url: Routing.generate('admin_event_date_booked'),
//         type: "POST",
//         async: false,
//         dataType: "json",
//         success: function (data) {
//             //alert(JSON.stringify(data));
//             // var stringJson = (JSON.stringify(data));
//             // var string = JSON.parse(stringJson);
//             for (var i = 0; i < data.length; i++) {
//                 var formatDate = data[i].dateEvent.date;
//                 if (formatDate) {
//                     formatDate = formatDate.replace(/(\d{4})-(\d{1,2})-(\d{1,2})/, function (match, y, m, d) {
//                         return d + '.' + m + '.' + y; //conversion yy-mm-dd => mm.dd.yy
//                     });
//                 }
//                 eventDates[i] = formatDate; //date de l'événement
//                 eventDates[i] = eventDates[i].substr(0, 10);
//                 eventTitre[i] = data[i].titreEvent; //titre de l'événement
//                 eventLibelle[i] = data[i].idType.libelleType; //catégorie de l'événement
//                 eventSalle[i] = data[i].idSalle.nomSalle; //salle de l'événement
//             }
//         },
//         error: function () {
//             alert('Error');
//         }
//     });
//
//     function DisableSpecificDates(date) {
//
//         var m = date.getMonth();
//         var d = date.getDate();
//         var y = date.getFullYear();
//
//         m = m + 1; // Take note that we will increment the month count by 1
//         if (d == 1 || d == 2 || d == 3 || d == 4 || d == 5 || d == 6 || d == 7 || d == 8 || d == 9) {
//             d = '0' + d;
//         }
//         if (m != 10 && m != 11 && m != 12) {
//             m = '0' + m;
//         }
//
//         // First convert the date in to the dd.mm.yyyy format
//         var currentdate = d + '.' + m + '.' + y;
//
//         // We will now check if the date belongs to disableddates array
//         for (var i = 0; i < eventDates.length; i++) {
//
//             // Now check if the current date is in disabled dates array.
//             if ($.inArray(currentdate, eventDates) != -1) {
//                 var index = $.inArray(currentdate, eventDates);
//                 return {
//                     enabled: false,
//                     tooltip: 'JOUR RÉSERVÉ -- ' + eventLibelle[i] + ' : ' + eventTitre[i],
//                     classes: 'booked'
//                 }
//             }
//         }
//
//     }
//
//     $('.js-datepicker').datepicker({
//         format: "dd/mm/yyyy",
//         todayBtn: "linked",
//         clearBtn: true,
//         language: "fr",
//         orientation: "top right",
//         calendarWeeks: true,
//         todayHighlight: true,
//         beforeShowDay: DisableSpecificDates
//         // var formattedDate = $.fn.datepicker.DPGlobal.formatDate(date, 'dd.mm.yyyy', 'fr');
//         // var dmy = date.getDate() + "." + (date.getMonth()+1) + "." + date.getFullYear();
//         // console.log(date);
//         // if ($.inArray(formattedDate.toString(), eventDates) != -1) {
//         //     return {
//         //         enabled: false
//         //     };
//         // }
//         // return;
//
//
//     });
//
//     $(document).on('click', '.datepicker.next', function () {
//         console.log('next');
//     })
//
//     // $(".js-datepicker").on('changeYear', function () {
//     //     currYear = $(".datepicker-switch").html();
//     //     console.log(currYear);
//     // })
// });
$(document).ready(function () {

    // Hide submit before we select a valid date
    $('#event_create_submit').hide();

    // Array of events dates
    var eventDates = [];
    // Array of title of the event
    var eventTitre = [];
    // Array of type of event
    var eventLibelle = [];
    // Array of room of event
    var eventSalle = [];

    // Request Ajax to get all booked seats from database
    $.ajax({
        url: Routing.generate('admin_event_date_booked'),
        type: "POST",
        async: false,
        dataType: "json",
        success: function (data) {
            //alert(JSON.stringify(data));
            // var stringJson = (JSON.stringify(data));
            // var string = JSON.parse(stringJson);
            for (var i = 0; i < data.length; i++) {
                var formatDate = data[i].dateEvent.date;
                if (formatDate) {
                    formatDate = formatDate.replace(/(\d{4})-(\d{1,2})-(\d{1,2})/, function (match, y, m, d) {
                        return m + '/' + d + '/' + y; //conversion yy-mm-dd => mm.dd.yy
                    });
                }
                eventDates[i] = formatDate; //date de l'événement
                eventDates[i] = eventDates[i].substr(0, 10);
                eventTitre[i] = data[i].titreEvent; //titre de l'événement
                eventLibelle[i] = data[i].idType.libelleType; //catégorie de l'événement
                eventSalle[i] = data[i].idSalle.nomSalle; //salle de l'événement
            }
        },
        error: function () {
            alert('Error');
        }
    });

    // Datepicker Configuration
    $(".js-datepicker").datepicker({
        closeText: 'Fermer',
        prevText: 'Précédent',
        nextText: 'Suivant',
        currentText: 'Aujourd\'hui',
        monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
        dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
        dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
        dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        weekHeader: 'Sem.',
        dateFormat: 'yy-mm-dd',
        beforeShowDay: showDate,
        onSelect: function (dateText, inst) {
            // Copy the selected date to the form input
            $('#appbundle_event_dateEvent').val(dateText);
            // Show submit after we select a valid date
            $('#event_create_submit').show();
        },
    });

    // Function for highlight the booked event from database
    function showDate(date) {
        for (var i = 0; i < eventDates.length; i++) {
            if (new Date(eventDates[i]).toString() == date.toString()) {
                return [true, 'eventBooked ui-datepicker-unselectable', 'JOUR RÉSERVÉ -- ' + eventLibelle[i] + ' : ' + eventTitre[i] + ' => Salle : ' + eventSalle[i]];
            }
        }
        return [true, null, 'Ce jour est disponible. Vous pouvez créer un evenement ce jour là.'];
    }

    // Set currYear to the actual Year
    var currYear = $('.ui-datepicker-year').html();

    // Check if the user change year, to make an ajax request with the new year
    $(".js-datepicker").on("click", function () {

        if ($('.ui-datepicker-year').html() != currYear) {
            currYear = $('.ui-datepicker-year').html()

            $.ajax({
                url: Routing.generate('admin_event_date_booked_year', {year: currYear}),
                type: "POST",
                async: false,
                dataType: "json",
                success: function (data) {
                    for (var i = 0; i < data.length; i++) {
                        var formatDate = data[i].dateEvent.date;
                        if (formatDate) {
                            formatDate = formatDate.replace(/(\d{4})-(\d{1,2})-(\d{1,2})/, function (match, y, m, d) {
                                return m + '/' + d + '/' + y; //conversion yy-mm-dd => mm.dd.yy
                            });
                        }
                        eventDates[i] = formatDate; //date de l'événement
                        eventDates[i] = eventDates[i].substr(0, 10);
                        eventTitre[i] = data[i].titreEvent; //titre de l'événement
                        eventLibelle[i] = data[i].idType.libelleType; //catégorie de l'événement
                        eventSalle[i] = data[i].idSalle.nomSalle; //salle de l'événement
                    }
                    $('.js-datepicker').datepicker("refresh");
                },
                error: function () {
                    alert('Error');
                },
            });
        }
    });

    // Hide seats maps before choosing the room
    $('#seat-map-principal').hide();
    $('#seat-map-secondaire').hide();

    // Show seats map on change "Selection de la salle"
    $('#appbundle_event_idSalle').on('change', function () {
        // Get the selected Text and not the Value
        var value = $(this).find("option:selected").text();

        // Show map for the selected choice
        switch (value) {
            case "Principale":
                $('#seat-map-principal').show();
                $('#seat-map-secondaire').hide();
                break;
            case "Secondaire":
                $('#seat-map-principal').hide();
                $('#seat-map-secondaire').show();
                break;
            case "Choisir une salle":
                $('#seat-map-principal').hide();
                $('#seat-map-secondaire').hide();
                break;
        }
    });

});
