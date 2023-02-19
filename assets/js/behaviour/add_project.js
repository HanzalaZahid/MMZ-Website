$(document).ready(
    ()=>
    {
        let newMemberGeneratorButton    =   $('.generator_group .new_member_field_generator');
        let counter     =   2;
        newMemberGeneratorButton.click(
            ()=>
            {
                let lastCHild      =   $(".generator_group");
                let template    =   $('.project_team_form .member_group:first-child');
                let clone       =   template.clone();
                clone.find('.label').text('Team Member '+counter);
                clone.find('select').prop('name', 'member');
                clone.insertBefore(lastCHild);
                counter++;
            }
        )


        //CITIES LIST HERE
    }
)