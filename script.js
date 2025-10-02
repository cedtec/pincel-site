// Smooth scrolling para links de navegação
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Animação de entrada para cards
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Funcionalidade das abas
let currentTabIndex = 0;
let tabInterval;

function switchTab(index) {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabPanels = document.querySelectorAll('.tab-panel');
    
    // Remove active class from all buttons and panels
    tabBtns.forEach(b => b.classList.remove('active'));
    tabPanels.forEach(p => p.classList.remove('active'));
    
    // Add active class to current button and panel
    if (tabBtns[index]) {
        tabBtns[index].classList.add('active');
        const targetTab = tabBtns[index].getAttribute('data-tab');
        document.getElementById(targetTab).classList.add('active');
    }
}

function nextTab() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    currentTabIndex = (currentTabIndex + 1) % tabBtns.length;
    switchTab(currentTabIndex);
}

document.addEventListener('DOMContentLoaded', () => {
    const tabBtns = document.querySelectorAll('.tab-btn');
    
    tabBtns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            currentTabIndex = index;
            switchTab(currentTabIndex);
            
            // Reset auto-rotation when user clicks
            clearInterval(tabInterval);
            tabInterval = setInterval(nextTab, 5000);
        });
    });
    
    // Start auto-rotation
    tabInterval = setInterval(nextTab, 5000);
    
    // Testimonials carousel
    let currentTestimonialIndex = 0;
    let testimonialInterval;
    
    function showTestimonial(index) {
        const slides = document.querySelectorAll('.testimonial-slide');
        const dots = document.querySelectorAll('.testimonial-dot');
        const carousel = document.querySelector('.testimonial-slides');
        
        if (!slides.length || !carousel) return;
        
        // Remove active class from all slides and dots
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        // Add active class to current slide and dot
        if (slides[index]) {
            slides[index].classList.add('active');
        }
        if (dots[index]) {
            dots[index].classList.add('active');
        }
        
        // Move carousel
        carousel.style.transform = `translateX(-${index * 100}%)`;
    }
    
    function nextTestimonial() {
        const slides = document.querySelectorAll('.testimonial-slide');
        const totalSlides = slides.length;
        
        currentTestimonialIndex = (currentTestimonialIndex + 1) % totalSlides;
        showTestimonial(currentTestimonialIndex);
    }
    
    // Initialize testimonials carousel
    showTestimonial(0);
    
    // Start auto-rotation for testimonials
    testimonialInterval = setInterval(nextTestimonial, 8000);
    
    // Global function for testimonial dots
    window.currentTestimonial = function(index) {
        currentTestimonialIndex = index - 1;
        showTestimonial(currentTestimonialIndex);
        
        // Reset auto-rotation when user clicks
        clearInterval(testimonialInterval);
        testimonialInterval = setInterval(nextTestimonial, 8000);
    };
    
    // Aplicar animação aos cards quando a página carregar
    const cards = document.querySelectorAll('.segmento-card, .recurso-card, .depoimento-card, .conclusao-item');
    
    cards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
});

// Navbar scroll effect e destacar link ativo
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-menu a');
    
    // Navbar scroll effect
    if (window.scrollY > 100) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
    
    // Destacar link ativo
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        if (scrollY >= sectionTop) {
            current = section.getAttribute('id');
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});