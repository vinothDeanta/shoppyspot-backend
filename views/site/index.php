<?php

/** @var yii\web\View $this */
use yii\helpers\Url;
use yii\bootstrap4\Html;

$this->title = 'My Yii Application';
?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
            <h3>Dashboard</h3>
            </div>
            <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <?= Html::a('<i data-feather="home"></i>', ['site/index'], ['class' => '"home-item']) ?>    
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Ecommerce</li>
            </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid ecommerce-dash">
<div class="row">
              <div class="col-xl-3 col-md-6 dash-xl-33 dash-lg-50">
                <div class="card sales-state">
                  <div class="row m-0">
                    <div class="col-12 p-0"> 
                      <div class="card bg-primary">
                        <div class="card-header card-no-border bg-primary"> 
                          <div class="media media-dashboard">
                            <div class="media-body"> 
                              <h5 class="mb-0 text-light">Sales Stats</h5>
                            </div>
                            <div class="icon-box"><i data-feather="more-horizontal"></i></div>
                          </div>
                        </div>
                        <div class="card-body p-0">
                          <div id="sales-state-chart"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-4 p-0">
                      <div class="sales-small-chart">
                        <div class="card-body p-0 m-auto">
                          <div class="sales-small sales-small-1"></div>
                          <h6>300</h6><span>Watch Sale  </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-4 p-0">
                      <div class="sales-small-chart">
                        <div class="card-body p-0 m-auto">
                          <div class="sales-small sales-small-2"></div>
                          <h6>1120</h6><span>Phone Sale</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-4 p-0">
                      <div class="sales-small-chart">
                        <div class="card-body p-0 m-auto">
                          <div class="sales-small sales-small-3"></div>
                          <h6>530</h6><span>Tablet Sale </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-5 col-md-6 dash-xl-33 dash-lg-50">
                <div class="card pb-0 invoice-overviwe">                
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h5 class="m-0">Invoice Overview</h5>
                      <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                        <div class="icon-box-show onhover-show-div">
                          <ul> 
                            <li> <a>
                                 Today</a></li>
                            <li> <a>
                                 Yesterday</a></li>
                            <li> <a>
                                 Tommorow</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div id="invoice-overviwe-chart"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 dash-lgorder-1 dash-xl-33 dash-lg-50">
                <div class="card hot-selling">
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h5 class="m-0">Hot Selling Products</h5>
                      <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                        <div class="icon-box-show onhover-show-div">
                          <ul> 
                            <li> <a>
                                 Today</a></li>
                            <li> <a>
                                 Yesterday</a></li>
                            <li> <a>
                                 Tommorow</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="table-responsive">        
                      <table class="table table-bordernone">                          
                        <tbody> 
                          <tr>
                            <td>
                              <div class="media"><img class="img-fluid me-3 b-r-5" src="../assets/images/dashboard-2/rectangle-26.png" alt="">
                                <div class="media-body"><a href="product-page.html">
                                    <h5>Dominoes Coffee Table Game</h5></a>
                                  <p>60k Sales</p>
                                </div>
                              </div>
                            </td>
                            <td><span class="badge badge-light-theme-light font-theme-light">$50</span></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media"> <img class="img-fluid me-3 b-r-5" src="../assets/images/dashboard-2/rectangle-27.png" alt="">
                                <div class="media-body"><a href="product-page.html">
                                    <h5>Photive Wireless speakers</h5></a>
                                  <p>35k Sales</p>
                                </div>
                              </div>
                            </td>
                            <td><span class="badge badge-light-theme-light font-theme-light">$25</span></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media"><img class="img-fluid me-3 b-r-5" src="../assets/images/dashboard-2/rectangle-28.png" alt="">
                                <div class="media-body"><a href="product-page.html">
                                    <h5>Urbanears Lotsen Speaker</h5></a>
                                  <p>53k Sales</p>
                                </div>
                              </div>
                            </td>
                            <td><span class="badge badge-light-theme-light font-theme-light">$30</span></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media"><img class="img-fluid me-3 b-r-5" src="../assets/images/dashboard-2/rectangle-29.png" alt="">
                                <div class="media-body"><a href="product-page.html">
                                    <h5>Plattan 2 Headphones</h5></a>
                                  <p>35k Sales</p>
                                </div>
                              </div>
                            </td>
                            <td><span class="badge badge-light-theme-light font-theme-light">$45                          </span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-5 col-md-12 dash-xl-50 dash-lg-100 dash-39">
                <div class="card ongoing-project recent-orders">
                  <div class="card-header card-no-border">
                    <div class="media media-dashboard">
                      <div class="media-body"> 
                        <h5 class="mb-0">Recent Orders</h5>
                      </div>
                      <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                        <div class="icon-box-show onhover-show-div">
                          <ul> 
                            <li> <a>
                                 Done</a></li>
                            <li> <a>
                                 Pending</a></li>
                            <li> <a>
                                 Rejected</a></li>
                            <li> <a>In Progress</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="table-responsive">
                      <table class="table table-bordernone">
                        <thead> 
                          <tr> 
                            <th> <span>Product Name</span></th>
                            <th> <span>Customer</span></th>
                            <th> <span>Price                                     </span></th>
                            <th> <span>Quantity</span></th>
                            <th> <span>Status</span></th>
                          </tr>
                        </thead>
                        <tbody> 
                          <tr>
                            <td>
                              <div class="media">
                                <div class="square-box me-2"><img class="img-fluid b-r-5" src="../assets/images/dashboard-2/running-shoe.png" alt=""></div>
                                <div class="media-body ps-2">
                                  <div class="avatar-details"><a href="product-page.html">
                                      <h6>Nike Sports NK</h6></a><span> Free delivery</span></div>
                                </div>
                              </div>
                            </td>
                            <td class="img-content-box">
                              <h6>Harold More</h6><span>UK Desig Team</span>
                            </td>
                            <td>
                              <h6>$99.85</h6><span>Nok                                   </span>
                            </td>
                            <td> 
                              <h6>20</h6>
                            </td>
                            <td>
                              <div class="badge badge-light-primary">Done</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media">
                                <div class="square-box me-2"><img class="img-fluid b-r-5" src="../assets/images/dashboard-2/hand-bag.png" alt=""></div>
                                <div class="media-body ps-2">
                                  <div class="avatar-details"><a href="product-page.html">
                                      <h6>Women Bag</h6></a><span> ₹83.65 delivery</span></div>
                                </div>
                              </div>
                            </td>
                            <td class="img-content-box">
                              <h6>Daniel Poller</h6><span>UX Ninjas</span>
                            </td>
                            <td>
                              <h6>$79.99</h6><span>Nok                                   </span>
                            </td>
                            <td> 
                              <h6>12</h6>
                            </td>
                            <td>
                              <div class="badge badge-light-secondary">Pending</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media">
                                <div class="square-box me-2"><img class="img-fluid b-r-5" src="../assets/images/dashboard-2/sun-glasses.png" alt=""></div>
                                <div class="media-body ps-2">
                                  <div class="avatar-details"><a href="product-page.html">
                                      <h6>Sunglasses</h6></a><span> Free delivery</span></div>
                                </div>
                              </div>
                            </td>
                            <td class="img-content-box">
                              <h6>Frank Borker</h6><span>SF Dev Team</span>
                            </td>
                            <td>
                              <h6>$59.20</h6><span>Nok                                    </span>
                            </td>
                            <td> 
                              <h6>23</h6>
                            </td>
                            <td>
                              <div class="badge badge-light-danger">Rejected</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media">
                                <div class="square-box me-2"><img class="img-fluid b-r-5" src="../assets/images/dashboard-2/shirt.png" alt=""></div>
                                <div class="media-body ps-2">
                                  <div class="avatar-details"><a href="product-page.html">
                                      <h6>Cotton T-shirt</h6></a><span> ₹283.65 delivery</span></div>
                                </div>
                              </div>
                            </td>
                            <td class="img-content-box">
                              <h6>Adam Moris</h6><span>Moscow Office</span>
                            </td>
                            <td>
                              <h6>$49.99</h6><span>Nok                                    </span>
                            </td>
                            <td> 
                              <h6>34</h6>
                            </td>
                            <td>
                              <div class="badge badge-light-info">In Progress</div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 dash-xl-50 dash-29">
                <div class="card our-activities">
                  <div class="card-header card-no-border">
                    <div class="media media-dashboard">
                      <div class="media-body"> 
                        <h5 class="mb-0">Our Activities      </h5>
                      </div>
                      <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                        <div class="icon-box-show onhover-show-div">
                          <ul> 
                            <li> <a>
                                 Latest </a></li>
                            <li> <a>
                                 Earlist</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="table-responsive">
                      <table class="table table-bordernone">                          
                        <tbody> 
                          <tr>
                            <td>
                              <div class="media">
                                <div class="icon-wrappar"><i class="fa fa-trophy font-primary">                                    </i></div>
                                <div class="media-body"><a href="#">
                                    <h5>Win best seller of the year awaed </h5></a>
                                  <p>Company, San Francisco</p>
                                </div>
                              </div>
                            </td>
                            <td><span class="badge badge-light-theme-light font-theme-light">1 day ago</span></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media">
                                <div class="icon-wrappar"><i class="fa fa-check-circle font-secondary">                                   </i></div>
                                <div class="media-body"><a href="#">
                                    <h5>Apporved our product</h5></a>
                                  <p>Elisse joson, San Francisco</p>
                                </div>
                              </div>
                            </td>
                            <td><span class="badge badge-light-theme-light font-theme-light">2 weeks ago</span></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media">
                                <div class="icon-wrappar"><i class="fa fa-bookmark font-success">                                    </i></div>
                                <div class="media-body"><a href="#">
                                    <h5>Win best seller of the year awaed </h5></a>
                                  <p>Company, San Francisco</p>
                                </div>
                              </div>
                            </td>
                            <td><span class="badge badge-light-theme-light font-theme-light">3 day ago</span></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="media">
                                <div class="icon-wrappar"><i class="fa fa-shopping-basket font-warning">                                     </i></div>
                                <div class="media-body"><a href="#">
                                    <h5>Apporved our product in checking</h5></a>
                                  <p>35k Sales</p>
                                </div>
                              </div>
                            </td>
                            <td><span class="badge badge-light-theme-light font-theme-light">2 hours ago</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 dash-xl-50 dash-32">
                <div class="card revenue-category">
                  <div class="card-header card-no-border">
                    <div class="media">
                      <div class="media-body"> 
                        <h5 class="mb-0">Revenue by Category</h5>
                      </div>
                      <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                        <div class="icon-box-show onhover-show-div">
                          <ul> 
                            <li> <a>
                                 Done</a></li>
                            <li> <a>
                                 Pending</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="donut-inner">
                      <h5>16,349</h5>
                      <h6>2,174 in pending</h6>
                    </div>
                    <div id="revenue-chart">            </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-5 col-md-6 dash-lgorder-1 dash-xl-50 dash-39">
                <div class="card special-discount">
                  <div class="card-body">
                    <div class="discount-slide owl-carousel owl-theme">
                      <div class="item">
                        <div class="row discount-block"> 
                          <div class="col-xl-7 col-lg-12 dash-xl-100"> 
                            <div class="discount-detail">
                              <div>
                                <h5> Special Discount <span class="font-primary f-w-500">70%OFF</span></h5>
                                <h3 class="m-auto">Deal of the Day from <span class="font-primary">$75</span></h3>
                                <ul class="timer-sec countdown"> 
                                  <li>
                                    <h6 class="font-primary m-0 days"> </h6><span class="font-dark">Days </span>
                                  </li>
                                  <li>
                                    <h6 class="font-primary m-0 hours"> </h6><span class="font-dark">Hours</span>
                                  </li>
                                  <li>
                                    <h6 class="font-primary m-0 minutes"> </h6><span class="font-dark">Min</span>
                                  </li>
                                  <li>
                                    <h6 class="font-primary m-0 seconds"> </h6><span class="font-dark">Sec</span>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-5 col-lg-12 dash-xl-100">
                            <div class="img-wrraper"><img class="img-fluid" src="../assets/images/dashboard-2/image.png" alt=""></div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="row discount-block"> 
                          <div class="col-xl-7 col-lg-12 dash-xl-100"> 
                            <div class="discount-detail">
                              <div>
                                <h5> Special Discount <span class="font-primary f-w-500">70%OFF</span></h5>
                                <h3 class="m-auto">Deal of the Day from <span class="font-primary">$75</span></h3>
                                <ul class="timer-sec countdown"> 
                                  <li>
                                    <h6 class="font-primary m-0 days"> </h6><span class="font-dark">Days </span>
                                  </li>
                                  <li>
                                    <h6 class="font-primary m-0 hours"> </h6><span class="font-dark">Hours</span>
                                  </li>
                                  <li>
                                    <h6 class="font-primary m-0 minutes"> </h6><span class="font-dark">Min</span>
                                  </li>
                                  <li>
                                    <h6 class="font-primary m-0 seconds"> </h6><span class="font-dark">Sec</span>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-5 col-lg-12 dash-xl-100">
                            <div class="img-wrraper"><img class="img-fluid" src="../assets/images/dashboard-2/image.png" alt=""></div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="row discount-block"> 
                          <div class="col-xl-7 col-lg-12 dash-xl-100"> 
                            <div class="discount-detail">
                              <div>
                                <h5> Special Discount <span class="font-primary f-w-500">70%OFF</span></h5>
                                <h3 class="m-auto">Deal of the Day from <span class="font-primary">$75</span></h3>
                                <ul class="timer-sec countdown"> 
                                  <li>
                                    <h6 class="font-primary m-0 days"> </h6><span class="font-dark">Days </span>
                                  </li>
                                  <li>
                                    <h6 class="font-primary m-0 hours"> </h6><span class="font-dark">Hours</span>
                                  </li>
                                  <li>
                                    <h6 class="font-primary m-0 minutes"> </h6><span class="font-dark">Min</span>
                                  </li>
                                  <li>
                                    <h6 class="font-primary m-0 seconds"> </h6><span class="font-dark">Sec</span>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-5 col-lg-12 dash-xl-100">
                            <div class="img-wrraper"><img class="img-fluid" src="../assets/images/dashboard-2/image.png" alt=""></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 dash-xl-50 dash-29">
                <div class="card bg-primary get-support">
                  <div class="card-body">
                    <div class="support-sec-img"><img class="img-fluid" src="../assets/images/dashboard-2/support-img.png" alt=""></div>
                    <div class="support-detail">
                      <h5>Get support 24 hours</h5>
                      <p>Check Our new service & feature about sales!                             </p><a class="btn btn-outline-white_color" href="product-page.html">Interested?</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 dash-xl-50 dash-31">
                <div class="card total-sale">
                  <div class="card-header card-no-border">
                    <div class="media">
                      <div class="media-body"> 
                        <h5 class="mb-0">Total sale</h5>
                      </div>
                      <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                        <div class="icon-box-show onhover-show-div">
                          <ul>
                            <li><a>Done</a></li>
                            <li> <a>
                                 Pending</a></li>
                            <li> <a>
                                 Rejected</a></li>
                            <li> <a>In Progress</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="animat-block">
                      <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body pt-0"> 
                    <div class="sale-main">
                      <div class="sale-left">
                        <h6 class="font-danger"><i class="icon-arrow-down"></i><span>0.45%</span></h6>
                        <h5 class="font-primary">680.96</h5>
                      </div>
                      <div class="sale-right">
                        <div id="total-sales-chart"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>



<!-- <div class="site-index">
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div> -->
