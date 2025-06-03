# ProductApp

A modern Laravel application for product management, built with ❤️ by madhu.

## 🚀 Features
- User registration and login (auth system)
- CRUD operations for Product model
- Product listing with pagination and search
- Dockerized setup for local development (Sail or Docker Compose)
- PostgreSQL or MySQL support
- Bootstrap UI
- Well-documented code with comments and authorship

## 🛠 Tech Stack
- Laravel (Latest stable)
- PostgreSQL or MySQL
- Docker & Docker Compose (Sail or manual)
- Bootstrap 5
- GitHub

## 📦 Setup Instructions

### 1. Clone the repository
```bash
git clone <repo-url>
cd <project-folder>
```

### 2. Environment Setup
Copy the example environment file and edit as needed:
```bash
cp .env.example .env
```

#### For PostgreSQL (Docker/Sail):
```
DB_CONNECTION=pgsql
DB_HOST=pgsql
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```

#### For MySQL (Docker/Sail):
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```

#### For Native Mac (PostgreSQL):
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=product-app
DB_USERNAME=your_pgsql_username
DB_PASSWORD=your_pgsql_password
```

### 3. Run the app using Docker Compose (manual, not Sail)
```bash
docker-compose up --build
docker-compose exec app php artisan migrate
```

### 4. Run with Laravel Sail (Recommended)
```bash
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan db:seed # (optional, seeds demo products)
```

### 5. Run natively (Mac)
```bash
php artisan migrate
php artisan db:seed # (optional)
php artisan serve
```

### 6. Access the app
- Visit [http://localhost:8000](http://localhost:8000) (native)
- Or [http://localhost:8080](http://localhost:8080) (Sail, if port changed)

## 🧪 Running Tests
```bash
php artisan test
# or
./vendor/bin/sail test
```

## 👤 Default Credentials
- Register a new user via the landing page.
- Or use the seeded user: `test@example.com` / password you set (if you update seeder).

## 📝 Assumptions & Explanations
- The app supports both PostgreSQL and MySQL, but you should only use one at a time.
- For Docker Compose, you may need to adjust service names in `docker-compose.yml` and `.env` (e.g., `app`, `mysql`, or `pgsql`).
- The UI uses Bootstrap 5 for a clean, modern look.
- All code is commented and authored by madhu for clarity.
- Product seeding/demo data is optional and can be run with `php artisan db:seed`.

## 📝 Author
madhu

## 📄 License
MIT
