<?php
require_once 'includes/functions-html.php';
require_once 'includes/sample-tables.inc.php' ;
$output = '';

    /**
     * START X-NAVIGATION VERTICAL 1
     *
     */

     $Navigation_text = "Module 5 - Medical Ethics: Counselling about DMARD Efficacy and Safety";
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
      $output.='<li class="active">Module 5 - Medical Ethics: Counselling about DMARD Efficacy and Safety</li>';
      $output.=choose_modules('Module 5  ');

    $output.='</ul>';
/**
 * END BREADCRUMB
 */
$output.='<div class="page-content-wrap ">';

    /**
     * START  Widgets 1
     */

     $Ques_sent = array (
      'value' => 10 ,
      'label' => 'Total Programs',
      'img'   => 'img/icons/cald-icon.png',
      );
      $Response_rate  = array (
      'value' => 49 ,
      'label' => 'Total Evaluations',
      'img'   => 'img/icons/linegraph-icon.png',
      );
     $Responses = array (
      'value' => 58 ,
      'label' => 'Total Participants',
      'img'   => 'img/icons/user-icon.png',
      );

     $widget1 = widget1( $Ques_sent,  $Response_rate, $Responses);
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
    $output .= '<div class="">';
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
                      $output.='<div class="" id="edu-obj-google-hBar-m5-q1" style="height: 300px;"></div>';
                  $output.='</div>';
                  $output.='<div class="col-md-2 "></div>';
              $output.='</div>';
              $output .= '<div class="col-md-6">';
                $output .= '<div class="col-md-6">';
                    $output.='<div class="col-md-2 "></div>';
                    $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                    $output .= '<div class="text-center"><b>IMPORTANCE</b></div>';
                        $output.='<div class="" id="edu-obj-google-donut-m5-q1-pt-1" style="height: 300px;"></div>';
                    $output.='</div>';
                    $output.='<div class="col-md-2 "></div>';
                $output.='</div>';
                $output .= '<div class="col-md-6">';
                    $output.='<div class="col-md-2 "></div>';
                    $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                    $output .= '<div class="text-center"><b>CONFIDENCE</b></div>';
                        $output.='<div class="" id="edu-obj-google-donut-m5-q1-pt-2" style="height: 300px;"></div>';
                    $output.='</div>';
                    $output.='<div class="col-md-2 "></div>';
                $output.='</div>';
                $output .= '<div class="row text-center">';
                // colors:['#5bbbff', '#cae9ff', '#005fa3','#D9D9D9','#003459'],
                  $output .= '<div class="col-centered" style="margin-bottom:12px;">';

                  $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                  $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#5bbbff"></span>';
                  $output.='<span class="margin-left-8 small">1: Less</span></div>';

                  $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                  $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#cae9ff"></span>';
                  $output.='<span class="margin-left-8 small">2: Equal</span></div>';

                  $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                  $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#005fa3"></span>';
                  $output.='<span class="margin-left-8 small">1: More</span></div>';

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
                      $output.='<div class="" id="edu-obj-google-hBar-m5-q2" style="height: 300px;"></div>';
                  $output.='</div>';
                  $output.='<div class="col-md-2 "></div>';
              $output.='</div>';
              $output .= '<div class="col-md-6">';
                $output .= '<div class="col-md-6">';
                    $output.='<div class="col-md-2 "></div>';
                    $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                    $output .= '<div class="text-center"><b>IMPORTANCE</b></div>';
                        $output.='<div class="" id="edu-obj-google-donut-m5-q2-pt-1" style="height: 300px;"></div>';
                    $output.='</div>';
                    $output.='<div class="col-md-2 "></div>';
                $output.='</div>';
                $output .= '<div class="col-md-6">';
                    $output.='<div class="col-md-2 "></div>';
                    $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                    $output .= '<div class="text-center"><b>CONFIDENCE</b></div>';
                        $output.='<div class="" id="edu-obj-google-donut-m5-q2-pt-2" style="height: 300px;"></div>';
                    $output.='</div>';
                    $output.='<div class="col-md-2 "></div>';
                $output.='</div>';
                $output .= '<div class="row text-center">';
                  $output .= '<div class="col-centered" style="margin-bottom:12px;">';
                  // colors:['#5bbbff', '#cae9ff', '#005fa3','#D9D9D9','#DA984C'],

                    $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                    $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#5bbbff"></span>';
                    $output.='<span class="margin-left-8 small">1: Less</span></div>';

                    $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                    $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#cae9ff"></span>';
                    $output.='<span class="margin-left-8 small">2: Equal</span></div>';

                    $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                    $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#005fa3"></span>';
                    $output.='<span class="margin-left-8 small">1: More</span></div>';

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
                  $output .= '<div class="text-left">Set realistic expectations with these patients for better patient outcomes</div>';
                      $output.='<div class="" id="edu-obj-google-hBar-m5-q3" style="height: 300px;"></div>';
                  $output.='</div>';
                  $output.='<div class="col-md-2 "></div>';
              $output.='</div>';
              $output .= '<div class="col-md-6">';
                $output .= '<div class="col-md-6">';
                    $output.='<div class="col-md-2 "></div>';
                    $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                    $output .= '<div class="text-center"><b>IMPORTANCE</b></div>';
                        $output.='<div class="" id="edu-obj-google-donut-m5-q3-pt-1" style="height: 300px;"></div>';
                    $output.='</div>';
                    $output.='<div class="col-md-2 "></div>';
                $output.='</div>';
                $output .= '<div class="col-md-6">';
                    $output.='<div class="col-md-2 "></div>';
                    $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                    $output .= '<div class="text-center"><b>CONFIDENCE</b></div>';
                        $output.='<div class="" id="edu-obj-google-donut-m5-q3-pt-2" style="height: 300px;"></div>';
                    $output.='</div>';
                    $output.='<div class="col-md-2 "></div>';
                $output.='</div>';
                $output .= '<div class="row text-center">';
                  $output .= '<div class="col-centered" style="margin-bottom:12px;">';
                  // colors:['#5bbbff', '#cae9ff', '#005fa3','#D9D9D9','#DA984C'],
                    $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                    $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#5bbbff"></span>';
                    $output.='<span class="margin-left-8 small">1: Less</span></div>';

                    $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                    $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#cae9ff"></span>';
                    $output.='<span class="margin-left-8 small">2: Equal</span></div>';

                    $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                    $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#005fa3"></span>';
                    $output.='<span class="margin-left-8 small">3: More</span></div>';

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
                    $output.='<div class="" id="program-google-pie-m5-q4" style="height: 300px;"></div>';
                $output.='</div>';
                $output.='<div class="col-md-2 "></div>';
              $output.='</div>';
              $output .= '<div class="col-md-4">';
                $output.='<div class="col-md-2 "></div>';
                $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                $output .= '<div class="text-center">As a result of attending this program, I feel I am better to provide care to...</div>';
                    $output.='<div class="" id="program-google-pie-m5-q5" style="height: 300px;"></div>';
                $output.='</div>';
                $output.='<div class="col-md-2 "></div>';
              $output.='</div>';
              $output .= '<div class="col-md-4">';
                $output.='<div class="col-md-2 "></div>';
                $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                $output .= '<div class="text-center">I would recommend this program to a peer</div>';
                    $output.='<div class="" id="program-google-pie-m5-q6" style="height: 300px;"></div>';
                $output.='</div>';
                $output.='<div class="col-md-2 "></div>';
              $output.='</div>';


               //colors:['#5bbbff', '#cae9ff','#e9ffca','#cacfff','#005fa3','#D9D9D9','#003459'],
              $output .= '<div class="row text-center">';
                $output .= '<div class="col-centered" style="margin-bottom:12px;">';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#5bbbff"></span>';
                $output.='<span class="margin-left-8 small">1: Strongly Disagree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#cae9ff"></span>';
                $output.='<span class="margin-left-8 small">2: Disagree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#e9ffca"></span>';
                $output.='<span class="margin-left-8 small">3: Somewhat Disagree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#cacfff"></span>';
                $output.='<span class="margin-left-8 small">4: Neutral</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#005fa3"></span>';
                $output.='<span class="margin-left-8 small">5: Somewhat Agree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#D9D9D9"></span>';
                $output.='<span class="margin-left-8 small">6: Agree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#003459"></span>';
                $output.='<span class="margin-left-8 small">7: Strongly Agree</span></div>';
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
                    $output.='<input class="knob" data-width="250" data-angleOffset=-91 data-angleArc=180 data-readOnly=true data-min="-100" data-thickness=".3" data-fgColor="#5bbbff" data-displayPrevious=true value="93"/>';
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
                    $output.='<input class="knob" data-width="250" data-angleOffset=-91 data-angleArc=180 data-readOnly=true data-min="-100" data-thickness=".3" data-fgColor="#5bbbff" data-displayPrevious=true value="78"/>';
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
                    $output.='<div class="" id="speaker-google-donut-m5-q9" style="height: 300px;"></div>';
                $output.='</div>';
                    // colors:['#5bbbff', '#cae9ff','#e9ffca','#cacfff','#005fa3','#D9D9D9','#003459'],
              $output .= '<div class="row text-center">';
                $output .= '<div class="col-centered" style="margin-bottom:12px;">';

                  $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#5bbbff"></span>';
                $output.='<span class="margin-left-8 small">1: Strongly Disagree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#cae9ff"></span>';
                $output.='<span class="margin-left-8 small">2: Disagree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#e9ffca"></span>';
                $output.='<span class="margin-left-8 small">3: Somewhat Disagree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#cacfff"></span>';
                $output.='<span class="margin-left-8 small">4: Neutral</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#005fa3"></span>';
                $output.='<span class="margin-left-8 small">5: Somewhat Agree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#D9D9D9"></span>';
                $output.='<span class="margin-left-8 small">6: Agree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#003459"></span>';
                $output.='<span class="margin-left-8 small">7: Strongly Agree</span></div>';
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
             // colors:['#5bbbff', '#cae9ff','#e9ffca','#cacfff','#005fa3','#D9D9D9','#003459'],
            $output.='<div class="panel">';
            $output.='<div class=" panel-header">Speaker<span class="float-right padding-right-24"></span></div>';
                $output.='<div class="col-md-2 "></div>';
                $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                $output .= '<div class="text-center">Overall, the facilitator was effective in addressing my practice concerns</div>';
                    $output.='<div class="" id="speaker-google-donut-m5-q10" style="height: 300px;"></div>';
                $output.='</div>';
                $output .= '<div class="row text-center">';
                $output .= '<div class="col-centered" style="margin-bottom:12px;">';

                  $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#5bbbff"></span>';
                $output.='<span class="margin-left-8 small">1: Strongly Disagree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#cae9ff"></span>';
                $output.='<span class="margin-left-8 small">2: Disagree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#e9ffca"></span>';
                $output.='<span class="margin-left-8 small">3: Somewhat Disagree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop" aria-hidden="true" style="color:#cacfff"></span>';
                $output.='<span class="margin-left-8 small">4: Neutral</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#005fa3"></span>';
                $output.='<span class="margin-left-8 small">5: Somewhat Agree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#D9D9D9"></span>';
                $output.='<span class="margin-left-8 small">6: Agree</span></div>';

                $output.='<div class="dashpage-chart-legend-item float-left margin-left-24">';
                $output.='<span class="glyphicon glyphicon-stop " aria-hidden="true" style="color:#003459"></span>';
                $output.='<span class="margin-left-8 small">7: Strongly Agree</span></div>';
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
          //           $output.='<div class="" id="edu-obj-google-hBar-m5-q3" style="height: 300px;"></div>';
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
    //               $output.='<div class="" id="edu-obj-google-hBar-m5-q2" style="height: 300px;"></div>';
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
/**
 * END PAGE CONTENT WRAPPER
 */

print ($output);
 ?>
