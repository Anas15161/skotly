@extends('frontend.layouts.master')
@section('meta_title', __('Cours de soutien') . ' || ' . $setting->app_name)
@section('contents')
<x-frontend.breadcrumb :title="__('Cours de soutien')" :links="[['url' => route('home'), 'text' => __('Home')], ['url' => '', 'text' => __('Cours de soutien')]]" />
    <section class="contact-area section-py-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="faq__img-wrap tg-svg">
                        <div class="faq">

                        </div>
                        <div>
                            <img src="{{ asset('frontend/img/index.jpg') }}" class="img-fluid blue-shadow" alt="Image with blue shadow">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">

                            <h2 class="title fs-3">
                                Cours de soutien au Maroc pour les élèves du<span style="color:blue">primaire</span> et du <span style="color:blue">secondaire</span>
                            </h2>
                        </div>

                        <div class="">
                            <div class="" id="">
                                <p>Le soutien scolaire est extrêmement bénéfique pour les élèves de tous les âges, dans un large éventail de matières. Qu’il s’agisse de la lecture, de l’écriture, du calcul, des mathématiques, de la préparation aux examens ou de la rédaction de dissertations, les cours de soutien au Maroc aident les élèves à développer les compétences dont ils ont besoin pour réussir à l’école, au collège, au lycée, à l’université, et même au-delà.
                                </p>
                                <a href="{{ route('register') }}" class="btn arrow-btn">{{ __('Je reserve un premier cours ') }} <img
                                    src="{{ asset('frontend/img/icons/right_arrow.svg') }}" alt="img"
                                    class="injectable"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-area section-py-120 instructor__area-four">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">

                            <h2 class="title fs-2">
                                Comment le soutien scolaire aide-t-il les élèves du <span style="color: blue">lycée </span> ?
                            </h2>
                        </div>

                        <div class="">
                            <div class="" id="">
                                <p> Le lycée pose un vrai défi, particulièrement avec l’université en ligne de mire. Pour les lycéens, les cours de soutien scolaire sont essentiels, influençant l’orientation future et l’accès à l’enseignement supérieur. Ils permettent de booster les notes, développer l’esprit critique et préparer aux examens.
                                    Choisir un professeur particulier, que ce soit à domicile ou en ligne, présente des avantages significatifs, favorisant la réussite et l’épanouissement des élèves.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq__img-wrap tg-svg">
                        <div class="faq">

                        </div>
                        <div>
                            <img src="{{ asset('frontend/img/index2.jpeg') }}" class="img-fluid blue-shadow" alt="Image with blue shadow">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-area section-py-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">


                    <div class="about__content text-center">
                        <div class="section__title">

                            <h2 class="title fs-4">
                                Besoin de<span style="color:blue">cours de soutien</span> scolaire?
                            </h2>
                        </div>

                        <div class="">
                            <div class="" id="">
                                <a href="{{ route('register') }}" class="btn arrow-btn">{{ __('Je reserve un premier cours ') }} <img
                                    src="{{ asset('frontend/img/icons/right_arrow.svg') }}" alt="img"
                                    class="injectable"></a>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>


    @endsection
