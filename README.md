# **OJT Management System**
On-the-Job Training Management System (OMS) for Bicol University.
---


Steps: 
- Make sure to install [composer](https://getcomposer.org/download/) (we suggest a global installation).
    + If  you are using XAMPP, make sure to search ";extension=zip". Remove the semicolon [;] to enable the extension.
    + Inside the folder ojt-ms, open a terminal and run ``composer install``.
- run ``php artisan serve`` to start the server

- In the .env file, connect the database by properly setting up the username and password.
    + Create a database called ojt_ms in your desired environment. For example, when using mysql:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ojt_ms
    DB_USERNAME=root
    DB_PASSWORD=password

Software Requirements:
- [ ] Registration / Login - 
    + [x] Student Account Login
    + [x] Admin Account Login
    + [x] Student Account Registration
    + [x] Admin Account Registration
    + [x] Admin: Student Acceptance
- [ ] Profile Page
- [ ] Document Requirements
    + [ ] Uploading
    + [ ] Downloading
- [ ] Search Function (Docs)
- [ ] Blog Uploads (Students)
- [ ] Monthly / Weekly Reports (Students)
- [ ] Report Generation PDF sumnmary
- [ ] Dashboard
    + [ ] OJT Placement / Deployment
    + [ ] Document Tracking
- [ ] Task Monitoring