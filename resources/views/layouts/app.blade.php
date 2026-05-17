<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Food Planner</title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

    <!-- Bootstrap Icon -->

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body{
            background: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .sidebar{
            width: 240px;
            height: 100vh;
            background: #ff914d;
            position: fixed;
            padding: 30px 20px;
        }

        .sidebar h2{
            color: white;
            margin-bottom: 40px;
            font-weight: bold;
        }

        .sidebar a{
            display: block;
            color: white;
            text-decoration: none;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 10px;
            transition: 0.3s;
        }

        .sidebar a:hover{
            background: white;
            color: #ff914d;
        }

        .main{
            margin-left: 260px;
            padding: 30px;
        }

        .dashboard-card{
            border: none;
            border-radius: 20px;
            padding: 25px;
            color: white;
        }

        .food-card{
            border: none;
            border-radius: 20px;
            transition: 0.3s;
        }

        .food-card:hover{
            transform: translateY(-5px);
        }

    </style>

</head>
<body>

    <!-- SIDEBAR -->

    <div class="sidebar">

        <h2>🍴 Food Planner</h2>

        <a href="/menu">

            <i class="bi bi-grid-fill"></i>
            Menu Makanan

        </a>

        <a href="/planner">

            <i class="bi bi-calendar-week-fill"></i>
            Planner Mingguan

        </a>

        <a href="/favorit">

            <i class="bi bi-heart-fill"></i>
            Menu Favorit

        </a>

    </div>

    <!-- MAIN -->

    <div class="main">

        @yield('content')

    </div>

</body>
</html>