<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Support\Facades\Schema;
use Session;

class crudController extends Controller
{
    //
    public function insertData(Request $req){
        $data = $req->except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['created_at']=date('Y-m-d H:i:s');
        if($req->hasFile('image')) {
            $data['image'] = $this->uploadImage($tbl, $data['image']);
        }
        DB::table($tbl)->insert($data);
        if ($tbl =='messages'){
            Session::flash('message', 'Thanks for contacting me.');
        } else {
            Session::flash('message', 'Data have been Saved Successfully');
        }
        return redirect()->back();
    }
    public function updateData(Request $request){
        $data = $request->except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        if ($tbl == 'bios'){
            $oldData = DB::table('bios')->where('bid', 1)->first();
            if ($oldData->image !=''){
                File::delete($oldData->image);
            }
        }
        if ($request->hasFile('image')){
            $data['image'] = $this->uploadImage($tbl, $data['image']);
        }
        DB::table($tbl)->where(key($data), reset($data))->update($data);
        Session::flash('message', 'Data Updated Successfully!');
        return redirect()->back();

    }
    public function deleteSingleData(Request $request){
        $data = $request->except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $tblidname = decrypt($data['tblidname']);
        $idtodelete = $data['idtodelete'];
        $dbdata = DB::table($tbl)->where($tblidname, $idtodelete)->first();
        if(Schema::hasColumn($tbl, 'image')) //check whether table has image column
        {
            if($dbdata->image!=null){
                File::delete(public_path($tbl. '/' . $dbdata->image));
            }
        }
        DB::table($tbl)->where($tblidname, $idtodelete)->delete();
        Session::flash('message', 'Deleted Successfully!');
        return redirect()->back();

    }


    public function uploadImage($location, $imageName){
        $name = $imageName->getClientOriginalName();
        $imageName->move(public_path().'/'.$location, date('ymdgis').$name);
        return date('ymdgis').$name;
    }


    public function approveUn_approveMessage(Request $request){
        $data = $request->except('_token');
        $tbl = $data['tbl'];
        $idname = $data['idname'];
        $id = $data['id'];
        $choice = $data['choice'];
        $dbData = DB::table($tbl)->where($idname, $id)->first();
        if ($choice == 1){
            $dbData->status = 'draft';
        }
        else {
            $dbData->status = 'approve';
        }
    }

}
