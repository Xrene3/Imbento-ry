# In-Bento-Ry
Inventory Management system

## About
#### A Madeup Inventory management system 

## Features

- Inventory
    - Reading
    - Storing
    - Updating
    - Deleting
    - Tracking
    - QR Code Generation

- User
    - User authentication
    - Customizable Profiles
    - Dynamic User roles
    - Permission

- System
    - RESTful API route
    - Websocket via Reverb

## Getting Started

### Prerequisites
    cp env.example .env
    php artisan key:generate
    php artisan migrate --seed
    

### DDEV Option (Recommended)
URL: https://ddev.com/get-started/
    
    mkcert -install
    ddev config
    ddev start

### Usage

    php artisan serve
    http://localhost:8000


## Built With
- Laravel
- Livewire
- TailwindCSS
- AlpineJS
- DaisyUI
- MySQL


