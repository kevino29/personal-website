window.addEventListener('load', function() {
    let carousels = document.querySelectorAll('.carousel');
    let scrollbar = document.querySelector('.scrollbar-progress-container');

    for (let i = 0; i < carousels.length; i++) {
        carousels[i].addEventListener('click', function(e) {
            // Hide the scrollbar
            scrollbar.style.display = 'none';

            // Get the carousel
            let carousel = e.target;

            // Create an overlay
            let overlay = document.createElement('div');
            overlay.classList.add('container-fluid');
            overlay.classList.add('position-fixed');
            overlay.classList.add('h-100');
            overlay.classList.add('mh-100');
            overlay.style.top = '0';
            overlay.style.backgroundColor = 'rgba(0,0,0,0.9)';

            // Add an exit overlay button on the overlay
            let exitOverlay = document.createElement('i');
            exitOverlay.classList.add('far');
            exitOverlay.classList.add('fa-times-circle');
            exitOverlay.style.position = 'absolute';
            exitOverlay.style.top = '15px';
            exitOverlay.style.right = '15px';
            exitOverlay.style.fontSize = '2.5rem';
            exitOverlay.style.cursor = 'pointer';
            exitOverlay.style.color = 'white';

            // Create a row and col for the overlay
            let row = document.createElement('div');
            row.classList.add('row');
            row.classList.add('justify-content-center');
            row.classList.add('h-100');

            let col = document.createElement('div');
            col.classList.add('col-md-8');
            col.classList.add('align-self-center');

            // Create the content block
            let contentBlock = document.createElement('div');

            // Add the image/video to the content block
            let content;
            if (carousel.nodeName === 'IMG') {
                content = document.createElement('img');
                content.setAttribute('alt', carousel.alt);
            }
            else if (carousel.nodeName === 'VIDEO') {
                content = document.createElement('video');
                content.autoplay = true;
                content.muted = true;
                content.loop = true;
            }
            content.src = carousel.src;
            content.classList.add('d-block');
            content.classList.add('w-100');
            content.classList.add('rounded');

            // Put all the elements together
            contentBlock.appendChild(content);
            col.appendChild(contentBlock);
            row.appendChild(col);
            overlay.appendChild(row);
            overlay.appendChild(exitOverlay);
            document.body.appendChild(overlay);

            // Exit overlay listener
            exitOverlay.addEventListener('click', function() {
                overlay.parentElement.removeChild(overlay);
                scrollbar.style.display = 'flex';
            });
        });
    }
});
