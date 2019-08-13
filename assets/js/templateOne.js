function date(){
    year = new Date();
    ano = year.getFullYear();
    document.getElementById("data").innerHTML = ano;
 }

 $(function(){
    $('nav div ul').on('click','li',function(){
         var id = $(this).attr('data-id');
         //alert("Alert clicou " + id);
         $('nav div ul').find('active').removeClass('active');
         $('nav div ul').find('li[data-id='+id+']').addClass('active');
    });
 });