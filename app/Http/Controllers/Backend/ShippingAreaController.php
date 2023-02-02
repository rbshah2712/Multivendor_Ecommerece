<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\ShipState;
use App\Models\ShipDivision;
use Illuminate\Http\Request;
use App\Models\ShipDistricts;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\ShipState as ModelsShipState;

class ShippingAreaController extends Controller
{
    public function AllDivision(){
        $division = ShipDivision::latest()->get();
        return view('backend.ship.division.division_all',compact('division'));
    }//end method

    public function AllDistrict(){
        $district = ShipDistricts::latest()->get();
        return view('backend.ship.district.district_all',compact('district'));
    }//end method


    public function AllState(){
        $state = ShipState::latest()->get();
        return view('backend.ship.state.state_all',compact('state'));
    }//end method


    public function AddDivision(){
        return view('backend.ship.division.division_add');
    }//end method


    public function StoreDivision(Request $request){
        ShipDivision::insert([
            'division_name' => $request->division_name,
            'created_at' => Carbon::now(),

        ]);
        $notification = array('message'=>'Ship Division Added successfully','alert-type'=>'success');
        return redirect()->route('all.division')->with($notification);

    }//End Method 

    public function EditDivision($id){
        $division = ShipDivision::findOrFail($id);
       
        return view('backend.ship.division.division_edit',compact('division'));

    }//End Method


    public function UpdateDivision(Request $request){

        $division_id = $request->id;
        ShipDivision::findOrFail($division_id)->update([
            'division_name' => $request->division_name,
            'updated_at' => Carbon::now(),

        ]);
        $notification = array('message'=>'Ship Division Updated successfully','alert-type'=>'success');
        return redirect()->route('all.division')->with($notification);

    }//End Method

    public function DeleteDivision($id){
        ShipDivision::findOrFail($id)->delete();
        $notification = array('message'=>'Ship Division Deleted successfully','alert-type'=>'success');
        return redirect()->route('all.division')->with($notification);
    }//End Method


    public function AddDistrict(){
        $divisions = ShipDivision::orderBy('division_name','ASC')->get();
        return view('backend.ship.district.district_add',compact('divisions'));
    }//end method


    public function StoreDistrict(Request $request){
        ShipDistricts::insert([
            'division_id' => $request->division_name,
            'district_name' => $request->district_name,
            'created_at' => Carbon::now(),

        ]);
        $notification = array('message'=>'Ship Division Added successfully','alert-type'=>'success');
        return redirect()->route('all.district')->with($notification);

    }//End Method 

    public function EditDistrict($id){
        $divisions = ShipDivision::orderBy('division_name','ASC')->get();
        $district = ShipDistricts::findOrFail($id);
       
        return view('backend.ship.district.district_edit',compact('district','divisions'));

    }//End Method


    public function UpdateDistrict(Request $request){

        $district_id = $request->id;
        ShipDistricts::findOrFail($district_id)->update([
            'division_id' => $request->division_name,
            'district_name' => $request->district_name,
            'updated_at' => Carbon::now(),

        ]);
        $notification = array('message'=>'Ship District Updated successfully','alert-type'=>'success');
        return redirect()->route('all.district')->with($notification);

    }//End Method

    public function DeleteDistrict($id){
        ShipDistricts::findOrFail($id)->delete();
        $notification = array('message'=>'Ship District Deleted successfully','alert-type'=>'success');
        return redirect()->route('all.district')->with($notification);
    }//End Method


    public function AddState(){
        $divisions = ShipDivision::orderBy('division_name','ASC')->get();
        $districts = ShipDistricts::orderBy('district_name','ASC')->get();
        return view('backend.ship.state.state_add',compact('divisions','districts'));
    }//end method


    public function StoreState(Request $request){
        ShipState::insert([
            'division_id' => $request->division_name,
            'district_id' => $request->district_name,
            'state_name' => $request->state_name,
            'created_at' => Carbon::now(),

        ]);
        $notification = array('message'=>'Ship State Added successfully','alert-type'=>'success');
        return redirect()->route('all.state')->with($notification);

    }//End Method 


    public function EditState($id){
        $divisions = ShipDivision::orderBy('division_name','ASC')->get();
        $districts = ShipDistricts::orderBy('district_name','ASC')->get();
        $state = ShipState::findOrFail($id);
       
        return view('backend.ship.state.state_edit',compact('districts','divisions','state'));

    }//End Method


    public function UpdateState(Request $request){

        $state_id = $request->id;
        ShipState::findOrFail($state_id)->update([
            'division_id' => $request->division_name,
            'district_id' => $request->district_name,
            'state_name' => $request->state_name,
            'updated_at' => Carbon::now(),

        ]);
        $notification = array('message'=>'Ship State Updated successfully','alert-type'=>'success');
        return redirect()->route('all.state')->with($notification);

    }//End Method

    public function DeleteState($id){
        ShipState::findOrFail($id)->delete();
        $notification = array('message'=>'Ship State Deleted successfully','alert-type'=>'success');
        return redirect()->route('all.state')->with($notification);
    }//End Method


    public function GetDistrict($division_id)
    {
       $distr_name = ShipDistricts::where('division_id',$division_id)->orderBy('district_name','ASC')->get();
       return json_encode($distr_name);
    }


}
