<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Quote extends Model{
        protected $table = 'quote';
        protected $primaryKey = 'qid';

        protected $allowedFields = [
            'content',
            'ref'
        ];

       
    }