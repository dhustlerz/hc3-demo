<!-- START PAGE CONTAINER -->
        <div  class="page-container">

            <?php

             // START PAGE SIDEBAR
             include 'sidebar.inc.php' ;
             // END PAGE SIDEBAR -->

             // PAGE CONTENT -->
             echo'<div class="page-content">';
             include 'content.inc.php';
             echo '</div>';
             // END PAGE CONTENT -->


            ?>



        </div>
        <!-- END PAGE CONTAINER -->

        <!--
        *The message box is moved to in sidebar.inc.php so as to make a call from each page
        -->
        <?php
        include 'javascript.inc.php' ;
        ?>
