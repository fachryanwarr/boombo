# Boombo

Boombo is a simple movie booking site that uses a public API to retrieve a list of movies. The project is built using the Laravel framework and includes features such as authentication, movie listings, ticket purchases, account balance management, and ticket purchase history.

## Features

- **Authentication**: User registration and login functionality.
- **Movie Listings**: Display a list of movies fetched from a public API.
- **Ticket Purchases**: Users can purchase tickets for movies.
- **Account Balance Management**: Users can manage their account balance.
- **Purchase History**: Users can view their ticket purchase history.

## Getting Started

Follow these instructions to set up the project on your local machine.

### Prerequisites

- PHP (>= 7.3)
- Composer
- MySQL
- Node.js & npm

### Installation

1. **Clone the repository:**

    ```sh
    git clone https://github.com/fachryanwarr/boombo.git
    cd boombo
    ```

2. **Create a `.env` file from the example file:**

    ```sh
    cp .env.example .env
    ```

3. **Set up your environment variables in the `.env` file:**

    Open the `.env` file and update the following fields according to your local setup:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password

    # Additional environment settings for API keys, etc.
    ```

4. **Install PHP dependencies:**

    ```sh
    composer install
    ```

5. **Generate the application key:**

    ```sh
    php artisan key:generate
    ```

6. **Run the database migrations and seed the database:**

    ```sh
    php artisan migrate --seed
    ```

7. **Install Node.js dependencies:**

    ```sh
    npm install
    ```

8. **Compile the assets:**

    ```sh
    npm run dev
    ```

### Running the Application

1. **Start the development server:**

    ```sh
    php artisan serve
    ```

    This will start the server at `http://localhost:8000`.

2. **Access the application in your web browser:**

    Open your browser and navigate to `http://localhost:8000`.
