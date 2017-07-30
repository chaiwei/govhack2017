<?php

namespace App\Http\Controllers\Govhack;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;



class ReportController extends Controller
{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      // $this->middleware('auth');
  }

  public function getAgeCareServiceList(Request $request){
    $query = DB::table('agecare_service_providers as a');
    $query->select('a.*');
    $results = $query->get();

    $data = [];
    foreach($results as $result){
      list($lat, $lng) = explode(',', $result->latlng);
      $data[] = [
        'provider_name' => $result->provider_name,
        'service_name' => $result->service_name,
        'address' => $result->address1.','.$result->address2.','.$result->suburb.','.$result->state,
        'location' => ['lat'=>$lat, 'lng'=>$lng], 
        'weight' => ($result->residential_places + $result->home_care_low_places + $result->home_care_high_places + $result->transition_care_places)
      ];
    }
    return $data;
  }

  public function getLanguageSpokenAtHome(Request $request, $year){
    $query = DB::table('language_spoken_home as p')
      ->join('location_latlng as l', 'p.region', '=', 'l.name')
      ->where('p.census_year', '2016')
      ->where('p.region_type', 'SA2')
      ->where('p.state_name', 'Western Australia')
      ->groupBy('p.region', 'l.latlng');
    
    $gender = [];
    if($request->input('male') == 'true'){
        $gender[] = 'males';
    }
    if($request->input('female') == 'true'){
        $gender[] = 'females';
    } 
    $query->whereIn('gender', $gender);
    $query->select('p.region', 'l.latlng', DB::raw('SUM(p.value) as total_population'));
    $results = $query->get();

    $data = [];
    foreach($results as $result){
      list($lat, $lng) = explode(',', $result->latlng);
      $data[] = [
        'area' => $result->region,
        'location' => ['lat'=>$lat, 'lng'=>$lng], 
        'weight' => ($result->total_population)
      ];
    }
    return $data;
  }

  public function getPopulation(Request $request, $year){
    $query = DB::table('population as p')
      ->join('location_latlng as l', 'p.SA2Code', '=', 'l.code')
      ->where('p.Year', $year)
      ->groupBy('p.SA2Code', 'p.SA2Name', 'l.latlng');
    
    $gender = [];
    if($request->input('male') == 'true'){
        $gender[] = 'male';
    }
    if($request->input('female') == 'true'){
        $gender[] = 'female';
    } 
    $query->whereIn('gender', $gender);
    
    $sumCol = ['p.total'];
    if(is_array($request->input('agegroup'))){
        $ageGroupStart = $request->input('agegroup')[0];
        $ageGroupEnd = $request->input('agegroup')[1];
        $sumCol = [];
        while($ageGroupStart <= $ageGroupEnd){
            $sumCol[] = 'age'.$ageGroupStart;
            $ageGroupStart++;
        }
    }  
    $query->select('p.SA2Code', 'p.SA2Name', 'l.latlng', DB::raw('SUM('.implode('+', $sumCol).') as total_population'));
    $results = $query->get();

    $data = [];
    foreach($results as $result){
      list($lat, $lng) = explode(',', $result->latlng);
      $data[] = [
        'area' => $result->SA2Name,
        'location' => ['lat'=>$lat, 'lng'=>$lng], 
        'weight' => ($result->total_population)
      ];
    }
    return $data;
  }
}