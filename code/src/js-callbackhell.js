$.ajax({
    url: "/api.php/1",
    success: function(data) {
        $.ajax({
            url: "/api.php/2",
            success: function(data) {
                $.ajax({
                    url: "/api.php/3",
                    success: function(data) {

                    },
                    error: function(data) {
                        // Fail!
                    }
                });
            },
            error: function(data) {
                // Fail!
            }
        });
    },
    error: function(data) {
        // Fail!
    }
});


