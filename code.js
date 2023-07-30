const salmastro=class {

    setWaiter() {
        return '<div style="text-align:center;"><img style="width:100px;height:100px;" src="'+location.protocol + '//' + location.host + location.pathname+'img/busy.gif" /></div>';
    }

    getConfig() {

        var config={
            "ora":$('#sal_ora').val(),
            "festa":$('#sal_festa').val(),
            "mix":$('#sal_mix').prop('checked')?1:0,
            "contesto":$('#sal_contesto').val(),
        }

        return config;
    }

    load() {

        var param={
            "today":window._calnav_salmastro.getToday(),
            "config":this.getConfig()
        }

        //console.log(JSON.stringify(param));

        $('#salTesto').html(this.setWaiter());

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