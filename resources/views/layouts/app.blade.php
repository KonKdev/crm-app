<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Σύνδεσμος για το Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Εδώ μπορείτε να προσθέσετε άλλα stylesheets ή scripts -->
</head>
<body>
    <header>
        <h1>Κεντρική Κεφαλίδα</h1>
        <nav>
            <ul>
                <li><a href="#">Αρχική</a></li>
                <li><a href="#">Υπηρεσίες</a></li>
                <li><a href="#">Επικοινωνία</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Επικοινωνία: example@example.com | Τηλέφωνο: 1234567890</p>
    </footer>
</body>
</html>
