
<nav class="navbar navbar-light bg-light">
    <form class="form-inline">
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp</span>
            </div> 
                <input type="text" class="form-control" placeholder="Search" aria-describedy="basic-addon1">                 
        </div>
    </form>
    <div>
        <a href="<?=ROOT?>/single_class/studentadd/<?=$row->class_id?>?select=true">
        <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add New</button>
        </a>
        
        <a href="<?=ROOT?>/single_class/studentremove/<?=$row->class_id?>?select=true">
        <button class="btn btn-sm btn-danger"><i class="fa fa-minus"></i>Remove </button>
        </a>
 </div>
 </nav> 
    
 <div class = "card-group justify-content-center">
    <?php if(is_array($students)):?>
        <?php foreach($students as $student):?>

         <?php 
          $row = $student->user;
          include(views_path('user')); 
       
        ?>
     <?php endforeach;?>
   <?php else:?>
    <center><h4>No Student  were found in this class</h4></center>
   <?php endif;?>
</div>

