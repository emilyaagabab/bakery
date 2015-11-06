/**
 * Created by Gitc on 24.07.2015.
 */
$(function () {
    $('#selected_code').val('');
    checkRadioButton();
    selectedRadioButton();
});
function checkRadioButton() {

    $('[type=radio]').click(function () {
        var id = $(this).attr('id'), code = $("#codes"), bakery = $('.bakery');
        switch (id){
            case 'all':
                clickButton('all');
                break;
            case 'core':
                clickButton('core');
                break;
            case 'add':
                clickButton('add');
                break;
        }
        function clickButton(id){
            SetCookie('rbs', id, 1);
            $('#selected_code').val(id);
            bakery.submit();
        }

    });
}
function SetCookie(cookieName, cookieValue, nDays) {
    var today = new Date();
    var expire = new Date();
    if (nDays == null || nDays == 0) nDays = 1;
    expire.setTime(today.getTime() + 3600000 * 24 * nDays);
    document.cookie = cookieName + "=" + escape(cookieValue)
    + ";expires=" + expire.toGMTString();
}
function selectedRadioButton() {
    $id = getCookie('rbs');
    $('#' + $id).attr('checked', 'checked');
}
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}