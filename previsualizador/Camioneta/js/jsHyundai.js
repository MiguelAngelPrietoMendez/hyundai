$(function()
{
   $("#imgVideo").click(function()
   {
       //alert(123);
       $("#imgVideo").hide();
       $("#video").show();
       $("#video")[0].play();
   });
   
   $("#imgVideoET").click(function()
   {
       //alert(123);
       
//       var button = document.getElementById("play");
//       button.textContent = "||";
       $(".play").hide();
       $("#buttonbar").show();
       $("#imgVideoET").hide();
       $("#videoET").show();
       $("#imgSombraVideoET").show();
       $("#videoET")[0].play();
   });
});
        
function goPag(identificador)
{
    $.ajax({
        type: 'POST',
        url: 'controls/'+identificador+'.php',
        data:"",
        success: function(data) 
        {
             $( "#contenedorPrincipal" ).empty();
             $("#contenedorPrincipal").html(data);

        }
     }); 
}



 

 
 


 