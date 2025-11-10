<?php
header("Content-Type: application/json; charset=utf-8");
$data = [
  "zprava" => "Toto je odpověď ze serveru PHP. Go Arsenal!"
];
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>
