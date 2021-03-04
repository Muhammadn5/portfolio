@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-sm-10">
            <h1>Update Resume</h1>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-4">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> {{Session('message')}}
                        </div>
                    @endif
                    <form method="post" action="{{url('update-resume')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="tbl" value="{{encrypt('resumes')}}">
                        <input type="hidden" name="rid" value="{{$singleData->rid}}">
                        <div class="form-group">
                            <label for="title">Title</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="title" value="{{$singleData->title}}" class="form-control" placeholder="Enter title here">
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                        </div>
                        <div class="form-group">
                            <select name="category" class="form-control">
                                <option value="{{$singleData->category}}">{{$singleData->category}}</option>
                                @if($singleData->category == 'experience')
                                <option value="education">Education</option>
                                @else
                                <option value="experience">Experience</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="place">Place</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="place" value="{{$singleData->place}}" class="form-control" placeholder="Enter Place Here">
                        </div>
                        <div class="form-group">
                            <label for="started">Started at</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="started_at" value="{{$singleData->started_at}}" class="form-control" placeholder="Enter starting date Here">
                        </div>
                        <div class="form-group">
                            <label for="left">Left at</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="ended_at" value="{{$singleData->ended_at}}" class="form-control" placeholder="Enter left date Here">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default">Update</button>
                        </div>
                    </form>
                </div>

                <div class="col-sm-8">
                        <div class="col-sm-12 resume-table">
                            <div class="col-sm-10">
                                <h1>Education And Experience</h1>
                            </div>
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Place</th>
                                    <th scope="col">Started at</th>
                                    <th scope="col">Left at</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                               @if(count($resume)>0)
                                @foreach($resume as $r)
                                <tr>
                                    <th>{{$r->rid}}</th>
                                    <td>{{$r->title}}</td>
                                    <td>{{$r->category}}</td>
                                    <td>{{$r->place}}</td>
                                    <td>{{$r->started_at}}</td>
                                    <td>{{$r->ended_at}}</td>
                                    <td><a href="{{url('editresume')}}/{{$r->rid}}">Edit</a>

                                        <form method="post" action="{{url('delete')}}" class="ml-3">
                                            {{csrf_field()}}
                                            <input type="hidden" name="tbl" value="{{encrypt('resumes')}}">
                                            <input type="hidden" name="tblidname" value="{{encrypt('rid')}}">
                                            <input type="hidden" name="idtodelete" value="{{$r->rid}}">
                                            <input type="submit" value="Delete" class="btn btn-warning btn-sm">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                               @else
                                <tr>
                                    <td colspan="7">No Data Found.</td>
                                </tr>
                               @endif
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
@stop
