<?php
header('Content-Type: application/json');

echo json_encode([
    "status" => 404,
    "service" => "accounts",
    "error" => "UnhandledRouteError",
    "message" => "Unhandled route: Route(get,)"
]);