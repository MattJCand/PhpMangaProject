<?php
    
  // echo '<pre>';
  //   print_r($_POST);
  // echo '</pre>';

  extract($_POST);

  if(isset($nom) && isset($prenom) && isset($email) && isset($sujet) ){

      if(!empty($nom) || !empty($prenom)  || !empty($email)  || !empty($sujet)){
            /*A MODIFIER selon le souhait du client*/

            // $destinataire ='lynce.972@gmail.com';
            $destinataire ='feinglong@gmail.com';
        
            /*-------------------------------------*/


            $nom = htmlentities($nom);
            $prenom = htmlentities($prenom);
            $email= htmlentities($email);
            $message = htmlentities($message);


            $expediteur.=$nom;
            $expediteur.=$prenom;

            // $sujet= 'Planète Manga | Nouveau Message';
            $sujet='Planète Manga | '.htmlentities($sujet);


            $message = '
             <html>
              <head>
               <title></title>
              </head>
              <body>
              <p>'.$message.'</p>
              </body>
             </html>
             ';



        $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME OK!
        $headers .= 'Content-type: text/html; charset=UTF-8'."\r\n"; // l'en-tete Content-type pour le format HTML< OK!
        $headers .= 'Reply-To: <'.$email.">\n"; // Mail de reponse OK!!
        // $headers .= 'From: <'.$email.'>'."\n"; // Expediteur
        $headers .= 'From: '.$email."\n"; // Expediteur

        if(mail($destinataire,$sujet,$message,$headers))
            {

                
                 echo "<strong style=\"color:#3c763d;\">Votre message a bien été envoyé.</strong>"; 


        }
        else
        {
                echo "<strong style=\"color:#ff0000;\">Une erreur c'est produite lors de l'envoie du message.</strong>";

        }
    }
    else
    {
              echo "<strong style=\"color:#ff0000;\">Un des champs est vide.</strong>";

    }

  }
  else{
      echo "<strong style=\"color:#ff0000;\">L'email que vous avez envoyé est invalide.</strong>";
  }
    


    
    


    //             /*A MODIFIER selon le souhait du client*/

    //             $destinataire .='feinglong@gmail.com';
            
    //             /*-------------------------------------*/


    //             $name = htmlentities($nom);
    //             $firstname = htmlentities($prenom);
    //             $mail= htmlentities($email);
    //             $message = htmlentities($message);




    //             // $sujet= 'Planète Manga | Nouveau Message';
    //             $sujet= htmlentities($sujet)


    //             $message = '
    //              <html>
    //               <head>
    //                <title></title>
    //               </head>
    //               <body>
    //               <p>
    //                 <b>Nom :</b> '.$name.'<br>
    //                 <b>Prénom :</b> '.$firstname.'<br>
    //                 <b>Email :</b> '.$mail.'<br><br>
    //               </p>
    //               <p>'.$message.'<br>
    //               </p>
    //               </body>
    //              </html>
    //              ';



    //         $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME OK!
    //         $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML< OK!
    //         $headers .= 'Reply-To: <'.$mail.">\n"; // Mail de reponse OK!!
    //         $headers .= 'From: <'.$mail.'>'."\n"; // Expediteur

    //             if(mail($destinataire,$sujet,$message,$headers))
    //                 {

                        
    //                      echo "<strong style=\"color:#3c763d;\">Votre message a bien été envoyé.</strong>"; 


    //             }
    //             else{
    //                     echo "<strong style=\"color:#ff0000;\">Une erreur c'est produite lors de l'envoie du message.</strong>";

    //                 }



    // }
    // else{
    //     echo "<strong style=\"color:#ff0000;\">L'email que vous avez envoyé est invalide.</strong>";
    // }
    



?>
