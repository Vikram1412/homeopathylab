<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Potential client of kratiTech site.
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-info" type="button">search</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Enquiry</th>
            <th >Training type</th>
            <th>Training P </th>
             <th>Action </th>
          </tr>
        </thead>
         <tbody>

    <?php

    $sql="SELECT * FROM potential_client";
    $run=mysqli_query($con,$sql);
 
    while ($data=mysqli_fetch_assoc($run)) {
 
   ?>
       
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td><?php  echo$data['fname'];   ?></td>
           
            <td><span class="text-ellipsis"><?php  echo$data['email'];   ?></span></td>
             <td><span class="text-ellipsis"><?php  echo$data['enquiry'];   ?></span></td>
              <td><span class="text-ellipsis"><?php  echo$data['training_type'];   ?></span></td>
               <td><span class="text-ellipsis"><?php  echo$data['training_period'];   ?></span></td>

            <td>
              <a href="" class="btn btn-info  btn-sm " role="button">EDI</a>
             <a class="btn btn-danger btn-sm" 
               href="delete.php?id=<?php echo$data['id']?>"  
               onclick="return confirm('Are You delete data');" role="button">DEL</a>
            </td>
          </tr>
          
          <?php }  ?>
       
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
  <div class="row">
    
    <div class="col-sm-5 text-center">
      <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
    </div>
    <div class="col-sm-7 text-right text-center-xs">                
      <ul class="pagination pagination-sm m-t-none m-b-none">
        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
        <li><a href="">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
      </ul>
    </div>
  </div>
</footer>
  </div>
</div>