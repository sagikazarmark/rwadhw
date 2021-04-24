require('./bootstrap');

require('alpinejs');

window.alpineLightbox = function () {
    return {
        src: '',
        alt: '',
        isOpen: false,
        // One transparent pixel, to prevent broken img src:
        pixel: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=',
        open($event) {
            // Get the clicked-on thumbnail
            const img = $event.target

            // Set the lightbox image src to the fullsize image
            this.src = img.getAttribute('data-fullsize')
            // Set the lightbox image alt attribute
            this.alt = img.getAttribute('alt')

            this.isOpen = true

            // Prevent the window from scrolling
            const html = document.documentElement;
            html.classList.add('h-screen', 'overflow-hidden', 'scroll-none');
        },
        close() {
            // Close lightbox
            this.isOpen = false

            // Return lightbox img src to transparent pixel
            this.src = this.pixel
            // Remove lightbox img alt attribute
            this.alt = ''

            // Return window to its normal state
            const html = document.documentElement;
            html.classList.remove('h-screen', 'overflow-hidden', 'scroll-none');
        }
    }
}
