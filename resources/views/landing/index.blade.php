<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENITIPAN HEWAN TEGAL</title>
    <link rel="stylesheet" href="{{ asset('landingthemes/style.css') }}">
    <!-- Google Fonts Links For Icon -->
    <link rel="stylesheet"
        href="https://png.pngtree.com/background/20230516/original/pngtree-cute-kitten-wallpapers-picture-image_2615776.jpg ed:opsz,wght,FILL,GRAD@24,400,0,0">
</head>

<body>
    <header>
        <nav class="navbar">
            <a class="logo" href="#">MyPet<span>.</span></a>
            <ul class="menu-links">
                <span id="close-menu-btn" class="material-symbols-outlined">close</span>
            </ul>
            <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
        </nav>
    </header>
    <section class="hero-section">
        <div class="content">
            <h2>Selamat Datang Di Website Kami</h2>
            <p>
                MyPet adalah tempat peminitipan hewan yang terpercaya dengan fasilitas yang memadai <br>Anda dapat melakukan reserfasi dengan
                melalui website kami.
            </p>
            <button onclick="javascript:window.location.href='clientdashboard'">MASUK </button>
        </div>
    </section>
    <script>
        const header = document.querySelector("header");
        const hamburgerBtn = document.querySelector("#hamburger-btn");
        const closeMenuBtn = document.querySelector("#close-menu-btn");

        // Toggle mobile menu on hamburger button click
        hamburgerBtn.addEventListener("click", () =>
            header.classList.toggle("show-mobile-menu"));
        // Close mobile menu on close button click
        closeMenuBtn.addEventListener("click", () =>
            hamburgerBtn.click());
    </script>

</body>

</html>
