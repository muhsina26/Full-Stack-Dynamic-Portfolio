document.addEventListener('DOMContentLoaded', function() {
   
    if (window.location.pathname === '/' && document.getElementById('element')) {
      new Typed('#element', {
        strings: [
          'Building modern Android apps with Kotlin.',
          'Experienced in backend development with Django.',
          'Designing responsive UIs with HTML, CSS, and JavaScript.',
          'Turning ideas into functional applications.',
          'Writing clean, maintainable code.'
        ],
        typeSpeed: 60,
        backSpeed: 25,
        backDelay: 1500,
        loop: true
      });
    }
  });