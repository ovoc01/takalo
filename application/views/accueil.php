<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        redirect('login_controller');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/page.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/sidebar.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/content.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/preloader.css"); ?>">
    <title>Accueil</title>
</head>
<body>
    <div class="preloader">
        <div class="momentum"></div>
    </div>
    <div class="container">
        <?php include('sidebar.php') ?>
        <div class="content">
            <div class="pic pic1">
                <img src="./assets/img/chair-modern.jpg" alt="#">
                <div class="overlay"></div>
                <div class="about">
                    <span class="price">$180</span>
                    <span class="name">Modern chair</span>
                    <span class="user">Cristophe</span>   
                </div>
                <button class="button transition" type="submit">View more</button>
            </div>
            <div class="pic pic2">
                <img src="./assets/img/minimalistic-pot.jpg" alt="">
                <div class="overlay"></div>
                <div class="about">
                    <span class="price">$180</span>
                    <span class="name">Minimalistic pot</span>
                </div>
                <button class="button transition" type="submit">View more</button>
            </div>
            <div class="pic pic3">
                <img src="./assets/img/chair.jpg" alt="">
                <div class="overlay"></div>
                <div class="about">
                    <span class="price">$180</span>
                    <span class="name">Chair</span>
                </div>
                <button class="button transition" type="submit">View more</button>
            </div>
            <div class="pic pic4">
                <img src="./assets/img/plant-pot.jpg" alt="">
                <div class="overlay"></div>
                <div class="about">
                    <span class="price">$180</span>
                    <span class="name">Plant pot</span>
                </div>
                <button class="button transition" type="submit">View more</button>
            </div>
            <div class="pic pic5">
                <img src="./assets/img/chair2.jpg" alt="">
                <div class="overlay"></div>
                <div class="about">
                    <span class="price">$180</span>
                    <span class="name">Chair</span>
                </div>
                <button class="button transition" type="submit">View more</button>
            </div>
            <div class="pic pic6">
                <img src="./assets/img/home-deco.jpg" alt="">
                <div class="overlay"></div>
                <div class="about">
                    <span class="price">$180</span>
                    <span class="name">Home deco</span>
                </div>
                <button class="button transition" type="submit">View more</button>
            </div>
            <div class="pic pic7">
                <img src="./assets/img/metalic-chair.jpg" alt="">
                <div class="overlay"></div>
                <div class="about">
                    <span class="price">$180</span>
                    <span class="name">Metalic chair</span>
                </div>
                <button class="button transition" type="submit">View more</button>
            </div>
            <div class="pic pic8">
                <img src="./assets/img/plant-pot.jpg" alt="">
                <div class="overlay"></div>
                <div class="about">
                    <span class="price">$180</span>
                    <span class="name">Plant pot</span>
                </div>
                <button class="button transition" type="submit">View more</button>
            </div>
            <div class="pic pic9">
                <img src="./assets/img/chair-modern.jpg" alt="#">
                <div class="overlay"></div>
                <div class="about">
                    <span class="price">$180</span>
                    <span class="name">Modern chair</span>
                </div>
                <button class="button transition" type="submit">View more</button>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener("load",function(){
            document.querySelector(".preloader").style.display="none";
        });
    </script>
</body>
</html>