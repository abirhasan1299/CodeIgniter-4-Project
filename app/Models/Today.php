<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Today extends Model{
        protected $table = 'dailylearn';
        protected $primaryKey = 'id';

        protected $allowedFields = [
            'text',
            'time'
        ];

       
    }