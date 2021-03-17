<?php

function getArray()
{
    $vinos = array();
    $vinos[0] = array("variedad" => "Malbec", "cantidadBotellas" => "250", "anioProduccion" => "2005", "precioUnitario" => "300");
    $vinos[1] = array("variedad" => "Cabernet Sauvignon", "cantidadBotellas" => "150", "anioProduccion" => "2001", "precioUnitario" => "700");
    $vinos[2] = array("variedad" => "Merlot", "cantidadBotellas" => "200", "anioProduccion" => "2003", "precioUnitario" => "500");
    return $vinos;
}

function main()
{
    $vinos = getArray();
    print_r($vinos);
}



main();
