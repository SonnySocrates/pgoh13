<!DOCTYPE html>
<html>
<head>
    <title>Lesson 62: Result</title>
</head>
<body>
<?php
// Enable basic error reporting for PHP 4
error_reporting(E_ALL);

// Check if the form was submitted
if (isset($_POST['number']) && isset($_POST['position'])) {
    $number = intval($_POST['number']); // Convert to integer safely
    $position = trim($_POST['position']); // Remove whitespace

    // Debug output
    echo "Debug - Number: '$number', Position: '$position'<br>\n";

    // Process the input
    if ($position == "youngest") {
        echo "Saya anak bongsu daripada $number adik beradik.<br>\n\n";
    } elseif ($position == "eldest") {
        echo "Saya anak sulong daripada $number adik beradik.<br>\n\n";
    } elseif ($position == "only child") {
        echo "Saya tiada adik beradik. Saya anak tunggal.<br>\n\n";
    } elseif (ereg("^[0-9]+$", $position)) { // Check if $position is numeric using ereg (PHP 4 compatible)
        $position_int = intval($position);
        if ($position_int > 0 && $position_int <= $number) {
            echo "Saya nombor $position_int daripada $number adik beradik.<br>\n\n";
        } else {
            echo "Nombor kedudukan tidak sah. Sila masukkan nombor antara 1 dan $number.<br>\n\n";
        }
    } else {
        echo "Sila masukkan jawapan yang sah (youngest, eldest, only child, atau nombor).<br>\n\n";
    }
} else {
    echo "No form data received. Please submit the form.<br>\n";
}
?>
<a href="lesson62_grok.html">Back to form</a>
</body>
</html>