<?php
/*  Funcion para obtener los datos de la vinoteca. 
    array(s) $malbec $cs $merlot
    return array $vinoteca
*/
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


/* Funcion para mostrar una coleccion de vinos por su variante*/
function showByTipo(array $tipo)
{
    for ($i = 0; $i < count($tipo); $i++) {
        showVariante($tipo[$i]);
    }
}

function showVariante(array $vino)
{
    echo "Variedad: " . $vino["variedad"] . "\n";
    echo "Stock: " . $vino["stock"] . " unidades" . "\n";
    echo "Año de producción: " . $vino["anioProduccion"] . "\n";
    echo "Precio por Unidad: $" . $vino["precioUnitario"] . "\n";
    echo "\n";
}

function main()
{
    $vinoteca = getVinoteca();

    echo "=== === === === Producción de Malbec === === === ===\n\n";
    showByTipo($vinoteca["Malbec"]);

    echo "=== === === === Producción de Cabernet Sauvignon === === === ===\n\n";
    showByTipo($vinoteca["Cabernet Sauvignon"]);

    echo "=== === === === Producción de Merlot === === === ===\n\n";
    showByTipo($vinoteca["Merlot"]);
}

main();
