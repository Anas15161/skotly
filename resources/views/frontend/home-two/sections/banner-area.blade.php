<section class="banner-area-two banner-bg-two tg-motion-effects" data-background="{{ manageAssetImage('uploads/homepages/online/hero_bg.png', $hero->hero_background) }}">
  <div class="container banner-area-two-container">
      <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6">
              <div class="banner__content-two">
                  <h3 class="title" data-aos="fade-right" data-aos-delay="400">
                    {!! clean(processText($hero->translation?->title)) !!}    
                  </h3>
                  <div class="banner__btn-two" data-aos="fade-right" data-aos-delay="600">
                    @if ($hero->translation?->action_button_text != null)
                    <a href="{{ $hero->action_button_url }}" class="btn arrow-btn">{{ $hero->translation?->action_button_text }} <img src="{{ asset('frontend/img/icons/right_arrow.svg') }}" alt="img" class="injectable"></a>
                    @endif
                    @if ($hero->translation?->video_button_text != null)
                    <a href="{{ $hero->video_button_url }}" class="play-btn popup-video"><i class="fas fa-play"></i> {!! clean(processText($hero->translation?->video_button_text)) !!}</a>
                    @endif
                  </div>
              </div>
          </div>
          <div class="col-xl-7 col-lg-6 col-md-8">
              <div class="banner__images-two tg-svg">
                  <img src="{{ manageAssetImage('uploads/homepages/online/banner_img.png', $hero->banner_image) }}" alt="img" class="main-img">
                  <div class="shape big-shape" data-aos="fade-up" data-aos-delay="600">
                      <img src="{{ manageAssetImage('uploads/homepages/online/banner_bg.svg', $hero->banner_background) }}" alt="shape"
                          class="injectable tg-motion-effects1">
                  </div>
                  <span class="svg-icon" id="banner-svg"
                      data-svg-icon="{{ asset('frontend/img/banner/h2_banner_shape02.svg') }}"></span>
                  <div class="about__enrolled" data-aos="fade-right" data-aos-delay="200">
                      <p class="title"><span>{{ $hero->translation?->total_student }}</span> {{ __('Enrolled Students') }}</p>
                      <img src="{{ asset($hero->enroll_students_image) }}" alt="img">
                  </div>
                  <div class="banner__student" data-aos="fade-left" data-aos-delay="200">
                      <div class="icon">
                          <img src="{{ asset('frontend/img/banner/h2_banner_icon.svg') }}" alt="img" class="injectable">
                      </div>
                      <div class="content">
                          <span>{{ __('Total Instructors') }}</span>
                          <h4 class="title">{{ $hero->translation?->total_instructor }}</h4>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <img src="{{ asset('frontend/img/banner/h2_banner_shape03.svg') }}" alt="shape" class="line-shape-two" data-aos="fade-right"
      data-aos-delay="1600">
</section>