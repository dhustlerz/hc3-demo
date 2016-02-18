<!-- START PAGE CONTAINER -->
        <div  class="page-container">

            <?php
            $request_URI = "$_SERVER[REQUEST_URI]";

             // START PAGE SIDEBAR
             include 'sidebar.inc.php' ;
             // END PAGE SIDEBAR -->

             // PAGE CONTENT -->
             echo'<div class="page-content">';
             if ($request_URI == '/demohc32/hc3-demo/overview.php') {
                include 'content.inc.php';
             }
             elseif ($request_URI == '/demohc32/hc3-demo/needs-assessment.php') {
                 include 'content-needs-assesment.inc.php';
             }
             elseif($request_URI == '/demohc32/hc3-demo/program-evaluation.php?p=rheumatory&t=all')
             {
                include 'rheumatoiry/content-rheumatory.inc.php';
             }
             elseif($request_URI == '/demohc32/hc3-demo/program-evaluation.php?p=rheumatory&mod=2')
             {
                include 'rheumatoiry/content-rheumatory-mod-2.inc.php';
             }
             elseif($request_URI == '/demohc32/hc3-demo/program-evaluation.php?p=rheumatory&mod=3')
             {
                include 'rheumatoiry/content-rheumatory-mod-3.inc.php';
             }
             elseif($request_URI == '/demohc32/hc3-demo/program-evaluation.php?p=rheumatory&mod=4')
             {
                include 'rheumatoiry/content-rheumatory-mod-4.inc.php';
             }
             elseif($request_URI == '/demohc32/hc3-demo/program-evaluation.php?p=rheumatory&mod=5')
             {
                include 'rheumatoiry/content-rheumatory-mod-5.inc.php';
             }
             elseif($request_URI == '/demohc32/hc3-demo/program-evaluation.php?p=rheumatory&mod=6')
             {
                include 'rheumatoiry/content-rheumatory-mod-6.inc.php';
             }
             // elseif($request_URI == '/demohc32/hc3-demo/program-evaluation.php?p=rheumatory&t=non-accr')
             // {
             //    include 'content-rheumatory-non-accr.inc.php';
             // }

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

        if ($request_URI == '/demohc32/hc3-demo/overview.php') {
                //include 'javascript.inc.php' ;
             }
             elseif ($request_URI == '/demohc32/hc3-demo/needs-assessment.php') {
                //include 'javascript.inc.php' ;
             }
             elseif($request_URI == '/demohc32/hc3-demo/program-evaluation.php?p=rheumatory&t=all')
             {
               //include 'javascript.inc.php' ;
             }
             elseif($request_URI == '/demohc32/hc3-demo/program-evaluation.php?p=rheumatory&mod=2')
             {
                echo '<script type="text/javascript" src="includes/rheumatoiry/js/content-rheumatory-mod-2.js"></script>' ;
             }
             elseif($request_URI == '/demohc32/hc3-demo/program-evaluation.php?p=rheumatory&mod=3')
             {
                echo '<script type="text/javascript" src="includes/rheumatoiry/js/content-rheumatory-mod-3.js"></script>' ;
             }
             elseif($request_URI == '/demohc32/hc3-demo/program-evaluation.php?p=rheumatory&mod=4')
             {
                echo '<script type="text/javascript" src="includes/rheumatoiry/js/content-rheumatory-mod-4.js"></script>' ;
             }
             elseif($request_URI == '/demohc32/hc3-demo/program-evaluation.php?p=rheumatory&mod=5')
             {
                echo '<script type="text/javascript" src="includes/rheumatoiry/js/content-rheumatory-mod-5.js"></script>' ;
             }
             elseif($request_URI == '/demohc32/hc3-demo/program-evaluation.php?p=rheumatory&mod=6')
             {
                echo '<script type="text/javascript" src="includes/rheumatoiry/js/content-rheumatory-mod-6.js"></script>' ;
             }

        ?>
