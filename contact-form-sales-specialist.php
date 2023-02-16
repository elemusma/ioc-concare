<?php session_start(); ?>	
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Concare Floor Coating Company in IL, WI, IN, IA, MI</title>
        <meta name="description" content="Contact concare at 866-266-2273 il, www.concare.com for concrete floor protection.">
		<meta name="keywords" content="call concare 866-266-2273 call ron puszynski">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css"/>
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/contact.css"/>

		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>

        <script src="https://www.google.com/recaptcha/api.js"></script>
		
		<script type="text/javascript">
			function toggle_visibility(id) {
				var e = document.getElementById(id);
				if(e.style.display == 'block')
					e.style.display = 'none';
				else
					e.style.display = 'block';
			}
		</script>
    </head>
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<div>
        <?php 
        require_once("header.php"); 
        include('smtpcom-test.php');
        ?>
    </div>
        


    <script>
   function onSubmit(token) {
     document.getElementById("contact-form").submit();
   }
 </script>

    <?php 
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != '' ){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

            // submit the form

            $dateApplication = htmlspecialchars($_POST['dateApplication']);

            $userEmail = $_POST['email'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $addressCity = $_POST['addressCity'];
            $phone = $_POST['phone'];
            $startDateAvailability = $_POST['startDateAvailability'];
            $time = $_POST['time'];
            $education = $_POST['education'];
            $differentEmployers = $_POST['differentEmployers'];
            $salesExpectations = $_POST['salesExpectations'];
            $missedGoals = $_POST['missedGoals'];
            $compensation = $_POST['compensation'];
            $compensationBase = $_POST['compensationBase'];
            $bestApproachforSelling = $_POST['bestApproachforSelling'];
            $percentageOfSales = $_POST['percentageOfSales'];
            $methodsProspect = $_POST['methodsProspect'];
            $salesOpportunity = $_POST['salesOpportunity'];
            $hearAboutPosition = $_POST['hearAboutPosition'];
            $math = $_POST['math'];
            // $messageSubject = $_POST['subject'];
            // $message = $_POST['message'];

            // $to = "efrain@insideoutfocus.com";
            
            $to = "info@concare.com";

            $headers = "From: info@concare.com \r\n";
            $headers .= "Reply-To: info@concare.com \r\n";
            // $headers .= "CC: garrett@insideoutfocus.com\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            
            
            $body = '<table style="background-color: #f7f7f7; width: 100%;">';
            $body .= '<tbody>';
            $body .= '<tr>';
            $body .= '<td>';
            
            // start of table for logo
            $body .= '<table style="padding-top:20px;padding-bottom: 20px;margin:auto;">';
            $body .= '<tbody>';
            $body .= '<tr>';
            $body .= '<td style="text-align: center;"><img src="https://www.concare.com/img/logo.png" alt="Logo" width="200px" height="auto"/></td>';
            $body .= '</tr>';
            $body .= '</tbody>';
            $body .= '</table>';
            // end of table for logo
            
            // start of body
            $body .= '<table style="margin: auto; padding: 20px; width: 100%; max-width: 600px;background-color:white;">';
            $body .= '<tbody>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Date Application: <br>' . $dateApplication . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Email: <br>' . $userEmail . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">From: <br>' . $firstName . ' ' . $lastName . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Address: <br>' . $addressCity . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Phone: <br>' . $phone . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Start Date: <br>' . $startDateAvailability . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Time: <br>' . $time . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Education: <br>' . $education . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">How many different primary employers have you worked for in the last five years? <br>' . $differentEmployers . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">How many years out of the past five did you meet or exceed your sales goals? <br>' . $salesExpectations . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">If you missed your goal one or more years, what was the reason? <br>' . $missedGoals . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">What was your total compensation (base, commission & bonuses) in your last full year in sales? <br>' . $compensation . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">How much of your compensation was base? How much was commission? <br>' . $compensationBase . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">What is the best approach you would use to sell yourself? <br>' . $bestApproachforSelling . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">List the percentage of sales to new versus existing customers during your last two years of sales experience: <br>' . $percentageOfSales . '</p></td>';
            $body .= '</tr>';

            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">List the top 3 methods you have used to discover a new prospect and one of your most unconventional: <br>' . $methodsProspect . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">What criteria do you use to determine if a sales opportunity is real or not? <br>' . $salesOpportunity . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Heard About Position Where?: <br>' . $hearAboutPosition . '</p></td>';
            $body .= '</tr>';

            // $body .= '<tr>';
            // $body .= '<td><p style="color:white;">..</p></td>';
            // $body .= '</tr>';
            
            $body .= '</tbody>';
            $body .= '</table>';
            // end of body
            
            
            // necessary so the table below does get styled
            $body .= '<table style="margin: auto; padding: 20px; width: 100%; max-width: 600px;text-align:center;">';
            $body .= '<tbody>';
            $body .= '<tr>';
            $body .= '<td>';
            $body .= '</td>';
            $body .= '</tr>';
            $body .= '<tr>';
            $body .= '</tr>';
            $body .= '</tbody>';
            $body .= '</table>';
            // necessary so the table below does get styled
            
            // start of footer
            $body .= '<table style="margin: auto; padding: 20px; width: 100%; max-width: 600px;text-align:center;">';
            $body .= '<tbody>';
            $body .= '<tr>';
            $body .= '<td>';
            $body .= '<h4>Congrats on Your New Website Applicant</h4>';
            $body .= '</td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td>Have questions about the form submission or the website?
            Reach out to your web support at <a href="mailto:garrett@insideoutfocus.com">garrett@insideoutfocus.com</a></td>';
            $body .= '</tr>';
            $body .= '</tbody>';
            $body .= '</table>';
            // end of footer
            
            $body .= '</td>';
            $body .= '</tr>';
            $body .= '</tbody>';
            $body .= '</table>';


            if($math == '7'):
            mail($to,'Website Applicant: Sales Specialist from ' . $firstName .'', $body, $headers);
            endif;
            $message_sent = true;
            
        }
    }

    ?>


<section style="padding:100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="padding-bottom:25px;">Application: Sales Specialist</h1>

                <?php 
                
                if($message_sent):
                    echo '<h2>Thank you for getting in touch. We\'ll respond shortly.</h2>';
                    echo '<a href="/">Go Back Home</a>';
                else: 

                ?>

<form id="contact-form" class="row" action="contact-form-sales-specialist.php" method="POST">
    <!-- <div>
        <input type="hidden" name="contact_number">
    </div> -->

    <!-- <div class="" style="text-align:right;display:flex;justify-content:end;">
<div style="width:50%;">
    <label for="dateApplication">Date of Application</label>
    <input type="date" name="dateApplication" placeholder="" required style="width:95%;margin-left:23px;">
</div>
    </div> -->

    <div class="" style="display:flex;justify-content:space-between;">
    <div class="" style="width:50%;padding-right: 50px;">
    <label for="dateApplication">Date of Application</label>
    <input type="date" name="dateApplication" placeholder="" required style="">
    </div>

    <div class="" style="width:50%;">
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="" required style="">
    </div>

    </div>

    <div class="" style="display:flex;justify-content:space-between;">
    <div class="" style="width:50%;padding-right: 50px;">
    <label for="firstName">First Name</label>
    <input type="text" name="firstName" placeholder="" required style="">
    </div>

    <div class="" style="width:50%;">
    <label for="lastName">Last Name</label>
    <input type="text" name="lastName" placeholder="" required style="">
    </div>

    </div>

    <div class="" style="display:flex;justify-content:space-between;align-items:end;">
    <div class="" style="width:50%;padding-right: 50px;">
    <label for="addressCity">Address<br>City, State, Zip</label>
    <input type="text" name="addressCity" placeholder="" required style="">
    </div>

    <div class="" style="width:50%;">
    <label for="phone">Phone Number</label>
    <input type="tel" name="phone" placeholder="" required style="">
    </div> 

    </div>

    <div class="">
    <label for="date">Start Date Availability</label>
    <input type="date" name="startDateAvailability" placeholder="" required style="">
    </div>
    

    <div class="" style="display:flex;justify-content:space-between;">
    <!-- start new section -->
    <div class="" style="width:50%;padding-right:50px;padding-top:50px;">
    <label for="dateApplication">We will be contacting qualified applicants by phone. What is the best time to contact you?</label>
    <br>
    <br>
    <input type="radio" id="830" name="time" value="8:30am - 11:30am">
    <label for="830">8:30am - 11:30am</label><br>
    <input type="radio" id="1130" name="time" value="11:30am - 2:30am">
    <label for="1130">11:30am - 2:30am</label><br>
    <input type="radio" id="230" name="time" value="2:30am - 5:30am">
    <label for="230">2:30am - 5:30am</label><br>
    </div>
    <!-- end new section -->

    <!-- start new section -->
    <div class="" style="width:50%;padding-top:50px;">
    <label for="">Education</label>
    <br>
    <br>
    <input type="radio" id="HighSchool" name="education" value="High School">
    <label for="HighSchool">High School</label><br>
    <input type="radio" id="SomeCollege" name="education" value="Some College">
    <label for="SomeCollege">Some College</label><br>
    <input type="radio" id="collegeGraduate" name="education" value="College Graduate">
    <label for="collegeGraduate">College Graduate</label><br>
    <input type="radio" id="graduateSchool" name="education" value="Some Graduate School">
    <label for="graduateSchool">Some Graduate School</label><br>
    <input type="radio" id="advancedDegree" name="education" value="Advanced Degree">
    <label for="advancedDegree">Advanced Degree</label><br>
    </div>
    <!-- end new section -->
    </div>

    <div class="" style="display:flex;justify-content:space-between;align-items:end;">
    <!-- start new section -->
    <div class="" style="width:50%;padding-right:50px;padding-top:50px;">
    <label for="dateApplication">How many different primary employers have you worked for in the last five years?</label>
    <br>
    <br>
    <input type="radio" id="1" name="differentEmployers" value="1">
    <label for="1">1</label><br>
    <input type="radio" id="2" name="differentEmployers" value="2">
    <label for="2">2</label><br>
    <input type="radio" id="3" name="differentEmployers" value="3">
    <label for="3">3</label><br>
    <input type="radio" id="4" name="differentEmployers" value="4+">
    <label for="4">4+</label><br>
    </div>
    <!-- end new section -->

    <!-- start new section -->
    <div class="" style="width:50%;padding-top:50px;">
    <label for="">How many years out of the past five did you meet or exceed your sales goals? </label>
    <br>
    <br>
    <input type="radio" id="1to2" name="salesExpectations" value="1 to 2">
    <label for="1to2">1 to 2</label><br>
    <input type="radio" id="3" name="salesExpectations" value="3">
    <label for="3">3</label><br>
    <input type="radio" id="4" name="salesExpectations" value="4">
    <label for="4">4</label><br>
    <input type="radio" id="5" name="salesExpectations" value="5">
    <label for="5">5</label><br>
    </div>
    <!-- end new section -->
    </div>


    <div class="" style="display:flex;justify-content:space-between;align-items:end;">
    <!-- start new section -->
    <div class="" style="width:50%;padding-right:50px;padding-top:50px;">
    <label for="missedGoals">If you missed your goal one or more years, what was the reason?</label>
        <br>
        <br>
        <textarea name="missedGoals" id="" cols="30" rows="5" required></textarea>
    </div>
    <!-- end new section -->

    <!-- start new section -->
    <div class="" style="width:50%;padding-top:50px;">
    <label for="">What was your total compensation (base, commission & bonuses) in your last full year in sales?</label>
    <br>
    <br>
    <input type="radio" id="60000" name="compensation" value="Up to $60,000 ">
    <label for="60000">Up to $60,000 </label><br>
    <input type="radio" id="60-80" name="compensation" value="$60,000-$80,000">
    <label for="60-80">$60,000-$80,000</label><br>
    <input type="radio" id="80-125" name="compensation" value="$80,000-$125,000">
    <label for="80-125">$80,000-$125,000</label><br>
    <input type="radio" id="125" name="compensation" value="$125,000+">
    <label for="125">$125,000+</label><br>
    </div>
    <!-- end new section -->
    </div>
    



    <div class="" style="display:flex;justify-content:space-between;align-items:start;">
    <!-- start new section -->
    <div class="" style="width:50%;padding-right:50px;padding-top:50px;">
    <label for="compensationBase">How much of your compensation was base? How much was commission?</label>
    <br>
    <br>
    <textarea name="compensationBase" id="" cols="30" rows="4" required></textarea>
    </div>
    <!-- end new section -->

    <!-- start new section -->
    <div class="" style="width:50%;padding-top:50px;">
    <label for="bestApproachforSelling">What is the best approach you would use to sell yourself?</label>
    <br>
    <br>
    <textarea name="bestApproachforSelling" id="" cols="30" rows="5" required></textarea>
    </div>
    <!-- end new section -->
    </div>


    <div class="" style="display:flex;justify-content:space-between;align-items:start;">
    <!-- start new section -->
    <div class="" style="width:50%;padding-right:50px;padding-top:50px;">
    <label for="percentageOfSales">List the percentage of sales to new versus existing customers during your last two years of
sales experience</label>
    <br>
    <br>
    <textarea name="percentageOfSales" id="" cols="30" rows="5" required></textarea>
    </div>
    <!-- end new section -->

    <!-- start new section -->
    <div class="" style="width:50%;padding-top:50px;">
    <label for="methodsProspect">List the top 3 methods you have used to discover a new prospect and one of your most
unconventional.</label>
    <br>
    <br>
    <textarea name="methodsProspect" id="" cols="30" rows="5" required></textarea>
    </div>
    <!-- end new section -->
    </div>

    <div class="" style="display:flex;justify-content:space-between;align-items:start;">
    <!-- start new section -->
    <div class="" style="width:50%;padding-right:50px;padding-top:50px;">
    <label for="salesOpportunity">What criteria do you use to determine if a sales opportunity is real or not?</label>
    <br>
    <br>
    <textarea name="salesOpportunity" id="" cols="30" rows="5" required></textarea>
    </div>
    <!-- end new section -->

    <!-- start new section -->
    <div class="" style="width:50%;padding-top:50px;">
    <label for="hearAboutPosition">Where did you learn about this open position? (Indicate the website, job board, referring
individual or newspaper.)</label>
    <br>
    <br>
    <textarea name="hearAboutPosition" id="" cols="30" rows="5" required></textarea>
    </div>
    <!-- end new section -->
    </div>

      <!-- start new section -->
      <div class="" style="padding-top:50px;">
        <label for="math">What's 4 + 3? (please only one digit numbers)</label>
<br>
<br>
    <input type="text" name="math" placeholder="" style="" required>
    </div>
    <!-- end new section -->


    <div class="" style="padding-top:50px;">
    <!-- <input type="submit" value="Send" style="background:#0074C8;color:white;width:103.5%;"> -->
    <button class="g-recaptcha" 
        style="background:#0074C8;color:white;width:103.5%;border:none;padding:10px;"
        data-sitekey="6Lf1hsMfAAAAAGRELkzP6NdkZA7BXTW6wG_SuLT5" 
        data-callback='onSubmit' 
        data-action='submit'>Send</button>
    </div>
</form>

<?php 
endif;
?>

            </div>
        </div>
    </div>
</section>




	
    <?php require_once("footer.php"); ?>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/dropit.js"></script>
        <script src="js/dropdown.js"></script>

		
       <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-15819292-1', 'auto');
			ga('send', 'pageview');

		</script>
		
		

		
</body>
</html>
