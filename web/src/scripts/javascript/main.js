$('document').ready(function() {
    $('#numbers').on("input change keyup paste", function() {
        var count = $('#numbers').val().length;
        $("#feedback").text(count);
        var element = document.getElementById('feedback');
        if (count === 10) {
            element.style.background = '#007829';
            element.style.color = 'white';
            $("#feedback").text("Now click check");
        } else if (count > 10) {
            element.style.background = '#870C00';
            element.style.color = 'white';
            $("#feedback").text("Too many numbers: " + count + " of 10");
        } else if (count < 1) {
            element.style.background = 'white';
            element.style.color = 'black';
            $("#feedback").text("Enter:");
        } else {
            element.style.background = 'white';
            element.style.color = 'black';
            $("#feedback").text(count);
        }
    });
});
