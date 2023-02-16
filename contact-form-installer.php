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
        <?php require_once("header.php"); ?>
    </div>
        


<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            // https://dashboard.emailjs.com/admin/integration
            emailjs.init('user_PA95OTCFbmb8UCahA1z4k');
        })();
    </script>
    <script type="text/javascript">
        window.onload = function() {
            let form = document.getElementById('contact-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                // generate a five digit number for the contact_number variable
                this.contact_number.value = Math.random() * 100000 | 0;
                // these IDs from the previous steps
                emailjs.sendForm('service_71nwtp3', 'template_m5l1d3q', this)
                    .then(function() {
                        // console.log('SUCCESS!');
                        form.reset();
                        // alert('Thank you for contacting us. We\'ll get in touch within 24 hours.')
                        window.location.href = "https://www.concare.com/thank-you.php";
                    }, function(error) {
                        // console.log('FAILED...', error);
                        alert('FAILED...', error);
                    });
            });
        }
    </script> -->

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
            $dateApplication = $_POST['dateApplication'];
            $userEmail = $_POST['email'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $addressCity = $_POST['addressCity'];
            $phone = $_POST['phone'];
            $startDateAvailability = $_POST['startDateAvailability'];
            $time = $_POST['time'];
            $education = $_POST['education'];
            $leavingPresentJob = $_POST['leavingPresentJob'];
            $experience = $_POST['experience'];
            $traveling = $_POST['traveling'];
            $transportation = $_POST['transportation'];
            $physicalActivity = $_POST['physicalActivity'];
            $jobQualifications = $_POST['jobQualifications'];
            $policyAttendance = $_POST['policyAttendance'];
            $hardestPhysicalJob = $_POST['hardestPhysicalJob'];
            $importanceWorkAccuracy = $_POST['importanceWorkAccuracy'];
            $hearAboutPosition = $_POST['hearAboutPosition'];
            $math = $_POST['math'];
            // $messageSubject = $_POST['subject'];
            // $message = $_POST['message'];

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
            $body .= '<td><p style="padding-left:10px;">Reason for Leaving Present Job/Unemployed: <br>' . $leavingPresentJob . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Experience: <br>' . $experience . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Traveling: <br>' . $traveling . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Transportation: <br>' . $transportation . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Physical Activity: <br>' . $physicalActivity . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Policy Attendance: <br>' . $policyAttendance . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Job Qualifications: <br>' . $jobQualifications . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Hardest Physical Job: <br>' . $hardestPhysicalJob . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Importance of Work Accuracy: <br>' . $importanceWorkAccuracy . '</p></td>';
            $body .= '</tr>';
            
            $body .= '<tr>';
            $body .= '<td><p style="padding-left:10px;">Heard About Position Where?: <br>' . $hearAboutPosition . '</p></td>';
            $body .= '</tr>';
            
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
            mail($to,'Website Applicant: Installer from ' . $firstName .'', $body, $headers);
            endif;
            $message_sent = true;
            
        }
    }

    ?>

<section style="padding:100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="padding-bottom:25px;">Application: Installer</h1>

                <?php 
                
                if($message_sent):
                    echo '<h2>Thank you for getting in touch. We\'ll respond shortly.</h2>';
                    echo '<a href="/">Go Back Home</a>';
                else: 

                ?>

            <form id="contact-form" class="row" action="contact-form-installer.php" method="POST">
    <!-- <div>
        <input type="hidden" name="contact_number">
    </div> -->

    <!-- <div class="" style="text-align:right;display:flex;justify-content:end;">
<div style="width:50%;">
    <label for="dateApplication">Date of Application</label>
    <input type="date" name="dateApplication" placeholder="" style="width:95%;margin-left:23px;">
</div>
    </div> -->

    <div class="" style="display:flex;justify-content:space-between;">
    <div class="" style="width:50%;padding-right: 50px;">
    <label for="dateApplication">Date of Application</label>
    <input type="date" name="dateApplication" placeholder="" style="" required>
    </div>

    <div class="" style="width:50%;">
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="" style="" required>
    </div>

    </div>

    <div class="" style="display:flex;justify-content:space-between;">
    <div class="" style="width:50%;padding-right: 50px;">
    <label for="firstName">First Name</label>
    <input type="text" name="firstName" placeholder="" style="" required>
    </div>

    <div class="" style="width:50%;">
    <label for="lastName">Last Name</label>
    <input type="text" name="lastName" placeholder="" style="" required>
    </div>

    </div>

    <div class="" style="display:flex;justify-content:space-between;align-items:end;">
    <div class="" style="width:50%;padding-right: 50px;">
    <label for="addressCity">Address<br>City, State, Zip</label>
    <input type="text" name="addressCity" placeholder="" style="" required>
    </div>

    <div class="" style="width:50%;">
    <label for="phone">Phone Number</label>
    <input type="tel" name="phone" placeholder="" style="" required>
    </div> 

    </div>

    <div class="">
    <label for="date">Start Date Availability</label>
    <input type="date" name="startDateAvailability" placeholder="" style="" required>
    </div>
    

    <div class="" style="display:flex;justify-content:space-between;align-items:end;">
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
    <label for="">What is the highest level of education you have completed?</label>
    <br>
    <br>
    <input type="radio" id="GED" name="education" value="GED">
    <label for="GED">G.E.D.</label><br>
    <input type="radio" id="highschool" name="education" value="High School">
    <label for="highschool">High School</label><br>
    <input type="radio" id="tradeschool" name="education" value="Trade School">
    <label for="tradeschool">Trade School</label><br>
    <input type="radio" id="college" name="education" value="Some College/College Graduate">
    <label for="college">Some College/College Graduate</label><br>
    </div>
    <!-- end new section -->
    </div>
    
    <!-- start new section -->
    <div class="" style="padding-top:50px;">
        <label for="leavingPresentJob">Why are you leaving your present job or what have you been doing while unemployed?</label>
        <br>
        <br>
        <textarea name="leavingPresentJob" id="" cols="30" rows="5"></textarea>
    </div>
    <!-- end new section -->


    <div class="" style="display:flex;justify-content:space-between;align-items:start;">
    <!-- start new section -->
    <div class="" style="width:50%;padding-right:50px;padding-top:50px;">
    <label for="">If experienced in coatings, what product have you worked with the most? </label>
    <br>
    <br>
    <input type="radio" id="epoxy" name="experience" value="Epoxy Coatings">
    <label for="epoxy">Epoxy Coatings</label><br>
    <input type="radio" id="urethane" name="experience" value="Urethane Cement">
    <label for="urethane">Urethane Cement</label><br>
    <input type="radio" id="mma" name="experience" value="MMA">
    <label for="mma">MMA</label><br>
    <input type="radio" id="nocoatings" name="experience" value="No Coatings Experience">
    <label for="nocoatings">No Coatings Experience</label><br>
    </div>
    <!-- end new section -->

    <!-- start new section -->
    <div class="" style="width:50%;padding-top:50px;">
    <label for="">Shifts (10-12 hours) can vary based on customer's needs. Are you prepared to work any shift,
not only 1st shift but 2nd shift, 3rd shift or weekends/holidays as needed?</label>
<br>
<br>
    <input type="radio" id="yesShifts" name="shifts" value="Yes">
    <label for="yesShifts">Yes</label><br>
    <input type="radio" id="noShift" name="shifts" value="No">
    <label for="noShift">No</label><br>
    <input type="radio" id="limitedavailabilityShifts" name="shifts" value="Limited Availability">
    <label for="limitedavailabilityShifts">Limited Availability</label><br>
    </div>
    <!-- end new section -->
    </div>

    <div class="" style="display:flex;justify-content:space-between;align-items:start;">
    <!-- start new section -->
    <div class="" style="width:50%;padding-right:50px;padding-top:50px;">
    <label for="">Are you available for out of town travel when needed? (Potentially more than 35% of our
business) typically for 1-2 weeks at a time. Some projects may last for an extended period but
normally you would get home every 2 weeks</label>
<br>
<br>
    <input type="radio" id="yesTraveling" name="traveling" value="Yes">
    <label for="yesTraveling">Yes</label><br>
    <input type="radio" id="noTraveling" name="traveling" value="No">
    <label for="noTraveling">No</label><br>
    <input type="radio" id="limitedavailabilityTraveling" name="traveling" value="Limited Availability">
    <label for="limitedavailabilityTraveling">Limited Availability</label><br>
    </div>
    <!-- end new section -->

    <!-- start new section -->
    <div class="" style="width:50%;padding-top:50px;">
    <label for="">Do you have reliable transportation and a valid driver's license?</label>
    <br>
    <br>
    <input type="radio" id="yesTransportation" name="transportation" value="Yes">
    <label for="yesTransportation">Yes</label><br>
    <input type="radio" id="yesWithCDLTransportation" name="transportation" value="Yes, with a CDL">
    <label for="yesWithCDLTransportation">Yes, with a CDL</label><br>
    <input type="radio" id="yesInterestedCDLTransportation" name="transportation" value="Yes, interested in CDL">
    <label for="yesInterestedCDLTransportation">Yes, interested in CDL</label><br>
    <input type="radio" id="noLicenseTransportation" name="transportation" value="No">
    <label for="noLicenseTransportation">No</label><br>
    </div>
    <!-- end new section -->
    </div>

    <!-- start new section -->

    <div class="" style="padding-top:50px;">

    <label for="">Are you able to perform daily physical activity, work on your hands and knees, navigate
obstacles, climb ladders and lift 50 lbs. unassisted? As part of the hire process, a physical
assessment will be</label>
<br>
<br>
    <input type="radio" id="yesPhysicalActivity" name="physicalActivity" value="Yes">
    <label for="yesPhysicalActivity">Yes</label><br>
    <input type="radio" id="noPhysicalActivity" name="physicalActivity" value="No">
    <label for="noPhysicalActivity">No</label><br>
    </div>
    <!-- end new section -->

    <div class="" style="display:flex;justify-content:space-between;align-items:start;">
        <!-- start new section -->
        <div class="" style="width:50%;padding-right:50px;padding-top:50px;">
        <label for="jobQualifications">What do you think are your qualifications for this job?</label>
        <br>
        <br>
        <textarea name="jobQualifications" id="" cols="30" rows="5"></textarea>
    </div>
    <!-- end new section -->

        <!-- start new section -->
        <div class="" style="width:50%;padding-top:50px;">
        <label for="policyAttendance">What do you feel is a reasonable policy with regard to attendance and tardiness?</label>
        <br>
        <br>
        <textarea name="policyAttendance" id="" cols="30" rows="4"></textarea>
    </div>
    <!-- end new section -->
    </div>

    <div class="" style="display:flex;justify-content:space-between;align-items:start;">
        <!-- start new section -->
        <div class="" style="width:50%;padding-right:50px;padding-top:50px;">
        <label for="hardestPhysicalJob">What is the most physical/hardest job you have had? Why?</label>
        <br>
        <br>
        <textarea name="hardestPhysicalJob" id="" cols="30" rows="5"></textarea>
    </div>
    <!-- end new section -->

        <!-- start new section -->
        <div class="" style="width:50%;padding-top:50px;">
        <label for="importanceWorkAccuracy">How do you feel about detail work and accuracy?</label>
        <br>
        <br>
        <textarea name="importanceWorkAccuracy" id="" cols="30" rows="5"></textarea>
    </div>
    <!-- end new section -->
    </div>

        <!-- start new section -->
        <div class="" style="padding-top:50px;">
        <label for="hearAboutPosition">Where did you learn about this open position? (Indicate the website, job board, referring
individual or newspaper.)</label>
<br>
<br>
        <textarea name="hearAboutPosition" id="" cols="30" rows="5"></textarea>
    </div>
    <!-- end new section -->
        <!-- start new section -->
        <div class="" style="padding-top:50px;">
        <label for="math">What's 4 + 3? (please only one digit numbers)</label>
<br>
<br>
    <input type="text" name="math" placeholder="" style="" required>
    </div>
    <!-- end new section -->


    <div class="">
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
