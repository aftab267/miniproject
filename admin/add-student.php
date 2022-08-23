<h2 class="text-primary"><i class="fa fa-user-plus"></i> Add Student <small>Add New Student</small></h2>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li><a href="index.php?page=dashboard"> Dashboard / </a></li>
          <li class="breadcrumb-item active fa fa-user-plus" aria-current="page"> Add Student</li>
        </ol>

<div class="row">
  <div class="col-sm-6">
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Student Name</label>
        <input class="form-control" type="text" name="name" placeholder="student Name" id="name">        
      </div>
      <div class="form-group">
        <label for="roll">Roll</label>
        <input class="form-control" type="text" name="roll" placeholder="Roll" id="roll" pattern="[0-9]{6}">        
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input class="form-control" type="text" name="city" placeholder="City" id="city">        
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input class="form-control" type="text" name="phone" placeholder="01*********" id="phone" pattern="[]">        
      </div>
      <div class="form-group">
        <label for="class">Class</label>
        <select class="form-control"name="class" id="class">
         <option value="">Select</option>
         <option value="1st">1st</option>
         <option value="2nd">2nd</option>
         <option value="3rd">3rd</option>
         <option value="4th">4th</option>
        </select>        
      </div>
      <div class="form-group">
        <label for="photo">Photo</label>
        <input class="form-control" type="file" name="photo"  id="photo">        
      </div>
      <div class="form-group">
        
        <input class="btn btn-primary " type="submit" name="submit"  value="Add Student">        
      </div>
      
    </form>
    
  </div>
  
</div>