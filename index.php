<?php include 'database.php';?>
<?php
// create select query
$query = "SELECT * FROM yaks ORDER by id DESC";
$yaks = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAKBAK 2023</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div id="container">
        <header>
            <h1>YAK BAK</h1>
        </header>
        <div id="yaks">
            <ul>
                <?php while($row = mysqli_fetch_assoc($yaks)) : ?>
                    <li class="yak"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?></strong> : <?php echo $row['message'] ?></li>
                <?php endwhile ?>  
            </ul>
        </div>
        <div id="input">
            <?php if(isset($_GET['error'])) : ?>
                <div class="error"><?php echo $_GET['error']; ?></div>
            <?php endif; ?>
            <form method="post" action="process.php">
                <input type="text" name="user" placeholder="enter your name">
                <input type="text" name="message" placeholder="type your message">
                <br>
                <input class="button" type="submit" name="submit" value="yakbak">
            </form>
        </div>
    </div>
</body>
</html>