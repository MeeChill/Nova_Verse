<!-- profile-edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="{{asset('css/edit.css')}}">
</head>
<body>

<div class="container">
    <div class="profile-container">
        <div class="profile-header">
            <img src="{{asset('Nv/Banner.jpg')}}" alt="Background Image" class="background-image">
            <div class="profile-picture">
                <img src="{{asset('Nv/Photo Profile.jpg')}}" alt="Profile Picture">
            </div>
        </div>

        <div class="profile-content">
            <form action="{{ route('profile.update') }}" method="post">
                @csrf
                @method('PUT')

                <div class="profile-info">
                    <div class="profile-item">
                        <h3 class="label">USERNAME</h3>
                        <input type="text" name="name" value="{{ Auth::user()->name }}" required>
                    </div>

                    <div class="profile-item">
                        <h3 class="label">EMAIL</h3>
                        <input type="email" name="email" value="{{ Auth::user()->email }}" required>
                    </div>

                </div>

                <div class="btn">
                    <button type="submit" class="edit-button">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
