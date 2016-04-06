<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexao
 *
 * @author Nalyanne
 */
class conexao {
    public static $conexao;
          

    public function __construct() {
        
    }

    /**
     * 
     * @return Object conexão com o banco de dados 
     */
    public static function pegarInstancia() {
        if (!self::$conexao):
            self::$conexao = new PDO('mysql:host=localhost;dbname=projeto_pet;', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conexao->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        endif;
        return self::$conexao;
    }

}