<?php
// function widget1( $ques_sent, $responses, $response_rate) {
 // $output = '';
  $ques_sent = 1475 ;
  $responses = 275 ;
  $response_rate = 18.6 ;

  $output.='<div class="row">';
          /**
           * START Total Meetings
           */
          $output.='<div class="col-md-4 ">';
             /*--------------------------------------------------------------------------------------*/
              $output.='<div class="dashpage-square-number-wrapper">';
                  $output.='<div class="dashpage-square-number-top">';
                    $output.='<div class="row bg-ffffff">';

                      $output.='<div class="col-md-6 col-xs-6 " style="">';
                      /*--------------------------------------------------------------------------------------*/
                        $output.='<div class=" padding-top-10 float-right"><img src="img/icons/cald-icon.png" alt="Mountain View" style="height:50px">';
                        $output.='</div>';
                      /*--------------------------------------------------------------------------------------*/
                      $output.='</div>';

                      $output.='<div class="col-md-6">';
                      /*--------------------------------------------------------------------------------------*/
                        $output.='<div class="dashpage-square-number-top padding-top-10 padding-bottom-10">';
                          $output.='<div class="animate-number h3 line-height-1-5">'.$ques_sent.'</div>';
                          $output.='<div class="h6 padding-top-6">Questionairres Sent</div>';
                        $output.='</div>';
                      /*--------------------------------------------------------------------------------------*/
                    $output.='</div>';
                  $output.='</div>';
              $output.='</div>';
             /*--------------------------------------------------------------------------------------*/

          $output.='</div>';
          /**
           * END Total Meetings
           */
          $output.='</div>';
          $output.='<div class="col-md-4 ">';

          /*--------------------------------------------------------------------------------------*/
            $output.='<div class="dashpage-square-number-wrapper">';
                $output.='<div class="dashpage-square-number-top">';
                  $output.='<div class="row bg-ffffff">';

                    $output.='<div class="col-md-6 col-xs-6 " style="">';
                    /*--------------------------------------------------------------------------------------*/
                      $output.='<div class=" padding-top-10 float-right"><img src="img/icons/linegraph-icon.png" alt="Mountain View" style="height:50px">';
                      $output.='</div>';
                    /*--------------------------------------------------------------------------------------*/
                    $output.='</div>';

                    $output.='<div class="col-md-6">';
                    /*--------------------------------------------------------------------------------------*/
                      $output.='<div class="dashpage-square-number-top padding-top-10 padding-bottom-10">';
                        $output.='<div class="animate-number-1 h3 line-height-1-5">'.$responses.'</div>';
                        $output.='<div class="h6 padding-top-6">Responses</div>';
                      $output.='</div>';
                    /*--------------------------------------------------------------------------------------*/
                  $output.='</div>';
                $output.='</div>';
            $output.='</div>';
           /*--------------------------------------------------------------------------------------*/


          $output.='</div>';

          $output.='</div>';
          $output.='<div class="col-md-4" >';
                       /*--------------------------------------------------------------------------------------*/
              $output.='<div class="dashpage-square-number-wrapper">';
                  $output.='<div class="dashpage-square-number-top">';
                    $output.='<div class="row bg-ffffff">';

                      $output.='<div class="col-md-6 col-xs-6 " style="">';
                      /*--------------------------------------------------------------------------------------*/
                        $output.='<div class=" padding-top-10 float-right"><img src="img/icons/user-icon.png" alt="Mountain View" style="height:50px">';
                        $output.='</div>';
                      /*--------------------------------------------------------------------------------------*/
                      $output.='</div>';

                      $output.='<div class="col-md-6">';
                      /*--------------------------------------------------------------------------------------*/
                        $output.='<div class="dashpage-square-number-top padding-top-10 padding-bottom-10">';
                          $output.='<div class="animate-number-2 h3 line-height-1-5">'.$response_rate.'%</div>';
                          $output.='<div class="h6 padding-top-6">Response Rate</div>';
                        $output.='</div>';
                      /*--------------------------------------------------------------------------------------*/
                    $output.='</div>';
                  $output.='</div>';
              $output.='</div>';
             /*--------------------------------------------------------------------------------------*/

          $output.='</div>';


          $output.='</div>';

      $output.='</div>';

//       return $output ;
// }
    ?>
