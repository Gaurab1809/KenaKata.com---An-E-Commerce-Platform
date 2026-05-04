<!-- Logo on top -->
<p align="center">
  <img src="KenaKata_logo.png" alt="KenaKata Logo" width="600"/>
</p>

<!-- Title centered -->
<h1 align="center">
  <span style="color:blue; font-size:36px; font-weight:bold;">🛒 KenaKata.com – An E-Commerce Platform</span>
</h1>

<h3 align="center">
  <b style="color:purple;">💻 A Full-Featured Laravel-Based E-Commerce Web Application</b>
</h3>

<p align="center">
  <img src="https://img.shields.io/badge/Platform-Web-blue?style=for-the-badge">
  <img src="https://img.shields.io/badge/Frontend-Blade%20%7C%20Vue-green?style=for-the-badge">
  <img src="https://img.shields.io/badge/Backend-Laravel%2010-orange?style=for-the-badge">
  <img src="https://img.shields.io/badge/Database-MySQL-brightgreen?style=for-the-badge">
  <img src="https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=for-the-badge&logo=php&logoColor=white">
  <img src="https://img.shields.io/badge/License-MIT-yellow?style=for-the-badge">
  <img src="https://img.shields.io/badge/Currency-BDT%20Taka-red?style=for-the-badge">
  <img src="https://img.shields.io/badge/Tests-PHPUnit-9B59B6?style=for-the-badge">
</p>

<p align="center">
  <a href="#-overview">Overview</a> •
  <a href="#-introduction">Introduction</a> •
  <a href="#-system-modules">Modules</a> •
  <a href="#-system-architecture">Architecture</a> •
  <a href="#-technology-stack">Tech Stack</a> •
  <a href="#-software-architecture--design-principles">Design Principles</a> •
  <a href="#-database-design">Database</a> •
  <a href="#-project-structure">Project Structure</a> •
  <a href="#-installation">Installation</a> •
  <a href="#-currency-configuration">Currency</a> •
  <a href="#-testing">Testing</a> •
  <a href="#-future-improvements">Future Work</a> •
  <a href="#-license">License</a> •
  <a href="#-author">Author</a>
</p>

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- Overview Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=📌%20Overview&fontSize=32&width=1200&height=130&color=0:9D50BB,100:6E48AA" width="100%">

**KenaKata.com** is a comprehensive, production-grade **e-commerce web platform** built with Laravel 10 (PHP 8.1+) that enables users to browse products, manage carts, place orders, and process secure payments — all within a single, unified ecosystem.

The platform includes a complete **admin panel** for product, category, user, and order management, and is engineered from the ground up following modern software engineering practices including MVC, SOLID principles, OOP, and recognized design patterns.

The application uses **Bangladeshi Taka (BDT)** as its native currency and ships with a flexible, centralized currency configuration system that supports future multi-currency expansion.

**Keywords:** E-commerce, Laravel 10, MVC, Blade Templates, Vue.js, MySQL, Eloquent ORM, PayPal, Pusher, OOP, Design Patterns, SOLID Principles, PHPUnit, BDT.

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- Introduction Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=📖%20Introduction&fontSize=32&width=1200&height=130&color=0:9D50BB,100:6E48AA" width="100%">

In today's rapidly evolving online retail landscape, users demand a platform that is secure, scalable, intuitive, and fast. **KenaKata.com** was built to meet these demands end-to-end — from a rich customer-facing storefront to a powerful administrative backend.

**KenaKata.com addresses these needs by offering:**

- 🌐 A unified e-commerce ecosystem for buyers and admins  
- 🛒 Full product browsing, filtering, and cart management  
- 💳 Secure checkout with PayPal integration and Cash on Delivery  
- 📊 A complete admin dashboard with analytics, reporting, and order tracking  
- 📄 PDF invoice generation for every order  
- 🔔 Real-time notifications powered by Pusher  
- 📧 Automated email notifications via the Observer pattern  
- 🏷️ Native BDT (Taka) currency with a fully configurable currency system  
- 🗂️ Integrated file manager for media uploads  

The platform maintains a clean separation of concerns between presentation, business logic, and data access — ensuring long-term maintainability and scalability.

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- System Modules Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=🏗️%20System+Modules&fontSize=32&width=1200&height=130&color=0:FF416C,100:FF4B2B" width="100%">

### 👤 User / Customer Features

| Feature | Description |
|---|---|
| 🛍️ Product Browsing | Browse all products with category-based filtering, search, and price range sliders |
| 🔍 Product Detail | Full product detail pages with images, descriptions, stock status, and pricing in Taka |
| 🛒 Cart Management | Add, update, and remove items; persistent cart state before checkout |
| ❤️ Wishlist | Save favourite products for later purchase |
| 💳 Secure Checkout | Multi-step checkout with address and payment selection |
| 💰 Payment Options | PayPal gateway integration and Cash on Delivery (COD) support |
| 📦 Order Tracking | Real-time order status tracking with event-driven status updates |
| 🧾 Invoice Download | Downloadable PDF invoices for every completed order (DomPDF) |
| 🔐 Authentication | Registration, login, email verification, and OAuth-based social login via Laravel Socialite |
| 🔔 Notifications | Real-time push notifications via Pusher |
| 📰 Newsletter | Newsletter subscription support (Spatie Laravel Newsletter) |

### 🛠️ Admin Features

| Feature | Description |
|---|---|
| 📊 Dashboard | Analytics overview with revenue charts, order summaries, and user statistics |
| 📦 Product Management | Full CRUD for products — including images, pricing, stock, and categories |
| 🗂️ Category Management | Create, update, and organize product categories |
| 👥 User Management | View, manage, and control user accounts and roles |
| 📋 Order Management | View all orders, update statuses, and generate PDF reports |
| 🚚 Shipping Management | Configure shipping rules and rates |
| 🗃️ File Manager | Integrated media/file management (UniSharp Laravel Filemanager) |
| 📈 Reporting | Revenue analytics with currency-formatted charts and tables |

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- Architecture Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=🏗️%20System+Architecture&fontSize=32&width=1200&height=130&color=0:00F260,100:0575E6" width="100%">

The platform is built on the **Model-View-Controller (MVC)** pattern, extended with dedicated **Service** and **Repository** layers for clean separation of concerns.

| Layer | Role |
|---|---|
| **Model** | Represents data entities (`User`, `Product`, `Order`, `Cart`, `Category`) and their Eloquent relationships |
| **View** | Presentation layer built with Blade templates, Bootstrap, and Vue.js components |
| **Controller** | Receives HTTP requests, validates input, delegates to the Service layer, and returns responses |
| **Service Layer** | Houses all business logic — completely decoupled from controllers and repositories |
| **Repository Layer** | Abstracts all Eloquent/database queries, making the data layer swappable and testable |

**Request Lifecycle (MVC + Service + Repository):**

```
Browser Request
      │
      ▼
   Router (routes/web.php)
      │
      ▼
  Controller  ──── validates input (FormRequest)
      │
      ▼
 Service Layer ──── applies business logic
      │
      ▼
Repository Layer ──── queries database via Eloquent ORM
      │
      ▼
   Model / Database (MySQL)
      │
      ▼
   Response ──── returned to Blade View / JSON
```

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- Technology Stack Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=⚙️%20Technology+Stack&fontSize=32&width=1200&height=130&color=0:FC5C7D,100:FF416C" width="100%">

### Core Stack

| Layer | Technology | Version |
|---|---|---|
| Backend Framework | Laravel | ^10.0 |
| Language | PHP | ^8.1 |
| Frontend Templates | Laravel Blade | — |
| JS Framework | Vue.js | (component layer) |
| CSS Framework | Bootstrap | (via Laravel UI) |
| Database | MySQL | — |
| ORM | Eloquent ORM | (built-in Laravel) |
| Build Tool | Laravel Mix / Webpack | — |

### Key Packages & Integrations

| Package | Purpose |
|---|---|
| `laravel/sanctum` ^3.2 | API token authentication |
| `laravel/socialite` ^5.6 | OAuth social login (Google, etc.) |
| `laravel/ui` ^4.2 | Auth scaffolding (Bootstrap UI) |
| `srmklive/paypal` ^3.0 | PayPal payment gateway integration |
| `pusher/pusher-php-server` ^7.2 | Real-time event broadcasting |
| `barryvdh/laravel-dompdf` ^2.0 | PDF invoice and report generation |
| `unisharp/laravel-filemanager` ^2.6 | Admin file/media manager |
| `spatie/laravel-newsletter` ^5.1 | Newsletter subscription management |
| `guzzlehttp/guzzle` ^7.2 | HTTP client for external API calls |

### Development & Testing Tools

| Package | Purpose |
|---|---|
| `phpunit/phpunit` ^10.0 | Unit & feature testing |
| `fakerphp/faker` ^1.9.1 | Test data generation (Factory pattern) |
| `mockery/mockery` ^1.4.4 | Mocking for unit tests |
| `laravel/sail` ^1.18 | Docker-based local dev environment |
| `laravel/pint` ^1.0 | PHP code style fixer |
| `spatie/laravel-ignition` ^2.0 | Error page and debugging |

### Languages Breakdown

```
Blade   ████████████████████████████░░   69.3%
PHP     ████████████░░░░░░░░░░░░░░░░░░   30.6%
Vue     ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░    0.1%
```

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- Software Architecture & Design Principles Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=Software%20Architecture%20and%20Design%20Principles&fontSize=28&width=1200&height=130&color=0:6A82FB,100:FC5C7D" width="100%">

### Object-Oriented Programming (OOP) Principles

KenaKata.com leverages all four pillars of **OOP** to ensure a modular, maintainable, and scalable architecture:

- **Encapsulation:**  
  All critical data in models like `User`, `Product`, `Order`, and `Cart` are **protected** and accessed only via getter and setter methods, preventing accidental data manipulation and promoting safe interaction with objects.

- **Abstraction:**  
  Interfaces such as `RepositoryInterface` and `ServiceInterface` hide implementation details from consumers. Controllers interact with abstractions rather than concrete classes, reducing coupling and enhancing flexibility.

- **Inheritance:**  
  Base classes provided by Laravel — such as the base `Controller` and `Model` — are extended to create specific controllers (`ProductController`, `OrderController`) and models. This enforces a consistent structure and enables code reuse across the application.

- **Polymorphism:**  
  The system supports multiple **payment strategies** (`PayPalPayment`, `StripePayment`, `CashOnDelivery`) all implementing a common `PaymentInterface`. This allows payment methods to be switched or extended at runtime without modifying existing code.

---

### Design Patterns Implemented

KenaKata.com applies widely recognized **software design patterns** to solve recurring problems in a clean and scalable way:

| Pattern | Application |
|---|---|
| **Strategy Pattern** | Payment processing and dynamic pricing — behavior switched at runtime without modifying client code |
| **Repository Pattern** | Abstracts all data access logic from business logic, making the system resilient to database or ORM changes |
| **Service Layer Pattern** | Encapsulates complex business logic separate from controllers and repositories, keeping controllers lightweight |
| **Observer Pattern** | Drives event-based notifications — e.g., order confirmation emails, stock update alerts on order placement |
| **Factory Pattern** | Generates consistent test data and seeder objects via `fakerphp/faker` and Laravel model factories |
| **Adapter Pattern** | Bridges third-party integrations (PayPal, Pusher) with the application via a unified interface |

---

### SOLID Principles

KenaKata.com rigorously follows all five **SOLID principles** to produce a codebase that is maintainable, extensible, and resistant to regression:

- **S – Single Responsibility Principle (SRP):**  
  Each class has exactly one reason to change. `ProductService` handles only product business logic; `OrderService` is solely responsible for order processing. Controllers are thin — they delegate immediately to service classes.

- **O – Open/Closed Principle (OCP):**  
  Classes and modules are **open for extension, closed for modification**. New payment gateways or discount strategies are added via the Strategy pattern without touching existing classes, minimising the risk of regressions.

- **L – Liskov Substitution Principle (LSP):**  
  All concrete implementations of an interface — e.g., `PayPalGateway`, `StripeGateway` — are interchangeable wherever their parent interface (`PaymentGateway`) is expected, without altering program correctness.

- **I – Interface Segregation Principle (ISP):**  
  Interfaces are purpose-specific and granular. No class is forced to implement methods it does not use. Separate interfaces exist for services, repositories, and payment strategies.

- **D – Dependency Inversion Principle (DIP):**  
  High-level modules (controllers) depend on **abstractions** (service interfaces), not concrete implementations. Laravel's service container handles dependency injection, enabling easy swapping of implementations and full testability.

By adhering to SOLID principles, KenaKata.com achieves a **robust, flexible, and modular architecture**, making future enhancements and maintenance seamless.

---

### Design by Contract (DbC)

The system implements **Design by Contract** to guarantee reliability and correctness at every layer:

- **Preconditions:**  
  Input validation is enforced at the controller boundary using Laravel's Form Request classes, ensuring only validated, well-formed data ever reaches the service and repository layers.

- **Postconditions:**  
  PHPUnit tests verify that operations such as order creation, payment processing, cart calculations, and invoice generation produce the expected outcomes and state changes.

- **Interface Contracts:**  
  All interfaces define clear behavioural contracts — any class that implements an interface is guaranteed to honour the expected API, ensuring consistency across all implementations.

---

By combining **OOP, Design Patterns, SOLID, and DbC**, KenaKata.com achieves a **high-quality, maintainable, and professional software architecture** suitable for real-world production use.

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- Database Design Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=Database%20Design&fontSize=32&width=1200&height=130&color=0:00F260,100:0575E6" width="100%">

The database of **KenaKata.com** is designed for **data integrity, efficiency, and scalability**, following best practices of relational database design.

**Design Principles:**

- **Normalized Structure:** The schema is normalized to reduce redundancy and ensure data consistency across all tables.  
- **Foreign Key Constraints:** All entity relationships are enforced at the database level via foreign keys, maintaining referential integrity.  
- **Naming Conventions:** All tables and columns use `snake_case` naming for consistency and readability.  
- **Primary Keys:** Auto-incremented integer primary keys are used for all entities.  
- **Indexing:** Key columns used in `WHERE` clauses and joins are indexed for query performance.  

---

### Core Entities

| Entity | Description |
|---|---|
| **users** | Stores user credentials, roles (`admin` / `customer`), and profile information |
| **products** | Product name, description, price, stock quantity, images, and category association |
| **categories** | Hierarchical product categorisation |
| **orders** | Order transactions, statuses, shipping details, and user associations |
| **order_items** | Line items per order with product reference, quantity, and unit price |
| **cart** | Temporary session-based user cart selections before checkout |
| **wishlist** | Persisted user wishlist items |
| **shipping** | Shipping methods, zones, and rates |

---

### Entity Relationships

```
users ──────────< orders ──────────< order_items >────── products
                                                              │
categories ───────────────────────────────────────────────< products
users ──────────< cart_items >─────────────────────────── products
users ──────────< wishlist_items >─────────────────────── products
```

- **One-to-Many:** `User` → `Orders`, `Category` → `Products`, `Order` → `Order Items`  
- **Many-to-Many:** `Products` ↔ `Categories` (via pivot table)  
- **One-to-Many:** `User` → `Cart Items`, `User` → `Wishlist Items`  

---

### ORM & Querying

The application uses Laravel's **Eloquent ORM** for all database interaction:

- Fluent, expressive query builder with relationship eager loading (`with()`) to prevent N+1 problems  
- Full CRUD via Eloquent models with mass-assignment protection via `$fillable` / `$guarded`  
- Relationship methods (`hasMany`, `belongsTo`, `belongsToMany`, `morphTo`) for all entity associations  
- Query scopes for reusable, chainable filter logic  

---

### Advanced Database Features

| Feature | Implementation |
|---|---|
| **SQL Joins** | `INNER JOIN` and `LEFT JOIN` used for order-product-user reporting queries |
| **Stored Procedures** | Used for complex order processing and bulk data operations for performance |
| **Database Triggers** | Auto-decrement stock quantity on order placement; auto-update order status history |
| **Optimized Indexing** | Indexes on `user_id`, `product_id`, `order_id`, `status`, and `created_at` for query performance |
| **Migrations** | All schema changes tracked via Laravel migrations for version-controlled database evolution |
| **Seeders & Factories** | Faker-powered factories seed consistent test data for all core entities |

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- Project Structure Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=📁%20Project+Structure&fontSize=32&width=1200&height=130&color=0:9D50BB,100:6E48AA" width="100%">

```
KenaKata.com-An-E-Commerce-Platform/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/         # Thin controllers (User & Admin)
│   │   ├── Middleware/          # Auth, role & CORS middleware
│   │   ├── Requests/            # Form Request validation (preconditions)
│   │   └── Helpers.php          # Global helper functions (formatCurrency, etc.)
│   ├── Models/                  # Eloquent models (User, Product, Order, Cart…)
│   ├── Services/                # Business logic layer
│   ├── Repositories/            # Data access abstraction layer
│   ├── Interfaces/              # RepositoryInterface, ServiceInterface, PaymentInterface
│   ├── Observers/               # Observer pattern — event listeners for email/notifications
│   ├── Payments/                # Payment strategy implementations (PayPal, COD)
│   └── Providers/               # Service providers and dependency binding
│
├── config/
│   ├── currency.php             # Centralized currency configuration (BDT)
│   └── ...                      # Laravel standard configs
│
├── database/
│   ├── migrations/              # Version-controlled schema definitions
│   ├── seeders/                 # Database seeders
│   └── factories/               # Faker-based model factories (Factory pattern)
│
├── resources/
│   ├── views/                   # Blade templates (frontend & admin)
│   │   ├── frontend/            # Customer-facing storefront views
│   │   ├── admin/               # Admin dashboard views
│   │   └── layouts/             # Shared layout templates
│   ├── js/                      # Vue.js components & JavaScript (cart, price sliders)
│   └── css/                     # Stylesheets
│
├── routes/
│   ├── web.php                  # Web routes (storefront + admin)
│   └── api.php                  # API routes (Sanctum-protected)
│
├── tests/
│   ├── Unit/                    # Unit tests (PHPUnit)
│   └── Feature/                 # Feature/integration tests
│
├── .github/workflows/           # GitHub Actions CI workflows
├── .env.example                 # Environment configuration template
├── composer.json                # PHP dependencies
├── package.json                 # Node.js dependencies
├── webpack.mix.js               # Laravel Mix asset bundling
├── phpunit.xml                  # PHPUnit configuration
├── CURRENCY_UPDATE.md           # Currency migration documentation
└── README.md                    # This file
```

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- Installation Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=📦%20Installation&fontSize=32&width=1200&height=130&color=0:FF416C,100:FF4B2B" width="100%">

### Prerequisites

Before you begin, ensure you have the following installed:

- **PHP** >= 8.1  
- **Composer** >= 2.x  
- **Node.js** >= 16.x and **npm**  
- **MySQL** >= 5.7 or **MariaDB** >= 10.3  
- A local server environment (XAMPP, Laragon, Laravel Sail / Docker)

---

### 1. Clone the Repository

```bash
git clone https://github.com/Gaurab1809/KenaKata.com-An-E-Commerce-Platform.git
cd KenaKata.com-An-E-Commerce-Platform
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node.js Dependencies

```bash
npm install
```

### 4. Setup Environment File

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Configure the Database

Edit the `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kenakata
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Configure PayPal (Optional)

Add your PayPal sandbox/live credentials to `.env`:

```env
PAYPAL_MODE=sandbox
PAYPAL_SANDBOX_CLIENT_ID=your_client_id
PAYPAL_SANDBOX_CLIENT_SECRET=your_client_secret
```

### 7. Configure Pusher for Real-Time Notifications (Optional)

```env
PUSHER_APP_ID=your_app_id
PUSHER_APP_KEY=your_app_key
PUSHER_APP_SECRET=your_app_secret
PUSHER_APP_CLUSTER=mt1

BROADCAST_DRIVER=pusher
```

### 8. Configure Currency (Optional)

Currency defaults to BDT (Taka). Override in `.env` if needed:

```env
CURRENCY_DEFAULT=BDT
CURRENCY_SYMBOL=Taka
CURRENCY_POSITION=after
CURRENCY_DECIMAL_PLACES=2
```

### 9. Run Database Migrations and Seeders

```bash
php artisan migrate
# Optionally seed with sample data:
php artisan db:seed
```

### 10. Extract Storage & Public Assets

If `storage.zip` and `public.zip` are included in the repo:

```bash
unzip storage.zip -d storage
unzip public.zip -d public
php artisan storage:link
```

### 11. Compile Frontend Assets

```bash
npm run dev
# For production:
npm run prod
```

### 12. Start the Development Server

```bash
php artisan serve
```

Visit `http://127.0.0.1:8000` in your browser.

> **Admin Panel:** Navigate to `/admin` after logging in with an admin-role account.

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- Currency Configuration Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=💱%20Currency+Configuration&fontSize=32&width=1200&height=130&color=0:00F260,100:0575E6" width="100%">

KenaKata.com uses **Bangladeshi Taka (BDT)** as its default currency. The currency system is fully centralized and configurable via `config/currency.php`.

### Configuration File (`config/currency.php`)

```php
'default_currency'    => env('CURRENCY_DEFAULT', 'BDT'),
'currency_symbol'     => env('CURRENCY_SYMBOL', 'Taka'),
'currency_position'   => env('CURRENCY_POSITION', 'after'),  // 'before' or 'after'
'decimal_places'      => env('CURRENCY_DECIMAL_PLACES', 2),
'thousands_separator' => env('CURRENCY_THOUSANDS_SEPARATOR', ','),
'decimal_separator'   => env('CURRENCY_DECIMAL_SEPARATOR', '.'),
```

### Available Helper Functions

```php
// Format a price value with currency
Helper::formatCurrency($product->price);
// Output: 1,500.00 Taka

// Get the configured base currency symbol
Helper::base_currency();
// Output: Taka

// Calculate and format order totals
Helper::orderPrice($order->total);
// Output: 5,250.00 Taka
```

### In Blade Templates

```blade
{{ Helper::formatCurrency($product->price) }}
{{-- Output: 1,500.00 Taka --}}
```

### Coverage

| Area | Status |
|---|---|
| Product listings, grids, detail pages | ✅ Updated |
| Shopping cart and checkout pages | ✅ Updated |
| Header cart / wishlist displays | ✅ Updated |
| Admin dashboard charts and analytics | ✅ Updated |
| Order management pages | ✅ Updated |
| Shipping management | ✅ Updated |
| PDF order reports | ✅ Updated |
| JavaScript price sliders and cart calculations | ✅ Updated |

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- Testing Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=🧪%20Testing&fontSize=32&width=1200&height=130&color=0:6A82FB,100:FC5C7D" width="100%">

KenaKata.com uses **PHPUnit ^10.0** for automated testing, as configured in `phpunit.xml`. Testing covers both unit and feature levels.

### Running Tests

```bash
# Run the full test suite
php artisan test

# Or directly via PHPUnit
./vendor/bin/phpunit

# Run a specific test file
./vendor/bin/phpunit tests/Unit/ProductServiceTest.php

# Run with coverage report (requires Xdebug)
./vendor/bin/phpunit --coverage-html coverage/
```

### Test Coverage Areas

| Layer | Tests |
|---|---|
| **Services** | Business logic for order creation, cart calculations, payment processing |
| **Repositories** | Data access operations via mocked Eloquent models |
| **Controllers** | HTTP request/response cycles (feature tests) |
| **Models** | Relationship assertions and attribute casting |
| **Payments** | Strategy implementations (PayPal, COD) — mocked via Mockery |
| **Currency Helpers** | `formatCurrency()`, `base_currency()`, `orderPrice()` formatting |

> Test data is generated via **Faker-based Model Factories** (Factory pattern), ensuring consistent and reproducible test scenarios.

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- Future Work Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=🔮%20Future+Improvements&fontSize=32&width=1200&height=130&color=0:FF416C,100:FF4B2B" width="100%">

The following enhancements are planned for future releases of KenaKata.com:

- 💳 **Multiple Payment Gateway Integration** — Stripe, bKash, Nagad, and other local payment methods  
- 🤖 **AI-Based Product Recommendation System** — Personalised product suggestions based on browsing and purchase history  
- 🔍 **Advanced Search & Filtering** — Full-text search, multi-attribute filtering, and sorting  
- 📱 **Mobile Application Integration** — REST API layer (Laravel Sanctum) consumed by Android/iOS mobile apps  
- 🌍 **Multi-Currency Support** — Dynamic currency conversion with real-time exchange rates  
- 🌐 **Multi-Language (i18n) Support** — Localization for Bengali and other regional languages  
- 🔔 **Advanced Real-Time Notifications** — In-app notification centre with read/unread tracking  
- ⭐ **Product Reviews & Ratings** — Customer review system with moderation  
- 🏷️ **Coupon & Discount System** — Promotional codes, flash sales, and bulk discount rules  
- 📦 **Inventory Management** — Low-stock alerts, restocking workflows, and supplier tracking  
- 🐳 **Full Docker / Laravel Sail Setup** — One-command containerised development environment  

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- Conclusion Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=✅%20Conclusion&fontSize=32&width=1200&height=130&color=0:6A82FB,100:FC5C7D" width="100%">

**KenaKata.com** is a scalable, maintainable, and feature-rich e-commerce platform built with **Laravel 10** and **PHP 8.1+**. It demonstrates real-world application of modern software engineering practices — including MVC architecture with Service and Repository layers, all four OOP pillars, six recognized design patterns, all five SOLID principles, and Design by Contract — within a complete, production-grade web application.

From its native BDT currency system and PayPal integration to its real-time Pusher notifications and DomPDF invoice generation, KenaKata.com is engineered to serve as both a functional commercial product and a reference implementation of clean Laravel architecture.

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- License Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=📄%20License&fontSize=32&width=1200&height=130&color=0:00F260,100:0575E6" width="100%">

This project is licensed under the **MIT License** — see the [LICENSE](LICENSE) file for full details.

```
MIT License

Copyright (c) 2025 A. K. M. Masudur Rahman (Gaurab)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction...
```

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- Author Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=👨‍💻%20Author&fontSize=32&width=1200&height=130&color=0:00F260,100:0575E6" width="100%">

### A. K. M. Masudur Rahman (Gaurab)

🎓 **Department:** Computer Science and Engineering (CSE)  
🏫 **Institution:** Bangladesh Army University of Science and Technology (BAUST), Saidpur  
🐙 **GitHub:** [@Gaurab1809](https://github.com/Gaurab1809)

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<!-- Support Banner -->
<img src="https://capsule-render.vercel.app/api?type=waving&text=⭐%20Support&fontSize=32&width=1200&height=130&color=0:FF416C,100:FF4B2B" width="100%">

If you found this project helpful or interesting, consider giving it a ⭐ on GitHub — it means a lot and helps others discover the project!

[![GitHub Stars](https://img.shields.io/github/stars/Gaurab1809/KenaKata.com-An-E-Commerce-Platform?style=social)](https://github.com/Gaurab1809/KenaKata.com-An-E-Commerce-Platform/stargazers)
[![GitHub Forks](https://img.shields.io/github/forks/Gaurab1809/KenaKata.com-An-E-Commerce-Platform?style=social)](https://github.com/Gaurab1809/KenaKata.com-An-E-Commerce-Platform/fork)
[![GitHub Issues](https://img.shields.io/github/issues/Gaurab1809/KenaKata.com-An-E-Commerce-Platform)](https://github.com/Gaurab1809/KenaKata.com-An-E-Commerce-Platform/issues)

<img src="https://user-images.githubusercontent.com/73097560/115834477-dbab4500-a447-11eb-908a-139a6edaec5c.gif" width="100%">

<p align="center">
  Made with ❤️ in Bangladesh &nbsp;|&nbsp; Built with Laravel 10 &nbsp;|&nbsp; © 2024 KenaKata.com
</p>
