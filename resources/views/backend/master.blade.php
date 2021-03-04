<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>ADMIN DASHBOARD | WEBSITE NAME</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/ionicons.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/menu.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/backendstyle.css')}}">
</head>
<body>

<div class="sidebar">
	<ul class="sidebar-menu">
		<li><a href="{{url('admin')}}" class="dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
		<li class="treeview">
            <a href="#">
              <i class="fa fa-bookmark-o"></i> <span>Bio</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('seebio')}}"><i class="fa fa-eye"></i>See Bio</a></li>
                @if(count($bio)<=0)
              <li><a href="{{url('addbio')}}"><i class="fa fa-plus-circle"></i>Add Bio</a></li>
                @endif
            </ul>
        </li>
        <li class="treeview">
            <a href="{{url('skills')}}">
                <i class="fa fa-graduation-cap"></i> <span>Skills</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{url('resume')}}">
                <i class="fa fa-file"></i> <span>Resume</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{url('projects')}}">
                <i class="fa fa-bar-chart"></i> <span>Projects</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{url('intrests')}}">
                <i class="fa fa-book"></i> <span>Interests</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>

        <li class="treeview">
            <a href="{{url('messages')}}">
                <i class="fa fa-envelope"></i> <span>Messages</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-globe"></i> <span>Services</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('all-services')}}"><i class="fa fa-eye"></i>All Services</a></li>
              <li><a href="{{url('add-service')}}"><i class="fa fa-plus-circle"></i>Add Service</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="{{url('login-info')}}">
                <i class="fa fa-lock"></i> <span>Login Info</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{url('logout')}}">
                <i class="fa fa-lock"></i> <span>Log Out</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>
	</ul>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> DASHBOARD</h1>
		</div>

		<div class="col-sm-12">
			<div class="content">
				<h2>Welcome to Dashboard</h2>
				<p class="welcome-text">We,ve assembled some links for you to get started.</p>
				@yield('content')
			</div>
		</div>
	</div>
</div>

<footer>
	<div class="col-sm-6">
		Copyright &copy; 2018 <a href="http://www.webtrickshome.com">Webtrickshome.com</a> All rights reserved.
	</div>
	<div class="col-sm-6">
		<span class="pull-right">Version 2.2.3</span>
	</div>
</footer>

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>
