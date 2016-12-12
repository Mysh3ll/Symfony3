$(document).ready(function () {
    $(".searchField").on('keyup', function () { // everytime keyup event
        var input = $(this).val(); // We take the input value
        if (input.length >= 2) { // Minimum characters = 2 (you can change)
            // $('#match').html('<img src="' + window.loader + '" />'); // Loader icon apprears in the <div id="match"></div>
            var data = {input: input}; // We pass input argument in Ajax
            $.ajax({
                type: "POST",
                url: Routing.generate('front_search'), // call the php file ajax
                data: data, // Send dataFields var
                dataType: 'json', // json method
                timeout: 30000,
                success: function (response) { // If success
                    $('#match').html(response.eventList); // Return data (UL list) and insert it in the <div id="match"></div>
                    if ($('#matchList li').length == 0) {
                        $('#match').text('Aucun résultat.');
                    }
                    $('#matchList li').on('click', function () { // When click on an element in the list
                        $('.searchField').val($(this).text()); // Update the field with the new element
                        $('#match').text(''); // Clear the <div id="match"></div>
                        $('#ajaxForm').submit(); // Post the autocompletion ajax form
                    });
                },
                error: function () { // if error
                    $('#match').text('Problème !');
                }
            });
        } else {
            $('#match').text(''); // If less than 2 characters, clear the <div id="match"></div>
        }
    });
});