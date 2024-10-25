<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
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

              <a class="logo" href="home"><img src="{{asset("Logo.png")}}"></a>

            </div>

</header>

<div class="profile-container">
    @php
    $username = Auth::user()->name;
    $initial = strtoupper($username[0]);
    $email = Auth::user()->email;
    $password = Auth::user()->password;
    @endphp

    <div class="profile-header">
        <img src="Nv/Banner.jpg" alt="Background Image" class="background-image">
        <div class="profile-picture">
            <img src="Nv/Photo Profile.jpg" alt="Profile Picture">
        </div>
    </div>

    <div class="profile-content">
        <a href="{{url('/edit')}}" class="edit-button" style="text-decoration:none">Edit User Profile</a>
        <div class="profile-info">
            <div class="profile-item">
                <h3 class="label">USERNAME</h3>
                <h3 class="value">{{ htmlspecialchars($username) }}</h3>
            </div>

            <div class="profile-item">
                <h3 class="label">EMAIL</h3>
                <div class="value">
                    <input type="password" id="email" value="{{ $email }}" readonly>
                    <button type="button" onclick="toggleView('email')">View</button>
                </div>
            </div>

            <div class="profile-item">
                <h3 class="label">PASSWORD</h3>
                <div class="value">
                    <input type="password" id="password" value="{{ $password }}" readonly>
                    <button type="button" onclick="toggleView('password')">View</button>
                </div>
            </div>

            <div class="profile-item">
                <h3 class="label">Status</h3>
                <h3 class="value">User</h3>
            </div>
        </div>
        <div class="btn">
            <a href="#" class="admin-button">Become an Admin</a>
        </div>
    </div>
</div>



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
    function toggleDropdown() {
    const dropdownMenu = document.querySelector('.profile .dropdown-menu');
    dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    }

    function toggleView(fieldId) {
        const inputField = document.getElementById(fieldId);
        const currentType = inputField.getAttribute('type');

        if (currentType === 'password') {
            inputField.setAttribute('type', 'text');
        } else {
            inputField.setAttribute('type', 'password');
        }
    }
</script>
</body>
</html>
