
<?php
use yii\data\ActiveDataProvider;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\data\Pagination;

$host = "localhost";
//$host = "103.208.73.2";
?>


<div class="container-fluid inner_banner" style="background:#3db4f9">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h1>Get Your Perfect Commercial Property</h1>
        </div>
        <div class="col-sm-4"><img src="images/home_img.jpg" alt=""></div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid toolbar_section">
<div class="row search_section">
<div class="container">
<div class="row ">
<div class="col-sm-9">
<div class="row">
<div class="col-sm-9 col9">
<input type="text" class="form-control" id="filterResProp_locationname" placeholder="Add more Locations..">
<!-- <ul id="proplocations">
</ul> -->
<div id="hidlocationids">
</div>
</div>
<div class="col-sm-3 col3">
<div class="row">
<div class="col-xs-3">
<button type="button" class="btn search_btn"><img src="images/serarch.jpg" alt=""></button>
</div>
<div class="col-xs-9 padding_left border_right">
<div class="checkbox">
<input type="checkbox" id="c1" name="cc" checked="checked" />
<label class="chkbob_lable" for="c1" style="padding-left:0"><span></span>Nearby properties</label>
</div>
</div>

</div>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="row search_right short_section">
<ul class="nav navbar-nav">
<li><a href="#" data-toggle="modal" data-target="#myModal-5"><img src="images/more.jpg" class="short" alt="">More <img src="images/dd_arrow.jpg" alt=""></a>
<div class="modal" tabindex="-1" id="myModal-5" role="dialog">
<div class="modal-dialog more_modal_dilog" role="document">
<div class="modal-content">

<div class="modal-body popup_content">
<div class="row">
<div class="col-sm-4 amenities_col">
<h1>Amenities</h1>
<p>
<input type="checkbox" id="pop_1" name="filterResProp_amenity[]" value="gym" class="filterResPropAmenity"/>
<label class="chkbob_lable" for="pop_1"><span></span><img src="images/gym.png" alt="">Gym</label>
</p>

<p>
<input type="checkbox" id="pop_3" name="filterResProp_amenity[]" value="powerbkp" class="filterResPropAmenity"/>
<label class="chkbob_lable" for="pop_3"><span></span><img src="images/power.png" alt="">Power backup</label>
</p>

<p>
<input type="checkbox" id="pop_4" name="filterResProp_amenity[]" value="swimming" class="filterResPropAmenity"/>
<label class="chkbob_lable" for="pop_4"><span></span><img src="images/swiming.png" alt="">Swimming pool</label>
</p>

<p>
<input type="checkbox" id="pop_5" name="filterResProp_amenity[]" value="club" class="filterResPropAmenity"/>
<label class="chkbob_lable" for="pop_5"><span></span><img src="images/home_popup.png" alt="">Club House</label>
</p>
<p>
<input type="checkbox" id="pop_2" name="filterResProp_amenity[]" value="doorcam" class="filterResPropAmenity"/>
<label class="chkbob_lable" for="pop_2"><span></span><img src="images/door_cam.png" alt="">Door camera</label>
</p>
</div>
<div class="col-sm-3 filter_col">
<h1>Filter by</h1>
<select id="filterResProp_bathroom" name="filterResProp_bathroom">
<option value="">Bathroom</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
<hr>
<select id="filterResProp_facing" name="filterResProp_facing">
<option value="">Facing</option>
<option value="East">East</option>
<option value="West">West</option>
<option value="North">North</option>
<option value="South">South</option>
</select>
<hr>
<select id="filterResProp_floor" name="filterResProp_floor">
<option value="">Floor</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
<hr>
<select id="filterResProp_family" name="filterResProp_family">
<option value="">Family</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
<hr>
<select id="filterResProp_status" name="filterResProp_status">
<option value="">Status</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
<hr>
</div>
<div class="col-sm-5 other_col">
<h1>Other</h1>
<table>
<tr>
<td>Sq. ft. </td>
<td><input id="filterResProp_minsqfeet" name="filterResProp_minsqfeet" type="text"></td>
<td>to</td>
<td><input id="filterResProp_maxsqfeet" name="filterResProp_maxsqfeet" type="text"></td>
</tr>
</table>
<hr>
<p>
<input type="checkbox" id="pop_6" id="filterResProp_haveimage" name="filterResProp_haveimage"/>
<label class="chkbob_lable" for="pop_6"><span></span><img src="images/photo.png" alt="">Photos</label>
</p>
<hr>
<p><img src="images/rs_veryfi.png" alt=""><br>
<span>Rightsell verified property</span></p>

</div>
</div>
</div>

</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
</li>

<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/short_ico.jpg" class="short" alt="">Sort by Relevance <img src="images/dd_arrow.jpg" alt=""></a>
<ul class="dropdown-menu" style="left:18px">
<li class="first"><a href="#">Relavance</a></li>
<li><a href="#" class="sortresprop" data-val="popular">Popularity</a></li>
<li><a href="#" class="sortresprop" data-val="asc">Price (Low to high)</a></li>
<li><a href="#" class="sortresprop" data-val="desc">Price (High to low)</a></li>
<li><a href="#" class="sortresprop" data-val="rate">Seller Ratings </a></li>
<li><a href="#" class="sortresprop" data-val="postdate">Date Posted</a></li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12 breadcrum"><a href="#">Home</a> › <a href="#">Property for rent/lease in Pune</a> › <a href="#">Bawdhan</a> › All Commercial</div>
<div class="col-md-3">
<div class="pro_left_column"><div class="row">
<div class="col-xs-7 filter_text">Filter your Search</div>
<div class="col-xs-5"><a href="<?= Url::to(["commercial-property/index"]);?>" class="button red_btn" style="float:right; font-size:13px; margin:0"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</a></div>
</div>
</div>
<?php echo $this->render('_search', ['model' => $searchModel]); ?>
</div>

<div class="col-md-7 projects_section" id="projects_section">
<!-- <h1>39 Properties in Wakad, Bawdhan, from owner. &nbsp;&nbsp;</h1>
<h2>0 Nearby properties</h2> -->
<?php 
/*$pages = new Pagination(['totalCount' => $dataProvider->getTotalCount()]);
echo LinkPager::widget([
	'pagination' => $pages,
	'linkOptions'=>['class'=>'custpagination']
]);*/
Pjax::begin([
	'id'=>'newpropsection',
'enablePushState' => false, // to disable push state
'enableReplaceState' => false // to disable replace state
]);?>
<?= $this->render("property_item", ['dataProvider' => $dataProvider,"locationname"=>"","propby"=>"",'availablefr' => $availablefr]);?>
<?php Pjax::end();?>


<!--<div class="row pro_box">
	<div class="col-sm-5 nopadding">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">
				</div>
				<div class="item">
					<img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">
				</div>
				<div class="item">
					<img class="d-block img-fluid img-responsive" src="images/pro_img.jpg" alt="">
				</div>
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
		<div class="row pro_detail">
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
</div>-->
</div>
</div>