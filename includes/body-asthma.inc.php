<!-- START PAGE CONTAINER -->
        <div  class="page-container">

            <?php
             // START PAGE SIDEBAR
             include 'includes/sidebar-asthma.inc.php' ;
             // END PAGE SIDEBAR -->

             // PAGE CONTENT
            if ( isset($_GET['s']) && $_GET['s'] == 'acceredited') {
                   include 'includes/content-asthma-accredited.inc.php';
            }
            elseif (isset($_GET['s']) && $_GET['s'] == 'non-acceredited') {
                include 'includes/content-asthma-non-accredited.inc.php';
            }
            else {
                     include 'includes/content-asthma.inc.php';
                }

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
