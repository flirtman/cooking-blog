window.onload = function () {
    /**** VIDEO GALLERY ****/
    const lightBoxVideo = document.querySelector('.light-box-video')
    const videoCard = document.querySelectorAll('.video-card')
    const lightboxIframe = document.querySelector('.light-box-video iframe')
    const closeVideoGallery = document.querySelector('.close-video-gallery');


    function closeVideo() {
        closeVideoGallery.addEventListener('click', () => {
            lightBoxVideo.classList.remove('active');
            lightboxIframe.setAttribute('src', '');
            console.log(lightboxIframe);
        })
    }

    videoCard.forEach( (item) => {
        item.addEventListener('click',  () => {
            const link = item.getAttribute("data-src");
            lightboxIframe.setAttribute('src', link)

            setTimeout(() => {
                lightBoxVideo.classList.add('active');
                console.log('500 ms passed');
            }, 500);
        })
    });

    if(lightboxIframe) {
        closeVideo();
    }

    /***** NAV ****/
    const openBtn = document.querySelector('.open');
    const closeBtn = document.querySelector('.close');
    const nav = document.querySelector('nav');

    openBtn.addEventListener('click', () => {
        openBtn.classList.remove('active');
        closeBtn.classList.add('active');
        nav.style.display = "flex";
    })

    closeBtn.addEventListener('click', () => {
        closeBtn.classList.remove('active');
        openBtn.classList.add('active');
        nav.style.display = "none";
    })


    /**** Gallery ****/
    if(window.location.pathname.includes('story.php')) {
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
}











