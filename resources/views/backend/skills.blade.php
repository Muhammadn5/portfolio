@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-sm-10">
            <h1>Add Skill</h1>
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
                    <form method="post" action="{{url('add-skill')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="tbl" value="{{encrypt('skills')}}">
                        <div class="form-group">
                            <label for="title">Title</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Enter title here">
                        </div>
                        <div class="form-group">
                            <label for="percentage">Percentage</label>
                        </div>
                        <div class="form-group">
                            <select name="percentage" class="form-control">
                                @for($i = 0; $i<=100; $i=$i+5)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default">Save</button>
                        </div>
                    </form>
                </div>

                <div class="col-sm-8">
                        <div class="col-sm-12 skills-table">
                            <div class="col-sm-10">
                                <h1>All Skills</h1>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Skill Approach</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($skills as $skill)
                                <tr>
                                    <th>{{$skill->sid}}</th>
                                    <td>{{$skill->title}}</td>
                                    <td>{{$skill->percentage}}%</td>
                                    <td><a href="{{url('editskill')}}/{{$skill->sid}}">Edit</a>

                                        <form method="post" action="{{url('delete')}}" class="ml-3">
                                            {{csrf_field()}}
                                            <input type="hidden" name="tbl" value="{{encrypt('skills')}}">
                                            <input type="hidden" name="tblidname" value="{{encrypt('sid')}}">
                                            <input type="hidden" name="idtodelete" value="{{$skill->sid}}">
                                            <input type="submit" value="Delete" class="btn btn-warning">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
@stop
