<?php include 'auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure E-Voting System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="bg-gray-50">

<nav class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white shadow-lg transition duration-500 ease-in-out">
    <div class="container mx-auto px-4 py-3">
        <div class="flex justify-between items-center">
            <a href="index.php" class="flex items-center space-x-2 hover:text-yellow-300 transition duration-300">
                <i class="fas fa-vote-yea text-2xl"></i>
                <span class="text-xl font-bold">E-Vote</span>
            </a>
            <div class="hidden md:flex items-center space-x-6">
                <?php if(isLoggedIn()): ?>
                    <a href="dashboard.php" class="hover:text-pink-300 transition duration-300">Dashboard</a>
                    <a href="logout.php" class="hover:text-red-300 transition duration-300">Logout</a>
                <?php else: ?>
                    <a href="login.php" class="hover:text-green-300 transition duration-300">Login</a>
                    <a href="register.php" class="bg-yellow-500 px-4 py-2 rounded-lg hover:bg-yellow-600 text-gray-900 font-semibold transition duration-300">Register</a>
                <?php endif; ?>
            </div>
            <button class="md:hidden focus:outline-none" id="mobile-menu-button">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>

        <div class="md:hidden hidden mt-4 pb-2 transition-all duration-500 ease-in-out" id="mobile-menu">
            <?php if(isLoggedIn()): ?>
                <a href="dashboard.php" class="block py-2 hover:bg-purple-600 px-2 rounded text-white">Dashboard</a>
                <a href="logout.php" class="block py-2 hover:bg-red-600 px-2 rounded text-white">Logout</a>
            <?php else: ?>
                <a href="login.php" class="block py-2 hover:bg-green-600 px-2 rounded text-white">Login</a>
                <a href="register.php" class="block py-2 bg-yellow-500 hover:bg-yellow-600 px-2 rounded mt-2 text-gray-900 font-semibold">Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function () {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>

</body>
</html>
