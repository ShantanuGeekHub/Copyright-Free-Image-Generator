<?php

$keyword = $_POST['keyword'];
$width = $_POST['width'];
$height = $_POST['height'];

$image = "https://source.unsplash.com/".$width."x".$height."/?".$keyword;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Image-Generator</title>
</head>
<body align = "Center">
    <h1>Copyright Free Image Generator</h1>
    <form action="index.php" method="POST">
        <label id="l1">Keyword : </label><input id="i1" type="text" name="keyword" placeholder="nature" required><br>
        <span id="d1"><label id="l2">Width : </label><input id="i2" type="number" name="width" placeholder="600" required></span>
        <span id="d2"><label id="l3">Height : </label><input id="i2" type="number" name="height" placeholder="400" required></span><br>
        <a href="<?php echo $image ?>"><input type="submit" value="Generate" id="s1"></a>
    </form>
    <a href="<?php echo $image ?>"><button id="s2">Image</button></a>
</body>
</html>