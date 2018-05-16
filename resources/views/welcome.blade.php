@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" async defer>

<style>

.business-header {
    height: 1150px;
    background: url('home.jpg') center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
   padding: 0;
    color: #fff;
    /*background-image: url(../img/cover/home.jpg);*/
    background-repeat: no-repeat;
    background-position: center center;
        

}

.img-center {
    margin: 0 auto;
}


</style>
    <header class="business-header">
        
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    

                    </div>
                </div>
            </div>
        </div>
    </header>
    


    <!-- Page Content -->
     <div class="container">
<section id="search">
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Tutor Connection
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Find A Student</h4>
                    </div>
                    <div class="panel-body">
                       <form class="navbar-form navbar-left" role="search" action="{{route('search.student_results')}}">
                            <div class="form-group">
                                <input type="text" class="form-control" name="search_students" placeholder="Search">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Find A Tutor</h4>
                    </div>
                    <div class="panel-body">
                        <form class="navbar-form navbar-left" role="search" action="{{route('search.tutor_results')}}">
                            <div class="form-group">
                            <input type="text" class="form-control" name="search_tutors" placeholder="Search">
                            <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Advanced Search</h4>
                    </div>
                    <div class="panel-body">
                        <form class="navbar-form navbar-left" >
                            <div class="form-group">
                                <input type="text" class="form-control" name="advanced_search" placeholder="Advanced Search">
                                <a href="#" class="btn btn-default">Search</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
</section>
<section id="services" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2 class="mt-0 mb-4">What we love doing.</h2>
                    <div class="border"></div>
                    <p class="mt-4 mb-0">Pure mathematics is, in its way, the poetry of logical ideas.</p>
                </div>
                <div class="row">
                    <div class="col-sm-4 service animated hiding" data-animation="fadeInUp" data-delay="300">
                        <i class="fa fa-calculator fa-5x"></i>
                        <h3 class="mt-5 mb-4"><a href="#">quick counting</a></h3>
                        <p>Learn to count faster than a calculator</p>
                    </div>
                    <div class="col-sm-4 service animated hiding" data-animation="fadeInUp" data-delay="600">
                        <i class="fa fa-leanpub fa-5x"></i>
                        <h3 class="mt-5 mb-4"><a href="#">educational materials</a></h3>
                        <p>We have many interesting articles about mathematics</p>
                    </div>
                    <div class="col-sm-4 service animated hiding" data-animation="fadeInUp" data-delay="900">
                        <i class="fa fa-mobile fa-5x"></i>
                        <h3 class="mt-5 mb-4"><a href="#">online learning</a></h3>
                        <p>Our tutors teach children in skype. And send homework to phones</p>
                    </div>
                </div>
            </div>
        </div></section>    
<section id="work" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2 class="mt-0 mb-4">This is how we do it.</h2>
                    <div class="border"></div>
                    <p class="mt-4 mb-0">Do not worry about your difficulties in Mathematics. I can assure you mine are still greater.</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="portfolio">
                            <ul class="filters list-inline">
                                <li class="list-inline-item">
                                    <a class="active" data-filter="*" href="#">All</a>
                                </li>
                                <li class="list-inline-item">
                                    <a data-filter=".photography" href="#">Photography</a>
                                </li>
                                <li class="list-inline-item">
                                    <a data-filter=".branding" href="#">Interesting</a>
                                </li>
                                <li class="list-inline-item">
                                    <a data-filter=".web" href="#">Book</a>
                                </li>
                            </ul>
                            <ul class="items list-unstyled clearfix animated hiding mb-0" data-animation="fadeInRight">
                                <li class="item branding">
                                    <a href="work.html" data-gall="work" data-vbtype="ajax">
                                        <img src="/1.jpg" alt="">
                                        <div class="overlay">
                                            <span>Etiam porta</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="item photography">
                                    <a href="work.html" data-gall="work" data-vbtype="ajax">
                                        <img src="2.jpg" alt="">
                                        <div class="overlay">
                                            <span>Lorem ipsum</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="item branding">
                                    <a href="work.html" data-gall="work" data-vbtype="ajax">
                                        <img src="img/work/3.jpg" alt="">
                                        <div class="overlay">
                                            <span>Vivamus quis</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="item photography">
                                    <a href="work.html" data-gall="work" data-vbtype="ajax">
                                        <img src="img/work/4.jpg" alt="">
                                        <div class="overlay">
                                            <span>Donec ac tellus</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="item photography">
                                    <a href="work.html" data-gall="work" data-vbtype="ajax">
                                        <img src="img/work/5.jpg" alt="">
                                        <div class="overlay">
                                            <span>Etiam volutpat</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="item web">
                                    <a href="work.html" data-gall="work" data-vbtype="ajax">
                                        <img src="img/work/6.jpg" alt="">
                                        <div class="overlay">
                                            <span>Donec congue </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="item photography">
                                    <a href="work.html" data-gall="work" data-vbtype="ajax">
                                        <img src="img/work/7.jpg" alt="">
                                        <div class="overlay">
                                            <span>Nullam a ullamcorper diam</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="item web">
                                    <a href="work.html" data-gall="work" data-vbtype="ajax">
                                        <img src="img/work/8.jpg" alt="">
                                        <div class="overlay">
                                            <span>Etiam consequat</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
        <section id="clients" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="row">
                    <div class="col-sm-12 animated hiding" data-animation="fadeInDown">
                        <div id="testimonials" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                                <li data-target="#testimonials" data-slide-to="1" class=""></li>
                                <li data-target="#testimonials" data-slide-to="2" class=""></li>
                                <li data-target="#testimonials" data-slide-to="3" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active flex-column">
                                    <p class="quote mb-4">"I really liked that the tutors would not give up on me.".</p>
                                    <p class="client mb-5">— Taras, 7th Grade, Kyiv</p>
                                </div>
                                <div class="carousel-item flex-column">
                                    <p class="quote mb-4">"My tutoring session went very well. I was pleased with all of the tips and personalized information given to help my specific needs."</p>
                                    <p class="client mb-5">Arina, Odesa</p>
                                </div>
                                <div class="carousel-item flex-column">
                                    <p class="quote mb-4">"Good job! I understood my problem after my session.</p>
                                    <p class="client mb-5">Kadir, Lviv</p>
                                </div>
                                <div class="carousel-item flex-column">
                                    <p class="quote mb-4">"This helped a lot. i had missed school and didn''t know what was going on, so i am glad i was directed here.</p>
                                    <p class="client mb-5">Petro,Vinnitsa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section id="about" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2 class="mt-0 mb-4">About Us.</h2>
                    <div class="border"></div>
                    <p class="mt-4 mb-0">To me, mathematics, computer science, and the arts are insanely related. They're all creative expressions.</p>                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInLeft" data-delay="600">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/1.jpg" alt="">
                        </div>
                        <div class="bio mt-4">
                            <h5 class="mb-1">Svitlana Murakhovska</h5>
                            <p>director</p>
                            <div class="border mt-4 mb-4"></div>
                            <p>Creator and PR manager of the school tutors.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="http://www.facebook.com" title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://www.twitter.com" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://www.linkedin.com" title="LinkedIn">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://www.github.com" title="GitHub">
                                        <i class="fa fa-github"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="300">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/2.jpg" alt="">
                        </div>
                        <div class="bio mt-4">
                            <h5 class="mb-1">Maksim Dorov</h5>
                            <p>designer</p>
                            <div class="border mt-4 mb-4"></div>
                            <p> administrator and creative director.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="http://www.dribbble.com" title="Dribbble">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                            

                                <li class="list-inline-item">
                                    <a href="http://www.instagram.com" title="Instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="300">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/3.jpg" alt="">
                        </div>
                        <div class="bio mt-4">
                            <h5 class="mb-1">Marina Oleksienko</h5>
                            <p>account Manager</p>
                            <div class="border mt-4 mb-4"></div>
                            <p>assistant in the selection of a tutor.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="http://www.twitter.com" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                
                           
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInRight" data-delay="600">
                        <div class="profile-photo">
                            <img class="img-fluid" src="img/team/4.jpg" alt="">
                        </div>
                        <div class="bio mt-4">
                            <h5 class="mb-1">Maria Feka</h5>
                            <p>support</p>
                            <div class="border mt-4 mb-4"></div>
                            <p>Help customers with problems on the site.</p>
                            <ul class="list-inline">
                               
                              
                                <li class="list-inline-item">
                                    <a href="http://www.trello.com" title="Trello">
                                        <i class="fa fa-trello"></i>
                                    </a>
                                </li>
                                
                                    
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section id="contact" class="page overlay">
        <div class="container">
            <div class="content cover text-center">
                <div class="heading">
                    <h2 class="mt-0 mb-4">Getting in touch.</h2>
                    <div class="border"></div>
                    <p class="mt-4 mb-0">The individualization of learning fundamentally redefines the role of assessment.</p>
                </div>
                <div class="row">
                    <div class="col-sm-4 animated hiding" data-animation="fadeInRight" data-delay="600">
                        <i class="fa fa-map-marker fa-3x"></i>
                        <a href="#">Vinnitsa,Ukraine</a>
                    </div>
                    <div class="col-sm-4 animated hiding" data-animation="fadeInDown" data-delay="300">
                        <i class="fa fa-phone fa-3x"></i>
                        <a href="tel:9876543210">(096) 833-9739</a>
                    </div>
                    <div class="col-sm-4 animated hiding" data-animation="fadeInLeft" data-delay="600">
                        <i class="fa fa-envelope fa-3x"></i>
                        <a href="mailto:john.doe@mail.com">svetamurax13@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
      

    </div>
    <!-- /.container -->



@endsection
