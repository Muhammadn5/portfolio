@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-sm-10 title">
            <h1><i class="fa fa-bars"></i> Edit Service</h1>
        </div>

        <div class="col-sm-12">
            <div class="row">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{Session('message')}}
                    </div>
                @endif
                <form method="post" action="{{url('update-service')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="tbl" value="{{encrypt('services')}}">
                    <input type="hidden" name="ser_id" value="{{$data->ser_id}}">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="title">Title</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="title" value="{{$data->title}}" class="form-control" placeholder="Enter title here">
                        </div>
                        <div class="form-group">
                            <label for="min_pages">Minimum pages of site</label>
                        </div>
                        <div class="form-group">
                            <input type="number" name="min_pages" value="{{$data->min_pages}}" class="form-control" placeholder="Enter Minimum pages per site here">
                        </div>
                        <div class="form-group">
                            <label for="min_charges">Minimum Charges</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="min_charges" value="{{$data->min_charges}}" class="form-control" placeholder="Enter Minimum Charges here">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                        </div>
                        <div class="form-group">
                            <textarea name="description" class="form-control" placeholder="Enter Description Here" rows="6">{{$data->description}}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="max_pages">Maximum pages of site</label>
                        </div>
                        <div class="form-group">
                            <input type="number" name="max_pages" value="{{$data->max_pages}}" class="form-control" placeholder="Enter Maximum pages per site here">
                        </div>
                        <div class="form-group">
                            <label for="max_charges">Maximum Charges</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="max_charges" value="{{$data->max_charges}}" class="form-control" placeholder="Enter Maximum Charges here">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                        </div>
                        <div class="form-group">
                            <select name="status" class="form-control">
                                <option value="{{$data->status}}">{{$data->status}}</option>
                                @if($data->status == 'display')
                                <option value="draft">Draft</option>
                                @else
                                <option value="display">Display</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="content publish-box">
                            <h4>Publish <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4>
                            <hr>
                            <div class="form-group">
                                <button class="btn btn-default">update Draft</button>
                            </div>
                            <p>Status: Draft <a href="#">Edit</a></p>
                            <p>Visibility: Public <a href="#">Edit</a></p>
                            <p>Publish: Immediately <a href="#">Edit</a></p>
                            <div class="row">
                                <div class="col-sm-12 main-button">
                                    <button class="btn btn-primary pull-right">Update</button>
                                </div>
                            </div>
                        </div>
                        <div class="content featured-image">
                            <div class="form-group content featured-image">

                                <h4>Image <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4>
                                <hr>
                                @if($data->image!='')
                                <p><img src="{{url('/services')}}/{{$data->image}}" id="output" style="max-width: 100%"/></p>
                                <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                                <p><label for="file" style="cursor: pointer;">Change Image</label></p>
                                @else
                                    <p><img id="output" style="max-width: 100%"/></p>
                                    <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                                    <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

<script>
    var loadFile = function (event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
