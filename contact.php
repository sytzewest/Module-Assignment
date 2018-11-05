<?php
 if (isset($_POST['submit'])) {

                    if (
                        !empty($_POST['name']) &&
                        !empty($_POST['subject']) &&
                        !empty($_POST['message']) &&
                        !empty($_POST['email'])) {

                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];
                       

                    
                        echo "Thanks for your message. We will contact you soon.";
                        
                        
                     else {
                        echo "please fill in all the boxes";
                    }
                }
?>

