$(' .submit').on('click', function() {
    $.ajax({
        success: function(res) {
            if (!res) alert('Ошибка!')
            location = "http://protocol/index.php";
        },
        error: function(xhr, textStatus) {
            alert([xhr.status, textStatus]);
        }

    });
});