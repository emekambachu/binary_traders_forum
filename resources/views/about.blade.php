@extends('layouts.main')

@section('title')
    About
@endsection

@section('contents')
    <section class="inner-banner has-dot-pattern">
        <div class="container">
            <h2>About us</h2>
            <span class="decor-line"></span>
            <ul class="list-inline bread-cumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>About Us</span></li>
            </ul><!-- /.list-inline -->
        </div><!-- /.container -->
    </section>

    <section class="sec-pad service-box-one">
        <div class="container">
            <div class="sec-title text-left">
                <h2>Role of Digital Metrics Investment</h2>
                <span class="decor-line">
                <span class="decor-line-inner"></span>
            </span>
            </div><!-- /.sec-title -->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-box-one">
                        <div class="icon-box">
                            <i class="fn-icon-safe"></i>
                        </div><!-- /.icon-box -->
                        <div class="title-box clearfix">
                            <div class="title pull-left">
                                <h3>Investing</h3>
                            </div><!-- /.title -->
                        </div><!-- /.title-box -->
                        <p>A wide selection of investment product which include forex, crypto and stock options, to help build diversified portfolio.</p>
                    </div><!-- /.service-box-one -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-box-one">
                        <div class="icon-box">
                            <i class="fn-icon-insurance-sign"></i>
                        </div><!-- /.icon-box -->
                        <div class="title-box clearfix">
                            <div class="title pull-left">
                                <h3>Trading</h3>
                            </div><!-- /.title -->
                        </div><!-- /.title-box -->
                        <p>Powerful trading tools, resources and support.</p>
                    </div><!-- /.service-box-one -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-box-one">
                        <div class="icon-box">
                            <i class="fn-icon-up-arrow"></i>
                        </div><!-- /.icon-box -->
                        <div class="title-box clearfix">
                            <div class="title pull-left">
                                <h3>Advisor Network</h3>
                            </div><!-- /.title -->
                        </div><!-- /.title-box -->
                        <p>Specialized guidance from independent local advisor for high-net-worth investors.</p>
                    </div><!-- /.service-box-one -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.sec-pad service-box-one -->

    <section class="sec-pad about-tab-box pb0">
        <div class="container">
            <div class="sec-title">
                <h2>About Digital Metrics Investment</h2>
                <span class="decor-line">
                <span class="decor-line-inner"></span>
            </span>
            </div><!-- /.sec-title -->
            <div class="row">
                <div class="col-md-3">
                    <div class="single-sidebar">
                        <div class="sidebar-links">
                            <ul role="tablist">
                                <li class="active" data-tab-name="overview">
                                    <a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Company Overview</a>
                                </li>
                                <li data-tab-name="process">
                                    <a href="#process" aria-controls="process" role="tab" data-toggle="tab">Process Management</a>
                                </li>
                                <li data-tab-name="relationshiop">
                                    <a href="#relationshiop" aria-controls="relationshiop" role="tab" data-toggle="tab">Customer Relationship</a>
                                </li>
                                <li data-tab-name="management">
                                    <a href="#management" aria-controls="management" role="tab" data-toggle="tab">Management</a>
                                </li>
                            </ul>
                        </div><!-- /.sidebar-links -->
                    </div><!-- /.single-sidebar -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="overview">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="about-tab-text-box">
                                        <div class="qouted-text">
                                            <p>
                                                <span class="qoute-top">“</span>
                                                We are a leading investment provider to financial market professionals
                                                <span class="qoute-bottom">”</span>
                                            </p>
                                        </div><!-- /.qouted-text -->
                                        <br />
                                        <br />
                                        <p>Digital Metrics Investment is a fund management company aimed at making maximum profits for our clients. We know the games brokers play. Being fund managers, we have created this framework of impeccable standards with complete transparency and the latest in trading technology.</p>
                                        <p>we are offering everyone interested to use a modern and profitable instrument of online investing. Every client of our company can invest our minimum amount in order to receive regular passive income and this is very easy to do.</p>
                                        <img src="{{ asset('img/texture/sign.png') }}" alt="Awesome Image"/>
                                    </div><!-- /.about-tab-text-box -->
                                </div><!-- /.col-md-7 -->
                                <div class="col-md-5">
                                    <div class="about-img-box">
                                        <img src="{{ asset('img/resources/man-1.png') }}" alt="Awesome Image" class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0s" data-wow-offset="0"/>
                                    </div><!-- /.about-img-box -->
                                </div><!-- /.col-md-5 -->
                            </div><!-- /.row -->
                        </div><!-- /.tab-pane fade in active -->
                        <div class="tab-pane fade" id="process">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="about-tab-text-box">
                                        <div class="qouted-text">
                                            <p>
                                                <span class="qoute-top">“</span>
                                                We provide full and specific solution for every client.
                                                <span class="qoute-bottom">”</span>
                                            </p>
                                        </div><!-- /.qouted-text -->
                                        <br />
                                        <br />
                                        <p>Digital Metrics Investment is one of the world's best company in a financial sectors We 100%  providing what our customers expects from us.</p>
                                        <p>The Great denouncings pleasures and praisings pains was born and  will give you a complete seds accounts off the systems and expound the actually  teachings the great seds ut explorers the masterd  teachings great explorer of human happiness.</p>
                                        <img src="{{ asset('img/texture/sign.png') }}" alt="Awesome Image"/>
                                    </div><!-- /.about-tab-text-box -->
                                </div><!-- /.col-md-7 -->
                                <div class="col-md-5">
                                    <div class="about-img-box">
                                        <img src="{{ asset('img/resources/man-1.png') }}" alt="Awesome Image"/>
                                    </div><!-- /.about-img-box -->
                                </div><!-- /.col-md-5 -->
                            </div><!-- /.row -->
                        </div><!-- /.tab-pane fade -->
                        <div class="tab-pane fade" id="relationshiop">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="about-tab-text-box">
                                        <div class="qouted-text">
                                            <p>
                                                <span class="qoute-top">“</span>
                                                We provide full and specific solution for every client.
                                                <span class="qoute-bottom">”</span>
                                            </p>
                                        </div><!-- /.qouted-text -->
                                        <br />
                                        <br />
                                        <p>Digital Metrics Investment is one of the world's best company in a financial sectors We 100%  providing what our customers expects from us.</p>
                                        <p>The Great denouncings pleasures and praisings pains was born and  will give you a complete seds accounts off the systems and expound the actually  teachings the great seds ut explorers the masterd  teachings great explorer of human happiness.</p>
                                        <img src="{{ asset('img/texture/sign.png') }}" alt="Awesome Image"/>
                                    </div><!-- /.about-tab-text-box -->
                                </div><!-- /.col-md-7 -->
                                <div class="col-md-5">
                                    <div class="about-img-box">
                                        <img src="{{ asset('img/resources/man-1.png') }}" alt="Awesome Image"/>
                                    </div><!-- /.about-img-box -->
                                </div><!-- /.col-md-5 -->
                            </div><!-- /.row -->
                        </div><!-- /.tab-pane fade -->
                        <div class="tab-pane fade" id="management">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="about-tab-text-box">
                                        <div class="qouted-text">
                                            <p>
                                                <span class="qoute-top">“</span>
                                                We provide full and specific solution for every client.
                                                <span class="qoute-bottom">”</span>
                                            </p>
                                        </div><!-- /.qouted-text -->
                                        <br />
                                        <br />
                                        <p>Digital Metrics Investment is one of the world's best company in a financial sectors We 100%  providing what our customers expects from us.</p>
                                        <p>The Great denouncings pleasures and praisings pains was born and  will give you a complete seds accounts off the systems and expound the actually  teachings the great seds ut explorers the masterd  teachings great explorer of human happiness.</p>
                                        <img src="{{ asset('img/texture/sign.png') }}" alt="Awesome Image"/>
                                    </div><!-- /.about-tab-text-box -->
                                </div><!-- /.col-md-7 -->
                                <div class="col-md-5">
                                    <div class="about-img-box">
                                        <img src="{{ asset('img/resources/man-1.png') }}" alt="Awesome Image"/>
                                    </div><!-- /.about-img-box -->
                                </div><!-- /.col-md-5 -->
                            </div><!-- /.row -->
                        </div><!-- /.tab-pane fade -->

                        <div class="tab-pane fade" id="development">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="about-tab-text-box">
                                        <div class="qouted-text">
                                            <p>
                                                <span class="qoute-top">“</span>
                                                We provide full and specific solution for every client.
                                                <span class="qoute-bottom">”</span>
                                            </p>
                                        </div><!-- /.qouted-text -->
                                        <br />
                                        <br />
                                        <p>Digital Metrics Investment is one of the world's best company in a financial sectors We 100%  providing what our customers expects from us.</p>
                                        <p>The Great denouncings pleasures and praisings pains was born and  will give you a complete seds accounts off the systems and expound the actually  teachings the great seds ut explorers the masterd  teachings great explorer of human happiness.</p>
                                        <img src="{{ asset('img/texture/sign.png') }}" alt="Awesome Image"/>
                                    </div><!-- /.about-tab-text-box -->
                                </div><!-- /.col-md-7 -->
                                <div class="col-md-5">
                                    <div class="about-img-box">
                                        <img src="{{ asset('img/resources/man-1.png') }}" alt="Awesome Image"/>
                                    </div><!-- /.about-img-box -->
                                </div><!-- /.col-md-5 -->
                            </div><!-- /.row -->
                        </div><!-- /.tab-pane fade -->
                        <div class="tab-pane fade" id="information">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="about-tab-text-box">
                                        <div class="qouted-text">
                                            <p>
                                                <span class="qoute-top">“</span>
                                                We provide full and specific solution for every client.
                                                <span class="qoute-bottom">”</span>
                                            </p>
                                        </div><!-- /.qouted-text -->
                                        <br />
                                        <br />
                                        <p>Digital Metrics Investment is one of the world's best company in a financial sectors We 100%  providing what our customers expects from us.</p>
                                        <p>The Great denouncings pleasures and praisings pains was born and  will give you a complete seds accounts off the systems and expound the actually  teachings the great seds ut explorers the masterd  teachings great explorer of human happiness.</p>
                                        <img src="{{ asset('img/texture/sign.png') }}" alt="Awesome Image"/>
                                    </div><!-- /.about-tab-text-box -->
                                </div><!-- /.col-md-7 -->
                                <div class="col-md-5">
                                    <div class="about-img-box">
                                        <img src="{{ asset('img/resources/man-1.png') }}" alt="Awesome Image"/>
                                    </div><!-- /.about-img-box -->
                                </div><!-- /.col-md-5 -->
                            </div><!-- /.row -->
                        </div><!-- /.tab-pane fade -->
                    </div><!-- /.tab-content -->
                </div><!-- /.col-md-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.sec-pad -->

    <section class="project-cta">
        <div class="container">
            <div class="left-text pull-left">
                <h3>Did you want to grow your investment plan? Sign up on our platform.</h3>
            </div><!-- /.left-text -->
            <div class="right-button pull-right">
                <a href="{{ route('register') }}" class="thm-btn">Sign up</a>
            </div><!-- /.right-button pull-right -->
        </div><!-- /.container -->
    </section><!-- /.project-cta -->

    <section class=" client-skill-sec has-dot-pattern">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="client-box-wrapper sec-pad pb0">
                        <div class="title">
                            <h2>Our Best Partners & Clients</h2>
                            <p>We provide best services to our customers.</p>
                        </div><!-- /.title -->
                        <div class="client-box">
                            <ul class="list-inline">
                                <li>
                                    <img src="{{ asset('img/client/client-1.png') }}" alt="Awesome Image"/>
                                </li><!-- must add it for inline block hack
                            --><li>
                                    <img src="{{ asset('img/client/client-2.png') }}" alt="Awesome Image"/>
                                </li><!-- must add it for inline block hack
                            --><li>
                                    <img src="{{ asset('img/client/client-3.png') }}" alt="Awesome Image"/>
                                </li><!-- must add it for inline block hack
                            --><li>
                                    <img src="{{ asset('img/client/client-4.png') }}" alt="Awesome Image"/>
                                </li><!-- must add it for inline block hack
                            --><li>
                                    <img src="{{ asset('img/client/client-5.png') }}" alt="Awesome Image"/>
                                </li><!-- must add it for inline block hack
                            --><li>
                                    <img src="{{ asset('img/client/client-6.png') }}" alt="Awesome Image"/>
                                </li>
                            </ul>
                        </div><!-- /.client-box -->
                    </div><!-- /.client-box-wrapper -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-12">
                    <div class="pgrs-bar-wrapper">
                        <div class="inner-box sec-pad">
                            <div class="title">
                                <h2>Market Overview</h2>
                            </div><!-- /.title -->

                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Market Data</span></a> by TradingView</div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                    {
                                        "colorTheme": "light",
                                        "dateRange": "12m",
                                        "showChart": true,
                                        "locale": "en",
                                        "largeChartUrl": "",
                                        "isTransparent": false,
                                        "width": "400",
                                        "height": "450",
                                        "plotLineColorGrowing": "rgba(33, 150, 243, 1)",
                                        "plotLineColorFalling": "rgba(33, 150, 243, 1)",
                                        "gridLineColor": "rgba(240, 243, 250, 1)",
                                        "scaleFontColor": "rgba(120, 123, 134, 1)",
                                        "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                        "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                        "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                                        "tabs": [
                                        {
                                            "title": "Indices",
                                            "symbols": [
                                                {
                                                    "s": "FOREXCOM:SPXUSD",
                                                    "d": "S&P 500"
                                                },
                                                {
                                                    "s": "FOREXCOM:NSXUSD",
                                                    "d": "Nasdaq 100"
                                                },
                                                {
                                                    "s": "FOREXCOM:DJI",
                                                    "d": "Dow 30"
                                                },
                                                {
                                                    "s": "INDEX:NKY",
                                                    "d": "Nikkei 225"
                                                },
                                                {
                                                    "s": "INDEX:DEU30",
                                                    "d": "DAX Index"
                                                },
                                                {
                                                    "s": "FOREXCOM:UKXGBP",
                                                    "d": "FTSE 100"
                                                }
                                            ],
                                            "originalTitle": "Indices"
                                        },
                                        {
                                            "title": "Commodities",
                                            "symbols": [
                                                {
                                                    "s": "CME_MINI:ES1!",
                                                    "d": "E-Mini S&P"
                                                },
                                                {
                                                    "s": "CME:6E1!",
                                                    "d": "Euro"
                                                },
                                                {
                                                    "s": "COMEX:GC1!",
                                                    "d": "Gold"
                                                },
                                                {
                                                    "s": "NYMEX:CL1!",
                                                    "d": "Crude Oil"
                                                },
                                                {
                                                    "s": "NYMEX:NG1!",
                                                    "d": "Natural Gas"
                                                },
                                                {
                                                    "s": "CBOT:ZC1!",
                                                    "d": "Corn"
                                                }
                                            ],
                                            "originalTitle": "Commodities"
                                        },
                                        {
                                            "title": "Bonds",
                                            "symbols": [
                                                {
                                                    "s": "CME:GE1!",
                                                    "d": "Eurodollar"
                                                },
                                                {
                                                    "s": "CBOT:ZB1!",
                                                    "d": "T-Bond"
                                                },
                                                {
                                                    "s": "CBOT:UB1!",
                                                    "d": "Ultra T-Bond"
                                                },
                                                {
                                                    "s": "EUREX:FGBL1!",
                                                    "d": "Euro Bund"
                                                },
                                                {
                                                    "s": "EUREX:FBTP1!",
                                                    "d": "Euro BTP"
                                                },
                                                {
                                                    "s": "EUREX:FGBM1!",
                                                    "d": "Euro BOBL"
                                                }
                                            ],
                                            "originalTitle": "Bonds"
                                        },
                                        {
                                            "title": "Forex",
                                            "symbols": [
                                                {
                                                    "s": "FX:EURUSD"
                                                },
                                                {
                                                    "s": "FX:GBPUSD"
                                                },
                                                {
                                                    "s": "FX:USDJPY"
                                                },
                                                {
                                                    "s": "FX:USDCHF"
                                                },
                                                {
                                                    "s": "FX:AUDUSD"
                                                },
                                                {
                                                    "s": "FX:USDCAD"
                                                }
                                            ],
                                            "originalTitle": "Forex"
                                        }
                                    ]
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->

                        </div><!-- /.inner-box -->
                    </div><!-- /.pgrs-bar -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.sec-pad client-skill-sec -->
@endsection
