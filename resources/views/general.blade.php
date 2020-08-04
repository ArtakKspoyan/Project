@extends('layout.app')
@section('title') 
MindSky
@endsection
@section('maincontent')

	
 

    <!--=== SERVICE =====-->
    <div class="service" id="myservice1">
        <div class="container">
            <div class="service_all">
                <!-- CARD -->
                <div class="_9card_main_title">
                    <span class="_9card_main_title_span"> {{ __('messages.Business Idea' )}}</span>
                    <h1 class="_9card_main_title_name">{{ __('messages.OUR SERVICES' )}}</h1>
                    <p class="_9card_main_title_items"><i>{{ __('messages.& Your dream!' )}}</i></p>
                    <div class="divider_cross">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!-- CARD -->

                <!-- CARD -->
                <div class="_9card _9card_main_two">
                    <div class="_9card_one">
                        <p class="Service_icons">
                            <i class="fas fa-laptop-code"></i>
                        </p>

                        <p class="_9card_titlte">{{ __('messages.Web Development' )}}</p>
                        <p class="_9card_text">{{ __('messages.We provide txt')}}</p>
                        

                        <div class="_9card_button">
                            <button class="_btn_one" type="button" data-toggle="modal" data-target="#modal1">{{ __('messages.SEE MORE' )}}</button>
                        </div>

                    </div>

                    <div class="_9card_five"></div>
                    <div class="_9card_bg"></div>
                </div>

                
                <!-- CARD -->

                <!-- CARD -->
                <div class="_9card _9card_main_three">
                    <div class="_9card_one">
                        <p class="Service_icons">
                            <i class="fas fa-mobile-alt"></i>
                        </p>

                        <p class="_9card_titlte">{{ __('messages.Apps Development' )}}</p>
                        <p class="_9card_text">{{ __('messages.When it txt' )}}</p>

                        <div class="_9card_button">
                            <button class="_btn_one" type="button"  data-toggle="modal" data-target="#modal2">{{ __('messages.SEE MORE' )}}</button>
                            
                        </div>

                    </div>

                    <div class="_9card_five"></div>
                    <div class="_9card_bg"></div>
                </div>
                <!-- CARD -->

                <!-- CARD -->
                <div class="_9card _9card_main_four">
                    <div class="_9card_one">
                        <p class="Service_icons">
                            <i class="fas fa-hands-helping"></i>
                        </p>

                        <p class="_9card_titlte">{{ __('messages.Business Solution' )}}</p>
                        <p class="_9card_text">{{ __('messages.Our strategic txt' )}}</p>

                        <div class="_9card_button">
                            <button class="_btn_one" type="button"  data-toggle="modal" data-target="#modal3">{{ __('messages.SEE MORE' )}}</button>
                        </div>

                    </div>

                    <div class="_9card_five"></div>
                    <div class="_9card_bg"></div>
                </div>
                <!-- CARD -->
            </div>
        </div>
    </div>
    <!--=== SERVICE =====-->

    <!--=== PORTFOLIO =====-->
    <div class="portfolio" id="myportfolio">
        <div class="container">
            <div class="_2headingTitle">
                <p class="_2headingTitle_text">{{ __('messages.best txt' )}}</p>
                <span class="_2headingTitle_name">{{ __('messages.About Us' )}}</span>
            </div>

            <div class="portfolio_main_all">
                <div class="row">
                    <!-- CARD ONE -->
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="_11card portfolio_card_one portfolio_card_common">
                            <div class="_11card_top">
                                <div class="_11card_top_left _text_right">
                                    <!--<p class="_11card_top_title">We are Awesome</p>-->
                                    <p class="_11card_top_text">{{ __('messages.WHO WE ARE' )}}</p>
                                </div>

                                <div class="_11card_top_pic">
                                    <button class="_11card_button">
                                        <span class="_11card_after"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_before"></span>
                                        <i class="fa fa-trophy" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="_11card_status _text_right">
                                <p class="_11card_status_text">{{ __('messages.is enabled txt' )}}</p>
                            </div>

                            <div class="_11card_see_more">
                                <button class="_11card_see_more_btn" type="button" data-toggle="modal" data-target="#modalQuickView1">{{ __('messages.SEE MORE' )}}</button>
                            </div>
                        </div>
                    </div>
                    <!-- CARD ONE -->

                    <!-- CARD TWO -->
                    <div class="col-12 col-md-4 col-lg-4">
                        <div id="_11card_portfolio_card_two" class="_11card portfolio_card_two _11card_active">
                            <div class="_11card_top">
                                <div class="_11card_top_pic">
                                    <button class="_11card_button">
                                        <span class="_11card_after"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_before"></span>
                                        <i class="fa fa-trophy" aria-hidden="true"></i>
                                    </button>
                                </div>

                                <div class="_11card_top_left">
                                    <!--<p class="_11card_top_title">We are Awesome</p>-->
                                    <p class="_11card_top_text">{{ __('messages.WHY CHOOSE US')}}</p>
                                </div>
                            </div>

                            <div class="_11card_status _text_center">
                                <p class="_11card_status_text">{{ __('messages.is one txt' )}}</p>
                            </div>

                            <div class="_11card_see_more">
                                <button class="_11card_see_more_btn" type="button" data-toggle="modal" data-target="#modalQuickView2">{{ __('messages.SEE MORE' )}}</button>
                            </div>
                        </div>
                    </div>
                    <!-- CARD TWO -->

                    <!-- CARD THREE -->
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="_11card portfolio_card_common  portfolio_card_three">
                            <div class="_11card_top">
                                <div class="_11card_top_pic">
                                    <button class="_11card_button">
                                        <span class="_11card_after"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_spike"></span>
                                        <span class="_11card_before"></span>
                                        <i class="fa fa-trophy" aria-hidden="true"></i>
                                    </button>
                                </div>

                                <div class="_11card_top_left">
                                    <!--<p class="_11card_top_title">We are Awesome</p>-->
                                    <p class="_11card_top_text">{{ __('messages.OUR CREATIVE TEAM' )}}</p>
                                </div>
                            </div>

                            <div class="_11card_status">
                                <p class="_11card_status_text">{{ __('messages.believes in txt' )}}</p>
                            </div>

                            <div class="_11card_see_more">
                                <button class="_11card_see_more_btn" type="button" data-toggle="modal" data-target="#modalQuickView3">{{ __('messages.SEE MORE' )}}</button>
                            </div>
                        </div>
                    </div>
                    <!-- CARD THREE -->
                </div>
            </div>
        </div>
    </div>
    <!--=== PORTFOLIO =====-->


    <!-- <div class="container">

    <div class="row">
    @foreach($blog as $value)

    <h1>{{ $value->title}}</h1>
    <div>{!! $value->post !!}}</div>

    @endforeach
    
    </div>
    
    </div> -->

    <!--=== INFO =====-->
    <div class="info">
        <div class="container">
            <div class="row">
                <!-- ITEMS -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="_16card">
                        <div class="_16card_top">
                            <p class="_16card_top_icons"><i class="fas fa-magic"></i></p>

                            <p class="_16card_top_title">{{ __('messages.Research' )}}</p>

                            <div class="_16card_bg_img"></div>

                            <div class="_16card_top_overlay"></div>
                        </div>

                        <div class="_16card_bottom">
                            <p class="_16card_status">{{ __('messages.Research txt' )}}</p>

                            <div class="_16card_button">
                                <button class="_16card_btn" type="button" data-toggle="modal" data-target="#centralModalSuccesstext1">{{ __('messages.READ MORE' )}}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ITEMS -->

                <!-- ITEMS -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="_16card _16card_two">
                        <div class="_16card_top">
                            <p class="_16card_top_icons"><i class="far fa-edit"></i></p>

                            <p class="_16card_top_title">{{ __('messages.Design' )}}</p>

                            <div class="_16card_bg_img"></div>

                            <div class="_16card_top_overlay"></div>
                        </div>

                        <div class="_16card_bottom">
                            <p class="_16card_status">{{ __('messages.design txt' )}}</p>

                            <div class="_16card_button">
                                <button class="_16card_btn" type="button" data-toggle="modal" data-target="#centralModalSuccesstext2">{{ __('messages.READ MORE' )}}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ITEMS -->

                <!-- ITEMS -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="_16card">
                        <div class="_16card_top">
                            <p class="_16card_top_icons"><i class="fas fa-cogs"></i></p>

                            <p class="_16card_top_title">{{ __('messages.Development' )}}</p>

                            <div class="_16card_bg_img"></div>

                            <div class="_16card_top_overlay"></div>
                        </div>

                        <div class="_16card_bottom">
                            <p class="_16card_status">{{ __('messages.We develop txt' )}}</p>

                            <div class="_16card_button">
                                <button class="_16card_btn" type="button" data-toggle="modal" data-target="#centralModalSuccesstext3">{{ __('messages.READ MORE' )}}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ITEMS -->

                <!-- ITEMS -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="_16card _16card_two">
                        <div class="_16card_top">
                            <p class="_16card_top_icons"><i class="fas fa-hands-helping"></i></p>

                            <p class="_16card_top_title">{{ __('messages.Delivery' )}}</p>

                            <div class="_16card_bg_img"></div>

                            <div class="_16card_top_overlay"></div>
                        </div>

                        <div class="_16card_bottom">
                            <p class="_16card_status">{{ __('messages.Next everything' )}}</p>

                            <div class="_16card_button">
                                <button class="_16card_btn" type="button" data-toggle="modal" data-target="#centralModalSuccesstext4">{{ __('messages.READ MORE' )}}</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- ITEMS -->
            </div>
        </div>
    </div>
    <!--=== INFO =====-->

    <!--=== USE =====-->
    <div class="use" id="myourtech">
        <div class="use_main">
            <img class="use_img" src="{{ asset('/images/secOne.png') }}" alt="secOne" title="">
            <!-- TITLE -->
            <div class="use_title">
                <p class="_2headingTitle_text">{{ __('messages.We' )}} <strong class="love">{{ __('messages.love' )}}</strong> {{ __('messages.latest technologies!' )}} </p>
                <span class="_2headingTitle_name">{{ __('messages.What We Use' )}}</span>
              
            </div>
            <!-- TITLE -->

            <!-- USE CARD ONE -->
            <div class="use_card">
                <!-- CARD -->
                <div class="_15card_all">
                    <div class="_15card">
                        <p class="_15card_icons">
                            <img class="_15card_icons_pic" src="{{ asset('/images/php.png') }}" alt="php" title="">
                        </p>

                        <div class="_15card_overlay">
                            <svg class="chart__svg" viewBox="0 0 130 130" fill="none">
                                <circle class="chart__circle-meter" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="rgba(226, 236, 255, 0.65);"></circle>
                                <circle class="chart__circle-value" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="var(--brand-primary)"
                                    style="stroke-dasharray: 408.407; stroke-dashoffset: 69.4292;"></circle>
                            </svg>
                        </div>

                    </div>

                    <div class="_15card_hover _15card_hover_one">
                        <p class="_15card_hover_title">PHP</p>
                     
                    </div>
                </div>       
                <!-- CARD -->

                <!-- CARD -->
                <div class="_15card_all">
                    <div class="_15card">
                        <p class="_15card_icons">
                            <img class="_15card_icons_pic" src="{{ asset('/images/codeigniter.png') }}" alt="codeigniter" title="">
                        </p>

                        <div class="_15card_overlay">
                            <svg class="chart__svg" viewBox="0 0 130 130" fill="none">
                                <circle class="chart__circle-meter" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="rgba(226, 236, 255, 0.65);"></circle>
                                <circle class="chart__circle-value" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="var(--brand-primary)"
                                    style="stroke-dasharray: 408.407; stroke-dashoffset: 69.4292;"></circle>
                            </svg>
                        </div>

                        <!--<p class="_15card_title">Front End Development</p>-->
                    </div>

                    <div class="_15card_hover _15card_hover_two">
                        <p class="_15card_hover_title">Codeigniter</p>
                   
                    </div>
                </div>
                <!-- CARD -->

                <!-- CARD -->
                <div class="_15card_all">
                    <div class="_15card">
                        <p class="_15card_icons">
                            <img class="_15card_icons_pic" src="{{ asset('/images/laravel-design.png') }}" alt="laravel" title="">
                        </p>

                        <div class="_15card_overlay">
                            <svg class="chart__svg" viewBox="0 0 130 130" fill="none">
                                <circle class="chart__circle-meter" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="rgba(226, 236, 255, 0.65);"></circle>
                                <circle class="chart__circle-value" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="var(--brand-primary)"
                                    style="stroke-dasharray: 408.407; stroke-dashoffset: 69.4292;"></circle>
                            </svg>
                        </div>

                       
                    </div>

                    <div class="_15card_hover _15card_hover_two">
                        <p class="_15card_hover_title">Laravel</p>
                     
                    </div>
                </div>
                <!-- CARD -->

                <!-- CARD -->
                <div class="_15card_all">
                    <div class="_15card">
                        <p class="_15card_icons">
                            <img class="_15card_icons_pic" src="{{ asset('/images/expressjs.png') }}" alt="expressjs" title="">
                        </p>

                        <div class="_15card_overlay">
                            <svg class="chart__svg" viewBox="0 0 130 130" fill="none">
                                <circle class="chart__circle-meter" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="rgba(226, 236, 255, 0.65);"></circle>
                                <circle class="chart__circle-value" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="var(--brand-primary)"
                                    style="stroke-dasharray: 408.407; stroke-dashoffset: 69.4292;"></circle>
                            </svg>
                        </div>

                     
                    </div>

                    <div class="_15card_hover _15card_hover_one">
                        <p class="_15card_hover_title">Express JS</p>
                        
                    </div>
                </div>
                <!-- CARD -->

                <!-- CARD -->
                <div class="_15card_all">
                    <div class="_15card">
                        <p class="_15card_icons">
                            <img class="_15card_icons_pic" src="{{ asset('/images/adonis.png') }}" alt="adonis" title="">
                        </p>

                        <div class="_15card_overlay">
                            <svg class="chart__svg" viewBox="0 0 130 130" fill="none">
                                <circle class="chart__circle-meter" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="rgba(226, 236, 255, 0.65);"></circle>
                                <circle class="chart__circle-value" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="var(--brand-primary)"
                                    style="stroke-dasharray: 408.407; stroke-dashoffset: 69.4292;"></circle>
                            </svg>
                        </div>

                      
                    </div>

                    <div class="_15card_hover _15card_hover_one">
                        <p class="_15card_hover_title">Adonis JS</p>
                      
                    </div>
                </div>
                <!-- CARD -->
            </div>
            <!-- USE CARD ONE -->

            <!-- USE CARD TWO -->
            <div class="use_card_two">
                <!-- CARD -->
                <div class="_15card_all">
                    <div class="_15card">
                        <p class="_15card_icons">
                            <img class="_15card_icons_pic" src="{{ asset('/images/wordpress.png') }}" alt="wordpress" title="">
                        </p>

                        <div class="_15card_overlay">
                            <svg class="chart__svg" viewBox="0 0 130 130" fill="none">
                                <circle class="chart__circle-meter" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="rgba(226, 236, 255, 0.65);"></circle>
                                <circle class="chart__circle-value" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="var(--brand-primary)"
                                    style="stroke-dasharray: 408.407; stroke-dashoffset: 69.4292;"></circle>
                            </svg>
                        </div>

                        
                    </div>

                    <div class="_15card_hover _15card_hover_three">
                        <p class="_15card_hover_title">Wordpress</p>
                        
                    </div>
                </div>
                <!-- CARD -->

                <!-- CARD -->
                <div id="_15card_active" class="_15card_all _15card_active">
                    <div class="_15card ">
                        <p class="_15card_icons">
                            <img class="_15card_icons_pic" src="{{ asset('/images/vue.png') }}" alt="vue" title="">
                        </p>

                        <div class="_15card_overlay">
                            <svg class="chart__svg" viewBox="0 0 130 130" fill="none">
                                <circle class="chart__circle-meter" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="rgba(226, 236, 255, 0.65);"></circle>
                                <circle class="chart__circle-value" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="var(--brand-primary)"
                                    style="stroke-dasharray: 408.407; stroke-dashoffset: 69.4292;"></circle>
                            </svg>
                        </div>

                    </div>

                    <div class="_15card_hover _15card_hover_two">
                        <p class="_15card_hover_title">Vue JS</p>
                    
                    </div>
                </div>
                <!-- CARD -->

                <!-- CARD -->
                <div class="_15card_all">
                    <div class="_15card">
                        <p class="_15card_icons">
                            <img class="_15card_icons_pic" src="{{ asset('/images/flutter.png') }}" alt="flutter" title="">
                        </p>

                        <div class="_15card_overlay">
                            <svg class="chart__svg" viewBox="0 0 130 130" fill="none">
                                <circle class="chart__circle-meter" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="rgba(226, 236, 255, 0.65);"></circle>
                                <circle class="chart__circle-value" cx="65" cy="65" r="63" stroke-width="4"
                                    stroke="var(--brand-primary)"
                                    style="stroke-dasharray: 408.407; stroke-dashoffset: 69.4292;"></circle>
                            </svg>
                        </div>

                      
                    </div>

                    <div class="_15card_hover _15card_hover_one">
                        <p class="_15card_hover_title">Flutter</p>
                      
                    </div>
                </div>
                <!-- CARD -->
            </div>
            <!-- USE CARD TWO -->
        </div>
    </div>
    <!--=== USE =====-->

    <!--=== TEAMS =====-->
    <div class="team" id="myourteam">
        <div class="team_bg"></div>
        <div class="container">
            <div class="_1headingTitle">
                <p class="_1headingTitle_text">{{ __('messages.Meet our' )}}<span class="Awesome"> {{ __('messages.Awesome' )}}</span> {{ __('messages.team members!' )}}</p>
                <span class="_1headingTitle_name">{{ __('messages.Our Teams' )}}</span>
            </div>

            <!-- MENU -->
            <div class="team_menu">
                <ul class="team_menu_ul">
                    <!-- CARD -->
                    <li>
                        <div class="_10card_content">
                            <p class="_10card_content_title">{{ __('messages.Front-End Developers' )}}</p>
                        </div>
                        <div class="_10card_path _10card_path_active"></div>

                        <p class="_10card_num">1</p>
                    </li>
                    <!-- CARD -->

                    <!-- CARD -->
                    <li>
                        <div class="_10card_content">
                            <p class="_10card_content_title">{{ __('messages.App Developers' )}}</p>
                        </div>
                        <div class="_10card_path"></div>

                        <p class="_10card_num">1</p>
                    </li>
                    <!-- CARD -->

                    <!-- CARD -->
                    <li>
                        <div class="_10card_content">
                            <p class="_10card_content_title">{{ __('messages.Web Developers' )}}</p>
                        </div>
                        <div class="_10card_path"></div>

                        <p class="_10card_num">1</p>
                    </li>
                    <!-- CARD -->

                    <!-- CARD -->
                    <li>
                        <div class="_10card_content">
                            <p class="_10card_content_title">{{ __('messages.UI & UX Designer' )}}</p>
                        </div>
                        <div class="_10card_path"></div>

                        <p class="_10card_num">1</p>
                    </li>
                    <!-- CARD -->

                    <!-- CARD -->
                    <li>
                        <div class="_10card_content">
                            <p class="_10card_content_title">{{ __('messages.Business Solution' )}}</p>
                        </div>
                        <div class="_10card_path"></div>

                        <p class="_10card_num">1</p>
                    </li>
                    <!-- CARD -->
                </ul>
            </div>
            <!-- MENU -->

           
                        
        </div>
    </div>

    
    <!--=== TEAMS =====-->

    <!--==== PROFILE CARD =======-->
  
    <!--==== PROFILE CARD ======-->
        
    <!--=== CONTACT  US =====-->
<div class="contact mt-2" id="mycontact">
 <div class="container-fluid">
    <div id="app">
    <div class="row">
              <div class="col-md-12">
                   
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.5959416620203!2d44.45501161462535!3d40.173549178318645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abdc3f00a44fb%3A0x5ffbf692a9ab7fe2!2zNSDVjtWh1bbVqdW11aHVtiDWg9W41bLVuNaBLCDUtdaA1ofVodW2LCDVgNWh1bXVodW91b_VodW2!5e0!3m2!1shy!2s!4v1595508038385!5m2!1shy!2s" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                   
                </div>    
    </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ __('messages.Contact us' )}}</h2>
                    </div>
                    <div class="card-body">
                    
                        <contact-form></contact-form>
                    </div>
                </div>
            </div>

            <!-- RIGHT FORM -->
            <div class="col-md-6 contact_form">
                    <div class="row">
                        <div class="col-md-7">
                            <p class="contact_title">{{ __('messages.MindSky Company' )}}</p>

                            <p class="contact_status _text">
                            {{ __('messages.MindSky Company txt' )}}
                            </p>

                            <div class="contact_details">
                                <p class="contact_details_info"><i class="fas fa-map-marker"></i>{{ __('messages.city Yerevan txt' )}}</p>


                                <p class="contact_details_info"><i class="fas fa-phone"></i> +374 99 77 53 27</p>

                                <p class="contact_details_info call"><i class="fas fa-envelope"></i>
                                    mindskyarmenia@gmail.com</p>
                            </div>

                            <!-- <div class="contact_search">
                                        <input class="contact_search_int" type="text" placeholder="what@gmail.com">
                                        <button class="contact_search_btn" type="button"><i class="fas fa-envelope"></i></button>
                                    </div> -->
                        </div>


                        <div class="col-md-5">
                            <p class="contact_title">{{ __('messages.Find Us' )}}</p>

                            <div class="contact_fb">
                                <div class="contact_fb_icons">
                                    <i class="fab fa-facebook-f"></i>
                                </div>

                                <div class="contact_fb_main">
                                    <a href="#" target="_blank">
                                        <p class="contact_fb_title">Facbook</p>
                                    </a>
                                </div>
                            </div>

                            <div class="contact_fb">
                                <div class="contact_fb_icons">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>

                                <div class="contact_fb_main">
                                    <a href="#" target="_blank">
                                        <p class="contact_fb_title">Linkedin</p>
                                    </a>
                                </div>
                            </div>

                            <div class="contact_fb">
                                <div class="contact_fb_icons">
                                    <i class="fab fa-twitter"></i>
                                </div>

                                <div class="contact_fb_main">
                                    <a href="#" target="_blank">
                                        <p class="contact_fb_title">Twitter</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- RIGHT FORM -->
        </div>
    </div>
   </div>
</div>
  <!--=== CONTACT  US  END=====-->


 


   
@endsection