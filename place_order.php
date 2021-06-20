<?php
  //include header.php file
  $title = "Place Order";
  include('header.php');
?>

<div class="container">
        <div class="card p-3">
          <form>
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control color-light" id="name">
                
              </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" rows="4"></textarea>
                  
                </div>
                <div class="mb-3">
                    <label for="budget" class="form-label">Budget</label>
                    <input type="number" class="form-control color-light" id="budget">
                    
                  </div>
                  <div class="mb-3">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="date" class="form-control color-light" id="deadline">
                    
                  </div>
              <button type="submit" class="btn btn-light">Send Order</button>
            </form>
        </div>
      
    </div>


<?php
  // adding footer.php file
   include('footer.php');
?>