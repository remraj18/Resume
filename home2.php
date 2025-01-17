<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Responsive Resume Page</title>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <nav class="bg-teal-600 text-white">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="text-xl font-bold">Resume Maker</div>
            <div class="hidden lg:flex space-x-8">
                <a href="#RESUME" class="hover:text-gray-300">Resume Template</a>
                <a href="#edit" class="hover:text-gray-300">Resume Editor</a>
            </div>
            <button id="menu-btn" class="lg:hidden text-2xl focus:outline-none">☰</button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden flex-col bg-teal-600 lg:hidden">
            <a href="#RESUME" class="py-2 px-6 hover:bg-teal-700">Resume Template</a>
            <a href="#edit" class="py-2 px-6 hover:bg-teal-700">Resume Editor</a>
        </div>
    </nav>

    <!-- Resume Section -->
    <section id="RESUME" class="py-12 px-4">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Creative Resume</h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                Great Sample Resume helps you create a professional and successful resume in minutes.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="resume.php" class="block">
                    <img src="premgan_page-0001.jpg" alt="Resume Template 1" class="w-full h-auto rounded shadow hover:shadow-lg transition">
                </a>
                <a href="resume1.php" class="block">
                    <img src="2a.jpg" alt="Resume Template 2" class="w-full h-auto rounded shadow hover:shadow-lg transition">
                </a>
                <a href="resume2.php" class="block">
                    <img src="Resume Maker_page-0001.jpg" alt="Resume Template 3" class="w-full h-auto rounded shadow hover:shadow-lg transition">
                </a>
                <a href="resume3.php" class="block">
                    <img src="Resume Maker1_page-0001.jpg" alt="Resume Template 4" class="w-full h-auto rounded shadow hover:shadow-lg transition">
                </a>
                <a href="resume4.php" class="block">
                    <img src="Resume Maker2_page-0001.jpg" alt="Resume Template 5" class="w-full h-auto rounded shadow hover:shadow-lg transition">
                </a>
                <a href="resume5.php" class="block">
                    <img src="Resume Maker123_page-0001.jpg" alt="Resume Template 6" class="w-full h-auto rounded shadow hover:shadow-lg transition">
                </a>
            </div>
        </div>
    </section>

    <!-- Header Section -->
    <header id="edit" class="h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('resumemaker-main.jpg');">
        <div class="bg-black bg-opacity-70 p-8 rounded text-center">
            <h3 class="text-4xl text-red-500 font-bold mb-4">RESUME EDITOR</h3>
            
        </div>
    </header>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 text-center">
        <p class="text-sm">© 2025 Resume Maker. All Rights Reserved.</p>
    </footer>

    <script>
        // Mobile Menu Toggle
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
