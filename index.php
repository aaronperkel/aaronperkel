<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aaron Perkel – CS Grad and Network Technician</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="Aaron Coleman Perkel">
    <meta name="description" content="
        Computer science grad, network technician, and
        avgeek blending tech and flight. Check
        out my projects, resume, & more.
    ">
    <link rel="icon" href="public/img/favicon.ico">
    <link rel="canonical" href="https://aaronperkel.com/" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c428e5511d.js" crossorigin="anonymous"></script>

    <!-- Main stylesheet -->
    <link rel="stylesheet" href="css/style.css?1753272159">

    <!-- Project Card JS -->
    <script defer src="js/main.js?<?php echo time(); ?>"></script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Aaron Coleman Perkel",
        "url": "https://aaronperkel.com",
        "sameAs": [
            "https://github.com/aaronperkel",
            "https://linkedin.com/in/aaronperkel",
            "https://youtube.com/@aaronperkel",
            "https://instagram.com/aaronperkel",
            "https://aperkel.w3.uvm.edu"
        ],
        "jobTitle": "Network Technician",
        "worksFor": {
            "@type": "Organization",
            "name": "University of Vermont"
        },
        "alumniOf": [
            {
            "@type": "CollegeOrUniversity",
            "name": "University of Vermont"
            }
        ],
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "81 Buell St #1",
            "addressLocality": "Burlington",
            "addressRegion": "VT",
            "postalCode": "05401",
            "addressCountry": "US"
        },
        "birthPlace": "Richmond, VA",
        "birthDate": "2003-11-11",
        "gender": "Male",
        "image": "https://aperkel.w3.uvm.edu/public/img/headshot.webp"
    }
    </script>
</head>

<body class="index">
    <header class="site-header">
    <div class="container">
        <img src="public/img/headshot.webp" alt="Aaron Perkel" class="logo">
        <h1 class="site-title">Aaron Perkel</h1>
    </div>
</header>    <!-- src/nav.php -->
<nav class="site-nav">
  <a href="index.php" class="active">Home</a>
  <a href="about.php" class="">About</a>
  <a href="resume.php" class="">Resume</a>
</nav><div id="popup" class="popup" onclick="closePopup(event)">
    <!-- move these two buttons out here, not inside .popup-content -->
    <button id="popup-prev" class="popup-nav"><i class="fa-solid fa-caret-left"></i></button>
    <div class="popup-content" onclick="event.stopPropagation()">
        <span class="close" onclick="closePopup(event)"><i class="fa-solid fa-xmark fa-xl"
                style="color: rbga(255, 255, 255, 0.1)"></i></span>
        <img id="popup-img" class="popup-img">
        <div id="popup-text" class="popup-text"></div>
    </div>
    <button id="popup-next" class="popup-nav"><i class="fa-solid fa-caret-right"></i></button>
</div>
<main class="home container">
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Hello! I’m Aaron.</h1>
            <p>Network Technician @ UVM, B.S. in Computer Science, & Aviation Enthusiast.</p>
        </div>
    </section>

    <section class="projects">
        <h2 class="section-title">Projects</h2>
        <div class="grid projects-grid">
            <!-- UVM Sublets -->
            <article class="card"
                data-desc='UVM Sublets is a PHP/MySQL platform for UVM students to post & manage sublet listings. Uses noUiSlider & Leaflet for filters & interactive maps. <a href="https://github.com/aaronperkel/sublet" target="_blank">GitHub Repo</a>'>
                <img src="public/img/sublet.webp" alt="UVM Sublets" class="card-img">
                <h3 class="card-title">UVM Sublets</h3>
            </article>

            <!-- Utility Manager -->
            <article class="card"
                data-desc='A personal portal for my two roommates’ and my utility bills—built with HTML, CSS, PHP, SQL & Python. Features include bill listing, cost splitting, PDF downloads, admin portal, email reminders (automated via Raspberry Pi). <a href="https://github.com/aaronperkel/Utility-Manager" target="_blank">GitHub Repo</a>'>
                <img src="public/img/utility.webp" alt="Utility Manager" class="card-img">
                <h3 class="card-title">Utility Manager</h3>
            </article>

            <!-- Finance Tracker -->
            <article class="card"
                data-desc='Developed a full-stack “Finance Tracker” web app (PHP, MySQL, JavaScript/Chart.js, CSS) to help users monitor net worth, manage accounts, and log work hours. <a href="https://github.com/aaronperkel/finance-tracker" target="_blank">GitHub Repo</a>'>
                <img src="public/img/finance-tracker.webp" alt="Finance Tracker" class="card-img">
                <h3 class="card-title">Finance Tracker</h3>
            </article>

            <!-- Blob Kart -->
            <article class="card"
                data-desc='Blob Kart is a game inspired by Mario Kart created in C++ using GLM, GLFW, and OpenGL. My partner Owen Cook and I created this project for our Advanced Programming class at UVM. Graphics starter code was provided by the teaching assistants and the instructor. <a href="https://github.com/owncook/Blob-Kart" target="_blank">GitHub Repo</a>'>
                <img src="public/img/img.gif" alt="Blob Kart" class="card-img">
                <h3 class="card-title">Blob Kart</h3>
            </article>

            <!-- Web Site Development Final -->
            <article class="card"
                data-desc='This project was built with Lily Bonds using HTML, CSS & PHP for a fictitious company Green Mountain Cycles. It includes 5 pages and a form that emails submissions. <a href="https://courses.aperkel.w3.uvm.edu/cs1080/final/" target="_blank">View Site</a>'>
                <img src="public/img/cs1080final.webp" alt="Web Site Dev Final" class="card-img">
                <h3 class="card-title">Web Site Dev Final</h3>
            </article>

            <!-- DormKit -->
            <article class="card"
                data-desc='DormKit is a "smart dorm" prototype—Flask web app + Raspberry Pi + Arduino to control dorm electronics remotely. Built with Owen Cook, Alexa Witkin & Sam Zimpfer. <a href="https://github.com/aaronperkel/DormKit" target="_blank">GitHub Repo</a>'>
                <img src="public/img/dormkit.webp" alt="DormKit" class="card-img">
                <h3 class="card-title">DormKit</h3>
            </article>

            <!-- Custom PCB -->
            <article class="card"
                data-desc='Designed a custom KiCad PCB for a prosthetic glove detecting high temperatures to assist people with neuropathy.'>
                <img src="public/img/pcb.webp" alt="Custom PCB" class="card-img">
                <h3 class="card-title">Custom PCB</h3>
            </article>

            <!-- Lights Out -->
            <article class="card"
                data-desc='Lights Out is a puzzle where toggling a cell and its neighbors toggles lights on/off. Goal: turn off all lights. Built in C++ with GLM, GLFW & OpenGL by Owen Cook and me. <a href="https://github.com/aaronperkel/Lights-Out" target="_blank">GitHub Repo</a>'>
                <img src="public/img/lightsout.gif" alt="Lights Out" class="card-img">
                <h3 class="card-title">Lights Out</h3>
            </article>

            <!-- CodeBuilder -->
            <article class="card"
                data-desc='CodeBuilder is an iOS app to learn coding via drag‑and‑drop code blocks, articles, daily challenges & community forum. <a href="https://github.com/gohacki/CodeBuilder" target="_blank">GitHub Repo</a>'>
                <img src="public/img/combine.webp" alt="CodeBuilder" class="card-img">
                <h3 class="card-title">CodeBuilder</h3>
            </article>

            <!-- Room Status Sign -->
            <article class="card"
                data-desc='An E‑Ink door display showing my current status (e.g. "Do Not Disturb") with timeframe, powered by Flask on Raspberry Pi. <a href="https://github.com/aaronperkel/Room-Display-Sign" target="_blank">GitHub Repo</a>'>
                <img src="public/img/sign.webp" alt="Room Status Sign" class="card-img">
                <h3 class="card-title">Room Status Sign</h3>
            </article>
        </div>
    </section>
</main>
<footer class="site-footer">
  <div class="container">
    <p>© 2025 Aaron Perkel</p>
    <div class="social-icons">
      <a href="https://github.com/aaronperkel" aria-label="GitHub"><i class="fab fa-github"></i></a>
      <a href="https://linkedin.com/in/aaronperkel" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
      <a href="https://youtube.com/@aaronperkel" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
      <a href="https://instagram.com/aaronperkel" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
</footer>
</body>

</html>