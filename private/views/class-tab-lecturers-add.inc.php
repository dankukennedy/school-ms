<form method="post" class="form mx-auto" style="width:100%; max-width:400px;">
    <br><h4>Add Leacture</h4>
    <input autofocus type="text" class="form-control" name="name" placeholder=" Lecturer name">
   <br>
   <a href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=lecturers">
     <button type="button" class="btn btn-danger">Cancel</button>
   </a>
   <button class="btn btn-primary float-end">Search</button>
   <div class="clearfix"></div>
</form>

<div class="container-fluid">
   
<?php if(isset($result) && $results):?>
       <?php foreach($results as $row):?>
        
          <?php include(views_path('user'))?>
  
         <?php endforeach; ?>
       <?php else:?>

        <?php if(count($_POST) > 0 ):?>
        <center><hr><h4> No result ware found <h4> </center>       
       <?php endif; ?>
    <?php endif; ?>
 
</div> 