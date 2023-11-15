@extends('layouts.apk')
@section('content')
    <style>
        .auto-type {
            /* color: #479FD0; */
            color: red;
        }
        #bg_apk li{
            text-align: center;
            display: block;
            padding: 10px;
        }
        .fill{
            /* position: absolute; */
            margin-left: -15px;
            width: 100%;
            height: 249px;
            background: red;
            /* background: white; */
            /* opacity: .5; */
        }
    </style>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12" id="bg_apk">
            <section class="panel" style="">
                <li><img width="100px" style="border-radius: 100%" height="100px" src="{{ asset('site') }}/img/logo2.jpg" alt=""></li>
                <li><h3 class="text-semibold mt-none text-center" style="color: #fff">GenderGuard <span class="auto-type">DVCAM VBG</span>
                </h3></li>
                <li><p class="text-center" style="color: #fff">DEFENDRE c'est ma VOCATION</p></li>
                {{-- <header class="panel-heading" id="mmm">
                    <div class="panel-heading-icon mt-sm">
                        <img width="100px" height="100px" src="{{ asset('site') }}/img/logo2.jpg" alt="">
                    </div>
                </header>
                <div class="panel-body">
                    <h3 class="text-semibold mt-none text-center">GenderGuard <span class="auto-type">DVCAM VBG</span>
                    </h3>
                    <p class="text-center">DEFENDRE C'EST MA VOCATION</p>
                </div> --}}
            </section>
            {{-- <section class="fill"></section> --}}
        </div>
    </div>

    <h3 class="mt-lg">Statistics Utilisateurs</h3>
    <p class="mb-lg">Les statistiques de la plateforme DVCAM</p>


    <div class="row">
        @foreach ($regions as $region)
            <div class="col-md-6 col-lg-6 col-xl-4">
                <section class="panel panel-featured-left panel-featured-primary">
                    <div class="panel-body">
                        <div class="widget-summary widget-summary-md">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <strong
                                            class="amount">{{ $count = $users->where('region_id', $region->id)->count() }}</strong>
                                    {{-- <i class="fa fa-user"></i> --}}
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">{{ $region->name }}</h4>
                                    <div class="info">
                                        {{-- <strong
                                            class="amount">{{ $count = $users->where('region_id', $region->id)->count() }}</strong> --}}
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase">(view all)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script>
        var typed = new Typed(".auto-type", {
            strings: ["...", "DVCAM VBG", "CAMEROUN", "ALL TOGETHER"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true
        })
    </script>
@endsection
