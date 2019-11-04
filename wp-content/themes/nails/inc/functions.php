<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if( !function_exists('sanitize_text_field') ) {
    function sanitize_text_field( $field ) {
        return strip_tags( trim( $field ) );
    }
}

if( !function_exists('check_order_field') ) {
    function check_order_fields( $fields) {

        $response   = [];
        $regex      = [
            'first_name' => '/^[a-zA-Zа-яА-Я]+$/ui',
            'phone' => '/\+?([0-9]{2})-?([0-9]{3})-?([0-9]{6,7})/',
        ];
        $errors     = [
            'empty' => 'Поле обязательно для заполнения!',
            'empty_services' => 'Выберите услугу!',
            'regex' => 'Поле не корректно заполнено!',
        ];

        foreach ( $fields as $n => $v ) {
            if ( empty( $v ) ) {
                $response['errors'][$n] = ( isset($errors['empty_' . $n]) ) ? $errors['empty_' . $n] : $errors['empty'];
            } elseif ( isset($regex[$n]) && !preg_match($regex[$n], $v) ) {
                $response['errors'][$n] = $errors['regex'];
            };
        }

        return $response;

    }
}

if( !function_exists('send_order_smpt') ) {
    function send_order_smpt( $html ) {

        $mail = new PHPMailer;

        //$mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Set mailer to use SMTP
        $mail->CharSet      = 'UTF-8';
        $mail->Host         = 'mail.new.malinna.kiev.ua';
        $mail->SMTPAuth     = true;
        $mail->Username     = 'admin@new.malinna.kiev.ua';
        $mail->Password     = '123456789';
        $mail->SMTPSecure   = 'tls';
        $mail->Port         = 587;

        //Recipients
        $mail->setFrom('admin@new.malinna.kiev.ua', 'Powersite');
        $mail->addAddress('Malina150685@gmail.com');
        $mail->addReplyTo('info@new.malinna.kiev.ua', 'Information');

        // Attachments
        // $mail->addAttachment('intro.png');    // Optional name

        // Content
        //error_log("Здравствуйте, меня зовут -" . $first_name . "Телефон -" . $phone, 0);
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Новая запись на маникюр!';
        $mail->Body = $html;

        $response = $mail->send();

        return $response;
    }
}

if( !function_exists('send_order_mail') ) {
    function send_order_mail( $html ) {

        /* получатели */
        $to= "Admin <admin@new.malinna.kiev.ua>" . ", " ; //обратите внимание на запятую
        $to .= "Yurasik <yurasikabc@gmail.com>";

        /* тема/subject */
        $subject = "Новая запись на маникюр!";

        /* сообщение */
        $message = '<html><head><title>Новая запись на маникюр!</title></head><body>';
        $message .= $html;
        $message .= '</body></html>';

        /* Для отправки HTML-почты вы можете установить шапку Content-type. */
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        /* дополнительные шапки */
        $headers .= "From: malinna.kiev.ua <admin@new.malinna.kiev.ua>\r\n";
        //$headers .= "Cc: birthdayarchive@example.com\r\n";
        //$headers .= "Bcc: birthdaycheck@example.com\r\n";

        /* и теперь отправим из */
        $response = mail($to, $subject, $message, $headers);

        return $response;
    }
}

add_filter( 'wpcf7_autop_or_not', '__return_false' );

add_filter( 'wpcf7_services_field_post_data', 'custom_wpcf7_services_field_post_data', 10, 4);
function custom_wpcf7_services_field_post_data( $field_post_data, $posts, $tag, $args ) {

    if ( $tag->name === 'services' ) {
        foreach ( $field_post_data['ids'] as $k => $id ) {
            $price = get_field('service_price', $id);
            $field_post_data['prices'][$k] = $price;
        }
    }

    return $field_post_data;

}
