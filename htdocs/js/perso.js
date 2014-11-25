function  ajax(c, a, $contenant, params, initP) {
    if ($contenant === undefined) {
        $contenant = $('#page-wrapper');
    }
    if (initP === undefined) {
        initP = false;
    }
    if (params === undefined) {
        params = {};
    }
    //$contenant.html('<i class="fa fa-refresh fa-spin"></i>');

    $.ajax({
        url: '.',
        type: 'POST',
        data: $.extend(params, {'c': c, 'a': a})
    }).done(function (data) {
        if (data.substr(0, 15) == '<!DOCTYPE html>') {
             $(location).attr('href', '.');
        } else {
            $contenant.html(data);
        }
    });
}
function submitForm($form, $contenant) {
    if ($contenant === undefined) {
        $contenant = $('#page-wrapper');
    }
    var params = $form.serializeArray();
    ajax(params['c'], params['a'], $contenant, params);
    return false;
}