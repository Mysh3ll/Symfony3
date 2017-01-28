$(document).ready(function () {
    // For tooltip placement
    $('[data-toggle="tooltip"]').tooltip();

    $('.btn-delete').click(function (event) {
        // Annule l'action par défault du form
        event.preventDefault();
        // Recupère le parent de l'élément actuel
        var row = $(this).parents('tr');
        // Récupère l'id de l'événement
        var id = row.data('id');
        // // Récupère le formulaire
        // var form = $('#form-delete');
        // // Récupère la variable :EVENT_ID (envoyé depuis le controller) pour le remplacer par l'id de l'événement sélectionné
        // var url = form.attr('action').replace(':EVENT_ID', id);
        // // Sérialisation du form
        // var data = form.serialize();

        // Modal de confirmation
        bootbox.confirm({
            title: '<h2>Confirmation de suppression !</h2>',
            message: '<p>Cette opération est irréversible, veuillez confirmer votre choix.</p>',
            buttons: {
                confirm: {
                    label: 'Confirmer',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'Annuler',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result == true) {
                    // Affichage de la barre de progression
                    $('#delete-progress').removeClass('hidden');

                    $.ajax({
                        url: Routing.generate('admin_event_delete_booked', {id: id}),
                        type: "POST",
                        async: false,
                        dataType: "json",
                        success: function (data) {
                            // Masque de la barre de progression
                            $('#delete-progress').addClass('hidden');
                            // Si la requête est success
                            if (data.delete == 'success') {
                                // Masque la ligne de l'événement que l'on veut supprimé
                                row.fadeOut();
                                // Affichage de la div #message
                                $('#message').removeClass('hidden');
                                // Affichage du message de suppression
                                $('#delete-message').text(data.message);
                                // Récupère le total d'événements avant suppression
                                var totalEvents = $('#total').text();
                                if ($.isNumeric(totalEvents)) {
                                    // Enlève 1 au total précédent
                                    $('#total').text(totalEvents - 1);
                                } else {
                                    // Laisse le total actuel sans modification
                                    $('#total').text(data.countEvents);
                                }
                            }
                        },
                        error: function () {
                            alert('Error');
                        }
                    });


                    // // Requête Ajax vers le controller EventController (admin_event_delete)
                    // $.post(url, data, function (data) {
                    //     // Masque de la barre de progression
                    //     $('#delete-progress').addClass('hidden');
                    //     // Si la requête est success
                    //     if (data.delete == 'success') {
                    //         // Masque la ligne de l'événement que l'on veut supprimé
                    //         row.fadeOut();
                    //         // Affichage de la div #message
                    //         $('#message').removeClass('hidden');
                    //         // Affichage du message de suppression
                    //         $('#delete-message').text(data.message);
                    //         // Récupère le total d'événements avant suppression
                    //         var totalEvents = $('#total').text();
                    //         if ($.isNumeric(totalEvents)) {
                    //             // Enlève 1 au total précédent
                    //             $('#total').text(totalEvents - 1);
                    //         } else {
                    //             // Laisse le total actuel sans modification
                    //             $('#total').text(data.countEvents);
                    //         }
                    //     }
                    // }).fail(function () {
                    //     alert('error');
                    //     row.show();
                    // });
                }
            }
        });

    });
});