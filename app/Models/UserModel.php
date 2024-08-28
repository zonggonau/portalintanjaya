<?php

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];

    public function get_user($username, $password)
    {
        $user = $this->where('username', $username)
            ->where('password', md5($password))
            ->first();

        return $user;
    }
}
