$(function() {

    $('.btn-primary').on('click', function() {
        window.location.href = 'lista.html';
        return false;
    });

    $("form").on("submit", function() {
        $('#myModal').modal('show')
        return false;
    });
});
