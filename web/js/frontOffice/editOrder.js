$(document).ready(function () {
    // For tooltip placement
    $('[data-toggle="tooltip"]').tooltip();

    $('.btn-edit-order').click(function (event) {
        // Annule l'action par défault du form
        event.preventDefault();

        // Récupère la valeur href
        var addressValue = $(this).attr("href");

        // Modal de confirmation
        bootbox.confirm({
            title: '<h2>Confirmation de modification !</h2>',
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
                    // Redirection vers la page d'édition de la réservation
                    window.location.href = addressValue;
                }
            }
        });

    });
});