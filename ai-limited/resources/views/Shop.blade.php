@extends('layout.app')
@section('app')
    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">AI-Powered Smart Gadgets Collection</h1>
                    <p class="text-white mb-4 animated slideInRight">Discover cutting-edge AI devices that transform your daily life with intelligent automation and insights</p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/hero-img.png" alt="" style="max-height: 300px;">

                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

  <!-- Products Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="mb-4">Revolutionary AI Smart Devices</h1>
            <p class="mb-5">Experience the future with our comprehensive collection of AI-powered gadgets designed to enhance every aspect of your life</p>
        </div>

        <div class="row g-4">
            <!-- Product 1: SmartHub Pro -->
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="product-item bg-light rounded p-4 text-center">
                    <img class="img-fluid mb-4" src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="SmartHub Pro" style="height: 250px; object-fit: cover;">
                    <h4>SmartHub Pro AI</h4>
                    <p class="mb-3">Next-Gen Smart Home Control Center</p>
                    <div class="product-features mb-3">
                        <span class="badge bg-primary me-1">Voice Control</span>
                        <span class="badge bg-primary me-1">Home Automation</span>
                        <span class="badge bg-primary">AI Learning</span>
                    </div>
                    <h5 class="text-primary mb-3">$349.99</h5>
                    <p class="product-description">Advanced AI hub with Google Assistant built-in, featuring smart display and camera for video calls. Automatically learns your routines and controls all compatible smart devices.</p>
                    <button class="btn btn-primary px-4 add-to-cart"
                            data-name="SmartHub Pro AI"
                            data-price="349.99"
                            data-image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            data-description="Advanced AI hub with Google Assistant built-in, featuring smart display and camera for video calls. Automatically learns your routines and controls all compatible smart devices.">
                        <i class="fa fa-shopping-cart me-2"></i>Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product 2: AI Health Ring Pro -->
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="product-item bg-light rounded p-4 text-center">
                    <img class="img-fluid mb-4" src="https://images.unsplash.com/photo-1544117519-31a4b719223d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="AI Health Ring" style="height: 250px; object-fit: cover;">
                    <h4>AI Health Ring Pro</h4>
                    <p class="mb-3">Advanced Biometric Smart Ring</p>
                    <div class="product-features mb-3">
                        <span class="badge bg-primary me-1">24/7 Health Tracking</span>
                        <span class="badge bg-primary me-1">Sleep Analysis</span>
                        <span class="badge bg-primary">AI Insights</span>
                    </div>
                    <h5 class="text-primary mb-3">$299.99</h5>
                    <p class="product-description">Comfortably tracks over 20 biometrics from your finger, providing deeply personal health metrics and insights with AI-powered wellness recommendations and stress monitoring.</p>
                    <button class="btn btn-primary px-4 add-to-cart"
                            data-name="AI Health Ring Pro"
                            data-price="299.99"
                            data-image="https://images.unsplash.com/photo-1544117519-31a4b719223d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            data-description="Comfortably tracks over 20 biometrics from your finger, providing deeply personal health metrics and insights with AI-powered wellness recommendations and stress monitoring.">
                        <i class="fa fa-shopping-cart me-2"></i>Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product 3: VigilanceAI Pro -->
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="product-item bg-light rounded p-4 text-center">
                    <img class="img-fluid mb-4" src="https://images.unsplash.com/photo-1558002038-1055907df827?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="AI Security System" style="height: 250px; object-fit: cover;">
                    <h4>VigilanceAI Pro</h4>
                    <p class="mb-3">Smart AI Security Camera System</p>
                    <div class="product-features mb-3">
                        <span class="badge bg-primary me-1">AI Recognition</span>
                        <span class="badge bg-primary me-1">Smart Alerts</span>
                        <span class="badge bg-primary">Night Vision</span>
                    </div>
                    <h5 class="text-primary mb-3">$249.99</h5>
                    <p class="product-description">Advanced camera system with AI-powered facial recognition, unusual activity detection, and intelligent alerts. Features 4K resolution and weather-resistant design.</p>
                    <button class="btn btn-primary px-4 add-to-cart"
                            data-name="VigilanceAI Pro"
                            data-price="249.99"
                            data-image="https://images.unsplash.com/photo-1558002038-1055907df827?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            data-description="Advanced camera system with AI-powered facial recognition, unusual activity detection, and intelligent alerts. Features 4K resolution and weather-resistant design.">
                        <i class="fa fa-shopping-cart me-2"></i>Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product 5: RoboBuddy AI -->
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="product-item bg-light rounded p-4 text-center">
                    <img class="img-fluid mb-4" src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="AI Robot Assistant" style="height: 250px; object-fit: cover;">
                    <h4>RoboBuddy AI</h4>
                    <p class="mb-3">Personal AI Robot Assistant</p>
                    <div class="product-features mb-3">
                        <span class="badge bg-primary me-1">Mobile Projector</span>
                        <span class="badge bg-primary me-1">Smart Control</span>
                        <span class="badge bg-primary">Voice Assistant</span>
                    </div>
                    <h5 class="text-primary mb-3">$899.99</h5>
                    <p class="product-description">Rolling robot with built-in projector that can display content while it rolls. Part security patrol, part butler, it can also manage and control your smart appliances.</p>
                    <button class="btn btn-primary px-4 add-to-cart"
                            data-name="RoboBuddy AI"
                            data-price="899.99"
                            data-image="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            data-description="Rolling robot with built-in projector that can display content while it rolls. Part security patrol, part butler, it can also manage and control your smart appliances.">
                        <i class="fa fa-shopping-cart me-2"></i>Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product 6: Ultrahuman Ring Air -->
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="product-item bg-light rounded p-4 text-center">
                    <img class="img-fluid mb-4" src="https://images.unsplash.com/photo-1614680376593-902f74cf0d41?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Ultrahuman Ring" style="height: 250px; object-fit: cover;">
                    <h4>Ultrahuman Ring Air</h4>
                    <p class="mb-3">World's Most Comfortable Smart Ring</p>
                    <div class="product-features mb-3">
                        <span class="badge bg-primary me-1">Movement Tracking</span>
                        <span class="badge bg-primary me-1">Recovery Metrics</span>
                        <span class="badge bg-primary">No Subscription</span>
                    </div>
                    <h5 class="text-primary mb-3">$279.99</h5>
                    <p class="product-description">World's most comfortable and compact smart ring that monitors your sleep, movement and recovery. Best for fitness goals, daily step counts, calories and distance covered.</p>
                    <button class="btn btn-primary px-4 add-to-cart"
                            data-name="Ultrahuman Ring Air"
                            data-price="279.99"
                            data-image="https://images.unsplash.com/photo-1614680376593-902f74cf0d41?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            data-description="World's most comfortable and compact smart ring that monitors your sleep, movement and recovery. Best for fitness goals, daily step counts, calories and distance covered.">
                        <i class="fa fa-shopping-cart me-2"></i>Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product 8: LuxRing AI Diamond -->
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="product-item bg-light rounded p-4 text-center">
                    <img class="img-fluid mb-4" src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Luxury AI Ring" style="height: 250px; object-fit: cover;">
                    <h4>LuxRing AI Diamond</h4>
                    <p class="mb-3">Premium AI Health & Luxury Ring</p>
                    <div class="product-features mb-3">
                        <span class="badge bg-primary me-1">Glucose Monitoring</span>
                        <span class="badge bg-primary me-1">Diamond Design</span>
                        <span class="badge bg-primary">Premium Materials</span>
                    </div>
                    <h5 class="text-primary mb-3">$1,299.99</h5>
                    <p class="product-description">Groundbreaking features like non-invasive glucose monitoring. Uses high-precision PPG sensor chip eliminating the need for finger pricks while offering luxury diamond-studded design.</p>
                    <button class="btn btn-primary px-4 add-to-cart"
                            data-name="LuxRing AI Diamond"
                            data-price="1299.99"
                            data-image="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            data-description="Groundbreaking features like non-invasive glucose monitoring. Uses high-precision PPG sensor chip eliminating the need for finger pricks while offering luxury diamond-studded design.">
                        <i class="fa fa-shopping-cart me-2"></i>Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product 9: KitchenGenius AI -->
            <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="product-item bg-light rounded p-4 text-center">
                    <img class="img-fluid mb-4" src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Smart Kitchen AI" style="height: 250px; object-fit: cover;">
                    <h4>KitchenGenius AI</h4>
                    <p class="mb-3">AI-Powered Smart Kitchen Assistant</p>
                    <div class="product-features mb-3">
                        <span class="badge bg-primary me-1">Recipe Suggestions</span>
                        <span class="badge bg-primary me-1">Cooking Guidance</span>
                        <span class="badge bg-primary">Nutrition Tracking</span>
                    </div>
                    <h5 class="text-primary mb-3">$399.99</h5>
                    <p class="product-description">Smart kitchen gadgets with connected appliances featuring AI-driven recipe recommendations, cooking timers, and nutritional analysis for healthier meal planning.</p>
                    <button class="btn btn-primary px-4 add-to-cart"
                            data-name="KitchenGenius AI"
                            data-price="399.99"
                            data-image="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            data-description="Smart kitchen gadgets with connected appliances featuring AI-driven recipe recommendations, cooking timers, and nutritional analysis for healthier meal planning.">
                        <i class="fa fa-shopping-cart me-2"></i>Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->

    <!-- Call to Action -->
    <div class="container-fluid bg-primary py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mb-4">Need Help Choosing the Right AI Gadget?</h2>
                    <p class="text-white mb-5">Our AI specialists can help you find the perfect smart device for your lifestyle and needs</p>
                    <a href="/contact" class="btn btn-light px-5 py-3">Get Expert Advice</a>
                </div>
            </div>
        </div>
    </div>

  <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Added to Cart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="cartMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continue Shopping</button>
                    <a href="/cart" class="btn btn-primary">View Cart</a>
                </div>
            </div>
        </div>
    </div>
 @push('scripts')
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll(".add-to-cart").forEach(button => {
            button.addEventListener("click", () => {
                const product = {
                    name: button.dataset.name,
                    price: button.dataset.price,
                    image: button.dataset.image,
                    description: button.dataset.description
                };

                const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

                fetch("/add-to-cart", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": csrfToken,
                        "Accept": "application/json"
                    },
                    body: JSON.stringify(product)
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {

                    alert(data.message);

                    // Update cart count in navbar
                    if (data.cartCount) {
                        const cartCountElements = document.querySelectorAll('.cart-count');
                        cartCountElements.forEach(el => {
                            el.textContent = data.cartCount;
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error adding the product to cart.');
                });
            });
        });
    });
    </script>
    @endpush

@endsection
