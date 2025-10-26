<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($config['site_name']) ?></title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <!-- HEADER -->
  <header>
    <div class="logo">
      <img src="../assets/svg/logo.svg" alt="Stylicle Logo" >
    </div>

    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact Us</a></li>
      </ul>
    </nav>

    <div class="nav-right">
      <select>
        <option>EN</option>
        <option>ES</option>
      </select>
      <button class="btn-login">Login</button>
      <button class="btn-signup">Signup</button>
    </div>
  </header>
<main>