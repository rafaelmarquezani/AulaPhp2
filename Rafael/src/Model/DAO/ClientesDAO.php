<?php

namespace Aluno\Rafael\Model\DAO;

use Aluno\Rafael\Model\Entity\Clientes;

class ClientesDAO{

    public function inserir(Clientes $c){
        try{
            $sql = "INSERT INTO `clientes`(`nome`, `email`, `idade`) VALUES (:nome, :email, :idade)";

        } catch(\Exception $e){
            return false;
        }
    }

    public function alterar(Clientes $c){
        try{
            $sql = "UPDATE `clientes` SET `nome`=:nome,`email`=:nome,`idade`=:idade WHERE id = :id";

        } catch(\Exception $e){
            return false;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM `clientes` WHERE id = :id";

        } catch(\Exception $e){
            return false;
        }

    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM `clientes`";

        } catch(\Exception $e){
            return false;
        }


    }

    public function consultarPorId($id){
        try{
        $sql = "SELECT * FROM `clientes` where id = :id";

    } catch(\Exception $e){
        return false;
    }

    }


}