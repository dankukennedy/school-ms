<?php 
// Signup controller

class Signup  extends Controller
{

	function index(){

    $mode = isset($_GET['mode']) ?$_GET['mode'] : '';          
		 $errors = array();

        if(count($_POST) > 0)
		  {
			$user = new User();
			
			if($user->validate($_POST))
			 {
				
				$_POST['date'] = date("Y-m-d H:i:s");
                $redirect = $mode == 'students' ? 'students':'user';
				$user->insert($_POST); 

                $this->redirect( $redirect);

			 } else
			   {
				//errors
				 $errors = $user->errors;
			   }
		  }

		
		 $this->view('signup',[
			'errors'=>$errors,
			'mode'=>$mode,
		]);
	}
}



