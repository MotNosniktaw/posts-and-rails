<?php
?>
<html>
<head>

</head>
<body>
<h1>Fence Length Calculator</h1>
<h2>Materials -> Length</h2>
<p>Please enter the number of posts and rails you have:</p>
<form action="index.php" method="get">
    <p>Posts: <input type="number" name="posts"> Rails: <input type="number" name="rails"> <input type="submit" name="materials"</p>
</form>
<h2>Length -> Materials</h2>
<p>Please enter the length of the fence you need to build:</p>
<form action="index.php" method="get">
    <p>Length: <input type="number" name="fence"> <input type="submit" name="length"></p>
</form>

<p><?php
    if($_GET['materials']) {
        echo 'You have clicked materials';
    } else { 'You have not clicked materials';
    }
    ?></p>
<p><?php
    if($_GET['length']) {
        echo 'You have clicked length';
    } else { 'You have not clicked length';
    }
    ?></p>

</body>
</html>
