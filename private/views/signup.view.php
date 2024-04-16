<?php $this->view('includes/header') ?>

      <div class="container-fluid">
        
          <div class="p-4 mx-auto shadow rounded" style="margin-top: 50px; width:100%; max-width:310px; ">
            <h3 class="text-center">My School</h3>
            <img src="<?=ROOT?>/assets/logo.jpg" class="border border-primary d-block mx-auto rounded-circle" style="width: 100px;">
            <h3>Add User</h3>
             <input class="my-2 form-control" type="First Name" name="firstname" placeholder="first name"> 
             <input class="my-2 form-control" type="lastname" name="lastname" placeholder="Last Name"> 
             <input class="my-2 form-control" type="email" name="email" placeholder="Email">    

             <select class="my-2 form-control">
                <option>..Select a Gender</option>
                <option>Male</option>
                <option>Female</option>
             </select>   
             <select class="my-2 form-control">
                <option value="">..Select a Rank</option>
                <option value="student">Student</option>
                <option value="reception">Reception</option>
                <option value="lecturer">Lecturer</option>
                <option value="admin">Admin</option>
                <option value="super_admin">Super Admin</option>
             </select>         
             <input class="my-2 form-control" type="password" name="text" placeholder="Password" >
             <input class="my-2 form-control" type="text" name="password2" placeholder="Retype Password" >
             <br>
             <button class="btn btn-primary float-end">Add User</button>
             <button class="btn btn-danger text-white">Cancel</button>
          </div>
     </div>
<?php $this->view('includes/footer') ?>