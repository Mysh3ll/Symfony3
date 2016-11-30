$(document).ready(function () {
    // For tooltip placement
    $('[data-toggle="tooltip"]').tooltip();

    $('.btn-delete').click(function (event) {
        // Annule l'action par défault du form
        event.preventDefault();
        // Recupère le parent de l'élément actuel
        var row = $(this).parents('tr');
        // Récupère l'id du type d'événement
        var id = row.data('id');

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
                        url: Routing.generate('admin_room_delete', {id: id}),
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
                            }
                        },
                        error: function () {
                            alert('Error');
                        }
                    });
                }
            }
        });

    });
});