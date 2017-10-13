<?php

?>

<!DOCTYPE html>
<html>
    <head>
       <title>Book Appointment</title> 
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
        <style>
             @import url("./css/styles.css"); 
             
        </style>
        
    </head>
    <body>
        <header>
			<h1>Book an Appointment: </h1>	
		</header>
        <?php
        // A simple web site in Cloud9 that runs through Apache
        // Press the 'Run' button on the top to start the web server,
        // then click the URL that is emitted to the Output tab of the console
        echo "<h2> Please enter information to book an appointment with your physician: </h2>";
          
        ?>
        
        
          <form action="information.php" method="get">
            <strong><i>*ID:</i></strong> <input type="text" name="ID" placeholder="id">
            <br />
            <br />
            <strong><i>*First name: </i></strong><input type="text" name="firstname" placeholder="firstname">
            <strong><i>Middle name: </i></strong><input type="text" name="middlename" placeholder="middlename">
            <strong><i>*Last name: </i></strong><input type="text" name="surname" placeholder="lastname">
            <br />
            <br />
            <strong><i>*Street address: </i></strong><input type="text" name="streetAddress" placeholder="street address", size = "55">
            <br />
            <br />
            <strong><i>*City: </i></strong><input type="text" name="cityAddress" placeholder="city address">
            <strong><i>*State: </i></strong><input type="text" name="stateAddress" placeholder="state address">
            <strong><i>*Zip: </i></strong><input type="text" name="zipcode" placeholder="zip code">
            <br />
            <br />
            <strong><i>*Phone number: </i></strong><input type="text" name="phoneNumber" placeholder="phone number">
            <strong><i>*Email: </i></strong><input type="text" name="email" placeholder="email address"> 
            <br />
            <br />
            <strong><i>Preferred method of contact: </i></strong>
            <input type = "radio" id = "lphonenumber" name = "layout" value="Phone">
            <label for="Phone"></label><label for = "lphonenumber"> Phone </label>
            <input type = "radio" id = "lemail" name = "layout" value="Email">
            <label for="Email"></label><label for = "lemail"> Email</label>
            <br />
            <br />
             <strong><i>*Reason for visit: </i></strong>
              <select name= "reasonForVisit" style="color:black; font-size:1.5em">
               
                <option value> - Select One - </option>
                <option value="Referral"> Referral </option>
                <option value ="Physical"> Physical </option>
                <option value ="Sickness"> Sickness </option>
                <option value ="Follow up"> Follow up </option>
                <option value ="Annual checkup"> Annual checkup</option>
                <option value ="Routine pediatric checkup"> Routine pediatric checkup </option>
                <option value ="Routine pregnancy"> Routine pregnancy checkup </option>
                <option value ="Immunization"> Immunization  </option>
                <br />
                <br />
                </select>
                
                <br />
                <br />
                <strong><i>*Day available: </i></strong>
               <select name= "dayAvailability" style="color:black; font-size:1.5em">
               
                <option value> - Select One - </option>
                <option value ="Monday"> Monday </option>
                <option value ="Tuesday"> Tuesday </option>
                <option value ="Wednesday"> Wednesday </option>
                <option value ="Thursday"> Thursday </option>
                <option value ="Friday"> Friday </option>
              </select>
             
              <strong><i>*Time available: </i></strong>
              <select name= "timeAvailability" style="color:black; font-size:1.5em">
               
                <option value> - Select One - </option>
                <option value ="8:00 AM"> 8:00 AM </option>
                <option value ="8:30 AM"> 8:30 AM </option>
                <option value ="9:00 AM"> 9:00 AM </option>
                <option value ="9:30 AM"> 9:30 AM </option>
                <option value ="10:00 AM"> 10:00 AM </option>
                <option value ="10:30 AM"> 10:30 AM </option>
                <option value = "11:00 AM"> 11:00 AM </option>
                <option value ="11:30 AM"> 11:30 AM </option>
                <option value ="1:00 PM"> 1:00 PM </option>
                <option value ="1:30 PM"> 1:30 PM </option>
                <option value ="2:00 PM"> 2:00 PM </option>
                <option value ="2:30 PM"> 2:30 PM </option>
                <option value ="3:00 PM"> 3:00 PM </option>
                <option value ="3:30 PM"> 3:30 PM </option>
                <option value ="4:00 PM"> 4:00 PM </option>
                <option value ="4:30 PM"> 4:30 PM </option>
              </select>
              <br />
              <br />
             <strong><i>Please enter any additional information for your physician regarding your appointment below: </i></strong>
             <br >
            <textarea type = "text" rows="10" cols="100" name="comment" > </textarea>
            <br />
              <br />
              
              <span class = "mustComplete">Note: You must provide an answer to questions with an asterisk '*'.</span>
              <br />
              <input type="submit" value="Submit">
          </form> 
          <div id = "footer">
			<hr>
			CST 336. 2017&copy; Diesh <br />
			
			<figure id = "Health_Logo"> 
                <img src = "./imgs/download.png" alt = "Health Logo"/> 
            </figure>
		</div>
        
        <br /> <br />
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script> -->
    </body>
</html>