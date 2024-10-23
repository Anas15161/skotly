@extends('frontend.layouts.master')
@section('meta_title', __('Cours de soutien Collège') . ' || ' . $setting->app_name)
@section('contents')
<style>
    .blue-shadow {
  box-shadow: 0 4px 8px rgba(0, 0, 255, 0.5); /* Horizontal, Vertical, Blur, Blue shadow */
}

</style>
<x-frontend.breadcrumb :title="__('Cours de soutien Collège')" :links="[['url' => route('home'), 'text' => __('Home')], ['url' => '', 'text' => __('Cours de soutien Collège')]]" />
    <section class="contact-area section-py-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="faq__img-wrap tg-svg">
                        <div class="faq">

                        </div>
                        <div>
                            <img src="{{ asset('frontend/img/college.jpg') }}" class="img-fluid blue-shadow" alt="Image with blue shadow">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">

                            <h2 class="title fs-3">
                                Réussissez vos années de collège grâce à nos cours de soutien en ligne<span style="color:blue">(6ème, 5ème, 4ème & Brevet)                                </span>
                            </h2>
                        </div>

                        <div class="">
                            <div class="" id="">
                                <p>Les classes de collège constituent une étape cruciale du système éducatif. La classe de 6ème marque la fin des enseignements fondamentaux
                                et le début d’une phase où l’élève sera amené à développer ses compétences dans les différentes matières. La classe de 3ème étant une année
                                     d’orientation et de préparation au brevet,
                                    nos enseignants pédagogues sont à votre écoute pour vous conseiller et vous fournir toutes les informations utiles.
                                </p>
                                <a href="{{ route('register') }}" class="btn arrow-btn">{{ __('Je souhaite me renseigner ') }} <img
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
                                Nos conseils pour réussir vos années de<span style="color: blue">collège </span>
                            </h2>
                        </div>

                        <div class="">
                            <div class="" id="">
                                <p> À son arrivée au collège, l’élève découvre un nouvel environnement: nouvelles matières, nouveaux enseignants, programme plus chargé, établissement plus grand, etc.
                                    MJTECH, plateforme de cours de soutien collège en ligne et à domicile, accompagne les élèves en leur proposant un enseignement personnalisé en ligne,
                                    des cours particuliers à domicile, de l’aide aux examens, etc. Nos professeurs dispensent des cours dans toutes les matières : mathématiques, français, arabe, histoire, géographie, anglais, SVT, physique, etc.
                                    Nos objectifs ? Vous aider à obtenir un meilleur résultat, mais aussi à :
                                <ul>
                                    <li>Acquérir une méthodologie de travail,</li>
                                    <li>Organiser le temps de révision,</li>
                                    <li>Fournir un travail régulier, en toute autonomie</li>
                                </ul>
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
                            <img src="{{ asset('frontend/img/college2.jpg') }}" class="img-fluid blue-shadow" alt="Image with blue shadow">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-area section-py-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="section__title">

                    <h2 class="title fs-1 text-center">
                        Comment
                        <span style="color:blue"> ça marche ?​​</span>
                    </h2>
                </div>
                <div class="col-lg-6">
                    <div class="faq__img-wrap tg-svg">
                        <div class="faq">

                        </div>
                        <div>
                            <img src="{{ asset('frontend/img/fact_img.png') }}" class="img-fluid blue-shadow center-image" alt="Image with blue shadow">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">


                        <div class="">
                            <div class="" id="">
                                <ol>
                                    <h4>Nous recevons votre demande</h4>
                                    <h4>Vous choisissez un pack de cours</h4>
                                    <h4>Vous débutez les cours !</h4>
                                    <h4>Nous vous suivons pour surveiller votre progression</h4>
                                </ol>
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
                    <div class="faq__img-wrap tg-svg">

                        <div>
                            <img src="{{ asset('frontend/img/le-coll-ge---1805-educnat-schwebel-011-5969.png') }}" class="img-fluid blue-shadow center-image" alt="Image with blue shadow">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">

                            <h2 class="title fs-2">
                                Des professeurs hautement qualifiés accompagnent <span style="color:blue"> les élèves du collège</span>
                            </h2>
                        </div>
                        <div class="">
                            <div class="" id="">
                                <ol>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div></hr>
    </section>

    <section class="contact-area section-py-120">
        <div class="container">
            <div class="row">
                <div class="section__title">
                    <h2 class="title fs-1 text-center mb-3">
                        Choisissez
                        <span style="color:blue"> la matière ​</span> qui vous convient
                    </h2>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <!-- First card -->
                <div class="col-md-3 mb-2">
                    <div class="card shadow h-100" style="max-width: 20rem;">
                        <img src="{{ asset('frontend/img/math.png') }}" class="card-img-top mx-auto d-block" alt="Mathématiques Image" style="height: 150px; width: 150px;">
                        <div class="card-body d-flex flex-column p-3">
                            <h6 class="card-title text-center">Mathématiques</h6>
                            <p class="card-text" style="font-size: 0.875rem;">Accompagnement personnalisé avec nos cours de maths pour primaire...</p>
                            <a href="https://www.google.com" class="btn btn-primary btn-sm mt-auto">Découvrir plus</a>
                        </div>
                    </div>
                </div>

                <!-- Second card -->
                <div class="col-md-3 mb-2 ">
                    <div class="card shadow h-100" style="max-width: 20rem;">
                        <img src="{{ asset('frontend/img/Français.png') }}" class="card-img-top mx-auto d-block" alt="Français Image" style="height: 150px; width: 150px;">
                        <div class="card-body d-flex flex-column p-3">
                            <h6 class="card-title text-center">Français</h6>
                            <p class="card-text" style="font-size: 0.875rem;">Difficultés en orthographe, expression ou conjugaison ?</p>
                            <a href="https://www.google.com" class="btn btn-primary btn-sm mt-auto">Découvrir plus</a>
                        </div>
                    </div>
                </div>

                <!-- Third card -->
                <div class="col-md-4 mb-2">
                    <div class="card shadow h-100" style="max-width: 20rem;">
                        <img src="{{ asset('frontend/img/Anglais.png') }}" class="card-img-top mx-auto d-block" alt="Anglais Image" style="height: 150px; width: 150px;">
                        <div class="card-body d-flex flex-column p-3">
                            <h6 class="card-title text-center">Anglais</h6>
                            <p class="card-text" style="font-size: 0.875rem;">une base solide dès le CP pour un excellent niveau...</p>
                            <a href="https://www.google.com" class="btn btn-primary btn-sm mt-auto">Découvrir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
