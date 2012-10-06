## Homework 5.1: Starting to understand more complex French

* Login to Github and approve my pull request to get the file `homework-5.1.md` in your `assignments` repository.
* Log into Cloud9 and use `git pull` to get the file into your workspace.
 
* Find [the Wordpress project on Github][wordpress], fork it into your own account, and clone it into a Cloud9 workspace.
* Open your Wordpress workspace and find a file that has some branching _if-then-else_ logic; look for some juicy conditionals and guard clauses.
* Copy-paste your examples into `homework-5.1.md` (this file) and attempt to identify the conditions with comments like so:
> USERNAME/Wordpress/path/to/file.php:00
> ```php
>   if ( $mom_says == 'yes' ) // if mom says yes
> ```

* Save your file locally, add and commit it with git, and push your changes to your Github account.
* **Bonus points**: open a pull request back to the original repo with your work to date.

[wordpress]:https://github.com/Wordpress/Wordpress/

sixsigmadan/Wordpress/xmlrpc.php:20
```php
if ( !isset( $HTTP_RAW_POST_DATA ) ) { //if the isset function is false set the HTTP_RAW_POST_DATA to whatever the file_get_contents function returns
    $HTTP_RAW_POST_DATA = file_get_contents( 'php://input' );
```
sixsigmadan/Wordpress/xmlrpc.php:25
```php
if ( isset($HTTP_RAW_POST_DATA) ) //if the isset function is true, set the HTTP_RAW_POST_DATA to whatever the trim function returns
    $HTTP_RAW_POST_DATA = trim($HTTP_RAW_POST_DATA);

```
sixsigmadan/Wordpress/wp-login.php:188
```php
    if ( empty( $_POST['user_login'] ) ) { //if the user login in empty, display the string "ERROR: Enter a username or e-mail address"
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