<?php
/**
 * The Template for New Booking Email (Confirmation by User) content
 *
 * Email that will be sent to customer after booking is placed.
 *
 * @version 2.0.0
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php echo esc_html( sprintf( __( 'Dear %1$s %2$s, we received your request for reservation.', 'motopress-hotel-booking' ), '%customer_first_name%', '%customer_last_name%' ) ); ?>
<br/><br/>
<?php esc_html_e( 'Click the link below to confirm your booking.', 'motopress-hotel-booking' ); ?>
<br/><br/>
<a href="%user_confirm_link%"> <?php esc_html_e( 'Confirm', 'motopress-hotel-booking' ); ?> </a>
<br/>
<small><?php esc_html_e( 'Note: link expires on', 'motopress-hotel-booking' ); ?> %user_confirm_link_expire% <?php esc_html_e( 'UTC', 'motopress-hotel-booking' ); ?></small>
<br/><br/>
<?php esc_html_e( 'If you did not place this booking, please ignore this email.', 'motopress-hotel-booking' ); ?>
<br/>
<h4><?php esc_html_e( 'Details of booking', 'motopress-hotel-booking' ); ?></h4>
<?php echo esc_html( sprintf( __( 'ID: #%s', 'motopress-hotel-booking' ), '%booking_id%' ) ); ?>
<br/>
<?php echo esc_html( sprintf( __( 'Check-in: %1$s, from %2$s', 'motopress-hotel-booking' ), '%check_in_date%', '%check_in_time%' ) ); ?>
<br/>
<?php echo esc_html( sprintf( __( 'Check-out: %1$s, until %2$s', 'motopress-hotel-booking' ), '%check_out_date%', '%check_out_time%' ) ); ?>
<br/>
%reserved_rooms_details%
<h4><?php esc_html_e( 'Total Price:', 'motopress-hotel-booking' ); ?></h4>
%booking_total_price%
<br/>
<h4><?php esc_html_e( 'Customer Information', 'motopress-hotel-booking' ); ?></h4>
<?php echo esc_html( sprintf( __( 'Name: %1$s %2$s', 'motopress-hotel-booking' ), '%customer_first_name%', '%customer_last_name%' ) ); ?>
<br/>
<?php echo esc_html( sprintf( __( 'Email: %s', 'motopress-hotel-booking' ), '%customer_email%' ) ); ?>
<br/>
<?php echo esc_html( sprintf( __( 'Phone: %s', 'motopress-hotel-booking' ), '%customer_phone%' ) ); ?>
<br/>
<?php echo esc_html( sprintf( __( 'Note: %s', 'motopress-hotel-booking' ), '%customer_note%' ) ); ?>
<br/><br/>
<?php esc_html_e( 'Thank you!', 'motopress-hotel-booking' ); ?>
