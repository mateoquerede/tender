import './bootstrap';

//Código temporal hasta decidir que framework de front-end usar

$(document).ready(function() {
    // Toggle dropdown visibility on button click
    $("#dropdownButton").click(function() {
        $("#dropdownContent").toggleClass("hidden");
    });

    // Close dropdown when clicking outside
    $(document).click(function(event) {
        if (!$(event.target).closest("#dropdownMenu").length) {
            $("#dropdownContent").addClass("hidden");
        }
    });
});
