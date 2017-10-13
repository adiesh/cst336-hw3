


<html>
    <head>
        <title>Appointment Information</title>
         <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <style>
            @import url("./css/styles.css"); 
        </style>
    </head>

    <body>
         <header>
    			<h1>About Your Appointment: </h1>	
    	</header>
    	<br>
        <h2>Below is the following info provided: </h2>
        <br>
    
    
        <strong><i>ID: </i></strong> <?php 
        if (empty($_GET["ID"]) || !is_numeric($_GET["ID"])) {
            echo "You did not enter an ID or in numeric form"; 
        }
        else {
            echo $_GET["ID"];
        }
        
        ?>
        <br>
        <br>
        
        
        <strong><i>First name: </i></strong> <?php
        if (empty($_GET["firstname"])) {
            echo "You did not enter a first name"; 
        } else {
           echo $_GET["firstname"];  
        }
        ?>
        <br>
        <br>
        
        <strong><i>Middle name: </i></strong> <?php
           echo $_GET["middlename"];  
    
        
        ?>
        <br>
        <br>
        
        <strong><i>Last name: </i></strong> <?php
        if (empty($_GET["surname"])) {
            echo "You did not enter a surname"; 
        } else {
           echo $_GET["surname"];  
        }
        
        ?>
        <br>
        <br>
        
        <strong><i>Street address: </i></strong> <?php
        if (empty($_GET["streetAddress"])) {
            echo "You did not enter a street address";
        } else {
           echo $_GET["streetAddress"];  
        }
        ?>    
        <br>
        <br>
        
        <strong><i>City address: </i></strong> <?php
        if (empty($_GET["cityAddress"])) {
            echo "You did not enter a city address";
        } else {
           echo $_GET["cityAddress"];  
        }
        ?>    
        <br>
        <br>
        
        <strong><i>State address: </i></strong> <?php
        if (empty($_GET["stateAddress"])) {
            echo "You did not enter a state address";
        } else {
           echo $_GET["stateAddress"];  
        }
        ?>    
        <br>
        <br>
        <strong><i>Zip code: </i></strong> <?php 
        if (empty($_GET["zipcode"]) || !is_numeric($_GET["zipcode"])) {
            echo "You did not enter a zipcode or in numeric form"; 
        }
        else {
            echo $_GET["zipcode"];
        }
        ?>
        <br>
        <br>
        <strong><i>Phone number: </i></strong> <?php 
        if (empty($_GET["phoneNumber"]) || !is_numeric($_GET["phoneNumber"])) {
            echo "You did not enter a telephone number or in numeric form"; 
        }
        else {
            echo $_GET["phoneNumber"];
        }
        ?>
        <br>
        <br>
        <strong><i>Email address: </i></strong> <?php
        if (empty($_GET["email"])) {
            echo "You did not enter an email address";
        } else {
           echo $_GET["email"];  
        }
        ?>
        <br>
        <br>
        <strong><i>Method of contact: </i></strong> <?php 
          echo $_GET["layout"];   
        ?>
        <br>
        <br>
        <strong><i>Reason for visit: </i></strong> <?php 
        if (empty($_GET["reasonForVisit"])) {
            echo "You did not choose a reason for your visit.";
        } else {
          echo $_GET["reasonForVisit"];  
        }
        ?>
        <br>
        <br>
        <strong><i>Day: </i></strong> <?php 
        if (empty($_GET["dayAvailability"])) {
            echo "You did not choose a week day (Mon-Fri)";
        } else { 
            echo $_GET["dayAvailability"]; 
        }
        ?>
        <br>
        <br>
        <strong><i>Time: </i></strong> <?php 
        if (empty($_GET["timeAvailability"])) {
            echo "You did not choose a time (8:00 AM-5:00 PM)";
        } else {
           echo $_GET["timeAvailability"];  
        }
        ?>
        <br>
        <br>
        <strong><i>Additional info: </i></strong> <?php echo $_GET["comment"]; ?>
        <br>
        <br>
        <div id = "footer">
			<hr>
			CST 336. 2017&copy; Diesh <br />
			
			<figure id = "Health_Logo"> 
                <img src = "./imgs/download.png" alt = "Health Logo"/> 
            </figure>
		</div>
        
    </body>
</html>