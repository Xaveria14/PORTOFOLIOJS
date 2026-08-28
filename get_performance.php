<?php

include "koneksi.php";

$query = mysqli_query(
    $koneksi,
    "SELECT ahli, nilai FROM performance ORDER BY id ASC"
);

$data = [];

while ($row = mysqli_fetch_assoc($query)) {

    $data[] = [
        "ahli" => $row["ahli"],
        "nilai" => (int) $row["nilai"]
    ];

}

header("Content-Type: application/json");

echo json_encode($data);

?>