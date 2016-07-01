<!DOCTYPE html>
<?php
  session_start();

  if(isset($_SESSION['lang'])) {
    if($_SESSION['lang']=='en')
      include('lang/en.php'); 
    else
      include('lang/pt.php'); 

  } else {
    include('lang/en.php');
  }
  ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Shareacar</title>
    
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-slider.css" rel="stylesheet">
    <link href="fonts/fonts.css" rel="stylesheet">
    <link href="fonts/font-awesome.css" rel="stylesheet">
    
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/mobile.css" rel="stylesheet">

     <link href="css/maria.css" rel="stylesheet">
     <link href="css/slider.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <?php 
          // se for PT deve é "pt-PT"
          $l = 'en';
       ?>
      <div class="wrapper col-xs-12">

          <!-- NOVO MENU -->
          <div class="row menuPage">
            <nav class="navbar navbar-default">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                  </button>
                  <a class="navbar-brand" href="#"> <img src="images/logo.png" alt="Shareacar"> </a>
                  <!-- diplays on mobile only -->
                  <ul class="nav navbar-nav navbar-right hidden-sm hidden-md hidden-lg pull-right menuMobile">
                    <li ><a href="https://www.shareacar.com.pt/<?php echo $l ?>/login"><?php echo LOG_IN ?></a></li>
                    <li><a href="https://www.shareacar.com.pt/<?php echo $l ?>/signup"><?php echo SIGN_UP ?></a></li>
                  </ul>
                  <!-- diplays on mobile only -->
                </div>

              
                <!-- diplays on desktop -->
                <ul class="nav navbar-nav navbar-right hidden-xs">
                    <li ><a href="https://www.shareacar.com.pt/<?php echo $l ?>/login"><?php echo LOG_IN ?></a></li>
                    <li><a href="https://www.shareacar.com.pt/<?php echo $l ?>/signup"><?php echo SIGN_UP ?></a></li>
                    <li class="dropdown ">
                      <a href="#" class="dropdown-toggle langMenu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo MENU_LANG_EN; ?> <span class="caret"></span></a>
                      <ul class="dropdown-menu dropdown-menu-left">
                        <li><a href="setLang.php?l=en"><?php echo MENU_LANG_EN; ?></a></li>
                        <li><a href="setLang.php?l=pt"><?php echo MENU_LANG_PT; ?></a></li>
                      </ul>
                    </li>
                    <li class="dropdown menuBtn">
                      <a class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                        <button><i class="fa fa-bars" aria-hidden="true"></i> <?php echo MENU; ?></button>
                      </a>
                      <ul class="dropdown-menu shareacar-menu dropdown-menu-left">
                        <li><a href="https://www.shareacar.com.pt/<?php echo $l ?>/"> <i class="fa fa-home" aria-hidden="true"></i> <?php echo HOME_MENU_SH; ?></a></li>
                        <li><a href="https://www.shareacar.com.pt/<?php echo $l ?>/infos/about"> <i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo HOME_ABOUT_SH; ?></a></li>
                        <li><a href="https://www.shareacar.com.pt/<?php echo $l ?>/user_feedbacks/new"> <i class="fa fa-bullhorn" aria-hidden="true"></i> <?php echo HOME_CONTACT_SH; ?></a></li>
                        <li><a href="#"> <i class="fa fa-share" aria-hidden="true"></i> <?php echo HOME_TUT_SH; ?></a></li>
                      </ul>
                    </li>
                    <li class="btnPostListing">
                      <a href="https://www.shareacar.com.pt/<?php echo $l ?>/login"> <button class="btn btn-listing" ><?php echo POST_LISTING ?></button></a>
                    </li>
                  </ul>
                <!-- diplays on desktop -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- diplays on mobile only -->
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right hidden-sm  hidden-md hidden-lg">
                    <li class="menuBtn">
                      <ul class="shareacar-menu">
                        <li><a href="https://www.shareacar.com.pt/<?php echo $l ?>/"> <i class="fa fa-home" aria-hidden="true"></i> <?php echo HOME_MENU_SH; ?></a></li>
                        <li><a href="https://www.shareacar.com.pt/<?php echo $l ?>/login"> <i class="fa fa-file" aria-hidden="true"></i></i> <?php echo POST_LISTING ?></a></li>
                        <li><a href="https://www.shareacar.com.pt/<?php echo $l ?>/infos/about"> <i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo HOME_ABOUT_SH; ?></a></li>
                        <li><a href="https://www.shareacar.com.pt/<?php echo $l ?>/user_feedbacks/new"> <i class="fa fa-bullhorn" aria-hidden="true"></i> <?php echo HOME_CONTACT_SH; ?></a></li>
                        <li><a href="#"> <i class="fa fa-share" aria-hidden="true"></i> <?php echo HOME_TUT_SH; ?></a></li>
                      </ul>
                    </li>
                    <li class="languageMenuMobile">
                      <ul class="shareacar-menu ">
                        <li class="selectLang">Select a language</li>
                        <li><a href="#"><?php echo MENU_LANG_EN; ?></a></li>
                        <li><a href="#"><?php echo MENU_LANG_PT; ?></a></li>
                      </ul>
                    </li>
                  </ul>
                  <!-- diplays on mobile only -->
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
          <!-- NOVO MENU FIM -->

          <!-- BLOCO 2 -->
          <div class="row block-2">
              <h1 class="col-xs-12"><?php echo FORM_GREETING; ?></h1>
              <div class="col-xs-12" style="text-align:center;">
                  <form class="col-xs-12">
                    <input class="inputForm" type="text" name="" value="" placeholder="<?php echo FORM_PLACEHOLDER; ?>" />
                    <button class="btn  btn-primary btnForm"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </form>
              </div>
          </div>
          <!-- BLOCO 2 FIM -->

          <!-- BLOCO 3 -->
          <div class="row block-3">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe id="video" class="embed-responsive-item" src="https://www.youtube.com/embed/a_u3euzU_cI"></iframe>
            </div>
          </div>
          <!-- BLOCO 3 FIM -->

          <!-- BLOCO 4 -->
          <div class="row block-4">
            <div class="row-height">

              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 content-1">

                <div class="arrow_box">
                  <h2><?php echo B4_H2_CONTENT; ?></h2>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 content-2">
                  <div class="row">
                    <h3><?php echo B4_H3_RENT_1_CONTENT; ?>
                      <hr />
                    </h3>
                    <div class="col-xs-10 col-xs-offset-1 ol-item-list">
                      <ol>
                        <li>
                          <span class='order-item'>1</span>
                          <div class="item-agregator">
                            <label><?php echo B4_OL_RENT_ITEM_1; ?></label>
                            <span class="caret seta-drop"></span>
                          </div>
                          <p><?php echo B4_OL_RENT_CONTENT_ITEM_1; ?></p>
                        </li>

                        <li>
                            <span class='order-item'>2</span>
                            <div class="item-agregator">
                              <label>  <?php echo B4_OL_RENT_ITEM_2; ?></label> 
                              <span class="caret seta-drop"></span>
                            </div>
                            <p><?php echo B4_OL_RENT_CONTENT_ITEM_2; ?></p>
                        </li>
                        
                        <li> 
                          <span class='order-item'>3</span>

                            <div class="item-agregator">
                              <label>  <?php echo B4_OL_RENT_ITEM_3; ?></label> 
                              <span class="caret seta-drop"></span>
                            </div> 
                            <p><?php echo B4_OL_RENT_CONTENT_ITEM_3; ?></p>
                        </li>


                        <li> <span class='order-item'>4</span>

                            <div class="item-agregator">
                              <label>  <?php echo B4_OL_RENT_ITEM_4; ?></label> 
                              <span class="caret seta-drop"></span>
                            </div> 
                            <p><?php echo B4_OL_RENT_CONTENT_ITEM_4; ?></p>
                         </li>
                        <li> <span class='order-item'>5</span>

                            <div class="item-agregator">
                              <label>  <?php echo B4_OL_RENT_ITEM_5; ?></label> 
                              <span class="caret seta-drop"></span>
                            </div> 
                            <p><?php echo B4_OL_RENT_CONTENT_ITEM_5; ?></p>
                        </li>
                        <li>  <span class='order-item'>6</span>

                            <div class="item-agregator">
                              <label>  <?php echo B4_OL_RENT_ITEM_6; ?></label> 
                              <span class="caret seta-drop"></span>
                            </div> 
                            <p><?php echo B4_OL_RENT_CONTENT_ITEM_6; ?></p>
                              
                        </li>
                      </ol>
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 content-3">
                   <div class="row">
                    <h3><?php echo B4_H3_LIST_1_CONTENT; ?>
                      <hr />
                    </h3>
                    <div class="col-xs-10 col-xs-offset-1 ol-item-list">
                      <ol>
                        <li>
                          <span class='order-item'>1</span>
                          <div class="item-agregator">
                            <label><?php echo B4_OL_LIST_ITEM_1; ?></label>
                            <span class="caret seta-drop"></span>
                          </div>
                          <p><?php echo B4_OL_LIST_CONTENT_ITEM_1; ?></p>
                        </li>

                        <li>
                            <span class='order-item'>2</span>
                            <div class="item-agregator">
                              <label>  <?php echo B4_OL_LIST_ITEM_2; ?></label> 
                              <span class="caret seta-drop"></span>
                            </div>
                            <p><?php echo B4_OL_LIST_CONTENT_ITEM_2; ?></p>
                        </li>
                        
                        <li> 
                          <span class='order-item'>3</span>


                            <div class="item-agregator">
                              <label>  <?php echo B4_OL_LIST_ITEM_3; ?></label> 
                              <span class="caret seta-drop"></span>
                            </div> 
                            <p><?php echo B4_OL_LIST_CONTENT_ITEM_3; ?></p>
                        </li>


                        <li> <span class='order-item'>4</span>

                            <div class="item-agregator">
                              <label>  <?php echo B4_OL_LIST_ITEM_4; ?></label> 
                              <span class="caret seta-drop"></span>
                            </div> 
                            <p><?php echo B4_OL_LIST_CONTENT_ITEM_4; ?></p>
                         </li>
                        <li> <span class='order-item'>5</span>

                            <div class="item-agregator">
                              <label>  <?php echo B4_OL_LIST_ITEM_5; ?></label> 
                              <span class="caret seta-drop"></span>
                            </div> 
                            <p><?php echo B4_OL_LIST_CONTENT_ITEM_5; ?></p>
                        </li>

                        <li> <span class='order-item'>6</span>

                            <div class="item-agregator">
                              <label>  <?php echo B4_OL_LIST_ITEM_6; ?></label> 
                              <span class="caret seta-drop"></span>
                            </div> 
                            <p><?php echo B4_OL_LIST_CONTENT_ITEM_6; ?></p>
                        </li>
                   
                      </ol>
                    </div>
                  </div>
                </div>

            </div>
          </div>  
          <!-- BLOCO 4 FIM -->

          <!-- BLOCO 5 -->
          <div class="row block-5">
              <div class="col-xs-12">
                <h2><?php echo B5_H2_CONTENT; ?></h2>
              </div>
              <div class="container_p clearfix">
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <h3><?php echo B5_H3_CONTENT_1; ?></h3>
                    <p><?php echo B5_P_CONTENT_1; ?></p>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <h3><?php echo B5_H3_CONTENT_2; ?></h3>
                    <p><?php echo B5_P_CONTENT_2; ?></p>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4">
                    <h3><?php echo B5_H3_CONTENT_3; ?></h3>
                    <p><?php echo B5_P_CONTENT_3; ?></p>
                  </div>
              </div>

              <div class ="svgAnim clearfix">
                    <!-- Carro1 -->
                    <svg id="carro1" style="position:absolute; bottom:3px; left:100%;z-index:2; " data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.9 16.02"  height="21.360001" width="71.866669">
                        <defs>
                            <style>

                                #carro1 .cls-1 {
                                    fill: #363636;
                                }
                                
                                #carro1 .cls-2 {
                                    fill: #a52b31;
                                }
                                
                                #carro1 .cls-3 {
                                    fill: #f9f384;
                                }
                                
                                #carro1 .cls-4 {
                                    fill: #cb2228;
                                }
                                
                                #carro1 .cls-5 {
                                    fill: #b5d0e0;
                                }
                                
                                #carro1 .cls-6 {
                                    fill: #5d5b5b;
                                }
                                
                                #carro1 .cls-7 {
                                    fill: #6e1e1f;
                                }
                            </style>
                        </defs>
                        <title>carro_1</title>
                        <path class="cls-1" d="M59.5,22.56c0-.22-0.4-0.06-0.18-0.06h4.42c0.22,0,.4,0,0.4.23l-0.4.61c-0.12.25-.18,0.16-0.4,0.16h-4c-0.22,0,.18.13,0.18-0.09V22.56Z" transform="translate(-10.5 -10.82)" />
                        <path class="cls-2" d="M28.39,15s-7.21.2-9.61,0.4c-2.85.23-8.28,1.57-8.28,3.8,0,3.23,2.42,5.54,4.33,5.54,11.73,0,44.46-.1,44.46-0.1a7.2,7.2,0,0,0,2.25-1.14,2.56,2.56,0,0,0,.29-0.38c1.17-1.82,3.87-5.57,1.85-6.95,0,0-7.42-5.13-15.13-5.13,0,0-4.6-.16-6.63-0.18C38.74,10.79,36.38,10.83,28.39,15Z" transform="translate(-10.5 -10.82)" />
                        <ellipse class="cls-3" cx="14.3" cy="17.62" rx="2.96" ry="0.5" transform="translate(-15.31 -5.44) rotate(-18.29)" />
                        <path class="cls-4" d="M62.64,17.36a1.49,1.49,0,0,1,.59-1.2l0.25,0.17A2.08,2.08,0,0,1,64,18.84,1.46,1.46,0,0,1,62.64,17.36Z" transform="translate(-10.5 -10.82)" />
                        <path class="cls-5" d="M54.27,13.15c0.21,0.11.75,0.7-.72,1.27a17.27,17.27,0,0,1-7,1.08H33.61a14.4,14.4,0,0,1-5.14-.6c-0.09-.07-0.08,0-0.08,0a53.69,53.69,0,0,1,6.66-3C51.29,11.17,53.45,12.73,54.27,13.15Z" transform="translate(-10.5 -10.82)" />
                        <rect class="cls-2" x="38" y="0.68" width="1" height="5" />
                        <rect class="cls-2" x="30.08" y="13.34" width="10.44" height="0.8" transform="translate(-12.88 6.82) rotate(-27.18)" />
                        <path class="cls-1" d="M44.5,18.11c0,0.22,0,.39.2,0.39h2.2a0.62,0.62,0,0,0,.6-0.39V17.89a0.62,0.62,0,0,0-.6-0.39H44.7c-0.22,0-.2.17-0.2,0.39v0.22Z" transform="translate(-10.5 -10.82)" />
                        <path class="cls-3" d="M61.62,23.5a4,4,0,0,1-2.33,1.21s-32.73.13-44.46,0.13a3.37,3.37,0,0,1-2.67-1.34H61.62Z" transform="translate(-10.5 -10.82)" />
                        <circle class="cls-1" cx="43.35" cy="11.02" r="5" />
                        <circle class="cls-6" cx="43.35" cy="11.02" r="3.54" />
                        <circle class="cls-1" cx="10.55" cy="11.02" r="5" />
                        <circle class="cls-6" cx="10.55" cy="11.02" r="3.54" />
                        <path class="cls-7" d="M32.59,15.64c0,0.45.37,0.57,0.82,0.57s0.82-.11.82-0.57-0.37-.48-0.82-0.48S32.59,15.19,32.59,15.64Z" transform="translate(-10.5 -10.82)" />
                        <path class="cls-7" d="M33,15.81a0.23,0.23,0,0,1-.23.14H32a0.35,0.35,0,0,1-.25-0.08,0.14,0.14,0,0,1,0-.16,0.56,0.56,0,0,1,.28-0.11l0.38,0a1,1,0,0,1,.38,0h0A0.2,0.2,0,0,1,33,15.81Z" transform="translate(-10.5 -10.82)" />
                    </svg><!-- /. Carro1 -->


                    <!-- Carro 2 -->
                    <svg id="carro2" style="position:absolute; bottom:17px; right:110%; z-index:1;  " data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52.86 22.73"  height="30.306667"  width="70.480003">
                       <style type="text/css">
                         #carro2 .st0{fill:#363636;}
                         #carro2 .st1{fill:#A8AA8F;}
                         #carro2 .st2{fill:#6B5152;}
                         #carro2 .st3{fill:#B5D0E0;}
                         #carro2 .st4{fill:#5D5B5B;}
                         #carro2 .st5{fill:#F9F384;}
                         #carro2 .st6{fill:#CB2228;}
                      </style>
                      <title>carro_2</title>
                      <path class="st0" d="M5.2,7.7C5.3,6.5,4.5,5.3,3.3,5H3C1.7,5,0.7,6,0.5,7.3L0,13.5c-0.1,1.2,0.8,2.3,2,2.5h0.3
                        c1.2,0,2.2-0.9,2.3-2.1L5.2,7.7z"/>
                      <path class="st1" d="M4.3,16.6c0,2,2,2.4,3,2.4h43.3c0,0,2.3-0.3,2.3-3.5c0-2.2-0.4-5.3-2.3-6.1c-2.8-1.2-12.3-2.5-12.3-2.5
                        S35.9,4.1,34,1.7C32.6-0.1,31.9,0,30.9,0L8.6,0c-2.5,0-3,3.5-3,3.5S4.3,14.6,4.3,16.6z"/>
                      <path class="st2" d="M4.3,16h48.5c0,3-2.3,3-2.3,3H7.3c-0.9,0-3-0.1-3-2.1C4.3,16.6,4.3,16.3,4.3,16z"/>
                      <path class="st3" d="M20.1,7c-0.2,0,0.2-0.3,0.2-0.5V2.2c0-0.2,3-0.2,3.2-0.2h10.4l4.4,5.2L20.1,7z"/>
                      <path class="st3" d="M19.4,2.2v4.3c-0.6,0.6-1.3,1.1-2,1.5h-10C7.1,7.8,7,7.5,7,7.1l0.3-3.7c0-1,0.8-1.4,1.8-1.4h8.1
                        C17.5,2,19.4,1.9,19.4,2.2z"/>
                      <path class="st0" d="M23.4,8.4v0.1c0,0.2-0.2,0.4-0.5,0.4h-2.1c-0.2,0-0.5-0.2-0.5-0.4V8.4c0-0.2,0.2-0.5,0.5-0.5h2.1
                        C23.2,8,23.4,8.2,23.4,8.4z"/>
                      <circle class="st0" cx="41.7" cy="17.1" r="5.6"/>
                      <circle class="st4" cx="41.7" cy="17.1" r="3.7"/>
                      <circle class="st0" cx="13.1" cy="17.1" r="5.6"/>
                      <circle class="st4" cx="13.1" cy="17.1" r="3.7"/>
                      <path class="st5" d="M51.5,11h0.3c0.6,1.3,0.9,2.6,0.9,4h-1.3c-0.8,0-1.2-1.7-1.2-2.6v-0.1c0-0.1,0-0.3,0-0.4
                        C50.5,11.2,51,10.9,51.5,11L51.5,11z"/>
                      <rect x="32.4" y="2" class="st1" width="1" height="6"/>
                      <path class="st2" d="M33.4,5.6C33.4,5.4,32.2,6,32,6h-3.2c-0.1,0,0-0.1,0,0.1v1.2c-0.1,0.2-0.1,0.5,0,0.7H32c0.5-0.1,1-0.4,1.3-0.7
                        V5.6z"/>
                      <path class="st6" d="M5.7,3.3L5.7,3.3L5,8.9h0.3c0.5,0.1,0.8-0.2,0.9-1l0.3-3.4C6.6,4,6.2,3.5,5.7,3.3L5.7,3.3z"/>
                    </svg> <!-- /. carro 2 -->


                    <!-- Carro 3 -->
                    <svg id="carro3" data-name="Layer 1" style="position:absolute; bottom:3px; left:110%;z-index:2;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.07 19.81" height="26.413334" width="68.09333" >
                        <defs>
                            <style>
                                #carro3 .cls-1 {
                                    fill: #5e8db7;
                                }
                                
                                #carro3 .cls-2 {
                                    fill: #cb2228;
                                }
                                
                                #carro3 .cls-3 {
                                    fill: #f9f384;
                                }
                                
                                #carro3 .cls-4 {
                                    fill: #b5d0e0;
                                }
                                
                                #carro3 .cls-5 {
                                    fill: #363636;
                                }
                                
                                #carro3 .cls-6 {
                                    fill: #3f617a;
                                }
                                
                                #carro3 .cls-7 {
                                    fill: #5d5b5b;
                                }
                            </style>
                        </defs>
                        <title>carro_3</title>
                        <path class="cls-1" d="M61.32,18.5H37.18c-3.73,0-6.37,8-8.43,8H23.52c-2.73,0-6,1.86-6,4.6v3.22c0,1,1.85,2.19,2.8,2.19h47.6c1,0,.59-1.23.59-2.19V26.89C68.5,22.78,64.25,18.5,61.32,18.5Z" transform="translate(-17.5 -18.5)" />
                        <path class="cls-2" d="M68.29,27.5s-0.79-.46-0.79.6v1.44c0,0.75.37,2,.71,2H68.5v-4H68.29Z" transform="translate(-17.5 -18.5)" />
                        <path class="cls-3" d="M19.5,30.51v-2a1.77,1.77,0,0,0,0-.36,4.94,4.94,0,0,0-2,3.92v0.18l0.21,0A1.79,1.79,0,0,0,19.5,30.51Z" transform="translate(-17.5 -18.5)" />
                        <rect class="cls-4" x="27" y="2" width="11" height="7" rx="1.19" ry="1.19" />
                        <path class="cls-4" d="M68.05,26.18a1.22,1.22,0,0,1-1.19,1.32H58.95c-0.66,0-1.45-1.49-1.45-2.14V21c0-.66.79-0.5,1.45-0.5h3.17C64.59,20.5,67.63,24.33,68.05,26.18Z" transform="translate(-17.5 -18.5)" />
                        <path class="cls-4" d="M43.5,25.36c0,1.52-.13,2.14-0.78,2.14h-9.1a1.27,1.27,0,0,1-1.19-1.32c0-2,3-5.68,5.15-5.68h5.15c0.66,0,.78-0.25.78,0.5v4.35Z" transform="translate(-17.5 -18.5)" />
                        <path class="cls-5" d="M43.85,29a0.49,0.49,0,0,1-.4.5H40.67a0.49,0.49,0,0,1-.4-0.5h0a0.49,0.49,0,0,1,.4-0.5h2.78a0.49,0.49,0,0,1,.4.5h0Z" transform="translate(-17.5 -18.5)" />
                        <rect class="cls-5" x="34" y="10" width="4" height="1" rx="0.4" ry="0.4" />
                        <path class="cls-6" d="M31.5,25.38a1.15,1.15,0,0,1,1.15-.81l2.68,0c0.46,0,.18.36,0.18,0.81v1.13c0,0.46.43,0.73,0,.73l-3.18,0a0.72,0.72,0,0,1-.79-0.73V25.38Z" transform="translate(-17.5 -18.5)" />
                        <path class="cls-6" d="M17.5,34.31v-1l51-.5v1.52c0,1,.36,2.19-0.59,2.19H20.3C19.35,36.5,17.5,35.27,17.5,34.31Z" transform="translate(-17.5 -18.5)" />
                        <circle class="cls-5" cx="44.93" cy="15.21" r="4.61" />
                        <circle class="cls-7" cx="44.93" cy="15.21" r="3.1" />
                        <circle class="cls-5" cx="9.62" cy="15.21" r="4.61" />
                        <circle class="cls-7" cx="9.62" cy="15.21" r="3.1" />
                    </svg><!-- /. Carro 3 -->



                    <!-- Carro 4 -->
                    <svg id="carro4" style="position:absolute; bottom:17px; right:110%; z-index:1; " data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.99 19.81" height="26.413334" width="55.986668">
                        <style type="text/css">
                          #carro4 .st0{fill:#D38461;}
                          #carro4 .st1{fill:#CE5B5F;}
                          #carro4 .st2{fill:#363636;}
                          #carro4 .st3{fill:#5D5B5B;}
                          #carro4 .st4{fill:#CB2228;}
                          #carro4 .st5{fill:#F9F384;}
                          #carro4 .st6{fill:#B5D0E0;}
                        </style>
                        <title>carro_4</title>
                        <path class="st0" d="M0.2,11c-0.2,1.6-0.2,3.2,0,4.8C0.3,16.6,0.7,18,1.5,18h38.8c1-0.1,1.8-1.1,1.7-2.1c0-1.6-0.2-3.2-0.8-4.7
                          c-0.8-1.4-2.1-2.3-3.6-2.6c-1.4-0.3-3.5-0.3-6-1.9C28.2,4.3,26.4,0,17.2,0l-5.2,0C4.5,0,1.1,6.7,0.2,11z"/>
                        <path class="st1" d="M40.3,18H1.5c-0.8,0-1.2-1.3-1.3-2.2c0-0.3-0.1-1-0.1-1.4L42,15.1c0,0.2,0,0.6,0,0.7
                          C42.1,16.9,41.4,17.9,40.3,18z"/>
                        <circle class="st2" cx="7.6" cy="15.4" r="4.4"/>
                        <circle class="st3" cx="7.6" cy="15.4" r="2.9"/>
                        <circle class="st2" cx="32.2" cy="15.4" r="4.4"/>
                        <circle class="st3" cx="32.2" cy="15.4" r="2.9"/>
                        <path class="st4" d="M0.6,13.5c-0.4-0.2-0.6-0.6-0.6-1v-0.1c-0.1-0.4,0-0.8,0.4-1C0.4,12.1,0.5,12.8,0.6,13.5z"/>
                        <path class="st5" d="M39.6,9.7c0.2-0.1,0.3-0.1,0.5-0.1c0.5,0.4,0.9,0.9,1.2,1.5c0.1,0.2,0.2,0.5,0.3,0.8c-0.1,0.2-0.2,0.4-0.4,0.5
                          L41,12.4c-0.5,0.3-1.2,0.1-1.5-0.4l-0.4-0.8C38.8,10.7,39,10,39.6,9.7L39.6,9.7z"/>
                        <path class="st6" d="M21,8h9.1C26.9,1,21,0.3,21,0.3V8z"/>
                        <rect x="12" y="0" class="st6" width="8" height="8"/>
                        <path class="st6" d="M3.7,8H11V0.3C6,0.5,1.2,8,3.7,8z"/>
                        <path class="st2" d="M22,9.3v0.3c0,0.2-0.2,0.4-0.4,0.4h-1.3C20.2,10,20,9.8,20,9.6V9.3C20,9.2,20.2,9,20.4,9h1.3
                          C21.8,9,22,9.2,22,9.3z"/>
                        <path class="st2" d="M13,9.3v0.3c0,0.2-0.2,0.4-0.4,0.4h-1.3C11.2,10,11,9.8,11,9.6V9.3C11,9.2,11.2,9,11.4,9h1.3
                          C12.8,9,13,9.2,13,9.3z"/>
                        <path class="st1" d="M32,8.1c-0.4,0.4-0.8,0.7-1.4,0.9h-2.9C27.5,9,28,8.3,28,8.1V6.9C28,6.7,27.5,7,27.8,7h2.9C31,7,32,6.7,32,6.9
                          V8.1z"/>
                    </svg><!-- /. Carro 4 -->


                    <!-- Carro 5 -->
                    <svg id="carro5" style="position:absolute; bottom:17px; right:110%; z-index:1;"  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.86 19.8"  height="26.413334" width="50.266666">
                        <style type="text/css">
                          #carro5 .st0{fill:#5FA69B;}
                          #carro5 .st1{fill:#508D83;}
                          #carro5 .st2{fill:#363636;}
                          #carro5 .st3{fill:#5D5B5B;}
                          #carro5 .st4{fill:#CB2228;}
                          #carro5 .st5{fill:#F9F384;}
                          #carro5 .st6{fill:#B5D0E0;}
                        </style>
                        <title>carro_5</title>
                        <path class="st0" d="M0.1,10.9c-0.2,1.6-0.2,3.2,0,4.8c0.1,0.8,0.5,2.2,1.3,2.2H36c1-0.1,1.8-1.1,1.7-2.1c0-1.6-0.2-3.2-0.7-4.7
                          c-0.8-1.4-2.1-2.3-3.6-2.6c-1.4-0.3-3.5-0.3-6-1.9C23.9,4.3,22.1,0,12.9,0L12,0C4.6,0,1.2,6.7,0.1,10.9z"/>
                        <path class="st1" d="M36.1,18.1H1.5c-0.8,0-1.2-1.4-1.3-2.2c0-0.3-0.1-1-0.1-1.4l37.7,0.6v0.7C37.9,16.9,37.2,17.8,36.1,18.1z"/>
                        <circle class="st2" cx="7.7" cy="15.4" r="4.4"/>
                        <circle class="st3" cx="7.7" cy="15.4" r="2.9"/>
                        <circle class="st2" cx="28" cy="15.4" r="4.4"/>
                        <circle class="st3" cx="28" cy="15.4" r="2.9"/>
                        <path class="st4" d="M0.9,13.5c-0.4-0.1-0.4-0.5-0.4-1v-0.1c0-0.5-0.2-0.9,0.2-1C0.8,12.1,0.8,12.8,0.9,13.5z"/>
                        <path class="st5" d="M35.4,9.6c0.2-0.1,0.3-0.1,0.5-0.1c0.5,0.4,0.9,0.9,1.2,1.5c0.1,0.3,0.2,0.5,0.3,0.8c-0.1,0.2-0.3,0.4-0.5,0.5
                          l-0.1,0.1c-0.5,0.3-1.2,0.1-1.5-0.4l-0.4-0.8c-0.3-0.5-0.1-1.2,0.4-1.5L35.4,9.6z"/>
                        <path class="st6" d="M12.5,8h13.4c-4.6-8-13.4-7.7-13.4-7.7V8z"/>
                        <path class="st6" d="M3.8,8h6.7V0.3C6.5,0.5,1.2,8,3.8,8z"/>
                        <path class="st2" d="M11.5,9.6c0,0.2,0.1,0.3,0.3,0.3h1.3c0.2,0,0.3-0.1,0.3-0.3V9.3c0-0.2-0.1-0.3-0.3-0.3h-1.3
                          c-0.2,0-0.3,0.1-0.3,0.3V9.6z"/>
                        <path class="st1" d="M27.5,8.2c-0.4,0.4-0.9,0.7-1.4,0.9h-2.9c-0.4,0,0.2-0.7,0.2-0.9V6.9c0-0.2-0.5,0.1-0.2,0.1h2.9
                          c0.3,0,1.4-0.3,1.4-0.1V8.2z"/>
                      </svg><!-- /. Carro 5 -->

                      <!-- Aviao -->
                        <svg id="aviao" style="position:absolute; top:0px; right:110%; z-index:3;" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 142.29 47.56" height="52" width="175.54668">
                            <defs>
                              <style>
                                #aviao .cls-1{fill:#716262;}
                                #aviao .cls-2{fill:none;}
                                #aviao .cls-3{clip-path:url(#clip-path);}
                                #aviao .cls-4{fill:#666;}.cls-5{fill:#fff;}
                                #aviao .cls-6{clip-path:url(#clip-path-2);}
                                #aviao .cls-7{fill:#d1d1d1;}.cls-8{fill:#4c4242;}
                                #aviao .cls-9{fill:#282c33;}
                              </style>
                              <clipPath id="clip-path" transform="translate(-5.96 -5.31)">
                                <path class="cls-1" d="M97.4,36.23s-0.9,5.12-.3,6.57c0,0,9.38,2.31,12.37,1.2,0,0,2.26-5.45.43-8.74C109.89,35.27,101.53,34.36,97.4,36.23Z"/>
                              </clipPath>
                              <clipPath id="clip-path-2" transform="translate(-5.96 -5.31)">
                                <path class="cls-2" d="M19.22,30.12s-6.3-.92-6.29.31a12,12,0,0,1-.16,2.1s17.62,8.32,38,9.16,76.4-2.19,76.4-2.19,13-1.72,12.74-6.12c0,0,.34-2.19-5.28-4.1,0,0-2.42-4.75-9.6-5.38s-81.67,2.26-81.67,2.26-7,.2-9.23-3.85S24,5.34,24,5.34l-5.54,0Z"/>
                              </clipPath>
                            </defs>
                            <title>aviao</title>
                            <path class="cls-1" d="M97.4,36.23s-0.9,5.12-.3,6.57c0,0,9.38,2.31,12.37,1.2,0,0,2.26-5.45.43-8.74C109.89,35.27,101.53,34.36,97.4,36.23Z" transform="translate(-5.96 -5.31)"/>
                            <path class="cls-1" d="M97.4,36.23s-0.9,5.12-.3,6.57c0,0,9.38,2.31,12.37,1.2,0,0,2.26-5.45.43-8.74C109.89,35.27,101.53,34.36,97.4,36.23Z" transform="translate(-5.96 -5.31)"/>
                            <g class="cls-3">
                              <polyline class="cls-4" points="90.71 35.04 105.26 35.43 104.55 40.61 89.77 38.95 90.63 35.26"/>
                            </g>
                            <path class="cls-5" d="M19.22,30.12s-6.3-.92-6.29.31a12,12,0,0,1-.16,2.1s17.62,8.32,38,9.16,76.4-2.19,76.4-2.19,13-1.72,12.74-6.12c0,0,.34-2.19-5.28-4.1,0,0-2.42-4.75-9.6-5.38s-81.67,2.26-81.67,2.26-7,.2-9.23-3.85S24,5.34,24,5.34l-5.54,0Z" transform="translate(-5.96 -5.31)"/>
                            <g class="cls-6">
                              <polygon class="cls-7" points="6.29 28.2 138.42 27.46 142.29 44.93 0 47.56 6.29 28.2"/>
                            </g>
                            <path class="cls-8" d="M42.14,30.82" transform="translate(-5.96 -5.31)"/>
                            <path class="cls-8" d="M116.93,28.25" transform="translate(-5.96 -5.31)"/>
                            <polygon class="cls-9" points="122.43 21.92 122.35 23.71 124.15 23.75 124.17 21.71 122.43 21.92"/>
                            <path class="cls-9" d="M130.63,27.21l0.07,1.8,2.56-.14S132,27,130.63,27.21Z" transform="translate(-5.96 -5.31)"/><path class="cls-9" d="M133.91,29.2l-1.09-1.65a3.29,3.29,0,0,1,2.1,1.85Z" transform="translate(-5.96 -5.31)"/>
                            <rect class="cls-9" x="115.76" y="28.37" width="1.01" height="0.94" transform="translate(78.13 138.92) rotate(-88.35)"/>
                            <rect class="cls-9" x="111.8" y="28.58" width="1.01" height="0.94" transform="translate(74 135.15) rotate(-88.31)"/>
                            <rect class="cls-9" x="107.76" y="28.65" width="1.01" height="0.94" transform="translate(70.09 131.2) rotate(-88.35)"/>
                            <rect class="cls-9" x="103.8" y="28.86" width="1.01" height="0.94" transform="translate(66.03 127.45) rotate(-88.35)"/>
                            <rect class="cls-9" x="100.02" y="29.01" width="1.01" height="0.94" transform="translate(62.13 123.79) rotate(-88.31)"/>
                            <rect class="cls-9" x="96.06" y="29.23" width="1.01" height="0.94" transform="translate(58.13 120.06) rotate(-88.35)"/>
                            <rect class="cls-9" x="92.02" y="29.29" width="1.01" height="0.94" transform="translate(54.15 116.09) rotate(-88.35)"/>
                            <rect class="cls-9" x="88.06" y="29.51" width="1.01" height="0.94" transform="translate(50.09 112.33) rotate(-88.35)"/>
                            <rect class="cls-9" x="82.76" y="29.65" width="1.01" height="0.94" transform="translate(44.81 107.17) rotate(-88.35)"/>
                            <rect class="cls-9" x="78.8" y="29.86" width="1.01" height="0.94" transform="translate(40.69 103.4) rotate(-88.31)"/>
                            <rect class="cls-9" x="76.86" y="30.02" width="1.01" height="0.94" transform="translate(38.65 101.62) rotate(-88.31)"/>
                            <rect class="cls-9" x="74.76" y="29.92" width="1.01" height="0.94" transform="translate(36.76 99.45) rotate(-88.35)"/>
                            <rect class="cls-9" x="72.83" y="30.09" width="1.01" height="0.94" transform="translate(34.68 97.65) rotate(-88.31)"/>
                            <rect class="cls-9" x="70.8" y="30.14" width="1.01" height="0.94" transform="translate(32.65 95.68) rotate(-88.31)"/>
                            <rect class="cls-9" x="68.87" y="30.3" width="1.01" height="0.94" transform="translate(30.66 93.92) rotate(-88.35)"/>
                            <rect class="cls-9" x="67.02" y="30.29" width="1.01" height="0.94" transform="translate(28.87 92.06) rotate(-88.35)"/>
                            <rect class="cls-9" x="65.08" y="30.45" width="1.01" height="0.94" transform="translate(26.79 90.27) rotate(-88.31)"/>
                            <rect class="cls-9" x="61.12" y="30.67" width="1.01" height="0.94" transform="translate(22.8 86.55) rotate(-88.38)"/>
                            <rect class="cls-9" x="57.08" y="30.73" width="1.01" height="0.94" transform="translate(18.78 82.56) rotate(-88.35)"/>
                            <rect class="cls-9" x="53.12" y="30.95" width="1.01" height="0.94" transform="translate(14.72 78.81) rotate(-88.35)"/>
                            <rect class="cls-9" x="49.89" y="31.1" width="1.01" height="0.94" transform="translate(11.39 75.71) rotate(-88.31)"/>
                            <rect class="cls-9" x="45.93" y="31.32" width="1.01" height="0.94" transform="translate(7.36 71.98) rotate(-88.35)"/>
                            <rect class="cls-9" x="41.9" y="31.38" width="1.01" height="0.94" transform="translate(3.36 67.99) rotate(-88.31)"/>
                            <path class="cls-4" d="M94.24,38S54.07,16.3,51.79,15.78s-7.07-1.13-6-.2S70.52,33.07,71,34.77,71.26,38,72.37,38.3,90.79,39.82,94.24,38Z" transform="translate(-5.96 -5.31)"/>
                            <polygon class="cls-4" points="22.49 27.2 19.03 28.63 2.29 21.71 6.38 21.29 22.49 27.2"/>
                            <path class="cls-5" d="M90.2,35.51s-0.9,5.12-.3,6.57c0,0,9.38,2.31,12.37,1.2,0,0,2.26-5.45.43-8.74C102.7,34.55,94.34,33.64,90.2,35.51Z" transform="translate(-5.96 -5.31)"/>
                          </svg> <!-- /. Aviao -->



              </div>
              
          </div><!-- /.Bloco 5 -->
          <!-- BLOCO 5 FIM -->

          <!-- BLOCO 6 -->
          <div class="row block-6">
              <div class="row-height">

              <div class="col-xs-12 col-md-4 col-lg-4 content-2 col-md-push-8">
                    
                      <div class="arrow_box">
                        <h2><?php echo B6_H2_CONTENT; ?></h2>
                      </div>
                   

                  </div>

                  <div class="col-xs-12 col-md-8 col-lg-8 content-1 col-md-pull-4">

                        <div class="col-xs-12 col-sd-6 col-md-6 col-lg-6 car-select">
                          <div class="row">

                          <div class="col-xs-10 col-xs-offset-1 car-select-choice">
                            <div class="col-xs-10 col-xs-offset-1  car-frame">
                              <center>
                                <img class="car-earn" src="images/car-example.png"/>
                              </center>  
                            </div>
                            <h3 class="col-xs-10 col-xs-offset-1"><?php echo B6_H3_CONTENT; ?></h3>
                          </div>
                          <div class="well">
                            <!-- <div class="slider slider-horizontal" id="ex1Slider">
                                <div class="slider-track">
                                    <div class="slider-track-low" style="left: 0px; width: 0%;"></div>
                                    <div class="slider-selection" style="left: 0%; width: 76%;"></div>
                                    <div class="slider-track-high" style="right: 0px; width: 24%;"></div>
                                    <div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="-5" aria-valuemax="20" aria-valuenow="14" tabindex="0" style="left: 76%;"></div>
                                    <div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="-5" aria-valuemax="20" aria-valuenow="-5" tabindex="0" style="left: 0%;"></div>
                                </div>
                                <div class="tooltip tooltip-main top" role="presentation" style="left: 76%; margin-left: -53.5px;">
                                    <div class="tooltip-arrow"></div>
                                    <div class="tooltip-inner">Current value: 14</div>
                                </div>
                                <div class="tooltip tooltip-min top" role="presentation">
                                    <div class="tooltip-arrow"></div>
                                    <div class="tooltip-inner"></div>
                                </div>
                                <div class="tooltip tooltip-max bottom" role="presentation" style="top: 18px;">
                                    <div class="tooltip-arrow"></div>
                                    <div class="tooltip-inner"></div>
                                </div>
                            </div> -->
                            <center>

                             <input id="ex1" data-slider-id="ex1Slider" type="text"  value ='60' data-slider-tooltip="hide" style="display: none;">
                              <span id="ex6CurrentSliderValLabel"><span id="ex6SliderVal">16000€</span></span>

                             </center> 
                          </div>
                        </div>

                      
                        </div>

                        <div class="col-xs-12 col-sd-6 col-md-6 col-lg-6 day-select">
                            <div class="col-xs-10 col-xs-offset-1 calendar-select-choice">
                                <span class="day-number">1</span>

                            </div>
                            <h3><?php echo B6_H3_DAYS_RENT; ?></h3>


                        <div class="well">
                            <!-- <div class="slider slider-horizontal" id="ex1Slider">
                                <div class="slider-track">
                                    <div class="slider-track-low" style="left: 0px; width: 0%;"></div>
                                    <div class="slider-selection" style="left: 0%; width: 76%;"></div>
                                    <div class="slider-track-high" style="right: 0px; width: 24%;"></div>
                                    <div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="-5" aria-valuemax="20" aria-valuenow="14" tabindex="0" style="left: 76%;"></div>
                                    <div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="-5" aria-valuemax="20" aria-valuenow="-5" tabindex="0" style="left: 0%;"></div>
                                </div>
                                <div class="tooltip tooltip-main top" role="presentation" style="left: 76%; margin-left: -53.5px;">
                                    <div class="tooltip-arrow"></div>
                                    <div class="tooltip-inner">Current value: 14</div>
                                </div>
                                <div class="tooltip tooltip-min top" role="presentation">
                                    <div class="tooltip-arrow"></div>
                                    <div class="tooltip-inner"></div>
                                </div>
                                <div class="tooltip tooltip-max bottom" role="presentation" style="top: 18px;">
                                    <div class="tooltip-arrow"></div>
                                    <div class="tooltip-inner"></div>
                                </div>
                            </div> -->

                            <center>
                             <input id="ex2" data-slider-id="ex2Slider" type="text"  data-slider-tooltip="hide" data-slider-min="1" data-slider-max="30" data-slider-step="1" data-slider-value="3" data-value="3" value="3" style="display: none;">
                             <center>
                        </div>
                        </div>

                          <div class="col-xs-12 simulator-results">
                            <h3><?php echo B6_H3_EARN; ?> <span class="earn-value"> 1800 €</span></h3>
                       </div>

                        <div class="col-xs-12 money-earned">
                          <img src="images/dinheiro_2-01.png" alt="">
                        </div>
                      

                  </div>

                  




              </div>    


          </div>
          <!-- BLOCO 6 FIM -->


          <!-- BLOCO 7 -->
          <div class="row block-7">
            <div class="row-height">

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 content-1 clearfix">
                    <div class="arrow_box">
                      <h2><?php echo B7_H2_CONTENT; ?></h2>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 content-2 clearfix">
                      <h3><?php echo B7_H3_CONTENT; ?></h3>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 content-3 clearfix">
                     <img src="images/avatars.svg">
                </div>
                
            </div>
          </div>
          <!-- BLOCO 7 FIM -->

          <!-- BLOCO 8 -->
          <div class="row block-8">
           <div class="row-height">

               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-push-8 content-1 clearfix">
                    <div class="arrow_box">
                      <h2><?php echo B8_H2_CONTENT; ?></h2>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-pull-4 content-2 clearfix">
                    <div class="content2elements">
                      <img src="images/logo_allianz.png">
                      <h3><?php echo B8_H3_CONTENT; ?></h3>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-pull-4 content-3 clearfix">
                     <img src="images/seguros.svg">
                </div>
            </div>
          </div>
          <!-- BLOCO 8 FIM -->
          
          <!-- BLOCO 9 -->
          <div class="row block-9 ">
            <div class="col-xs-12 centerDiv">
              <div class="col-xs-12 linksFooter">
                <ul>
                  <li><a href=""><?php echo B9_LINK_1; ?></a></li>
                  <li><a href=""><?php echo B9_LINK_2; ?></a></li>
                  <li><a href=""><?php echo B9_LINK_3; ?></a></li>
                </ul>
              </div>

              <div class="col-xs-12 socialFooter">
                 <ul>
                  <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i> </a></li>
                  <li><a href=""> <i class="fa fa-facebook-square" aria-hidden="true"></i> </a></li>
                  <li><a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                </ul>
              </div>

               <div class="col-xs-12 dateFooter">
                  <p>&copy;<script>document.write(new Date().getFullYear())</script> Shareacar</p>
              </div>

            </div><!-- /. centerDiv  -->
          </div>
          <!-- BLOCO 9 FIM -->
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/velocity.js"></script>
     <script src="js/svgAnim.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-slider.js"></script>
    <script src="js/custom-ho.js"></script>

  </body>
</html>