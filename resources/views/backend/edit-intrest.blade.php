@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-sm-10">
            <h1>Edit Interest</h1>
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
                    <form method="post" action="{{url('update-intrest')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="tbl" value="{{encrypt('intrests')}}">
                        <input type="hidden" name="intrestId" value="{{$singleData->intrestId}}">
                        <div class="form-group">
                            <label for="title">Title</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="title" value="{{$singleData->title}}" class="form-control" placeholder="Enter interest title here">
                        </div>
                        <div class="form-group">
                            <label for="url">Some Link</label>
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
                                <h1>Interest List</h1>
                            </div>
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Interest</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                               @if(count($data)>0)
                                @foreach($data as $i)
                                <tr>
                                    <th>{{$i->intrestId}}</th>
                                    <td>{{$i->title}}</td>
                                    <td>{{$i->url}}</td>
                                    <td><a href="{{url('editintrest')}}/{{$i->intrestId}}" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        <form method="post" action="{{url('delete')}}" class="ml-3">
                                            {{csrf_field()}}
                                            <input type="hidden" name="tbl" value="{{encrypt('intrests')}}">
                                            <input type="hidden" name="tblidname" value="{{encrypt('intrestId')}}">
                                            <input type="hidden" name="idtodelete" value="{{$i->intrestId}}">
                                            <input type="submit" value="Delete" class="btn btn-warning btn-sm">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                               @else
                                <tr>
                                    <td colspan="7" class="bg-danger">No Interest added.</td>
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
