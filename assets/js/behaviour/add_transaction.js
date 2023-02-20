$(document).ready(
    ()=>
    {
        let bankTransferButton  = $('.transaction_type_form .bank_transfer_button');
        let withdrawalButton    = $('.transaction_type_form .withdrawal_button');
        let otherButton         = $('.transaction_type_form .other_button');

        let transactionTypeForm = $('.transaction_type_form');
        let bank_transferForm = $('.bank_transfer_form');
        let withdrawalForm = $('.withdrawal_form');


        bankTransferButton.click(
            ()=>
            {
                withdrawalButton.removeClass('checked');
                withdrawalForm.addClass('hidden');
                otherButton.removeClass('checked');
                bankTransferButton.addClass('checked');
                bank_transferForm.removeClass('hidden');
            }
        );
        withdrawalButton.click(
            ()=>
            {
                bankTransferButton.removeClass('checked');
                bank_transferForm.addClass('hidden')
                otherButton.removeClass('checked');
                withdrawalButton.addClass('checked');
                withdrawalForm.removeClass('hidden')
            }
        );
        otherButton.click(
            (event)=>
            {
                event.preventDefault();
                bankTransferButton.removeClass('checked');
                withdrawalButton.removeClass('checked');
                $this.addClass('checked');
            }
        );

        // Cloneing Amount Field in Withdrawal Form
        // Cloneing Amount Field in Withdrawal Form
        let withdrawalFormNewAmountFieldGenerator = $('.withdrawal_form .amount_field_generator');
        withdrawalFormNewAmountFieldGenerator.click(
            ()=>
            {
                let parent  = $('.withdrawal_form .amount_field_container');
                let element = document.createElement('input');
                element.setAttribute("placeholder", "Amount (Rs.)");
                element.setAttribute("type", "number");
                element.setAttribute("name", "withdrawal_amount");
                element.setAttribute("id", "");
                parent.append(element);
            }
        );

        // Cloneing Transaction Details Area in Withdrawal Form
        // Cloneing Transaction Details Area in Withdrawal Form
        let catagoryID = 2;
        let transactionDetailsGenerator = $('.withdrawal_form .transaction_details_generator');
        transactionDetailsGenerator.click(
            ()=>
            {
                let parent      = $('.withdrawal_form .details_array');
                let template    = $('.withdrawal_form .regenerate_details:first-child');
                let clone       = template.clone();

                // title update
                clone.find("h3").text('Details '+catagoryID);

                // radio name update
                clone.find('input[name="withdrawal_transaction_catagory1"]').attr('name',"withdrawal_transaction_catagory"+catagoryID);

                // ID's update
                clone.find('#withdrawal_form_purchase1').attr('id', "withdrawal_form_purchase"+catagoryID);
                clone.find('label[for="withdrawal_form_purchase1"]').attr('for', "withdrawal_form_purchase"+catagoryID);
                clone.find('#withdrawal_form_services1').attr('id', "withdrawal_form_services"+catagoryID);
                clone.find('label[for="withdrawal_form_services1"]').attr('for', "withdrawal_form_services"+catagoryID);
                clone.find('#withdrawal_form_others1').attr('id', "withdrawal_form_others"+catagoryID);

                // label for Update
                clone.find('label[for="withdrawal_form_others1"]').attr('for', "withdrawal_form_others"+catagoryID);

                // resetting values
                clone.find('select option[value=0]').attr('selected','selected');
                clone.find('.other_radio').prop('checked', true);
                clone.find('input[type=text]').val('');
                clone.find('input[type=number]').val('');

                // Apeending TO Parent
                catagoryID++;
                clone.appendTo(parent);
                console.log(clone)
            }
        );
    }
)