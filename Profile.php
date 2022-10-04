



    <?php include "header.php"; ?> 
    <style>
    .dashboard-area{
           max-width: 600px;
        
           margin-left: 300px;

    }
 
    </style>
    <!-- Navbar End -->

    <!-- profile Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary"></span>Profile</h1>
                    </a>
                </div>
                <section id="about-us" class="py-5">
                    <div class="container">
                        <div class="row">
                             <!--left sidebar-->
                            <div class="col-md-3 pr-md-4">
                                <div class="sidebar-left">
                                    <!--sidebar menu-->
                                    <ul class="list-unstyled sidebar-menu pl-md-2 pr-md-0">
                                        <li>
                                            <a class="sidebar-item active d-flex justify-content-between align-items-center" href="service.html/">
                                                Your orders
                                                <span class="fa-solid fa-cart-shopping"></span>
                                              
                                            </a>
                                        </li>
                                        
                                       
                                        <li>
                                            <a class="sidebar-item d-flex justify-content-between align-items-center" href="service.html/">
                                                New Order
                                               
                                                <span class="fas fa-comment"></span>  
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sidebar-item d-flex justify-content-between align-items-center" href="service.html/">
                                                Delete Account
                                           
                                               
                                                <span class="fa-solid fa-trash"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sidebar-item d-flex justify-content-between align-items-center" href="service.html/">
                                                Logout
                                                <span class="fas fa-sign-out-alt"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sidebar-item d-flex justify-content-between align-items-center" href="service.html/">
                                                Record and detail
                                                <span class="fa-solid fa-file-circle-info"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!--Content-->
                            <div class="col-md-9">
                                <div class="dashboard-area">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3 bg-dark">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <a class="position-absolute ml-3 mt-3 text-white" href="setting.html" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit cover images"><i class="fas fa-cog"></i></a>
                                                        <div class="row">
                                                            <div class="col-md-6 ml-auto mr-auto">
                                                               <div class="profiles p-3 my-4 rounded text-center shadow-sm">
                                                                    <div class="avatars">
                                                                        <a href="setting.html">
                                                                            <img src="" alt="Circle Image" class="avatar-lg rounded-circle img-fluid" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit avatar images">
                                                                        </a>
                                                                    </div>
                                                                    <div class="names">
                                                                        <h3 class="title text-light">Ankit@007</h3>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                     </div>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                               
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Profile update</a>
                                                </li>
                                            </ul>
                                            
                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                    <div class="p-3 border mb-3">
                                                        <a class="position-absolute" style="right: 25px" href="setting.html" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit profile"><i class="fas fa-cog"></i></a>
                                                        <h3>Ankit@007</h3>
                                                        <p><b>Name</b> Ankit mishra</p>
                                                        <p><b>Email</b>ankit007@gmail.com </p>
                                                        <p><b>Address:</b> Civil Line Satna Madhya Pradesh</p>
                                                        <p><b>Phone:</b> +91 987654321</p>
                                                        
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                    <div class="p-3 border mb-3">
                                                        <h5>Update</h5>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <ul class="list-unstyled statistics">
                                                                <form>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Last name</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3" class="form-control" />
    <label class="form-label" for="form6Example3">Username</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Address</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form6Example5" class="form-control" />
    <label class="form-label" for="form6Example5">Email</label>
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Phone</label>
  </div>

  <!-- add image -->
  
  <div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02">
<label class="input-group-text" for="inputGroupFile02">Upload</label>
 </div>
  <!-- Submit button -->
  <button type="Update" class="btn btn-primary btn-block mb-4">
    Update Now
  </button>
</form>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--profil end-->
                
    <!-- Footer End -->

    <?php include "footer.php"; ?>
    
</body>
</html>