<?php

/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 21/10/2016
 * Time: 10:03
 */
class FuncoesReflections
{
    public static function nomeClasseObjeto($obj) {
        return get_class($obj);
    }

    public static function atributosDoObjeto($obj) {
        return get_object_vars($obj);
    }

    public static function getNomesCamposClasse($obj) {

    }
}