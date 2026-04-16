<?php
header('Content-Type: application/json');

echo json_encode([
    "status" => 404,
    "service" => "content",
    "error" => "UnhandledRouteError",
    "message" => "Unhandled route: Route(get,)"
]);