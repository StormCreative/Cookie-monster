<?php
/**
 * Check cookie exists
 * @param bool $redirect - Default TRUE, if FALSE then don't redirect and return BOOL
 */
function checkCookie ( $redirect = TRUE )
{
	if ( !isset ( $_COOKIE[ 'user_auth' ] ) )
	{
		if ( $redirect )
			header ( 'location: /' );
		else
			return FALSE;
	}
	elseif ( isset ( $_COOKIE[ 'user_auth' ] ) )
		return TRUE;
}
	
/**
 * Set the cookie...
 */
function setCookies ()
{
	if ( !!$_POST[ 'accept_cookie' ] )
	{
		setcookie( "user_auth", TRUE );	
		header ( 'location: /' );
	}
}

?>