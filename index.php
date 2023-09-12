<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asd.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <form action="login.php" class ="container" method="POST">
    <div class="box">
        <div class="row">
            <div class="col-sm-5 col-xs-1 box1">
                <div class="inline-text">
                    <h1>Login</h1>
                    <p>Get Access to your orders,
                        wishlist and
                        Recommendations
                     </p>
                </div>
            </div>
            <div class="col-sm-5 col-xs-1 box-2">
                <div class="user-id user-data">
                    <input type="email" name="email" id="username" required="" placeholder="Email" >
                    <!-- <label><label>Email</label></label> -->
                </div>
               
                    <div class="userid user-data">
                        <input type="password" name="password" id="password" required="" placeholder="password">
                        <!-- <label>password</label> -->
                
                </div>
                <div class="user-id">
                    <p> by continue,  you agree to sm terms and condition </p>
                </div>
                <span><a href="#">forget?</a></span>
                <div class="user-id button">
                    <input type="submit" name="" id="" value="login"  onclick="validate()" >

                </div>
                <div class=" user-id">
                    <center><p>or</p></center>
                </div>
                <div class="user-id">
                    <center><p class="footer"> <a href="signup_page.php"> New to sm ? create Account </a></p></center>
                </div>

            </div>
                   
        </div>
    </div>
</form>
</body>
</html>