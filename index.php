

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Webshop Hovenier</title>
    <link rel="stylesheet" href="assets/style.css" type="text/css"/>
    <style>
        body{
            margin: 0;
            overflow-x: hidden;
        }

        .nav-open .nav {
            transform: translateX(0);
        }

        .nav-open .main {
             transform: translateX(350px);
        }


        .nav {
            width: 350px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: green; /* kan je veranderen */
            transform: translateX(-350px);
            transition: transform; 0.2s;
            overflow: hidden;
        }

        .nav-close {
            background: none;
            border: none;
            display: flex;
            align-items: center;
            margin-left: auto;
            padding: 15px 25px;
            color: #dddddd;
            cursor: pointer;
        }


        .nav-links-container {
            box-shadow: 0 -10px 10px rgba(0, 0, 0, 0.15);

        }

        .nav-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 25px;
            text-decoration: none;
            color: #dddddd;
        }
        .nav-text {
            font-size: 22px;
            font-family: 'Assistant', sans-serif;
            font-weight: 500;
        }

        .nav-link:hover,
        .nav-close:hover {
            background: rgba(255, 255, 255, 0.05);
        }


        .main {
            transition: 0.2s;
        }
    </style>
</head>
<body class="nav-open">
<nav class="nav">
    <button type="button" class="nav-close">
        <ion-icon name="close-outline" size="large"></ion-icon>
    </button>
    <div class="nav-links-container">
        <a href="index.php" class="nav-link">
            <span class="nav-text">Homepagina</span>
            <ion-icon name="home-outline" size="large"></ion-icon>
        </a>
        <a href="shop.php" class="nav-link">
            <span class="nav-text">Producten</span>
            <ion-icon name="cube-outline" size="large"></ion-icon>
        </a>
        <a href="contact.php" class="nav-link">
            <span class="nav-text">Contact</span>
            <ion-icon name="call-outline" size="large"></ion-icon>
        </a>
        <a href="welcome.php" class="nav-link">
            <span class="nav-text">Profiel</span>
            <ion-icon name="accessibility-outline" size="large"></ion-icon>
        </a>
        <a href="login.php" class="nav-link">
            <span class="nav-text">Log Out</span>
            <ion-icon name="log-in-outline" size="large"></ion-icon>
        </a>
    </div>
</nav>
<main class="main">
    <button type="button" onclick="toggleNav()">Open Menu</button>
</main>
<script>
    function toggleNav() {
        document.body.classList.toggle("nav-open");
    }
        document.querySelector(".nav-close").addEventListener("click", () => {
            toggleNav();
        });

</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




</body>
</html>