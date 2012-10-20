sixsigmadan/Wordpress/wp-cron.php:30
```php
function _get_cron_lock() {
    global $_wp_using_ext_object_cache, $wpdb;

    $value = 0;
    if ( $_wp_using_ext_object_cache ) {
		// Skip local cache and force refetch of doing_cron transient in case
		// another processs updated the cache
		$value = wp_cache_get( 'doing_cron', 'transient', true );
	} else {
		$row = $wpdb->get_row( $wpdb->prepare( "SELECT option_value FROM $wpdb->options WHERE option_name = %s LIMIT 1", '_transient_doing_cron' ) );
		if ( is_object( $row ) )
			$value = $row->option_value;
	}
```
Function Name: _get_cron_lock
Varibles: none
Return: nune

sixsigmadan/Wordpress/wp-login.php:183
```php
function retrieve_password() {
    global $wpdb, $current_site;

	$errors = new WP_Error();

	if ( empty( $_POST['user_login'] ) ) {
		$errors->add('empty_username', __('<strong>ERROR</strong>: Enter a username or e-mail address.'));
	} else if ( strpos( $_POST['user_login'], '@' ) ) {
		$user_data = get_user_by( 'email', trim( $_POST['user_login'] ) );
		if ( empty( $user_data ) )
			$errors->add('invalid_email', __('<strong>ERROR</strong>: There is no user registered with that email address.'));
	} else {
		$login = trim($_POST['user_login']);
		$user_data = get_user_by('login', $login);
	}
```
function name: retrieve_password
variables: none
return: none

sixsigmadan/Wordpress/wp-login.php:265
```php
function check_password_reset_key($key, $login) {
    global $wpdb;

	$key = preg_replace('/[^a-z0-9]/i', '', $key);

	if ( empty( $key ) || !is_string( $key ) )
		return new WP_Error('invalid_key', __('Invalid key'));

	if ( empty($login) || !is_string($login) )
		return new WP_Error('invalid_key', __('Invalid key'));

	$user = $wpdb->get_row($wpdb->prepare("SELECT * FROM $wpdb->users WHERE user_activation_key = %s AND user_login = %s", $key, $login));

	if ( empty( $user ) )
		return new WP_Error('invalid_key', __('Invalid key'));

	return $user;
}
```

function name: check_password_reset_key
variables: key, login
return: , WP_Error function, $user

sixsigmadan/Wordpress/wp-login.php:290
```php
function reset_password($user, $new_pass) {
    do_action('password_reset', $user, $new_pass);

	wp_set_password($new_pass, $user->ID);

	wp_password_change_notification($user);
}
```
function name: reset_password
variables:user, new_pass
return: none


