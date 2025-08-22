@extends('layout.app')
@section('app')
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Order Confirmation</h1>
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

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-lg">
                    <div class="card-header bg-primary text-white py-3" >
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle fa-2x me-3"></i>
                            <div>
                                <h4 class="mb-0">Order Confirmed Successfully!</h4>
                                <p class="mb-0">Thank you for your purchase</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <!-- Order Summary -->
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <div class="border-end-md pe-md-4">
                                    <h5 class="mb-3"><i class="fas fa-receipt me-2 text-primary"></i>Order Information</h5>
                                    <table class="table table-borderless">
                                        <tr>
                                            <th width="120">Order ID:</th>
                                            <td>#{{ $order['order_number'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Date:</th>
                                            <td>{{ \Carbon\Carbon::parse($order['created_at'])->format('F j, Y, g:i a') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status:</th>
                                            <td><span class="badge bg-success">Confirmed</span></td>
                                        </tr>
                                        <tr>
                                            <th>Total Amount:</th>
                                            <td class="fw-bold">${{ number_format($order['total_amount'], 2) }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ps-md-4">
                                    <h5 class="mb-3"><i class="fas fa-user me-2 text-primary"></i>Customer Information</h5>
                                    <table class="table table-borderless">
                                        <tr>
                                            <th width="120">Name:</th>
                                            <td>{{ $order['customer']['first_name'] }} {{ $order['customer']['last_name'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email:</th>
                                            <td>{{ $order['customer']['email'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone:</th>
                                            <td>{{ $order['customer']['phone'] ?? 'Not provided' }}</td>
                                        </tr>
                                         <tr>
                                            <th>Address:</th>
                                            <td>{{ $order['customer']['address'] ?? 'Not provided' }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>



                        <!-- Order Items -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <h5 class="mb-3"><i class="fas fa-shopping-bag me-2 text-primary"></i>Order Items</h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Product</th>
                                                <th class="text-center">Quantity</th>
                                                <th class="text-end">Price</th>
                                                <th class="text-end">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($order['items'] as $id => $item)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="img-fluid rounded" style="width: 60px; height: 60px; object-fit: cover;">
                                                            <div class="ms-3">
                                                                <h6 class="mb-0">{{ $item['name'] }}</h6>
                                                                @if(isset($item['description']))
                                                                    <small class="text-muted">{{ Str::limit($item['description'], 50) }}</small>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">{{ $item['quantity'] }}</td>
                                                    <td class="text-end">${{ number_format($item['price'], 2) }}</td>
                                                    <td class="text-end">${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" class="text-end"><strong>Subtotal:</strong></td>
                                                <td class="text-end">${{ number_format($order['subtotal'], 2) }}</td>
                                            </tr>

                                            <tr>
                                                <td colspan="3" class="text-end"><strong>Total:</strong></td>
                                                <td class="text-end"><strong>${{ number_format($order['total_amount'], 2) }}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Next Steps -->


                        <!-- Action Buttons -->
                        <div class="d-flex justify-content-between mt-5">
                            <a href="{{ url('/shop') }}" class="btn btn-outline-primary">
                                <i class="fas fa-home me-2"></i>Continue Shopping
                            </a>
                            <div>
                                <button onclick="window.print()" class="btn btn-outline-secondary me-2">
                                    <i class="fas fa-print me-2"></i>Print Receipt
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
