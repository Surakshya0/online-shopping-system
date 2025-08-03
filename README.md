# Online Shopping System

A complete PHP-based e-commerce system with user registration, product management, shopping cart, and admin panel.

## Features

- User registration and login
- Product catalog with categories
- Shopping cart functionality
- Order management
- Admin panel for product and user management
- Responsive design

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/online-shopping-system.git
   cd online-shopping-system
   ```

2. **Set up the database**
   - Create a MySQL database
   - Import `database/ecommerce.sql` into your database

3. **Configure database connection**
   - Copy `config.example.php` to `config.php`
   - Copy `db.example.php` to `db.php`
   - Update database credentials in both files

4. **Set up web server**
   - Place the project in your web server's document root
   - Start Apache and MySQL services

5. **Access the application**
   - Main site: `http://localhost/online-shopping-system/`
   - Admin panel: `http://localhost/online-shopping-system/admin/`
   - Default admin: `admin@gmail.com` / `1234567890`

## Requirements

- PHP 7.4+
- MySQL 5.7+
- Apache/Nginx web server
- XAMPP/WAMP/MAMP (for local development)

## Project Structure

```
online-shopping-system/
├── admin/           # Admin panel files
├── css/            # Stylesheets
├── js/             # JavaScript files
├── database/       # Database SQL file
├── product_images/ # Product images
├── config.php      # Database configuration
├── index.php       # Main entry point
└── README.md       # This file
```

## License

MIT License

Copyright (c) 2024 [Surakshya Bhusal]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
``` 