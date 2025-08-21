@extends('layout.app')
@section('app')
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Check Out</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Check Out</li>
            </ol>
        </div>
    </div>
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Billing Details</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('process-checkout') }}" method="POST" id="checkoutForm" class="needs-validation" novalidate>
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label">First name *</label>
                                        <input type="text" id="firstName" name="firstName" class="form-control @error('firstName') is-invalid @enderror"
                                            placeholder="Enter first name" value="{{ old('firstName') }}" required>
                                        @error('firstName')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label">Last name *</label>
                                        <input type="text" id="lastName" name="lastName" class="form-control @error('lastName') is-invalid @enderror"
                                            placeholder="Enter last name" value="{{ old('lastName') }}" required>
                                        @error('lastName')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Enter email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone *</label>
                                    <input type="tel" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                        placeholder="Enter phone number" value="{{ old('phone') }}" required>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="address" class="form-label">Address *</label>
                                    <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror"
                                        placeholder="Enter address" value="{{ old('address') }}" required>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>


                                {{-- <div class="mb-4">
                                    <label for="paymentMethod" class="form-label">Payment Method *</label>
                                    <select id="paymentMethod" name="paymentMethod" class="form-select @error('paymentMethod') is-invalid @enderror" required>
                                        <option value="">Select Payment Method</option>
                                        <option value="credit-card" {{ old('paymentMethod') == 'credit-card' ? 'selected' : '' }}>Credit Card</option>
                                        <option value="paypal" {{ old('paymentMethod') == 'paypal' ? 'selected' : '' }}>PayPal</option>
                                        <option value="bank-transfer" {{ old('paymentMethod') == 'bank-transfer' ? 'selected' : '' }}>Bank Transfer</option>
                                    </select>
                                    @error('paymentMethod')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>

                @if (count($cart) > 0)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">Order Summary</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        Products ({{ count($cart) }} items)
                                        <span>${{ number_format($total, 2) }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        Shipping
                                        <span>Free</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                        <div>
                                            <strong>Total amount</strong>
                                        </div>
                                        <span><strong>${{ number_format($total, 2) }}</strong></span>
                                    </li>
                                </ul>

                                <button type="submit" form="checkoutForm" class="btn btn-primary btn-lg btn-block w-100">
                                    <i class="fas fa-lock me-2"></i>Pay Now
                                </button>

                                {{-- <div class="mt-3">
                                    <p class="small text-muted mb-1">We accept:</p>
                                    <div class="d-flex">
                                        <img src="https://cdn.jsdelivr.net/gh/lipis/flag-icons/flags/4x3/us.svg" alt="Visa" height="24" class="me-2">
                                        <img src="https://cdn.jsdelivr.net/gh/lipis/flag-icons/flags/4x3/gb.svg" alt="Mastercard" height="24" class="me-2">
                                        <img src="https://cdn.jsdelivr.net/gh/lipis/flag-icons/flags/4x3/eu.svg" alt="PayPal" height="24">
                                    </div>
                                </div> --}}
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">Order Items</h5>
                            </div>
                            <div class="card-body">
                                @foreach($cart as $id => $item)
                                    <div class="d-flex mb-3 align-items-center">
                                        <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="rounded me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                        <div class="flex-grow-1">
                                            <h6 class="my-0">{{ $item['name'] }}</h6>
                                            <small class="text-muted">Qty: {{ $item['quantity'] }}</small>
                                        </div>
                                        <span class="text-muted">${{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                                    </div>
                                    @if(!$loop->last)
                                        <hr>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        // Form validation
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('checkoutForm');

            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            });
        });
    </script>
    @endpush
@endsection
