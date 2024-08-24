// Smooth Scrolling
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('nav a');
    navLinks.forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth'
          });
        }
      });
    });
  });
  
  // Next Page
  function nextPage() {
    window.location.href = 'portfolio.html';
    window.alert("You're Moving to Viewing Companies Portfolio Page.");
  }
  
  // Form Validation
  document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.querySelector('#contact-form');
    if (contactForm) {
      contactForm.addEventListener('submit', function(e) {
        const name = document.querySelector('#name').value.trim();
        const email = document.querySelector('#email').value.trim();
        const message = document.querySelector('#message').value.trim();
  
        if (!name || !email || !message) {
          e.preventDefault();
          alert('Please fill out all fields.');
        }
      });
    }
  
    // Hamburger Menu Toggle
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('nav ul');
    if (hamburger && navMenu) {
      hamburger.addEventListener('click', function() {
        navMenu.classList.toggle('show');
      });
    }
  
    // Header Nav Toggle
    const headerNav = document.querySelector('header nav');
    if (hamburger && headerNav) {
      hamburger.addEventListener('click', function() {
        headerNav.classList.toggle('open');
      });
    }
  
  
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
  
    function showSlides(n) {
      let i;
      const slides = Array.from(document.getElementsByClassName("slides"));
      if (n > slides.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = slides.length;
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[slideIndex - 1].styles.display = "block";
    }
  });