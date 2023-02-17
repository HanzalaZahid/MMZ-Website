$(document).ready(
    ()=>
    {
        let employeeCheckButton = $('.add_beneficiary_form input[type=checkbox]');

        employeeCheckButton.click(
            ()=>
            {
                let aboutBeneficary = $('.add_beneficiary_form .about_beneficiary_group'); 
                let toggleGroup     = $('.add_beneficiary_form .toggle_group'); 
                aboutBeneficary.toggleClass('hidden');
                toggleGroup.toggleClass('hidden');
            }
        );
        
    }
)