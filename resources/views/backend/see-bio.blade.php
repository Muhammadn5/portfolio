@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-sm-10 title">
            <h1><i class="fa fa-bars"></i>Your Bio</h1>
        </div>

        <div class="col-sm-12">
            <div class="row">

                <div class="col-sm-4 text-center">
                    <img src="{{url('/bios')}}/{{$data->image}}" class="img-fluid img-thumbnail" style="height: 60vh; width:auto" alt="">
                </div>
                <div class="col-sm-8">
                    <div class="mr-4 mr-5">
                        <form method="post" action="{{url('updatebio')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="tbl" value="{{encrypt('bios')}}">
                            <ul class="list-group">
                                <li class="list-group-item">Name:- {{$data->name}}</li>
                                <li class="list-group-item">Email:- {{$data->email}}</li>
                                <li class="list-group-item">Phone:- {{$data->phone}}</li>
                                <li class="list-group-item">Birth-day:- {{$data->birth_day}}</li>
                                <li class="list-group-item">Age:- {{$data->age}}</li>
                                <li class="list-group-item">City:- {{$data->city}}</li>
                                <li class="list-group-item">Degree:- {{$data->degree}}</li>
                            </ul>
                        </form>
                        <a href="{{url('editbio')}}" class="btn btn-success btn-block">Edit Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
