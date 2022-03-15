<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>

    <title></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody(); 
?>

     <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0"> 
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html">
                <!-- <img class="img-fluid" src="<?= Yii::getAlias('@web') ?>/images/logo/logo.png" alt="images"> -->
                <h3>Shoopy Spot</h3>
              </a></div>
            <div class="toggle-sidebar">
              <div class="status_toggle sidebar-toggle d-flex">        
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g> 
                    <g> 
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0003 6.6738C21.0003 8.7024 19.3551 10.3476 17.3265 10.3476C15.2979 10.3476 13.6536 8.7024 13.6536 6.6738C13.6536 4.6452 15.2979 3 17.3265 3C19.3551 3 21.0003 4.6452 21.0003 6.6738Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3467 6.6738C10.3467 8.7024 8.7024 10.3476 6.6729 10.3476C4.6452 10.3476 3 8.7024 3 6.6738C3 4.6452 4.6452 3 6.6729 3C8.7024 3 10.3467 4.6452 10.3467 6.6738Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0003 17.2619C21.0003 19.2905 19.3551 20.9348 17.3265 20.9348C15.2979 20.9348 13.6536 19.2905 13.6536 17.2619C13.6536 15.2333 15.2979 13.5881 17.3265 13.5881C19.3551 13.5881 21.0003 15.2333 21.0003 17.2619Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3467 17.2619C10.3467 19.2905 8.7024 20.9348 6.6729 20.9348C4.6452 20.9348 3 19.2905 3 17.2619C3 15.2333 4.6452 13.5881 6.6729 13.5881C8.7024 13.5881 10.3467 15.2333 10.3467 17.2619Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                  </g>
                </svg>
              </div>
            </div>
          </div>
          <div class="left-side-header col ps-0 d-none d-md-block">
            <div class="input-group"><span class="input-group-text" id="basic-addon1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g> 
                    <g> 
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2753 2.71436C16.0029 2.71436 19.8363 6.54674 19.8363 11.2753C19.8363 16.0039 16.0029 19.8363 11.2753 19.8363C6.54674 19.8363 2.71436 16.0039 2.71436 11.2753C2.71436 6.54674 6.54674 2.71436 11.2753 2.71436Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8987 18.4878C20.6778 18.4878 21.3092 19.1202 21.3092 19.8983C21.3092 20.6783 20.6778 21.3097 19.8987 21.3097C19.1197 21.3097 18.4873 20.6783 18.4873 19.8983C18.4873 19.1202 19.1197 18.4878 19.8987 18.4878Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                  </g>
                </svg></span>
              <input class="form-control" type="text" placeholder="Search here.." aria-label="search" aria-describedby="basic-addon1">
            </div>
          </div>
          <div class="nav-right col-10 col-sm-6 pull-right right-header p-0">
            <ul class="nav-menus">
              <li class="d-md-none resp-serch-input">
                <div class="resp-serch-box"><i data-feather="search"></i></div>
                <div class="form-group search-form">
                  <input type="text" placeholder="Search here...">
                </div>
              </li>
              <!-- <li class="cart-nav onhover-dropdown">
                <div class="cart-box">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                      <g>
                        <path d="M5.52377 7C9.41427 5.74386 13.9724 5.45573 16 5.5C18.0276 5.54427 18.8831 6.2663 19.5 7.5C20.5 9.5 20.289 14.4881 18.5 16.0871C16.712 17.6861 9.33015 17.8381 6.87015 16.0871C4.27115 14.2361 5.629 9.192 5.544 5.743C5.595 3.813 3.5 3.5 3.5 3.5" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 10.5H15.773" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.26399 20.1274C7.56399 20.1274 7.80799 20.3714 7.80799 20.6714C7.80799 20.9724 7.56399 21.2164 7.26399 21.2164C6.96299 21.2164 6.71899 20.9724 6.71899 20.6714C6.71899 20.3714 6.96299 20.1274 7.26399 20.1274Z" fill="#130F26" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5954 20.1274C17.8964 20.1274 18.1404 20.3714 18.1404 20.6714C18.1404 20.9724 17.8964 21.2164 17.5954 21.2164C17.2954 21.2164 17.0514 20.9724 17.0514 20.6714C17.0514 20.3714 17.2954 20.1274 17.5954 20.1274Z" fill="#130F26" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </g>
                  </svg><span class="badge rounded-pill badge-primary">2</span>
                </div>
                <div class="cart-dropdown onhover-show-div">
                  <div class="dropdown-title">             
                    <h3>Cart             </h3><a class="f-right" href="cart.html"> <i data-feather="shopping-bag">                </i></a>
                  </div>
                  <ul class="custom-scrollbar">
                    <li>
                      <div class="media"><img class="img-fluid b-r-5 me-3 img-50" src="<?= Yii::getAlias('@web') ?>/images/banner-1.jpg" alt="">
                        <div class="media-body">
                          <h5> <a href="product.html">Black shirt with jecket</a></h5>
                          <p class="f-w-700">$500</p>
                          <div class="cart-quantity"><span class="plus"><i class="fa fa-plus"></i></span>
                            <input class="count" type="text" name="qty" value="3"><span class="minus"><i class="fa fa-minus"></i></span>
                          </div>
                        </div>
                        <div class="close-circle"><a href="#"><i class="me-1" data-feather="edit"></i></a><a href="#"><i data-feather="trash-2"></i></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img class="img-fluid b-r-5 me-3 img-50" src="<?= Yii::getAlias('@web') ?>/images/product-4.png" alt="">
                        <div class="media-body">
                          <h5> <a href="product.html">Yellow white shirt.</a></h5>
                          <p class="f-w-700">$500</p>
                          <div class="cart-quantity"> <span class="plus"><i class="fa fa-plus"></i></span>
                            <input class="count" type="text" name="qty" value="3"><span class="minus"><i class="fa fa-minus"></i></span>
                          </div>
                        </div>
                        <div class="close-circle"><a href="#"><i class="me-1" data-feather="edit"></i></a><a href="#"><i data-feather="trash-2"></i></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="media"><img class="img-fluid b-r-5 me-3 img-50" src="<?= Yii::getAlias('@web') ?>/images/product-6.jpg" alt="">
                        <div class="media-body">
                          <h5> <a href="product.html">Nike Black shoes !</a></h5>
                          <p class="f-w-700">$500</p>
                          <div class="cart-quantity"> <span class="plus"><i class="fa fa-plus"></i></span>
                            <input class="count" type="text" name="qty" value="3"><span class="minus"><i class="fa fa-minus"></i></span>
                          </div>
                        </div>
                        <div class="close-circle"><a href="#"><i class="me-1" data-feather="edit"></i></a><a href="#"><i data-feather="trash-2"></i></a></div>
                      </div>
                    </li>
                    <li class="order-total">
                      <h4 class="mb-0 f-w-700">Total : <span>$100.00</span></h4><a class="btn btn-primary view-checkout" href="checkout.html">Checkout</a>
                    </li>
                  </ul>
                </div>
              </li> -->
              <!-- <li class="onhover-dropdown">
                <div class="notification-box">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g> 
                      <g> 
                        <path d="M8.54248 9.21777H15.3975" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9702 2.5C5.58324 2.5 4.50424 3.432 4.50424 10.929C4.50424 19.322 4.34724 21.5 5.94324 21.5C7.53824 21.5 10.1432 17.816 11.9702 17.816C13.7972 17.816 16.4022 21.5 17.9972 21.5C19.5932 21.5 19.4362 19.322 19.4362 10.929C19.4362 3.432 18.3572 2.5 11.9702 2.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </g>
                  </svg>
                </div>
                <div class="onhover-show-div bookmark-flip">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="front dropdown-title">
                        <h3 class="mb-2">Bookmark</h3>
                        <ul class="bookmark-dropdown pb-0">
                          <li class="p-0">
                            <div class="row">
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="file-text"></i></div>
                                  <h5 class="mt-2"> <a href="base-input.html">Forms</a></h5>
                                </div>
                              </div>
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="user"></i></div>
                                  <h5 class="mt-2"> <a href="user-profile.html">Profile</a></h5>
                                </div>
                              </div>
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="server"></i></div>
                                  <h5 class="mt-2"> <a href="datatable-basic-init.html">Tables</a></h5>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="text-center"><a class="flip-btn btn btn-primary" id="flip-btn" href="javascript:void(0)">Add New Bookmark</a></li>
                        </ul>
                      </div>
                      <div class="back dropdown-title">
                        <ul>
                          <li>
                            <div class="bookmark-dropdown flip-back-content">
                              <input type="text" placeholder="search...">
                            </div>
                          </li>
                          <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li> -->
              <li class="onhover-dropdown">
                <div class="notification-box">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                      <g>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9961 2.51416C7.56185 2.51416 5.63519 6.5294 5.63519 9.18368C5.63519 11.1675 5.92281 10.5837 4.82471 13.0037C3.48376 16.4523 8.87614 17.8618 11.9961 17.8618C15.1152 17.8618 20.5076 16.4523 19.1676 13.0037C18.0695 10.5837 18.3571 11.1675 18.3571 9.18368C18.3571 6.5294 16.4295 2.51416 11.9961 2.51416Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M14.306 20.5122C13.0117 21.9579 10.9927 21.9751 9.68604 20.5122" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </g>
                  </svg><span class="badge rounded-pill badge-warning">4 </span>
                </div>
                <div class="onhover-show-div notification-dropdown">
                  <div class="dropdown-title">
                    <h3>Notification</h3><a class="f-right" href="cart.html"> <i data-feather="bell">                           </i></a>
                  </div>
                  <ul class="custom-scrollbar">
                    <li>
                      <div class="media">
                        <div class="notification-img bg-light-primary"><img src="<?= Yii::getAlias('@web') ?>/images/avtar/man.png" alt=""></div>
                        <div class="media-body">
                          <h5> <a class="f-14 m-0" href="user-profile.html">Allie Grater</a></h5>
                          <p>Lorem ipsum dolor sit amet...</p><span>10:20</span>
                        </div>
                        <div class="notification-right"><a href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li> 
                      <div class="media">
                        <div class="notification-img bg-light-secondary"><img src="<?= Yii::getAlias('@web') ?>/images/avtar/teacher.png" alt=""></div>
                        <div class="media-body">
                          <h5> <a class="f-14 m-0" href="user-profile.html">Olive Yew</a></h5>
                          <p>Lorem ipsum dolor sit amet...</p><span>09:20</span>
                        </div>
                        <div class="notification-right"><a href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="notification-img bg-light-info"><img src="<?= Yii::getAlias('@web') ?>/images/avtar/teenager.png" alt=""></div>
                        <div class="media-body">
                          <h5> <a class="f-14 m-0" href="user-profile.html">Peg Legge</a></h5>
                          <p>Lorem ipsum dolor sit amet...</p><span>07:20</span>
                        </div>
                        <div class="notification-right"><a href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="notification-img bg-light-success"><img src="<?= Yii::getAlias('@web') ?>/images/avtar/chinese.png" alt=""></div>
                        <div class="media-body">
                          <h5> <a class="f-14 m-0" href="user-profile.html">Teri Dactyl</a></h5>
                          <p>Lorem ipsum dolor sit amet...</p><span>05:20</span>
                        </div>
                        <div class="notification-right"><a href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li class="p-0"><a class="btn btn-primary" href="#">Check all</a></li>
                  </ul>
                </div>
              </li>
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g> 
                      <g>    
                        <path d="M2.99609 8.71995C3.56609 5.23995 5.28609 3.51995 8.76609 2.94995" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8.76616 20.99C5.28616 20.41 3.56616 18.7 2.99616 15.22L2.99516 15.224C2.87416 14.504 2.80516 13.694 2.78516 12.804" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M21.2446 12.804C21.2246 13.694 21.1546 14.504 21.0346 15.224L21.0366 15.22C20.4656 18.7 18.7456 20.41 15.2656 20.99" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M15.2661 2.94995C18.7461 3.51995 20.4661 5.23995 21.0361 8.71995" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </g>
                  </svg></a></li>
              <li class="profile-nav onhover-dropdown pe-0 py-0 me-0">
                <div class="media profile-media">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g> 
                      <g> 
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.55851 21.4562C5.88651 21.4562 2.74951 20.9012 2.74951 18.6772C2.74951 16.4532 5.86651 14.4492 9.55851 14.4492C13.2305 14.4492 16.3665 16.4342 16.3665 18.6572C16.3665 20.8802 13.2505 21.4562 9.55851 21.4562Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.55849 11.2776C11.9685 11.2776 13.9225 9.32356 13.9225 6.91356C13.9225 4.50356 11.9685 2.54956 9.55849 2.54956C7.14849 2.54956 5.19449 4.50356 5.19449 6.91356C5.18549 9.31556 7.12649 11.2696 9.52749 11.2776H9.55849Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16.8013 10.0789C18.2043 9.70388 19.2383 8.42488 19.2383 6.90288C19.2393 5.31488 18.1123 3.98888 16.6143 3.68188" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M17.4608 13.6536C19.4488 13.6536 21.1468 15.0016 21.1468 16.2046C21.1468 16.9136 20.5618 17.6416 19.6718 17.8506" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </g>
                  </svg>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="user-profile.html"><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href="email-application.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="kanban.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="index.php?r=site/login"><i data-feather="log-in"> </i><span>Log in</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper"> 
          <div>
            <div class="logo-wrapper"><a href="index.html">
                <!-- <img class="img-fluid for-light" src="<?= Yii::getAlias('@web') ?>/images/logo/small-logo.png" alt=""><img class="img-fluid for-dark" src="<?= Yii::getAlias('@web') ?>/images/logo/small-white-logo.png" alt=""></a> -->
                <h3>Shoopy Spot</h3>
                <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="<?= Yii::getAlias('@web') ?>/images/logo-icon.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn">
                    <a href="index.html"><img class="img-fluid" src="<?= Yii::getAlias('@web') ?>/images/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true">        </i></div>
                  </li>
                  <li class="sidebar-list">
                    <label class="badge badge-light-primary">2</label>
                      <a class="sidebar-link sidebar-title" href="#">
                          <span class="lan-3">Dashboard</span>
                      </a>
                  </li>
            
                  <li class="sidebar-list">
                    <label class="badge badge-light-info">New</label><a class="sidebar-link sidebar-title" href="#">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <g>
                            <path d="M14.3053 15.45H8.90527" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M12.2604 11.4387H8.90442" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1598 8.3L14.4898 2.9C13.7598 2.8 12.9398 2.75 12.0398 2.75C5.74978 2.75 3.64978 5.07 3.64978 12C3.64978 18.94 5.74978 21.25 12.0398 21.25C18.3398 21.25 20.4398 18.94 20.4398 12C20.4398 10.58 20.3498 9.35 20.1598 8.3Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M13.9342 2.83276V5.49376C13.9342 7.35176 15.4402 8.85676 17.2982 8.85676H20.2492" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </g>
                        </g>
                      </svg><span>Products                </span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="index.php?r=product/index">Project List</a></li>
                      <li><a href="index.php?r=product/create">Create new</a></li>
                    </ul>
                  </li>
            
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g> 
                          <g> 
                            <path d="M15.7499 9.47167V6.43967C15.7549 4.35167 14.0659 2.65467 11.9779 2.64967C9.88887 2.64567 8.19287 4.33467 8.18787 6.42267V9.47167" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.94995 14.2074C2.94995 8.91344 5.20495 7.14844 11.969 7.14844C18.733 7.14844 20.988 8.91344 20.988 14.2074C20.988 19.5004 18.733 21.2654 11.969 21.2654C5.20495 21.2654 2.94995 19.5004 2.94995 14.2074Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </g>
                        </g>
                      </svg><span>E-commerce</span></a>
                      <ul class="sidebar-submenu">
                        <li><a href="product.html">Product</a></li>
                        <li><a href="product-page.html">Product page</a></li>
                        <li><a href="list-products.html">Product list</a></li>
                        <li><a href="payment-details.html">Payment Details</a></li>
                        <li><a href="order-history.html">Order History</a></li>
                        <li><a href="invoice-template.html">Invoice</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="list-wish.html">Wishlist</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="pricing.html">Pricing              </a></li>
                      </ul>
                  </li>
                  
               
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g> 
                          <g> 
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9724 20.3683C8.73343 20.3683 5.96643 19.8783 5.96643 17.9163C5.96643 15.9543 8.71543 14.2463 11.9724 14.2463C15.2114 14.2463 17.9784 15.9383 17.9784 17.8993C17.9784 19.8603 15.2294 20.3683 11.9724 20.3683Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9725 11.4488C14.0985 11.4488 15.8225 9.72576 15.8225 7.59976C15.8225 5.47376 14.0985 3.74976 11.9725 3.74976C9.84645 3.74976 8.12245 5.47376 8.12245 7.59976C8.11645 9.71776 9.82645 11.4418 11.9455 11.4488H11.9725Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M18.3622 10.3915C19.5992 10.0605 20.5112 8.93254 20.5112 7.58954C20.5112 6.18854 19.5182 5.01854 18.1962 4.74854" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M18.9431 13.5444C20.6971 13.5444 22.1951 14.7334 22.1951 15.7954C22.1951 16.4204 21.6781 17.1014 20.8941 17.2854" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5.58372 10.3915C4.34572 10.0605 3.43372 8.93254 3.43372 7.58954C3.43372 6.18854 4.42772 5.01854 5.74872 4.74854" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5.00176 13.5444C3.24776 13.5444 1.74976 14.7334 1.74976 15.7954C1.74976 16.4204 2.26676 17.1014 3.05176 17.2854" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </g>
                        </g>
                      </svg><span>Users</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="user-profile.html">Users Profile</a></li>
                      <li><a href="edit-profile.html">Users Edit</a></li>
                      <li><a href="user-cards.html">Users Cards</a></li>
                    </ul>
                  </li>
                </ul>
                <!-- <div class="sidebar-img-section">
                  <div class="sidebar-img-content">
                    <img class="img-fluid" src="<?= Yii::getAlias('@web') ?>/images/side-bar.png" alt="">
                    <h4>Need Help ?</h4><a class="txt" href="https://pixelstrap.freshdesk.com/support/home">Raise ticket at "support@pixelstrap.com"</a><a class="btn btn-secondary" href="https://themeforest.net/user/pixelstrap/portfolio">Buy Now</a>
                  </div>
                </div> -->
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>
                     Ecommerce</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="home-item" href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Ecommerce</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid ecommerce-dash">
            <?= $content ?>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2022 © Zeta theme by pixelstrap  </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>