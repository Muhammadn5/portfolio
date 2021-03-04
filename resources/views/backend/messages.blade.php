@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-sm-10">
            <h1>Add messages</h1>
        </div>
        <div class="col-sm-12">
            <div class="col-sm-8">
                <div class="col-sm-12 resume-table">
                    <div class="col-sm-10">
                        <h1>All Projects</h1>
                    </div>
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sender Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Approve</th>
                            <th scope="col">Un-approve</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($data)>0)
                            @foreach($data as $m)
                                <tr>
                                    <th>{{$m->mid}}</th>
                                    <td>{{$m->name}}</td>
                                    <td>{{$m->email}}</td>
                                    <td>{{substr($m->message, 0, 50)}}</td>
                                    @if($m->status == 'draft')
                                    <td>
                                        <form method="post" action="{{url('approve-un-approve-message')}}">
                                            <input type="hidden" name="choice" value="1">
                                            <input type="hidden" name="tbl" value="{{encrypt('messages')}}">
                                            <input type="hidden" name="idname" value="{{encrypt('mid')}}">
                                            <input type="hidden" name="id" value="{{$m->mid}}">
                                            <button>Approve</button>
                                        </form>
                                    </td>
                                    @endif
                                    @if($m->status == 'approve')
                                    <td>
                                        <form method="post" action="{{url('approve-un-approve-message')}}">
                                            <input type="hidden" name="choice" value="0">
                                            <input type="hidden" name="tbl" value="{{encrypt('messages')}}">
                                            <input type="hidden" name="id" value="{{$m->mid}}">
                                            <button>Un Approve</button>
                                        </form>
                                    </td>
                                    @endif
                                    <td>
                                        <form method="post" action="{{url('delete')}}" class="ml-3">
                                            {{csrf_field()}}
                                            <input type="hidden" name="tbl" value="{{encrypt('messages')}}">
                                            <input type="hidden" name="tblidname" value="{{encrypt('mid')}}">
                                            <input type="hidden" name="idtodelete" value="{{$m->mid}}">
                                            <input type="submit" value="Delete" class="btn btn-warning btn-sm">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8" class="bg-danger">No Messages Found</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
