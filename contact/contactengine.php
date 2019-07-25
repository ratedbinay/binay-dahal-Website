<?php

    // CHANGE THE VARIABLES BELOW
    function sendmail()
    {
        $EmailFrom = "yourmail@mail.com";
        $EmailTo = "ratedbinaya@gmail.com";
        $Subject = "Contact Form Submission";

        $Body=$_SESSION['mailbody'];
        
        
        $success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

        // redirect to success page
        // CHANGE THE URL BELOW TO YOUR "THANK YOU" PAGE
        if ($success){
          ?>
          <script type="text/javascript">
																
								window.location.replace("contactthanks.html");
              </script>
              <?php
        }
        else{
          print "<meta http-equiv=\"refresh\" content=\"0;URL=contact/error.html\">";
        }

    }
?>