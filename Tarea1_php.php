<?php
    $importeVendido = $_POST["importe"];
    $cantidadHijos = $_POST["hijos"];

    $sueldoBasico = 600;
    $bonificacionPorHijo = 50;
    $porcentajeComision = 7.5;
    $porcentajeDescuento = 11;

    $bonificacion = $bonificacionPorHijo * $cantidadHijos;

    $comision = ($porcentajeComision / 100) * $importeVendido;

    $sueldoBruto = $sueldoBasico + $comision + $bonificacion;

    $descuento = ($porcentajeDescuento / 100) * $sueldoBruto;

    $sueldoNeto = $sueldoBruto - $descuento;

    echo "<h1>Resultado del cálculo</h1>";
    echo "Bonificación por hijos en edad escolar: S/. $bonificacion<br>";
    echo "Comisión por ventas: S/. $comision<br>";
    echo "Sueldo bruto: S/. $sueldoBruto<br>";
    echo "Descuento: S/. $descuento<br>";
    echo "Sueldo neto: S/. $sueldoNeto<br>";
?>