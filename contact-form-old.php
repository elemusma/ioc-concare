<?php
if (session_id() == '') session_start();

require "formfiles/contact-config.php";

$error_message = '';

if (!isset($_POST['submit'])) {

  showForm();

} else { //form submitted

  $error = 0;
  
  if(!empty($_POST['fname'])) {
  	$fname[2] = clean_var($_POST['fname']);
  }
  else {
    $error = 1;
    $fname[3] = 'color:#FF0000;';
  }

  if(!empty($_POST['company'])) {
  	$company[2] = clean_var($_POST['company']);
  }
  else {
    $error = 1;
    $company[3] = 'color:#FF0000;';
  }
 
  if(!empty($_POST['phone'])) {
  	$phone[2] = clean_var($_POST['phone']);
  }
  else {
    $error = 1;
    $phone[3] = 'color:#FF0000;';
  }
 
  if(!empty($_POST['email'])) {
  	$email[2] = clean_var($_POST['email']);
  	if (!validEmail($email[2])) {
  	  $error = 1;
  	  $email[3] = 'color:#FF0000;';
  	  $email[4] = '<strong><span style="color:#FF0000;">Invalid email</span></strong>';
	  }
  }
  else {
    $error = 1;
    $email[3] = 'color:#FF0000;';
  }
  
  if(!empty($_POST['subject'])) {
  	$subject[2] = clean_var($_POST['subject']);
  	if (function_exists('htmlspecialchars')) $subject[2] = htmlspecialchars($subject[2], ENT_QUOTES);  	
  }
  else {
  	$error = 1;
    $subject[3] = 'color:#FF0000;';
  }  

  if(!empty($_POST['message'])) {
  	$message[2] = clean_var($_POST['message']);
  	if (function_exists('htmlspecialchars')) $message[2] = htmlspecialchars($message[2], ENT_QUOTES);
  }
  else {
    $error = 1;
    $message[3] = 'color:#FF0000;';
  }    

  if(empty($_POST['captcha_code'])) {
    $error = 1;
    $code[3] = 'color:#FF0000;';
  } else {
  	include_once "formfiles/contact-securimage.php";
		$securimage = new Securimage();
    $valid = $securimage->check($_POST['captcha_code']);

    if(!$valid) {
      $error = 1;
      $code[3] = 'color:#FF0000;';   
      $code[4] = '<strong><span style="color:#FF0000;">Incorrect code</span></strong>';
    }
  }

  if ($error == 1) {
    $error_message = '<span style="font-weight:normal;font-size:90%;">Please correct/enter field(s) in red.</span>';

    showForm();

  } else {
  	
  	if (function_exists('htmlspecialchars_decode')) $subject[2] = htmlspecialchars_decode($subject[2], ENT_QUOTES);
  	if (function_exists('htmlspecialchars_decode')) $message[2] = htmlspecialchars_decode($message[2], ENT_QUOTES);  	
  	
    $body = "$fname[0]: $fname[2] - $company[0]: $company[2] - $phone[0]: $phone[2]\r\n\r\n";
    $body .= "$email[0]: $email[2]\r\n\r\n";
    $body .= "$message[0]:\r\n$message[2]\r\n";
    
    if (!$from) $from_value = $email[2];
    else $from_value = $from;
    
    require_once('formfiles/class.phpmailer.php');
    
    $mail = new PHPMailer();
    
    $mail->SetFrom($from_value);  
    $mail->AddReplyTo($email[2]);
    $mail->Subject = "$subject_prefix - $subject[2]";
    $mail->Body = $body;
    $mail->AddAddress($to);
    
    if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    }
    
    if (!$thank_you_url) {    
      if ($use_header_footer) include $header_file;
      echo '<a name="cform"><!--Form--></a>'."\n";
      echo '<div id="formContainer" style="width:'.$form_width.';height:'.$form_height.';text-align:left; vertical-align:top;">'."\n";
      echo $GLOBALS['thank_you_message']."\n";
      echo '</div>'."\n";
      if ($use_header_footer) include $footer_file;
	  }
	  else {
	  	header("Location: $thank_you_url");
	  }
	  
	  session_unset();
    session_destroy();	  
       	
  }

} //else submitted



function showForm()

{
global $fname, $company, $phone, $email, $subject, $message, $code;
global $where_included, $use_header_footer, $header_file, $footer_file;
global $form_width, $form_height, $form_background, $form_border_color, $form_border_width, $form_border_style, $cell_padding, $left_col_width; 	

if ($use_header_footer) include $header_file;

echo $GLOBALS['error_message'];  

echo <<<EOD
<a name="cform"><!--Form--></a>
<div id="formContainer" style="width:{$form_width};">
<form method="post" class="cForm" action="{$where_included}#cform">
<table style="width:100%; height:{$form_height}; background:{$form_background}; border:{$form_border_width} {$form_border_style} {$form_border_color}; padding:10px;" id="contactForm">
<tr>
<td style="width:{$left_col_width}; text-align:right; vertical-align:top; padding:{$cell_padding}; font-weight:normal; {$fname[3]}">{$fname[0]}</td>
<td style="text-align:left; vertical-align:top; padding:{$cell_padding};"><input type="text" name="{$fname[1]}" value="{$fname[2]}" id="{$fname[1]}" /></td>
</tr>
<tr>
<td style="width:{$left_col_width}; text-align:right; vertical-align:top; padding:{$cell_padding}; font-weight:normal; {$company[3]}">{$company[0]}</td>
<td style="text-align:left; vertical-align:top; padding:{$cell_padding};"><input type="text" name="{$company[1]}" value="{$company[2]}" id="{$company[1]}" /></td>
</tr>
<tr>
<td style="width:{$left_col_width}; text-align:right; vertical-align:top; padding:{$cell_padding}; font-weight:normal; {$phone[3]}">{$phone[0]}</td>
<td style="text-align:left; vertical-align:top; padding:{$cell_padding};"><input type="text" name="{$phone[1]}" value="{$phone[2]}" id="{$phone[1]}" /></td>
</tr>
<tr>
<td style="width:{$left_col_width}; text-align:right; vertical-align:top; padding:{$cell_padding}; font-weight:normal; {$email[3]}">{$email[0]}</td>
<td style="text-align:left; vertical-align:top; padding:{$cell_padding};"><input type="text" name="{$email[1]}" value="{$email[2]}" id="{$email[1]}" /> {$email[4]}</td>
</tr>
<tr>
<td style="width:{$left_col_width}; text-align:right; vertical-align:top; padding:{$cell_padding}; font-weight:normal; {$subject[3]}">{$subject[0]}</td>
<td style="text-align:left; vertical-align:top; padding:{$cell_padding};"><input type="text" name="{$subject[1]}" value="{$subject[2]}" size="40" id="{$subject[1]}" /></td>
</tr>
<tr>
<td style="width:{$left_col_width}; text-align:right; vertical-align:top; padding:{$cell_padding}; font-weight:normal; {$message[3]}">{$message[0]}</td>
<td style="text-align:left; vertical-align:top; padding:{$cell_padding};"><textarea name="{$message[1]}" cols="40" rows="6" id="{$message[1]}">{$message[2]}</textarea></td>
</tr>
<tr>
<td style="width:{$left_col_width}; text-align:right; vertical-align:top; padding:{$cell_padding}">&nbsp;</td>
<td style="text-align:left; vertical-align:top; padding:{$cell_padding};"><img id="captcha" src="formfiles/contact-securimage_show.php" alt="CAPTCHA Image" /></td>
</tr>
<tr>
<td style="width:{$left_col_width}; text-align:right; vertical-align:top; padding:{$cell_padding}; font-weight:normal; {$code[3]}">{$code[0]}</td>
<td style="text-align:left; vertical-align:top; padding:{$cell_padding};"><input type="text" name="{$code[1]}" size="10" maxlength="5" id="{$code[1]}" /> {$code[4]}
<br /><br />(Please enter the text in the image above. Text is not case sensitive.)<br />
<a href="#" onclick="document.getElementById('captcha').src = 'formfiles/contact-securimage_show.php?' + Math.random(); return false">Click here if you cannot recognize the code.</a><br /><br />
All fields are required. <br />
<input type="submit" name="submit" value="Submit" style="border:2px solid #999;background:#E4E4E4;margin-top:5px;" id="submit_button" />
</td>
</tr>
</table>
</form>
</div>
EOD;

if ($use_header_footer) include $footer_file;
}

function clean_var($variable) {
    $variable = strip_tags(stripslashes(trim(rtrim($variable))));
  return $variable;
}

/**
Email validation function.
*/
function validEmail($email)
{
   $isValid = true;
   $atIndex = strrpos($email, "@");
   if (is_bool($atIndex) && !$atIndex)
   {
      $isValid = false;
   }
   else
   {
      $domain = substr($email, $atIndex+1);
      $local = substr($email, 0, $atIndex);
      $localLen = strlen($local);
      $domainLen = strlen($domain);
      if ($localLen < 1 || $localLen > 64)
      {
         // local part length exceeded
         $isValid = false;
      }
      else if ($domainLen < 1 || $domainLen > 255)
      {
         // domain part length exceeded
         $isValid = false;
      }
      else if ($local[0] == '.' || $local[$localLen-1] == '.')
      {
         // local part starts or ends with '.'
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $local))
      {
         // local part has two consecutive dots
         $isValid = false;
      }
      else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
      {
         // character not valid in domain part
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $domain))
      {
         // domain part has two consecutive dots
         $isValid = false;
      }
      else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\","",$local)))
      {
         // character not valid in local part unless 
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/',
             str_replace("\\\\","",$local)))
         {
            $isValid = false;
         }
      }
      if ($isValid && function_exists('checkdnsrr'))
      {
      	if (!(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A"))) {
         // domain not found in DNS
         $isValid = false;
       }
      }
   }
   return $isValid;
}

?>