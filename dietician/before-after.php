
      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        
      <?php 
      include 'connection.php';
    $qP="SELECT * FROM afterbefore";
    $rsP=mysqli_query($cn,$qP);

    while($dataP=mysqli_fetch_assoc($rsP))
    {
      

      ?>

      
      <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="admin/<?php echo $dataP['abphoto']?>" alt="">
            
            </div>
            <div class="body">
              <p class="text-xl mb-0"><?php echo $dataP['pnm']?></p>
              <span class="text-sm text-grey"><?php echo $dataP['reason']?></span>
            </div>
          </div>
        </div>
        
        <?php
    }
      ?>
        
       
        
      
    
      </div>
    </div>
  </div>