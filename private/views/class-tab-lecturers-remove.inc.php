<form method="post" class="form mx-auto" style="width:100%; max-width:400px;">
    <br><h4>Remove Leacture</h4>

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

    <input value="<?=get_var('name')?>" autofocus type="text" class="form-control" name="name" placeholder=" Lecturer name">
   <br>
   <a href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=lecturers">
     <button type="button" class="btn btn-danger">Cancel</button>
   </a>
   <button class="btn btn-primary float-end" name="search">Search</button>
   <div class="clearfix"></div>
</form>
<br>

<div class="card-group justify-content-center">
   <form method ="post">  

      <?php if(isset($results) && $results):?>
      
            <?php foreach($results as $row):?>            
              <?php include(views_path('user'))?>
              <?php endforeach; ?>

          <?php else:?>

            <?php if(count($_POST) > 0  ):?>
            <center><hr><h4> No result ware found <h4> </center>       
          <?php endif; ?>
        <?php endif; ?>
  <form>
</div> 