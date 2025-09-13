<?php
    function calcularImposto($salario){
        if($salario > 3000){
            $imposto = $salario * 0.15;
            return $imposto; 
        }else{
            return 0; 
        }
    }

?>