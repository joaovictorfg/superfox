<?php

/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 20/10/2016
 * Time: 10:41
 */
class FuncoesString
{
    public static final function paraCaixaAlta($string)
    {
        return strtoupper($string);
    }

    public static final function paraCaixaBaixa($string)
    {
        return strtolower($string);
    }

    public static final function verificaStringExistente($string, $stringBuscada)
    {
        if (strpos($string, $stringBuscada) !== false) {
            return true;
        } else {
            return false;
        }
    }

    public static final function passarPrimeiraLetraParaCaixaAlta($string)
    {
        return ucfirst($string);
    }

    public static final function separaString($string, $posInicial, $posFinal = null)
    {
        if ($posFinal == null) {
            return substr($string, $posInicial - 1);
        } else {
            return substr($string, $posInicial - 1, ($posFinal - 1) * (-1));
        }
    }

    /*
    * Retorna a posicao final da ocorrencia.
    *
    */
    public static final function pegaPosStringDeterminada($string, $strBusca)
    {
        $tamanhoStrBusca = strlen($strBusca);
        return stripos($string, $strBusca) + $tamanhoStrBusca + 1;
    }

}
