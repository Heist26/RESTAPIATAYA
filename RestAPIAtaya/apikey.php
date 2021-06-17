<?php

function getKey() {
    return ["Ataya", "Heist", "26"];
}

function isValid($input) {
    $apikey = $input["api_key"];
    if (in_array($apikey, getKey())) {
        return true;
    } else {
        return false;
    }
}

function jsonOut($status, $message, $data) {
    $respon = ["status" => $status, "message" => $message, "data" => $data];

    header("Context-type: application/json");
    echo json_encode($respon);
}

function getFilm() {
    $film = [
        ["title" => "LOKI", "konten" => "film ini film ke-9"],
        ["title" => "WANDA VISION", "konten" => "film ini film ke-1"],
        ["title" => "THOR", "konten" => "film ini film ke-2"]
    ];
}

if (isValid($_GET)) {
    jsonOut("berhasil", "apikey valid", getFilm());
} else {
    jsonOut("gagal", "APIKEY GA VALID!!", null);
}

?>