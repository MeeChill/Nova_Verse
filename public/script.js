document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slider-item');
    const dots = document.querySelectorAll('.dot');
    let currentSlide = 0;

    function showSlide(n) {
        const slider = document.querySelector('.banner-slider');
        slider.style.transform = `translateX(-${n * 100}%)`;

        dots.forEach(dot => dot.classList.remove('active'));
        dots[n].classList.add('active');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });

    setInterval(nextSlide, 4000);

    // Initial slide display
    showSlide(0);
});

function toggleDropdown() {
    const dropdownMenu = document.querySelector('.profile .dropdown-menu');
    dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
}

window.onclick = function(event) {
    if (!event.target.matches('.profile-initial')) {
        const dropdowns = document.querySelectorAll('.profile .dropdown-menu');
        dropdowns.forEach(function(dropdown) {
            if (dropdown.style.display === 'block') {
                dropdown.style.display = 'none';
            }
        });
    }
}
