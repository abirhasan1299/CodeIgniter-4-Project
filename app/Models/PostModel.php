<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class PostModel extends Model{
        protected $table = 'post';
        protected $primaryKey = 'pid';

        protected $allowedFields = [
            'title',
            'w_sk',
            'des',
            'created_at'
        ];

       
    }