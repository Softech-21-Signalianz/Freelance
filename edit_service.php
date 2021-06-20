<?php
  //include header.php file
  $title = "Edit Service";
  include('header.php');
?>

<div class="container">
          <div class="card p-3">
            <form >
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control color-light" id="name">
                  
                </div>
                <div class="mb-3">
                    <label for="skills" class="form-label">Skills</label>
                    <input type="text" class="form-control" id="skills">
                    
                  </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="4"></textarea>
                    
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Choose Image</label>
                    <input class="form-control" type="file" id="formFile">
                  </div>
                <button type="submit" class="btn btn-light"> <a href="seller_dashboard.php">Change</a></button>
              </form>
          </div>
        
      </div>

<?php
  // adding footer.php file
   include('footer.php');
?>