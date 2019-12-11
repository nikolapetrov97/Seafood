
<!DOCTYPE html>
<html lang="en">
    <head>
	
        <meta charset="UTF-8">
        <title>Seafood Shop</title>
        <link href="css/styleindex.css" rel="stylesheet" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/4e93d54e94.js" crossorigin="anonymous"></script>
        
    </head>
<body>
            
    <?php include("top.php");?>
    
    <div class="flex-container">
                <div class="contacts">
                    <a>Contact:</a><br>
                    <a>089621323</a><br>
                    <a>E-mail:</a><br>
                    <a>seafoodshop@gmail.com</a><br>
                    <a>Adress:</a><br>
                    <a>St.Iskar 26</a><br>
                </div>

                <div class="contactsicons">
                    <i class="fab fa-facebook-square fa-4x"></i><br>
                    <i class="fab fa-instagram fa-4x"></i><br>
                    <i class="fas fa-envelope-square fa-4x"></i><br>
                </div>

                <div class="contactsicons1">
                    <p style="font-size: 30px;">Make a request</p>
                    <form action="contacts.php" method="post" enctype="multipart/form-data">
                        <input placeholder="Description" type="text" autofocus size="30"><br /><br />
                        <textarea placeholder="Question" name="content" rows="14" cols"20"></textarea><br />
                        <input name="post" type="submit" value="Submit">
                    </form>
                </div>
    </div>
        
    <?php include("bot.php");?>


</body>
</html>