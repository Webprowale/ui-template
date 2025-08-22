@extends('layout.app')
@section('app')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Products</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Product</li>
            </ol>
        </div>
    </div>
  <!-- Products Start -->
<div class="container-fluid product py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Our Products</h4>
            <h1 class="display-3 text-capitalize mb-3">Elevate Your Meditation Practice</h1>
            <p class="mb-0">Discover our carefully curated collection of meditation essentials designed to enhance your practice and bring peace to your space.</p>
        </div>
        <div class="row g-4 justify-content-center">


            <!-- Product 2 -->
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="product-item">
                    <img src="{{ asset('img/Deep-Sleep-Bundle-600x600.webp') }}" class="img-fluid product-image rounded-top" alt="Eco-Friendly Yoga Mat">
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <p>uncategorized</p>
                        <a href="#" class="h4 d-inline-block mb-3 text-decoration-none text-dark">Deep Sleep Bundle</a>
                        <div class="d-flex justify-content-center mb-3">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="ms-1">(96)</span>
                            </div>
                        </div>
                        <p class="fs-4 text-primary mb-3">$100.00</p>
                        <button class="btn btn-secondary rounded-pill py-2 px-4 add-to-cart"
                                data-name="Deep Sleep Bundle" data-price="100.00"
                                data-image="{{ asset('img/Deep-Sleep-Bundle-600x600.webp') }}"
                                data-description="A selection of 20 soothing meditations specifically crafted to help you fall asleep faster and wake up refreshed. Includes bonus nature soundtracks for peaceful nights.">
                            <i class="fas fa-cart-plus me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="product-item">
                    <img src="{{ asset('img/Emotional-Balance-Program-600x600.webp') }}" class="img-fluid product-image rounded-top" alt="Meditation Bell">
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <span class="badge bg-info ">New</span>
                        <p>uncategorized</p>
                        <a href="#" class="h4 d-inline-block mb-3 text-decoration-none text-dark">Emotional Balance Program</a>
                        <div class="d-flex justify-content-center mb-3">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="ms-1">(204)</span>
                            </div>
                        </div>
                        <p class="fs-4 text-primary mb-3">$200.00</p>
                        <button class="btn btn-secondary rounded-pill py-2 px-4 add-to-cart"
                                data-name="Emotional Balance Program" data-price="200.00"
                                data-image="{{ asset('img/Emotional-Balance-Program-600x600.webp') }}"
                                data-description="A 4-week program of 25 guided sessions aimed at fostering emotional well-being, gratitude, and resilience. Combines mindfulness techniques with guided affirmations.">
                            <i class="fas fa-cart-plus me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                <div class="product-item">
                    <img src="{{ asset('img/Focus-Flow-Series-600x600.webp') }}" class="img-fluid product-image rounded-top" alt="Incense Sticks">
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <p>uncategorized</p>
                        <a href="#" class="h4 d-inline-block mb-3 text-decoration-none text-dark">Focus Flow Series</a>
                        <div class="d-flex justify-content-center mb-3">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1">(187)</span>
                            </div>
                        </div>
                        <p class="fs-4 text-primary mb-3">$75.00</p>
                        <button class="btn btn-secondary rounded-pill py-2 px-4 add-to-cart"
                                data-name="Focus Flow Series" data-price="75.00"
                                data-image="{{ asset('img/Focus-Flow-Series-600x600.webp') }}"
                                data-description="This package includes 15 guided meditations to enhance productivity and concentration. Ideal for students, professionals, or anyone looking to improve their focus and clarity.">
                            <i class="fas fa-cart-plus me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

             <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                <div class="product-item">
                    <img src="{{ asset('img/Mindful-Movement-Audio-Set-600x600.webp') }}" class="img-fluid product-image rounded-top" alt="Incense Sticks">
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <p>uncategorized</p>
                        <a href="#" class="h4 d-inline-block mb-3 text-decoration-none text-dark">Mindful Movement Audio Set</a>
                        <div class="d-flex justify-content-center mb-3">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1">(187)</span>
                            </div>
                        </div>
                        <p class="fs-4 text-primary mb-3">$110.00</p>
                        <button class="btn btn-secondary rounded-pill py-2 px-4 add-to-cart"
                                data-name="Mindful Movement Audio Set" data-price="110.00"
                                data-image="{{ asset('img/Mindful-Movement-Audio-Set-600x600.webp') }}"
                                data-description="Enhance your yoga, walking, or stretching routines with 18 guided movement meditations. Each session integrates mindfulness techniques to align your body and mind seamlessly.">
                            <i class="fas fa-cart-plus me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                <div class="product-item">
                    <img src="{{ asset('img/Kids-Calm-Collection-600x600.webp') }}" class="img-fluid product-image rounded-top" alt="Incense Sticks">
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <p>uncategorized</p>
                        <a href="#" class="h4 d-inline-block mb-3 text-decoration-none text-dark">Kids’ Calm Collection</a>
                        <div class="d-flex justify-content-center mb-3">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1">(187)</span>
                            </div>
                        </div>
                        <p class="fs-4 text-primary mb-3">$1.00</p>
                        <button class="btn btn-secondary rounded-pill py-2 px-4 add-to-cart"
                                data-name="Kids’ Calm Collection" data-price="1.00"
                                data-image="{{ asset('img/Kids-Calm-Collection-600x600.webp') }}"
                                data-description="A delightful bundle of 15 child-friendly meditations designed to nurture calmness, emotional regulation, and focus in kids aged 5-12. Includes bedtime stories with mindfulness exercises for peaceful sleep.">
                            <i class="fas fa-cart-plus me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                <div class="product-item">
                    <img src="{{ asset('img/Morning-Mindfulness-Pack-600x600.webp') }}" class="img-fluid product-image rounded-top" alt="Incense Sticks">
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <p>uncategorized</p>
                        <a href="#" class="h4 d-inline-block mb-3 text-decoration-none text-dark">Morning Mindfulness Pack</a>
                        <div class="d-flex justify-content-center mb-3">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1">(187)</span>
                            </div>
                        </div>
                        <p class="fs-4 text-primary mb-3">$60.00</p>
                        <button class="btn btn-secondary rounded-pill py-2 px-4 add-to-cart"
                                data-name="Morning Mindfulness Pack" data-price="60.00"
                                data-image="{{ asset('img/Morning-Mindfulness-Pack-600x600.webp') }}"
                                data-description="Energize your mornings with 12 short, uplifting guided meditations. Designed to cultivate positivity, clarity, and motivation, these sessions are perfect for starting each day with a fresh mindset.">
                            <i class="fas fa-cart-plus me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<!-- Products End -->

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
        button.addEventListener("click", (e) => {
            e.preventDefault();

            const product = {
                name: button.dataset.name,
                price: parseFloat(button.dataset.price),
                image: button.dataset.image,
                description: button.dataset.description
            };

            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

            fetch("{{ route('add-to-cart') }}", {
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
                    return response.json().then(err => { throw err; });
                }
                return response.json();
            })
            .then(data => {
                // Show the modal with the cart message
                const cartModal = new bootstrap.Modal(document.getElementById('cartModal'));
                document.getElementById('cartMessage').textContent = `${product.name} has been added to your cart.`;
                cartModal.show();

                // Update cart count in navbar
                if (data.cartCount !== undefined) {
                    const cartCountElements = document.querySelectorAll('.cart-count');
                    cartCountElements.forEach(el => {
                        el.textContent = data.cartCount;
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                const errorMessage = error.message || 'There was an error adding the product to cart.';
                alert(errorMessage);
            });
        });
    });
});
</script>
@endpush
@endsection
