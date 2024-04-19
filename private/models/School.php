<?php 

// School Model

class School extends Model
{

    protected $allowedColumns = [
        'school',
        'date',
    ];

    protected $beforeInsert = [
        'make_school_id',
        'make_user_id', 
    ];

 
   public function validate($DATA)
    { 

        $this->errors = array();

        //check for first name
        if(empty($DATA['school']) || !preg_match('/^[a-zA-Z]+$/', $DATA['school']))
         {
            $this->errors['school'] = "Only letters allows in the school name";
         }        
        
         if(count($this->errors) == 0)
          {
            return true;
          }
       return false;
    }
   
   public function make_user_id($data)
     {
        $data['user_id'] = random_string(60);
        return $data;
     }

    public function make_school_id($data)
     { 
       $data['school_id'] = random_string(60);
        return $data;
     }


   
}