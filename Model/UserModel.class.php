<?php

namespace Model;
use Think\Model;

class UserModel extends Model {

	protected $_map = array(

		'name' => 'username',
		'password' => 'userpassword',
		'email' => 'useremail'

		);

	

}