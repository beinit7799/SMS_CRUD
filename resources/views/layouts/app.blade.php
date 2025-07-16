<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title') - Student Management System</title>
  <style>
    /* Reset and base */
    * {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f7fa;
      color: #333;
    }

    /* Navbar styles */
    .navbar {
      background-color: #4A90E2;
      padding: 1rem 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }
    .navbar .brand {
      color: white;
      font-weight: 700;
      font-size: 1.5rem;
      text-decoration: none;
    }
    .navbar ul {
      list-style: none;
      display: flex;
      margin: 0;
      padding: 0;
    }
    .navbar ul li {
      margin-left: 2rem;
    }
    .navbar ul li a {
      color: white;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s ease;
    }
    .navbar ul li a:hover,
    .navbar ul li a.active {
      color: #dbe9ff;
      border-bottom: 2px solid #dbe9ff;
    }

    /* Responsive Navbar - Mobile */
    @media (max-width: 600px) {
      .navbar ul {
        flex-direction: column;
        width: 100%;
        display: none;
      }
      .navbar ul.show {
        display: flex;
      }
      .navbar ul li {
        margin: 1rem 0;
        text-align: center;
        margin-left: 0;
      }
      .navbar .menu-toggle {
        display: block;
        cursor: pointer;
        color: white;
        font-size: 1.5rem;
        user-select: none;
      }
    }
    .menu-toggle {
      display: none;
    }

    /* Content */
    .container {
      max-width: 900px;
      margin: 3rem auto;
      padding: 0 1rem;
      text-align: center;
    }
    h1 {
      color: #4A90E2;
      margin-bottom: 1rem;
    }
    p {
      font-size: 1.1rem;
      line-height: 1.6;
    }
  </style>
  @stack('styles')
</head>
<body>

  @include('components.navbar')

  <main class="container">
    @yield('content')
  </main>

  @stack('scripts')
</body>
</html>
