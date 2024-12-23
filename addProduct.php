
<?php
include "header.php";
include "navbar.php";
include "dbConnection.php";
session_start(); 
?>


<div class="card-body px-5 py-5" style="background-color:darkgray;">



                <h3 class="card-title text-left mb-3">Add product</h3>
                <p><?php echo $_SESSION["add"]?></p>
                <form action="addProductHandle.php" method="post">
                  <div class="form-group">
                    <label>product Name</label>
                    <input type="text" class="form-control p_input" name="ProdName" value="">
                  </div>
                  <div class="form-group">
                    <label>Code</label>
                    <input type="text" class="form-control p_input" name="code">
                  </div>
                  <div class="form-group">
                    <label>quantity</label>
                    <input type="text" class="form-control p_input" name="quantity">

                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control p_input" name="price">

                  </div>
                  <div class="form-group">
                    <label>category (1/2) </label>
                    <input type="text" class="form-control p_input"name="category">
                  </div>
                  <div class="form-group">
                    <label>Image (URL) </label>
                    <input type="text" class="form-control p_input"name="img">
                  </div>
                  <div class="form-group">
                    <label>detaitls</label>
                    <textarea name="details" id=""></textarea>
                  </div>
              
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                     
                  <div class="text-center">
                    <button type="submit" name="addProduct" class="btn btn-primary btn-block enter-btn">Add product</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook col me-2">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up text-center">Already have an Account?<a href="login.php"> Login</a></p>
                  <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <?php include "footer.php" ?>


    <!-- regex 

  $regex = /^01[0,1,2,5][0-9]{8}$/

  preg_match($regex,) 
  
  -->