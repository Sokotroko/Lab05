<?php
    $precioActual = $_POST["precio"];
    $cantidadUnidades = $_POST["unidades"];

    $precioRebajado = $precioActual - ($precioActual * 0.05);
    $importeCompra = $precioRebajado * $cantidadUnidades;
    $descuento = $importeCompra * 0.07;
    $importePagar = $importeCompra - $descuento;
    $caramelosObsequio = $cantidadUnidades * 2;

    echo "Nuevo precio de la gaseosa de 3 litros: S/. $precioRebajado<br>";
    echo "Importe de la compra: S/. $importeCompra<br>";
    echo "Importe del descuento: S/. $descuento<br>";
    echo "Importe a pagar: S/. $importePagar<br>";
    echo "Cantidad de caramelos de obsequio: $caramelosObsequio<br>";
?>