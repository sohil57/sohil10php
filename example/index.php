<?php
use PHPMailer\PHPMailer\PHPMailer;

// require_once("PHPMailer.php");
// require_once("SMTP.php");
// require_once("exception.php");

if (isset($_POST["myform"])) {
  require_once ("PHPMailer.php");
  require_once ("Exception.php");
  require_once ("SMTP.php");







  $mail = new PHPMailer(true);
  //Server settings
  $mail->SMTPDebug = false;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth = true;                                   //Enable SMTP authentication
  $mail->Username = 'sherasiyasohil57@gmail.com';                     //SMTP username
  $mail->Password = 'rhin yted csoy dgui';                               //SMTP password
  $mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
  $mail->Port = 587;
  //Recipients
  $mail->setFrom('sherasiyasohil57@gmail.com', 'Thanks');
  $mail->addAddress($_POST["email"], 'Mailer');
  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'Testing';
  $mail->Body = $_POST["message"];
  $mail->send();


}

// catch (Exception $e) 
// {
// echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <title>Document</title>
  <style>
    .myedit {

      margin-left: 900px;
    }

    .slog {
      display: flex;
      font-size: 10px;
    }

    .nav-item {
      width: 70%;
    }
  </style>

<body></body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand " href="#">RONMI</a>
    <div class="slog">ART INTIRIOR SPACE</div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 myedit">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Company</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Projects
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"  aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<div class="container ">
  <div class="section-header">
    <h2>Register Form</h2>
    <p>100% secure <span>and data</span>safe With Us</p>
  </div>

  <div class="row g-0">
    <div class="col-lg-7 ms-5 align-items-center reservation-form-bg">
      <form method="post" enctype="multipart/form-data" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 col-md-12 mt-3">
          <input type="text" class="form-control" name="name" id="email" placeholder="Your Name" data-rule="email"
            data-msg="Please enter a valid email">
          <div class="validate"></div>
        </div>
        <div class="col-lg-12 col-md-12 mt-3">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
            data-msg="Please enter a valid email">
          <div class="validate"></div>
        </div>

        <div class="col-lg-12 col-md-12 mt-3">
          <textarea class="form-control" name="message" id="email" placeholder="Your Message" data-rule="email"
            data-msg="Please enter a valid email"></textarea>
          <div class="validate"></div>
        </div>

        <button type="submit" class="btn btn-outline-success" name="myform">Submit</button>


      </form>
    </div>

  </div>

</div>


</div>
</div>
</body>

</html>