<!DOCTYPE html>
<html lang="en">
    <head>
	
        <meta charset="UTF-8">
        <title>Seafood Shop</title>
        <link href="css/styleindex.css" rel="stylesheet" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/4e93d54e94.js" crossorigin="anonymous"></script>
        <script src="js/indexjs.js"></script>
    </head>
<body>
            
    <?php include("top.php");?>
    <div class="flexindex">
        <div class="rotate">
            <i id="img1" class="fas fa-fish fa-10x"></i>
            <script>rotateAnimation("img1",30);</script>
        </div>
    <div class="flexindex">
            <div class="button-3">
                <div class="eff-3"></div>
                <a href="products.php" onclick='return confirm("Are your sure you want to continue?");'> Welcome </a>
            </div>

        <?php include("bot.php");?>
    </div>
    
</body>
</html>