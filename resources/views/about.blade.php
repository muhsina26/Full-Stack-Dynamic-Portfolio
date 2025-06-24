@extends('layout._app')

@section('title', 'About - Muhsina')

@section('content')
  <section class="about-section">
    <h1>About Me</h1>
    <p>
      I'm <span class="purple">Muhsina Tasnim</span>, a 4th-year CSE student at Daffodil International University, blending logic and creativity in everything I do.
    </p>

    <div class="journey">
      <h2><i class="fas fa-code"></i> My Journey</h2>
      <p>
        I began coding in my very first year through competitive programming, participating in ICPC and other contests. After two years of CP, I transitioned into native Android development using Kotlin.
        I've built several apps and even competed in the NASA Space Apps Challenge 2024, where our team <strong>AgriVision</strong> became second runners-up.
      </p>
    </div>

    <div class="project-snapshots">
      <h2><i class="fas fa-star"></i> Project Highlights</h2>
      <ul>
        <li><i class="fas fa-paw"></i> <strong>PetVet</strong> – A pet healthcare app for booking vet appointments and guidance. (Launching soon!)</li>
        <li><i class="fas fa-baby"></i> <strong>PregTerk</strong> – A pregnancy care app offering daily checkups, food habits, hospital location & more.</li>
        <li><i class="fas fa-robot"></i> <strong>CholoShobai</strong> – An AI-based learning platform designed to teach anything, smartly.</li>
      </ul>
      <p><a href="{{ url('/projects') }}" class="link-button"><i class="fas fa-arrow-right"></i> See full project list</a></p>
    </div>

    <div class="art-section">
      <h2><i class="fas fa-paint-brush"></i> Creative Side</h2>
      <p>
        Besides coding, I'm an artist. I create acrylic paintings on canvas and share them through my 
        <a href="https://youtube.com/@meowmeow_arts?si=N-kYSx2xh8athSVX" target="_blank" class="purple"><i class="fab fa-youtube"></i> YouTube art channel</a>.
      </p>
    </div>

    <div class="now-next">
      <h2><i class="fas fa-tasks"></i> Currently Working On</h2>
      <ul>
        <li><i class="fas fa-laptop-code"></i> Building my Festival Explorer website: <strong>FestiBari</strong></li>
        <li><i class="fas fa-dog"></i> Polishing and preparing <strong>PetVet</strong> for launch</li>
        <li><i class="fas fa-graduation-cap"></i> Balancing academic thesis and multiple side projects</li>
      </ul>
    </div>

    <div class="fun-facts">
      <h2><i class="fas fa-lightbulb"></i> Fun Facts</h2>
      <ul>
        <li><i class="fas fa-palette"></i> I am also a visual artist and actively maintain an art-focused YouTube channel, where I exhibit original acrylic paintings, reflecting my multidisciplinary approach to creativity and design.</li>
        <li><i class="fas fa-laptop"></i> I'm passionate about building impactful, real-world apps that solve everyday problems.</li>
        <li><i class="fas fa-rocket"></i> I thrive in both team collaborations and independent development environments.</li>
      </ul>
    </div>

    <div class="cta">
      <h2><i class="fas fa-handshake"></i> Let's Connect</h2>
      <p>
        I'm open to internships, collaborations, or exciting project ideas. Let's create something amazing together!
      </p>
      <a href="mailto:tasnim15-5763@diu.edu.bd" class="link-button"><i class="fas fa-envelope"></i> Contact Me</a>
    </div>
  </section>
@endsection