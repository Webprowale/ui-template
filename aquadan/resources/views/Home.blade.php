@extends('layout.app')
@section('app')
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('img/her0-carousel.jpg') }}" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption-1">
                        <div class="carousel-caption-1-content" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4 fadeInLeft animated"
                                data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;"
                                style="letter-spacing: 3px;">Find Your Inner Peace with Aquadan solution</h4>
                            <p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft"
                                data-delay="1.5s" style="animation-delay: 1.5s;">Aquadan Solution provides soothing guided
                                meditation audio that helps you relax, reduce stress, and enhance your well-being.
                            </p>
                            <div class="carousel-caption-1-content-btn fadeInLeft animated" data-animation="fadeInLeft"
                                data-delay="1.7s" style="animation-delay: 1.7s;">
                                <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Order
                                    Now</a>
                                <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2"
                                    href="#">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/her0-carousel.jpg') }}" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption-2">
                        <div class="carousel-caption-2-content" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4 fadeInLeft animated"
                                data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;"
                                style="letter-spacing: 3px;">Find Your Inner Peace with Aquadan solution</h4>
                            <p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft"
                                data-delay="1.5s" style="animation-delay: 1.5s;">Aquadan Solution provides soothing guided
                                meditation audio that helps you relax, reduce stress, and enhance your well-being.
                            </p>
                            <div class="carousel-caption-2-content-btn fadeInRight animated" data-animation="fadeInRight"
                                data-delay="1.7s" style="animation-delay: 1.7s;">
                                <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Order
                                    Now</a>
                                <a class="btn btn-secondary rounded-pill flex-shrink-0 py-3 px-5 ms-2"
                                    href="#">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn btn-primary fadeInLeft animated" aria-hidden="true"
                    data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"> <i
                        class="fa fa-angle-left fa-3x"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn btn-primary fadeInRight animated" aria-hidden="true"
                    data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i
                        class="fa fa-angle-right fa-3x"></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Our Features</h4>
                <h1 class="display-3 text-capitalize mb-3">Enhance Your Well-Being with Aquadan Solution</h1>
                <p class="mb-0">
                    Aquadan Solution isn’t just about meditation; it's about creating a balanced, peaceful lifestyle.
                    With regular practice, you’ll find yourself less stressed, more focused, and better equipped to face
                    life’s challenges with clarity and calmness.
                </p>
            </div>
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-brain text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Stress Relief & Calmness</a>
                        <p class="mb-3">
                            Guided meditation sessions help you release stress, restore inner peace,
                            and achieve a sense of calm even in the busiest of days.
                        </p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-bullseye text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Improved Focus</a>
                        <p class="mb-3">
                            Regular practice sharpens your concentration, boosts productivity,
                            and enhances your ability to stay present in daily tasks.
                        </p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-heart text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Balanced Lifestyle</a>
                        <p class="mb-3">
                            Build a healthier routine by incorporating mindfulness into your everyday life,
                            creating balance between body, mind, and spirit.
                        </p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-3"><i class="fas fa-users text-white fa-3x"></i></div>
                        <a href="#" class="h4 mb-3">Clarity & Confidence</a>
                        <p class="mb-3">
                            Meditation equips you to approach challenges with a clear mind,
                            greater self-confidence, and emotional stability.
                        </p>
                        <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid about overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Left Image Section -->
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img rounded h-100">
                        <img src="img/about-aq.jpg" class="img-fluid rounded h-100 w-100" style="object-fit: cover;"
                            alt="">
                    </div>
                </div>

                <!-- Right Content Section -->
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-item">
                        <h4 class="text-primary text-uppercase">Why Aquadan Solution is All You Need</h4>
                        <p class="mb-4">
                            Aquadan Solution is designed to be your go-to source for meditation that fits into your busy
                            lifestyle.
                            With a range of guided sessions, you’ll experience tranquility whenever you need it.
                        </p>

                        <!-- Box 1 -->
                        <div class="bg-light rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center"
                                                style="width: 80px; height: 80px;">
                                                <i class="fas fa-user-check text-white fa-2x"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="h4 d-inline-block mb-3">Personalized Guidance</a>
                                            <p class="mb-0">
                                                Whether you want to meditate for relaxation, focus, or sleep,
                                                we offer tailored sessions to meet your needs.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Box 2 -->
                        <div class="bg-light rounded p-4 mb-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="pe-4">
                                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center"
                                                style="width: 80px; height: 80px;">
                                                <i class="fas fa-clock text-white fa-2x"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="h4 d-inline-block mb-3">Convenient Anytime Access</a>
                                            <p class="mb-0">
                                                Listen to our guided meditations anytime, anywhere –
                                                on your phone, tablet, or computer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn btn-secondary rounded-pill py-3 px-5">Start Meditating</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid service bg-light overflow-hidden py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Our Services</h4>
                <h1 class="display-3 text-capitalize mb-3">Transform Your Mind, Body, and Spirit</h1>
                <p class="mb-0">
                    At Aquadan Solution, we offer a holistic range of meditation and wellness services designed
                    to reduce stress, improve focus, and bring balance to your lifestyle. Whether you’re a beginner
                    or an experienced practitioner, our services guide you toward inner peace and well-being.
                </p>
            </div>
            <div class="row gx-0 gy-4 align-items-center">
                <!-- Left Column -->
                <div class="col-lg-6 col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="service-content text-end">
                                        <a href="#" class="h4 d-inline-block mb-3">Guided Meditation</a>
                                        <p class="mb-0">
                                            Personalized meditation sessions led by experts to help you reduce stress,
                                            calm the mind, and build emotional resilience.
                                        </p>
                                    </div>
                                    <div class="ps-4">
                                        <div class="service-btn"><i class="fas fa-brain text-white fa-2x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="service-content text-end">
                                        <a href="#" class="h4 d-inline-block mb-3">Corporate Wellness</a>
                                        <p class="mb-0">
                                            Tailored mindfulness programs for businesses to boost employee productivity,
                                            reduce workplace stress, and improve focus.
                                        </p>
                                    </div>
                                    <div class="ps-4">
                                        <div class="service-btn"><i class="fas fa-building text-white fa-2x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="service-content text-end">
                                        <a href="#" class="h4 d-inline-block mb-3">Mindfulness Training</a>
                                        <p class="mb-0">
                                            Workshops and courses that teach practical mindfulness techniques
                                            to bring clarity and balance into everyday life.
                                        </p>
                                    </div>
                                    <div class="ps-4">
                                        <div class="service-btn"><i class="fas fa-leaf text-white fa-2x"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Center Image -->
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-transparent">
                        <img src="img/object.png" class="img-fluid w-100" alt="Meditation Service">
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="service-btn"><i class="fas fa-spa text-white fa-2x"></i></div>
                                    </div>
                                    <div class="service-content">
                                        <a href="#" class="h4 d-inline-block mb-3">Relaxation Therapy</a>
                                        <p class="mb-0">
                                            Special sessions combining meditation and relaxation techniques
                                            to heal your body and restore inner peace.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="service-btn"><i class="fas fa-flask text-white fa-2x"></i></div>
                                    </div>
                                    <div class="service-content">
                                        <a href="#" class="h4 d-inline-block mb-3">Holistic Wellness</a>
                                        <p class="mb-0">
                                            A combination of meditation, nutrition guidance, and breathing exercises
                                            to enhance your overall health and energy.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-item rounded p-4 mb-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="service-btn"><i class="fas fa-users text-white fa-2x"></i></div>
                                    </div>
                                    <div class="service-content">
                                        <a href="#" class="h4 d-inline-block mb-3">Community Programs</a>
                                        <p class="mb-0">
                                            Group meditation and wellness sessions that foster connection,
                                            support, and collective mindfulness practice.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
