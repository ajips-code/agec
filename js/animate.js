document.addEventListener("DOMContentLoaded", function() {
    const partials = document.querySelectorAll('.partial');

    const observerOptions = {
        root: null, // Use the viewport as the container
        rootMargin: '0px',
        threshold: 0.1 // Trigger when at least 10% of the element is in view
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Stop observing once it becomes visible
            }
        });
    }, observerOptions);

    partials.forEach(partial => {
        observer.observe(partial);
    });
});
