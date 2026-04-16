<?php
header('Content-Type: application/json');

echo json_encode([
    "status" => 404,
    "service" => "gateway",
    "error" => "RouteNotFoundError",
    "message" => "Route not found"
]);