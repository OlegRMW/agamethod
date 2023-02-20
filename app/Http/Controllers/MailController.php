<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;  
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    // =============== [ Email ] ===================
    public function email() {
        return view("email");
    }
 
 
    // ========== [ Compose Email ] ================
    public function composeEmail(Request $request) {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions
 
        try {
 
            // Email server settings
            $mail->CharSet = 'utf-8';
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.mail.ru';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'zagudpev@mail.ru';   //  sender username
            $mail->Password = 'RqbvzpirvE1vfRJgJdUL';       // sender password
            $mail->SMTPSecure = 'ssl';                  // encryption - ssl/tls
            $mail->Port = 465;                          // port - 587/465
 
            $mail->setFrom('zagudpev@mail.ru');
            $mail->addAddress($request->emailRecipient);
            // $mail->addCC($request->emailCc);
            // $mail->addBCC($request->emailBcc);
 
            // $mail->addReplyTo('olegdensov@gmail.com', 'Admin'); // sender email, sender name
 
            if(isset($_FILES['emailAttachments'])) {
                for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
                }
            }
 
 
            $mail->isHTML(true);                // Set email content format to HTML
 
            $mail->Subject = 'Запись на вебинар';
            $mail->Body  = $request->name.', '.'вы записаны на вебинар МИР ТАРО.';
 
            // $mail->AltBody = plain text version of email body;
            if(!$mail->send()) {
                echo 'Error';
            }
            
            else {
                echo 'сообщение успешно отправлено';
                return redirect()->route('course');
            }
           
 
        } catch (Exception $e) {
             return back()->with('error','Message could not be sent.');
        }
    }
}
