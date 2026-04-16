<?php
header('Content-Type: application/json');

echo json_encode([
    "status" => 404,
    "service" => "auth",
    "error" => "UnhandledRouteError",
    "message" => "Unhandled route: Route(get,)"
]);