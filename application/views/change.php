<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/page.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/sidebar.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/preloader.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/footer.css"); ?>">
    <title>Temp</title>
</head>
<body>
<div class="preloader">
        <div class="momentum"></div>
    </div>
    <section class="container" >
    
    </section>
</div>

    <?php include('footer.php') ?>
    <script>
        window.addEventListener("load",function(){
            document.querySelector(".preloader").style.display="none";
        });
    </script>
</body>
</html>