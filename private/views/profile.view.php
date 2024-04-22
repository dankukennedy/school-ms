<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

	  <div class="container-fluid p-4 shadow mx-auto" style=" max-width:1000px">
     <?php $this->view('includes/crumbs',['crumbs'=>$crumbs]) ?>
     
         <?php if($row):?>

            <?php  
                $image = get_image($row->image,$row->gender);
               
              ?>

         <div class="row">
            <div class="col-sm-4 col-md-3">
                <img src= "<?=$image?>" class="border border-primary d-block mx-auto rounded-circle" style="width:150px;">
                <h3 class="text-center"><?=esc($row->firstname)?> <?=esc($row->lastname)?></h3>
            </div>
             <div class="col-sm-8 col-md-9 bg-light p-2 ">
                <table class="table table-hover table-striped">
                    <tr><th>First Name:</th><td><?=ucwords(esc($row->firstname))?></td></tr>
                    <tr><th>Last Name:</th><td><?=ucwords(esc($row->lastname))?></td></tr>
                    <tr><th>Email:</th><td><?=esc($row->email)?></td></tr>
                    <tr><th>Gender:</th><td><?=ucwords(esc($row->gender))?></td></tr>
                    <tr><th>Rank:</th><td><?=ucwords(esc(str_replace("_"," ", $row->rank)))?></td></tr>
                    <tr><th>Date Created:</th><td><?=get_date($row->date)?></td></tr>
                    
                </table>
            </div>
         </div>

          <br>
         <div class="container-fluid">
              <ul class="nav nav-tabs">
                 <li class="nav-item">
                    <a class="nav-link active" href="#">Basic Info</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Classes</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Test</a>
                 </li>
                        
              </ul>
              <nav class="navbar navbar-light bg-light">
                    <form class="form-inline">
                        <div class="input-group">
                          <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp</span>
                          </div> 
                             <input type="text" class="form-control" placeholder="Search" aria-describedy="basic-addon1">                 
                        </div>
                    </form>

                 </nav>
         </div>
         <?php else: ?>
            <center><h4> That Profile was not found</h4></center> 
         <?php endif; ?>
     </div>
     
    

<?php $this->view('includes/footer') ?>