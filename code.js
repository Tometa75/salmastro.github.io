const salmastro=class {

    load() {

        var param={
            "today":window._calnav_salmastro.getToday()
        }

        //console.log(JSON.stringify(param));

        $.ajax({
            "url": location.protocol + '//' + location.host + location.pathname+"func/load.php",
            "async": true,
            "cache": false,
            "data": { "param": param },
            "type": "POST",
            "success": function(ret) {
                $('#salTesto').html(ret);   
            },
            "error": function(ret) {
                console.log(ret);
            }
        });
    }
}