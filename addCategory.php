<?php
include "header.php";
include "navbar.php";
include "dbConnection.php";
session_start();
?>

<div class="card-body px-5 py-5" style="background-color:darkgray;">



            
              
                <h3 class="card-title text-left mb-3">Login</h3>
                <p><?php echo $_SESSION['categoryMsg']?></p>
                <form action="addCategoryHandle.php" method="post">
                  <div class="form-group">
                    <label>Category Name </label>
                    <input type="text" name="category" class="form-control p_input" >
                  </div>
                  <div class="form-group">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="forgetPassword.php" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="category_btn" class="btn btn-primary btn-block enter-btn">Add category</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook me-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="signup.php"> Sign Up</a></p>
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


    //table user, product, cart ,, review comment , rating  = session