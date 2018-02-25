<?php

function init_user_cookies($user_login, $user_name)
{
	setcookie("userlogin", $user_login, time() + (86400 * 30), "/");
	setcookie("username", $user_name, time() + (86400 * 30), "/");
}