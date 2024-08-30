<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Settings</title>
    <link rel="stylesheet" href="{{asset('editprofile.css')}}">
</head>
<body>

<header>
    <div class="navbar">
        <label class="hamburger">
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

        <a class="logo" href="home"><img src="{{asset('Logo.png')}}"></a>
    </div>
</header>

<div class="user-settings">
    <div class="banner">
        <img src="Nv/banner.jpg" alt="Banner Image" class="banner-image">
        <button class="edit-banner-btn">
            <img src="edit-icon.png" alt="Edit Icon">
            Edit Banner
        </button>
    </div>
    <div class="profile-picture">
        <img src="Nv/Photo Profile.jpg" alt="Profile Picture">
        <button class="edit-profile-btn">
            <img src="edit-icon.png" alt="Edit Icon">
        </button>
    </div>
    <div class="user-info">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" value="AcumalakaOnly">
            <button class="confirm-btn">Confirm</button>
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" value="acumalaka@acumalaka.com">
            <button class="confirm-btn">Confirm</button>
        </div>
        <div class="change-password">
            <button class="change-password-btn">Change Password</button>
        </div>
    </div>
</div>
</body>
</html>
