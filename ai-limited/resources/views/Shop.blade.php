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
                        <p>Advanced AI hub with Google Assistant built-in, featuring smart display and camera for video calls. Automatically learns your routines and controls all compatible smart devices.</p>
                        <button class="btn btn-primary px-4 add-to-cart" data-product="SmartHub Pro AI" data-price="349.99">
                            <i class="fa fa-shopping-cart me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 2: Oura Ring Gen4 -->
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
                        <p>Comfortably tracks over 20 biometrics from your finger, providing deeply personal health metrics and insights with AI-powered wellness recommendations and stress monitoring.</p>
                        <button class="btn btn-primary px-4 add-to-cart" data-product="AI Health Ring Pro" data-price="299.99">
                            <i class="fa fa-shopping-cart me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 3: AI Security Camera System -->
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
                        <h5 class="text-primary mb-3">$249.99 + $19.99/month</h5>
                        <p>Advanced camera system with AI-powered facial recognition, unusual activity detection, and intelligent alerts. Features 4K resolution and weather-resistant design.</p>
                        <button class="btn btn-primary px-4 add-to-cart" data-product="VigilanceAI Pro" data-price="249.99">
                            <i class="fa fa-shopping-cart me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 4: Galaxy Ring Alternative -->
                {{-- <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="product-item bg-light rounded p-4 text-center">
                        <img class="img-fluid mb-4" src="https://images.unsplash.com/photo-1607400201515-c9c5d2ec4e7e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Galaxy Ring Style" style="height: 250px; object-fit: cover;">
                        <h4>RingConn Gen2 Air</h4>
                        <p class="mb-3">Ultra-Light AI Fitness Tracker</p>
                        <div class="product-features mb-3">
                            <span class="badge bg-primary me-1">2.5g Weight</span>
                            <span class="badge bg-primary me-1">10-Day Battery</span>
                            <span class="badge bg-primary">AI Health Insights</span>
                        </div>
                        <h5 class="text-primary mb-3">$199.99</h5>
                        <p>Just 2.5g featuring advanced AI health insights, precise sleep tracking, multi-dimensional wellness monitoring, and 10-day battery life.</p>
                        <button class="btn btn-primary px-4 add-to-cart" data-product="RingConn Gen2 Air" data-price="199.99">
                            <i class="fa fa-shopping-cart me-2"></i>Add to Cart
                        </button>
                    </div>
                </div> --}}

                <!-- Product 5: Samsung Ballie Inspired -->
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
                        <p>Rolling robot with built-in projector that can display content while it rolls. Part security patrol, part butler, it can also manage and control your smart appliances.</p>
                        <button class="btn btn-primary px-4 add-to-cart" data-product="RoboBuddy AI" data-price="899.99">
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
                        <p>World's most comfortable and compact smart ring that monitors your sleep, movement and recovery. Best for fitness goals, daily step counts, calories and distance covered.</p>
                        <button class="btn btn-primary px-4 add-to-cart" data-product="Ultrahuman Ring Air" data-price="279.99">
                            <i class="fa fa-shopping-cart me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 7: AI Baby Monitor -->
                {{-- <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="product-item bg-light rounded p-4 text-center">
                        <img class="img-fluid mb-4" src="https://images.unsplash.com/photo-1487611459768-bd414656ea10?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="AI Baby Monitor" style="height: 250px; object-fit: cover;">
                        <h4>BabyMind AI Monitor</h4>
                        <p class="mb-3">Smart Baby Monitor with AI Insights</p>
                        <div class="product-features mb-3">
                            <span class="badge bg-primary me-1">Cry Analysis</span>
                            <span class="badge bg-primary me-1">Sleep Tracking</span>
                            <span class="badge bg-primary">Smart Alerts</span>
                        </div>
                        <h5 class="text-primary mb-3">$189.99</h5>
                        <p>AI baby monitor that decodes crying and provides intelligent insights about your baby's needs, sleep patterns, and health indicators through advanced sound analysis.</p>
                        <button class="btn btn-primary px-4 add-to-cart" data-product="BabyMind AI Monitor" data-price="189.99">
                            <i class="fa fa-shopping-cart me-2"></i>Add to Cart
                        </button>
                    </div>
                </div> --}}

                <!-- Product 8: Vertu AI Diamond Ring -->
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
                        <p>Groundbreaking features like non-invasive glucose monitoring. Uses high-precision PPG sensor chip eliminating the need for finger pricks while offering luxury diamond-studded design.</p>
                        <button class="btn btn-primary px-4 add-to-cart" data-product="LuxRing AI Diamond" data-price="1299.99">
                            <i class="fa fa-shopping-cart me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>

                <!-- Product 9: Smart Kitchen AI -->
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
                        <p>Smart kitchen gadgets with connected appliances featuring AI-driven recipe recommendations, cooking timers, and nutritional analysis for healthier meal planning.</p>
                        <button class="btn btn-primary px-4 add-to-cart" data-product="KitchenGenius AI" data-price="399.99">
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

    <!-- Shopping Cart Modal -->
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

    @section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add to cart functionality
            const addToCartButtons = document.querySelectorAll('.add-to-cart');

            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const product = this.getAttribute('data-product');
                    const price = this.getAttribute('data-price');

                    // Show loading state
                    this.disabled = true;
                    this.innerHTML = '<i class="fa fa-spinner fa-spin me-2"></i>Adding...';

                    // Simulate API call delay
                    setTimeout(() => {
                        // Reset button
                        this.disabled = false;
                        this.innerHTML = '<i class="fa fa-shopping-cart me-2"></i>Add to Cart';

                        // Show confirmation
                        document.getElementById('cartMessage').textContent = `${product} ($${price}) has been added to your cart successfully!`;

                        // Show the modal
                        const cartModal = new bootstrap.Modal(document.getElementById('cartModal'));
                        cartModal.show();

                        // Here you would typically make an AJAX call to your server
                        /*
                        fetch('/cart/add', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({
                                product: product,
                                price: price,
                                quantity: 1
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Handle success
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                        */
                    }, 1000);
                });
            });
        });
    </script>
    @endsection
@endsection
