    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* ===== Base Styles ===== */
        :root {
            --primary: #E50914;
            /* News red */
            --primary-dark: #B00710;
            --secondary: #1A1A1A;
            --accent: #FFD700;
            /* Gold for highlights */
            --light: #F8F8F8;
            --dark: #121212;
            --text: #333333;
            --text-light: #777777;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', 'Helvetica Neue', Arial, sans-serif;
        }

        body {
            background-color: var(--light);
            color: var(--text);
        }

        /* ===== Breaking News Alert Bar ===== */
        .alert-bar {
            background-color: var(--primary);
            color: white;
            padding: 8px 0;
            font-size: 14px;
            position: relative;
            overflow: hidden;
            border-bottom: 2px solid var(--accent);
        }

        .alert-container {
            display: flex;
            align-items: center;
            white-space: nowrap;
            animation: ticker 30s linear infinite;
        }

        .alert-label {
            background-color: var(--dark);
            color: white;
            padding: 4px 12px;
            margin-right: 15px;
            font-weight: 800;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
        }

        .alert-label i {
            margin-right: 8px;
            color: var(--accent);
        }

        .alert-content {
            display: inline-flex;
            align-items: center;
        }

        .alert-item {
            display: inline-flex;
            align-items: center;
            margin-right: 40px;
            position: relative;
        }

        .alert-item:after {
            content: "•";
            position: absolute;
            right: -25px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 20px;
        }

        .alert-item:last-child:after {
            display: none;
        }

        .alert-time {
            font-size: 12px;
            opacity: 0.8;
            margin-right: 10px;
            font-family: monospace;
        }

        @keyframes ticker {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        /* ===== Main Header ===== */
        .main-header {
            background-color: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            display: grid;
            grid-template-columns: auto 1fr auto;
            align-items: center;
            padding: 15px 5%;
            max-width: 1400px;
            margin: 0 auto;
            gap: 30px;
        }

        /* Logo Section */
        .logo-section {
            display: flex;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: transform 0.3s;
        }

        .logo:hover {
            transform: scale(1.02);
        }

        .logo-icon {
            font-size: 36px;
            color: var(--primary);
            margin-right: 12px;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
        }

        .logo-main {
            font-size: 28px;
            font-weight: 900;
            color: var(--dark);
            line-height: 1;
            letter-spacing: -0.5px;
        }

        .logo-tagline {
            font-size: 10px;
            font-weight: 600;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 2px;
        }

        /* Live Badge */
        .live-badge {
            background-color: var(--primary);
            color: white;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 700;
            margin-left: 15px;
            display: flex;
            align-items: center;
            animation: pulse 1.5s infinite;
        }

        .live-badge i {
            margin-right: 5px;
            font-size: 10px;
        }

        @keyframes pulse {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }

            100% {
                opacity: 1;
            }
        }

        /* Date/Time/Weather */
        .info-bar {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            font-size: 14px;
            color: var(--text-light);
        }

        .current-time {
            font-weight: 700;
            color: var(--dark);
            font-family: 'Courier New', monospace;
        }

        .weather {
            display: flex;
            align-items: center;
            margin-top: 3px;
        }

        .weather i {
            margin-right: 5px;
            color: var(--primary);
        }

        /* Navigation */
        .nav-container {
            grid-column: 1 / -1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .nav-links {
            display: flex;
            list-style: none;
            flex-wrap: wrap;
        }

        .nav-links li {
            margin-right: 20px;
            position: relative;
        }

        .nav-links a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 700;
            font-size: 15px;
            text-transform: uppercase;
            transition: all 0.3s;
            position: relative;
            letter-spacing: 0.5px;
            padding: 5px 0;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            background: var(--primary);
            bottom: 0;
            left: 0;
            transition: width 0.3s;
        }

        .nav-links a:hover:after,
        .nav-links .active a:after {
            width: 100%;
        }

        .nav-links .active a {
            color: var(--primary);
        }

        /* Search/Social */
        .utility-buttons {
            display: flex;
            align-items: center;
        }

        .search-toggle {
            background: none;
            border: none;
            color: var(--dark);
            font-size: 18px;
            cursor: pointer;
            margin-left: 20px;
            transition: color 0.3s;
        }

        .search-toggle:hover {
            color: var(--primary);
        }

        .social-links {
            display: flex;
            margin-left: 20px;
        }

        .social-links a {
            color: var(--dark);
            margin-left: 15px;
            font-size: 16px;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: var(--primary);
        }

        /* Mobile Menu Toggle */
        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 24px;
            color: var(--dark);
        }

        /* Search Overlay */
        .search-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 2000;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
        }

        .search-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .search-form {
            width: 80%;
            max-width: 800px;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 20px;
            font-size: 24px;
            background: transparent;
            border: none;
            border-bottom: 3px solid var(--primary);
            color: white;
            outline: none;
        }

        .search-close {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            color: white;
            font-size: 24px;
            cursor: pointer;
        }

        /* ===== Responsive Styles ===== */
        @media (max-width: 1200px) {
            .header-container {
                padding: 15px 3%;
            }

            .nav-links li {
                margin-right: 15px;
            }
        }

        @media (max-width: 992px) {
            .header-container {
                grid-template-columns: auto auto;
            }

            .info-bar {
                grid-column: 2;
                grid-row: 1;
            }

            .nav-container {
                grid-column: 1 / -1;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                grid-template-columns: 1fr auto;
                gap: 15px;
            }

            .logo-section {
                grid-column: 1;
            }

            .info-bar {
                grid-column: 2;
            }

            .nav-container {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links {
                flex-direction: column;
                width: 100%;
                display: none;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links li {
                margin: 10px 0;
            }

            .utility-buttons {
                margin-top: 15px;
                width: 100%;
                justify-content: flex-end;
            }

            .menu-toggle {
                display: block;
                position: absolute;
                top: 20px;
                right: 3%;
            }

            .alert-label span {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .logo-icon {
                font-size: 28px;
                margin-right: 8px;
            }

            .logo-main {
                font-size: 22px;
            }

            .live-badge {
                margin-left: 8px;
                font-size: 10px;
                padding: 3px 6px;
            }

            .info-bar {
                font-size: 12px;
            }

            .search-toggle,
            .social-links a {
                font-size: 16px;
            }
        }
    </style>
    </head>

    <body>
        <!-- Breaking News Alert Bar -->
        <div class="alert-bar">
            <div class="alert-container">
                <div class="alert-label">
                    <i class="fas fa-bolt"></i>
                    <span>Breaking</span>
                </div>
                <div class="alert-content">
                    <div class="alert-item">
                        <span class="alert-time">10:45 AM</span>
                        <span>Parliament passes landmark climate bill with bipartisan support</span>
                    </div>
                    <div class="alert-item">
                        <span class="alert-time">10:32 AM</span>
                        <span>Stock markets reach all-time high as tech shares surge</span>
                    </div>
                    <div class="alert-item">
                        <span class="alert-time">10:15 AM</span>
                        <span>Breaking: Major earthquake reported in Pacific region</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header -->
        <header class="main-header">
            <div class="header-container">
                <!-- Logo Section -->
                <div class="logo-section">
                    <a href="index.html" class="logo">
                        <i class="fas fa-newspaper logo-icon"></i>
                        <div class="logo-text">
                            <div class="logo-main">PRIME NEWS</div>
                            <div class="logo-tagline">Truth First</div>
                        </div>
                    </a>
                    <div class="live-badge">
                        <i class="fas fa-circle"></i>
                        LIVE
                    </div>
                </div>

                <!-- Date/Time/Weather -->
                <div class="info-bar">
                    <div class="current-time">Monday, Sep 18, 2023 | 10:45:32 AM EST</div>
                    <div class="weather">
                        <i class="fas fa-sun"></i>
                        <span>New York: 72°F (22°C)</span>
                    </div>
                </div>

                <!-- Mobile Menu Toggle -->
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>

                <!-- Navigation -->
                <div class="nav-container">
                    <ul class="nav-links">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">World</a></li>
                        <li><a href="#">Politics</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Science</a></li>
                        <li><a href="#">Health</a></li>
                        <li><a href="#">Entertainment</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Opinion</a></li>
                    </ul>

                    <div class="utility-buttons">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <button class="search-toggle">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Search Overlay -->
        <div class="search-overlay">
            <div class="search-form">
                <input type="text" class="search-input" placeholder="Search for news...">
                <button class="search-close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <!-- JavaScript -->
        <script>
            // Mobile Menu Toggle
            const menuToggle = document.querySelector('.menu-toggle');
            const navLinks = document.querySelector('.nav-links');

            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                menuToggle.innerHTML = navLinks.classList.contains('active') ?
                    '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
            });

            // Search Toggle
            const searchToggle = document.querySelector('.search-toggle');
            const searchOverlay = document.querySelector('.search-overlay');
            const searchClose = document.querySelector('.search-close');

            searchToggle.addEventListener('click', () => {
                searchOverlay.classList.add('active');
                document.querySelector('.search-input').focus();
            });

            searchClose.addEventListener('click', () => {
                searchOverlay.classList.remove('active');
            });

            // Update Time
            function updateTime() {
                const now = new Date();
                const options = {
                    weekday: 'long',
                    month: 'short',
                    day: 'numeric',
                    year: 'numeric'
                };
                const dateStr = now.toLocaleDateString('en-US', options);

                let hours = now.getHours();
                const ampm = hours >= 12 ? 'PM' : 'AM';
                hours = hours % 12;
                hours = hours ? hours : 12;
                const minutes = now.getMinutes().toString().padStart(2, '0');
                const seconds = now.getSeconds().toString().padStart(2, '0');

                document.querySelector('.current-time').textContent =
                    `${dateStr} | ${hours}:${minutes}:${seconds} ${ampm} EST`;
            }

            updateTime();
            setInterval(updateTime, 1000);

            // Simulate weather API call
            function updateWeather() {
                const weatherIcons = {
                    'sunny': 'fa-sun',
                    'cloudy': 'fa-cloud',
                    'rainy': 'fa-cloud-rain',
                    'stormy': 'fa-bolt'
                };

                // In a real implementation, you would fetch this from a weather API
                const weatherData = {
                    condition: 'sunny',
                    temp: 72,
                    location: 'New York'
                };

                const weatherIcon = document.querySelector('.weather i');
                weatherIcon.className = `fas ${weatherIcons[weatherData.condition]}`;

                document.querySelector('.weather span').textContent =
                    `${weatherData.location}: ${weatherData.temp}°F (${Math.round((weatherData.temp - 32) * 5/9)}°C)`;
            }

            updateWeather();
        </script>