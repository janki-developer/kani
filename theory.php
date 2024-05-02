<!--different between GET and POST-->
<!--1.HTTP GET request is comparativey less secure becausec it data expose in UR barL-->
<!--2.HTTP GET request made through GET method are stored in browser history-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET method</title>
</head>
<body>
       <form action="getmethod.php" method="GET">
        Name:
        <input type="text" name="name" /><br>
        Email:
        <input type="email" name="email" /><br>
        <input type="submit" name="submit" />
       </form>  
</body>
</html>
