@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-sm-10 title">
            <h1><i class="fa fa-bars"></i> All Service <small class="ml-5"><a href="{{url('add-service')}}">Add Service</a></small></h1>

        </div>

        <div class="col-sm-12">
            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Min/P/P/S</th>
                    <th scope="col">Max/P/P/S</th>
                    <th scope="col">Mix Cost P/S</th>
                    <th scope="col">Max Cost P/S</th>
                    <th scope="col">Status</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>


                </tr>
                </thead>
                <tbody>
                @if(count($data)>0)
                    @foreach($data as $d)
                <tr>
                    <th scope="row">{{$d->ser_id}}</th>
                    <td>{{$d->title}}</td>
                    <td>{{$d->min_pages}}</td>
                    <td>{{$d->max_pages}}</td>
                    <td>{{$d->min_charges}}</td>
                    <td>{{$d->max_charges}}</td>
                    <td>{{$d->status}}</td>
                    <td><a href="{{url('edit-service')}}/{{$d->ser_id}}">Edit</a></td>
                    <td><a href="{{url('delete')}}">delete</a></td>
                </tr>
                    @endforeach
                @else
                    <h3>No Services</h3>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

