<?php
header('Content-Type: application/json');

echo json_encode([
    "status" => 404,
    "service" => "session",
    "error" => "UnhandledRouteError",
    "message" => "Unhandled route: Route(get,heartbeat)"
]);
?>