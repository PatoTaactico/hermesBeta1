<?php

class ControladorSedes
{
    public function ctrMostrarSedes($item, $valor)
    {
        $tabla = "sedes";
        $respuesta ModeloSedes::mdlMostrarSedes($tabla, $item, $valor);

        return $respuesta;
    }
}

?>