@extends('layout._app')

@section('title', 'Projects - Muhsina')

@section('content')
  <section class="projects-section">
    <h1><i class="fas fa-laptop-code"></i> My Development Projects</h1>
    
   
    <div class="project-card">
      <div class="project-header">
        <h2><i class="fas fa-paw"></i> PetVet</h2>
        <span class="status-badge launching">Launching Soon</span>
      </div>
      <p>Comprehensive pet healthcare app connecting pet owners with veterinarians. Features appointment scheduling and medical record tracking.</p>
      <div class="tech-stack">
        <span>Kotlin</span>
        <span>Jetpack Compose</span>
        <span>Django REST</span>
        <span>Room Database</span>
      </div>
    </div>

    <div class="project-card">
      <div class="project-header">
        <h2><i class="fas fa-baby"></i> PregTerk</h2>
        <span class="status-badge completed">Completed</span>
      </div>
      <p>Pregnancy wellness companion providing daily health tracking and hospital information.</p>
      <div class="tech-stack">
        <span>HTML5</span>
        <span>CSS3</span>
        <span>JavaScript</span>
       
      </div>
    </div>

    
    <div class="project-card">
      <div class="project-header">
        <h2><i class="fas fa-calendar-star"></i> FestiBari</h2>
        <span class="status-badge developing">In Development</span>
      </div>
      <p>Cultural festival explorer showing event dates, locations, and ticket information for traditional celebrations.</p>
      <div class="tech-stack">
        <span>Laravel</span>
        <span>PHP 8</span>
        <span>MySQL</span>
        <span>JavaScript</span>
      </div>
    </div>

   
    <div class="project-card highlight">
      <div class="project-header">
        <h2><i class="fas fa-robot"></i> CholoShobai</h2>
        <span class="status-badge live">Testing Phase</span>
      </div>
      <p>AI education platform with personalized courses, automated assessments, and progress tracking.</p>
      <div class="tech-stack">
        <span>Kotlin</span>
        <span>TensorFlow Lite</span>
        <span>Node.js</span>
        <span>MongoDB</span>
      </div>
    </div>

    <div class="project-card">
      <div class="project-header">
        <h2><i class="fas fa-leaf"></i> AgriVision</h2>
        <span class="status-badge award">NASA Space App Runners-Up</span>
      </div>
      <p>Agricultural assistant providing weather alerts and planting recommendations using satellite data.</p>
      <div class="tech-stack">
        <span>Python</span>
        <span>NASA API</span>
        <span>Computer Vision</span>
      </div>
    </div>

    
    <div class="project-card">
      <div class="project-header">
        <h2><i class="fas fa-brain"></i> Student Depression Analyzer</h2>
        <span class="status-badge completed">Research</span>
      </div>
      <p>ML model analyzing student behavior patterns to detect early signs of depression.</p>
      <div class="tech-stack">
        <span>Python</span>
        <span>Scikit-learn</span>
        <span>NLTK</span>
      </div>
    </div>

    <div class="project-card">
      <div class="project-header">
        <h2><i class="fas fa-sticky-note"></i> NoteToGo</h2>
        <span class="status-badge completed">First Project</span>
      </div>
      <p>Android note-taking app with rich text formatting and local storage.</p>
      <div class="tech-stack">
        <span>Kotlin</span>
        <span>Room DB</span>
        <span>Material Design</span>
      </div>
    </div>

    
  </section>
@endsection