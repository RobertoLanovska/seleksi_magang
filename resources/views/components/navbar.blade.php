<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Green Haven Project</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    nav {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999; 
        background-color: #ffffff; 
        padding: 0 60px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 80px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        transition: box-shadow 0.3s ease;
    }

    nav.scrolled {
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }


    .logo {
        width: 150px;
        height: 50px;
        background-image: url('{{ asset("image/logo_ghp.png") }}');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        user-select: none;
        -webkit-user-drag: none;
    }

    .nav-menu {
        list-style: none;
        display: flex;
        gap: 40px;
        justify-content: center;
        flex: 1;
    }

    .nav-menu a {
        text-decoration: none;
        color: #333333;
        font-size: 14px;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .nav-menu a:hover {
        color: #7db342;
    }


    .navbar-right .btn-plant {
        background-color: #ffffff;
        border: 1px solid #2d5016;
        color: #2d5016;
        padding: 10px 38px;
        border-radius: 9999px;
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
    }

    .navbar-right .btn-plant:hover {
        background-color: #2d5016;
        color: #ffffff;
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
        nav {
            padding: 0 20px;
            height: 60px;
        }

        .nav-menu {
            display: none;
        }

        .navbar-right .btn-plant {
            padding: 5px 18px;
            font-size: 12px;
        }

        .logo {
            width: 120px;
            height: 40px;
        }
    }
</style>
<body>
    <nav id="navbar">
        <div class="logo"></div>

        <ul class="nav-menu">
            <li><a href="#about">About Green Haven</a></li>
            <li><a href="#events">Event Details</a></li>
            <li><a href="#sponsors">Our Sponsors</a></li>
            <li><a href="#leaderboard">Leaderboard</a></li>
        </ul>

        <div class="navbar-right">
            <a href="#plant" class="btn-plant">Plant a Mangrove</a>
        </div>
    </nav>

    <div style="height:80px;"></div>

    <script>
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 10) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    </script>
</body>
</html>
