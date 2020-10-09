$('#pass').keyup(function(e) {
   // var strongRegex = new RegExp("^(?=.{7,100})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
    var strongRegex = new RegExp("^((?=[^!@#$&*]*[!@#$&*]))(?=.*[A-Z])(?=.*[a-z])\S{8,16}$", "g");
    var mediumRegex = new RegExp("^(?=.{6,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
    var enoughRegex = new RegExp("(?=.{0,}).*", "g");
    var enoughRegex1 = new RegExp("^(?=.*[0-9])[0-9]{1,5}","g");
    var enoughRegex2 = new RegExp("^(?=.*[a-z])[a-z]{1,5}","g");
    if (false == enoughRegex.test($(this).val())) {
            $('#passstrength').html('Más caracteres.');
    } else if (strongRegex.test($(this).val())) {
            $('#passstrength').className = 'alert';
            $('#passstrength').html('Fuerte!');
    } else if (mediumRegex.test($(this).val())) {
            $('#passstrength').className = 'alert';
            $('#passstrength').html('Media!');
    } else if (enoughRegex1.test($(this).val())) {
        $('#passstrength').className = 'alert';
        $('#passstrength').html('Debil!');
    } else if (enoughRegex2.test($(this).val())) {
        $('#passstrength').className = 'alert';
        $('#passstrength').html('Debil!');
    } 
    return true;
});