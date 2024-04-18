<?php $this->view('includes/header') ?>

      <div class="container-fluid">
           
      <form method="post"> 
          <div class="p-4 mx-auto shadow rounded" style="margin-top: 50px; width:100%; max-width:310px; ">
            <h3 class="text-center">My School</h3>
            <img src="<?=ROOT?>/assets/logo.jpg" class="border border-primary d-block mx-auto rounded-circle" style="width: 100px;">
            <h3>Login</h3>
            
            <?php  if(count($errors) > 0):?>
               <div class="alert alert-warning alert-dismissible fade show p-1" role ="alert">
                  <strong>Errors:</strong>
                  <?php  foreach(($errors)as $error):?>
                     <br><?=$error?>
                  <?php endforeach ;?>
                  <span type="button" class="close" data-bs-dismiss="alert" arial-label="Close">
                  <span ria-hidden="true">&times;</spam>
                  </span>
               </div>
               <?php endif ;?>
               
             <input class="form-control" value="<?=get_var('email')?>" type="email" name="email" placeholder="Email" autofocus>
             <br>
             <input class="form-control" value="<?=get_var('password')?>" type="password" name="password" placeholder="Password" autofocus>
             <br>
             <button class="btn btn-primary">Login</button>
          </div>
       </form>
     </div>
<?php $this->view('includes/footer') ?>