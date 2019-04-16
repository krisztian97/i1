require('./bootstrap');

$(document).ready(function () {
   $('form#newTeamForm select').on('change',function () {
       let value=$(this).val();
       $('form#newTeamForm select').not(this).each(function () {
           $(this).children("option[value='"+value+"']").remove();
       });
    }) ;
});