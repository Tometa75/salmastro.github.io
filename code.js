const salmastro=class {

    setWaiter() {
        var href = window.location.href;
        var dir = href.substring(0, href.lastIndexOf('/')) + "/";

        return '<div style="text-align:center;"><img style="width:100px;height:100px;" src="'+dir+'img/busy.gif" /></div>';

        //return '<div style="text-align:center;"><img style="width:100px;height:100px;" src="'+location.protocol + '//' + location.host + location.pathname+'img/busy.gif" /></div>';
    }

    refresh() {
        var href = window.location.href;
        var dir = href.substring(0, href.lastIndexOf('/')) + "/";

        //location.href=location.protocol + '//' + location.host + location.pathname;
        location.href=dir;
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

        var href = window.location.href;
        var dir = href.substring(0, href.lastIndexOf('/')) + "/";
        //alert(dir);

        var param={
            "today":window._calnav_salmastro.getToday(),
            "config":this.getConfig()
        }

        //console.log(JSON.stringify(param));

        $('#salTesto').html(this.setWaiter());

        //"url": location.protocol + '//' + location.host + location.pathname+"load.php",

        $.ajax({
            "url": dir+"load.php",
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

    bvm(id) {

        $('div[id^="salmastro_bvm_"]').hide();
        $('#salmastro_bvm_'+id).show();
    }
}