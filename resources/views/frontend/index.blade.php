<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Personal Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Personal - v2.5.1
    * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header-tops">

    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{Session('message')}}
            </div>
        @endif
        <h1><a href="{{url('/')}}">{{$data->name}}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="master.blade.php" class="mr-auto"><img src="" alt="" class="img-fluid"></a> -->
        <h2>I'm a passionate <span>web-developer</span> from {{$data->city}}</h2>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav><!-- .nav-menu -->

        <div class="social-links">
            <a href="#" class="twitter so"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook so"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram so"><i class="icofont-instagram"></i></a>
            <a href="#" class="google-plus so"><i class="icofont-skype"></i></a>
            <a href="#" class="linkedin so"><i class="icofont-linkedin"></i></a>
        </div>
    </div>
</header><!-- End Header -->

<!-- ======= About Section ======= -->
<section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

        <div class="section-title">
            <h2>About</h2>
            <p>Learn more about me</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                {{--                <img src="{{asset('img/m ishaq.png')}}" style="height: 50vh" class="img-fluid" alt="">--}}
                <img src="{{url('/bios')}}/{{$data->image}}" style=" width:100%;" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>Web Developer</h3>
                <p class="font-italic">
                    This is Web-Developer, Computer Engineer muhammad Ishaq. Love to do something new in the field of
                    web development.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{$data->birth_day}}
                            </li>
                            <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$data->phone}}</li>
                            <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : {{$data->city}}</li>
                            <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$data->age}}</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$data->degree}}</li>
                            <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> {{$data->email}}
                            </li>
                            <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                        </ul>
                    </div>
                </div>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am currently studding Computer Engineering in Mirpur
                    University of Science of Technology Azad Kashmir Pakistan. Part time i love work on web development
                    projects.
                </p>
            </div>
        </div>

    </div><!-- End About Me -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

        <div class="section-title">
            <h2>Skills</h2>
        </div>

        <div class="row skills-content">

            <div class="col-lg-6">

                @foreach($skills as $key=>$skill)
                    @if($key<=count($skills)/2)
                        <div class="progress">
                            <span class="skill">{{$skill->title}} <i class="val">{{$skill->percentage}}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->percentage}}"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-lg-6">

                @foreach($skills as $key=>$skill)
                    @if($key>count($skills)/2)
                        <div class="progress">
                            <span class="skill">{{$skill->title}} <i class="val">{{$skill->percentage}}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->percentage}}"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>

        </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

        <div class="section-title">
            <h2>Interests</h2>
        </div>

        <div class="row">
            @if(count($intrests)>0)
                @foreach($intrests as $intrest)
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box">
                            <i class="ri-store-line" style="color: #ffbb2c;"></i>
                            <h3>{{$intrest->title}}</h3>
                        </div>
                    </div>
                @endforeach
            @else
                <h3>Sorry We have some technical issues on Updation! <br>Visit Later</h3>
            @endif
        </div>

    </div><!-- End Interests -->

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

        <div class="section-title">
            <h2>Testimonials</h2>
        </div>

        <div class="owl-carousel testimonials-carousel">
            @if(count($messages)>0)
                @foreach($messages as $key=>$message)
                    @if($key <5)

                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{$message->message}}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <h3>{{$message->name}}</h3>
                        </div>
                    @endif
                @endforeach
            @endif

        </div>

    </div><!-- End Testimonials  -->

</section><!-- End About Section -->

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
    <div class="container">

        <div class="section-title">
            <h2>Resume</h2>
            <p>Check My Resume</p>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <h3 class="resume-title">Education</h3>
                @if(count($education)>0)
                    @foreach($education as $e)
                        <div class="resume-item">
                            <h4>{{$e->title}}</h4>
                            <h5>{{$e->started_at}} <span class="text-success">-to-</span> {{$e->ended_at}}</h5>
                            <p><em>From:- {{$e->place}}</em></p>
                        </div>
                    @endforeach
                @else
                    <h4>Something Went wrong</h4>
                @endif
                {{--                <div class="resume-item">--}}
                {{--                    <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>--}}
                {{--                    <h5>2010 - 2014</h5>--}}
                {{--                    <p><em>Rochester Institute of Technology, Rochester, NY</em></p>--}}
                {{--                </div>--}}

                <h3 class="resume-title">Projects</h3>
                @if(count($projects)>0)
                    @foreach($projects as $project)
                        <div class="resume-item">
                            <p><em>{{$project->name}}</em></p>
                            <p>Visit:- <a href="{{$project->url}}">{{$project->url}}</a></p>
                        </div>
                    @endforeach
                @else
                    <h3>Sorry we have some technical issues to update Projects!<br>Visit later</h3>
                @endif
            </div>
            <div class="col-lg-6">
                <h3 class="resume-title">Professional Experience</h3>
                @if(count($experience)>0)
                    @foreach($experience as $ex)
                        <div class="resume-item">
                            <h4>{{$ex->title}}</h4>
                            <h5>{{$ex->started_at}} <span class="text-success">-to-</span> {{$ex->ended_at}}</h5>
                            <p><em>At:- {{$ex->place}} </em></p>
                        </div>
                    @endforeach
                @else
                    <h4>Something went wrong</h4>
                @endif
                {{--                <div class="resume-item">--}}
                {{--                    <h4>Graphic design specialist</h4>--}}
                {{--                    <h5>2017 - 2018</h5>--}}
                {{--                    <p><em>Stepping Stone Advertising, New York, NY</em></p>--}}
                {{--                </div>--}}
            </div>
        </div>

    </div>
</section><!-- End Resume Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Services</h2>
            <p>My Services</p>
        </div>

        <div class="row">
            @if(count($services)>0)
                @foreach($services as $service)
                    <a href="{{url('service-detail')}}/{{$service->ser_id}}">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-world"></i></i></div>
                                <h4><a href="">{{$service->title}}</a></h4>
                                <p>{{substr($service->description, 0, 100)}}....</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            @else
                <h3>There is an Issue! Please visit later.</h3>
            @endif

        </div>

    </div>
</section><!-- End Services Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Me</p>
        </div>

        <div class="row mt-2">

            <div class="col-md-6 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>My Address</h3>
                    <p>Room No 117, New hostel Mirpur University AJK pakistan</p>
                </div>
            </div>

            <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-share-alt"></i>
                    <h3>Social Profiles</h3>
                    <div class="social-links">
                        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
                        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Me</h3>
                    <p>{{$data->email}}</p>
                </div>
            </div>
            <div class="col-md-6 mt-4 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Me</h3>
                    <p>{{$data->phone}}</p>
                </div>
            </div>
        </div>


        <form action="{{url('contact-submit')}}" method="post" enctype="multipart/form-data" class="mt-4">
            @csrf
            <input type="hidden" name="tbl" value="{{encrypt('messages')}}">

            <div class="form-row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control text-white" placeholder="Your Name"
                           style="background-color: #444444;"/>
                </div>
                <div class="col-md-6 form-group">
                    <input type="email" class="form-control text-white" name="email" placeholder="Your Email"
                           style="background-color: #444444;"/>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control text-white" name="phone" placeholder="Phone Number"
                       style="background-color: #444444;"/>
            </div>
            <div class="form-group">
                <textarea class="form-control text-white" name="message" rows="5" placeholder="Message"
                          style="background-color: #444444;"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="background-color: #444444;">Send Message</button>
            </div>
        </form>

    </div>
</section><!-- End Contact Section -->

<div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a class="text-success">Developer Muhammad Ishaq (Me)</a>
</div>

<!-- Vendor JS Files -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('vendor/counterup/counterup.min.js')}}"></script>
<script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('vendor/venobox/venobox.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/indexbg.js')}}"></script>

</body>

</html>
