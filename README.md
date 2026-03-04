# TailAdmin PHP Template

A clean, production-ready PHP integration of the [TailAdmin](https://tailadmin.com/) dashboard. This template has been refactored from the original HTML/Build-tool version into a lightweight PHP structure, perfect for rapid development on servers like AppServ, XAMPP, or any standard PHP environment.

## 🚀 Features

- **PHP Partial Architecture**: Organized into reusable `includes/` (header, sidebar, footer, etc.) for easy maintenance.
- **Pre-compiled Assets**: Build tools (Webpack, Node.js) have been removed to keep the project lightweight. Compiled CSS and JS are ready to use.
- **Tailwind CSS & Alpine.js**: Fully integrated for modern, responsive UI components.
- **Dynamic Navigation**: Sidebar and header menus are configured for PHP routing.
- **Interactive Charts**: Includes Chart.js/ApexCharts integration with custom dropdown menus.

## 📁 Project Structure

```text
k-nutrition/
├── assets/             # Compiled CSS, JS, and Images
├── includes/           # Reusable PHP partials (header.php, sidebar.php, etc.)
├── config.php          # Global configuration
├── index.php           # Main eCommerce Dashboard
├── profile.php         # User Profile Page
├── calendar.php        # Calendar Integration
└── ...                 # Other UI and Page modules
```

## 🛠️ Installation

1. Clone the repository to your local server directory (e.g., `C:\AppServ\www\` or `C:\xampp\htdocs\`).
   ```bash
   git clone https://github.com/Abdulhakim-Maha/tailadmin-php-template.git
   ```
2. Ensure you have PHP 7.4+ installed.
3. Access the project via your browser: `http://localhost/tailadmin-php-template/`

## 🎨 Customization

- **Styling**: Modify the UI using Tailwind CSS classes directly in the `.php` files.
- **Menu Items**: Update `includes/sidebar.php` to add or remove navigation links.
- **Header**: Customize notifications and user profile dropdowns in `includes/header.php`.

## 📜 Credits

Based on the [TailAdmin Open Source](https://github.com/TailAdmin/free-tailwind-dashboard-template) version.

---
Developed with ❤️ by Abdulhakim Maha
