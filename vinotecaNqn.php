<?php

function getVinoteca()
{
    $vinoteca = array();

    $malbec[0] = array("stock" => "2505", "anioProduccion" => "2005", "precioUnitario" => "300");
    $malbec[1] = array("stock" => "150", "anioProduccion" => "2002", "precioUnitario" => "600");
    $malbec[2] = array("stock" => "50", "anioProduccion" => "1999", "precioUnitario" => "1600");

    $cs[0] = array("stock" => "150", "anioProduccion" => "2008", "precioUnitario" => "700");
    $cs[1] = array("stock" => "100", "anioProduccion" => "2005", "precioUnitario" => "2700");
    $cs[2] = array("stock" => "10", "anioProduccion" => "2001", "precioUnitario" => "5700");

    $merlot[0] = array("stock" => "250", "anioProduccion" => "2003", "precioUnitario" => "500");
    $merlot[1] = array("stock" => "210", "anioProduccion" => "2002", "precioUnitario" => "600");
    $merlot[2] = array("stock" => "200", "anioProduccion" => "2001", "precioUnitario" => "700");

    $vinoteca["Malbec"] = $malbec;
    $vinoteca["Cabernet Sauvignon"] = $cs;
    $vinoteca["Merlot"] = $merlot;
    return $vinoteca;
}

function main()
{
    $vinoteca = getVinoteca();
    print_r($vinoteca);
}

main();
