<?php 
    if(!isset($_SESSION['user'])){
        redirect('login_controller');
    }
    $username = $_SESSION['user']['prenom']
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
    <link rel="stylesheet" href="<?php echo site_url("assets/css/footer.css"); ?>">
    <title>Accueil</title>
</head>
<body>
    <div class="preloader">
        <div class="momentum"></div>
    </div>
    <section class="container" >
        <?php include('sidebar.php') ?>
        <?php if(count($picture)>0){ 
          include('content.php');      
        }else{?>
            <div class="nothing">
                <h1>Aucun objet disponible...</h1>
            </div>
       <?php } ?>   
    </section>
</div>

    <?php include('footer.php') ?>
    <script>
        window.addEventListener("load",function(){
            document.querySelector(".preloader").style.display="none";
            document.querySelector("#section1").style.opacity ="1";
        });
    </script>
    <script src="<?php echo site_url("assets/js/app.js");?>"></script>
</body>
</html>