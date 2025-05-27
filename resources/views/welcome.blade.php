<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Potato Portfolio</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <div class="navbar">
        <div>Home</div>
        <div>About</div>
        <div>Projects</div>
        <div>Experiences</div>
    </div>

    <div class="main">
        <div class="photo">
            <img src="{{asset('assets/images/myphoto.jpg')}}" alt="My Photo">
        </div>
        <div class="intro">
            <p><i class="fas fa-user"></i> Hi, I am <strong>Muhsina</strong>.</p>
            <p><i class="fas fa-heart"></i> Happy to serve you!</p>
        </div>
    </div>

    <div class="contact">
        <p><i class="fas fa-envelope"></i> Contact Me</p>
    </div>

</body>
</html>
