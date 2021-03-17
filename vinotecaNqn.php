<?php

function getVinoteca()
{
    $vinoteca = array();

    $malbec[0] = array("variedad" => "dulce", "stock" => "2505", "anioProduccion" => "2005", "precioUnitario" => "300");
    $malbec[1] = array("variedad" => "amargo", "stock" => "150", "anioProduccion" => "2002", "precioUnitario" => "600");
    $malbec[2] = array("variedad" => "seco", "stock" => "50", "anioProduccion" => "1999", "precioUnitario" => "1600");

    $cs[0] = array("variedad" => "dulce", "stock" => "150", "anioProduccion" => "2008", "precioUnitario" => "700");
    $cs[1] = array("variedad" => "amargo", "stock" => "100", "anioProduccion" => "2005", "precioUnitario" => "2700");
    $cs[2] = array("variedad" => "seco", "stock" => "10", "anioProduccion" => "2001", "precioUnitario" => "5700");

    $merlot[0] = array("variedad" => "dulce", "stock" => "250", "anioProduccion" => "2003", "precioUnitario" => "500");
    $merlot[1] = array("variedad" => "amargo", "stock" => "210", "anioProduccion" => "2002", "precioUnitario" => "600");
    $merlot[2] = array("variedad" => "seco", "stock" => "200", "anioProduccion" => "2001", "precioUnitario" => "700");

    $vinoteca["Malbec"] = $malbec;
    $vinoteca["Cabernet Sauvignon"] = $cs;
    $vinoteca["Merlot"] = $merlot;
    return $vinoteca;
}

function showCollection(array $tipo)
{
    for ($i = 0; $i < 3; $i++) {
        showVino($tipo[$i]);
    }
}

function showVino(array $vino)
{
    echo "Variedad: " . $vino["variedad"] . "\n";
    echo "Stock: " . $vino["stock"] . "\n";
    echo "Año de producción: " . $vino["anioProduccion"] . "\n";
    echo "Precio por Unidad: " . $vino["precioUnitario"] . "\n";
    echo "\n";
}

function main()
{
    $vinoteca = getVinoteca();
    //print_r($vinoteca);
    echo "=== === === === Producción de Malbec === === === ===\n\n";
    showCollection($vinoteca["Malbec"]);

    echo "=== === === === Producción de Cabernet Sauvignon === === === ===\n\n";
    showCollection($vinoteca["Cabernet Sauvignon"]);

    echo "=== === === === Producción de Merlot === === === ===\n\n";
    showCollection($vinoteca["Merlot"]);
}

main();
