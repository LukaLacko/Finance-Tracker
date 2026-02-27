@extends("layout.app")

@section("title") Exchange Calculator @endsection

@section("content")

<style>
    body {
        background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("/img/back-img.jpeg");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        min-height: 100vh;
    }
    .glass-card {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            
            <div class="d-flex justify-content-end mb-3">

            </div>

            <div class="card glass-card shadow-lg rounded-4 border-0">
                <div class="card-header rounded-top-4 py-3 text-white" style="background: linear-gradient(90deg, #00d2ff 0%, #3a47d5 100%)">
                    <h4 class="text-center mb-0 fw-bold">
                        <i class="bi bi-currency-exchange me-2"></i>Currency Converter
                    </h4>
                </div>

                <div class="card-body p-4 p-md-5">
                    <form action="{{ route('exchange.calculate') }}" method="post">
                        @csrf
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small text-muted text-uppercase fw-bold">From</label>
                                <select name="from" id="from" class="form-select border-0 shadow-sm p-3 rounded-3">
                                    <option value="USD" selected>USD 🇺🇸</option>
                                    <option value="EUR">EUR 🇪🇺</option>
                                    <option value="RSD">RSD 🇷🇸</option>
                                    <option value="CHF">CHF 🇨🇭</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label small text-muted text-uppercase fw-bold">To</label>
                                <select name="to" id="to" class="form-select border-0 shadow-sm p-3 rounded-3">
                                    <option value="USD">USD 🇺🇸</option>
                                    <option value="EUR" selected>EUR 🇪🇺</option>
                                    <option value="RSD">RSD 🇷🇸</option>
                                    <option value="CHF">CHF 🇨🇭</option>                    
                                </select>
                            </div>

                            <div class="col-12 mt-4">
                                <label class="form-label small text-muted text-uppercase fw-bold ms-1">Amount to Convert</label>
                                <div class="input-group shadow-sm rounded-3 overflow-hidden border"> 
                                    <span class="input-group-text bg-white border-0 pe-0">
                                        <i class="bi bi-cash-stack text-primary"></i>
                                    </span>
                                    <input type="number" 
                                           class="form-control border-0 p-3 shadow-none" 
                                           name="amount" 
                                           step="0.01" 
                                           value="1" 
                                           placeholder="0.00">
                                </div>
                            </div>
                        </div>

                        @if(session('result'))
                        <div class="alert bg-primary bg-opacity-10 border-0 text-center mt-5 p-4 rounded-4 shadow-sm animate__animated animate__fadeIn">
                            <small class="text-primary text-uppercase fw-bold d-block mb-1">Result</small>
                            <h2 class="fw-bold text-primary mb-0">
                                {{ session('amount') }} {{ session('from') }} 
                                <i class="bi bi-arrow-right mx-2 small"></i>
                                {{ session('result') }} {{ session('to') }}
                            </h2>
                        </div>
                        @endif

                        <div class="d-grid gap-2 mt-5">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm py-3 fw-bold">
                                Convert Now
                            </button>
                            <a href="{{ route('loggedin.dashboard') }}" class="btn btn-light btn-sm rounded-pill px-3 shadow-sm text-secondar mt-2">
                                <i class="bi bi-house-door me-1"></i> Dashboard
                            </a>
                        </div>

                    </form>
                </div>
            </div>

            <p class="text-center text-white-50 mt-4 small">
                <i class="bi bi-info-circle me-1"></i> Rates are updated in real-time.
            </p>
        </div>
    </div>
</div>

@endsection