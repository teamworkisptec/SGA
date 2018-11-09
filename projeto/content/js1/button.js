
$( document ).ready(function() {
    $("#cursoMat").click(function(){
        var idcurso = $(this).val();
        var find = "Turma";
        
        var ajaxurl = 'ajax.php',
        data =  {'action': find,'idcurso':idcurso};
        $.post(ajaxurl, data, function (data) {
            var turma = $.parseJSON(data);
            $('#selMatTurma').empty();
            $('#selMatTurma').append('<option > - - - - </option>');
            for(i=0; i<= turma.length;i++){
                $('#selMatTurma').append('<option id="turmaMat" value="'+turma[i].id+'" >'+turma[i].nome+'</option>');
            }
            
        });
        //data ={'curso': idcurso},
       /*** $.ajax({
            data:idcurso ,
            complete: function (data) {
            alert("ID Curso: ".data);
            
        } 
        }); **/
    });
    $("#selMatTurma").click(function(){
        var idturma = $(this).val();
        var find = "Semestre";
        
        var ajaxurl = 'ajax.php',
        data =  {'action': find,'idturma':idturma};
        $.post(ajaxurl, data, function (data) {
            
            
            var horario = $.parseJSON(data);
            alert(horario[0].semestre);
            $('#selMatSemestre').empty();
            for(i=0; i<= horario.length;i++){
                $('#selMatSemestre').append('<option id="semestreMat" value="'+horario[i].semestre+'" >'+horario[i].semestre+'º</option>');
            }
        });
    });
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
    $("#Inserir-matricula").click(function(){
        
        var clickBtnValue = $(this).val();
        
        var nome = $("#nomeMat").val();
        var email = $("#emailMat").val();
        var telefone = $("#telefoneMat").val();
        var endereco = $("#enderecoMat").val();
        var curso = $("#cursoMat").val();
        
        var ajaxurl = 'ajax.php',
        data =  {'action': clickBtnValue, 'nome':nome,'email':email,'telefone':telefone,'endereco':endereco,'curso':curso};
        $.post(ajaxurl, data, function (response) {            
            alert("!!!"+telefone+" -"+ response );
        });
    });
    $("#Aprovarinscrito").click(function(){
        
        var clickBtnValue = $(this).val();
        
        
        var ajaxurl = 'ajax.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            
            alert("!!! "+ response );
        });
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

