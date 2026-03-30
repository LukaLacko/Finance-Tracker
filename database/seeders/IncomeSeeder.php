<?php

namespace Database\Seeders;

use App\Models\Income;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $income = new Income();
        $income->user_id = 1;
        $income->title = "Softwer Developer";
        $income->income_category_id = 1;
        $income->description = "This is some/your description for this salary. How you earnd it and all the details about the transaction!";
        $income->amount = 2000;
        $income->save();

        $income = new Income();
        $income->user_id = 2;
        $income->title = "Teacher";
        $income->income_category_id = 2;
        $income->amount = 1100;
        $income->save();

        $income = new Income();
        $income->user_id = 3;
        $income->title = "CEO";
        $income->income_category_id = 3;
        $income->amount = 2500;
        $income->save();

        $income = new Income();
        $income->user_id = 1;
        $income->title = "Software Developer";
        $income->income_category_id = 1;
        $income->amount = 1800;
        $income->description = "January salary for full-time software development work including completed features and bug fixes.";
        $income->created_at = '2026-01-05';
        $income->save();
        
        $income = new Income();
        $income->user_id = 1;
        $income->title = "Freelance Project";
        $income->income_category_id = 3;
        $income->amount = 900;
        $income->description = null;
        $income->created_at = '2026-02-10';
        $income->save();
        
        $income = new Income();
        $income->user_id = 1;
        $income->title = "Performance Bonus";
        $income->income_category_id = 2;
        $income->amount = 500;
        $income->description = "Quarterly performance bonus for exceeding project goals and delivering ahead of schedule.";
        $income->created_at = '2026-03-01';
        $income->save();
        
        $income = new Income();
        $income->user_id = 1;
        $income->title = "Dividends from Stocks";
        $income->income_category_id = 4;
        $income->amount = 200;
        $income->description = null;
        $income->created_at = '2026-04-15';
        $income->save();
        
        $income = new Income();
        $income->user_id = 1;
        $income->title = "Rental Income";
        $income->income_category_id = 6;
        $income->amount = 800;
        $income->description = "Collected monthly rent from tenant for residential property located downtown.";
        $income->created_at = '2026-05-01';
        $income->save();
        
        $income = new Income();
        $income->user_id = 1;
        $income->title = "Interest from Savings";
        $income->income_category_id = 5;
        $income->amount = 150;
        $income->description = null;
        $income->created_at = '2026-05-20';
        $income->save();
        
        $income = new Income();
        $income->user_id = 1;
        $income->title = "Side Hustle Project";
        $income->income_category_id = 3;
        $income->amount = 400;
        $income->description = "Completed a small freelance web development task for a local client.";
        $income->created_at = '2026-06-05';
        $income->save();
        
        $income = new Income();
        $income->user_id = 1;
        $income->title = "Government Support";
        $income->income_category_id = 8;
        $income->amount = 300;
        $income->description = null;
        $income->created_at = '2026-06-15';
        $income->save();
        
        $income = new Income();
        $income->user_id = 1;
        $income->title = "Selling Old Items";
        $income->income_category_id = 7;
        $income->amount = 250;
        $income->description = "Income from selling unused electronics and furniture online.";
        $income->created_at = '2026-07-01';
        $income->save();
        
        $income = new Income();
        $income->user_id = 1;
        $income->title = "Freelance Article Writing";
        $income->income_category_id = 3;
        $income->amount = 600;
        $income->description = null;
        $income->created_at = '2026-07-10';
        $income->save();
        
        $income = new Income();
        $income->user_id = 2;
        $income->title = "Teacher";
        $income->income_category_id = 1;
        $income->amount = 1100;
        $income->description = "January salary for full-time teaching including lectures and student mentoring.";
        $income->created_at = '2026-01-03';
        $income->save();
        
        $income = new Income();
        $income->user_id = 2;
        $income->title = "Private Lessons";
        $income->income_category_id = 3;
        $income->amount = 400;
        $income->description = null;
        $income->created_at = '2026-02-15';
        $income->save();
        
        $income = new Income();
        $income->user_id = 2;
        $income->title = "Annual Bonus";
        $income->income_category_id = 2;
        $income->amount = 600;
        $income->description = "End-of-year bonus for excellent performance and contribution to student success.";
        $income->created_at = '2026-03-20';
        $income->save();
        
        $income = new Income();
        $income->user_id = 2;
        $income->title = "Dividends";
        $income->income_category_id = 4;
        $income->amount = 180;
        $income->description = null;
        $income->created_at = '2026-04-10';
        $income->save();
        
        $income = new Income();
        $income->user_id = 2;
        $income->title = "Rental Payment Received";
        $income->income_category_id = 6;
        $income->amount = 700;
        $income->description = "Monthly rent collected from a long-term tenant.";
        $income->created_at = '2026-05-05';
        $income->save();
        
        $income = new Income();
        $income->user_id = 2;
        $income->title = "Interest from Bank";
        $income->income_category_id = 5;
        $income->amount = 120;
        $income->description = null;
        $income->created_at = '2026-05-25';
        $income->save();
        
        $income = new Income();
        $income->user_id = 2;
        $income->title = "Selling Old Laptop";
        $income->income_category_id = 7;
        $income->amount = 350;
        $income->description = "Sold old laptop online for extra cash.";
        $income->created_at = '2026-06-08';
        $income->save();
        
        $income = new Income();
        $income->user_id = 2;
        $income->title = "Government Support";
        $income->income_category_id = 8;
        $income->amount = 250;
        $income->description = null;
        $income->created_at = '2026-06-20';
        $income->save();
        
        $income = new Income();
        $income->user_id = 2;
        $income->title = "Freelance Tutoring";
        $income->income_category_id = 3;
        $income->amount = 500;
        $income->description = "Income from private tutoring sessions completed in July.";
        $income->created_at = '2026-07-12';
        $income->save();
        
        $income = new Income();
        $income->user_id = 2;
        $income->title = "Performance Bonus";
        $income->income_category_id = 2;
        $income->amount = 450;
        $income->description = null;
        $income->created_at = '2026-07-25';
        $income->save();
        
        $income = new Income();
        $income->user_id = 3;
        $income->title = "Marketing Manager";
        $income->income_category_id = 1;
        $income->amount = 1600;
        $income->description = "Salary for full-time marketing manager role including campaigns and reports.";
        $income->created_at = '2026-01-08';
        $income->save();
        
        $income = new Income();
        $income->user_id = 3;
        $income->title = "Consulting Project";
        $income->income_category_id = 3;
        $income->amount = 1200;
        $income->description = null;
        $income->created_at = '2026-02-12';
        $income->save();
        
        $income = new Income();
        $income->user_id = 3;
        $income->title = "Performance Bonus";
        $income->income_category_id = 2;
        $income->amount = 700;
        $income->description = "Quarterly bonus for achieving marketing KPIs ahead of schedule.";
        $income->created_at = '2026-03-05';
        $income->save();
        
        $income = new Income();
        $income->user_id = 3;
        $income->title = "Dividends from Shares";
        $income->income_category_id = 4;
        $income->amount = 220;
        $income->description = null;
        $income->created_at = '2026-04-15';
        $income->save();
        
        $income = new Income();
        $income->user_id = 3;
        $income->title = "Interest Earnings";
        $income->income_category_id = 5;
        $income->amount = 130;
        $income->description = "Interest earned from savings accounts and fixed deposits.";
        $income->created_at = '2026-05-10';
        $income->save();
        
        $income = new Income();
        $income->user_id = 3;
        $income->title = "Rental Income";
        $income->income_category_id = 6;
        $income->amount = 750;
        $income->description = null;
        $income->created_at = '2026-05-25';
        $income->save();
        
        $income = new Income();
        $income->user_id = 3;
        $income->title = "Freelance Consulting";
        $income->income_category_id = 3;
        $income->amount = 950;
        $income->description = "Income from providing freelance marketing consulting to small businesses.";
        $income->created_at = '2026-06-05';
        $income->save();
        
        $income = new Income();
        $income->user_id = 3;
        $income->title = "Selling Old Equipment";
        $income->income_category_id = 7;
        $income->amount = 400;
        $income->description = null;
        $income->created_at = '2026-06-18';
        $income->save();
        
        $income = new Income();
        $income->user_id = 3;
        $income->title = "Government Support";
        $income->income_category_id = 8;
        $income->amount = 300;
        $income->description = "Monthly government allowance received for personal support programs.";
        $income->created_at = '2026-07-02';
        $income->save();
        
        $income = new Income();
        $income->user_id = 3;
        $income->title = "Quarterly Bonus";
        $income->income_category_id = 2;
        $income->amount = 600;
        $income->description = null;
        $income->created_at = '2026-07-20';
        $income->save();
        
        $income = new Income();
        $income->user_id = 4;
        $income->title = "Call Center Salary";
        $income->income_category_id = 1;
        $income->amount = 950;
        $income->description = "January salary for call center work including customer support tasks.";
        $income->created_at = '2026-01-12';
        $income->save();
        
        $income = new Income();
        $income->user_id = 4;
        $income->title = "Overtime Pay";
        $income->income_category_id = 2;
        $income->amount = 220;
        $income->description = null;
        $income->created_at = '2026-02-20';
        $income->save();
        
        $income = new Income();
        $income->user_id = 4;
        $income->title = "Freelance Task";
        $income->income_category_id = 3;
        $income->amount = 480;
        $income->description = "Payment for completing a small freelance data entry task.";
        $income->created_at = '2026-03-15';
        $income->save();
        
        $income = new Income();
        $income->user_id = 4;
        $income->title = "Dividends";
        $income->income_category_id = 4;
        $income->amount = 180;
        $income->description = null;
        $income->created_at = '2026-04-10';
        $income->save();
        
        $income = new Income();
        $income->user_id = 4;
        $income->title = "Rental Payment";
        $income->income_category_id = 6;
        $income->amount = 700;
        $income->description = "Received monthly rent from tenant for residential property.";
        $income->created_at = '2026-05-05';
        $income->save();
        
        $income = new Income();
        $income->user_id = 4;
        $income->title = "Interest from Bank";
        $income->income_category_id = 5;
        $income->amount = 120;
        $income->description = null;
        $income->created_at = '2026-05-25';
        $income->save();
        
        $income = new Income();
        $income->user_id = 4;
        $income->title = "Government Support";
        $income->income_category_id = 8;
        $income->amount = 250;
        $income->description = "Support received from government program for individuals with partial income coverage.";
        $income->created_at = '2026-06-20';
        $income->save();
        
        $income = new Income();
        $income->user_id = 4;
        $income->title = "Selling Old Chair";
        $income->income_category_id = 7;
        $income->amount = 180;
        $income->description = null;
        $income->created_at = '2026-06-28';
        $income->save();
        
        $income = new Income();
        $income->user_id = 4;
        $income->title = "Freelance Survey Work";
        $income->income_category_id = 3;
        $income->amount = 350;
        $income->description = "Income from completing paid online surveys for market research clients.";
        $income->created_at = '2026-07-12';
        $income->save();
        
        $income = new Income();
        $income->user_id = 4;
        $income->title = "Quarterly Bonus";
        $income->income_category_id = 2;
        $income->amount = 500;
        $income->description = null;
        $income->created_at = '2026-07-25';
        $income->save();
        


        $income = new Income();
        $income->user_id = 1;
        $income->title = "Freelance Website Design";
        $income->income_category_id = 3;
        $income->amount = 750;
        $income->description = "Payment received for designing and delivering a client website including homepage and contact page.";
        $income->created_at = '2026-08-05';
        $income->save();
        
        $income = new Income();
        $income->user_id = 1;
        $income->title = "Bonus for Project Completion";
        $income->income_category_id = 2;
        $income->amount = 300;
        $income->description = null;
        $income->created_at = '2026-08-15';
        $income->save();
        
        $income = new Income();
        $income->user_id = 2;
        $income->title = "Private Tutoring";
        $income->income_category_id = 3;
        $income->amount = 450;
        $income->description = "Earnings from extra private tutoring sessions in mathematics for two students.";
        $income->created_at = '2026-08-08';
        $income->save();
        
        $income = new Income();
        $income->user_id = 2;
        $income->title = "Quarterly Dividend";
        $income->income_category_id = 4;
        $income->amount = 190;
        $income->description = null;
        $income->created_at = '2026-08-20';
        $income->save();
        
        $income = new Income();
        $income->user_id = 3;
        $income->title = "Freelance Marketing Report";
        $income->income_category_id = 3;
        $income->amount = 650;
        $income->description = "Payment for creating a detailed marketing report for a small business client.";
        $income->created_at = '2026-08-12';
        $income->save();
        
        $income = new Income();
        $income->user_id = 3;
        $income->title = "Bonus for Campaign Success";
        $income->income_category_id = 2;
        $income->amount = 500;
        $income->description = null;
        $income->created_at = '2026-08-22';
        $income->save();
        
        $income = new Income();
        $income->user_id = 4;
        $income->title = "Selling Old Printer";
        $income->income_category_id = 7;
        $income->amount = 120;
        $income->description = "Sold an old office printer online to free up space and generate extra income.";
        $income->created_at = '2026-08-10';
        $income->save();
        
        $income = new Income();
        $income->user_id = 4;
        $income->title = "Government Subsidy";
        $income->income_category_id = 8;
        $income->amount = 270;
        $income->description = null;
        $income->created_at = '2026-08-18';
        $income->save();
        
        $income = new Income();
        $income->user_id = 1;
        $income->title = "Side Project Earnings";
        $income->income_category_id = 3;
        $income->amount = 500;
        $income->description = "Income from a small freelance side project completed in August.";
        $income->created_at = '2026-08-25';
        $income->save();
        
        $income = new Income();
        $income->user_id = 2;
        $income->title = "Rental Payment Received";
        $income->income_category_id = 6;
        $income->amount = 720;
        $income->description = null;
        $income->created_at = '2026-08-30';
        $income->save();
        
        
        
    }
}