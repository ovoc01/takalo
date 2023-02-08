<?php $arrayIndex = getIndex(count($picture)); ?>
<?php $counter = 0; for($j = 0;$j<count($arrayIndex);$j++){ ?>
    <div class="content" id="section<?php echo $j+1?>">
        <?php for($i=0;$i<$arrayIndex[$j];$i++){?>
            <div class="pic pic<?php echo $i+1?>">
                <img src="./assets/img/<?php echo $picture[$i]['paths'] ?>" alt="#">
                <div class="overlay"></div>
                <div class="about">
                    <span class="price">$180</span>
                    <span class="name"><?php echo $picture[$i]['nom'] ?></span>
                    <span class="user"><?=$picture[$i]['prenom']?></span>   
                </div>
               <a href="myproduct?idObjet=<?php echo $picture[$i]['idObjet']?>&idUser=<?php echo $picture[$i]['idUser']?>"> <button  class="button transition" type="submit">Echanger</button></a>
            </div>
        <?php   } ?>
    </div>       
<?php } ?>