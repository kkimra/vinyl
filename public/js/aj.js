$(document).ready(function() {
    $(document).on('click', ".pagination a", function(e) {
        e.preventDefault();
        getVinyls($(this).attr('href').split('page=')[1]);

    });
});

function getVinyls(page) {
    $.ajax({
          url: '?page=' + page,
          dataType: 'json',
          }).done(function(data) {
            $('#container').html(data);
            location.hash = page;
        }).fail(function() {
            alert('Posts could not be loaded.');
        });
    }
