<?php
require "partials/head.php";
require "partials/nav.php"
?>

    <div class="dash-wrapper">
        <div class="container dash-outer">
            <div class="dash">
                <!-- Left Side -->
                <div class=" profile-card-wrapper">
                    <!-- Profile Card -->
                    <div class="profile-card">
                        
                        <!-- Include tags here -->
                        <div class="tag-items"><?php require "../controllers/tags.php" ?></div>
                    </div>
                    <!-- End of profile card -->
                    

                </div>
                <!-- Right Side -->
                <div class="rightside-wrapper">
                    <!-- Profile tab -->

                    <!-- Post entry Section -->
                    <div class="form-wrapper">


                        <?php require "partials/forms.php" ?>




                    </div>
                    <!--END of  Post entry Section -->

                    <div class="breaker"></div>

                    <!-- All posts -->
                    <div class="post-wrapper">

                       

                            <?php require "partials/all_posts.php" ?>

                        
                    </div>
                    <!-- End of profile tab -->
                </div>
            </div>
        </div>
    </div>



<?php require "partials/footer.php"
?>

