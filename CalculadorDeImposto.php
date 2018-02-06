<?php

class CalculadorDeImposto
{
    public function calcula(Orcamento $orcamento, Imposto $estrategiaDeImposto)
    {
        $resultado = $estrategiaDeImposto->calcula($orçamento);
        return $resultado;
    }
}