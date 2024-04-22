<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

	  <div class="container-fluid p-4 shadow mx-auto" style=" max-width:1000px">
     <?php $this->view('includes/crumbs',['crumbs'=>$crumbs]) ?>
     
         <?php if($row):?>

         <div class="row">
            <center><h4><?=ucwords(esc($row->class))?><h4></center>
                <table class="table table-hover table-striped">
                    <tr><th>Class Name:</th><td><?=ucwords(esc($row->class))?></td></tr>  
                    <tr><th>Created By:</th><td><?=ucwords(esc($row->user->firstname))?> <?=ucwords(esc($row->user->lastname))?></td></tr>  
                    <tr><th>Date Created:</th><td><?=get_date($row->date)?></td></tr>
                    
                </table>

         </div>

          <br>

              <ul class="nav nav-tabs">
                 <li class="nav-item">
                    <a class="nav-link <?=$page_tab=='lecturers'?'active':'';?> " href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=lecturers">Leactures</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link <?=$page_tab=='students'?'active':'';?> " href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=students">Students</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link <?=$page_tab=='tests'?'active':'';?> " href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=tests">Tests</a>
                 </li>                        
              </ul>

               
           <?php
             
             switch ($page_tab){
               case 'lecturers':
                  //
                  $this->view('class-tab-lecturers');
                  break;
                  
               case 'students':
                  //
                  $this->view('class-tab-students');
                  break;
               
               case 'tests':
                  //
                  $this->view('class-tab-tests');
                  break;
               
               default:
               //

               break;
             }


          ?>
         <?php else: ?>
            <center><h4> That Class was not found</h4></center> 
         <?php endif; ?>
     </div>
     
    

<?php $this->view('includes/footer') ?>