<?php
require_once 'includes/functions-html.php';
require_once 'includes/sample-tables.inc.php' ;
$output = '';

    /**
     * START X-NAVIGATION VERTICAL 1
     *
     */

     $Navigation_text = "Pregnancy, Fertility and Breastfeeding";
     $output = top_navigation($Navigation_text);
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
      $output.=choose_modules();

    $output.='</ul>';
/**
 * END BREADCRUMB
 */
$output.='<div class="page-content-wrap ">';

    /**
     * START  Widgets 1
     */

     $Ques_sent = array (
      'value' => 9 ,
      'label' => 'Total Programs',
      );
      $Response_rate  = array (
      'value' => 54 ,
      'label' => 'Total Evaluations',
      );
     $Responses = array (
      'value' => 61 ,
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
    $output .= '<div class="bu-rheumatory">';
        // Break down 1

      $output.='<div class="row margin-top-24" >';

          $output.='<div id="refresh" class=" col-md-12 " style="">';
            /**
             * START CHART Question 1
             */

            $output.='<div class="panel">';
            $output.='<div class=" panel-header">Educational Objective<span class="float-right padding-right-24"></span></div>';
              $output .= '<div class="col-md-6">';
                  $output.='<div class="col-md-2 "></div>';
                  $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                  $output .= '<div class="text-left">Explain the evidence-based benefits and risks associated with DMARD and biologic therapy for these patients</div>';
                      $output.='<div class="" id="edu-obj-google-hBar-m1-q1" style="height: 300px;"></div>';
                  $output.='</div>';
                  $output.='<div class="col-md-2 "></div>';
              $output.='</div>';
              $output .= '<div class="col-md-6">';
                $output .= '<div class="col-md-6">';
                    $output.='<div class="col-md-2 "></div>';
                    $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                    $output .= '<div class="text-center">IMPORTANCE</div>';
                        $output.='<div class="" id="edu-obj-google-donut-m1-q1-pt-1" style="height: 300px;"></div>';
                    $output.='</div>';
                    $output.='<div class="col-md-2 "></div>';
                $output.='</div>';
                $output .= '<div class="col-md-6">';
                    $output.='<div class="col-md-2 "></div>';
                    $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                    $output .= '<div class="text-center">CONFIDENCE</div>';
                        $output.='<div class="" id="edu-obj-google-donut-m1-q1-pt-2" style="height: 300px;"></div>';
                    $output.='</div>';
                    $output.='<div class="col-md-2 "></div>';
                $output.='</div>';
                $output .= '<div class="row text-center">';
                  $output .= '<div class="col-centered" style="margin-bottom:12px;">';

                  $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                  $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#BF2A2F"></span>';
                  $output.='<span class="margin-left-8 small">1: Low</span></div>';

                  $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                  $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#D7AF51"></span>';
                  $output.='<span class="margin-left-8 small">2: Equal</span></div>';

                  $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                  $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#6E1612"></span>';
                  $output.='<span class="margin-left-8 small">3: High</span></div>';

                  $output .= '</div>';

                $output.='</div>';
              $output.='</div>';
            $output.='</div>';
            /**
             * END CHART
             */
          $output.='</div>';

          $output.='<div id="refresh" class=" col-md-12 " style="">';
            /**
             * START CHART Question 1
             */

            $output.='<div class="panel">';
            $output.='<div class=" panel-header">Educational Objective<span class="float-right padding-right-24"></span></div>';
              $output .= '<div class="col-md-6">';
                  $output.='<div class="col-md-2 "></div>';
                  $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                  $output .= '<div class="text-left">Recommend appropriate DMARD and biologic therapy in pregnancy, fertility and breastfeeding cases</div>';
                      $output.='<div class="" id="edu-obj-google-hBar-m1-q2" style="height: 300px;"></div>';
                  $output.='</div>';
                  $output.='<div class="col-md-2 "></div>';
              $output.='</div>';
              $output .= '<div class="col-md-6">';
                $output .= '<div class="col-md-6">';
                    $output.='<div class="col-md-2 "></div>';
                    $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                    $output .= '<div class="text-center">IMPORTANCE</div>';
                        $output.='<div class="" id="edu-obj-google-donut-m1-q2-pt-1" style="height: 300px;"></div>';
                    $output.='</div>';
                    $output.='<div class="col-md-2 "></div>';
                $output.='</div>';
                $output .= '<div class="col-md-6">';
                    $output.='<div class="col-md-2 "></div>';
                    $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                    $output .= '<div class="text-center">CONFIDENCE</div>';
                        $output.='<div class="" id="edu-obj-google-donut-m1-q2-pt-2" style="height: 300px;"></div>';
                    $output.='</div>';
                    $output.='<div class="col-md-2 "></div>';
                $output.='</div>';
                $output .= '<div class="row text-center">';
                  $output .= '<div class="col-centered" style="margin-bottom:12px;">';

                    $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                    $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#BF2A2F"></span>';
                    $output.='<span class="margin-left-8 small">1: Low</span></div>';

                    $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                    $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#D7AF51"></span>';
                    $output.='<span class="margin-left-8 small">2: Equal</span></div>';

                    $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                    $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#6E1612"></span>';
                    $output.='<span class="margin-left-8 small">3: High</span></div>';

                  $output .= '</div>';
                $output.='</div>';
              $output.='</div>';
            $output.='</div>';
            /**
             * END CHART
             */
          $output.='</div>';

          $output.='<div id="refresh" class=" col-md-12 " style="">';
            /**
             * START CHART Question 1
             */

            $output.='<div class="panel">';
            $output.='<div class=" panel-header">Educational Objective<span class="float-right padding-right-24"></span></div>';
              $output .= '<div class="col-md-6">';
                  $output.='<div class="col-md-2 "></div>';
                  $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                  $output .= '<div class="text-left">Recommend appropriate DMARD and biologic therapy in pregnancy, fertility and breastfeeding cases</div>';
                      $output.='<div class="" id="edu-obj-google-hBar-m1-q3" style="height: 300px;"></div>';
                  $output.='</div>';
                  $output.='<div class="col-md-2 "></div>';
              $output.='</div>';
              $output .= '<div class="col-md-6">';
                $output .= '<div class="col-md-6">';
                    $output.='<div class="col-md-2 "></div>';
                    $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                    $output .= '<div class="text-center">IMPORTANCE</div>';
                        $output.='<div class="" id="edu-obj-google-donut-m1-q3-pt-1" style="height: 300px;"></div>';
                    $output.='</div>';
                    $output.='<div class="col-md-2 "></div>';
                $output.='</div>';
                $output .= '<div class="col-md-6">';
                    $output.='<div class="col-md-2 "></div>';
                    $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                    $output .= '<div class="text-center">CONFIDENCE</div>';
                        $output.='<div class="" id="edu-obj-google-donut-m1-q3-pt-2" style="height: 300px;"></div>';
                    $output.='</div>';
                    $output.='<div class="col-md-2 "></div>';
                $output.='</div>';
                $output .= '<div class="row text-center">';
                  $output .= '<div class="col-centered" style="margin-bottom:12px;">';

                    $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                    $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#BF2A2F"></span>';
                    $output.='<span class="margin-left-8 small">1: Low</span></div>';

                    $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                    $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#D7AF51"></span>';
                    $output.='<span class="margin-left-8 small">2: Equal</span></div>';

                    $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                    $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#6E1612"></span>';
                    $output.='<span class="margin-left-8 small">3: High</span></div>';

                  $output .= '</div>';
                $output.='</div>';
              $output.='</div>';
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
                    $output.='<div class="" id="program-google-pie-m1-q4" style="height: 300px;"></div>';
                $output.='</div>';
                $output.='<div class="col-md-2 "></div>';
              $output.='</div>';
              $output .= '<div class="col-md-4">';
                $output.='<div class="col-md-2 "></div>';
                $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                $output .= '<div class="text-center">As a result of attending this program, I feel I am better to provide care to my patients</div>';
                    $output.='<div class="" id="program-google-pie-m1-q5" style="height: 300px;"></div>';
                $output.='</div>';
                $output.='<div class="col-md-2 "></div>';
              $output.='</div>';
              $output .= '<div class="col-md-4">';
                $output.='<div class="col-md-2 "></div>';
                $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                $output .= '<div class="text-center">I would recommend this program to a peer</div>';
                    $output.='<div class="" id="program-google-pie-m1-q6" style="height: 300px;"></div>';
                $output.='</div>';
                $output.='<div class="col-md-2 "></div>';
              $output.='</div>';
              // colors:['#BF2A2F', '#D7AF51', '#6E1612','#878369','#DA984C'],

                // colors:['#BF2A2F', '#D7AF51', '#6E1612','#878369','#DA984C'],
              $output .= '<div class="row text-center">';
                $output .= '<div class="col-centered" style="margin-bottom:12px;">';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#BF2A2F"></span>';
                $output.='<span class="margin-left-8 small">1: Strongly Disagree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#D7AF51"></span>';
                $output.='<span class="margin-left-8 small">2: Neutral</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#6E1612"></span>';
                $output.='<span class="margin-left-8 small">3: Somewhat Agree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#878369"></span>';
                $output.='<span class="margin-left-8 small">4: Agree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#DA984C"></span>';
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
                    $output.='<input class="knob" data-width="250" data-angleOffset=-91 data-angleArc=180 data-readOnly=true data-min="-100" data-thickness=".3" data-fgColor="#BF2A2F" data-displayPrevious=true value="82"/>';
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
                    $output.='<input class="knob" data-width="250" data-angleOffset=-91 data-angleArc=180 data-readOnly=true data-min="-100" data-thickness=".3" data-fgColor="#BF2A2F" data-displayPrevious=true value="92"/>';
                  $output.='</div>';

                $output.='</div>';
                $output.='<div class="col-md-2 "></div>';
            $output.='</div>';
            /**
             * END CHART
             */


      $output.='</div>';

        // Break Down 4

      $output.='<div class="row margin-top-24" >';

          $output.='<div id="refresh" class=" col-md-6 " style="">';
            /**
             * START CHART Ques 9
             */
            $output.='<div class="panel">';
            $output.='<div class=" panel-header">Speaker<span class="float-right padding-right-24"></span></div>';
                $output.='<div class="col-md-2 "></div>';
                $output.='<div class="col-md-8 panel-body bg-ffffff" style="height:350px;">';
                $output .= '<div class="text-center">Encouraged and enabled group interaction</div>';
                    $output.='<div class="" id="speaker-google-donut-m1-q9" style="height: 300px;"></div>';
                $output.='</div>';
                    //           // colors:['#BF2A2F', '#D7AF51', '#6E1612','#878369','#DA984C'],
              $output .= '<div class="row text-center">';
                $output .= '<div class="col-centered" style="margin-bottom:12px;">';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#BF2A2F"></span>';
                $output.='<span class="margin-left-8 small">1: Strongly Disagree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#D7AF51"></span>';
                $output.='<span class="margin-left-8 small">2: Neutral</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#6E1612"></span>';
                $output.='<span class="margin-left-8 small">3: Somewhat Agree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#878369"></span>';
                $output.='<span class="margin-left-8 small">4: Agree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#DA984C"></span>';
                $output.='<span class="margin-left-8 small">5: Strongly Agree</span></div>';
                $output .= '</div>';

             $output.='</div>';
                $output.='<div class="col-md-2 "></div>';
            $output.='</div>';
            /**
             * END CHART
             */
          $output.='</div>';

          $output.='<div id="refresh" class="col-md-6" style="">';
            /**
             * START CHART Ques 10
             */
            $output.='<div class="panel">';
            $output.='<div class=" panel-header">Speaker<span class="float-right padding-right-24"></span></div>';
                $output.='<div class="col-md-2 "></div>';
                $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                $output .= '<div class="text-center">Overall, the facilitator was effective in addressing my practice concerns</div>';
                    $output.='<div class="" id="speaker-google-donut-m1-q10" style="height: 300px;"></div>';
                $output.='</div>';
                $output .= '<div class="row text-center">';
                $output .= '<div class="col-centered" style="margin-bottom:12px;">';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#BF2A2F"></span>';
                $output.='<span class="margin-left-8 small">1: Strongly Disagree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#D7AF51"></span>';
                $output.='<span class="margin-left-8 small">2: Neutral</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#6E1612"></span>';
                $output.='<span class="margin-left-8 small">3: Somewhat Agree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#878369"></span>';
                $output.='<span class="margin-left-8 small">4: Agree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#DA984C"></span>';
                $output.='<span class="margin-left-8 small">5: Strongly Agree</span></div>';
                $output .= '</div>';

             $output.='</div>';
                $output.='<div class="col-md-2 "></div>';
            $output.='</div>';
            /**
             * END CHART
             */
          $output.='</div>';

          // $output.='<div id="refresh" class=" col-md-4 " style="">';
          //   /**
          //    * START CHART Ques 3
          //    */
          //   $output.='<div class="panel">';
          //   $output.='<div class=" panel-header">Educational Objective<span class="float-right padding-right-24"></span></div>';
          //       $output.='<div class="col-md-2 "></div>';
          //       $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 430px;">';
          //       $output .= '<div class="text-center">Set realistic expectations with these patients for better patient outcomes</div>';
          //           $output.='<div class="" id="edu-obj-google-hBar-m1-q3" style="height: 300px;"></div>';
          //       $output.='</div>';
          //       $output.='<div class="col-md-2 "></div>';
          //   $output.='</div>';
          //   /**
          //    * END CHART
          //    */
          // $output.='</div>';

      $output.='</div>';

    $output .= '</div>';








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
    //               $output.='<div class="" id="edu-obj-google-hBar-m1-q2" style="height: 300px;"></div>';
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
