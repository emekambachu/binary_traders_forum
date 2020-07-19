@extends('layouts.main')

@section('title')
    Investment Packages
@endsection

@section('contents')
    <section class="inner-banner has-dot-pattern">
        <div class="container">
            <h2>Investment Packages</h2>
            <span class="decor-line"></span>
            <ul class="list-inline bread-cumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>Investment Packages</span></li>
            </ul><!-- /.list-inline -->
        </div><!-- /.container -->
    </section>

    <section class="sec-pad service-box-one">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Our Investment Packages</h2>
                <span class="decor-line">
                <span class="decor-line-inner"></span>
            </span>
            </div><!-- /.sec-title -->
            <div class="row">

                @foreach($packages as $package)
                <div class="col-md-4 col-sm-6">
                    <div class="single-service-box-one">
                        <div class="icon-box">
                            <i class="fn-icon-money"></i>
                        </div><!-- /.icon-box -->
                        <div class="title-box clearfix">
                            <div class="title pull-left">
                                <h3>{{ $package->name }}</h3>
                            </div><!-- /.title -->
                        </div><!-- /.title-box -->
                        <p><i class="fa fa-check"></i> ${{ number_format($package->min) }} - ${{ number_format($package->max) }}</p>
                        <p><i class="fa fa-check"></i> {{ $package->referral_bonus }}% Referral Bonus</p>
                        <p><i class="fa fa-check"></i> {{ $package->monthly_profit }}% Monthly Profit</p>
                        <p><i class="fa fa-check"></i> {{ $package->days_turnover }} Days Turnover</p>
                        <p><i class="fa fa-check"></i> {{ $package->expert_advice }}</p>
                        <p><i class="fa fa-check"></i> {{ $package->deposit_bonus }}% Deposit Bonus</p>
                        <a href="{{ route('register') }}">
                            <button class="btn btn-primary">Sign up</button>
                        </a>
                    </div><!-- /.service-box-one -->
                </div><!-- /.col-md-4 -->
                @endforeach

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.sec-pad service-box-one -->

    <section class="about-cta-box has-dot-pattern text-center sec-pad">
        <div class="container">
            <h3 style="color: #f1f1f1; font-weight: bold;">No Compromise Guarantee</h3>
            <p>Digital Metrics Investment proffers their clients with some very well managed investment portfolios that offer a higher return on their investment as compared to a self-managed trading account.<br>
                This is contrary to the much accepted past belief that all forex investment companies are a front for money laundering scheme that was established to rip off the client’s hard-earned money. We have some very skilled and experienced traders who handle and manage investor accounts for different types of clients. </p>
        </div><!-- /.container -->
    </section>

    <section class="project-cta">
        <div class="container">
            <div class="left-text pull-left">
                <h3>Our Primary Goal is to provide our customers with an exclusive platform for their investment</h3>
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
                            <h3 style="color: #f1f1f1; font-weight: bolder;">We Support Your Financial Interest</h3>
                            <p style="font-style: normal;">Creating a safe and secure trading environment is in the best interest of all involved and stringent financial protocols ensure that you receive the security you need to invest with confidence.<br><br>

                                In finance, an investment strategy is a set of rules, behaviors or procedures, designed to guide an investor’s selection of an investment portfolio. Individuals have different profit objectives, and their individual skills make different tactics and strategies appropriate. Some choices involve a tradeoff between risk and return. Most investors fall somewhere in between, accepting some risk</p>
                        </div><!-- /.title -->
                    </div><!-- /.client-box-wrapper -->
                </div><!-- /.col-md-6 -->

                <div class="col-md-6 col-sm-12">
                    <div class="pgrs-bar-wrapper">
                        <div class="inner-box sec-pad">
                            <div class="title">
                                <h3 style="color: #f1f1f1; font-weight: bolder;">We Support Your Financial Interest</h3>
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
                                        "height": "400",
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
