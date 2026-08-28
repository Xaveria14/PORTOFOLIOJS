<?php

include "koneksi.php";

$queryPerformance = mysqli_query(
    $koneksi,
    "SELECT * FROM performance ORDER BY id ASC"
);

$data = [];

while ($row = mysqli_fetch_assoc($queryPerformance)) {

    $data[] = [
        "ahli" => $row["ahli"],
        "nilai" => (int) $row["nilai"]
    ];

}

header("Content-Type: application/json");

echo json_encode($data);

?>