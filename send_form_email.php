<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "alex.vaneijk@me.com";
 
    $email_subject = "Your email subject line";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['makelaar_name']) ||
 
        !isset($_POST['straat_huis_n']) ||

        !isset($_POST['makelaar_contact']) ||

        !isset($_POST['postcode']) ||

        !isset($_POST['stad']) ||

        !isset($_POST['straat_huis_n_makelaar']) ||

        !isset($_POST['telephone']) ||

        !isset($_POST['postcode_makelaar']) ||

        // !isset($_POST['stad_makelaar']) 

        !isset($_POST['email']) ||

        !isset($_POST['gewenste_aankoop_datum'])

        ) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; 

    $makelaar_name = $_POST['makelaar_name'];

    $straat_huis_n = $_POST['straat_huis_n'];

    $makelaar_contact = $_POST['makelaar_contact'];

    $postcode = $_POST['postcode'];

    $stad = $_POST['stad'];

    $straat_huis_n_makelaar = $_POST['straat_huis_n_makelaar'];

    $postcode_makelaar = $_POST['postcode_makelaar'];

    $stad_makelaar = $_POST['stad_makelaar'];

    $gewenste_aankoop_datum = $_POST['gewenste_aankoop_datum'];
 
    $email_from = $_POST['email']; 
 
    $telephone = $_POST['telephone']; 

 
     

    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Straat en huis nummer".clean_string($straat_huis_n)."\n";
 
    $email_message .= "Postcode: ".clean_string($postcode)."\n";

    $email_message .= "Stad: ".clean_string($stad)."\n";

    $email_message .= "Telephone: ".clean_string($telephone)."\n";



    $email_message .= "Makelaar Name:".clean_string($makelaar_name)."\n";
 
    $email_message .= "Makelaars Contact: ".clean_string($makelaar_contact)."\n";
 
    $email_message .= "Straat huis nummer Aankoophuis:".clean_string($straat_huis_n_makelaar)."\n";
 

    $email_message .= "Postcode Aankoophuis:".clean_string($postcode_makelaar)."\n";

    $email_message .= "Stad Aankoophuis: ".clean_string($stad_makelaar)."\n";

    $email_message .= "gewenste aankoop datum:".clean_string($gewenste_aankoop_datum)."\n";


  //   $error_message = "";
 
  //   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  // if(!preg_match($email_exp,$email_from)) {
 
  //   $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  // }
 
  //   $string_exp = "/^[A-Za-z .'-]$/";
 
  // if(!preg_match($string_exp,$name)) {
 
  //   $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  // }
 
  // if(!preg_match($string_exp,$makelaar_name)) {
 
  //   $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  // }
 

 
  // if(strlen($error_message) > 0) {
 
  //   died($error_message);
 
  // }
 

     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width" />

    <title>Appartementkopen.info</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    

    <!-- Plugin CSS -->
    <link href="css/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/creative.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/media.css">

</head>
<body>
   <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid gradient">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="nav-height navbar-brand page-scroll" href="index.html">Appartementkopen.info</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a id="tel" class="tel nav-height page-scroll letter-spacing" href="index.html">06-34044039</a>
                    </li>                
                    <li>
                        <a class="nav-height page-scroll letter-spacing" href="index.html">Over Ons</a>
                    </li>
                    <li>
                        <a class="nav-height page-scroll letter-spacing" href="index.html">Diensten</a>
                    </li>
                    <li>
                        <a class="nav-height page-scroll letter-spacing" href="index.html">Aanbod</a>
                    </li>
                    <li>
                        <a class="nav-height page-scroll letter-spacing" href="index.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
    <div class="hello">
        <div class="header-content">
            <div class="header-content-inner">
  
                <h2 class="second-heading">Badankt voor het invullen van het formulier.</h2>
                <h4 class="third-heading">Ik neem zo snel mogelijk contact met u op.</h4>
                <br>
                <br>
                <a href="index.html" class="btn-gradient gradient btn btn-primary btn-xl page-scroll">Terug naar Home pagina</a>
            
                <br><br>
<!--                 <svg class="arrows">
                  <path class="a1" d="M0 0 L30 32 L60 0"></path>
                  <path class="a2" d="M0 20 L30 52 L60 20"></path>
                  <path class="a3" d="M0 40 L30 72 L60 40"></path>
               </svg> -->
            </div>
        </div>
        </div>
    </header>

</body>
</html>
 
 
 
<?php
 
}
 
?>