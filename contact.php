<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="If you have any queries about what YOU CAN COOK can do for you, feel free to contact us and we will get back to you as soon as possible">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Questrial&display=swap"
    rel="stylesheet" media="print" onload="this.media='all'">
  <title>YOU CAN COOK | Contact Us</title>
  <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="images/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
  <link rel="manifest" href="images/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="images/favicons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Javascript for switching between mobile and desktop view -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  </script>
  <script>
    $(function () {
      $(".toggle").on("click", function () {

        if ($(".item").hasClass("active")) {
          $(".item").removeClass("active");
        }
        else {
          $(".item").addClass("active");
        }
      })
    });
  </script>
</head>

<?php

$message_sent = false;
if(isset($_POST['mail']) && $_POST['mail'] != ''){

  if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) ) {

    //submit the form
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "info@youcancook.org.uk";
    $body = "";

    $body .= "From: ".$name. "\r\n";
    $body .= "Email: ".$mail. "\r\n";
    $body .= "Subject: ".$subject. "\r\n";
    $body .= "Message: ".$message. "\r\n";

    mail($to,$subject,$body);

    $message_sent = true;
  }
}

?>

<body>
  <nav>
    <ul class="menu">
      <li class="logo">
        <p><span class="logo-r">YOU</span> <span class="logo-g">CAN</span> <span class="logo-b">COOK</span></p>
      </li>
      <li class="item"><a href="index.html">Home</a></li>
      <li class="item"><a href="what-we-do.html">What We Do</a></li>
      <li class="item"><a href="who-we-are.html">Who We Are</a></li>
      <li class="item"><a href="ycc-in-action.html">YCC in Action</a></li>
      <li class="item" id="new-page"><a href="https://youcancook.org.uk/blog/">Blog</a></li>
      <li class="item"><a href="you-can-grow.html">You Can Grow</a></li>
      <li class="item"><a href="recipes.html">Recipes</a></li>
      <li class="item"><a href="resources.html">Resources</a></li>
      <li class="item button"><a href="contact.php">Contact Us</a></li>
      <li class="item social"><a href="https://www.facebook.com/YouCanCookScotland/?fref=ts" target="_blank"
          rel="noreferrer noopener"><span><img src="images/socials/fb-white.svg" alt="Facebook"> </span></a></li>
      <li class="item social"><a href="https://www.instagram.com/youcancookscot/" target="_blank"
          rel="noreferrer noopener"><span><img src="images/socials/ig-white.svg" alt="Instagram"> </span></a></li>
      <li class="item social"><a href="https://twitter.com/youcancookscot" target="_blank"
          rel="noreferrer noopener"><span><img src="images/socials/tw-white.svg" alt="Twitter"> </span></a></li>
      <li class="item social"><a href="https://www.youtube.com/channel/UCqI1nd3-jz5mcis-5lt6KbQ" target="_blank"
          rel="noreferrer noopener"><span><img src="images/socials/yt-white.svg" alt="Youtube"> </span></a></li>
      <li class="toggle"><span class="burger"></span></li>
    </ul>
  </nav>

  <noscript>
    <div id="nojsalert">
      For full functionality of this site it is necessary to enable JavaScript.
      Here are the <a href="https://www.enable-javascript.com/" target="_blank" rel="noreferrer noopener">
        instructions on how to enable JavaScript in your web browser.</a>
    </div>
  </noscript>

  <main>

    <section class="contact">
      <h1>Drop us a line!</h1>
      <p>To get in touch, please fill in the form below with your details and we will reply as soon as possible.</p>

      <?php
if($message_sent):
?>
      <div class="confirm">
        <h6>Thanks, we'll be in touch</h6>
      </div>
      <?php
else:
?>
      <form name="contactForm" class="contact-form" action="contact.php" method="post">
        <input type="text" aria-label="Name" name="name" placeholder="Your Full Name" required>
        <input type="text" aria-label="Email" name="mail" placeholder="Your Email Address" required minlength="5"
          pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$"
          title="Please ensure you've entered your details in correctly and try again. Please note that we only accept emails from TLDs, e.g. '.com or .uk'">
        <input type="text" aria-label="Subject" name="subject" placeholder="Subject Line" required minlength="5"
          maxlength="25" title="Please ensure your subject line does not exceed 25 characters">
        <textarea name="message" aria-label="Message" placeholder=" Your Message" required minlength="20"
          maxlength="500"
          title="Please ensure your message is greater than 20 characters and less than 500 characters"></textarea>
        <button type="submit" aria-label="Submit" name="submit">Send Message</button>
      </form>
      <?php
endif;
?>
    </section>


    <section class="contact2">
      <h5>Alternatively you can contact us via our number here:</h5>
      <p>+0845-224-0896</p>
    </section>

    <section class="contact4">
      <h5>Or send us a letter:</h5>
      <p>YOU CAN COOK CIC<br>
        The Bridge<br>
        The Volunteer Resource Centre<br>
        School Brae<br>
        High Street<br>
        Peebles<br>
        EH45 8AL<br>
        Scotland<br>
      </p>
    </section>

    <section class="contact3">
      <h5>Follow us for the latest news and updates!</h5>
      <div class="c-socials">
        <a href="https://www.facebook.com/YouCanCookScotland/?fref=ts" target="_blank"><img
            src="images/socials/fb-c.svg" alt="Facebook"></a>
        <a href="https://www.instagram.com/youcancookscot/" target="_blank"><img src="images/socials/ig-c.svg"
            alt="Instagram"></a>
        <a href="https://twitter.com/youcancookscot" target="_blank"><img src="images/socials/tw-c.svg"
            alt="Twitter"></a>
        <a href="https://www.youtube.com/channel/UCqI1nd3-jz5mcis-5lt6KbQ" target="_blank"><img
            src="images/socials/yt-c.svg" alt="Youtube"></a>
      </div>
    </section>
  </main>

  <footer>
    <p> © YOU CAN COOK, 2007-22 | YOU CAN COOK is a Community Interest Company registered in Scotland | Company
      Registration No: SC332980 |</p>
  </footer>

  <script src="scripts.min.js"></script>
</body>

</html>