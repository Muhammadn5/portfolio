@extends('backend.master')
@section('content')
    <div class="row">
        <div class="col-sm-10 title">
            <h1><i class="fa fa-bars"></i> Add You Bio</h1>
        </div>

        <div class="col-sm-12">
            <div class="row">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> {{Session('message')}}
                    </div>
                @endif
                <form method="post" action="{{url('add-bio')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="tbl" value="{{encrypt('bios')}}">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="name">Name</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Enter name here">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Enter phone-numer here">
                        </div>
                        <div class="form-group">
                            <label for="degree">Qualification</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="degree" class="form-control"
                                   placeholder="Enter Qualification here">
                        </div>
                        <div class="form-group">
                            <label for="birth_day">Date of Birth</label>
                        </div>
                        <div class="form-group">
                            <input type="date" name="birth_day" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter email here">
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="age" class="form-control" placeholder="Enter age here">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" class="form-control" placeholder="Enter city here">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="content publish-box">
                            <h4>Publish <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4>
                            <hr>
                            <div class="form-group">
                                <button class="btn btn-default">Save Draft</button>
                            </div>
                            <p>Status: Draft <a href="#">Edit</a></p>
                            <p>Visibility: Public <a href="#">Edit</a></p>
                            <p>Publish: Immediately <a href="#">Edit</a></p>
                            <div class="row">
                                <div class="col-sm-12 main-button">
                                    <button class="btn btn-primary pull-right">Save and approve</button>
                                </div>
                            </div>
                        </div>
                        <div class="content featured-image">
                            <div class="form-group content featured-image">

                                <h4>Image <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4>
                                <hr>
                                <p><img id="output" style="max-width: 100%"/></p>
                                <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                                <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
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
