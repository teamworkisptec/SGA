
$( document ).ready(function() {
                
    $("#Inserir-departamento").click(function(){
        var clickBtnValue = $(this).val();
        var nome = $("#nomeDep").val();
        var ajaxurl = 'ajax.php',
        data =  {'action': clickBtnValue,'nomeDep': nome};
        $.post(ajaxurl, data, function (response) {
            
            alert("NOME: "+ response+ " Button:"+nome);
        });
    });
    $("#Inserir-curso").click(function(){
        var clickBtnValue = $(this).val();
        var dep = $("#selDep").val();
        var curso = $("#nomeCurso").val();
        var id = $("#idCurso").val();
        var ajaxurl = 'ajax.php',
        data =  {'action': clickBtnValue, 'curso':curso,'id':id, 'departamento':dep};
        $.post(ajaxurl, data, function (response) {
            
            alert("NOME: "+ response+ " Button:"+dep);
        });
    });
    $("#Inserir-turma").click(function(){
        var clickBtnValue = $(this).val();
        var curso = $("#selCurso").val();
        var turmaNome = $("#turmaNome").val();
        var turmaId = $("#turmaId").val();
        var periodo = $("#periodo").val();
        var ajaxurl = 'ajax.php',
        data =  {'action': clickBtnValue, 'curso':curso,'turmaNome':turmaNome,'turmaId':turmaId,'periodo':periodo};
        $.post(ajaxurl, data, function (response) {
            
            alert("!!! "+ response );
        });
    });
    $("#Inserir-docente").click(function(){
        
        var clickBtnValue = $(this).val();
        
        var nomeDoc = $("#nomeDoc").val();
        var emailDoc = $("#emailDoc").val();
        var enderecoDoc = $("#enderecoDoc").val();
        
        var ajaxurl = 'ajax.php',
        data =  {'action': clickBtnValue, 'nome':nomeDoc,'email':emailDoc,'endereco':enderecoDoc};
        $.post(ajaxurl, data, function (response) {
            
            alert("!!! "+ response );
        });
    });
    $("#Aprovarinscrito").click(function(){

       var $linha = $(this).empty("tr");



    });
    $("#Reprovarinscrito").click(function(){
        
        var clickBtnValue = $(this).val();
        
        var nomeDoc = $("#nomeDoc").val();
        var emailDoc = $("#emailDoc").val();
        var enderecoDoc = $("#enderecoDoc").val();
        
        var ajaxurl = 'ajax.php',
        data =  {'action': clickBtnValue, 'nome':nomeDoc,'email':emailDoc,'endereco':enderecoDoc};
        $.post(ajaxurl, data, function (response) {
            
            alert("!!! "+ response );
        });
    });
 });

