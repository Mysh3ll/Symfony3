$(document).ready(function () {
    var panier = {
        "data": []
    };
    var firstSeatLabel = 1;

    var $cart = $('#selected-seats'),
        $counter = $('#counter'),
        $total = $('#total'),
        sc = $('#seat-map-principal').seatCharts({
            map: [
                'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                '__aaaaaaaa__aaaaaaaa__aaaaaaaa__',
                '__aaaaaaaa__aaaaaaaa__aaaaaaaa__',
                '__aaaaaaaa__aaaaaaaa__aaaaaaaa__',
                '__aaaaaaaa__aaaaaaaa__aaaaaaaa__',
                '__bbbbbbbb__bbbbbbbb__bbbbbbbb__',
                '__bbbbbbbb__bbbbbbbb__bbbbbbbb__',
                '__bbbbbbbb__bbbbbbbb__bbbbbbbb__',
                '__bbbbbbbb__bbbbbbbb__bbbbbbbb__',
                '__bbbbbbbb__bbbbbbbb__bbbbbbbb__',
                '__bbbbbbbb__bbbbbbbb__bbbbbbbb__',
                '__bbbbbbbb__bbbbbbbb__bbbbbbbb__',
                '__bbbbbbbb__bbbbbbbb__bbbbbbbb__',
                '__bbbbbbbb__bbbbbbbb__bbbbbbbb__',
                '__bbbbbbbb__bbbbbbbb__bbbbbbbb__',
                'cccccccccc__cccccccc__cccccccccc',
                'cccccccccc__cccccccc__cccccccccc',
                'cccccccccc__cccccccc__cccccccccc',
                'cccccccccc__cccccccc__cccccccccc',
                '_ccccccccc__cccccccc__ccccccccc_',
                '_ccccccccc__cccccccc__ccccccccc_',
                '_ccccccccc__cccccccc__ccccccccc_',
                '___ccccccc__cccccccc__ccccccc___',
                '___ccccccc__cccccccc__ccccccc___',
                '___ccccccc__cccccccc__ccccccc___',
                '_______ccc__cccccccc__ccc_______',
                '_______ccc__cccccccc__ccc_______',
                '_______ccc__cccccccc__ccc_______',
            ],
            seats: {
                a: {
                    price: 100,
                    classes: 'gold-class', //your custom CSS class
                    category: 'Classe Or'
                },
                b: {
                    price: 40,
                    classes: 'silver-class', //your custom CSS class
                    category: 'Classe Argent'
                },
                c: {
                    price: 20,
                    classes: 'bronze-class',
                    category: 'Classe Bronze'
                }

            },
            naming: {
                top: false,
                getLabel: function (character, row, column) {
                    return firstSeatLabel++;
                },
            },
        });

    //Get idEvent pour la requête Ajax
    var id = $('#idEvent').val();

    if (id != null) {
        //array of seats booked
        var seatsBooked = [];
        $.ajax({
            url: Routing.generate('front_resa_booked_seat', {id: id}),
            type: "POST",
            async: false,
            dataType: "json",
            success: function (data) {
                //Get html_id des places réservées
                for (var i = 0; i < data.html_id.length; i++) {
                    seatsBooked[i] = data.html_id[i];
                }
            },
            error: function () {
                alert('Error');
            }
        });

        // let's pretend some seats have already been booked
        sc.get(seatsBooked).status('unavailable');
    }

});
