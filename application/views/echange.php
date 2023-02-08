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
    <link rel="stylesheet" href="<?php echo site_url("assets/css/echange.css"); ?>">
    <title>Echange</title>
</head>
<body>
<div class="preloader">
        <div class="momentum"></div>
    </div>
    <section class="container" >
        <?php include('sidebar.php') ?>
        <?php if(count($echange)<=0){ ?>
            <div class="nothing">
                <h1>Aucun echange demander...</h1>
            </div>
      <?php } else{ ?>
        <div class="echangeContainer">
            <h1>Listes de demandes d'echange</h1>
            <?php for($i=0;$i<count($echange);$i++){ ?>
                <div class="contentEchange">
                    <div class="card">
                        <img src="./assets/img/<?=$echange[$i]['path1']?>" alt="">
                        <span class="name"><?=$echange[$i]['nom1']?></span>
                    </div>
                    <div class="card">
                        <img src="./assets/img/<?=$echange[$i]['path2']?>" alt="">
                        <span class="name"><?=$echange[$i]['nom2']?></span>
                    </div>
                    <div class="buttonContainer">
                      <a href="echange/echange?idEchange=<?=$echange[$i]['idEchange']?>&idU1=<?=$echange[$i]['idUser1']?>&idU2=<?=$echange[$i]['idUser2']?>&idP1=<?=$echange[$i]['idProduit1']?>&idP2=<?=$echange[$i]['idProduit2']?>"><button type="submit" class="state">Accepter</button></a>
                      <a href="echange/delete?idEchange=<?=$echange[$i]['idEchange']?>&idP1=<?=$echange[$i]['idUser1']?>&idP2=<?=$echange[$i]['idUser2']?>&idP1=<?=$echange[$i]['idProduit1']?>&idP2=<?=$echange[$i]['idProduit2']?>"><button type="submit" class="state">Refuser</button></a>
                    </div>
                </div>
           <?php } ?>
        </div>
     <?php } ?>
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