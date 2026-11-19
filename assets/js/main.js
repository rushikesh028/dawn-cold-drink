document.addEventListener('DOMContentLoaded', function () {
  // Mobile menu
  const toggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.main-nav');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      const isOpen = nav.classList.toggle('open');
      toggle.setAttribute('aria-expanded', String(isOpen));
    });
    nav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        nav.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // Contact form status from URL query
  const params = new URLSearchParams(window.location.search);
  const contactStatus = params.get('contact');
  const form = document.getElementById('dawn-contact-form');
  if (form && contactStatus) {
    const note = document.createElement('p');
    note.className = contactStatus === 'success' ? 'form-success' : 'form-error';
    note.textContent = contactStatus === 'success'
      ? 'Thank you! Your message has been sent.'
      : 'Something went wrong. Please try again or email us directly.';
    form.prepend(note);
    // Clean URL without reload
    if (window.history && window.history.replaceState) {
      const clean = window.location.pathname + window.location.hash;
      window.history.replaceState({}, document.title, clean);
    }
  }

  // Subtle hover lift on cards
  document.querySelectorAll('.flavour-card, .why-card, .gallery-item').forEach(function (el) {
    el.addEventListener('mouseenter', function () {
      el.style.transform = 'translateY(-6px)';
    });
    el.addEventListener('mouseleave', function () {
      el.style.transform = '';
    });
  });
});
