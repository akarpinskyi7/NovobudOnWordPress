<?php

require_once( dirname(__FILE__) . '/../../../wp-load.php' );

if( !empty( $_POST['comment1'] ) || !empty( $_POST['comment2'] ) ) {
	exit;
}

if( empty( $_POST['name'] ) || empty( $_POST['phone'] ) || empty( $_POST['message'] ) ) {
	wp_redirect( add_query_arg( 'status', 'error', site_url( 'kontakti' ) ) );
	exit;
}

$to = get_option('admin_email');
$subject = 'Заявка из Вашего сайта!';

if( !empty( $_POST[ 'subject' ] ) && $_POST[ 'subject' ] ) {
	$subject = $_POST[ 'subject' ];
}


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['mail'];
$message2 = $_POST['message'];
$message = nl2br("Залишена заявка на вашому сайті. \r\n" . "Імя - " . $name . ", \r\nНомер для контакту " . $phone
				. ", \r\nEmail-адреса: " . $email . ", \r\nТекст повідомлення:" . $message2);


$headers = array(
	"From: mySite <no-reply@mydomain.com>",
	"Reply-To: $name <$email>"
);

if ( wp_mail( $to, $subject, $message, $headers ) ) {
	wp_redirect( add_query_arg( 'status', 'success', site_url( 'kontakti' ) ) );
	exit;
}

wp_redirect( add_query_arg( 'status', 'error-2', site_url( 'kontakti' ) ) );
exit;

//if( isset( $_POST['name'] ) && $_POST['name'] && !empty( $_POST['mail'] ) && $_POST['mail'] && $_POST['message'] ) {
//	echo 'hello';
//}
?>