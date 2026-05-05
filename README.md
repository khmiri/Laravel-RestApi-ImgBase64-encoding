

# 📸 Laravel REST API - Image Base64 Encoding

A lightweight Laravel REST API that allows you to **retrieve images and return them as Base64 encoded strings**.  
This project is useful for applications that need image transformation, API-based image delivery, or mobile apps consuming image data without direct file access.

---

## 🚀 Features

- 📷 Fetch images via API endpoints
- 🔄 Convert images to Base64 format
- ⚡ Fast and lightweight Laravel backend
- 🧩 Simple integration with any frontend (Flutter, React, etc.)
- 🛠️ Clean RESTful structure
- 📦 Easy to extend for more image processing features

---

## 🧠 Use Cases

- Mobile apps needing image embedding (Flutter / React Native)
- APIs that avoid direct file hosting exposure
- Systems requiring image serialization
- Backend image preprocessing pipelines

---

## 🏗️ Tech Stack

- Laravel (PHP Framework)
- REST API architecture
- File system storage
- Base64 encoding

---

## 📁 Project Structure

```

app/
├── Http/
│    ├── Controllers/
│    │     └── ImageController.php
├── Services/
├── Models/
routes/
└── api.php

````

---

## ⚙️ Installation

### 1. Clone the repository
```bash
git clone https://github.com/khmiri/Laravel-RestApi-ImgBase64-encoding.git
cd Laravel-RestApi-ImgBase64-encoding
````

---

### 2. Install dependencies

```bash
composer install
```

---

### 3. Setup environment

```bash
cp .env.example .env
php artisan key:generate
```

---

### 4. Configure database (if needed)

Edit `.env` file:

```env
DB_DATABASE=your_db
DB_USERNAME=root
DB_PASSWORD=
```

---

### 5. Run migrations

```bash
php artisan migrate
```

---

### 6. Start server

```bash
php artisan serve
```

---

## 📡 API Endpoints

### 🔹 Get Base64 Image

```
GET /api/image/{id}
```

### Response

```json
{
  "status": "success",
  "image": "data:image/png;base64,iVBORw0KGgoAAA..."
}
```

---

## 🔐 Environment Variables

Example `.env`:

```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost
```

---

## 📌 Notes

* Images are converted on request (not pre-stored as Base64)
* Suitable for small/medium images (Base64 increases size ~30%)
* Not recommended for heavy image streaming systems

---

## 🚀 Future Improvements

* Image caching system
* Resize/compression before encoding
* S3 / cloud storage support
* Authentication layer
* Rate limiting for API protection



## 📄 License

MIT License — free to use and modify.

```

