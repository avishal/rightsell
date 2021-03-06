<?php

/* @var $this yii\web\View */

$this->title = 'Rightsell';
?>
<section class="bg_white">
  <div class="container">
    <div class="row text-center">
      <h2>We have that every choice of yours with us</h2>
    </div>
  </div>
</section>
<section class="bg_white1">
  <div class="container-fluid">
    <div class="row">
      <div class="container">
        <ul class="nav nav-tabs responsive" id="myTab">
          <li class=" col-md-4 test-class tab1 active"><a href="#resi" class="tab1"></a></li>
          <li class=" col-md-4 test-class tab2 "><a class="deco-none tab2" href="#com"></a></li>
          <li class=" col-md-4 test-class tab3 "><a class="deco-none tab3" href="#agri"></a></li>
        </ul>
      </div>
      <div class="tab-content responsive">
        <div class="tab-pane active" id="resi">
          <section class="rent">
            <div class="container">
              <div class="row text-center" style="margin-bottom:15px;">
                <h2><input type="radio" id="r1" name="rr" />
        <label for="r1" style="margin:0; font-size:20px;"><span></span>Rent </label> | <input type="radio" id="r2" name="rr" />
        <label for="r2" style="margin:0; font-size:20px;"><span></span>Buy </label> </h2>
              </div>
              <div class="row bg_gray">
                <div class="col-md-3 col-sm-6" >
                  <div class="dropdown">
                    <div id="" class="dd wrapper-dropdown-3 dd_resi" tabindex="1">
                        <span>Select City</span>
                        <ul class="dropdown">
                            <li><a href="#">Pune</a></li>
                            <li><a href="#">Mumbai</a></li>
                            <li><a href="#">Thane</a></li>
                            <li><a href="#">Nashik</a></li>
                            <li><a href="#">Nagpur</a></li>
                            <li><a href="#">Solapur</a></li>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6" >
                  <div class="dropdown">
                    <div id="" class="dd2 wrapper-dropdown-3 dd_resi2" tabindex="1">
                        <span>Select Area</span>
                        <ul class="dropdown">
                            <li><a href="#">Swarget</a></li>
                            <li><a href="#">Satara Rd.</a></li>
                            <li><a href="#">Koreganv Park</a></li>
                            <li><a href="#">Karve Nagar</a></li>
                            <li><a href="#">Kothrud</a></li>
                            <li><a href="#">Hadapsar</a></li>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6" >
                  <div class="dropdown">
                    <div id="dd" class="wrapper-dropdown-4 dd_resi3" tabindex="1">
                        <span>Select Area</span>
                        <ul class="dropdown">
                            <li><input type="checkbox" id="el-1" name="el-1" value="donut"><label for="el-1">1 BHK</label></li>
                            <li><input type="checkbox" id="el-2" name="el-2" value="neighbour"><label for="el-2">2 BHK</label></li>
                            <li><input type="checkbox" id="el-3" name="el-3" value="T-rex"><label for="el-3">3 BHK</label></li>
                            <li><input type="checkbox" id="el-3" name="el-3" value="T-rex"><label for="el-3">5 BHK</label></li>
    
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6" >
                  <div class="dropdown">
                    <div id="" class="dd4 wrapper-dropdown-3 dd_resi4" tabindex="1">
                        <span>Select Budget</span>
                        <ul class="dropdown">
                            <li><a href="#">10 Lac - 20 Lac</a></li>
                            <li><a href="#">20 Lac - 30 Lac</a></li>
                            <li><a href="#">40 Lac - 80 Lac</a></li>
                            <li><a href="#">80 Lac - 1 Cr.</a></li>
                        </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="business_place">
            <div class="container">
              <div class="row text-center">
                <div class="col-md-12 col-sm-12">
                  <button type="button" class="btn btn-danger">Get a Dream Home</button>
                </div>
              </div>
            </div>
          </section>
          <section class="hot_property_resi">
            <div class="container">
              <div class="row text-center">
                <div class="col-md-12 col-sm-12">
                  <h2>Hot Properties</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-6 nopadding nomargin">
                  <ul class="nav nav-tabs tabs-left">
                    <li class="active"><a href="#Hot_properties_for_rent" data-toggle="tab">Hot Properties for Rent</a></li>
                    <li><a href="#Hot_properties_to_buy" data-toggle="tab">Hot Properties to Buy</a></li>
                    <li><a href="#Hot_Commercial_Properties" data-toggle="tab">Hot Commercial Properties</a></li>
                    <li><a href="#Your_Agricultural_Farms" data-toggle="tab">Your Agricultural Farms</a></li>
                  </ul>
                </div>
                <div class="col-md-9 col-sm-12 nopadding ">
                  <div class="tab-content">
                    <div class="tab-pane active" id="Hot_properties_for_rent">
                      <div class="row">
                        <div class="col-md-3 nomargin nopadding">
                          <ul class="nav nav-tabs area_tabs">
                            <li class="active"><a href="#Undri" data-toggle="tab">Undri</a></li>
                            <li><a href="#Loni" data-toggle="tab">Loni</a></li>
                            <li><a href="#Wagholi" data-toggle="tab">Wagholi</a></li>
                            <li><a href="#Kharadi" data-toggle="tab">Kharadi</a></li>
                            <li><a href="#Kondhwa" data-toggle="tab">Kondhwa</a></li>
                            <li><a href="#Aundh" data-toggle="tab">Aundh</a></li>
                            <li><a href="#Koregao_park" data-toggle="tab">Koregao park</a></li>
                            <li><a href="#Kalyani_nagar" data-toggle="tab">Kalyani nagar</a></li>
                            <li><a href="#Khadaki" data-toggle="tab">Khadaki</a></li>
                            <li><a href="#Hadapsar" data-toggle="tab">Hadapsar</a></li>
                            <li><a href="#Karve_Nagar" data-toggle="tab">Karve Nagar</a></li>
                            <li><a href="#Kothrud" data-toggle="tab">Kothrud</a></li>
                            <li><a href="#Khadaki" data-toggle="tab">Khadaki</a></li>
                            <li><a href="#Hadapsar" data-toggle="tab">Hadapsar</a></li>
                            <li><a href="#Karve_Nagar" data-toggle="tab">Karve Nagar</a></li>
                          </ul>
                        </div>
                        <div class="col-md-9 nopadding">
                          <div class="tab-content">
                            <div class="tab-pane active" id="Undri">
                              <div class="scroll-pane">
                              <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                              <div class="row  home_pro_box home_pro_box_2">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                              <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Loni">
                                  <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                                  <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                            </div>
                            <div class="tab-pane" id="Wagholi">
                              <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                                  <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                            </div>
                            <div class="tab-pane" id="Kharadi">
                              <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                                  <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                            </div>
                            <div class="tab-pane" id="Kondhwa">
                              <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                                  <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                            </div>
                            <div class="tab-pane" id="Aundh">
                              <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                                  <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                            </div>
                            <div class="tab-pane" id="Koregao_park">
                              <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                                  <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                            </div>
                            <div class="tab-pane" id="Kalyani_nagar">
                              <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                                  <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                            </div>
                            <div class="tab-pane" id="Khadaki">
                              <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                                  <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                            </div>
                            <div class="tab-pane" id="Hadapsar">
                              <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                                  <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                            </div>
                            <div class="tab-pane" id="Karve_Nagar">
                              <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                                  <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                            </div>
                            <div class="tab-pane" id="Kothrud">
                              <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                                  <div class="row home_pro_box">
            <div class="col-sm-5 nopadding">
                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                    <div class="item">
                      <img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="row home_pro_detail">
                <h1>2 BHK, Near Bridge, Wakad.</h1>
                <button class="button yellow_btn">2 BHK</button>
                <button class="button orrange_btn">Rent 12,000</button>
                <button class="button yellow_btn">Deposit 30,000</button>
                <div class="row">
                    <div class="col-xs-6"><p><img src="images/family.png" alt="">Family only</p></div>
                    <div class="col-xs-6"><p><img src="images/car.png" alt="">Car Parking</p></div>
                </div>  
                    <div class="row">
                    <div class="col-xs-6"><p><img src="images/area.png" alt="">Area - 600 Sq.Ft.</p></div>
                    <div class="col-xs-6"><p><img src="images/furnished.png" alt="">Un-furnished</p></div>
                    <div class="col-xs-12"><strong>Status:</strong> This property 2 years old</div>
                    </div>
                    <div class="row">
                    <div class="col-xs-6"><button class="button red_btn">Contact Owner</button></div>
                    <div class="col-xs-6"><table>
  <tr>
    <td><a href="#"><img src="images/ico1.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico2.png" alt="" border="0"></a></td>
    <td><a href="#"><img src="images/ico3.png" alt="" border="0"></a></td>
  </tr>
</table></div>
                </div>
                </div>
          </div>
          <div class="col-sm-2"></div>
      </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="Hot_properties_to_buy">
                      <div class="row">
                        <div class="col-md-3 nomargin nopadding">
                          <ul class="nav nav-tabs area_tabs">
                            <li class="active"><a href="#Undri_2" data-toggle="tab">Undri</a></li>
                            <li><a href="#Loni_2" data-toggle="tab">Loni</a></li>
                            <li><a href="#Wagholi_2" data-toggle="tab">Wagholi</a></li>
                            <li><a href="#Kharadi_2" data-toggle="tab">Kharadi</a></li>
                            <li><a href="#Kondhwa_2" data-toggle="tab">Kondhwa</a></li>
                            <li><a href="#Aundh_2" data-toggle="tab">Aundh</a></li>
                            <li><a href="#Koregao_park_2" data-toggle="tab">Koregao park</a></li>
                            <li><a href="#Kalyani_nagar_2" data-toggle="tab">Kalyani nagar</a></li>
                            <li><a href="#Khadaki_2" data-toggle="tab">Khadaki</a></li>
                            <li><a href="#Hadapsar_2" data-toggle="tab">Hadapsar</a></li>
                            <li><a href="#Karve_Nagar_2" data-toggle="tab">Karve Nagar</a></li>
                            <li><a href="#Kothrud_2" data-toggle="tab">Kothrud</a></li>
                          </ul>
                        </div>
                        <div class="col-md-9">
                          <div class="tab-content">
                            <div class="tab-pane active" id="Undri_2">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Undri Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Loni_2">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Loni Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Wagholi_2">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Wagholi Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Kharadi_2">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Kharadi Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Kondhwa_2">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Kondhwa Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Aundh_2">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Aundh Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Koregao_park_2">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Koregao_park Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Kalyani_nagar_2">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Kalyani_nagar Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Khadaki_2">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Khadaki Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Hadapsar_2">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Hadapsar Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Karve_Nagar_2">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Karve_Nagar Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Kothrud_2">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Kothrud Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="Hot_Commercial_Properties">
                      <div class="row">
                        <div class="col-md-3 nomargin nopadding">
                          <ul class="nav nav-tabs area_tabs">
                            <li class="active"><a href="#Undri_3" data-toggle="tab">Undri</a></li>
                            <li><a href="#Loni_3" data-toggle="tab">Loni</a></li>
                            <li><a href="#Wagholi_3" data-toggle="tab">Wagholi</a></li>
                            <li><a href="#Kharadi_3" data-toggle="tab">Kharadi</a></li>
                            <li><a href="#Kondhwa_3" data-toggle="tab">Kondhwa</a></li>
                            <li><a href="#Aundh_3" data-toggle="tab">Aundh</a></li>
                            <li><a href="#Koregao_park_3" data-toggle="tab">Koregao park</a></li>
                            <li><a href="#Kalyani_nagar_3" data-toggle="tab">Kalyani nagar</a></li>
                            <li><a href="#Khadaki_3" data-toggle="tab">Khadaki</a></li>
                            <li><a href="#Hadapsar_3" data-toggle="tab">Hadapsar</a></li>
                            <li><a href="#Karve_Nagar_3" data-toggle="tab">Karve Nagar</a></li>
                            <li><a href="#Kothrud_3" data-toggle="tab">Kothrud</a></li>
                          </ul>
                        </div>
                        <div class="col-md-9">
                          <div class="tab-content">
                            <div class="tab-pane active" id="Undri_3">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Undri Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Loni_3">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Loni Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Wagholi_3">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Wagholi Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Kharadi_3">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Kharadi Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Kondhwa_3">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Kondhwa Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Aundh_3">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Aundh Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Koregao_park_3">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Koregao_park Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Kalyani_nagar_3">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Kalyani_nagar Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Khadaki_3">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Khadaki Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Hadapsar_3">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Hadapsar Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Karve_Nagar_3">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Karve_Nagar Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Kothrud_3">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Kothrud Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="Your_Agricultural_Farms">
                      <div class="row">
                        <div class="col-md-3 nomargin nopadding">
                          <ul class="nav nav-tabs area_tabs">
                            <li class="active"><a href="#Undri_4" data-toggle="tab">Undri</a></li>
                            <li><a href="#Loni_4" data-toggle="tab">Loni</a></li>
                            <li><a href="#Wagholi_4" data-toggle="tab">Wagholi</a></li>
                            <li><a href="#Kharadi_4" data-toggle="tab">Kharadi</a></li>
                            <li><a href="#Kondhwa_4" data-toggle="tab">Kondhwa</a></li>
                            <li><a href="#Aundh_4" data-toggle="tab">Aundh</a></li>
                            <li><a href="#Koregao_park_4" data-toggle="tab">Koregao park</a></li>
                            <li><a href="#Kalyani_nagar_4" data-toggle="tab">Kalyani nagar</a></li>
                            <li><a href="#Khadaki_4" data-toggle="tab">Khadaki</a></li>
                            <li><a href="#Hadapsar_4" data-toggle="tab">Hadapsar</a></li>
                            <li><a href="#Karve_Nagar_4" data-toggle="tab">Karve Nagar</a></li>
                            <li><a href="#Kothrud_4" data-toggle="tab">Kothrud</a></li>
                          </ul>
                        </div>
                        <div class="col-md-9">
                          <div class="tab-content">
                            <div class="tab-pane active" id="Undri_4">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Undri Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Loni_4">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Loni Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Wagholi_4">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Wagholi Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Kharadi_4">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Kharadi Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Kondhwa_4">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Kondhwa Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Aundh_4">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Aundh Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Koregao_park_4">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Koregao_park Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Kalyani_nagar_4">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Kalyani_nagar Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Khadaki_4">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Khadaki Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Hadapsar_4">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Hadapsar Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Karve_Nagar_4">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Karve_Nagar Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="Kothrud_4">
                              <div class="row back5">
                                <div class="col-md-4 col-sm-6">
                                  <!-- <img src="images/img1.jpg" width="100%"/> -->
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6">Kothrud Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <div class="add2">
                                    <button class="button button1">1BHK </button>
                                    <button class="button button2">Rent 12,000</button>
                                    <button class="button button1">Deposit 30,000</button>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                              <div class="row back6">
                                <div class="col-md-4 col-sm-6">
                                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                      <li data-target="#myCarousel" data-slide-to="1"></li>
                                      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                                      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                                      <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                                </div>
                                <div class="col-md-8 mall col-sm-6"> Kanchanganga Apatment, Near Kinara hotel, Kothrud.<br/>
                                  <button class="button button1">1BHK </button>
                                  <button class="button button2">Rent 12,000</button>
                                  <button class="button button1">Deposit 30,000</button>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/family.png"/> Family only </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car parking </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 600 Sq.Ft. </div>
                                    <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                                  </div>
                                  <div class="add">
                                    <input type="checkbox" name="vehicle" value="Bike">
                                    Add to compare<br>
                                  </div>
                                  <div>
                                    <button class="button button3">Get Details</button>
                                    <button class="button button3">Compare</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="tab-pane" id="com">
          <section class="rent">
            <div class="container">
              <div class="row text-center">
                <h2>Rent  |  Buy</h2>
              </div>
              <div class="row bg_gray text-center">
                <div class="col-md-3 col-sm-6" >
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="images/locations.png" align="left" /> Select City <span class="caret"></span> </button>
                    <!-- <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    </ul> -->
                  </div>
                </div>
                <div class="col-md-3 col-sm-6" >
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="images/select_area.png" align="left" /> Select Area <span class="caret"></span> </button>
                    <!-- <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    </ul> -->
                  </div>
                </div>
                <div class="col-md-3 col-sm-6" >
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="images/select_type.png" align="left" /> Select Type <span class="caret"></span> </button>
                    <!-- <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    </ul> -->
                  </div>
                </div>
                <div class="col-md-3 col-sm-6" >
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="images/select_budget.png" align="left" /> Select Budget <span class="caret"></span> </button>
                    <!-- <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    </ul> -->
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="business_place">
            <div class="container">
              <div class="row text-center">
                <div class="col-md-12 col-sm-12">
                  <button type="button" class="btn btn-danger">Get a Business place</button>
                </div>
              </div>
            </div>
          </section>
          <section class="hot_property">
            <div class="container">
              <div class="row text-center">
                <div class="col-md-12 col-sm-12">
                  <h2>Hot Properties</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-6 back1">
                  <h1>Hot properties 
                    for rent</h1>
                  <h2>Hot properties 
                    to buy</h2>
                  <h3>Hot Commercial
                    Properties</h3>
                  <h4>Your Agricultural
                    Farms</h4>
                </div>
                <div class="col-md-2 col-sm-6 back2">
                  <!-- Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/> -->
                </div>
                <div class="col-md-8 col-sm-12 back3">
                  <div class="row back5">
                    <div class="col-md-4 col-sm-6">
                      <!-- <img src="images/img1.jpg" width="100%"/> -->
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                          <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                          <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                          <div class="item"> <img src="images/image2.jpg" alt="Chania"> </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                    </div>
                    <div class="col-md-8 mall col-sm-6"> Kanchanganga Mall, Near Kinara hotel, Kothrud.<br/>
                      <div class="add2">
                        <button class="button button1">1Shop</button>
                        <button class="button button2">25 Lacks</button>
                      </div>
                      <div class="row">
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/select_type.png"/> Shop </div>
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car Parking </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 300 Sq.Ft. </div>
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                      </div>
                      <div class="add">
                        <input type="checkbox" name="vehicle" value="Bike">
                        Add to compare<br>
                      </div>
                      <div>
                        <button class="button button3">Get Details</button>
                        <button class="button button3">Compare</button>
                      </div>
                    </div>
                  </div>
                  <div class="row back6">
                    <div class="col-md-4 col-sm-6">
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                          <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                          <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                          <div class="item"> <img src="images/image2.jpg" alt="Chania"> </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                    </div>
                    <div class="col-md-8 mall col-sm-6"> Kanchanganga Mall, Near Kinara hotel, Kothrud.<br/>
                      <div class="add2">
                        <button class="button button1">1Shop</button>
                        <button class="button button2">25 Lacks</button>
                      </div>
                      <div class="row">
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/select_type.png"/> Shop </div>
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/car.png"/> Car Parking </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/select_area.png"/> Area - 300 Sq.Ft. </div>
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/car1.png"/> Un-furnished </div>
                      </div>
                      <div class="add">
                        <input type="checkbox" name="vehicle" value="Bike">
                        Add to compare<br>
                      </div>
                      <div>
                        <button class="button button3">Get Details</button>
                        <button class="button button3">Compare</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="tab-pane" id="agri">
          <section class="rent">
            <div class="container">
              <div class="row text-center">
                <h2>Rent  |  Buy</h2>
              </div>
              <div class="row bg_gray text-center">
                <div class="col-md-3 col-sm-6" >
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="images/locations.png" align="left" /> Select City <span class="caret"></span> </button>
                    <!-- <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    </ul> -->
                  </div>
                </div>
                <div class="col-md-3 col-sm-6" >
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="images/select_area.png" align="left" /> Select Area <span class="caret"></span> </button>
                    <!-- <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    </ul> -->
                  </div>
                </div>
                <div class="col-md-3 col-sm-6" >
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="images/selecttype_agri.png" align="left" /> Select Type <span class="caret"></span> </button>
                    <!-- <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    </ul> -->
                  </div>
                </div>
                <div class="col-md-3 col-sm-6" >
                  <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="images/select_budget.png" align="left" /> Select Budget <span class="caret"></span> </button>
                    <!-- <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    </ul> -->
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="business_place">
            <div class="container">
              <div class="row text-center">
                <div class="col-md-12 col-sm-12">
                  <button type="button" class="btn btn-danger">Get a Farm</button>
                </div>
              </div>
            </div>
          </section>
          <section class="hot_property_agri">
            <div class="container">
              <div class="row text-center">
                <div class="col-md-12 col-sm-12">
                  <h2>Hot Properties</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-sm-6 back1">
                  <h1>Hot properties 
                    for rent</h1>
                  <h2>Hot properties 
                    to buy</h2>
                  <h3>Hot Commercial
                    Properties</h3>
                  <h4>Your Agricultural
                    Farms</h4>
                </div>
                <div class="col-md-2 col-sm-6 back2">
                  <!-- Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/>
                                        Kondhwa<br/> -->
                </div>
                <div class="col-md-8 col-sm-12 back3">
                  <div class="row back5">
                    <div class="col-md-4 col-sm-6">
                      <!-- <img src="images/img1.jpg" width="100%"/> -->
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                          <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                          <div class="item active"> <img src="images/image1.jpg" alt="Chania"> </div>
                          <div class="item"> <img src="images/image3.jpg" alt="Chania"> </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                    </div>
                    <div class="col-md-8 mall col-sm-6"> Near Kinara hotel, Nagar road, Wagoli, Pune.<br/>
                      <div class="add2">
                        <button class="button button1">4 Acre</button>
                        <button class="button button2">Rent 12,000</button>
                        <button class="button button1">Deposit 30,000</button>
                      </div>
                      <div class="row">
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/road_touch.png"/> Road touch </div>
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/water.png"/> Water available </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/location_30km.png"/> 30 Km from City </div>
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/house.png"/> Farm house </div>
                      </div>
                      <div class="add">
                        <input type="checkbox" name="vehicle" value="Bike">
                        Add to compare<br>
                      </div>
                      <div>
                        <button class="button button3">Get Details</button>
                        <button class="button button3">Compare</button>
                      </div>
                    </div>
                  </div>
                  <div class="row back6">
                    <div class="col-md-4 col-sm-6">
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                          <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                          <div class="item active"> <img src="images/image3.jpg" alt="Chania"> </div>
                          <div class="item"> <img src="images/image1.jpg" alt="Chania"> </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                    </div>
                    <div class="col-md-8 mall col-sm-6"> Near Kinara hotel, Nagar road, Wagoli, Pune.<br/>
                      <button class="button button1">4 Acre</button>
                      <button class="button button2">Rent 12,000</button>
                      <button class="button button1">Deposit 30,000</button>
                      <div class="row">
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/road_touch.png"/> Road touch </div>
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/water.png"/> Water available </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/location_30km.png"/> 30 Km from City </div>
                        <div class="col-md-4 col-sm-6 add3"> <img src="images/house.png"/> Farm house </div>
                      </div>
                      <div class="add">
                        <input type="checkbox" name="vehicle" value="Bike">
                        Add to compare<br>
                      </div>
                      <div>
                        <button class="button button3">Get Details</button>
                        <button class="button button3">Compare</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ups">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12 col-sm-12">
        <h1>Our USPs</h1>
        <p>It’s always better to be specific.. when it comes to a home</p>
      </div>
    </div>
    <div class="row text-center ups1">
      <div class="col-md-2 col-md-offset-1 col-sm-12"> <img src="images/expert.png"/>
        <h3>Expert Guidance</h3>
      </div>
      <div class="col-md-2 col-sm-12"> <img src="images/buyer.png"/>
        <h3>Buyer’s Trust</h3>
      </div>
      <div class="col-md-2 col-sm-12"> <img src="images/ample.png"/>
        <h3>Ample Properties</h3>
      </div>
      <div class="col-md-2 col-sm-12"> <img src="images/expert.png"/>
        <h3>Sellers preference</h3>
      </div>
      <div class="col-md-2 col-sm-12"> <img src="images/budget.png"/>
        <h3>Budget Homes</h3>
      </div>
    </div>
  </div>
</section>
<?php 
/*$this->registerJS("
      $( '#myTab a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      $( '#moreTabs a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      ( function( $ ) {
          // Test for making sure event are maintained
          $( '.js-alert-test' ).click( function () {
            alert( 'Button Clicked: Event was maintained' );
          } );
         // fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
      } )( jQuery );
    ");*/