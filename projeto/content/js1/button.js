
$( document ).ready(function() {
                
    $(":button").click(function(){
        var clickBtnValue = $(this).val();
        var nome = $("#nomeDep").val();
        var ajaxurl = 'ajax.php',
        data =  {'action': clickBtnValue,'nome': nome};
        $.post(ajaxurl, data, function (response) {
            
            alert("NOME: "+ response+ " Button:"+nome);
        });
    });
 });

