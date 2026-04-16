<?php
header('Content-Type: application/json');

echo json_encode([
    "players" => [
        [
            "playerId" => 1234567890123402,
            "online" => false,
            "lastSeen" => -1
        ]
    ]
]);