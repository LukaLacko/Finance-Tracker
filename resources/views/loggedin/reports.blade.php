@extends("layout.app")

@section('title') Reports @endsection

@section('content')
<div class="container border rounded-4 py-4 shadow-lg">
    <div class="d-flex align-items-center mb-4">
        <div class="bg-primary rounded-3 p-2 me-3 text-white">
            <i class="bi bi-graph-up"></i> 
        </div>
        <div class="d-flex justify-content-between w-100">
            <h2 class="fw-bold mb-0">Financial Insights</h2>
            <a href="{{ route("loggedin.dashboard") }}" class="btn btn-outline-primary">Dashboard</a>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-header bg-white border-0 pt-4 px-4">
                    <h5 class="fw-bold text-dark mb-0">Top 5 Expenses (All Time)</h5>
                </div>
                <div class="card-body px-4 pb-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="text-muted small text-uppercase">
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th class="text-end">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($top5Expenses as $expense)
                                    <tr>
                                        <td class="fw-medium">{{ $expense->title }}</td>
                                        <td><span class="badge bg-light text-dark rounded-pill border">{{ $expense->category->name }}</span></td>
                                        <td class="text-end fw-bold text-danger">-${{ number_format($expense->amount, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 bg-dark text-white h-100">
                <div class="card-body p-4 d-flex flex-column justify-content-center text-center">
                    <h6 class="text-uppercase opacity-75 small fw-bold mb-3">Biggest Expense Today</h6>
                    @if($biggestExpenseToday)
                        <h2 class="display-5 fw-bold mb-1">${{ number_format($biggestExpenseToday->amount, 2) }}</h2>
                        <p class="mb-0 opacity-75">{{ $biggestExpenseToday->title }} • <span class="badge bg-primary">{{ $biggestExpenseToday->category->name }}</span></p>
                    @else
                        <h2 class="display-5 fw-bold mb-0">$0.00</h2>
                        <p class="opacity-50">No expenses yet today</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-header bg-white border-0 pt-4 px-4">
                    <h5 class="fw-bold text-dark mb-0">Top 5 Expenses This Month</h5>
                </div>
                <div class="card-body px-4 pb-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="text-muted small text-uppercase">
                                <tr>
                                    <th>Title</th>
                                    <th class="text-end">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($top5ExpensesMonthly as $expenseMonthly)
                                    <tr>
                                        <td>
                                            <div class="fw-medium">{{ $expenseMonthly->title }}</div>
                                            <small class="text-muted">{{ $expenseMonthly->category->name }}</small>
                                        </td>
                                        <td class="text-end fw-bold text-danger">-${{ number_format($expenseMonthly->amount, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-header bg-white border-0 pt-4 px-4">
                    <h5 class="fw-bold text-dark mb-0">Spending by Category</h5>
                </div>
                <div class="card-body px-4 pb-4">
                    <ul class="list-group list-group-flush">
                        @foreach ($top5CategoryExpense as $categoryExpense)
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-3 border-bottom">
                                <span class="fw-medium">{{ $categoryExpense->category->name }}</span>
                                <span class="fw-bold text-danger">-${{ number_format($categoryExpense->total, 2) }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection