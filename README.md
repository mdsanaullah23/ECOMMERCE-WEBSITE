# My eCommerce Website

## Overview

This is a simple eCommerce website built using HTML, CSS, JavaScript, and PHP with a MySQL database. It includes user authentication features such as login and signup using XAMPP as the local development server.

## Features

- User Registration: Users can create new accounts with a unique username and password.
- User Authentication: Registered users can log in to access their accounts.
- Product Catalog: Display a list of products available for purchase.
- Shopping Cart: Users can add products to their shopping cart and view the cart's contents.
- Checkout: Users can proceed to checkout and place orders.
- Database Integration: User account information and product details are stored in a MySQL database.
- Responsive Design: The website is designed to be responsive and work well on different screen sizes.

## Installation

To run this website locally, follow these steps:

1. Download and install XAMPP if you haven't already from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).

2. Clone this repository to your local machine:


3. Copy the project folder to the XAMPP `htdocs` directory. This is typically located at `C:\xampp\htdocs` on Windows or `/Applications/XAMPP/htdocs` on macOS.

4. Start the Apache and MySQL services in XAMPP.

5. Open your web browser and navigate to `http://localhost/ecommerce-website` to access the website.

6. You may need to import the included SQL database file (e.g., `ecommerce_database.sql`) into your MySQL database to create the necessary tables.

## Configuration

1. Database Configuration: Open the `config.php` file and update the database credentials (`$dbHost`, `$dbUsername`, `$dbPassword`, `$dbName`) with your local MySQL server settings.

2. You may also need to update any absolute URLs or paths in the code if necessary, especially if you plan to deploy the website to a different server.

## Usage

- Visit `http://localhost/ecommerce-website` in your web browser to access the website.
- Register a new user account or log in if you already have one.
- Explore the product catalog, add items to your shopping cart, and proceed to checkout.
- Test the various features of the website to ensure it works as expected.

## Contributing

If you'd like to contribute to this project, please open an issue or create a pull request on GitHub.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- This project was inspired by various eCommerce websites and tutorials available online.
- Special thanks to the open-source community for providing the tools and technologies used in this project.

