<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Area;
use app\models\Bhk;

/* @var $this yii\web\View */
/* @var $model app\models\ResidentialpropertySearch */
/* @var $form yii\widgets\ActiveForm */

// echo "<pre> property_type: "; print_r($model->property_type);exit;
?>

<div class="residentialproperty-search">

    <?php $form = ActiveForm::begin([
        'options'=>['id'=>'searchfilteragriculturalproperty','name'=>'frmAgriculturalProperty','class'=>'frmAgriculturalProperty'],
        'action' => ['agricultural-property/ajax-get-properties-update'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'property_id') 

    //echo $model->property_by;exit;?>

<div class="pro_left_column">
<?php echo \yii\helpers\Html::activeRadioList($model,'available_for',["Sale"=>"Buy","Rent" =>"Rent"],['tag'=>'div','item'=>function($index, $label, $name, $checked, $value) {
    if($checked)
                    $return = '<input id="rad_'.$label.'" type="radio" name="' . $name . '" value="' . $value . '" checked="checked"/>';
                else
                    $return = '<input id="rad_'.$label.'" type="radio" name="' . $name . '" value="' . $value . '"/>';
                    $return .= '<label for="rad_'.$label.'"><span></span>' . ucwords($label).'</label>';
                    return $return;
                }, ]);?>
</div>

<div class="pro_left_column">
<?php echo \yii\helpers\Html::activeRadioList($model,'property_by',["Owner"=>"Owner","Agent" =>"Agent"],['tag'=>'div','item'=>function($index, $label, $name, $checked, $value) {
                    $return = '<input id="rad_'.$label.'" type="radio" name="' . $name . '" value="' . $value . '"/>';
                    $return .= '<label for="rad_'.$label.'"><span></span>' . ucwords($label).'</label>';
                    return $return;
                }, ]);?>
    <?php
    /*$form->field($model, 'property_by')
        ->radioList(
            ["Owner"=>"Owner","Agent" =>"Agent"],
            [

                'item' => function($index, $label, $name, $checked, $value) {
                    $return = '<input type="radio" name="' . $name . '" value="' . $value . '"/>';
                    $return .= '<label for="rad_'.$label.'"><span></span>' . ucwords($label).'</label>';
                    return $return;
                }
            ]
        )
    ->label(false);*/
    ?>
</div>

 <div class="pro_left_column sale">
    <div class="row demo">
    <div class="col-xs-12" style="padding:5px 0"><!--<input type="radio" id="r112" name="rr11" />-->
        <label for="r112"><span></span>Budget </label></div>
        <div class="col-xs-5 demo_col">
            <img src="images/rupee.jpg" alt="">

<?php echo \yii\helpers\Html::activeDropDownList($model,'min_rate_price',["500000"=>"5 Lac", "1000000"=>"10 Lac","2000000"=>"20 Lac","3000000"=>"30 Lac","4000000"=>"40 Lac","5000000"=>"50 Lac","6000000"=>"60 Lac","7000000"=>"70 Lac","8000000"=>"80 Lac","9000000"=>"90 Lac","10000000"=>"1 Cr","12000000"=>"1.2 Cr","14000000"=>"1.4 Cr","16000000"=>"1.6 Cr","18000000"=>"1.8 Cr","20000000"=>"2 Cr","23000000"=>"2.3 Cr","26000000"=>"2.6 Cr","30000000"=>"3 Cr","35000000"=>"3.5 Cr","40000000"=>"4 Cr","45000000"=>"4.5 Cr","50000000"=>"5 Cr","100000000"=>"10 Cr","200000000"=>"20 Cr"],['prompt'=>'Min']);?>
    </div>
        <div class="col-xs-2 boldtxt">-</div>
        <div class="col-xs-5 demo_col">
        <img src="images/rupee.jpg" alt="">
        <?php echo \yii\helpers\Html::activeDropDownList($model,'max_rate_price',["500000"=>"5 Lac", "1000000"=>"10 Lac","2000000"=>"20 Lac","3000000"=>"30 Lac","4000000"=>"40 Lac","5000000"=>"50 Lac","6000000"=>"60 Lac","7000000"=>"70 Lac","8000000"=>"80 Lac","9000000"=>"90 Lac","10000000"=>"1 Cr","12000000"=>"1.2 Cr","14000000"=>"1.4 Cr","16000000"=>"1.6 Cr","18000000"=>"1.8 Cr","20000000"=>"2 Cr","23000000"=>"2.3 Cr","26000000"=>"2.6 Cr","30000000"=>"3 Cr","35000000"=>"3.5 Cr","40000000"=>"4 Cr","45000000"=>"4.5 Cr","50000000"=>"5 Cr","100000000"=>"10 Cr","200000000"=>"20 Cr"],['prompt'=>'Max']);?>

       </div></div>
    </div>

    <div class="pro_left_column rent">
    <div class="row demo">
    <div class="col-xs-12" style="padding:5px 0"><!--<input type="radio" id="r112" name="rr11" />-->
        <label for="r112"><span></span>Budget </label></div>
        <div class="col-xs-5 demo_col">
            <img src="images/rupee.jpg" alt="">

<?php echo \yii\helpers\Html::activeDropDownList($model,'min_rent_price',["5000"=>"5 k", "10000"=>"10 k", "15000"=>"15 k","20000"=>"20k","25000"=>"25 k", "30000"=>"30 k", "35000"=>"35 k","40000"=>"40 k","50000"=>"50 k","60000"=>"60 k","70000"=>"70 k","85000"=>"85 k","90000"=>"90 k","100000"=>"1 Lac"],['prompt'=>'Min']);?>

            </div>
        <div class="col-xs-2 boldtxt">-</div>
        <div class="col-xs-5 demo_col">
        <img src="images/rupee.jpg" alt="">
        <?php echo \yii\helpers\Html::activeDropDownList($model,'max_rent_price',["5000"=>"5 k", "10000"=>"10 k", "15000"=>"15 k","20000"=>"20k","25000"=>"25 k", "30000"=>"30 k", "35000"=>"35 k","40000"=>"40 k","50000"=>"50 k","60000"=>"60 k","70000"=>"70 k","85000"=>"85 k","90000"=>"90 k","100000"=>"1 Lac"],['prompt'=>'Max']);?>

        </div></div>
    </div>


 <div class="pro_left_column">
    <div class="row demo">
    <div class="col-xs-7" style="padding: 0px">
        <label for="r112"><span></span>Search By Area </label>
    </div>

        <div class="col-xs-5 demo_col">
<?php echo \yii\helpers\Html::activeDropDownList($model,'property_unit',["Sq.ft"=>"Sq.ft", "Acre"=>"Acre","Hector"=>"Hector"],['prompt'=>'Min']);?>
    </div>
<br><br>

        <div class="col-xs-5 demo_col">
            <img src="images/rupee.jpg" alt="">

<?php echo \yii\helpers\Html::activeDropDownList($model,'min_area',["1000"=>"1000", "2000"=>"2000","5000"=>"5000","10000"=>"10,000","20000"=>"20,000","30000"=>"30,000"],['prompt'=>'Min']);?>
    </div>
        <div class="col-xs-2 boldtxt">-</div>
        <div class="col-xs-5 demo_col">
        <img src="images/rupee.jpg" alt="">
        <?php echo \yii\helpers\Html::activeDropDownList($model,'max_area',["1000"=>"1000", "2000"=>"2000","5000"=>"5000","10000"=>"10,000","20000"=>"20,000","30000"=>"30,000"],['prompt'=>'Max']);?>

       </div></div>
    </div>

<div class="pro_left_column">
<div class="row">
<?php echo \yii\helpers\Html::activeCheckboxList($model,'property_type',['Agricultural land'=>'Agricultural land','Industrial land'=>'Industrial land','NA plots'=>'NA plots','Farm house plot'=>'Farm house plot'],['tag'=>'div','item'=>function($index, $label, $name, $checked, $value) {
                    $return = '<div class="col-xs-12">';
                    if($checked)
                    $return .= '<input id="rad_'.$label.'" type="checkbox" name="' . $name . '" value="' . $value . '" checked="checked"/>';
                    else
                    $return .= '<input id="rad_'.$label.'" type="checkbox" name="' . $name . '" value="' . $value . '"/>';
                    $return .= '<label for="rad_'.$label.'" style="font-weight:normal"><span></span>' . ucwords($label).'</label></div><br/>';
                    return $return;
                }, ]);?>
</div>
</div>
   
            <!-- <div class="col-xs-6">
                <input type="checkbox" id="c2" name="cc">
                <label class="chkbob_lable" for="c2"><span></span>1 RK</label>
            </div>
            <div class="col-xs-6">
                <input type="checkbox" id="c3" name="cc">
                <label class="chkbob_lable" for="c3"><span></span>2.5 BHK</label>
            </div>
            <div class="col-xs-6"><input type="checkbox" id="c4" name="cc">
                <label class="chkbob_lable" for="c4"><span></span>1 BHK</label></div>
                <div class="col-xs-6"><input type="checkbox" id="c5" name="cc">
                    <label class="chkbob_lable" for="c5"><span></span>3 BHK</label></div>
                    <div class="col-xs-6"><input type="checkbox" id="c6" name="cc">
                        <label class="chkbob_lable" for="c6"><span></span>2 BHK</label></div>
                        <div class="col-xs-6"><input type="checkbox" id="c7" name="cc">
                            <label class="chkbob_lable" for="c7"><span></span>3.5 BHK</label></div>
                        </div>
                        <hr style="margin:10px 0 15px 0">
                        <div class="row">
                            <div class="col-xs-6">
                                <input type="checkbox" id="c8" name="cc">
                                <label class="chkbob_lable" for="c8"><span></span>Apartment</label>
                            </div>
                            <div class="col-xs-6">
                                <input type="checkbox" id="c9" name="cc">
                                <label class="chkbob_lable" for="c9"><span></span>Independent</label>
                            </div>
                            <div class="col-xs-6"><input type="checkbox" id="c10" name="cc">
                                <label class="chkbob_lable" for="c10"><span></span>Bunglow</label></div>
                                <div class="col-xs-6"><input type="checkbox" id="c11" name="cc">
                                    <label class="chkbob_lable" for="c11"><span></span>Penthouse</label></div>
                                    <div class="col-xs-6"><input type="checkbox" id="c12" name="cc">
                                        <label class="chkbob_lable" for="c12"><span></span>Villa</label></div>
                                        <div class="col-xs-6"><input type="checkbox" id="c13" name="cc">
                                            <label class="chkbob_lable" for="c13"><span></span>Plot</label></div>
                                        </div>
                                    </div> -->
<?php
//$arealist = Area::findAll(['status' => 1,'is_in_use'=>0]);
?>
    <?php // $form->field($model, 'area_id')->dropDownList(ArrayHelper::map($arealist,'id', 'area')) ?>
    <div id="vis">
    <?php if($model->location_id && count($model->location_id)>0)
    {
        foreach ($model->location_id as $location_id) {
        echo "<input type='hidden' name='AgriculturalpropertySearch[location_id][]' value='".$location_id."'/>";
        }
    }?>
    <?php // $form->field($model, 'location_id[]')->hiddenInput()->label(false) ?>
    </div>
    <?php // $form->field($model, 'locationname')->hiddenInput(['id'=>'sidelocationname'])->label(false) ?>
    <?php // echo $form->field($model, 'property_type') ?>

    <?php echo $form->field($model, 'min_area')->hiddenInput(['id'=>'agri_min_area'])->label(false) ?>
    <?php echo $form->field($model, 'max_area')->hiddenInput(['id'=>'agri_max_area'])->label(false) ?>
    <?php echo $form->field($model, 'property_unit')->hiddenInput(['id'=>'agri_property_unit'])->label(false) ?>

    <?php // echo $form->field($model, 'builtup_unit') ?>

    <?php // echo $form->field($model, 'carpet_area') ?>

    <?php // echo $form->field($model, 'carpet_unit') ?>

    <?php // echo $form->field($model, 'bhk') ?>

    <?php // echo $form->field($model, 'other') ?>

    <?php // echo $form->field($model, 'other_bhk') ?>

    <?php // echo $form->field($model, 'society_id') ?>

    <input type="hidden" name="sortby" id="sortby" value="">
    <?php echo $form->field($model, 'city_id')->hiddenInput(['id' => 'agri_property_city_id'])->label(false); ?>

    <?php echo $form->field($model, 'nearby')->hiddenInput(['id'=>'agriprop_nearby'])->label(false); ?>

    <?php // echo $form->field($model, 'area_id') ?>

    <?php // echo $form->field($model, 'building_name') ?>

    <?php // echo $form->field($model, 'age_of_building') ?>

    <?php // echo $form->field($model, 'flat_no') ?>

    <?php // echo $form->field($model, 'total_no_of_floors') ?>

    <?php // echo $form->field($model, 'furnished') ?>

    <?php // echo $form->field($model, 'lift_facility') ?>

    <?php echo $form->field($model, 'amenities')->hiddenInput(['id'=>'agriprop_amenities'])->label(false); ?>

    <?php // echo $form->field($model, 'expected_rate') ?>

    <?php // echo $form->field($model, 'rate_currency') ?>

    <?php // echo $form->field($model, 'rent_currency') ?>

    <?php // echo $form->field($model, 'deposit_currency') ?>

    <?php // echo $form->field($model, 'expected_rent') ?>

    <?php // echo $form->field($model, 'deposit') ?>

    <?php // echo $form->field($model, 'available_from') ?>

    <?php // echo $form->field($model, 'agreement_period') ?>

    <?php // echo $form->field($model, 'is_parking_available') ?>

    <?php // echo $form->field($model, 'parking_structure') ?>

    <?php // echo $form->field($model, 'no_of_parking') ?>

    <?php // echo $form->field($model, 'covered_no') ?>

    <?php // echo $form->field($model, 'open_no') ?>

    <?php // echo $form->field($model, 'company_name') ?>

    <?php // echo $form->field($model, 'contact_person_name') ?>

    <?php // echo $form->field($model, 'mobile_no') ?>

    <?php // echo $form->field($model, 'email_id') ?>

    <?php // echo $form->field($model, 'other_details') ?>

    <?php // echo $form->field($model, 'key_arrangements') ?>

    <?php // echo $form->field($model, 'profile_photo') ?>

    <?php // echo $form->field($model, 'photos_link') ?>

    <?php // echo $form->field($model, 'video_link') ?>

    <?php // echo $form->field($model, 'other_property_details') ?>

    <?php // echo $form->field($model, 'address_in_proposal') ?>

    <?php // echo $form->field($model, 'balcony') ?>

    <?php // echo $form->field($model, 'price_negotiable') ?>

    <?php // echo $form->field($model, 'spl_attraction') ?>

    <?php // echo $form->field($model, 'property_profile_photo') ?>

    <?php echo $form->field($model, 'gallery_images')->hiddenInput(['id'=>'haveimagefilter'])->label(false); ?>

    <?php // echo $form->field($model, 'property_video_link') ?>

    <?php // echo $form->field($model, 'maintenance_cost') ?>

    <?php // echo $form->field($model, 'maintenance_price') ?>

    <?php // echo $form->field($model, 'unit') ?>

    <?php // echo $form->field($model, 'preferred_tenants') ?>

    <?php // echo $form->field($model, 'available_rooms') ?>

    <?php // echo $form->field($model, 'tenant_profiling') ?>

    <?php // echo $form->field($model, 'tenant_profiling_desc') ?>

    <?php // echo $form->field($model, 'added_on') ?>

    <?php // echo $form->field($model, 'added_by') ?>

    <?php // echo $form->field($model, 'updated_on') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'close_through') ?>

    <?php // echo $form->field($model, 'reason') ?>

    <?php // echo $form->field($model, 'agreement_date') ?>

    <?php // echo $form->field($model, 'locking_period_date') ?>

    <?php // echo $form->field($model, 'end_date') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'reminder_days') ?>

    <?php // echo $form->field($model, 'buyer_details') ?>

    <?php // echo $form->field($model, 'buy_date') ?>

    <?php // echo $form->field($model, 'publish_on_web') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?php //Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php // Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
