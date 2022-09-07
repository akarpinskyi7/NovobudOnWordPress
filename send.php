<?php

require_once( dirname(__FILE__) . '/../../../wp-load.php' );

if( !empty( $_POST['comment1'] ) || !empty( $_POST['comment2'] ) ) {
	exit;
}

if( empty( $_POST['name'] ) || empty( $_POST['phone'] ) ) {
	wp_redirect( add_query_arg( 'status', 'error', 'http://novobud/' ) );
	exit;
}

$to = get_option('admin_email');
$subject = 'Заявка из Вашего сайта!';

if( !empty( $_POST[ 'subject' ] ) && $_POST[ 'subject' ] ) {
	$subject = $_POST[ 'subject' ];
}


$name = $_POST['name'];
$phone = $_POST['phone'];
$message = nl2br("Залишена заявка на вашому сайті. \r\n" . "Імя - " . $name . ", \r\nНомер для контакту " . $phone);
$email = 'example@email.com';

$headers = array(
	"From: mySite <no-reply@mydomain.com>",
	"Reply-To: $name <$email>"
);

if ( wp_mail( $to, $subject, $message, $headers ) ) {
	wp_redirect( add_query_arg( 'status', 'success', 'http://novobud/' ) );
	exit;
}

wp_redirect( add_query_arg( 'status', 'error-2', 'http://novobud/' ) );
exit;

//if( isset( $_POST['name'] ) && $_POST['name'] && !empty( $_POST['mail'] ) && $_POST['mail'] && $_POST['message'] ) {
//	echo 'hello';
//}
?>