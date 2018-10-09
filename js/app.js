/*Ouverture de la modal */

$(document).ready(function(){
   
    $("#myBtn").click(function()
    {
        $("#myModal").modal();
    });
});

/*fin de la modal*/

$(function() 
{
  $("#wysibb").wysibb();
})


/* partie publique */

$("article>p").wysibb();