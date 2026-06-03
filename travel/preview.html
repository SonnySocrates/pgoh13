<?php

$page = $_GET['page'] ?? '';

// basic safety: allow only letters
$page = preg_replace('/[^a-z0-9_-]/i', '', $page);

$file = $page . ".php";

if (file_exists($file)) {

    $content = file_get_contents($file);

    // Extract first paragraph
    preg_match('/<p>(.*?)<\/p>/s', $content, $matches);

    echo "<h2>" . ucfirst($page) . "</h2>";

    if (!empty($matches[0])) {
        echo $matches[0];
    }

    echo '<p><a href="'.$file.'" style="color:#4a90e2;font-weight:bold;">
            Read full article →
          </a></p>';
}
?>