<html>
<head>
    <link rel="stylesheet" href="<?php echo site_url("assets/css/login.css"); ?>">
    <title>Login</title>
</head>
<body>
<html>
<body>
<div class="login-root">
        <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
            <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                <h1><a href="http://blog.stackfindover.com/" rel="dofollow">Login</a></h1>
            </div>
            <div class="formbg-outer">
                <div class="formbg">
                    <div class="formbg-inner padding-horizontal--48">
                        <span class="padding-bottom--15">Veuillez insérer vos information</span>
                        <form action="login_controller/check" method="post" id="stripe-login">
                            <div class="field padding-bottom--24">
                                <div class="grid--50-50">
                                    <label >Email</label>
                                </div>
                                <input type="email" name="email" value="abc@gmail.com" required>
                            </div>
                            <div class="field padding-bottom--24">
                                <div class="grid--50-50">
                                    <label for="quantity">Mot de passe</label>
                                </div>
                                <input type="password" name="mdp" value="1234" required>
                            </div>
                            <div class=" padding-bottom--24">
                                <div class="grid--50-50">
                                    <label for="quantity">Admin</label>
                                </div>
                                <input type="checkbox" name="admin"  >
                            </div>
                            <div class="field padding-bottom--24">
                                <input type="submit" name="submit" value="Continue" class="sub">
                            </div>
                            <p class="error"><a href="inscription"> Inscription</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
</body>
</html>
