<?php
// Function to get and update the visitor count
function updateVisitorCount() {
    $count = 1; // Default count

    // Check if the cookie is set
    if (isset($_COOKIE['visitor_count'])) {
        // If the cookie is set, retrieve and increment the count
        $count = $_COOKIE['visitor_count'] + 1;
    }

    // Set the updated count in a cookie
    setcookie('visitor_count', $count, time() + 3600 * 24); // Expire after 24 hours

    return $count;
}

// Get and update the visitor count
$visitorCount = updateVisitorCount();

// HTML content to display the visitor count
$htmlContent = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Visitor Count</title>
</head>
<body>
    <h1>Welcome to My Website</h1>
    <p>This page has been visited by $visitorCount " . ($visitorCount === 1 ? 'person' : 'people') . ".</p>
</body>
</html>
";

// Output the HTML content
echo $htmlContent;
?>
