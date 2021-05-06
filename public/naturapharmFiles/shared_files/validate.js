$.validator.addMethod(
    "regex",
    function (value, element, regexp) {
        if (regexp.constructor != RegExp)
            regexp = new RegExp(regexp);
        else if (regexp.global)
            regexp.lastIndex = 0;
        return this.optional(element) || regexp.test(value);
    },
    "Proverite ovo polje"
);

$.validator.messages.required = 'Ovo polje je obavezno';

var validator = [];
var first = "";

function createValidate() {

    $.each($('form'), function (index, value) {

        if (validator[index]) {
            validator[index].destroy();
        }

        validator[index] = $(value).validate({
            errorClass: "errorValidate",
            highlight: function (element) {

                $(element).addClass("errorBorder");

                if (!first) {
                    first = element;
                    $(element).focus();
                }

                return false;
            },
            unhighlight: function (element) {

                $(element).removeClass("errorBorder");

                first = '';
                return false;
            },
            rules: {
                'name': {
                    required: true,
                    regex: '^[A-Za-z ]{3,30}$'
                },
                'phone': {
                    required: true,
                    regex: '^\\+?[0-9]{3,6}[/-]?[0-9]{3,5}-?[0-9]{3,5}$'
                }

            },
            messages: {
                'name': {
                    required: 'Molimo unesite ime',
                    regex: 'Ime nije u dobrom formatu'
                },
                'phone': {
                    required: 'Molimo unesite broj telefona',
                    regex: 'Broj telefona nije u dobrom formatu'
                }
            }
        });

    });
}

createValidate();

$('form').on('click', 'button', function (event) {

    event.preventDefault();

    let name = '';
    let phone = '';

    let form = $(this).closest('form');

    try {
        name = $(form).find('input[name="name"]').val();
        phone = $(form).find('input[name="phone"]').val();
        select = $(form).find('input[name="quantity"]').val();
    } catch (error) {
        console.error(error);
    }

    if ($(form).valid()) {
        console.log('Form validated');
        $(form).submit();
    }

    return false;
});
