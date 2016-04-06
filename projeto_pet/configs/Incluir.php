<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Incluir
 *
 * @author Nalyanne
 */

require_once 'conexao.php';
class Incluir {
   public $resultado;
   public $query;
   
   public function getAllTopics (){
       $query = $this->conection->prepare("SELEC * FROM topics");
       $query->execute();
       return $query;
       
   }
}
