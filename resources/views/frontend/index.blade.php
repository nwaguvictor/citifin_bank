@extends('layouts.frontend')

@section('content')

<!-- Start intro Area -->
<div class="slide-area fix">
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container">
                <div class="row">
                    <div class="slide-text-inner">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <!-- Start slide content -->
                            <div class="slide-content">
                                <h2 class="title2">Move money in easy secure steps</h2>
                                <p>Fast and easy you want to be more secure send and recives money sort time</p>
                                <div class="layer-1-3">
                                    <a href="{{ route('register') }}" class="ready-btn" >Get started</a>
                                </div>
                            </div>
                            <!-- End slide content -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <!-- Start mony send content -->
                           <div class="money-send">
                                <div class="calculator-inner">
                                    <div class="single-cal">
                                        <form action="{{ route('login') }}" method="POST">
                                            @csrf

                                            <div class="form-group" style="margin: 0">
                                                <label for="email_address">Enter Email address</label>
                                                <input type="text" name="email" class="form-input" placeholder="example@gmail.com" style="width: 100%; color: #333;" required>
                                            </div>
                                            <div class="form-group" style="margin: 0">
                                                <label for="password">Enter Password</label>
                                                <input type="password" name="password" class="form-input" placeholder="xxxxxxxx" style="width: 100%; color: #333;" required>
                                            </div>
                                            @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                                            <button type="submit" class="cale-btn">Login</button>
                                        </form>
                                        <div class="terms-text">
                                            <a href="">Forgot Password</a> |
                                            <a href="{{ route('register') }}">Register</a>
                                        </div>
                                </div>
                           </div>
                           <!-- End mony send content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End intro Area -->
<!-- Start How to area -->
<div class="how-to-area bg-color area-padding">
    <div class="container">
        <div class="row">
            <div class="all-services">
                <!-- Start single column-->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="well-services">
                        <div class="well-img">
                            <a class="big-icon" href="#"><i class="flaticon-102-businessman"></i></a>
                        </div>
                        <div class="main-wel">
                            <div class="wel-content">
                                <h4>Create an account</h4>
                                <p> Minim liber accusata pro ne, mea id quot apeirian lisque. No melius nusquam sentias eam, usu ex prima iriure.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single column-->
                <!-- Start single column-->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="well-services ">
                        <div class="well-img">
                            <a class="big-icon" href="#"><i class="flaticon-046-bank-1"></i></a>
                        </div>
                        <div class="main-wel">
                            <div class="wel-content">
                                <h4>Attach bank accounts</h4>
                                <p> Minim liber accusata pro ne, mea id quot apeirian lisque. No melius nusquam sentias eam, usu ex prima iriure.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single column-->
                <!-- Start single column-->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="well-services">
                        <div class="well-img">
                            <a class="big-icon" href="#"><i class="flaticon-028-money"></i></a>
                        </div>
                        <div class="main-wel">
                            <div class="wel-content">
                                <h4>Send money</h4>
                                <p> Minim liber accusata pro ne, mea id quot apeirian lisque. No melius nusquam sentias eam, usu ex prima iriure.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single column-->
            </div>
        </div>
    </div>
</div>
<!-- End How to area -->
<!-- Start about area -->
<div class="about-area bg-color2 area-padding">
    <div class="container">
        <div class="row">
            <!-- Start column-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="about-image">
                    <img src="img/about/vd.jpg" alt="" class="ab-first-img">
                    <img src="img/about/vd1.jpg" alt="" class="ab-second-img">
                     <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
                        <i class="fa fa-play"></i>
                     </a>
                </div>
            </div>
            <!-- End column-->
            <!-- Start column-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="about-content">
                    <h3>Why choose our world fast online payment services.</h3>
                    <p class="hidden-sm"> Minim liber accusata pro ne, mea id quot apeirian lisque. No melius nusquam sentias eam, usu ex prima iriure. Cum velit dolorum scaevola ea, ex eos debitis omittantur</p>
                    <div class="about-details">
                        <div class="single-about">
                            <a href="#"><i class="flaticon-079-graphic"></i></a>
                            <div class="icon-text">
                                <h5>Low Costing</h5>
                                <p>The phrasal sequence of the Lorem Ipsum text is now so widespread that many the starting sequence</p>
                            </div>
                        </div>
                        <div class="single-about">
                            <a href="#"><i class="flaticon-007-document-2"></i></a>
                            <div class="icon-text">
                                <h5>Safe & Secure</h5>
                                <p>The phrasal sequence of the Lorem Ipsum text is now so widespread that many the starting sequence</p>
                            </div>
                        </div>
                        <div class="single-about">
                            <a href="#"><i class="flaticon-107-speech-bubbles"></i></a>
                            <div class="icon-text">
                                <h5>Live Support</h5>
                                <p>The phrasal sequence of the Lorem Ipsum text is now so widespread that many the starting sequence</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End column-->
        </div>
    </div>
</div>
<!-- End about area -->
<!-- Start services area -->
<div class="services-area bg-color area-padding-2">
    <div class="container">
       <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline white-headline text-center">
                    <h3>Bultifore services worldwide</h3>
                    <p>Help agencies to define their new business objectives and then create professional software.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Start single column-->
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-service ">
                    <div class="service-img">
                        <a class="service-icon" href="#"><i class="flaticon-048-atm"></i></a>
                    </div>
                    <div class="main-service">
                        <div class="service-content">
                            <h4>Money Transfer</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single column-->
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-service ">
                    <div class="service-img">
                        <a class="service-icon" href="#"><i class="flaticon-103-buildings"></i></a>
                    </div>
                    <div class="main-service">
                        <div class="service-content">
                            <h4>Bank deposit</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single column-->
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-service ">
                    <div class="service-img">
                        <a class="service-icon" href="#"><i class="flaticon-067-shopping-cart-1"></i></a>
                    </div>
                    <div class="main-service">
                        <div class="service-content">
                            <h4>Online Shopping</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single column-->
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-service ">
                    <div class="service-img">
                        <a class="service-icon" href="#"><i class="flaticon-040-mobile-phone-4"></i></a>
                    </div>
                    <div class="main-service">
                        <div class="service-content">
                            <h4>Online payment</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single column-->
            <div class="col-md-offset-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-service ">
                    <div class="service-img">
                        <a class="service-icon" href="#"><i class="flaticon-109-credit-card"></i></a>
                    </div>
                    <div class="main-service">
                        <div class="service-content">
                            <h4>Prepaid Card</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single column-->
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="single-service ">
                    <div class="service-img">
                        <a class="service-icon" href="#"><i class="flaticon-091-mobile-phone-2"></i></a>
                    </div>
                    <div class="main-service">
                        <div class="service-content">
                            <h4>Pay a Bill</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single column-->
        </div>
    </div>
</div>
<!-- End services area -->
<!-- Start counter area -->
<div class="feature-area fix area-padding-2">
    <div class="container">
       <div class="row">
           <!-- Start single column-->
           <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="feature-image">
                    <div class="rotmate-image rotateme">
                        <img src="img/about/circle.png" alt="">
                    </div>
                    <div class="top-img">
                        <img src="img/about/ab1.png" alt="">
                    </div>
                </div>
            </div>
            <!-- End single column-->
            <!-- Start single column-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="feature-text-all">
                        <!-- Start feature column  -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="feature-text wow fadeInUp" data-wow-delay="0.2s">
                               <img src="img/feature/f1.jpg" alt="" class="feature-img">
                               <div class="featture-content">
                                   <h4>Freelancer</h4>
                                   <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain</p>
                               </div>
                            </div>
                        </div>
                        <!-- End feature column  -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="feature-text wow fadeInUp" data-wow-delay="0.3s">
                               <img src="img/feature/f2.jpg" alt="" class="feature-img">
                               <div class="featture-content">
                                   <h4>Online shopping</h4>
                                   <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain</p>
                               </div>
                            </div>
                        </div>
                        <!-- End feature column  -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="feature-text wow fadeInUp" data-wow-delay="0.4s">
                                <img src="img/feature/f3.jpg" alt="" class="feature-img">
                                <div class="featture-content">
                                   <h4>Pay a friend</h4>
                                   <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain</p>
                               </div>
                            </div>
                        </div>
                        <!-- End feature column  -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="feature-text wow fadeInUp" data-wow-delay="0.5s">
                                <img src="img/feature/f4.jpg" alt="" class="feature-img">
                                <div class="featture-content">
                                   <h4>Social marketing</h4>
                                   <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain</p>
                               </div>
                            </div>
                        </div>
                        <!-- End feature column  -->
                    </div>
                </div>
            </div>
            <!-- End single column-->
        </div>
    </div>
</div>
<!-- End feature area -->
<!-- Start support services Area -->
<div class="support-service-area bg-color2 area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Why choose us</h3>
                    <p>Help agencies to define their new business objectives and then create professional software.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="support-all">
                <!-- Start column-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="support-services ">
                        <span class="top-icon"><i class="flaticon-008-document-1"></i></span>
                        <a class="support-images" href="#"><i class="flaticon-008-document-1"></i></a>
                        <div class="support-content">
                            <h4>Fraud detection</h4>
                            <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                        </div>
                    </div>
                </div>
                <!-- End column-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="support-services ">
                        <span class="top-icon"><i class="flaticon-026-businessman-2"></i></span>
                        <a class="support-images" href="#"><i class="flaticon-026-businessman-2"></i></a>
                        <div class="support-content">
                            <h4>Support manager</h4>
                            <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                        </div>
                    </div>
                </div>
                <!-- End column-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="support-services ">
                       <span class="top-icon"><i class="flaticon-042-security"></i></span>
                        <a class="support-images" href="#"><i class="flaticon-042-security"></i></a>
                        <div class="support-content">
                            <h4>Account updater</h4>
                            <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                        </div>
                    </div>
                </div>
                <!-- End column-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="support-services">
                        <span class="top-icon"><i class="flaticon-024-signature-1"></i></span>
                        <a class="support-images" href="#"><i class="flaticon-024-signature-1"></i></a>
                        <div class="support-content">
                            <h4>Payment invoice</h4>
                            <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                        </div>
                    </div>
                </div>
                <!-- End column-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="support-services ">
                       <span class="top-icon"><i class="flaticon-086-briefcase-1"></i></span>
                        <a class="support-images" href="#"><i class="flaticon-086-briefcase-1"></i></a>
                        <div class="support-content">
                            <h4>Payments types</h4>
                            <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                        </div>
                    </div>
                </div>
                <!-- End column-->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="support-services">
                       <span class="top-icon"><i class="flaticon-099-inbox"></i></span>
                        <a class="support-images" href="#"><i class="flaticon-099-inbox"></i></a>
                        <div class="support-content">
                            <h4>Simple checkout</h4>
                            <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                        </div>
                    </div>
                </div>
                <!-- End column-->
            </div>
        </div>
    </div>
</div>
<!-- End support services area -->
<!-- Start overview Area -->
<div class="overview-area bg-color fix area-padding">
    <div class="container">
        <div class="row">
            <!-- Start column-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="overview-content">
                    <div class="overview-images">
                        <img src="img/about/overview.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- End column-->
            <!-- Start column-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="overview-text">
                    <h3>Secure online shopping world top brand product </h3>
                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                    <ul>
                       <li><a href="#">Innovation idea latest business tecnology</a></li>
                        <li><a href="#">Digital content marketing online clients plateform</a></li>
                        <li><a href="#">Safe secure services for you online email account</a></li>
                    </ul>
                    <a class="overview-btn" href="{{ route('register') }}">Register today</a>
                </div>
            </div>
            <!-- End column-->
        </div>
    </div>
</div>
<!-- End overview area -->
<!-- Start apps download area -->
<div class="download-area bg-color area-padding">
    <div class="container">
        <div class="row">
            <!-- Start column -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="download-text">
                    <h3>Download our apps of your mobile phone for service</h3>
                    <p>Replacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then createReplacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then createReplacing a  maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                    <div class="down-btn" data-wow-delay="0.7s">
                        <a href="#" class="app-btn left-btn">Play store</a>
                        <a href="#" class="app-btn right-btn">App store</a>
                    </div>
                </div>
            </div>
            <!-- End column -->
            <!-- Start column -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="download-image">
                    <img src="img/about/download.jpg" alt="download-image">
                </div>
            </div>
            <!-- End column -->
        </div>
    </div>
</div>
<!-- End apps download area -->
@endsection
