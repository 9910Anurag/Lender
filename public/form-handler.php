<?php

$sucess = '';
$failed = '';

if(isset($_POST['submit'])){
    $to = '9910anurag@gmail.com';
    $subject='Form Submission';

    $name = $_POST['name'];
    $email = $_POST['email']; 
    $mobile = $_POST['phone'];
    $query = $_POST['enquerry'];


    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";    
    

    $message = "
                <html>
                <head>
                <style>
                  table{
                     border: 1px solid #000;
                  }
                  table tr th,
                  table tr td{
                     border: 1px solid #000;
                  }
                </style>                
                </head>
                <body>
                <p>This email contains Landing Page Form Data</p>
                <table>
                <tr>
                <th>Data</th>
                <th>Value</th>
                </tr>
                <tr>
                <td>First Name</td>
                <td>. $name .</td>
                </tr>
                <tr>
                <td>Email</td>
                <td>. $email .</td>
                </tr>
                <tr>
                <td>Mobile</td>
                <td>. $mobile .</td>
                </tr>
                <tr>
                <td>Query</td>
                <td>. $query .</td>
                </tr>
                </table>
                </body>
                </html>
                ";
    
    $headers .= 'From: <9910anurag@gmail.com>'."\r\n";

    
     if (mail($to, $subject, $message, $headers)) {         
         $sucess = 'Your Message has been sent sucessfuly.';   
     }
     else{
         $failed = 'Failed to send data, please try again.';
         
     }
    
    }

?>