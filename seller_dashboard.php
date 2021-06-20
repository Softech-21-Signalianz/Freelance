<?php
  //include header.php file
  $title = "Seller Dashboard";
  include('header.php');
?>


    <!-- active services -->
    <div class="container-flex px-5 services py-3">
        <div class="card shadow-sm p-5 mb-5 bg-white rounded">
                <div class="container-fluid">
                    <div class="row mt-sm-4 mt-md-0">
                        <div class="col-sm-12 col-md-4">
                            <div class="p-4">
                                <h3 class="mb-4">Orders Completed</h3>
                                <ul>
                                    <li><i class="far fa-check-circle px-3"></i>Name 1 </li>
                                    <li><i class="far fa-check-circle px-3"></i>Name 1 </li>
                                    <li><i class="far fa-check-circle px-3"></i>Name 1 </li>
                                </ul>
                                
                            </div>
                        </div>
                        <!-- can add in class  text-sm-center text-md-left-->
                        <div class="col-sm-12 col-md-8">
                            <div class="container p-4">
                                <h3 class="mb-4">Active Services</h3>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 services">
                                        <div class="card mb-4">
                                            <img class="card-img-top" src="Images/web dev.png" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Web Development</h5>
                                                <p class="card-text">
                                                    <span>Skills: HTML, CSS5, JS</span><br>
                                                    <span>
                                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime voluptas quo eum fugit, pariatur esse impedit? Iure, et sint nam voluptas provident illo, quaerat laudantium a debitis beatae placeat omnis.</span>
                                                </p>
                                                <a href="edit_service.php" class="btn btn-light stretched-link">Edit</a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-sm-12 col-md-6">
                                        <div class="card mb-4">
                                            <img class="card-img-top" src="Images/AI.jpeg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Artifical Intellegence</h5>
                                                <p class="card-text">
                                                    <span>Skills: data mining, regressin algos</span><br>
                                                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime voluptas quo eum fugit, pariatur esse impedit? Iure, et sint nam voluptas provident illo, quaerat laudantium a debitis beatae placeat omnis.</span>
                                                </p>
                                                <a href="edit_service.php" class="btn btn-light stretched-link">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="card mb-4">
                                            <img class="card-img-top" src="Images/Comuter Networking.jpeg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Computer Networking</h5>
                                                <p class="card-text">
                                                    <span>Skills: routing</span><br>
                                                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime voluptas quo eum fugit, pariatur esse impedit? Iure, et sint nam voluptas provident illo, quaerat laudantium a debitis beatae placeat omnis.</span>
                                                </p>
                                                <a href="edit_service.php" class="btn btn-light stretched-link">Edit</a>
                                            </div>
                                        </div>
                                    </div>
    
                                    
                                </div>

                                <button type="submit" class="btn btn-light float-end"><a href="edit_service.php" class = "text-dark">Add Service</a></button>
    
                            </div>
                            
                        </div>
                    </div>
    
                    
    
                </div>
          </div>
    </div>
    
    <!-- active services -->

    <!-- orders -->
    <div class="container-flex mx-5">
      <div class="row">
        <div class="col-lg-6">
          <div class="card shadow-sm p-5 mb-5 bg-white rounded">
            <h4 class="px-3 mb-5"><i class="fas fa-tasks px-3"></i> Orders In Progress</h4>
            <div class="table-responsive">
                <table class="table align-middle">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Description</th>
                      <th scope="col">Budget</th>
                      <th scope="col">Time Left</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr >
                      <td><span class="fw-bold text-center">Ayesha Saleem</span></td>
                      <td><span class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda vel incidunt fugiat sit, rerum beatae sed rem architecto aliquid velit deleniti asperiores molestiae nostrum amet! Harum, asperiores facere? Id, voluptas?</span></td>
                      <td><span class="text-center">$ 1500</span></td>
                      <td><span class="text-center">2 days</span></td>
                    </tr>
                    <tr >
                        <td><span class="fw-bold text-center">Ayesha Saleem</span></td>
                        <td><span class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda vel incidunt fugiat sit, rerum beatae sed rem architecto aliquid velit deleniti asperiores molestiae nostrum amet! Harum, asperiores facere? Id, voluptas?</span></td>
                        <td><span class="text-center">$ 1500</span></td>
                        <td><span class="text-center">2 days</span></td>
                      </tr>
                      <tr >
                        <td><span class="fw-bold text-center">Ayesha Saleem</span></td>
                        <td><span class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda vel incidunt fugiat sit, rerum beatae sed rem architecto aliquid velit deleniti asperiores molestiae nostrum amet! Harum, asperiores facere? Id, voluptas?</span></td>
                        <td><span class="text-center">$ 1500</span></td>
                        <td><span class="text-center">2 days</span></td>
                      </tr>
                      <tr >
                        <td><span class="fw-bold text-center">Ayesha Saleem</span></td>
                        <td><span class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda vel incidunt fugiat sit, rerum beatae sed rem architecto aliquid velit deleniti asperiores molestiae nostrum amet! Harum, asperiores facere? Id, voluptas?</span></td>
                        <td><span class="text-center">$ 1500</span></td>
                        <td><span class="text-center">2 days</span></td>
                      </tr>
                      <tr >
                        <td><span class="fw-bold text-center">Ayesha Saleem</span></td>
                        <td><span class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda vel incidunt fugiat sit, rerum beatae sed rem architecto aliquid velit deleniti asperiores molestiae nostrum amet! Harum, asperiores facere? Id, voluptas?</span></td>
                        <td><span class="text-center">$ 1500</span></td>
                        <td><span class="text-center">2 days</span></td>
                      </tr>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
          
        <div class="col-lg-6">
            <div class="card shadow-sm p-5 mb-5 bg-white rounded">
              <h4 class="px-3 mb-5"> <i class="fas fa-question px-3"></i>Orders Requests</h4>
              <div class="table-responsive">
                  <table class="table align-middle">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Budget</th>
                        <th scope="col">Deadline</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr >
                        <td><span class="fw-bold text-center">Ayesha Saleem</span></td>
                        <td><span class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda vel incidunt fugiat sit, rerum beatae sed rem architecto aliquid velit deleniti asperiores molestiae nostrum amet! Harum, asperiores facere? Id, voluptas?</span></td>
                        <td><span class="text-center">$ 1500</span></td>
                        <td><span class="text-center">19-06-21</span></td>
                        <td><button type="submit" class="btn btn-light">Accept Offer</button></td>
                      </tr>
                      <tr >
                          <td><span class="fw-bold text-center">Ayesha Saleem</span></td>
                          <td><span class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda vel incidunt fugiat sit, rerum beatae sed rem architecto aliquid velit deleniti asperiores molestiae nostrum amet! Harum, asperiores facere? Id, voluptas?</span></td>
                          <td><span class="text-center">$ 1500</span></td>
                          <td><span class="text-center">19-06-21</span></td>
                          <td><button type="submit" class="btn btn-light">Accept Offer</button></td>
                        </tr>
                        <tr >
                          <td><span class="fw-bold text-center">Ayesha Saleem</span></td>
                          <td><span class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda vel incidunt fugiat sit, rerum beatae sed rem architecto aliquid velit deleniti asperiores molestiae nostrum amet! Harum, asperiores facere? Id, voluptas?</span></td>
                          <td><span class="text-center">$ 1500</span></td>
                          <td><span class="text-center">19-06-21</span></td>
                          <td><button type="submit" class="btn btn-light">Accept Offer</button></td>
                        </tr>
                        <tr >
                          <td><span class="fw-bold text-center">Ayesha Saleem</span></td>
                          <td><span class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda vel incidunt fugiat sit, rerum beatae sed rem architecto aliquid velit deleniti asperiores molestiae nostrum amet! Harum, asperiores facere? Id, voluptas?</span></td>
                          <td><span class="text-center">$ 1500</span></td>
                          <td><span class="text-center">19-06-21</span></td>
                          <td><button type="submit" class="btn btn-light">Accept Offer</button></td>
                        </tr>
                        <tr >
                          <td><span class="fw-bold text-center">Ayesha Saleem</span></td>
                          <td><span class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda vel incidunt fugiat sit, rerum beatae sed rem architecto aliquid velit deleniti asperiores molestiae nostrum amet! Harum, asperiores facere? Id, voluptas?</span></td>
                          <td><span class="text-center">$ 1500</span></td>
                          <td><span class="text-center">19-06-21</span></td>
                          <td><button type="submit" class="btn btn-light">Accept Offer</button></td>
                        </tr>
                    </tbody>
                  </table>
                </div>
            </div>
      </div>
      
    </div>
    <!-- !orders -->

<?php
  // adding footer.php file
   include('footer.php');
?>