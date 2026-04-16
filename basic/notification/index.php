<?php
header('Content-Type: application/json');

echo json_encode([
    "status" => 403,
    "service" => "notification",
    "error" => "RequiresUserError",
    "message" => "Requires authorized user."
]);