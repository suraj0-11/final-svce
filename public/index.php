<?php
// Include configuration
require_once '../includes/config.php';

function is_bot()
{
    $bot_agents = array('bot', 'crawler', 'spider', 'wget', 'curl', 'slurp', 'yandex', 'baidu');
    $user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    foreach ($bot_agents as $agent) {
        if (strpos($user_agent, $agent) !== false) {
            return true;
        }
    }
    return false;
}

// Check if it's a bot
if (is_bot()) {
    header("HTTP/1.1 403 Forbidden");
    echo "Access denied: Bot detected";
    exit;
}

// Rate limiting
session_start();
$time = time();
if (isset($_SESSION['last_request_time'])) {
    $last = $_SESSION['last_request_time'];
    if (($time - $last) < 1) { // Less than 1 second between requests
        header("HTTP/1.1 429 Too Many Requests");
        $message = '
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                padding: 50px;
                background-color: #f0f0f0;
                color: #333333;
            }
            .message {
                background-color: #ffffff;
                border-left: 6px solid #0088cc;
                margin-bottom: 15px;
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                display: inline-block;
            }
            .link {
                font-weight: bold;
                color: #0088cc;
                text-decoration: none;
            }
            .link:hover {
                text-decoration: underline;
            }
        </style>
        <div class="message">
            Too many requests. Please slow down. <br>
            Click <a class="link" href="index.php">here</a> to go back.
        </div>';
        echo $message;
        exit;
    }
}
$_SESSION['last_request_time'] = $time;

// Determine which page to load
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Define a whitelist of allowed pages
$allowed_pages = ['home', 'civil', 'cse-ai', 'cse-cy', 'cse-ds', 'cse', 'ece', 'ise', 'mba', 'mech', 'mtech-st', 'cultural'];

if (!in_array($page, $allowed_pages)) {
    $page = 'home'; // Default to home if not in whitelist
}

$page_file = $page . '.php';

if (!file_exists($page_file)) {
    header("HTTP/1.1 404 Not Found");
    $page_file = '404.php';
}

// Include the requested page
include $page_file;
?>