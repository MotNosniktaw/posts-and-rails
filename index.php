<?php

require_once 'Fence.php';

$newFence = new Fence();

?>
<html>
<head>

</head>
<body>
<h1>Fence Length Calculator</h1>
<h2>Materials -> Length</h2>
<p>Please enter the number of posts and rails you have:</p>
<form action="index.php" method="get">
    <p>Posts: <input type="number" value="<?php echo $_GET['posts']?>" name="posts"> Rails: <input type="number" value="<?php echo $_GET['rails']?>" name="rails"> <input type="submit" name="materials"</p>
</form>
<h2>Length -> Materials</h2>
<p>Please enter the length of the fence you need to build:</p>
<form action="index.php" method="get">
    <p>Length: <input type="number" step="0.01" value="<?php echo $_GET['fence']?>" name="fence"> <input type="submit" name="length"></p>
</form>
<br>
<p><?php
    if($_GET['materials']) {
        echo $newFence->buildFence($_GET['posts'], $_GET['rails']);
    }
    ?></p>
<p><?php
    if($_GET['length']) {
        echo $newFence->calcMaterials($_GET['fence']);
    }
    ?></p>

</body>
</html>
