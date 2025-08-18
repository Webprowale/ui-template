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
                <h1 class="display-3 text-capitalize mb-3">We Deliver Best Quality Bottle Packs.</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="product-item">
                        <img src="img/product-3.png" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="product-content bg-light text-center rounded-bottom p-4">
                            <p>2L 1 Bottle</p>
                            <a href="#" class="h4 d-inline-block mb-3">Mineral Water Bottle</a>
                            <p class="fs-4 text-primary mb-3">$35.00</p>
                            <button class="btn btn-secondary rounded-pill py-2 px-4 add-to-cart"
                                data-name="Mineral Water Bottle" data-price="35.00" data-image="img/product-3.png"
                                data-description="2L 1 Bottle">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="product-item">
                        <img src="img/product-2.png" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="product-content bg-light text-center rounded-bottom p-4">
                            <p>4L 2 Bottles</p>
                            <a href="#" class="h4 d-inline-block mb-3">RO Water Bottle</a>
                            <p class="fs-4 text-primary mb-3">$70.00</p>
                            <button class="btn btn-secondary rounded-pill py-2 px-4 add-to-cart" data-name="RO Water Bottle"
                                data-price="70.00" data-image="img/product-2.png" data-description="4L 2 Bottles">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="product-item">
                        <img src="img/product-1.png" class="img-fluid w-100 rounded-top" alt="Image">
                        <div class="product-content bg-light text-center rounded-bottom p-4">
                            <p>6L 3 Bottles</p>
                            <a href="#" class="h4 d-inline-block mb-3">UV Water Bottle</a>
                            <p class="fs-4 text-primary mb-3">$100.00</p>
                            <button class="btn btn-secondary rounded-pill py-2 px-4 add-to-cart" data-name="UV Water Bottle"
                                data-price="100.00" data-image="img/product-1.png" data-description="6L 3 Bottles">
                                Add to Cart
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
