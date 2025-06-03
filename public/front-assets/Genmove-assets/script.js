// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const headerNav = document.getElementById('headerNav');

    if (hamburgerBtn && headerNav) {
        hamburgerBtn.addEventListener('click', function() {
            headerNav.classList.toggle('active');
            // Toggle hamburger icon
            const icon = hamburgerBtn.querySelector('i');
            if (icon) {
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-times');
            }
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!headerNav.contains(event.target) && !hamburgerBtn.contains(event.target)) {
                headerNav.classList.remove('active');
                const icon = hamburgerBtn.querySelector('i');
                if (icon) {
                    icon.classList.add('fa-bars');
                    icon.classList.remove('fa-times');
                }
            }
        });

        // Close menu when clicking on a link
        const navLinks = headerNav.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                headerNav.classList.remove('active');
                const icon = hamburgerBtn.querySelector('i');
                if (icon) {
                    icon.classList.add('fa-bars');
                    icon.classList.remove('fa-times');
                }
            });
        });
    }
}); 