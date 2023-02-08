<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/page.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/sidebar.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/preloader.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/content.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/footer.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/product.css"); ?>">
    <title>Echange</title>
</head>
<body>
<div class="preloader">
        <div class="momentum"></div>
    </div>
    <section class="container" >
        <?php include('sidebar.php') ?>
        <?php if(count($myobjet)<=0){ ?>
            <div class="nothing">
                <h1>Vous n'avez pas encore ajouté des objets...</h1>
            </div>
      <?php } else{ ?>
         <div class="productContainer">
         <h1><?php if($isChange){?>
            Veuillez choisir le produit a echanger
        <?php }else{ ?>
                Mes produits 
            <?php } ?>
        </h1>
         <?php  for($i=0;$i<count($myobjet);$i++) { ?>
            <div class="info">
                <img src="./assets/img/<?=$myobjet[$i]['paths']?>" alt="">
                <div class="infObje">
                    <span class="nameObj"><h2><?=$myobjet[$i]['nom']?></h2></span>
                    <?php if($isChange){?>
                      <a href="echange/changeObj?idObjet1=<?=$idProduct?>&idObjet2=<?=$myobjet[$i]['idObjet']?>&idReceiver=<?=$idReceiver ?>"> <button type="submit" class="choice">Choisir</button></a>
                    <?php } ?>
                </div>
            </div>
        <?php }?>
        </div>   
    <?php  }?>
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