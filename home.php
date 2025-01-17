<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // JavaScript for toggling the menu
        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
    </script>
</head>

<body class="m-0 p-0 font-sans bg-white">

    <!-- Navigation -->
    <nav class="bg-teal-600 text-white sticky top-0 p-4 flex justify-between items-center shadow-lg">
        <!-- Hamburger Button -->
        <button onclick="toggleMenu()" class="text-2xl cursor-pointer lg:hidden">
            ☰
        </button>

        <!-- Logo Section -->
        <div class="text-2xl font-bold text-white">RESUME</div>

        <!-- Desktop Menu Links -->
        <ul id="desktopMenu" class="hidden lg:flex space-x-10">
            <li><a class="hover:bg-gray-200 hover:text-red-500 p-2 rounded transition-colors" href="#">HOME</a></li>
            <li><a class="hover:bg-gray-200 hover:text-red-500 p-2 rounded transition-colors" href="#ABOUT-US">ABOUT US</a></li>
            <li><a class="hover:bg-gray-200 hover:text-red-500 p-2 rounded transition-colors" href="#RESUME">SIMPLE RESUME</a></li>
            <li><a class="hover:bg-gray-200 hover:text-red-500 p-2 rounded transition-colors" href="#edit">EDIT RESUME</a></li>
            <li><a class="hover:bg-gray-200 hover:text-red-500 p-2 rounded transition-colors" href="#CONTACT">CONTACT</a></li>
        </ul>

        <!-- Mobile Menu (Hidden by Default) -->
        <ul id="mobileMenu" class="hidden flex-col absolute top-full left-0 bg-teal-600 w-full lg:hidden">
            <li><a class="block text-white p-4 border-b border-gray-400" href="#">HOME</a></li>
            <li><a class="block text-white p-4 border-b border-gray-400" href="#ABOUT-US">ABOUT US</a></li>
            <li><a class="block text-white p-4 border-b border-gray-400" href="#RESUME">SIMPLE RESUME</a></li>
            <li><a class="block text-white p-4 border-b border-gray-400" href="#edit">EDIT RESUME</a></li>
            <li><a class="block text-white p-4" href="#CONTACT">CONTACT</a></li>
        </ul>
    </nav>

    <!-- Header Section -->
    <header class="relative bg-cover bg-bottom h-screen bg-no-repeat" style="background-image: url('3.jpg');">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 text-center text-white pb-24">
            <h2 class="text-4xl lg:text-6xl text-red-500 mb-4">Create Resume using our AutoGenerate Templates</h2>
            <div class="w-32 h-1 bg-teal-600 mx-auto rounded mb-4"></div>
            <h1 class="text-5xl lg:text-6xl mb-6">RESUME CREATOR</h1>
            <a href="home2.php" class="inline-block bg-red-600 text-white px-6 py-3 rounded-full text-lg">CREATE RESUME NOW</a>
        </div>
    </header>

    <!-- About Us Section -->
    <section id="ABOUT-US" class="container mx-auto py-16 px-4 text-center">
        <h2 class="text-3xl font-bold text-red-700 mb-4">About Us</h2>
        <div class="w-32 h-1 bg-teal-600 mx-auto rounded mb-6"></div>
        <p class="text-lg text-gray-700 mb-4">Welcome to Resume Buldir, where we assist you in creating a stunning and professional resume. We believe that a resume is not just a document, but a representation of your identity and career direction. That's why we've made the process simple and convenient. Here, we explain the 6 easy steps to create and edit your resume:</p>
        <p class="text-lg text-gray-700 mb-4"><h3>Step 1: Set Up Your Profile:</h3>Our platform allows you to easily fill in your personal details, education, work experience, skills, and other important information. The process is simple and ensures you don’t miss any crucial details.</p>
        <p class="text-lg text-gray-700 mb-4"><h3>Step 2: Choose a Professional Template:</h3>We offer a variety of professionally designed templates. You can select the one that suits your style and career goals. Whether you prefer a modern design or a more traditional layout, we’ve got you covered.</p>
        <p class="text-lg text-gray-700 mb-4"><h3>Step 3: Create Your Resume:</h3>Based on the information you provide, our system automatically generates your resume. This ensures that your resume looks professional and visually appealing.
        <p class="text-lg text-gray-700 mb-4"><h3>Step 4: Edit Your Resume:</h3>If you need to make any changes, you can easily edit your resume. Our platform gives you full control to update any section of your resume whenever necessary.

</p>
        <p class="text-lg text-gray-700 mb-4"><h3>Step 5: Download Your Resume:</h3>Once you're satisfied with your resume, you can download it in PDF format. This ensures your resume is of high quality and looks great everywhere.</p>
        <p class="text-lg text-gray-700 mb-4"><h3>Step 6: Share Your Resume</h3>Your resume is now ready! You can easily share it with potential employers or upload it to job portals to take the next step in your career.

At Resume Buldir, we support you every step of the way, so you can create a great resume and update it whenever needed. Start your journey today and get ready for new opportunities!

</p>
</p>
   
    </section>

    <!-- Resume Section -->
    <section id="RESUME" class="bg-gray-50 py-16 px-4">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold text-red-700 mb-6">Simple Resume</h1>
            <div class="w-32 h-1 bg-teal-600 mx-auto rounded mb-6"></div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <img src="premgan_page-0001.jpg" alt="Sample Resume 1" class="w-full h-auto rounded-lg shadow-lg">
                <img src="2a.jpg" alt="Sample Resume 2" class="w-full h-auto rounded-lg shadow-lg">
                <img src="Resume Maker_page-0001.jpg" alt="Sample Resume 3" class="w-full h-auto rounded-lg shadow-lg">
                <img src="Resume Maker1_page-0001.jpg" alt="Sample Resume 3" class="w-full h-auto rounded-lg shadow-lg">
                <img src="Resume Maker2_page-0001.jpg" alt="Sample Resume 3" class="w-full h-auto rounded-lg shadow-lg">
                <img src="Resume Maker123_page-0001.jpg" alt="Sample Resume 3" class="w-full h-auto rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="CONTACT" class="bg-teal-50 py-16 px-4 text-center">
        <h1 class="text-3xl font-bold text-gray-700 mb-6">Contact Us</h1>
        <div class="w-32 h-1 bg-teal-600 mx-auto rounded mb-6"></div>
        <p class="text-lg text-gray-700">sales@keenable.in</p>
        <p class="text-lg text-gray-700">B149, Sector 63, Noida, India - 201301</p>
        <p class="text-lg text-gray-700">Project Developer: Prem Kumar</p>
        <p class="text-lg text-gray-700">Contact Us : 9570447294</p>
    </section>

</body>

</html>
