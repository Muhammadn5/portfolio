@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-sm-10">
            <h1>Edit Project</h1>
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
                    <form method="post" action="{{url('update-project')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="tbl" value="{{encrypt('projects')}}">
                        <input type="hidden" name="pid" value="{{$singleData->pid}}">
                        <div class="form-group">
                            <label for="name">Name</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" value="{{$singleData->name}}" class="form-control" placeholder="Enter project name here">
                        </div>
                        <div class="form-group">
                            <label for="url">Project Link</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="url" value="{{$singleData->url}}" class="form-control" placeholder="Enter project-Link here">
                            <small class="text-success">eg. http://www.example.com</small>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default">Update</button>
                        </div>
                    </form>
                </div>

                <div class="col-sm-8">
                        <div class="col-sm-12 resume-table">
                            <div class="col-sm-10">
                                <h1>All Projects</h1>
                            </div>
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Project Link</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                               @if(count($data)>0)
                                @foreach($data as $p)
                                <tr>
                                    <th>{{$p->pid}}</th>
                                    <td>{{$p->name}}</td>
                                    <td>{{$p->url}}</td>
                                    <td><a href="{{url('editproject')}}/{{$p->pid}}" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        <form method="post" action="{{url('delete')}}" class="ml-3">
                                            {{csrf_field()}}
                                            <input type="hidden" name="tbl" value="{{encrypt('projects')}}">
                                            <input type="hidden" name="tblidname" value="{{encrypt('pid')}}">
                                            <input type="hidden" name="idtodelete" value="{{$p->pid}}">
                                            <input type="submit" value="Delete" class="btn btn-warning btn-sm">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                               @else
                                <tr>
                                    <td colspan="7" class="bg-danger">No Project added.</td>
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
