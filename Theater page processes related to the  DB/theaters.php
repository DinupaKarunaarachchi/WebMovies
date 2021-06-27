<?php

include "db_connect_ticket.php";

?>



//search bar



                    <h1> Theaters </h1>  
                    <p> Select Your Favourite Theater NearBy</p>
					<form action="search_keyword.php" method="post">
                    <div class="input-group">
					
					
                    <input type="keyword" name="keyword" class ="form-control" placeholder="Search Theater">
					
					
                    <div class="input-group-append">
                        <button type="submit" class="input-group-text btn">Search</button>
                    </div> 
					
					
					
					
					
					
// theaters & gallery



<?php

	  $sql = "SELECT * FROM theatre";
      $result = $conn->query($sql);
	  
	  while($row = $result->fetch_assoc())
	{
	  ?>

<img src="theater images/<?php echo $row['theaterImage']; ?>" >

<div class="feature-details">
                                 <h4><?php echo $row['Theatre_name']; ?></h4>
                                 <p><?php echo $row['Theatre_location']; ?></p>
                                 <div>
                                     
                                    <span>  <i class="fa fa-map-marker"></i><?php echo $row['location']; ?></span>
                                    <span>  <i class="fa fa-sun-o"></i>Day</span> 
                                    <span>  <i class="fa fa-moon-o"></i>Night</span> 
                                     </span>
                                 </div>
                             </div>

                         </div>
						 
						 		
                     </div>
					 <?php } ?>
					 
					 
					 
					 
					 
					 
					 
					 
					  <?php

	  $sql = "SELECT * FROM theatre_gallery";
      $result = $conn->query($sql);
	  
	  while($row = $result->fetch_assoc())
	{
	  ?>
                    <div class="col-md-3">
                        <div class="gallery-box">
                        <img src="theater images/<?php echo $row['images']; ?>">
                        <h4><?php echo $row['theatreName']; ?> </h4>
                    </div>
                    </div>
   <?php } ?>			
                     	  