🛒 Laravel Product CRUD Application

This is a simple Laravel-based CRUD (Create, Read, Update, Delete) application that manages products. It demonstrates the core features of Laravel including routing, controllers, Blade views, migrations, and form handling.

📁 Project Structure
````
---
/app
└── /Http
└── /Controllers
└── ProductController.php

/resources
└── /views
├── /layouts
│   └── app.blade.php
└── /products
├── index.blade.php
├── create.blade.php
├── edit.blade.php
└── show.blade.php

/routes
└── web.php

/database
└── /migrations
└── 2025_05_08_113407_create_products_table.php

````
🚀 Features

- 📄 List all products
- ➕ Create a new product
- ✏️ Edit and update product
- ❌ Delete product
- 👁 View single product details
- 🧼 Form validation
- 🎨 Blade templating with layout inheritance

 🛠 Technologies Used

- ⚙️ Laravel 10+
- 🐘 PHP 8+
- 🗃 MySQL
- 🎨 Blade (Laravel templating)
- 📦 Composer
- 🔄 Eloquent ORM
- 🌐 Bootstrap (optional, for UI)


 🧾 Installation & Setup
 
1. Clone the repository:

```bash
git clone https://github.com/velmor-uz/laravel-store.git
cd laravel-store
````

2. Install dependencies:

```bash
composer install
```

3. Copy `.env` file and generate app key:

```bash
cp .env.example .env
php artisan key:generate
```

4. Configure your `.env` file for database:

```dotenv
DB_DATABASE=store_db
DB_USERNAME=root
DB_PASSWORD=
```

5. Run migrations:

```bash
php artisan migrate
```

6. Serve the app:

```bash
php artisan serve
```

