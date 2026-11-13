<?php
/**
 * Proyecto PHP: La Batalla de Aura
 * Archivo base para el alumnado.
 */

// Mapa original del Pabellón Skibidi
// "0" -> Terreno neutro (Pasillos comunes)
// "~" -> Zonas de Chill (Patios)
// "G" -> Zona habitada (Grupos de Gymbros / Sigmas)

$mapaOriginal = [
    ['~', '~', '~', '~', '~', '0', '0', 'G', '0', 'G', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'G', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', '0', 'G', '0', '0', 'G', 'G', 'G', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '0', '0', '0', 'G', '0', 'G', 'G', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', 'G', '0', '0', '0', 'G', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '0', '0', 'G', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', '0', 'G', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', 'G', 'G', 'G', '0', '0', 'G', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '0', 'G', 'G', '0', '0', 'G', '0', '0', '0', 'G', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'G', '0', '0', '0', '0', '0', 'G', '0', 'G', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', 'G', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', 'G', '0', '0', '0', '0', '0', '0', '0', '0', 'G', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'G', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', 'G', '0', '0', '0', '0', 'G', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
];

// Coordenadas de los impactos de cringe [fila, columna]
$impactos = [
    [2, 9], [3, 10], [5, 4], [11, 15], [14, 4], [17, 4], [1, 5], [3, 8], [6, 12], [8, 14], 
    [10, 3], [0, 2], [1, 20], [8, 2], [21, 5], [22, 10], [0, 0], [0, 1], [0, 3], [0, 4], 
    [0, 14], [0, 15], [0, 16], [0, 17], [0, 18], [0, 19], [0, 20], [0, 21], [0, 22], [0, 23], 
    [1, 0], [1, 1], [1, 2], [1, 13], [1, 14], [1, 15], [1, 16], [1, 17], [1, 18], [1, 19], 
    [1, 21], [1, 22], [1, 23], [2, 0], [2, 1], [2, 2], [2, 16], [2, 17], [2, 18], [2, 19], 
    [2, 20], [2, 21]
];


// 1. Mostrar el mapa original
function mostrarMapa($mapa) {
    foreach ($mapa as $fila) {
        foreach ($fila as $celda) {
            echo $celda . " ";
        }
        echo "<br>";
    }
}

// 2. Zonas habitadas afectadas
function marcarZonasAfectadas($mapa, $impactos) {
    foreach ($impactos as $impacto) {
        $fila = $impacto[0];
        $columna = $impacto[1];

        if (isset($mapa[$fila][$columna]) && $mapa[$fila][$columna] == "G") {
            $mapa[$fila][$columna] = "S";
        }
    }

    return $mapa;
}

// 3. Población afectada y consumo de bebida energética
function contarSigmasAfectados($mapa) {
    $totalZonasAfectadas = 0;

    foreach ($mapa as $fila) {
        foreach ($fila as $celda) {
            if ($celda == "S") {
                $totalZonasAfectadas++;
            }
        }
    }

    return $totalZonasAfectadas * 3000;
}

// 4. Mapa de daños totales
function crearMapaDanos($mapa, $impactos) {
    foreach ($impactos as $impacto) {
        $fila = $impacto[0];
        $columna = $impacto[1];

        if (isset($mapa[$fila][$columna])) {
            if ($mapa[$fila][$columna] == "G") {
                $mapa[$fila][$columna] = "S";
            } elseif ($mapa[$fila][$columna] == "0") {
                $mapa[$fila][$columna] = "X";
            } elseif ($mapa[$fila][$columna] == "~") {
                $mapa[$fila][$columna] = "W";
            }
        }
    }

    return $mapa;
}

// 5. Estimación de costes
function calcularCostes($mapa) {
    $costeTotal = 0;

    foreach ($mapa as $fila) {
        foreach ($fila as $celda) {
            if ($celda == "X") {
                $costeTotal = $costeTotal + 75000;
            } elseif ($celda == "S") {
                $costeTotal = $costeTotal + 250000;
            }
        }
    }

    return $costeTotal;
}

// 6. Contar todas las zonas de Chill del mapa
function contarZonasChill($mapa) {
    $totalChill = 0;

    foreach ($mapa as $fila) {
        foreach ($fila as $celda) {
            if ($celda == "~") {
                $totalChill++;
            }
        }
    }

    return $totalChill;
}

// 6. Contar las zonas de Chill afectadas
function contarChillAfectado($mapaDaños) {
    $totalChillAfectado = 0;

    foreach ($mapaDaños as $fila) {
        foreach ($fila as $celda) {
            if ($celda == "W") {
                $totalChillAfectado++;
            }
        }
    }

    return $totalChillAfectado;
}

// 7. Recaudación solidaria
function calcularRecaudacion($totalChill, $chillAfectado) {
    $horasTotales = 10000;
    $horasAfectadas = ($horasTotales * $chillAfectado) / $totalChill;

    // Pasamos las horas a minutos y multiplicamos por 20 euros.
    $recaudacion = $horasAfectadas * 60 * 20;

    return $recaudacion;
}

echo "<h2>1. Mapa original</h2>";
mostrarMapa($mapaOriginal);

$mapaAfectado = marcarZonasAfectadas($mapaOriginal, $impactos);

echo "<h2>2. Mapa de zonas habitadas afectadas</h2>";
mostrarMapa($mapaAfectado);

$sigmasAfectados = contarSigmasAfectados($mapaAfectado);
$litrosBebida = ($sigmasAfectados * 10) / 1000;

echo "<h2>3. Población afectada y bebida</h2>";
echo "Sigmas afectados: " . $sigmasAfectados . "<br>";
echo "Litros de bebida necesarios: " . $litrosBebida . " litros<br>";

$mapaDaños = crearMapaDanos($mapaOriginal, $impactos);

echo "<h2>4. Mapa de daños totales</h2>";
mostrarMapa($mapaDaños);

$costes = calcularCostes($mapaDaños);

echo "<h2>5. Coste total de los daños</h2>";
echo "Coste: " . number_format($costes, 0, ",", ".") . " euros<br>";

$totalChill = contarZonasChill($mapaOriginal);
$chillAfectado = contarChillAfectado($mapaDaños);

echo "<h2>6. Recursos aprovechables</h2>";
echo "Total de zonas de Chill: " . $totalChill . "<br>";
echo "Zonas de Chill afectadas: " . $chillAfectado . "<br>";

$recaudacion = calcularRecaudacion($totalChill, $chillAfectado);
$diferencia = $costes - $recaudacion;

echo "<h2>7. Recaudación solidaria</h2>";
echo "Recaudación esperada: " . number_format($recaudacion, 2, ",", ".") . " euros<br>";
echo "Diferencia entre costes y recaudación: " . number_format($diferencia, 2, ",", ".") . " euros<br>";
