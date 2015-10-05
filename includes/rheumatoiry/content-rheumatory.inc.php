<?php
require_once 'includes/functions-html.php';
require_once 'includes/sample-tables.inc.php' ;
$output = '';

    /**
     * START X-NAVIGATION VERTICAL 1
     *
     */

     $output = top_navigation();
    /**
     * START X-NAVIGATION VERTICAL 2
     *
     */


    /**
     * START BREADCRUMB
     */
    $output.='<ul class="breadcrumb">';
      $output.='<li><a href="#">Program Evaluation</a></li>';
      $output.='<li class="active">Rheumatory</li>';
      $output.='<li class="active">All Programs</li>';

      $output.='<div class="float-right " >';
          $output.='<li>';

            $output.='<div class="dropdown">';
              $output.='<button class="btn btn-default btn-lg dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="false">';

                $output.='---- Choose ----     ';
                $output.='<span style="margin-left: 4px;" class="caret"></span>';
                $output.='<span class="sr-only">Toggle Dropdown</span>';

              $output.='</button>';

              $output.='<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">';

                $output.='<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Pregnancy, Fertility and Breastfeeding</a></li>';
                $output.='<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Patient Wanting to Stop Methotrexate (MTX) when on Biologic Therapy</a></li>';
                $output.='<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Biosimilars (Subsequent entry biologics or SEBs)</a></li>';
                $output.='<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ultrasound in RA</a></li>';
                $output.='<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Counselling about DMARD Efficacy and Safety</a></li>';
              $output.='</ul>';

            $output.='</div>';
          $output.='</div>';

    $output.='</ul>';
/**
 * END BREADCRUMB
 */
$output.='<div class="page-content-wrap ">';

    /**
     * START  Widgets 1
     */

     $Ques_sent = array (
      'value' => 121 ,
      'label' => 'Total Programs',
      );
      $Response_rate  = array (
      'value' => 532 ,
      'label' => 'Total Evaluations',
      );
     $Responses = array (
      'value' => 624 ,
      'label' => 'Total Participants',
      );

     $widget1 = widget1( $Ques_sent,  $Response_rate , $Responses);
     $output.= $widget1;

    /**
     * END  Widgets 1
     */

    /**
     * START .Widgets 2
     */

      //Not required here in this template

    /**
     * END Widgets 2
     */

    // Break Down 4

    $output.='<div class="row margin-top-24" >';

        $output.='<div id="refresh" class=" col-md-12 " style="">';
          /**
           * START REGULAR PIE CHART
           */
          $output.='<div class="panel ">';
          $output.='<div class=" panel-header">Speaker<span class="float-right padding-right-24"></span></div>';
            $output .= '<div class="col-md-6">';

              $output.='<div class="col-md-2 "></div>';
              $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
              $output .= '<div class="text-center">Encouraged and enabled group interaction</div>';
                  $output.='<div class="" id="speaker-google-donut-q9" style="height: 300px;"></div>';
              $output.='</div>';
              $output.='<div class="col-md-2 "></div>';
            $output.='</div>';
            $output .= '<div class="col-md-6">';
              $output.='<div class="col-md-2 "></div>';
              $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
              $output .= '<div class="text-center">Overall, the facilitator was effective in addressing my practice concerns</div>';
                  $output.='<div class="" id="speaker-google-donut-q10" style="height: 300px;"></div>';
              $output.='</div>';
              $output.='<div class="col-md-2 "></div>';
            $output.='</div>';


              // colors:['#5bbbff', '#cae9ff', '#005fa3','#D9D9D9','#003459'],
            $output .= '<div class="row text-center">';
              $output .= '<div class="col-centered" style="margin-bottom:12px;">';

              $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
              $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#5bbbff"></span>';
              $output.='<span class="margin-left-8 small">1: Strongly Disagree</span></div>';

              $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
              $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#cae9ff"></span>';
              $output.='<span class="margin-left-8 small">2: Neutral</span></div>';

              $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
              $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#005fa3"></span>';
              $output.='<span class="margin-left-8 small">3: Somewhat Agree</span></div>';

              $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
              $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#D9D9D9"></span>';
              $output.='<span class="margin-left-8 small">4: Agree</span></div>';

              $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
              $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#003459"></span>';
              $output.='<span class="margin-left-8 small">5: Strongly Agree</span></div>';
              $output .= '</div>';
              $output .= '</div>';
          $output.='</div>';
          /**
           * END REGULAR PIE CHART
           */


        $output.='</div>';

    $output.='</div>';

    // Break down 1

    $output.='<div class="row margin-top-24" >';

        $output.='<div id="refresh" class=" col-md-4 " style="">';
          /**
           * START CHART Ques 1
           */
          $output.='<div class="panel">';
          $output.='<div class=" panel-header">Educational Objective<span class="float-right padding-right-24"></span></div>';
              $output.='<div class="col-md-2 "></div>';
              $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 430px;">';
              $output .= '<div class="text-center">Explain the evidence-based benefits and risks associated with DMARD and..</div>';
                  $output.='<div class="" id="edu-obj-google-hBar-q1" style="height: 300px;"></div>';
              $output.='</div>';
              $output.='<div class="col-md-2 "></div>';
          $output.='</div>';
          /**
           * END CHART
           */
        $output.='</div>';

        $output.='<div id="refresh" class=" col-md-4 " style="">';
          /**
           * START CHART Ques 2
           */
          $output.='<div class="panel">';
          $output.='<div class=" panel-header">Educational Objective<span class="float-right padding-right-24"></span></div>';
              $output.='<div class="col-md-2 "></div>';
              $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 430px;">';
              $output .= '<div class="text-center">Recommend appropriate DMARD and biologic therapy in pregnancy...</div>';
                  $output.='<div class="" id="edu-obj-google-hBar-q2" style="height: 300px;"></div>';
              $output.='</div>';
              $output.='<div class="col-md-2 "></div>';
          $output.='</div>';
          /**
           * END CHART
           */
        $output.='</div>';

        $output.='<div id="refresh" class=" col-md-4 " style="">';
          /**
           * START CHART Ques 3
           */
          $output.='<div class="panel">';
          $output.='<div class=" panel-header">Educational Objective<span class="float-right padding-right-24"></span></div>';
              $output.='<div class="col-md-2 "></div>';
              $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 430px;">';
              $output .= '<div class="text-center">Set realistic expectations with these patients for better patient outcomes</div>';
                  $output.='<div class="" id="edu-obj-google-hBar-q3" style="height: 300px;"></div>';
              $output.='</div>';
              $output.='<div class="col-md-2 "></div>';
          $output.='</div>';
          /**
           * END CHART
           */
        $output.='</div>';

    $output.='</div>';

    // Break Down 2

    $output.='<div class="row margin-top-24" >';

        $output.='<div id="refresh" class=" col-md-12 " style="">';
          /**
           * START REGULAR PIE CHART
           */
          $output.='<div class="panel ">';
          $output.='<div class=" panel-header">After attending this program<span class="float-right padding-right-24"></span></div>';
            $output .= '<div class="col-md-4">';

              $output.='<div class="col-md-2 "></div>';
              $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
              $output .= '<div class="text-center">The content of the program was highly relevant to my practice concerns</div>';
                  $output.='<div class="" id="program-google-pie-q4" style="height: 300px;"></div>';
              $output.='</div>';
              $output.='<div class="col-md-2 "></div>';
            $output.='</div>';
            $output .= '<div class="col-md-4">';
              $output.='<div class="col-md-2 "></div>';
              $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
              $output .= '<div class="text-center">As a result of attending this program, I feel I am better to provide care to my patients</div>';
                  $output.='<div class="" id="program-google-pie-q5" style="height: 300px;"></div>';
              $output.='</div>';
              $output.='<div class="col-md-2 "></div>';
            $output.='</div>';
            $output .= '<div class="col-md-4">';
              $output.='<div class="col-md-2 "></div>';
              $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
              $output .= '<div class="text-center">I would recommend this program to a peer</div>';
                  $output.='<div class="" id="program-google-pie-q6" style="height: 300px;"></div>';
              $output.='</div>';
              $output.='<div class="col-md-2 "></div>';
            $output.='</div>';

              // colors:['#5bbbff', '#cae9ff', '#005fa3','#D9D9D9','#003459'],
            $output .= '<div class="row text-center">';
              $output .= '<div class="col-centered" style="margin-bottom:12px;">';

              $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
              $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#5bbbff"></span>';
              $output.='<span class="margin-left-8 small">1: Strongly Disagree</span></div>';

              $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
              $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#cae9ff"></span>';
              $output.='<span class="margin-left-8 small">2: Neutral</span></div>';

              $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
              $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#005fa3"></span>';
              $output.='<span class="margin-left-8 small">3: Somewhat Agree</span></div>';

              $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
              $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#D9D9D9"></span>';
              $output.='<span class="margin-left-8 small">4: Agree</span></div>';

              $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
              $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#003459"></span>';
              $output.='<span class="margin-left-8 small">5: Strongly Agree</span></div>';
              $output .= '</div>';
              $output .= '</div>';
          $output.='</div>';
          /**
           * END REGULAR PIE CHART
           */


        $output.='</div>';

    $output.='</div>';



    // Brek down 3

    $output.='<div class="row margin-top-24" >';

        $output.='<div id="refresh" class=" col-md-6 " style="">';
          /**
           * START CHART Ques 7
           */
          $output.='<div class="panel">';
          $output.='<div class=" panel-header">Poll Questions<span class="float-right padding-right-24"></span></div>';
              $output.='<div class="col-md-2 "></div>';
              $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
              $output .= '<div class="text-center">Did the presenter make a disclosure statement ?</div>';
                $output .= '<div class="text-center margin-top-48">';
                  $output.='<input class="knob" data-width="200" data-readOnly=true data-min="-100" data-thickness=".2" data-fgColor="#5bbbff" data-displayPrevious=true value="82"/>';
                $output.='</div>';
              $output.='</div>';
              $output.='<div class="col-md-2 "></div>';
          $output.='</div>';
          /**
           * END CHART
           */
        $output.='</div>';

        $output.='<div id="refresh" class=" col-md-6 " style="">';
          /**
           * START CHART Ques 8
           */
          $output.='<div class="panel">';
          $output.='<div class=" panel-header"> Perceived Program Bias<span class="float-right padding-right-24"></span></div>';
              $output.='<div class="col-md-2 "></div>';
              $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
              $output .= '<div class="text-center">Report No Commercial Bias</div>';
                $output .= '<div class="text-center margin-top-48">';
                  $output.='<input class="knob" data-width="200" data-readOnly=true data-min="-100" data-thickness=".2" data-fgColor="#5bbbff" data-displayPrevious=true value="92"/>';
                $output.='</div>';

              $output.='</div>';
              $output.='<div class="col-md-2 "></div>';
          $output.='</div>';
          /**
           * END CHART
           */


    $output.='</div>';




    // // Brek down 1
    // $output.='<div class="row margin-top-24" >';

    //     $output.='<div id="refresh" class=" col-md-4 " style="">';
    //       /**
    //        * START CHART Question 9
    //        */
    //       $output.='<div class="panel">';
    //       $output.='<div class=" panel-header">Educational Objective<span class="float-right padding-right-24"></span></div>';
    //           $output.='<div class="col-md-2 "></div>';
    //           $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
    //           $output .= '<div class="text-center">Encouraged and enabled group interaction</div>';
    //               $output.='<div class="" id="speaker" style="height: 300px;"></div>';
    //           $output.='</div>';
    //           $output.='<div class="col-md-2 "></div>';
    //       $output.='</div>';
    //       /**
    //        * END CHART
    //        */
    //     $output.='</div>';

    //     $output.='<div id="refresh" class=" col-md-4 " style="">';
    //       /**
    //        * START CHART Question 10
    //        */
    //       $output.='<div class="panel">';
    //       $output.='<div class=" panel-header">Educational Objective<span class="float-right padding-right-24"></span></div>';
    //           $output.='<div class="col-md-2 "></div>';
    //           $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
    //           $output .= '<div class="text-center">Overall, the facilitator was effective in addressing my practice concerns</div>';
    //               $output.='<div class="" id="edu-obj-google-hBar-q2" style="height: 300px;"></div>';
    //           $output.='</div>';
    //           $output.='<div class="col-md-2 "></div>';
    //       $output.='</div>';
    //       /**
    //        * END CHART
    //        */
    //     $output.='</div>';



    $output.='</div>';







$output.='</div>';
/**
 * END PAGE CONTENT WRAPPER
 */

print ($output);
 ?>
