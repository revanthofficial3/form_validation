<?php
session_start();
if(!isset($_SESSION['csrf_token'])){
    $_SESSION['csrf_token']=bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="common">
        <div>
            <img src="./images/kids1.jpg" class="img">
        </div>
        <div class="common1">
            <h1 class="head1">REGISTRATION FORM</h1>
            <div class="wave_common">
            <img src="./images/wave1.png" class="wave"></div>


            <form action="insert.php" method="POST">

            <div class="common2">
                <div class="input-cmn">
                    <label class="name" for="name">Username:</label>
                    <input type="text" name="name" id="name" required autocomplete="off">
                </div>
                
                <div class="input-cmn">
                    <label for="password" class="name">Password:</label><input type="password" name="password" id="password" required autocomplete="off">
                </div>

                <div class="input-cmn">
                    <label for="email" class="name">E-mail:</label><input type="text" id="email" name="email" required autocomplete="off">
                </div>
                
                <div class="input-cmn">
                    <label class="name" for="address">Address:</label>
                    <input type="text" name="address" id="address" required autocomplete="off">
                </div>
                
                <div class="input-cmn input-cmn1">
                    <label for="country" class="name">District :</label>
                    <select name="district" id="country" class="drop-cmn">
                        <option value="">Select District</option>
                        <option value="namakkal">Namakkal</option>
                        <option value="erode">Erode</option>
                        <option value="salem">Salem</option>
                        <option value="chennai">Chennai</option>
                        <option value="coimbatore">Coimbatore</option>
                        <option value="tirupur">Tirupur</option>
                        <option value="karur">Karur</option>
                        <option value="thanjavur">Thanjavur</option>
                        <option value="madurai">Madurai</option>
                        <option value="tirunelveli">Tirunelveli</option>
                    </select>
                </div>
                
                <div class="input-cmn input-cmn1">
                    <label class="name" for="Gender">Gender : </label>
                    <input type="radio" name="gender" id="male" value="male"> <span class="radio">Male</span> 
                    <input type="radio" name="gender" id="female" value="female"> <span class="radio">Female</span> 
                    <input type="radio" name="gender" id="other" value="other"> <span class="radio">Other</span> 
                </div>


                <div class="input-cmn input-cmn1">
                    <label class="name" for="languages">Language : </label>
                    <input type="checkbox" name="languages[]" id="languages" value="tamil"> <span class="radio">Tamil</span> 
                    <input type="checkbox" name="languages[]" id="languages" value="english"> <span class="radio">English</span> 
                    
                </div>

                <div class="input-cmn">
                    <label class="name" for="about">About:</label><br>
                    <textarea name="about" id="about" class="about" rows="3"></textarea>
                </div>
                
                
                <button class="button" onclick="view.php">CREATE MY ACCOUNT</button>

            </div>
            </form>
        </div>
    </div>

    
</body>
</html>