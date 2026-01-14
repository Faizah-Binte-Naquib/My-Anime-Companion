# My Anime Companion

A full-stack PHP web application for anime enthusiasts to manage and track their anime watch lists. Features user authentication, personalized libraries, search functionality, and comprehensive anime information management.

## 📋 Overview

**My Anime Companion** is a web-based content management system designed for anime fans to organize their anime collection, track viewing progress, and discover new titles. The application provides a user-friendly interface for managing personal anime libraries with detailed information about each title.

## 🚀 Features

- **Anime Database**: Comprehensive database of anime titles with detailed information
- **User Authentication**: Secure registration and login system
- **Personal Library**: Create and manage your personal anime collection
- **Watch List Management**: Track anime you're watching, completed, or plan to watch
- **Progress Tracking**: Monitor your progress through anime series
- **Search & Filter**: Search anime by name, genre, or status
- **Rating System**: Rate and review anime titles
- **Responsive Design**: Mobile-friendly interface using Bootstrap

## 🛠️ Tech Stack

- **PHP** - Server-side scripting language
- **MySQL** - Database management system
- **JavaScript** - Frontend interactivity
- **HTML/CSS** - Markup and styling
- **Bootstrap** - Responsive UI framework
- **jQuery** - JavaScript library

## 📦 Installation

### Prerequisites

- **PHP** 7.4 or higher
- **MySQL** 5.7 or higher (or MariaDB)
- **Apache** web server (or Nginx)
- **phpMyAdmin** (optional, for database management)

### Setup Instructions

#### Option 1: Using XAMPP/WAMP

1. **Clone the repository**
   ```bash
   git clone https://github.com/Faizah-Binte-Naquib/My-Anime-Companion.git
   ```

2. **Copy to web server directory**
   - **XAMPP**: Copy to `C:\xampp\htdocs\My-Anime-Companion`
   - **WAMP**: Copy to `C:\wamp64\www\My-Anime-Companion`

3. **Create Database**
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named `myanimecompanion`
   - Or import a SQL file if provided

4. **Configure Database Connection**
   - The database configuration is in `config.php`:
   ```php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'myanimecompanion');
   ```
   - Update these values if your MySQL setup differs

5. **Access Application**
   - Open browser and navigate to: `http://localhost/My-Anime-Companion`

#### Option 2: Using PHP Built-in Server

1. **Navigate to project directory**
   ```bash
   cd My-Anime-Companion
   ```

2. **Start PHP server**
   ```bash
   php -S localhost:8000
   ```

3. **Access Application**
   - Open browser: `http://localhost:8000`

## 💻 Usage

### For Users

1. **Register**: Create a new account
2. **Login**: Access your account
3. **Browse Anime**: Explore the anime database
4. **Add to Library**: Add anime to your personal collection
5. **Track Progress**: Update your viewing status (Watching/Completed/Plan to Watch)
6. **Rate Anime**: Rate and review anime titles
7. **Search**: Find specific anime using the search functionality

## 📁 Project Structure

```
My-Anime-Companion/
├── config.php              # Database configuration
├── home.php                # Homepage
├── details.php             # Anime details page
├── genre.php               # Genre browsing page
├── login.php               # User login page
├── register.php            # User registration page
├── registerphp.php         # Registration processing
├── profile.php             # User profile page
├── ProfileorLogin.php      # Profile/login logic
├── process.php             # General processing logic
├── session.php             # Session management
├── logout.php              # Logout functionality
├── css/                    # Stylesheets
│   ├── bootstrap.min.css   # Bootstrap CSS
│   ├── style.css           # Custom styles
│   ├── home.css            # Homepage styles
│   └── details.css         # Details page styles
├── js/                     # JavaScript files
│   └── bootstrap.bundle.min.js
├── images/                 # Image assets
└── README.md
```

## 🗄️ Database Configuration

The application uses MySQL with the following configuration (from `config.php`):

```php
<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'myanimecompanion');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
```

### Database Schema

The application requires a MySQL database named `myanimecompanion`. Key tables typically include:

- **Users**: User accounts and authentication
- **Anime**: Anime information (name, genre, description, status, rating)
- **User Library**: Personal anime collections linked to users
- **Ratings**: User ratings for anime titles

## 🔒 Security Features

- Password hashing (using `password_hash()`)
- SQL injection prevention (prepared statements with mysqli)
- XSS protection (input sanitization)
- Session management
- Secure database connections

## 🎨 Features in Detail

### Search Functionality
- Search by anime name
- Filter by genre
- Filter by status (Watching/Completed/etc.)
- Sort by rating or popularity

### Library Management
- Add anime to personal library
- Update viewing status
- Rate and review anime
- Remove anime from library

## 🧪 Testing

1. **Test Registration**: Create a new user account
2. **Test Login**: Verify authentication works
3. **Test CRUD Operations**: Add, view, update, delete anime in library
4. **Test Search**: Verify search and filter functionality
5. **Test Responsive Design**: Check on different screen sizes

## 🚀 Deployment

### Production Deployment

1. **Web Hosting**: Choose a PHP-compatible hosting service
2. **Database Setup**: Create production MySQL database
3. **File Upload**: Upload project files via FTP or hosting panel
4. **Configuration**: Update `config.php` with production database credentials
5. **Security**: 
   - Change default passwords
   - Enable HTTPS
   - Update file permissions
   - Disable error display in production (`display_errors = Off`)

## 🔧 Configuration

Update `config.php` with your database settings:

```php
<?php
define('DB_SERVER', 'localhost');
define('DB_NAME', 'myanimecompanion');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
?>
```

## 🤝 Contributing

Contributions, issues, and feature requests are welcome! Feel free to check the [issues page](https://github.com/Faizah-Binte-Naquib/My-Anime-Companion/issues).

## 👤 Author

**Faizah Binte Naquib**

- GitHub: [@Faizah-Binte-Naquib](https://github.com/Faizah-Binte-Naquib)
- LinkedIn: [fbnaquib-a07932174](https://www.linkedin.com/in/fbnaquib-a07932174/)
- Email: faizahbintenaquib@gmail.com

## 📄 License

This project is open source and available under the MIT License.

---

⭐ If you found this project helpful, please consider giving it a star!
