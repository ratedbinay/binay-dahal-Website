<?php     
                    function emailsend()
                    {   
                      $to_email = 'ratedbinaya@gmail.com';
                      $subject = 'Hire me from Website';
                      $message = 'This mail is sent using the PHP mail function';
                      $headers = 'Content-Type: text/html; charset=UTF-8\r\n' ;
                      mail($to_email,$subject,$message,$headers);

                      if(mail($to_email, $subject, $message)){
                        echo 'Your mail has been sent successfully.';
                    } else{
                        echo 'Unable to send email. Please try again.';
                    }
                }
?>