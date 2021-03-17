<?php

function getVinoteca()
{
    $vinoteca = array();
    $vinoteca["Malbec"] = array("stock" => "250", "anioProduccion" => "2005", "precioUnitario" => "300");
    $vinoteca["Cabernet Sauvignon"] = array("stock" => "150", "anioProduccion" => "2001", "precioUnitario" => "700");
    $vinoteca["Merlot"] = array("stock" => "200", "anioProduccion" => "2003", "precioUnitario" => "500");
    return $vinoteca;
}

function main()
{
    $vinoteca = getVinoteca();
    print_r($vinoteca);
}



main();
