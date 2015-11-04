$.ajax({
    url: "/api.php",
    success: function(data) {
        $.ajax({
            url: "/api.php",
            success: function(data) {
                $.ajax({
                    url: "/api.php",
                    success: function(data) {
                        // Win!
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
        // Win!
    },
    error: function(data) {
        // Fail!
    }
});
