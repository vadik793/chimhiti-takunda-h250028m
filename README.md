# HIT Snooker & Pool Club — Student Mini-Project

A responsive student web-development project using HTML5 (in `index.php`), CSS3, JavaScript, PHP, and MySQL. The design uses a black, green, and gold palette.

## Features
- Responsive landing page and mobile navigation
- About, games, sample events, membership enquiry, and contact sections
- Client-side form checks and server-side PHP validation
- Prepared SQL statement for storing enquiries
- Accessible labels, semantic sections, and responsive layouts

## Requirements
- Visual Studio Code
- XAMPP (Apache + PHP + MySQL/MariaDB), or another local PHP/MySQL environment
- Optional VS Code extensions: PHP Intelephense, Live Server (HTML-only previews; it does not execute PHP), Prettier

## Run the project with XAMPP
1. Install and open XAMPP.
2. Start **Apache** and **MySQL**.
3. Copy the entire `HIT_Snooker_Pool_Club` folder into `C:\\xampp\\htdocs\\`.
4. Open `http://localhost/phpmyadmin` in your browser.
5. Select **Import**, choose `database.sql` from this project, and click **Import** / **Go**.
6. Check `config.php`. Default XAMPP settings are host `127.0.0.1`, database `hit_snooker_club`, user `root`, blank password. If your MySQL setup differs, update these values.
7. Open `http://localhost/HIT_Snooker_Pool_Club/`.
8. Submit the membership enquiry form. A successful submission should create a row in the `enquiries` table.

## Important notes
- Open the project folder in VS Code to edit the files.
- PHP pages must be served through Apache/PHP; opening `index.php` directly from File Explorer or using Live Server alone will not run PHP.
- Event entries are illustrative sample content, not confirmed events.
- This is a learning/demo project. Before public deployment, configure secure database credentials, HTTPS, CSRF protection, spam prevention, privacy/retention practices, and production error handling.
- The page currently uses a CSS-drawn table illustration, so no external image downloads are required.
