$(document).ready(function () {
    $('.js-datepicker').datepicker({
        format: "dd-mm-yyyy",
        todayBtn: "linked",
        clearBtn: true,
        language: "fr",
        orientation: "top right",
        calendarWeeks: true,
        todayHighlight: true,
        beforeShowDay: function (date) {
            if (date.getMonth() == (new Date()).getMonth())
                switch (date.getDate()) {
                    case 4:
                        return {
                            tooltip: 'Example tooltip',
                            classes: 'active'
                        };
                    case 8:
                        return false;
                    case 12:
                        return "green";
                }
        }
    });
var path = "{{ path('admin_event_date_booked') }}";
    $.ajax({
    url: path,
    type: "POST",
    dataType : "json",
    success: function(data) {
        alert('Succes');
    },
    error: function () {
        alert('Error');
    }
});
});