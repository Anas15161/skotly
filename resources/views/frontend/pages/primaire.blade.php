@extends('frontend.layouts.master')
@section('meta_title', __('Cours de soutien Primaire') . ' || ' . $setting->app_name)
@section('contents')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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
<x-frontend.breadcrumb :title="__('Cours de soutien Primaire')" :links="[['url' => route('home'), 'text' => __('Home')], ['url' => '', 'text' => __('Cours de soutien Primaire')]]" />
    <section class="contact-area section-py-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="faq__img-wrap tg-svg">
                        <div class="faq">

                        </div>
                        <div>
                            <img src="{{ asset('frontend/img/primaire.png') }}" class="img-fluid blue-shadow" alt="Image with blue shadow">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">

                            <h2 class="title fs-2">
                                Réussir les classes de primaire <span style="color:blue">(CP, CE1, CE2, CM1 , CM2 , CE6)</span>
                            </h2>
                        </div>

                        <div class="">
                            <div class="" id="">
                                <p>Le primaire est une étape importante dans le cycle éducatif d’un enfant. C’est pendant le primaire que l’enfant acquiertles compétences et notions fondamentales des matières clés.À savoir, les mathématiques, le français ou L’histoire-Géographie.
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
                                Astuces pour bien<span style="color: blue">réussir </span>le primaire !
                            </h2>
                        </div>

                        <div class="">
                            <div class="" id="">
                                <p>Le primaire représente le moment où l’enfant commence à s’exposer de plus en plus à l’apprentissage. Pendant ce cycle, l’enfant est amené à apprendre des compétences fondamentales. Notamment, la lecture, l’écriture ou le calcul. Le primaire génère souvent une angoisse chez les enfants. Pour eux, tout est nouveau et cela pourrait les frustrer. C’est pourquoi, nous accompagnons les enfants du primaire afin de leur transmettre :
                                <ul>
                                    <li>Les astuces et méthodologies de travail efficaces</li>
                                    <li>Les compétences et notions fondamentales du programme</li>
                                    <li>Le plaisir d’apprendre afin d’éveiller leur curiosité</li>
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
                            <img src="{{ asset('frontend/img/primaire2.jpg') }}" class="img-fluid blue-shadow" alt="Image with blue shadow">

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
                            <img src="{{ asset('frontend/img/f9ce5f6ed77ba163f564d613a1762ffa819886a5.jpeg') }}" class="img-fluid blue-shadow center-image" alt="Image with blue shadow">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">

                            <h2 class="title fs-2">
                                Comment nos professeurs particuliers accompagnent<span style="color:blue"> les élèves du primaire​​</span> ?
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
        </div>
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

    @include('frontend.pages.modal')




@endsection
