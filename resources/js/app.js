import Swiper from 'swiper';
import 'swiper/css';
import IMask from 'imask';
import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

// Toggle user menu
window.toggleUserMenu = function () {
    const menu = document.getElementById('userDropdown');
    menu.classList.toggle('hidden');
};

window.toggleMenuTarif = function (button) {
    const targetId = button.getAttribute('data-target');
    const menu = document.getElementById(targetId);
    menu.classList.toggle('translate-x-full');
};

window.addEventListener("DOMContentLoaded", () => {
    const burgerBtn = document.getElementById('userMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    if (burgerBtn && mobileMenu) {
        burgerBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            mobileMenu.classList.toggle('hidden');
        });

        window.addEventListener('click', (e) => {
            if (!burgerBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    }
    // Accordion
    document.querySelectorAll('[data-accordion-target]').forEach(button => {
        button.addEventListener('click', () => {
            const target = document.querySelector(button.getAttribute('data-accordion-target'));
            const icon = button.querySelector('[data-accordion-icon]');
            target.classList.toggle('hidden');
            button.setAttribute('aria-expanded', !target.classList.contains('hidden'));
            if (icon) icon.classList.toggle('rotate-180');
        });
    });

    // Modal image
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const closeModal = document.getElementById('closeModal');
    document.querySelectorAll('img:not(.no-modal)').forEach(img => {
        img.addEventListener('click', () => {
            modalImg.src = img.src;
            modal.classList.remove('hidden');
        });
    });
    closeModal?.addEventListener('click', () => modal.classList.add('hidden'));
    modal?.addEventListener('click', (e) => {
        if (e.target === modal) modal.classList.add('hidden');
    });

    // Swiper
    new Swiper('.swiper', {
        loop: true,
        autoHeight: true,
        slidesPerView: 1,
        spaceBetween: 24,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        }
    });
});
