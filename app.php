<?php
// Function to get the current UTC time with validation of +/-2 minutes
function getCurrentUtcTime() {
    $currentTime = gmdate('Y-m-d\TH:i:s\Z');
    return $currentTime;
}

// Function to get the current day of the week
function getCurrentDayOfWeek() {
    $currentDay = gmdate('l');
    return $currentDay;
}

// Get query parameters
$slackName = $_GET['slack_name'] ?? 'Obidinma Ozioma Paul';
$track = $_GET['track'] ?? 'Backend';

// Construct the JSON response
$response = [
    "slack_name" => $slackName,
    "current_day" => getCurrentDayOfWeek(),
    "utc_time" => getCurrentUtcTime(),
    "track" => $track,
    "github_file_url" => "https://github.com/ozzyofficial/HngProjects/blob/main/app.php", 
    "github_repo_url" => "https://github.com/ozzyofficial/HngProjects", 
    "status_code" => 200,
];

// Set the response headers
header('Content-Type: application/Api');
http_response_code(200);

// Output the JSON response
echo json_encode($response);
?>
