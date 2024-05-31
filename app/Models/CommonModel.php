<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class CommonModel extends Model{
        protected $table = 'writer';
        protected $primaryKey = 'id';

        protected $allowedFields = [
            'name',
            'edu',
            'nat',
            'about',
            'img',
            'wsk'
        ];

       
    }