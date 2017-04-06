<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Commercialproperty;

/**
 * CommercialpropertySearch represents the model behind the search form about `app\models\Commercialproperty`.
 */
class CommercialpropertySearch extends Commercialproperty
{

    public $min_rate_price;
    public $max_rate_price;

    public $min_rent_price;
    public $max_rent_price;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'location_id', 'city_id', 'area', 'publish_on_web', 'added_by', 'updated_by', 'status', 'rate_details_comp', 'rent_details_comp', 'deposite_details_comp'], 'integer'],
            [['available_for', 'property_id', 'type', 'sublocation', 'landmark', 'building_name', 'splitted_area', 'total_no_of_floors', 'floor_no', 'office_no', 'rent_details', 'rentunit', 'deposite_details', 'depositunit', 'rate_details', 'rate_details_unit', 'maintenance_tax', 'maintenance_tax_unit', 'service_tax_applicable', 'service_tax_value', 'other_charges', 'other_charges_unit', 'service_tax_unit', 'description', 'furnished', 'reception', 'min_workstations', 'max_workstations', 'cubicle', 'cabin', 'half_cabin', 'boardroom', 'conference_room', 'meeting_room', 'discussion_room', 'admin_room', 'account_room', 'interview_room', 'storage_room', 'ups_room', 'server_room', 'hub_room', 'epabx_room', 'ahu_room', 'electrical_room', 'store_room', 'pantry', 'cafeteria', 'toilets', 'power_backup', 'lift_facility', 'four_wheeler_parking', 'two_wheeler_parking', 'outer_power_backup', 'frontedge', 'frontedge_height', 'mezzanine', 'mezzanine_height', 'warehouse_height', 'power_load', 'open_area', 'office_shed_area', 'owners_name', 'mobile_no', 'landline_no', 'email_id', 'other_details', 'website_link', 'proposal_title', 'commercial_offer', 'note', 'lenden_address', 'picasa_url', 'facing', 'ideal_for', 'available_from', 'gallery_images', 'water_availability', 'photo', 'added_on', 'updated_on', 'reason'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Commercialproperty::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'location_id' => $this->location_id,
            'city_id' => $this->city_id,
            'area' => $this->area,
            'available_from' => $this->available_from,
            'publish_on_web' => $this->publish_on_web,
            'added_on' => $this->added_on,
            'added_by' => $this->added_by,
            'updated_on' => $this->updated_on,
            'updated_by' => $this->updated_by,
            'status' => $this->status,
            'rate_details_comp' => $this->rate_details_comp,
            'rent_details_comp' => $this->rent_details_comp,
            'deposite_details_comp' => $this->deposite_details_comp,
        ]);

        $query->andFilterWhere(['like', 'available_for', $this->available_for])
            ->andFilterWhere(['like', 'property_id', $this->property_id])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'sublocation', $this->sublocation])
            ->andFilterWhere(['like', 'landmark', $this->landmark])
            ->andFilterWhere(['like', 'building_name', $this->building_name])
            ->andFilterWhere(['like', 'splitted_area', $this->splitted_area])
            ->andFilterWhere(['like', 'total_no_of_floors', $this->total_no_of_floors])
            ->andFilterWhere(['like', 'floor_no', $this->floor_no])
            ->andFilterWhere(['like', 'office_no', $this->office_no])
            ->andFilterWhere(['like', 'rent_details', $this->rent_details])
            ->andFilterWhere(['like', 'rentunit', $this->rentunit])
            ->andFilterWhere(['like', 'deposite_details', $this->deposite_details])
            ->andFilterWhere(['like', 'depositunit', $this->depositunit])
            ->andFilterWhere(['like', 'rate_details', $this->rate_details])
            ->andFilterWhere(['like', 'rate_details_unit', $this->rate_details_unit])
            ->andFilterWhere(['like', 'maintenance_tax', $this->maintenance_tax])
            ->andFilterWhere(['like', 'maintenance_tax_unit', $this->maintenance_tax_unit])
            ->andFilterWhere(['like', 'service_tax_applicable', $this->service_tax_applicable])
            ->andFilterWhere(['like', 'service_tax_value', $this->service_tax_value])
            ->andFilterWhere(['like', 'other_charges', $this->other_charges])
            ->andFilterWhere(['like', 'other_charges_unit', $this->other_charges_unit])
            ->andFilterWhere(['like', 'service_tax_unit', $this->service_tax_unit])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'furnished', $this->furnished])
            ->andFilterWhere(['like', 'reception', $this->reception])
            ->andFilterWhere(['like', 'min_workstations', $this->min_workstations])
            ->andFilterWhere(['like', 'max_workstations', $this->max_workstations])
            ->andFilterWhere(['like', 'cubicle', $this->cubicle])
            ->andFilterWhere(['like', 'cabin', $this->cabin])
            ->andFilterWhere(['like', 'half_cabin', $this->half_cabin])
            ->andFilterWhere(['like', 'boardroom', $this->boardroom])
            ->andFilterWhere(['like', 'conference_room', $this->conference_room])
            ->andFilterWhere(['like', 'meeting_room', $this->meeting_room])
            ->andFilterWhere(['like', 'discussion_room', $this->discussion_room])
            ->andFilterWhere(['like', 'admin_room', $this->admin_room])
            ->andFilterWhere(['like', 'account_room', $this->account_room])
            ->andFilterWhere(['like', 'interview_room', $this->interview_room])
            ->andFilterWhere(['like', 'storage_room', $this->storage_room])
            ->andFilterWhere(['like', 'ups_room', $this->ups_room])
            ->andFilterWhere(['like', 'server_room', $this->server_room])
            ->andFilterWhere(['like', 'hub_room', $this->hub_room])
            ->andFilterWhere(['like', 'epabx_room', $this->epabx_room])
            ->andFilterWhere(['like', 'ahu_room', $this->ahu_room])
            ->andFilterWhere(['like', 'electrical_room', $this->electrical_room])
            ->andFilterWhere(['like', 'store_room', $this->store_room])
            ->andFilterWhere(['like', 'pantry', $this->pantry])
            ->andFilterWhere(['like', 'cafeteria', $this->cafeteria])
            ->andFilterWhere(['like', 'toilets', $this->toilets])
            ->andFilterWhere(['like', 'power_backup', $this->power_backup])
            ->andFilterWhere(['like', 'lift_facility', $this->lift_facility])
            ->andFilterWhere(['like', 'four_wheeler_parking', $this->four_wheeler_parking])
            ->andFilterWhere(['like', 'two_wheeler_parking', $this->two_wheeler_parking])
            ->andFilterWhere(['like', 'outer_power_backup', $this->outer_power_backup])
            ->andFilterWhere(['like', 'frontedge', $this->frontedge])
            ->andFilterWhere(['like', 'frontedge_height', $this->frontedge_height])
            ->andFilterWhere(['like', 'mezzanine', $this->mezzanine])
            ->andFilterWhere(['like', 'mezzanine_height', $this->mezzanine_height])
            ->andFilterWhere(['like', 'warehouse_height', $this->warehouse_height])
            ->andFilterWhere(['like', 'power_load', $this->power_load])
            ->andFilterWhere(['like', 'open_area', $this->open_area])
            ->andFilterWhere(['like', 'office_shed_area', $this->office_shed_area])
            ->andFilterWhere(['like', 'owners_name', $this->owners_name])
            ->andFilterWhere(['like', 'mobile_no', $this->mobile_no])
            ->andFilterWhere(['like', 'landline_no', $this->landline_no])
            ->andFilterWhere(['like', 'email_id', $this->email_id])
            ->andFilterWhere(['like', 'other_details', $this->other_details])
            ->andFilterWhere(['like', 'website_link', $this->website_link])
            ->andFilterWhere(['like', 'proposal_title', $this->proposal_title])
            ->andFilterWhere(['like', 'commercial_offer', $this->commercial_offer])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'lenden_address', $this->lenden_address])
            ->andFilterWhere(['like', 'picasa_url', $this->picasa_url])
            ->andFilterWhere(['like', 'facing', $this->facing])
            ->andFilterWhere(['like', 'ideal_for', $this->ideal_for])
            ->andFilterWhere(['like', 'gallery_images', $this->gallery_images])
            ->andFilterWhere(['like', 'water_availability', $this->water_availability])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'reason', $this->reason]);

        return $dataProvider;
    }
}