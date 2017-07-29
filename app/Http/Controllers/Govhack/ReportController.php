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

  function getPopulation(Request $request, $year){
    $query = DB::table('population as p')
      ->leftJoin('location_latlng as l', 'p.SA2Code', '=', 'l.code')
      ->select('p.SA2Code', 'p.SA2Name', 'l.latlng', DB::raw('SUM(p.total) as total_population'))
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