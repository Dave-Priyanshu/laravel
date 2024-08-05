// scripts/projects.js
document.addEventListener('DOMContentLoaded', function() {
    const sliders = document.querySelectorAll('.slider');
    
    sliders.forEach(slider => {
        let index = 0;
        const images = slider.querySelectorAll('img');
        const totalImages = images.length;

        function showNextImage() {
            index = (index + 1) % totalImages;
            const offset = -index * 100;
            images.forEach(img => img.style.transform = `translateX(${offset}%)`);
        }

        setInterval(showNextImage, 3000); // Change image every 3 seconds
    });
});
