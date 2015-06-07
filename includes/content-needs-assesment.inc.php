<?php
require 'sample-tables.inc.php' ;
$output = '';

      /**
       * START X-NAVIGATION VERTICAL 1
       * we did'nt call x-navigation.inc.php because of some rendering/displaying issues
       */
    $output.='<ul class="x-navigation x-navigation-horizontal x-navigation-panel ">';
      $output.='<!-- TOGGLE NAVIGATION -->';
      $output.='<li class="xn-icon-button">';
          $output.='<a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>';
      $output.='</li>';
      $output.='<!-- END TOGGLE NAVIGATION -->';

      $output.='<!-- END SEARCH -->';

      $output.='<!-- SIGN OUT -->';
      // $output.='<li class="xn-icon-button pull-right">';
      //     $output.='<a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>';
      // $output.='</li>';
      $output.='<!-- END SIGN OUT -->';

      $output.='</li>';
      $output.='<!-- SEARCH -->';
       $output.='<li class="xn-search pull-right">';
          $output.='<form role="form">';
              $output.='<input type="text"  name="search" />';
          $output.='</form>';
      $output.='</li>';
    $output.='</ul>';

      /**
       * START X-NAVIGATION VERTICAL 2
       *
       */
    $output.='<div class="bg-F5F5F5">';
    $output.='<ul class=" x-navigation x-navigation-horizontal x-navigation-panel" style="background-color:#F5F5F5">';
      $output.='<!-- TOGGLE NAVIGATION -->';

      $output.='<!-- END TOGGLE NAVIGATION -->';
      $output.='<li >';
       $output.='<span class="color-002840 font-family-inherit padding-left-40 font-size-20 line-height-2-5 ">KPI Reporting DashBoard</span>';
      $output.='</li>';
      $output.='<!-- END SEARCH -->';


          $output.='<li class=" pull-right ">';
              $output.='<div id="reportrange" class="reportrange border-radius-6 margin-right-6 color-fff bg-005180 padding-px-5 margin-top-10  ">';
              $output.='<span></span><b class="caret"></b>';
          $output.='</div>';
      $output.='</li>';

    $output.='</ul>';
    $output.='</div>';
      /**
       * END X-NAVIGATION VERTICAL
       */

    /**
     * START BREADCRUMB
     */
    $output.='<ul class="breadcrumb">';
      $output.='<li><a href="#">Home</a></li>';
      $output.='<li class="active">Dashboard</li>';
    $output.='</ul>';
/**
 * END BREADCRUMB
 */
$output.='<div class="page-content-wrap ">';

    /**
     * START  Widgets 1
     */

     require_once 'includes/functions-html.php';
     $Ques_sent = array (
      'value' => 1475 ,
      'label' => 'Questionairres Sent',
      );
      $Response_rate  = array (
      'value' => 275 ,
      'label' => 'Responses',
      );
     $Responses = array (
      'value' => 18.6 ,
      'label' => 'Response Rate',
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

    $output.='<div class="row margin-top-24" >';

        $output.='<div id="refresh" class=" col-md-12 " style="">';
          /**
           * START REGULAR PIE CHART
           */
          $output.='<div class="panel ">';
          $output.='<div class=" panel-header">Participation Breakdown<span class="float-right padding-right-24">N=275</span></div>';
              $output.='<div class="col-md-2 "></div>';
              $output.='<div class="col-md-8 panel-body bg-ffffff" style="height: 350px;">';
                  $output.='<div class="" id="google-bar-province-chart" style="height: 300px;"></div>';
              $output.='</div>';
              $output.='<div class="col-md-2 "></div>';
          $output.='</div>';
          /**
           * END REGULAR PIE CHART
           */
        $output.='</div>';

        // $output.='<div class="col-md-6 " style="">';
        //     /**
        //      * START REGULAR PIE CHART
        //      */
        //     $output.='<div class="panel ">';
        //     $output.='<div class=" panel-header">Meeting Activity YTD </div>';
        //         $output.='<div class="panel-body bg-ffffff padding-0">';
        //             $output.='<div class="" id="morris-line-example" style="height: 300px;"><svg></svg></div>';
        //         $output.='</div>';
        //     $output.='</div>';
        //     /**
        //      * END REGULAR PIE CHART
        //      */
        // $output.='</div>';


    $output.='</div>';

    $output.='<div class="row margin-top-24">';
          $output.='<div class="col-md-6 ">';
            /**
             * START PIE CHART
             */
            $output.='<div class="panel ">';
            $output.='<div class=" panel-header">Learning Preference</div>';
                $output.='<div class="panel-body">';
                    $output.='<div class="text-center font-size-14 font-family-open-sans">What is your preferred way of Participating in CHE ? </div>';
                    $output.='<div id="google-column-bar-chart" style=" height: 300px;"></div>';
                $output.='</div>';
            $output.='</div>';
            /**
             * END PIE CHART
             */
        $output.='</div>';

        $output.='<div class="col-md-6 ">';
           /**
             * START REGULAR PIE CHART
             */
            $output.='<div class="panel ">';
            $output.='<div class=" panel-header">Poll Question</div>';
                $output.='<div class="text-center panel-body bg-ffffff"  ">';
                $output.='<div class="text-center font-size-14">I am more likely to participate in it accredited CHE</div>';
                 $output.='<div class="padding-top-50" style=" height: 300px;">';
                   $output.='<input class="knob" data-width="200" data-min="-100" data-linecap=round data-thickness=".2" data-fgColor="#5bbbff" data-displayPrevious=true value="80"/>';
                 $output.='</div>';
                $output.='</div>';
            $output.='</div>';
            /**
             * END REGULAR PIE CHART
             */
        $output.='</div>';

        // $output.='<div class="col-md-4" >';
        //     /**
        //      * START REGULAR PIE CHART
        //      */
        //     $output.='<div class="panel">';
        //     $output.='<div class=" panel-header">Target Audience Participation</div>';
        //         $output.='<div class="panel-body bg-ffffff padding-0">';
        //             $output.='<div class="text-center padding-top-80  font-size-14"  style="height: 330px;">';
        //             $output.='<div><canvas id="dashboard-gauge"></canvas></div>';
        //             $output.='<div class="color-2DAAE1 font-size-18 font-bold"><span id="dashboard-gauge-font"></span></div>';
        //             //$output.='<input class="knob" data-width="200" data-thickness=".3" data-angleOffset="270" data-angleArc="180" data-fgColor="#0173B2" value="90"/>';
        //             $output.='</div>';

        //         $output.='</div>';
        //     $output.='</div>';
        //     /**
        //      * END REGULAR PIE CHART
        //      */
        // $output.='</div>';
    $output.='</div>';




    /*-------------------------------------------------------------------------------------------------------------*/
    $output.='<div class="row margin-top-24" >';

        $output.='<div class="col-md-6 " style="">';
          /**
           * START REGULAR PIE CHART
           */
          $output.='<div class="panel ">';
          $output.='<div class=" panel-header">Current Challenges</div>';
            $output.='<div class="panel-body bg-ffffff" >';
              $output.='<div class="text-center font-size-14 font-family-open-sans">Top 5 challenges managing patients with type 2 Diabetes</div>';
              $output.='<div id="google-pie-chart" style=" height: 320px;"></div>';
            $output.='</div>';
          $output.='</div>';
          /**
           * END REGULAR PIE CHART
           */
        $output.='</div>';

        $output.='<div class="col-md-6 " style="">';
            /**
             * START REGULAR PIE CHART
             */
            $output.='<div class="panel ">';
            $output.='<div class=" panel-header">Desired Educaion Topics</div>';
              $output.='<div class="panel-body bg-ffffff" style="height: 370px;">';
              $output.='<div class="text-center font-size-14 font-family-open-sans margin-bottom-15">I Would Like Diabetes Education To Increase My Ability To: </div>';
                    //$output.='<div id="google-stacked-chart" style=" height: 300px;"></div>';
               $output.='<div class="font-size-14 font-family-open-sans">Educate and counsel patients <span class="float-right">80%</span></div>';
              $output.='<div class="progress">';
                $output.='<div class="progress-bar " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%; background-color:#5bbbff;">';

                $output.='</div>';
              $output.='</div>';

               $output.='<div class="font-size-14 font-family-open-sans">Initiating Insulin<span class="float-right">75%</span></div>';
               $output.='<div class="progress">';
                $output.='<div class="progress-bar " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #cae9ff ;">';

                $output.='</div>';
              $output.='</div>';

              $output.='<div class="font-size-14 font-family-open-sans">Better Patient management<span class="float-right">50%</span></div>';
              $output.='<div class="progress">';
                $output.='<div class="progress-bar " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%; background-color:#005fa3;">';

                $output.='</div>';
              $output.='</div>';

              $output.='<div class="font-size-14 font-family-open-sans">Learn about new therapies<span class="float-right">60%</span></div>';
              $output.='<div class="progress">';
                $output.='<div class="progress-bar " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%; background-color: #75a2da ;">';

                $output.='</div>';
              $output.='</div>';

              $output.='<div class="font-size-14 font-family-open-sans">Titrate Doses<span class="float-right">35%</span></div>';
              $output.='<div class="progress">';
                $output.='<div class="progress-bar " role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%; background-color:#003459;">';

                $output.='</div>';
              $output.='</div>';


                $output.='</div>';
            $output.='</div>';
            /**
             * END REGULAR PIE CHART
             */
        $output.='</div>';


    $output.='</div>';
    /*---------------------------------------------------------------------------------------------------------------*/
    // $output.='<div class="row">';
    //      /**
    //       * START GOOGLE WORLD MAP
    //       */
    //     $output.='<div class="col-md-12">';
    //         $output.='<div class="panel panel-default">';
    //         $output.='<div class=" panel-header">Regional Meeting Detail</div>';
    //             $output.='<div class="panel-body panel-body-map">';
    //                 $output.='<div id="google_world_map_canada" style="height: 300px;"></div>';
    //             $output.='</div>';
    //         $output.='</div>';
    //     $output.='</div>';
    // $output.='</div>';
    /**
     * END GOOGLE WORLD MAP
     */

      $output.='<div class="row margin-top-24">';

        $output.='<div class="col-md-12">';
            $output.='<div class="panel panel-default ">';
              /**
               * START DEFAULT DATATABLE
               */
              $output.= educational_gaps();
              /**
               * END DEFAULT DATATABLE
               */
            $output.='</div>';
        $output.='</div>';

        // $output.='<div class="col-md-6">';
        //     $output.='<div class="panel panel-default ">';
        //       /**
        //        * START DEFAULT DATATABLE
        //        */
        //       $output.= speaker_table();
        //       /**
        //        * END DEFAULT DATATABLE
        //        */
        //     $output.='</div>';
        // $output.='</div>';

      $output.='</div>';

$output.='</div>';
/**
 * END PAGE CONTENT WRAPPER
 */

print ($output);
 ?>
