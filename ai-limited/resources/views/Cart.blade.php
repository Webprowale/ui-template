@extends('layout.app')
@section('app')
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Your Shopping Cart</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="{{ asset('img/hero-img.png') }}" alt="" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Cart - {{ count($cart) }} {{ Str::plural('item', count($cart)) }}</h5>
                        </div>
                        <div class="card-body">
                            @if(count($cart) > 0)
                                @foreach($cart as $id => $item)
                                    <!-- Single item -->
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                            <!-- Image -->
                                            <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                                <img src="{{ $item['image'] }}" class="w-100" alt="{{ $item['name'] }}" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                                </a>
                                            </div>
                                            <!-- Image -->
                                        </div>

                                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                            <!-- Data -->
                                            <p><strong>{{ $item['name'] }}</strong></p>
                                            <p>{{ Str::limit($item['description'], 100) }}</p>
                                            <button type="button" class="btn btn-danger btn-sm me-1 mb-2 remove-item" data-id="{{ $id }}">
                                                <i class="fas fa-trash"></i> Remove item
                                            </button>
                                            <!-- Data -->
                                        </div>

                                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                            <!-- Quantity -->
                                            <div class="d-flex mb-4" style="max-width: 300px">
                                                <button class="btn btn-primary px-3 me-2 update-quantity" data-change="-1" data-id="{{ $id }}">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <div class="form-outline">
                                                    <input id="quantity-{{ $id }}" min="1" name="quantity" value="{{ $item['quantity'] }}" type="number" class="form-control quantity-input" />
                                                </div>

                                                <button class="btn btn-primary px-3 ms-2 update-quantity" data-change="1" data-id="{{ $id }}">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- Quantity -->

                                            <!-- Price -->
                                            <p class="text-start text-md-center">
                                                <strong>${{ number_format($item['price'] * $item['quantity'], 2) }}</strong>
                                            </p>
                                            <!-- Price -->
                                        </div>
                                    </div>
                                    <!-- Single item -->

                                    @if(!$loop->last)
                                        <hr class="my-4" />
                                    @endif
                                @endforeach
                            @else
                                <div class="text-center py-4">
                                    <h5>Your cart is empty</h5>
                                    <a href="{{url('/shop')}}" class="btn btn-primary mt-3">Continue Shopping</a>
                                </div>
                            @endif
                        </div>
                    </div>

                    @if(count($cart) > 0)
                        <div class="card mb-4">
                            <div class="card-body">
                                <p><strong>Expected shipping delivery</strong></p>
                                <p class="mb-0">{{ now()->addDays(2)->format('m.d.Y') }} - {{ now()->addDays(5)->format('m.d.Y') }}</p>
                            </div>
                        </div>
                    @endif
                </div>

                @if(count($cart) > 0)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Products
                                    <span>${{ number_format($total, 2) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span>Free</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong>${{ number_format($total, 2) }}</strong></span>
                                </li>
                            </ul>

                            <a href="/checkout" class="btn btn-primary btn-lg btn-block">
                                Go to checkout
                            </a>
                        </div>
                    </div>

                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body">
                            <p><strong>We accept</strong></p>
                            <img class="me-2" width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" alt="Visa" />
                            <img class="me-2" width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg" alt="American Express" />
                            <img class="me-2" width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg" alt="Mastercard" />
                            <img class="me-2" width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp" alt="PayPal" />
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Update quantity
            document.querySelectorAll('.update-quantity').forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.dataset.id;
                    const change = parseInt(this.dataset.change);
                    const quantityInput = document.getElementById(`quantity-${id}`);
                    let newQuantity = parseInt(quantityInput.value) + change;

                    if (newQuantity < 1) newQuantity = 1;

                    updateCartItem(id, newQuantity);
                });
            });

            // Remove item
            document.querySelectorAll('.remove-item').forEach(button => {
                button.addEventListener('click', function() {
                    if (confirm('Are you sure you want to remove this item?')) {
                        removeCartItem(this.dataset.id);
                    }
                });
            });

            // Direct input change
            document.querySelectorAll('.quantity-input').forEach(input => {
                input.addEventListener('change', function() {
                    const id = this.id.replace('quantity-', '');
                    let newQuantity = parseInt(this.value);

                    if (isNaN(newQuantity) newQuantity = 1;
                    if (newQuantity < 1) newQuantity = 1;

                    updateCartItem(id, newQuantity);
                });
            });

            function updateCartItem(id, quantity) {
                fetch('/update-cart', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        productId: id,
                        quantity: quantity
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.reload();
                    }
                });
            }

            function removeCartItem(id) {
                fetch('/remove-from-cart', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        productId: id
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
    @endpush
@endsection
