<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Expense;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class ReportController extends Controller
{
    public function reports()
    {
        $top5Expenses = Auth::user()->expenses()
            ->orderBy("amount", "desc")
            ->take(5)
            ->get();


        $top5ExpensesMonthly = Auth::user()->expenses()
            ->whereMonth("created_at", Carbon::now()->month)
            ->whereYear("created_at", Carbon::now()->year)
            ->orderBy("amount", "desc")
            ->take(5)
            ->get();

        $biggestExpenseToday = Auth::user()->expenses()
            ->whereDate("created_at", Carbon::today())
            ->orderBy("amount", "desc")
            ->first();

        $top5CategoryExpense = Auth::user()->expenses()
            ->selectRaw("expense_category_id, SUM(amount) as total")
            ->groupBy("expense_category_id")
            ->orderBy("total", "desc")
            ->take(5)
            ->get();
        



        return view("loggedin.reports", compact("top5Expenses", "top5ExpensesMonthly", "biggestExpenseToday", "top5CategoryExpense"));
    }
}
