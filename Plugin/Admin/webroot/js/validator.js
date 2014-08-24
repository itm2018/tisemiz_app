/**
 * javascript library for validation user's input data
 * author: huynhsonca@gmail.com
 */
var Validator = {
    init: function(form, dofunction) {
        $(form).submit(function() {
            if (!Validator.validate($(this))) {
                return false;
            }
            if (dofunction != '') {
                window[dofunction]();
                return false;
            }
        });
    },
    validate: function(form) {
        var errors = 0;
        var valid = true;
        $(form).find('.requiredInput').each(function() {
            if (!$.trim($(this).val()) || $(this).val() == 0) {
                $(this).addClass('error');
                errors++;
            }
            else {
                $(this).removeClass('error');
            }
        });
        $(form).find('.required').each(function() {
            $(this).focus(function() {
                $(this).removeClass('error');
            });
        });
       
        if (errors > 0) {
            valid = false;
        }
        return valid;
    }
};
// Expect input as y/m/d
function isValidDate(s) {
    var bits = s.split('/');
    var d = new Date(bits[0], bits[1] - 1, bits[2]);
    return d && d.getFullYear() == bits[0] && (d.getMonth() + 1) == bits[1] && d.getDate() == Number(bits[2]);
} 