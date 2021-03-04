<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\View;

class backendcontroller extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
        $bio = DB::table('bios')->get();
        view()->share([
            'bio'=>$bio,
        ]);
    }
    public function index(){
        return view('backend.index');
    }
    public function addBio(){
        return view('backend.add-bio');
    }
    public function seeBio(){
        $data = DB::table('bios')->where('bid', 1)->first();
        return view('backend.see-bio', ['data'=>$data]);
    }
    public function editBio(){
        $data = DB::table('bios')->where('bid', 1)->first();
        return view('backend.edit-bio', ['data'=>$data]);
    }
    public function skills(){
        $skills = DB::table('skills')->get();
        return view('backend.skills', ['skills'=>$skills]);
    }
    public function editSkill($id){
        $singleSkill = DB::table('skills')->where('sid', $id)->first();
        $skills = DB::table('skills')->get();
        return \view('backend.edit-skill', ['skills'=>$skills, 'singleSkill'=>$singleSkill]);
    }
    public function resume(){
        $resume = DB::table('resumes')->get();
        return view('backend.resume', ['resume'=>$resume]);
    }
    public function editResume($id){
        $resume = DB::table('resumes')->get();
        $singleData = DB::table('resumes')->where('rid', $id)->first();
        return view('backend.edit-resume', ['singleData'=>$singleData, 'resume'=>$resume]);
    }
    public function addService(){
        return view('backend.add-service');
    }
    public function allServices(){
        $data = DB::table('services')->get();
        return view('backend.all-services', ['data'=>$data]);
    }
    public function editService($id){
        $data = DB::table('services')->where('ser_id', $id)->first();
        return view('backend.edit-service', ['data'=>$data]);
    }
    public function projects(){
        $data = DB::table('projects')->get();
        return view('backend.projects', ['data'=>$data]);
    }
    public function editProject($id){
        $singleData = DB::table('projects')->where('pid', $id)->first();
        $data = DB::table('projects')->get();
        return view('backend.edit-project', ['singleData'=>$singleData, 'data'=>$data]);
    }
    public function intrests(){
        $data = DB::table('intrests')->get();
        return view('backend.intrests', ['data'=>$data]);
    }
    Public function editIntrest($id){
        $singleData = DB::table('intrests')->where('intrestId', $id)->first();
        $data = DB::table('intrests')->get();
        return view('backend.edit-intrest',['singleData'=>$singleData, 'data'=>$data]);
    }
    public function messages(){
        $data = DB::table('messages')->orderby('mid', 'desc')->paginate(20);
        return view('backend.messages', ['data'=>$data]);
    }
}
