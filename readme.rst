# EXODiA PRO

**Role:** Full-Stack Web Developer

EXODiA PRO is a creative platform for helping aspiring idols discover their strengths and shine with confidence. The project uses close collaboration with user interface and user experience designers to deliver an immersive and visually compelling experience. Together we craft intuitive user flows, engaging layouts, and interactive elements that reflect the brand's energy and vision. And as with any truly great experience, utilizing these fundamentals enables the team to use a seamless digital journey that nurtures talent, guides users every step of the way and inspires them to push boundaries and unlock their full potential generating the type of success that drives us all.

Accomplishment: Successfully launched an infographic website that bridges aspiring idols, internal teams, sponsors, and event organizers through engaging visual content.

## Responsibilities

- Developed responsive, user-friendly interfaces based on approved UI/UX designs
- Collaborated closely with UI/UX designers to ensure accurate implementation and visual consistency
- Ensured cross-browser and cross-device compatibility for a seamless user experience
- Built reusable, scalable components to improve maintainability and development efficiency
- Maintained consistent styling and layout across the entire application

## Technologies Used

- HTML5
- CSS3
- JavaScript
- jQuery
- CodeIgniter 3
- MySQL

## Prerequisites

Before running this project, ensure you have the following installed:

- **XAMPP** (or any PHP development environment with Apache and MySQL)
  - PHP 7.0 or higher
  - Apache Web Server
  - MySQL 5.6 or higher
- **Web Browser** (Chrome, Firefox, Safari, or Edge)

## Installation & Setup

### Step 1: Clone or Download the Project

If you haven't already, place the project in your XAMPP `htdocs` directory:
```
C:\xampp\htdocs\exodiapro\
```

### Step 2: Database Setup

1. Start **XAMPP Control Panel**
2. Start **Apache** and **MySQL** services
3. Open **phpMyAdmin** by navigating to `http://localhost/phpmyadmin`
4. Create a new database named `exodia`:
   - Click "New" in the left sidebar
   - Enter database name: `exodia`
   - Select collation: `utf8_general_ci`
   - Click "Create"
5. Import your database schema (if you have a SQL file):
   - Select the `exodia` database
   - Click on the "Import" tab
   - Choose your SQL file and click "Go"

### Step 3: Configure Database Connection

1. Open `application/config/database.php`
2. Verify the database settings match your MySQL configuration:
   ```php
   $db['default'] = array(
       'hostname' => 'localhost',
       'username' => 'root',
       'password' => '',  // Set your MySQL password if you have one
       'database' => 'exodia',
       'dbdriver' => 'mysqli',
       // ... other settings
   );
   ```

### Step 4: Configure Base URL

1. Open `application/config/config.php`
2. Update the base URL to match your local setup:
   ```php
   $config['base_url'] = 'http://localhost/exodiapro/';
   ```
   Note: Adjust the path based on your folder name in `htdocs`

### Step 5: Set Permissions (if needed)

Ensure the following directories are writable:
- `application/cache/`
- `application/logs/`

On Windows, these directories should already have the correct permissions.

## Running the Project

1. **Start XAMPP Services:**
   - Open XAMPP Control Panel
   - Start **Apache** service
   - Start **MySQL** service

2. **Access the Application:**
   - Open your web browser
   - Navigate to: `http://localhost/exodiapro/`
   - The application should load successfully

## Project Structure

```
exodiapro/
├── application/          # Application code
│   ├── config/          # Configuration files
│   ├── controllers/     # Controllers
│   ├── models/          # Models
│   ├── views/           # Views
│   └── modules/         # Modular extensions
│       ├── about/
│       ├── contact/
│       ├── index/
│       ├── schedules/
│       ├── sponsors/
│       ├── talent_profile/
│       └── talents/
├── public/              # Public assets
│   └── assets/
│       ├── css/
│       ├── js/
│       └── images/
├── system/              # CodeIgniter system files
├── index.php            # Entry point
└── README.md            # This file
```

## Troubleshooting

### Issue: Page not found (404 Error)
- **Solution:** Check that your `base_url` in `application/config/config.php` matches your local path
- Ensure Apache is running in XAMPP

### Issue: Database connection error
- **Solution:** 
  - Verify MySQL is running in XAMPP
  - Check database credentials in `application/config/database.php`
  - Ensure the database `exodia` exists in phpMyAdmin

### Issue: CSS/JS files not loading
- **Solution:** 
  - Check that the `public/assets/` directory exists
  - Verify file paths in your views are correct
  - Clear browser cache

### Issue: Permission denied errors
- **Solution:** 
  - Ensure `application/cache/` and `application/logs/` directories are writable
  - On Windows, right-click the folders → Properties → Security → Edit permissions

## Development Notes

- The project uses **CodeIgniter 3** framework with **Modular Extensions (MX)**
- All custom modules are located in `application/modules/`
- Static assets (CSS, JS, images) are in `public/assets/`
- Database queries use CodeIgniter's Active Record pattern

## Support

For issues or questions regarding this project, please contact the development team.

---

**Note:** This project was developed using XAMPP on Windows. If you're using a different environment (WAMP, MAMP, or Linux), adjust the paths and configuration accordingly.
