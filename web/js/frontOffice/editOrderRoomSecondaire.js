$(document).ready(function () {
    var panier = {
        "data": []
    };
    var firstSeatLabel = 1;

    var $cart = $('#selected-seats'),
        $counter = $('#counter'),
        $total = $('#total'),
        $avoir = $('#avoir'),
        $totalOrder = $('#totalOrder').val(),
        sc = $('#seat-map-secondaire').seatCharts({
            map: [
                '_______aaaaaaaaaaaaaaaaaa_______',
                '_______aaaaaaaaaaaaaaaaaa_______',
                '_______aaaaaaaaaaaaaaaaaa_______',
                '____bbbbbbbbbbb__bbbbbbbbbbb____',
                '____bbbbbbbbbbb__bbbbbbbbbbb____',
                '____bbbbbbbbbbb__bbbbbbbbbbb____',
                '____bbbbbbbbbbb__bbbbbbbbbbb____',
                'ccc____cccccccc__cccccccc____ccc',
                'cccc___cccccccc__cccccccc___cccc',
                'ccccc__cccccccc__cccccccc__ccccc',
                'cccccc_cccccccc__cccccccc_cccccc',
                'ccccccccccccccc__ccccccccccccccc',
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
            legend: {
                node: $('#legend'),
                items: [
                    ['a', 'available', 'Classe Or: 100€'],
                    ['b', 'available', 'Classe Argent: 40€'],
                    ['c', 'available', 'Classe Bronze: 20€'],
                    ['a', 'unavailable', 'Réservé']
                ]
            },
            click: function () {
                if (this.status() == 'available') {
                    //contrôle du montant de l'avoir avant insertion dans le panier
                    $totalOrder -= this.data().price;
                    if ($totalOrder >= 0) {
                        //let's create a new <li> which we'll add to the cart items
                        $('<li>' + this.data().category + ' Place n° ' + this.settings.label + ': <b>' + this.data().price + ' €</b> </li>')
                            .attr('id', 'cart-item-' + this.settings.id)
                            .data('seatId', this.settings.id)
                            .appendTo($cart);

                        //get the idEvent + n° of seat + price
                        var id = $('#idEvent').val();
                        var seat = this.settings.label;
                        var price = this.data().price;
                        var html_id = this.settings.id;
                        //push the "item" to the panier.data
                        panier.data.push({"idEvent": id, "seat": seat, "price": price, "html_id": html_id});

                        // console.log(JSON.stringify(panier));

                        /*
                         * Lets up<a href="http://www.jqueryscript.net/time-clock/">date</a> the counter and total
                         *
                         * .find function will not find the current seat, because it will change its stauts only after return
                         * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
                         */
                        $counter.text(sc.find('selected').length + 1);
                        $total.text(recalculateTotal(sc) + this.data().price);
                        //and avoir
                        $avoir.text($totalOrder);

                        return 'selected';
                    } else {
                        //remet la bonne valeur de l'avoir car montant dépassé lors de la sélection de la place
                        $totalOrder += this.data().price;
                        //Show alert message
                        bootbox.alert("Vous ne pouvez pas commander plus que : " + $('#totalOrder').val() + " €.");
                        //seat has been vacated
                        return 'available';
                    }

                } else if (this.status() == 'selected') {
                    //update the counter
                    $counter.text(sc.find('selected').length - 1);
                    //and total
                    $total.text(recalculateTotal(sc) - this.data().price);
                    //and avoir
                    $totalOrder += this.data().price;
                    $avoir.text($totalOrder);

                    //remove the item from our cart
                    $('#cart-item-' + this.settings.id).remove();

                    //Checks panier.data for an object with a property of 'seat' whose value is 'this.settings.label'
                    //Then removes it
                    findAndRemove(panier.data, 'seat', this.settings.label);
                    // console.log(JSON.stringify(panier));

                    //seat has been vacated
                    return 'available';
                } else if (this.status() == 'unavailable') {
                    //seat has been already booked
                    return 'unavailable';
                } else {
                    return this.style();
                }
            }
        });

    //this will handle "[cancel]" link clicks
    // $('#selected-seats').on('click', '.cancel-cart-item', function () {
    //     //let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
    //     sc.get($(this).parents('li:first').data('seatId')).click();
    // });

    //Get idEvent pour la requête Ajax
    var id = $('#idEvent').val();
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

    //Add to the panier
    $('.btn-editOrder').click(function () {
        var data = JSON.stringify(panier);
        $('#order').val(data);
    });
});

function recalculateTotal(sc) {
    var total = 0;

    //basically find every selected seat and sum its price
    sc.find('selected').each(function () {
        total += this.data().price;
    });

    return total;
}

function findAndRemove(array, property, value) {
    array.forEach(function (result, index) {
        if (result[property] === value) {
            //Remove from array
            array.splice(index, 1);
        }
    });
}