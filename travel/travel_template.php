<?php
// Default values if not set
if (!isset($page_title)) {
    $page_title = "Travel Destination";
}

if (!isset($intro)) {
    $intro = "Description coming soon.";
}

if (!isset($highlights)) {
    $highlights = array();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $page_title; ?>">
</head>

<body>

<h1><?php echo $page_title; ?></h1>

<p><?php echo $intro; ?></p>

<h2>Highlights</h2>
<ul>
<?php foreach ($highlights as $title => $text) { ?>
    <li><strong><?php echo $title; ?>:</strong> <?php echo $text; ?></li>
<?php } ?>
</ul>

</body>
</html>