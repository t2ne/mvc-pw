# 🎵 Sound808 - Music Management System (Older PHP Version)

A web application developed in PHP that allows comprehensive management of songs, albums, genres, producers, and artists. The system was built using the MVC (Model-View-Controller) architectural pattern and utilizes Apache server with XAMPP for the development environment.

---

## 🌟 Key Features

- **Song Management**: Create, view, edit, and delete songs with the ability to associate multiple producers
- **Album & Genre Management**: Complete management of albums and musical genres, including association verification before deletion
- **Artist & Producer Management**: Creation and association of artists and producers with songs and albums
- **User-Friendly Interface**: Clean and intuitive web interface built with Bootstrap
- **Data Validation**: Server-side validation for data integrity
- **Secure Operations**: Protection against common web vulnerabilities

## 📋 System Requirements

- **PHP** >= 7.4
- **XAMPP** (with Apache and MySQL)
- **Composer** (for PHP dependencies, if needed)
- **Web Browser** (Chrome, Firefox, Safari, Edge)

---

## 🔧 Installation & Setup

### 1. Clone the Repository

```bash
git clone https://github.com/t2ne/mvc-pw.git
```

### 2. Move to XAMPP Directory

Copy the project folder to your XAMPP htdocs directory:

```bash
cp -r mvc-pw /xampp/htdocs/PWProject/
```

### 3. Database Setup

1. Start XAMPP and open phpMyAdmin
2. Create a new database called `sound808`
3. Import the `projeto_pw2.sql` file located in the project root
4. Configure database connection in the project configuration file

### 4. Apache Alias Configuration

To configure an Apache alias and access the project directly through `http://localhost/PWProject/`, follow these instructions:

#### Step 1: Configure httpd.conf

Open the `httpd.conf` file and add the following configuration to define the project directory:

```apacheconf
<Directory "C:/xampp/htdocs/PWProject">
    Options Indexes FollowSymLinks Includes ExecCGI
    Allow from all
    AllowOverride All
    Require all granted
</Directory>
```

#### Step 2: Configure httpd-autoindex.conf

Open the `httpd-autoindex.conf` file (located in `/xampp/apache/conf/extra/`) and add the alias for the project:

```apacheconf
Alias /PWProject/ "C:/xampp/htdocs/PWProject/"
<Directory "C:/xampp/htdocs/PWProject">
    Options Indexes FollowSymLinks Includes ExecCGI
    AllowOverride All
    Require all granted
    Allow from all
</Directory>
```

#### Step 3: Restart Apache

Restart Apache through the XAMPP control panel by clicking the Stop button and then Start to apply the changes.

### 5. Access the Application

Now you can access the project through: `http://localhost/PWProject/`

---

## 📁 Project Structure

```
mvc-pw/
├── app/                    # Application core
│   ├── controllers/        # MVC Controllers
│   ├── models/            # MVC Models
│   ├── views/             # MVC Views
│   └── config/            # Configuration files
├── assets/                # Static assets
│   ├── css/               # Stylesheets
│   ├── js/                # JavaScript files
│   └── images/            # Image files
├── imgs/                  # Additional images
├── .htaccess             # Apache configuration
├── index.php             # Application entry point
├── projeto_pw2.sql       # Database schema
└── README.md             # Project documentation
```

---

## 💾 Database Schema

The application uses a MySQL database with the following main tables:

- **songs** - Store song information
- **albums** - Album details and metadata
- **genres** - Musical genre classifications
- **artists** - Artist information and profiles
- **producers** - Producer details
- **song_producers** - Many-to-many relationship table

---

## 🔒 Security Features

- **Input Validation**: Server-side validation for all user inputs
- **SQL Injection Protection**: Prepared statements and parameterized queries
- **XSS Prevention**: Output escaping and sanitization
- **CSRF Protection**: Token-based request validation
- **Session Management**: Secure session handling

---

## 🚀 Usage Instructions

1. **Home Page**: Navigate through the main dashboard
2. **Add Songs**: Create new songs and associate them with artists, albums, and producers
3. **Manage Albums**: Create and organize albums with multiple songs
4. **Genre Classification**: Categorize music by genres
5. **Artist Profiles**: Maintain detailed artist information
6. **Producer Management**: Track and associate producers with songs

---

## 🧪 Testing

To test the application:

1. Ensure XAMPP is running
2. Access `http://localhost/PWProject/`
3. Test CRUD operations for all entities
4. Verify data relationships and constraints
5. Test form validations and error handling

---

## 🌐 Browser Compatibility

Tested and working on:

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

---

## 👥 Contributors

This project was developed by 3 contributors as part of an academic assignment.

- [@t2ne](https://github.com/t2ne)
- [@cyzuko](https://github.com/cyzuko)
- [@eduardoc0uto](https://github.com/eduardoc0uto)

---

## 🎓 Academic Project

This project was developed as part of the Web Programming course, demonstrating the implementation of the MVC design pattern in PHP for creating a comprehensive web application with database integration.

### Learning Objectives

- Understand and implement MVC architecture
- Master PHP web development concepts
- Database design and MySQL integration
- Security best practices in web development
- Bootstrap framework utilization

---

## 🐛 Known Issues & Future Enhancements

### Known Issues

- Performance optimization needed for large datasets
- Mobile responsiveness could be improved

### Future Enhancements

- User authentication and authorization system
- Advanced search and filtering capabilities
- File upload for album artwork
- RESTful API implementation
- Unit testing coverage
