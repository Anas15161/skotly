@extends('frontend.layouts.master')
@section('meta_title', __('Cours de soutien Lycée') . ' || ' . $setting->app_name)
@section('contents')
<style>
    .blue-shadow {
box-shadow: 0 4px 8px rgba(0, 0, 255, 0.5); /* Horizontal, Vertical, Blur, Blue shadow */
}
.center-image {
display: block;
margin-left: auto;
margin-right: auto;
}
.modal-header {
    justify-content: center; /* Center the content */
}
/* RESET CSS */
* {margin: 0; padding: 0;}


h2 {margin-top: 30px;}
</style>
<style>
/* Ensure the modal content can scroll if needed */
.modal-body {
overflow-y: auto;
max-height: 70vh; /* Adjust max height as necessary */
}

/* Style for the Select2 dropdown */
.select2-container {
width: 100% !important; /* Ensure Select2 takes full width */
}

/* Adjust dropdown styles */
.select2-results {
z-index: 1051; /* Make sure dropdown appears above other content */
}

/* Optionally adjust dropdown item styles */
.select2-results__option {
padding: 10px; /* Add padding for dropdown items */
}
</style>
<x-frontend.breadcrumb :title="__('Cours de soutien Lycée')" :links="[['url' => route('home'), 'text' => __('Home')], ['url' => '', 'text' => __('Cours de soutien Lycée')]]" />
    <section class="contact-area section-py-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="faq__img-wrap tg-svg">
                        <div class="faq">

                        </div>
                        <div>
                            <img src="{{ asset('frontend/img/lycee.jpg') }}" class="img-fluid blue-shadow" alt="Image with blue shadow">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">

                            <h2 class="title fs-3">
                            Réussir les classes du lycée avec MJTECH <span style="color:blue">(Seconde, Première & Terminale ou Tronc Commun, 1 BAC & 2 BAC )</span>
                            </h2>
                        </div>

                        <div class="">
                            <div class="" id="">
                                <p>Les années du lycée peuvent se décomposer en deux parties : La seconde générale, où l’élève renforce et complète les connaissances acquises au collège, et les années de première et terminale, où l’élève fait face aux épreuves de validation de ses études de baccalauréat ( Les épreuves anticipées de Français, les épreuves de spécialité et le Grand Oral…).
                                    L’élève est aussi amené à construire son projet d’orientation professionnelle durant les années du lycée.
                                </p>
                                <a href="javascript:void(0)" class="btn arrow-btn" data-bs-toggle="modal" data-bs-target="#registerModal">
                                    {{ __('Je trouve mon professeur ') }}
                                    <img src="{{ asset('frontend/img/icons/right_arrow.svg') }}" alt="img" class="injectable">
                                </a>
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
                                Astuces pour bien réussir <span style="color: blue">le lycée </span> !
                            </h2>
                        </div>

                        <div class="">
                            <div class="" id="">
                                <p>L’élève lycéen doit pouvoir gérer son temps ainsi que maintenir un bon rythme de travail pendant toute l’année scolaire, parmi les points importants sur lesquels l’élève lycéen doit capitaliser :
                                <ul>
                                    <li>Pendant les séances de cours, éveillez votre concentration et essayez de poser un maximum de questions à vos professeurs en classe.</li>
                                    <li>OApprendre à synthétiser et à résumer les cours et les concepts y abordés</li>
                                    <li>Essayez de gérer votre temps de travail de façon optimale.</li>
                                </ul>
                                Et plus d’astuces, que nos tuteurs partageront avec les élèves tout au long de leur accompagnement chez MJTECH.
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
                            <img src="{{ asset('frontend/img/lycee2.jpg') }}" class="img-fluid blue-shadow" alt="Image with blue shadow">

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
                            <img src="{{ asset('frontend/img/ival-banniere-jpg-17444.png') }}" class="img-fluid blue-shadow center-image" alt="Image with blue shadow">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">

                            <h2 class="title fs-2">
                                Comment nos professeurs particuliers accompagnent <span style="color:blue"> les élèves lycéens </span>?
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
                        <img src="{{ asset('frontend/img/philosophie.png') }}" class="card-img-top mx-auto d-block" alt="philosophie Image" style="height: 150px; width: 150px;">
                        <div class="card-body d-flex flex-column p-3">
                            <h6 class="card-title text-center">Philosophie</h6>
                            <p class="card-text" style="font-size: 0.875rem;">Cours de philosophie adaptés pour développer la réflexion critique et...</p>
                            <a href="https://www.google.com" class="btn btn-primary btn-sm mt-auto">Découvrir plus</a>
                        </div>
                    </div>
                </div>

                <!-- Second card -->
                <div class="col-md-3 mb-2 ">
                    <div class="card shadow h-100" style="max-width: 20rem;">
                        <img src="{{ asset('frontend/img/arabe.png') }}" class="card-img-top mx-auto d-block" alt="arabe Image" style="height: 150px; width: 150px;">
                        <div class="card-body d-flex flex-column p-3">
                            <h6 class="card-title text-center">Arabe</h6>
                            <p class="card-text" style="font-size: 0.875rem;">Cours d'arabe personnalisés pour maîtriser la langue et enrichir la culture...</p>
                            <a href="https://www.google.com" class="btn btn-primary btn-sm mt-auto">Découvrir plus</a>
                        </div>
                    </div>
                </div>

                <!-- Third card -->
                <div class="col-md-4 mb-2">
                    <div class="card shadow h-100" style="max-width: 20rem;">
                        <img src="{{ asset('frontend/img/education-islamique.jpg') }}" class="card-img-top mx-auto d-block" alt="education-islamique Image" style="height: 150px; width: 150px;">
                        <div class="card-body d-flex flex-column p-3">
                            <h6 class="card-title text-center">Education Islamique</h6>
                            <p class="card-text" style="font-size: 0.875rem;">Cours d'éducation islamique adaptés pour approfondir la compréhension des valeurs...</p>
                            <a href="https://www.google.com" class="btn btn-primary btn-sm mt-auto">Découvrir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- second -->

            <div class="row justify-content-center mt-5">
                <!-- First card -->
                <div class="col-md-3 mb-2">
                    <div class="card shadow h-100" style="max-width: 20rem;">
                        <img src="{{ asset('frontend/img/Physique-Chimie.png') }}" class="card-img-top mx-auto d-block" alt="Physique-Chimie Image" style="height: 150px; width: 150px;">
                        <div class="card-body d-flex flex-column p-3">
                            <h6 class="card-title text-center">Physique-Chimie</h6>
                            <p class="card-text" style="font-size: 0.875rem;">Cours de physique-chimie personnalisés simples et efficaces...</p>
                            <a href="https://www.google.com" class="btn btn-primary btn-sm mt-auto">Découvrir plus</a>
                        </div>
                    </div>
                </div>

                <!-- Second card -->
                <div class="col-md-3 mb-2 ">
                    <div class="card shadow h-100" style="max-width: 20rem;">
                        <img src="{{ asset('frontend/img/SVT.png') }}" class="card-img-top mx-auto d-block" alt="SVT Image" style="height: 150px; width: 150px;">
                        <div class="card-body d-flex flex-column p-3">
                            <h6 class="card-title text-center">SVT</h6>
                            <p class="card-text" style="font-size: 0.875rem;">Cours de SVT personnalisésexplorer et comprendre la vie...</p>
                            <a href="https://www.google.com" class="btn btn-primary btn-sm mt-auto">Découvrir plus</a>
                        </div>
                    </div>
                </div>

                <!-- Third card -->
                <div class="col-md-4 mb-2">
                    <div class="card shadow h-100" style="max-width: 20rem;">
                        <img src="{{ asset('frontend/img/histoire-geo.png') }}" class="card-img-top mx-auto d-block" alt="histoire-geo Image" style="height: 150px; width: 150px;">
                        <div class="card-body d-flex flex-column p-3">
                            <h6 class="card-title text-center">Histoire-Geo</h6>
                            <p class="card-text" style="font-size: 0.875rem;">une base solide dès le CP pour un excellent niveau...</p>
                            <a href="https://www.google.com" class="btn btn-primary btn-sm mt-auto">Découvrir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- third -->
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
    @include('frontend.pages.modal')
@endsection
