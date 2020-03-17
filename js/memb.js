function fill(){  
    $.ajax({
        url: 'php/getMemb.php',
        type: 'POST',
        data: {},
        success: function (data) {
            var json = $.parseJSON(data);
            $(json).each(function (i, val) {
                $.each(val, function (k, v) {
                    $("#Memb").append("<option value='"+v+"'>" + v + "</option>");
                });
            });
        }
    });
}