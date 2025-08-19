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
                    <img src="{{ asset('img/shopping-eco-mat.webp') }}" class="img-fluid product-image rounded-top" alt="Eco-Friendly Yoga Mat">
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <p>Eco-Friendly, Non-Slip</p>
                        <a href="#" class="h4 d-inline-block mb-3 text-decoration-none text-dark">Eco Yoga & Meditation Mat</a>
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
                        <p class="fs-4 text-primary mb-3">$49.99</p>
                        <button class="btn btn-secondary rounded-pill py-2 px-4 add-to-cart"
                                data-name="Eco Yoga & Meditation Mat" data-price="49.99"
                                data-image="{{ asset('img/shopping-eco-mat.webp') }}"
                                data-description="Sustainable, non-slip yoga mat perfect for meditation or yoga practice.">
                            <i class="fas fa-cart-plus me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="product-item">
                    <img src="{{ asset('img/shopping-bowl.webp') }}" class="img-fluid product-image rounded-top" alt="Meditation Bell">
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <span class="badge bg-info mb-2">New</span>
                        <p>Handcrafted Bronze</p>
                        <a href="#" class="h4 d-inline-block mb-3 text-decoration-none text-dark">Tibetan Singing Bowl Set</a>
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
                        <p class="fs-4 text-primary mb-3">$39.99</p>
                        <button class="btn btn-secondary rounded-pill py-2 px-4 add-to-cart"
                                data-name="Tibetan Singing Bowl Set" data-price="39.99"
                                data-image="{{ asset('img/shopping-bowl.webp') }}"
                                data-description="Authentic Tibetan singing bowl set with mallet and cushion for meditation practice.">
                            <i class="fas fa-cart-plus me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                <div class="product-item">
                    <img src="{{ asset('img/shopping-incense-set.webp') }}" class="img-fluid product-image rounded-top" alt="Incense Sticks">
                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <p>Natural Ingredients, Relaxing Scents</p>
                        <a href="#" class="h4 d-inline-block mb-3 text-decoration-none text-dark">Meditation Incense Set</a>
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
                        <p class="fs-4 text-primary mb-3">$24.99</p>
                        <button class="btn btn-secondary rounded-pill py-2 px-4 add-to-cart"
                                data-name="Meditation Incense Set" data-price="24.99"
                                data-image="{{ asset('img/shopping-incense-set.webp') }}"
                                data-description="Set of natural incense sticks with various relaxing scents for meditation.">
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
