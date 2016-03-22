<?php
include_once 'configs/conexao.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author Nalyanne
 */
class login {
    private $login;
    private $senha;
    
    public function __construct ($login , $senha) {
        $this->login = (!is_null($login)) ? (String) $login : header("Location: index1.php");
        $this->senha = (!is_null($senha)) ? (String) $senha : header("Location: index1.php");
        
        $sql = "SELECT * FROM tb_usuario WHERE login = :cod  AND senha = :senha";
       
        $p_sql = Conexao::pegarInstancia()->prepare($sql); 
        $p_sql->bindValue(":cod", $this->login); 
        $p_sql->bindValue(":senha", $this->senha); 
        $p_sql->execute();
        
        $result = $p_sql->fetch(PDO::FETCH_ASSOC);

         if(!empty($result)):
             session_start();
             $_SESSION['user'] = $result;
              header("Location: index1.php");
         endif;
    }
}
