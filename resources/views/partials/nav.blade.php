   <!--=== BANNER =====-->
   <section class="home-one" id="mywhatweuse">
        <!-- MENU -->
        <div id="menu" class="_13menu">
            <div class="_13menu_logo">
                <img class="_13menu_logo_img" src="{{ asset('/images/mindsky2.png') }}" alt="mindsky_logo" title="">
                <img class="_13menu_logo_img2" src="{{ asset('/images/mindsky.png') }}" alt="mindsky_logo" title="">
            </div>

            <div class="_13menu_logo_list">
                <ul class="_13menu_logo_ul">
                    <li id="myservicebutton">{{ __('messages.Services') }}</li>
                    <li class="" id="myportfoliobutton" >{{ __('messages.Portfolio')}}</li>
                    <li id="myourtechbutton">{{ __('messages.Our Technologies') }}</li>
                    <!-- <li id="myourteambutton">{{ __('messages.Our Team') }}</li> -->
                    <li id="mycontactbutton">{{ __('messages.Contacts') }}</li>
                    <li><a href="{{ url('locale/am') }}" ><img src="{{ asset('/images/am.png') }}"></a></li>
                    <li><a href="{{ url('locale/ru') }}" ><img src="{{ asset('/images/ru.png') }}"></a></li>
                    <li><a href="{{ url('locale/en') }}" ><img src="{{ asset('/images/us.png') }}"></a></li>
                </ul>
            </div>
        </div>
        <!-- MENU -->

        <!-- MOBILE MENU -->
        <div class="_mobile_menu home_mobile_menu">
            <div class="_2banner_menu_main">
                <div class="menu_logo_pic">
                    <img class="_13menu_logo_img" src="{{ asset('/images/mindsky.png') }}" alt="appifylab_logo" title="">
                </div>

                <div class="_2banner_menu_icons">
                    <ul class="_2banner_menu_icons_ul">
                        <li id="mobileMenuOpan"><i class="fas fa-list"></i></li>
                    </ul>
                </div>

                <div id="mobile_menu" class="mobile_menu">
                    <p id="mobileMenuClose" class="mobile_menu_close"><i class="fas fa-times"></i></p>
                    <ul class="_2banner_menu_list_ul">
                        <li id="mservice">{{ __('messages.Services') }}</li>
                        <li id="mportfoliobutton">{{ __('messages.Portfolio')}}</li>
                        <li id="mourtechbutton">{{ __('messages.Our Technologies') }}</li>
                        <!-- <li id="mourteambutton">{{ __('messages.Our Team') }}</li> -->
                        <li id="mcontactbutton">{{ __('messages.Contacts') }}</li>
                        <li><a href="{{ url('locale/am') }}" ><img class="langicons" src="{{ asset('/images/am.png') }}"></a></li>
                        <li><a href="{{ url('locale/ru') }}" ><img class="langicons" src="{{ asset('/images/ru.png') }}"></a></li>
                        <li><a href="{{ url('locale/en') }}" ><img class="langicons" src="{{ asset('/images/us.png') }}"></a></li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- MOBILE MENU -->

        <div class="home-one-container">
            <div class="home-one-left">
                <div class="home-one-left-main">
                    <div class="home-one-left-all">
                        <div class="hover_active">
                            <h3 class="benner_title">{{ __('messages.Products') }}</h3>
                            <span class="round-icon">+</span>
                        </div>

                        <div class="initial home-one-left-all-one active" style="display: block;">
                            <h4 class="benner_title">{{ __('messages.Products') }}</h4>
                            <p class="benner_text">{{ __('messages.Products txt1') }}</p>
                            <span class="round-icon">+</span>
                        </div>

                        <div class="expanded expanded" style="display:none;">
                            <h5 class="benner_title">{{ __('messages.Products') }}</h5>

                            <p class="benner_hover_subtitle">{{ __('messages.Products txt2' ) }}</p>

                            <div class="benner_hover_main">
                                <div class="row">
                                

                                    <!-- ITEMS -->
                                    <div class="col-12">
                                        <p class="benner_hover_icons">
                                            <i class="fas fa-cart-plus"></i>
                                        </p>
                                        <p class="benner_hover_text">
                                           {{ __('messages.Web&Mobile Applications' ) }}
                                        </p>
                                    </div>
                                    <!-- ITEMS -->
                                </div>
                            </div>

                            <div class="benner_hover_button">
                                <button class="benner_hover_btn" type="button">{{ __('messages.question') }}</button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <div class="home-one-right">
                <div class="home-one-right-main">
                    <div class="home-one-left-all">
                        <div class="hover_active">
                            <h6 class="benner_title">{{ __('messages.Services' )}}</h6>
                            <span class="round-icon">+</span>
                        </div>

                        <div class="initial-right home-one-left-all-one active" style="display: block;">
                            <h2 class="benner_title">{{ __('messages.Services' )}}</h2>
                            <p class="benner_text"> {{ __('messages.Services txt1' )}}</p>
                            <span class="round-icon">+</span>
                        </div>

                        <div class="expanded-right" style="display:none;">
                            <p class="benner_title">{{ __('messages.Services' )}}</p>

                            <p class="benner_hover_subtitle">{{ __('messages.Services txt2' )}}</p>

                            <div class="benner_hover_main">
                                <div class="row">
                                    <!-- ITEMS -->
                                    <div class="col-4 col-md-4">
                                        <p class="benner_hover_icons">
                                            <i class="fas fa-mobile-alt"></i>
                                        </p>
                                        <p class="benner_hover_text">
                                            {{ __('messages.Apps Development' )}}
                                        </p>
                                    </div>
                                    <!-- ITEMS -->

                                    <!-- ITEMS -->
                                    <div class="col-4 col-md-4">
                                        <p class="benner_hover_icons">
                                            <i class="fas fa-laptop-code"></i>
                                        </p>
                                        <p class="benner_hover_text">
                                            {{ __('messages.Web Development' )}}
                                        </p>
                                    </div>
                                    <!-- ITEMS -->

                                    <!-- ITEMS -->
                                    <div class="col-4 col-md-4">
                                        <p class="benner_hover_icons">
                                            <i class="fas fa-hands-helping"></i>
                                        </p>
                                        <p class="benner_hover_text">
                                              {{ __('messages.Business Solution' )}}
                                        </p>
                                    </div>
                                    <!-- ITEMS -->
                                </div>
                            </div>

                            <div class="benner_hover_button">
                                <button class="benner_hover_btn" type="button">{{ __('messages.question' ) }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- WAVE -->
        <div class="wave">
            <svg viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
                <path d="M 0 65 C 194 135 235 0 500 86 L 500 0 L 0 0 Z" style="stroke: none; fill:white;"></path>
            </svg>
        </div>
        <!-- WAVE -->
    </section>

    
    <!--=== BANNER =====-->