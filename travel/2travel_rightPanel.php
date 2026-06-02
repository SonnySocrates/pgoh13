<!DOCTYPE html>
<html lang="fr">
<head>

<title>Visiting Malta</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Visiting Malta">

<?php include "travel_style.inc"; ?>

</head>

<body>

<div class="container">

<div class="links">

<b>Useful links:</b> 
<a href="#" onclick="openPanel('preview.php?page=https://www.visitmalta.com'); return false;">
Malta Tourism Authority
</a>
<br>

<div id="sidePanel" class="side-panel">
  <div class="panel-content">
    <span class="close-btn" onclick="closePanel()">×</span>
    <div id="panelBody"></div>
  </div>
</div>

<script>
function openPanel(url) {
  fetch(url)
    .then(response => response.text())
    .then(data => {
      document.getElementById("panelBody").innerHTML = data;
      document.getElementById("sidePanel").classList.add("active");
    });
}

function closePanel() {
  document.getElementById("sidePanel").classList.remove("active");
}
</script>
</body>
</html>