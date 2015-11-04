request('/api.php/1')
    .then(function(value) {

        return request('/api.php/2');

    })
    .then(function(value) {

        return request('/api.php/3');

    })
    .then(function(value) {

        // Everything is awesome

    })
    .catch(function(reason) {

        // handle error

    });
