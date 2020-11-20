<DOCTYPE>
<html>
    <head>
    <title>LOGIN</title>
    <meta charset = "UTF-8">
    <meta name= "viewport" content= "width= device- width, initial-scale = 1.0">
    <link rel = "stylesheet" type ="text/css" href = "style.css">
    </head>
        <body>
        <div class = "Registration_form">
            <h1>Login here</h1>
            <hr>

                <form action = "actions.php" method = "POST">
                <input type = "text" id = "email" name = "email" value = "" required = "required" class = "Register" placeholder = "input your email">
                <br>
                <input type = "password" id = "password" name = "password" value = "" required = "required" class = "Register" placeholder = "input your password">
                <br>

                <input id = "btn1" type= "submit" class= "Register" name ="login" value= "Login">
                <hr>
                <p id= "btn1" class = "Register"><a href = "register.php" style= "text-decoration:none;">Register</a></p>                
                    
                </form>        
        </div>
        </body>














</html>