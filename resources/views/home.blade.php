    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manhwa Website</title>
        <link rel="stylesheet" href="{{asset('css/home.css')}}">
    </head>
    <body>

    <header>
        <div class="navbar">
            <label class="hamburger" >
                    <input type="checkbox" id="navToggle" onclick="toggleNav()">
                    <svg viewBox="0 0 32 32">
                    <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                    <path class="line" d="M7 16 27 16"></path>
                    </svg>
                </label>

                <div id="mySidebar" class="sidebar">
                    <div class="sidebar-header">
                        <img src="logo.png" alt="Logo" class="logo">
                    </div>
                    <div class="menu-container">
                        <div class="menu-column">
                            <h2>MOVIES</h2>
                            <a href="#">Most Popular Movies</a>
                            <a href="#">Browse Movies by Genre</a>
                            <a href="#">Movies News</a>
                        </div>
                        <div class="menu-column">
                            <h2>TV Shows</h2>
                            <a href="#">Anime</a>
                            <a href="#">Most Popular Anime</a>
                            <a href="#">Browse Anime by Genre</a>
                            <a href="#">Donghua</a>
                            <a href="#">Most Popular Donghua</a>
                            <a href="#">Browse Donghua by Genre</a>
                            <a href="#">Cartoon</a>
                        </div>
                        <div class="menu-column">
                            <h2>COMICS</h2>
                            <a href="#">Manga</a>
                            <a href="#">Most Popular Manga</a>
                            <a href="#">Browse Manga by Genre</a>
                            <a href="#">Manhwa</a>
                            <a href="#">Most Popular Manhwa</a>
                            <a href="#">Browse Manhwa by Genre</a>
                        </div>
                        <div class="menu-column">
                            <h2>NOVELS</h2>
                            <a href="#">Novels</a>
                            <a href="#">Most Popular Novels</a>
                            <a href="#">Browse Novels by Genre</a>
                        </div>
                        <div class="menu-column">
                            <h2>COMMUNITY</h2>
                            <a href="#">Help Center</a>
                            <a href="#">Contributor Zone</a>
                            <a href="#">Polls</a>
                        </div>
                    </div>
                </div>

                <a class="logo" href="#home"><img src="{{asset("Logo.png")}}"></a>

                </div>

                <div class="search-container">
                    <div class="search-bar">
                        <img src="{{asset('Search_Icon.png')}}" class="search-icon" onclick="toggleSearchBar()">
                        <input type="text" placeholder="Search...">
                        <span class="close-icon" onclick="toggleSearchBar()">&times;</span>
                    </div>
                </div>

                <div class="profile" onclick="toggleDropdown()">
                    <div class="profile-initial">{{session('initial_name')}}</div>
                    <div class="dropdown-menu">
                        <a href="profile">Profile</a>
                        <a href="bookmark.php">Bookmark</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </div>
                </div>
                </div>
                </header>


                <div class="banner-container">
                    <div class="banner-slider">
                        <div class="slider-item">
                            <img src="{{asset('Top-Manga-Banner.png')}}" alt="Manhwa 1">
                        </div>
                        <div class="slider-item">
                            <img src="{{asset('Top-Manhwa-Banner.png')}}" alt="Manhwa 2">
                        </div>
                        <div class="slider-item">
                            <img src="{{asset('Top-Movies-Banner.png')}}" alt="Manhwa 2">
                        </div>
                        <!-- Tambahkan slider item lainnya sesuai kebutuhan -->
                    </div>
                    <div class="slider-controls">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>

        <h2 class="judul">History</h2>
        <section class="history">
        <div class="container">
            <div class="grid">
                <div class="card">
                    <img src="{{asset('count.png')}}" alt="Higehiro">
                    <h3>Higehiro</h3>
                </div>
                <div class="card">
                    <img src="path/to/your/image/Bocchi_The_Rock.png" alt="Bocchi The Rock">
                    <h3>Bocchi The Rock</h3>
                </div>
                <div class="card">
                    <img src="path/to/your/image/Oshi_No_Ko.png" alt="Oshi No Ko">
                    <h3>Oshi No Ko</h3>
                </div>
                <div class="card">
                    <img src="path/to/your/image/SLA_HO.png" alt="SLA:HO">
                    <h3>SLA:HO</h3>
                </div>
            </div>
        </div>
    </section>



    <h2 class="judul">Recommended</h2>
        <section class="recommended">
            <div class="container">
                <div class="grid">
                    <div class="card">
                        <img src="https://via.placeholder.com/200x300" alt="Manhwa 1">
                        <h3>Solo Leveling</h3>
                    </div>
                    <div class="card">
                        <img src="https://via.placeholder.com/200x300" alt="Manhwa 2">
                        <h3>TBATE</h3>
                    </div>
                    <div class="card">
                        <img src="https://via.placeholder.com/200x300" alt="Manhwa 3">
                        <h3>Bocchi The Rock</h3>
                    </div>
                    <div class="card">
                        <img src="https://via.placeholder.com/200x300" alt="Manhwa 4">
                        <h3>Oshi No Ko</h3>
                    </div>
                    <div class="card">
                        <img src="https://via.placeholder.com/200x300" alt="Manhwa 5">
                        <h3>WCNKL</h3>
                    </div>
                    <div class="card">
                        <img src="https://via.placeholder.com/200x300" alt="Manhwa 6">
                        <h3>TRSOADIAA</h3>
                    </div>
                    <div class="card">
                        <img src="https://via.placeholder.com/200x300" alt="Manhwa 7">
                        <h3>TOTCF</h3>
                    </div>
                </div>
            </div>
        </section>

        <h2 class="judul">Complete</h2>
        <section class="complete">
            <div class="container">
                <div class="grid">
                    <div class="card">
                        <img src="{{asset('count.png')}}" alt="Manhwa 1">
                        <h3>Solo Leveling</h3>
                    </div>
                    <div class="card">
                        <img src="https://via.placeholder.com/200x300" alt="Manhwa 2">
                        <h3>WCNKL</h3>
                    </div>
                    <div class="card">
                        <div class="show-more">
                            <h3>Show More</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <p>&copy; 2023 Manhwa Website. All rights reserved.</p>
            </div>
        </footer>

        <script src="script.js"></script>
    <script>
        function toggleNav() {
            const checkbox = document.getElementById('navToggle');
            const navMenu = document.getElementById('navMenu');

                    if (checkbox.checked) {
                        openNav();
                    } else {
                        closeNav();
                    }
                }

                function openNav() {
                    const sidebar = document.getElementById("mySidebar");
                    sidebar.style.display = "block";
                    setTimeout(function() {
                        sidebar.style.transform = "translateX(0)";
                    }, 10); // small delay to trigger CSS transition
                }

                function closeNav() {
                    const sidebar = document.getElementById("mySidebar");
                    sidebar.style.transform = "translateX(-100%)";
                    setTimeout(function() {
                        sidebar.style.display = "none";
                    }, 500); // match the delay with the transition duration
                }

                function toggleSearchBar() {
                    var searchBar = document.querySelector('.search-bar');
                    searchBar.classList.toggle('open');
                }



            function toggleSearchBar() {
            const searchBar = document.querySelector('.search-bar');
            searchBar.classList.toggle('open');
        }

        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        let currentSlide = 0;

        function showSlide(n) {
            slides.forEach((slide, index) => {
            slide.style.left = `${index * 100}%`;
            slide.style.display = 'block';
            });

            dots.forEach(dot => dot.classList.remove('active'));
            dots[n].classList.add('active');

            slides[n].style.left = '0';
            currentSlide = n;
        }

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => showSlide(index));
        });

        setInterval(() => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }, 4000);

        // Initial slide display
        showSlide(0);

        document.addEventListener('DOMContentLoaded', function() {
            const grid = document.querySelector('.grid');

            grid.addEventListener('wheel', function(event) {
                if (event.deltaY !== 0) {
                    event.preventDefault();
                    grid.scrollLeft += event.deltaY;
                }
            });
        });

        </script>
        <script src="{{asset('script.js')}}"></script>
    </body>
    </html>
