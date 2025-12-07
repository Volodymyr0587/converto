# Universal Unit Converter — Laravel 12 + Livewire 3

A modern, fast, and extensible unit converter built with **Laravel 12** and **Livewire 3**.  
Convert temperatures, time, length, weight, and more — with a clean UI, instant results, and easily pluggable conversion modules.

---

## 🚀 Features

- ⚡ **Instant conversions** powered by Livewire 3  
- 🎛️ **Modular converters** (Temperature, Time, Length, Weight, etc.)  
- 📐 **Accurate math**, including special cases (temperature offsets, time units, etc.)  
- 🎨 **Modern UI** with TailwindCSS  
- ♻️ **Reusable anonymous Blade components**  
- 🌍 **Localization-friendly architecture**  
- 📂 **Clean code structure** ready for expansion  
- 🧪 **Easy to test and extend**

---

## 🧱 Tech Stack

- **Laravel 12**
- **Livewire 3**
- **TailwindCSS**
- **PHP 8.2+**

---

## 📦 Installation

```bash
git clone https://github.com/Volodymyr0587/converto.git
cd converto
composer install
npm install && npm run build
cp .env.example .env
php artisan key:generate
php artisan serve
```

## 🏗 Project Structure (Converters)

### Converters live here:
`app/Livewire/Converters/`

### Example components:

- TemperatureConverter.php
- TimeConverter.php
- LengthConverter.php
- WeightConverter.php

### Each converter:
- Defines supported units
- Normalizes units to a base value
- Contains conversion logic
- Uses the shared Blade component for UI


## 🧩 Adding a New Converter

- Create a new Livewire converter:
    ```bash
    php artisan make:livewire Converters/SpeedConverter
    ```
- Add your units & conversion rules.
- Use the converter Blade component `resources/views/components/converter.blade.php`.
- Add the component to the UI.

## 📜 License

Released under the MIT License.

## ⭐ Support the Project

If you like this project, please give it a star ⭐ on GitHub!
Your support helps the project grow.
