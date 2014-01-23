<?php 

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = trim($_POST["name"]);
//     $email =  trim($_POST["email"]);
//     $message =  trim($_POST["message"]);
    
//     if ($name == "" OR $email =="" OR $message == ""){
//       echo "You must specify a value for name, email address and message.";
//       exit;
//     }    


//     foreach ($_POST as $value) {
//       if (stripos($value, "Content-Type") !== FALSE) {
//         echo "There was a problem with the information that you entered.";

//         exit;
//       }
//     }

//     if($_POST["address"] != ""){
//       echo "Your form submission has an error.";
//       exit;
//     }


//     $email_body = "";
//     $email_body = $email_body . "Name: " . $name . "<br>";
//     $email_body = $email_body . "Email: " . $email . "<br>";
//     $email_body = $email_body . "Message: " . $message;

//     // TODO: Send Email
//     require_once("inc/phpmailer/class.phpmailer.php");
//     $mail = new PHPMailer(); // defaults to using php "mail()"

//     $mail->SetFrom($email, $name);
//     $address = "dkn5678@gmail.com";
//     $mail->AddAddress($address, "Nikki Keller");

//     $mail->Subject    = "Nikki Keller Web Design Content Form". $name;

//     $mail->MsgHTML($email_body);

//     if(!$mail->Send()) {
//       header("Location: index.php?status=error");
//       exit;
//     } 

//     header("Location: index.php?status=thanks");
//     exit;
// }

  include("inc/header.php");
?>


    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron container">
        <div class = "row">
          <h1 class = "nk col-md-12 col-lg-12 col-sm-12 col-xs-12">Hello! I'm Nikki,</h1>
        </div>
        <div class = "row">
          <p id="in" class = "col-md-12 col-lg-12 col-sm-12 col-xs-12">
            an experienced  <em>computer scientist</em>   whose  <b>passion</b>   is to create unique <img src="images/amp2.png" alt = "and" id = 'amp'>captivating websites. 
          </p>
          
       </div>
      </div>
      <div class = "container">
        <div class = "row ">
          <div class = " main basic col-md-6 col-lg-6 col-sm-12 col-xs-12 pull-left">
            <h1 class = "page-header">The Basics</h1>
            <p class = "para">
              I've been programming for the last 5 years with various different languages but I'm passoinate about creating websites. I really enjoy creating something that a user will be able to interact with over thier various media devices with ease. Currently I am on the east coast but I am relocating to San Diego as soon as I find a job. 
              I have experience in creating both informational sites and e-commerce sites. 
            </p>
          </div>
          <div class = "main skills col-md-5 col-lg-5 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 pull-right ">
           

            <h1 class = "page-header ">The Skills</h1>
            <div class = "row">
              <ul class = "list list1 col-md-4 col-lg-4 col-sm-5 col-xs-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
                <li>HTML/HTML5</li>
                <li>CSS/CSS3</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>Inkscape</li>
                <li>Currently Learning: Ruby on Rails</li>
              </ul>
              <ul class = "list list2 col-md-2 col-lg-2 col-sm-4 col-xs-4 col-lg-offset-1 col-md-offset-1 ">
                <li>jQuery</li>
                <li>Bootstrap</li>
                <li>GIMP</li>
                <li>MySQL</li>
                <li>Git</li>
                <li>SVN</li>
                <li>MySQL</li>
              </ul>
            </div>
          </div>

        </div>
        
        <div class = "row">
          <div class = "contact col-md-6 col-lg-6 col-sm-12 col-xs-12 ">
              <h1 id = "contact" class = "page-header skills">Contact Me</h1>
             <!--  
              <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                <p>Thanks for the email! I&rsquo;ll be in touch shortly!</p>
              <?php }  else if(isset($_GET["status"]) AND $_GET["status"] == "error") { ?>
                <p>
                    Sorry it seems that we've encountered an error while sending your email. Please try again at a 
                    later time or you can contact me at nkellerdesign@gmail.com.
                </p>
              <?php } else { ?>
 -->
            <p class = "para">
              If you would like to hire me  or need more information send me a message and I will get back to you as soon as possible!
            </p>
            <div class = "email">
              <a href="mailto:dkn5678@gmail.com">Send your email here!</a>
            </div>

            <!-- <form role="form" method="post" action="index.php">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" id="focusedInput" name = "name" placeholder="Enter name">
                
                <label for="InputEmail">Email address</label>
                <input type="email" class="form-control" id="InputEmail1 focusedInput" id = "email" name = "email" placeholder="Enter email">
              </div>

              <div class="form-group">
                <label for="textarea">Message</label>
                <textarea class="form-control" id="focusedInput" rows="3" id = "message" name = "message"></textarea>
                <div style = "display:none;">
                  <label for="address">Address</label>
                  <input type="address" class="form-control" name = "address" id="address focusedInput" placeholder="Enter Address">
                  <p>Humans leave this field blank.</p>
                </div>
              </div>
                <button type="submit" class="btn btn-default pull-right">
                  Send
                </button>
              
            </form>

            <?php } ?> -->
          
          </div>
          
          <div class = "social col-md-5 col-lg-5 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 ">
            <ul class ="list list-inline social">
              <li><a href="https://twitter.com/nkellerdesign"><img  class = "socialMedia" src = "images/Twitter.png" alt = "Twitter"/></a></li>
              <!-- <li>
                <a href="#">
                  <img class = "socialMedia"  src = "images/Facebook.png" alt = "Facebook"/>
                </a>
              </li>
              <li class="http://www.linkedin.com/pub/nicole-keller/86/b72/108"><a href="./"><img class = "socialMedia"  src = "images/Linkedin.png" alt = "LinkedIn"/></a></li>
             --></ul>
          </div>
      </div>

    </div> <!-- /container -->
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="js/jquery.fittext.js"></script>
  <script>
    jQuery(".nk").fitText(1.2, {minFontSize:'80px', maxFontSize: '120px'});
    jQuery("#in").fitText(1.2, { minFontSize: '20px', maxFontSize: '30px' })
    // jQuery("#in").fitText();
  </script>
  </body>
</html>