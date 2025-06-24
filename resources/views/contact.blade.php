@extends('layout._app')

@section('title', 'Contact - Muhsina')

@section('content')
  <section class="contact-section">
    <h1><i class="fas fa-paper-plane"></i> Contact Me</h1>
    <p class="subtitle">For project inquiries or collaboration opportunities</p>

    <div class="contact-card">
      <form class="contact-form" onsubmit="return false;">
        <div class="form-group">
          <label for="name"><i class="fas fa-user"></i> Your Name</label>
          <input type="text" id="name" class="form-control">
        </div>

        <div class="form-group">
          <label for="email"><i class="fas fa-envelope"></i> Email Address</label>
          <input type="email" id="email" class="form-control">
        </div>

        <div class="form-group">
          <label for="subject"><i class="fas fa-tag"></i> Subject</label>
          <select id="subject" class="form-control">
            <option value="android">Android Project</option>
            <option value="backend">Backend Service</option>
            <option value="collab">Collaboration</option>
            <option value="other">Other Inquiry</option>
          </select>
        </div>

        <div class="form-group">
          <label for="message"><i class="fas fa-comment-alt"></i> Message</label>
          <textarea id="message" rows="5" class="form-control"></textarea>
        </div>

        <button type="button" class="submit-btn" onclick="alert('Contact form is display-only for now');">
          <i class="fas fa-paper-plane"></i> Send Message
        </button>
      </form>

      <div class="direct-contact">
        <h3><i class="fas fa-address-card"></i> Direct Contact</h3>
        <a href="mailto:tasnim15-5763@diu.edu.bd" class="email-link">
          <i class="fas fa-envelope"></i> tasnim15-5763@diu.edu.bd
        </a>
      </div>
    </div>
  </section>
@endsection