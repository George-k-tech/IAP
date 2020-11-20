<DOCTYPE HTML>
<html>
    <head>
    <title>register</title>
    <meta charset = "UTF-8">
    <meta name = "viewport" content ="width = device-width, initial-scale = 1.0">
    <link rel = "stylesheet" type = "text/css" href = "style.css"> 
    </head>

    <body>
    <div class = "registration_form">
        <h1>Register</h1>
        <hr>
        <form action = "actions.php" method= "POST" enctype = "multipart/form-data">
            <input type = "text" id = "fname" name = "name" value ="" required= "required" placeholder = "enter your full name" class = Register>
            <br>
            <input type = "text" id = "email" name = "email" value ="" required= "required" placeholder = "enter your email" class = Register>
            <br>
            <input type = "text" id = "city" name = "city" value ="" required= "required" placeholder = "enter your residence" class = Register>
            <br>
            <input type = "password" id = "password" name = "password" value ="" required= "required" placeholder = "enter your password" class = Register>
            <br>
            <input type = "password" id = "confirm_password" name = "confirm_password" value ="" required= "required" placeholder = "confirm your password" class = Register>
            <br>

            <br>

            <label for = "image">Upload profile pic</label><br>
            <input type= "file"  name = "image" id= "image">
            <br><br>

            <input id = "btn1" type = "submit" class = "Register" name = "register" value = "Register">
            <hr>
            <p id = "btn1 " class = Register><a href = "login.php" style = "text-decoration: none;"></a>LOG IN</p>       
        
        </form>
    </div>    
    </body>

</html>