<?php 

// User Model

class User extends Model
{

    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'password',
        'gender',
        'rank',
        'date',
    ];

    protected $beforeInsert = [
        'make_user_id',
        'make_school_id',
        'hash_password'
    ];

 
   public function validate($DATA)
    { 

        $this->errors = array();

        //check for first name
        if(empty($DATA['firstname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['firstname']))
         {
            $this->errors['firstname'] = "Only letters allows in the First name";
         }
         
        //check for Last name
        if(empty($DATA['lastname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['lastname']))
         {
            $this->errors['lastname'] = "Only letters allows in the Last name";
         }

         
        //check for email
        if(empty($DATA['email']) || !filter_var($DATA['email'],FILTER_VALIDATE_EMAIL))
         {
            $this->errors['email'] = "The Email do not valid";
         }

        //check if email exist
        if($this->where('email',$DATA['email']))
         {
            $this->errors['email'] = "That Email is already in use";
         }

        //check for password
        if(empty($DATA['password']) || $DATA['password'] !== $DATA['password2'])
         {
            $this->errors['password'] = "The password do not match";
         }
         
        //check for password length
        if(strlen($DATA['password']) < 8)
         {
            $this->errors['password'] = "The password must be at least 8 characters long";
         }
         
         //check for gender
         $gender = ['male','female'];        
        if(empty($DATA['gender']) || !in_array($DATA['gender'],$gender))
         {
            $this->errors['gender'] = "Gender is not valid";
         }

         //check for rank
         $ranks = ['student','reception','lecturer','admin','super_admin'];        
        if(empty($DATA['rank']) || !in_array($DATA['rank'], $ranks))
         {
            $this->errors['rank'] = "Rank is not valid";
         }

         if(count($this->errors) == 0)
          {
            return true;
          }
       return false;
    }
   
   public function make_user_id($data)
     {
        //$data['user_id'] = random_string(60);
        $data['user_id'] = strtolower($data['firstname'] . "." . $data['lastname']);

        while($this->where('user_id',$data['user_id']))
        {
         $data['user_id'] .= rand(10,9999);
        }
        return $data;
     }

    public function make_school_id($data)
     { 
        if(isset($_SESSION['USER']->school_id))
        {
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
     }

    public function hash_password($data)
    {
        $data['password']= password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }

    /**private function random_string($lenght)
    {
        $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $text = "";
        for($x = 0; $x < $lenght; $x++) 
         {
            $random = rand(0,60);
            $text .= $array[$random];
         }

        return $text;
    }**/
    

}