<?php

/* Email address where the messages should be delivered */

$to = 'info@concare.com';

/* This will be appended to the subject of contact form message */

$subject_prefix = 'Concare Website Contact';

/* Name of the file where you are including the contact form */

$where_included = 'contact-concare.php';

/*******************************************************************************
 *	OPTIONAL
*******************************************************************************/

/* From email address, in case your server prohibits sending emails from 
 * addresses other than those of your own domain (e.g. email@yourdomain.com). */

$from = '';

/* Whether to use header/footer files? If yes, then set to TRUE */

$use_header_footer = FALSE;

/* Form header file */

$header_file = 'formfiles/contact-header.php';

/* Form footer file */

$footer_file = 'formfiles/contact-footer.php';

/* Thank you message to be displayed after the form is submitted. Can include 
 * HTML tags. Write your message between <!-- Start message --> and <!-- End message --> */

$thank_you_message = <<<EOD
<!-- Start message -->
<p><strong>Thank you for contacting us, we'll get back to you as soon as possible.</strong></p>
<!-- End message -->
EOD;

/* URL to be redirected to after the form is submitted. If this is specified, 
 * then the above message will not be shown and user will be redirected to this 
 * page after the form is submitted. */

$thank_you_url = '';

/*******************************************************************************
 *	COSMETICS
*******************************************************************************/

/* Form width in px or % value */

$form_width = '70%';

/* Form height in px */

$form_height = '500px';

/* Form cell padding */

$cell_padding = '5px';

/* Form left column width */

$left_col_width = '20%';


$fname = array('Name','fname',NULL,NULL);
$company = array('Company','company',NULL,NULL);
$phone = array('Telephone','phone',NULL,NULL);
$email = array('Email','email',NULL,NULL,NULL);
$subject = array('Subject','subject',NULL,NULL);
$message = array('Message','message',NULL,NULL);
$code = array('Code','captcha_code',NULL,NULL,NULL);

?>