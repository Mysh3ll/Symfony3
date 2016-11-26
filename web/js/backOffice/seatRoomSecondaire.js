$(document).ready(function () {
    var firstSeatLabel = 1;

    var $cart = $('#selected-seats'),
        $counter = $('#counter'),
        $total = $('#total'),
        sc = $('#seat-map-secondaire').seatCharts({
            map: [
                'aaaaaaaa__aaaaaaaa',
                'aaaaaaaa__aaaaaaaa',
                'aaaaaaaa__aaaaaaaa',
                'bbbbbbbb__bbbbbbbb',
                'bbbbbbbb__bbbbbbbb',
                'bbbbbbbb__bbbbbbbb',
                'bbbbbbbb__bbbbbbbb',
                'cccccccc__cccccccc',
                'cccccccc__cccccccc',
                'cccccccc__cccccccc',
                'cccccccc__cccccccc',
                'cccccccc__cccccccc',
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

});
