<?php
require_once '../functions.php';

if ( isset($_POST['action']) && isset($_POST['type']) && $_POST['type'] === 'ajax' ) {

    switch ( $_POST['action'] ):
        case 'order':

            $data = [
                'first_name'    => sanitize_text_field( $_POST['first_name'] ),
                'phone'         => sanitize_text_field( $_POST['phone'] ),
                'services'      => (isset($_POST['services'])) ? $_POST['services'] : [],
            ];

            $response = check_order_fields($data);

            if ( empty( $response['errors' ] ) ) {
                $html = "<h1>Здравствуйте, меня зовут -" . $data['first_name'] . "Телефон -" . $data['phone'] . "</h1>";
                $html .= "<h3>Хочу заказать следующие услуги:</h3>";
                $html .= "<ul>";
                if ( $data['services'] ) {
                    foreach ($data['services'] as $service) {
                        $html .= "<li>" . sanitize_text_field($service) . "</li>";
                    }
                }
                $html .= "</ul>";

                $response = send_order_smpt($html);
            }

            echo json_encode($response);
            exit;

        break;
    endswitch;

}
