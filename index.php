<?php

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$url = "https://rickandmortyapi.com/api/character?page=" . $page;

$arrContextOptions = array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
    ),
);

$json = file_get_contents($url, false, stream_context_create($arrContextOptions));

if ($json === false) {
    die("Error: No se pudo conectar con la API.");
}

$data = json_decode($json, true);

if (isset($data['results'])) {
    $personajes = $data['results'];
    $totalPages = $data['info']['pages'];
} else {
    die("Error: La API no devolvió resultados.");
}

require "templates/header.php";
require "templates/personajes.php";
require "templates/paginacion.php";
require "templates/footer.php";