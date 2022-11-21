<?php

namespace App\Model;

use App\DAO\UsuarioDAO;

class UsuarioModel
{
    
    public $id, $nome_Usuario, $codigo, $descricao;


    
    public $rows;


    
    public function save()
    {
        include 'DAO/UsuarioDAO.php';

        
        $dao = new UsuarioDAO(); 

        
        if(empty($this->id))
        {
            
            $dao->insert($this);

        } else {

            $dao->update($this); 
        }        
    }


   
    public function getAllRows()
    {
        include 'DAO/UsuarioDAO.php'; 
        
        
        $dao = new UsuarioDAO();

        
        $this->rows = $dao->select();
    }


    
    public function getById(int $id)
    {
        include 'DAO/UsuarioDAO.php'; 

        $dao = new UsuarioDAO();

        $obj = $dao->selectById($id); 

        
        return ($obj) ? $obj : new UsuarioModel(); 
        
    }


   
    public function delete(int $id)
    {
        include 'DAO/UsuarioDAO.php'; 
        $dao = new UsuarioDAO();

        $dao->delete($id);
    }
}