jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z, " "]+$/i.test(value);
}, "Please Enter Letters Only"); 
jQuery.validator.addMethod("mobile", function(value, element) {
    return this.optional(element) || /^((\+92)?(0092)?(92)?(0)?)(3)([0-9]{9})$/gm.test(value);
}, "Please Enter Pakistan Number"); 
jQuery.validator.addMethod("selection", function(value, element, arg){
    return arg !== 0;
   }, "Please select an option");

$('.add_client_form').validate(
    {
        rules:
        {
            client_name: {
                required:   true,
                lettersonly: true
            },
            client_type_radio: 'required',
            client_mobile:

            {
                required: function(element) {
                    return $('.add_client_form input[name=client_type_radio]:checked').val() == "private";
                  },
                mobile: true,
            }
        },
        messages:
        {

        }
    }
);

$('.add_beneficiary_form').validate(
    {
        rules:
        {
            beneficiary_name:
            {
                required: true,
                lettersonly: true
            },
            pakistan_bank_list:
            {
                // required: true,
            },
            account_number:
            {
                required: ()=>
                {
                    return $('.beneficiary_checkbox:checked').length == 0;
                },
                digits: true
            },
            employee_designation_select:
            {
                required: ()=>
                {
                    return ('.beneficiary_checkbox:checked').length > 0;
                }
            },
            employee_mobile1: "required"
        },
        messages:
        {

        }
    }
);

$('.add_transaction_catagory_form').validate(
    {
        rules:
        {
            transaction_catagory_name:
            {
                required: true,
                lettersonly: true
            },
            transaction_catagory_icon:
            {
                required: true
            },
        },
        messages:
        {

        }
    }
);

$('.bank_transfer_form').validate(
    {
        rules:
        {
            bank_transfer_date: 'required',
            bank_transfer_beneficiary: 'required',
            bank_transfer_amount: 'required',
            // bank_transfer_project: 'required',
            transaction_catagory: 'required'

        },
        messages:
        {
            // bank_transfer_beneficiary: "Please Select Beneficiary"
        }
    }
);

// $('.withdrawal_form').validate(
//     {
//         rules:
//         {
//             withdrawal_date: 'required',
//             withdrawal_project: 'required',
//             withdrawal_transaction_catagory: 'required',
//             withdrawal_beneficiary: 'required',
//             withdrawal_purpose: 'required',
//             cash_amount: 'required'

//         },
//         messages:
//         {
//             // bank_transfer_beneficiary: "Please Select Beneficiary"
//         }
//     }
// );

$('.add_Project_form').validate(
    {
        rules:
        {
            select_client: 'required',
            select_province: 'required',
            select_city: 'required',
            member: 'required'
        },
        messages:
        {

        },

    }
);
$('.admin_login_form').validate(
    {
        rules:
        {
            user_password: 
            {
                required: true,
                minlength: 8
            },
            user_email: 'required',
        },
        messages:
        {

        },

    }
);