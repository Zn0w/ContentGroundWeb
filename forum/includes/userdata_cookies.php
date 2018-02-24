<?php

function init_user_cookies($user_login, $user_name)
{
	setcookie("user_login", $user_login, time() + (86400 * 30), "/");
	setcookie("user_name", $user_name, time() + (86400 * 30), "/");
}