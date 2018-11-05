<?php

include_once ('dbconfig.php');
include_once('model/Inscricao.php');
class daoInscricao {
    private $db;
    
    function __construct() {
        $this->db = DbConnection::getInstance();
    }
    
    public function inserirInscricao($nome, $email, $bi,$telefone, $id_curso) {
        try{
            $stmt = $this->db->prepare("insert into sgu.tb_inscricao(nome,email,bi,telefone,id_curso) values(:nomef,:emailf,:bif,:telefonef,:id_cursof)");
            $stmt->bindparam(":nomef",$nome);
            $stmt->bindparam(":emailf",$email);
            $stmt->bindparam(":bif",$bi);
            $stmt->bindparam(":telefonef",$telefone);
            $stmt->bindparam(":id_cursof",$id_curso);
            $stmt->execute();
            ?>
            <script>
             alert("Sucesso Inserido!");
            </script>
            <?php
            return true;
        } catch (Exception $ex) {
            ?>
            <script>
                alert("Erro :".<?php $ex->getMessage()?>);
            </script>
            <?php
            echo $ex->getMessage();
            return false;
        }
    }
    
    public function selectAll(){
        try{
            $stmt = $this->db->prepare("SELECT * FROM sgu.tb_inscricao");
            $stmt->execute();
            $result = $stmt->fetchAll();
            
            $inscritos = Array();
            foreach ($result as $inscrito) {
                $inscritos[] = new Inscricao($inscrito['id'], $inscrito['nome'], $inscrito['bi'], $inscrito['email'], $inscrito['telefone'], $inscrito['id_curso'],$inscrito['valida'],$inscrito['estado'],$inscrito['nota'],$inscrito['ano']);
            }
            return $inscritos;
        } catch (Exception $ex) {
            echo "ERRO NA BD TIPO: ".$ex->getMessage();
        }
    }
}
//$cc = new daoInscricao();
//$cc->inserirInscricao("teste", "teste@teste.com", "fsdf32fsf43fsdf4f", "9349434","EINF");