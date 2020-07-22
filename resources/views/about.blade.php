@extends('layouts.main')

@section('title')
    About
@endsection

@section('contents')
    <section class="page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="text-uppercase text-white mrb-10">About Us</h2>
                    <ul class="mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item" style="color: #3d9bef;">About us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section pdt-110 pdb-md-40" data-background="{{ asset('images/bg/abs-bg7.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-12 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <h2 class="title-under-line mrb-70">About Binary Traders Forum</h2>
                    <p class="mrb-50">Binary Traders Forum is a capital investment company that deals on bitcoin mining and trading,forex and stocks,synthetic indices and all other crypto currencies and digital market. The need for a company like these arose due to investors losing their capital to brokers in the digital market or little or no growth at all to their crypto currency due to lack of experience and adequate machinery to analyze and forecast the market.<br><br>
                        How do we come in? We have a great team of professionals that help our clients invest their funds in the digital market and make profits for them by engaging our mining machinery and over 35 years experience using fundamental and technical analysis to make profits for our clients after investing with us and we get a little percentage also. You can choose from our great investment plans and get 10x profit on your investment without any liability on our client.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    <section class="about-section pdt-110 pdb-110 pdb-md-40" data-background="{{ asset('images/bg/abs-bg7.png') }}">
        <div class="container">
            <div class="row mrb-80 mrb-lg-70">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="features-item">
                        <i class="webexflaticon flaticon-analysis-2"></i>
                        <h4 class="feature-title"><a href="">Investment & Planning</a></h4>
                        <p class="mrb-0">A wide selection of investment product which include forex, crypto and stock options, to help build diversified portfolio.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="features-item">
                        <i class="webexflaticon flaticon-presentation"></i>
                        <h4 class="feature-title"><a href="">Trading</a></h4>
                        <p class="mrb-0">Powerful trading tools, resources and support.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="features-item">
                        <i class="webexflaticon flaticon-profits"></i>
                        <h4 class="feature-title"><a href="">Advisor Network</a></h4>
                        <p class="mrb-0">Specialized guidance from independent local advisor for high-net-worth investors.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="about-image">
                        <img class="image-link mrb-lg-50 mrt-5" src="{{ asset('images/about/1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-12 col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <h5 class="mrb-15 text-primary-color">Who We Are?</h5>
                    <h2 class="title-under-line mrb-70">We have 25+ Years Business Experiences</h2>
                    <p class="mrb-50">
                        Binary Traders Forum is a fund management company aimed at making maximum profits for our clients. We know the games brokers play. Being fund managers, we have created this framework of impeccable standards with complete transparency and the latest in trading technology.
                    </p>
                    <p class="mrb-50">Our market depth and knowledge are attributed to our acquired experience on trading floors of many exchanges. With over $5.3 Trillion traded daily in the foreign exchange market and over $200 billion traded in the cryptospace, we are dedicated to giving our clients their own share of the profits regularly.</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                            <div class="about-icon-box mrb-md-70 mrb-md-40">
                                <div class="icon">
                                    <span class="webexflaticon flaticon-wallet"></span>
                                </div>
                                <h5 class="title">Low Cost</h5>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                            <div class="about-icon-box mrb-md-70 mrb-md-40">
                                <div class="icon">
                                    <span class="webexflaticon flaticon-diamond"></span>
                                </div>
                                <h5 class="title">Quality Work</h5>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                            <div class="about-icon-box mrb-md-70">
                                <div class="icon">
                                    <span class="webexflaticon flaticon-rocket"></span>
                                </div>
                                <h5 class="title">Fast Delivery</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- divider Section Start -->
    <section class="bg-silver-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-6 bg-cover popup-video-block video-popup text-center pt-3">

                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/stocks-usa/market-movers-gainers/" rel="noopener" target="_blank"><span class="blue-text">Stock Market</span></a> by TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                            {
                                "colorTheme": "light",
                                "dateRange": "12m",
                                "exchange": "US",
                                "showChart": true,
                                "locale": "en",
                                "largeChartUrl": "",
                                "isTransparent": false,
                                "width": "400",
                                "height": "700",
                                "plotLineColorGrowing": "rgba(33, 150, 243, 1)",
                                "plotLineColorFalling": "rgba(33, 150, 243, 1)",
                                "gridLineColor": "rgba(240, 243, 250, 1)",
                                "scaleFontColor": "rgba(120, 123, 134, 1)",
                                "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                "symbolActiveColor": "rgba(33, 150, 243, 0.12)"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->

                </div>
                <div class="col-lg-12 col-xl-6 p-0">
                    <div class="divider-gap">
                        <h2 class="mrb-25">Why Choose Binary Traders Forum for Consulting Service.</h2>
                        <div class="icon-box-two mrb-40">
                            <div class="icon bg-primary-color f-left">
                                <span class="webexflaticon flaticon-target-1"></span>
                            </div>
                            <div class="icon-details ">
                                <h4 class="icon-box-title mrb-10">We are Committed to Quality</h4>
                                <p>Get professional help building a personalized financial plan</p>
                            </div>
                        </div>
                        <div class="icon-box-two mrb-40">
                            <div class="icon bg-primary-color f-left">
                                <span class="webexflaticon flaticon-plan"></span>
                            </div>
                            <div class="icon-details ">
                                <h4 class="icon-box-title mrb-10">We Care About Your Business</h4>
                                <p>Our target is to provide you with the best profits trading forex </p>
                            </div>
                        </div>
                        <div class="icon-box-two">
                            <div class="icon bg-primary-color f-left">
                                <span class="webexflaticon flaticon-guarantee"></span>
                            </div>
                            <div class="icon-details ">
                                <h4 class="icon-box-title mrb-10">100% Satisfaction Guarantee</h4>
                                <p>Platform that bring trading power to your fingertips</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider Section End -->

    <section class="pdt-105 pdb-85 pdb-lg-75 pdb-md-83" data-background="{{ asset('images/bg/abs-bg6.png') }}">
        <div class="section-title mrb-30 mrb-md-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h5 class="text-primary-color text-underline mrb-15">Cryptocurrencies</h5>
                        <h2 class="mrb-30">Updates and Converters</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-content">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-lg-4 col-xl-4 mb-3">

                        <div style="height:433px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 100%;"><div style="height:413px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>

                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-4 mb-3">

                        <div style="width: 350px; height:220px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px;"><div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=single_v2&theme=light&coin_id=859&pref_coin_id=1505" width="350" height="196px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>

                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-4">

                        <div style="width: 350px; height:335px; background-color: #FAFAFA; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:335px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;margin: 0;width: 350px;padding:1px;padding: 0px; margin: 0px;"><div style="height:315px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=converter&theme=light" width="350" height="310px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Funfact Section Start -->
    <section class="pdt-110 pdb-40" data-background="{{ asset('images/bg/5.jpg') }}" data-overlay-dark="4">
        <div class="section-content section-white-typo text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                        <div class="funfact mrb-md-70 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon flaticon-briefcase-1"></span>
                            </div>
                            <h2 class="counter">1450</h2>
                            <h5 class="title">Projects Succeed</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                        <div class="funfact mrb-md-70 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon flaticon-like-3"></span>
                            </div>
                            <h2 class="counter">1864</h2>
                            <h5 class="title">Peoples Likes</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                        <div class="funfact mrb-md-70 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon flaticon-trophy-1"></span>
                            </div>
                            <h2 class="counter">1280</h2>
                            <h5 class="title">Awards Achieved</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="800ms">
                        <div class="funfact mrb-md-70 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon flaticon-employee-2"></span>
                            </div>
                            <h2 class="counter">678</h2>
                            <h5 class="title">Team Members</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Funfact Section End -->

@endsection
