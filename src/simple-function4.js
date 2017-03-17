function getData() {

    var data;

    doSomethingAsynchronously(function(result) {

        data = result;

    });

    return result;

}
