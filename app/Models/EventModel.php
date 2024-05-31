<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class EventModel extends Model{
        protected $table = 'event';
        protected $primaryKey = 'eid';

        protected $allowedFields = [
            'title',
            'des',
            'date',
            'place',
            'img'
        ];

       
    }