window.onload = function () {
    const thumbs = document.querySelectorAll(".story-section .thumbs li");
    const bigImage = document.querySelector('.img-wrapper img');

    thumbs.forEach(thumb => {
        thumb.addEventListener('click', () => {

            thumbs.forEach(t => t.classList.remove('active'));
            thumb.classList.add('active');

            const src = thumb.querySelector('img').getAttribute('src');
            bigImage.setAttribute('src', src);
        })
    })
}