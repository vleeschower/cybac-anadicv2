<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    //PHPMailer
    public function emailsPHPMiller(Request $request)
    {
        return view('web.contacto');
    }

    public function storeEmails(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'mensaje' => 'required|string|max:1000',
        ]);
        
        try {

            //datos requeridos del formulario-contactanos
            $name = htmlspecialchars($request->input('nombre'));
            $email = htmlspecialchars($request->input('email'));
            $phone = htmlspecialchars($request->input('telefono'));
            $message = htmlspecialchars($request->input('mensaje'));
            //Create an instance; passing true enables exceptions 
            $mail = new PHPMailer(true);
            //Server settings SMTP
            $mail->SMTPDebug = 0;                                  //Enable verbose debug output
            $mail->isSMTP();                                       //Send using SMTP
            $mail->Host       = env('MAIL_HOST');                  //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                              //Enable SMTP authentication
            $mail->Username   = env('MAIL_USERNAME');              //SMTP username
            $mail->Password   = env('MAIL_PASSWORD');              //SMTP password
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');            //Enable implicit TLS encryption
            $mail->Port       = env('MAIL_PORT');                  //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
        
            //Recipients
            $mail->setFrom(env('MAIL_FROM_ADDRESS'),env('MAIL_FROM_NAME'));     // Dirección del remitente
            $mail->addAddress(env('MAIL_FROM_ADDRESS'));                        // Añadir un destinatario (tu dirección configurada)
            // $mail->addAddress('ellen@example.com');                          //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            // $mail->Subject = $request->subject; //Here is the subject
            // $mail->Body    = $request->body; //This is the HTML message body <b>in bold!</b>
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->Subject = 'Nuevo mensaje de contacto';
            $mail->Body = "
                <h1>Mensaje de contacto</h1>
                <p><strong>Nombre:</strong> {$request->nombre}</p>
                <p><strong>Teléfono:</strong> {$request->telefono}</p>
                <p><strong>Correo Electrónico:</strong> {$request->email}</p>
                <p><strong>Mensaje:</strong> {$request->mensaje}</p>
            ";

        //     if (! $mail->send()){
        //         return back()->with('error','Email not sent.')->whitErrors($mail->ErrorInfo);
        //     }else{
        //         return back()->with('success','Email has been sent.');
        //     }
        //     // echo 'Message has been sent';
        // } catch (Exception $e) {
        //     // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        //     return back()->with('error','Message cound not be sent.');
        // }
        $mail->send();
            return back()->with('success', 'El mensaje ha sido enviado con éxito');
        } catch (Exception $e) {
            return back()->with('error', 'No se pudo enviar el mensaje. Mailer Error: '.$mail->ErrorInfo);
        }
    }
}