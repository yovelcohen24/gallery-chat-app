<?php // This script provides the picture data to the frontend
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$data = [
    [
        "id" => 1,
        "name" => "Red Sunset",
        "artist" => "James Marcol",
        "description" => "Lorem ipsum.",
        "src" => "https://via.placeholder.com/600x400",
        "resolution" => "600x400",
        "size" => "20KB"
    ],
    [
        "id" => 2,
        "name" => "Blue Ocean",
        "artist" => "Sophia Loren",
        "description" => "Consectetur adipiscing elit.",
        "src" => "https://via.placeholder.com/600x400",
        "resolution" => "600x400",
        "size" => "18KB"
    ],
    [
        "id" => 3,
        "name" => "Green Forest",
        "artist" => "Michael Green",
        "description" => "Nunc maximus, nulla ut commodo sagittis.",
        "src" => "https://via.placeholder.com/600x400",
        "resolution" => "600x400",
        "size" => "22KB"
    ],
    [
        "id" => 4,
        "name" => "Golden Desert",
        "artist" => "Sarah Desert",
        "description" => "Vivamus a ligula quis est posuere interdum.",
        "src" => "https://via.placeholder.com/600x400",
        "resolution" => "600x400",
        "size" => "25KB"
    ],
];

echo json_encode($data);
?>
