<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class User extends Model{
        protected $table = 'user';
        protected $primaryKey = 'uid';

        protected $allowedFields = [
            'first',
            'last',
            'email',
            'pass'
        ];

       
    }