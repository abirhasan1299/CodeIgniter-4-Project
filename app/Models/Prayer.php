<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class Prayer extends Model{
        protected $table = 'prayer';
        protected $primaryKey = 'sid';

        protected $allowedFields = [
            'date',	
        	'user_id',		
        	'fajr',		
        	'duhr',		
        	'asr',		
        	'magrib',		
        	'esha',		
        	'tahajjud',		
	        'quran',		
	        'hadith',		
	        'bad'
        ];

       
    }