@extends('layout._app')

@section('title', 'Services - Muhsina')

@section('content')
  <section class="services-section">
    <h1><i class="fas fa-mobile-alt"></i> Android & Backend Services</h1>
    <p class="expertise-tagline">Kotlin Native Developer | Django Backend Specialist</p>
    
    <div class="service-card">
      <div class="service-header">
        <i class="fab fa-android service-icon"></i>
        <h2>Android Development</h2>
      </div>
      <div class="service-details">
        <h3>With <span class="purple">Kotlin</span> Expertise:</h3>
        <ul>
          <li><i class="fas fa-check"></i> Jetpack Compose UI</li>
          <li><i class="fas fa-check"></i> MVVM/MVI Architecture</li>
          <li><i class="fas fa-check"></i> Room Database</li>
          <li><i class="fas fa-check"></i> Coroutines & Flow</li>
        </ul>
      </div>
    </div>

    <div class="service-card">
      <div class="service-header">
        <i class="fas fa-server service-icon"></i>
        <h2>Backend Development</h2>
      </div>
      <div class="service-details">
        <h3>With <span class="purple">Django</span> Expertise:</h3>
        <ul>
          <li><i class="fas fa-check"></i> REST API Development</li>
          <li><i class="fas fa-check"></i> Django REST Framework</li>
          <li><i class="fas fa-check"></i> PostgreSQL Integration</li>
          <li><i class="fas fa-check"></i> Authentication Systems</li>
        </ul>
      </div>
    </div>

    <div class="service-card full-stack">
      <div class="service-header">
        <i class="fas fa-code service-icon"></i>
        <h2>Full Stack Solutions</h2>
      </div>
      <div class="service-details">
        <h3><span class="purple">Kotlin + Django</span> Combined:</h3>
        <ul>
          <li><i class="fas fa-check"></i> End-to-End App Development</li>
          <li><i class="fas fa-check"></i> API Design & Integration</li>
          <li><i class="fas fa-check"></i> Deployment Configuration</li>
          <li><i class="fas fa-check"></i> Ongoing Maintenance</li>
        </ul>
      </div>
    </div>

    <div class="cta">
      <a href="{{ route('contact') }}" class="link-button">
        <i class="fas fa-terminal"></i> Discuss Your Project Needs
      </a>
    </div>
  </section>
@endsection