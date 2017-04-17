<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "anitacrihernandez@gmail.com, ccomercial@rentadvisor.com.co, comercial.avante.cc, comercial@rentadvisor.com.co, contact@brandspa.com";
    $email_subject = "New Message from rentadvisor.co";
 
    function died($error) {
        // your error code can go here
        echo "Lo sentimos, hay un error en los datos suministrados. ";
        echo "Los errores son los siguientes.<br /><br />";
        echo $error."<br /><br />";
        echo "Por favor vuelva a la página anterior y corrija la información.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['cel']) ||
        !isset($_POST['empresa']) ) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['name']; // required
    $last_name = $_POST['empresa']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['cel']; // not required
    $comments = $_POST['mensaje']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[áéíóúñüÁÉÍÓÚÑÜ]+$/i";
 
  //if(!preg_match($string_exp,$first_name)) {
    //$error_message .= 'The First Name you entered does not appear to be valid.<br />';
  //}
 
  //if(!preg_match($string_exp,$last_name)) {
    //$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  //}
 
  //if(strlen($comments) < 2) {
    //$error_message .= 'The Comments you entered do not appear to be valid.<br />';
  //}
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Nombre: ".clean_string($first_name)."\n";
    $email_message .= "Empresa: ".clean_string($last_name)."\n";
    $email_message .= "Correo: ".clean_string($email_from)."\n";
    $email_message .= "Celular: ".clean_string($telephone)."\n";
    $email_message .= "Mensaje: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
<script>
  location.href = "http://rentadvisor.com.co/gracias/";
</script>
 
<?php
 
}
?>