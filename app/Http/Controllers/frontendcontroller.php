<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class frontendcontroller extends Controller
{
    //
    public function __construct(){
        $bio = DB::table('bios')->get();
        view()->share([
            'bio'=>$bio,
        ]);
    }
    public function index(){
        $data = DB::table('bios')->first();
        $skills = DB::table('skills')->get();
        $education = DB::table('resumes')->where('category', 'education')->get();
        $experience = DB::table('resumes')->where('category', 'experience')->get();
        $services = DB::table('services')->where('status', 'display')->get();
        $projects = DB::table('projects')->get();
        $intrests = DB::table('intrests')->get();
        $messages = DB::table('messages')->orderBy('mid', 'desc')->get();
        return view('frontend.index', ['data'=>$data, 'skills'=>$skills, 'education'=>$education, 'experience'=>$experience, 'services'=>$services, 'projects'=>$projects, 'intrests'=>$intrests, 'messages'=>$messages]);
    }
    public function serviceDetail($id){
        $data = DB::table('services')->where('ser_id', $id)->first();
        return view('frontend.service-detail', ['data'=>$data]);
    }
}
