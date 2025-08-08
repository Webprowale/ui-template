@extends('layout.app')
@section('app')
    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">AI.LTD</div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Revolutionary AI Smart Gadgets for Modern Living</h1>
                    <p class="text-white mb-4 animated slideInRight">Experience the future today with our cutting-edge AI-powered smart devices. From intelligent home automation to personal productivity enhancers, we bring artificial intelligence to your everyday life through innovative gadgets that learn, adapt, and evolve with you.</p>
                    <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">Explore Products</a>
                    <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Get Started</a>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="{{ asset('img/hero-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Search smart gadgets...">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="{{ asset('img/about-img.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">About Us</div>
                    <h1 class="mb-4">Pioneering the Next Generation of Smart Living Technology</h1>
                    <p class="mb-4">We are passionate innovators dedicated to creating AI-powered smart gadgets that seamlessly integrate into your daily life. Our products combine advanced machine learning algorithms with intuitive design to deliver personalized experiences that anticipate your needs and enhance your productivity.</p>
                    <p class="mb-4">From smart home assistants to wearable AI companions, our diverse portfolio of intelligent devices is designed to make your life more efficient, comfortable, and connected.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Award Winning Design</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Expert AI Engineers</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Smart Support</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Premium Quality</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Products</div>
                    <h1 class="mb-4">Intelligent Gadgets That Transform Your World</h1>
                    <p class="mb-4">Discover our comprehensive range of AI-powered smart devices designed to revolutionize how you interact with technology. Each product features advanced learning capabilities, voice recognition, and seamless connectivity to create a truly intelligent ecosystem.</p>
                    <a class="btn btn-primary rounded-pill px-4" href="">View All Products</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-home fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Smart Home Hubs</h5>
                                        <p>Centralized AI control systems that learn your routines and automate your entire home environment for optimal comfort and efficiency.</p>
                                        <a class="btn px-3 mt-auto mx-auto" href="">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-mobile-alt fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Wearable AI Devices</h5>
                                        <p>Personal AI assistants that monitor your health, track activities, and provide intelligent insights to enhance your daily performance.</p>
                                        <a class="btn px-3 mt-auto mx-auto" href="">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-microchip fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">AI Voice Assistants</h5>
                                        <p>Advanced conversational AI companions with natural language processing and contextual understanding capabilities.</p>
                                        <a class="btn px-3 mt-auto mx-auto" href="">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-lightbulb fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Smart Lighting Systems</h5>
                                        <p>Intelligent illumination that adapts to your mood, schedule, and environment using advanced sensor technology and AI algorithms.</p>
                                        <a class="btn px-3 mt-auto mx-auto" href="">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary feature pt-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Why Choose Us</div>
                    <h1 class="text-white mb-4">Leading Smart Gadget Innovation with 10+ Years of AI Excellence</h1>
                    <p class="text-light mb-4">We've been at the forefront of AI technology integration, creating smart devices that don't just respond to commands but anticipate your needs and preferences.</p>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Advanced machine learning algorithms in every device</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Seamless integration across all smart home ecosystems</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Privacy-first design with local AI processing</span>
                    </div>
                    <div class="row g-4 pt-3">
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-users fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">50000</h2>
                                    <p class="text-white mb-0">Happy Users</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-cog fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">25</h2>
                                    <p class="text-white mb-0">Smart Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="{{ asset('img/feature.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->





    <!-- FAQs Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Popular FAQs</div>
                <h1 class="mb-4">Frequently Asked Questions</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ1">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    How do your AI smart gadgets learn my preferences?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Our smart gadgets use advanced machine learning algorithms that analyze your usage patterns, preferences, and routines over time. The AI adapts to your behavior locally on the device, ensuring privacy while delivering personalized experiences.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Are your smart devices compatible with existing smart home systems?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Yes! Our devices are designed to integrate seamlessly with major smart home platforms including Google Home, Amazon Alexa, Apple HomeKit, and Samsung SmartThings, ensuring compatibility with your existing setup.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What makes your AI technology different from others?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Our AI technology focuses on edge computing and local processing, meaning your data stays private while still delivering intelligent features. We combine advanced neural networks with intuitive interfaces for truly smart automation.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Do your gadgets require constant internet connection?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Most core AI functions work offline thanks to our edge computing approach. Internet connectivity enhances features like weather updates and remote control, but basic smart functions remain available even without internet.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ2">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How secure is my data with your smart devices?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Security and privacy are our top priorities. We use end-to-end encryption, local data processing, and regular security updates. Your personal data never leaves your device unless you explicitly choose to share it.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    What warranty and support do you provide?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    All our smart gadgets come with a 2-year warranty and lifetime software updates. Our 24/7 support team provides technical assistance, and we offer free setup consultation for complex installations.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Can I customize the AI behavior of my devices?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Absolutely! Our devices feature customizable AI personalities, adjustable automation rules, and flexible scheduling options. You can tailor each device's behavior to match your specific preferences and lifestyle.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Do you offer bulk pricing for businesses?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Yes, we provide enterprise solutions with volume discounts, dedicated account management, and custom AI training for businesses. Contact our B2B team for tailored pricing and deployment options.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs Start -->





    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Testimonial</div>
                    <h1 class="mb-4">What Our Customers Say!</h1>
                    <p class="mb-4">Discover how our AI smart gadgets have transformed homes and businesses worldwide. Read real experiences from customers who've embraced intelligent living with our innovative technology solutions.</p>
                    <a class="btn btn-primary rounded-pill px-4" href="">View All Reviews</a>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel border-start border-primary">
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">These smart devices have completely revolutionized my daily routine. The AI learns my preferences so well that my home now anticipates my needs before I even realize them. It's like living in the future!</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testimonial-1.jpg') }}"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Sarah Johnson</h5>
                                    <span>Tech Enthusiast</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">The integration with our existing smart home was seamless. What impressed me most is how the AI adapts to our family's changing schedules and preferences. Outstanding technology and excellent support!</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testimonial-2.jpg') }}"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Michael Chen</h5>
                                    <span>Smart Home Owner</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">As a small business owner, these AI gadgets have streamlined our operations significantly. The predictive analytics and automation features have saved us countless hours and improved efficiency tremendously.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('img/testimonial-3.jpg') }}"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Emily Rodriguez</h5>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


   @endsection
