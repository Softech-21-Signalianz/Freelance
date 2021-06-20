<?php
  //include header.php file
  $title = "Submit Order";
  include('header.php');
?>

<div class="container">
        <div class="card p-3">
          <form>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Upload task files</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
              </div>

              <h1 class="text-center">Rate Buyer!!!</h1>
        <div class="rate d-flex justify-content-center">
          <input type="radio" id="star5" name="rate" value="5" />
          <label for="star5" title="text">5 stars</label>
          <input type="radio" id="star4" name="rate" value="4" />
          <label for="star4" title="text">4 stars</label>
          <input type="radio" id="star3" name="rate" value="3" />
          <label for="star3" title="text">3 stars</label>
          <input type="radio" id="star2" name="rate" value="2" />
          <label for="star2" title="text">2 stars</label>
          <input type="radio" id="star1" name="rate" value="1" />
          <label for="star1" title="text">1 star</label>
        </div>
        <br><br>
                  
              <button type="submit" class="btn btn-light">Send Order</button>
            </form>
        </div>
      
    </div>
</div>


<?php
  // adding footer.php file
   include('footer.php');
?>