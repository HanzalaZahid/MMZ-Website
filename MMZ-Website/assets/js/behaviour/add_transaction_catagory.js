$(document).ready(
    ()=>
    {
        let iconCode    =   $('.add_transaction_catagory_form .transaction_catagory_icon');
        iconCode.change(
            ()=>
            {
                let parent  =   $('.add_transaction_catagory_form .icon');
                parent.empty();
                parent.append(iconCode.val());
            }
        )
    }
)