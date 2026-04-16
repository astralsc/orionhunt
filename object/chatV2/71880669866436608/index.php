<?php
header('Content-Type: application/json');

echo json_encode([
    "status" => 401,
    "service" => "gateway",
    "error" => "InvalidTokenError",
    "message" => "Invalid Token"
]);