<?php
require_once 'DAO.php';
require_once '../model/Usuario.php';
/**
 * Created by PhpStorm.
 * User: marci
 * Date: 20/10/2016
 * Time: 22:24
 */
class UsuarioDAO extends DAO
{
//
//    public function create($obj)
//    {
//      $this->abrirConexao();
//        // TODO: Implement create() method.
//    }
//


    public function porId($id)
    {
        // TODO: Implement porId() method.
    }

    public function update($obj)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}

$usuario = new Usuario("asdasd", "jhon@doe.com", "123");
$usuarioDAO = new UsuarioDAO();
$usuarioDAO->create($usuario);