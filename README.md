# Finance Tracker

A full-stack web application for personal finance management — track income, 
expenses, budgets, and generate financial reports with real-time currency conversion.

# Live Demo
[Live Demo](https://finance-tracker-main-lu39je.free.laravel.cloud/)

# Test Account
- Email: alen1@gmail.com
- Password: alen

# Features
- Income & Expense tracking
- Dashboard with charts
- Budget tracking
- Currency converter with live exchange rates
- Financial reports
- Export data to CSV
- Authentication (login, register, forgot password/password reset)

# Tech Stack
- Laravel
- MySQL
- HTML/CSS
- JavaScript
- Chart.js

# How to run locally
1. Clone the repository
2. Run composer install
3. Run npm install && npm run dev
4. Copy .env.example to .env
5. Run php artisan key:generate
6. Add your Exchange Rate API key to .env
   - EXCHANGE_RATE_API_KEY={YOUR_API_KEY} from (https://www.exchangerate-api.com/)
7. Run php artisan migrate --seed
8. Run php artisan serve

# Screenshots of the app

<img width="1702" height="896" alt="Screenshot 2026-03-03 at 22 14 32" src="https://github.com/user-attachments/assets/3b6fae95-8f6e-4a4f-8a8a-f6a0b92aec0c" />
<img width="1693" height="896" alt="Screenshot 2026-03-03 at 22 14 53" src="https://github.com/user-attachments/assets/04916c95-6f15-41f2-bc2e-7ca7c4188e51" />
<img width="1697" height="894" alt="Screenshot 2026-03-03 at 22 15 04" src="https://github.com/user-attachments/assets/ed2b3ce3-9555-4525-872b-fda758a8ee8d" />
<img width="1700" height="892" alt="Screenshot 2026-03-05 at 17 34 58" src="https://github.com/user-attachments/assets/e4d3a2a6-8155-40c1-954e-baca4a0f3ad6" />