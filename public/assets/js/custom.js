// window ready no jquery
function setVideoHeight() {
    let navHeight = document.querySelector('#header').clientHeight;
    let homeVideo = document.querySelector('#homeVideo');
    if (!homeVideo) {
        return;
    }
    Object.assign(homeVideo.style, {
        'height': `calc(100vh - ${navHeight - 80}px)`,
        // 'height' : 'auto'
    });
}

document.addEventListener('DOMContentLoaded', function () {
    // document.querySelector('.main-about').click();
    if (document.querySelector('#home')) {

        Object.assign(document.querySelector('#home').style, {
            'margin-top': '-100px'
        });
    }
    setTimeout(() => {
        setVideoHeight();
    }, 1000);

    let header = document.getElementById('header');
    let video = document.querySelector('#homeVideo video');
    if (video) {
        if (header) {
            video.style.top = '-25px';
            console.log('setting height')
        }
        // on video end which is already in autoplay
        video.addEventListener('ended', function () {
            let aboutSection = document.querySelector('#aboutMe');
            video.play();
            if (aboutSection) {
                aboutSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    }
    videoResize();

});

function videoResize() {
    let homeVideo = document.querySelector('#homeVideo');
    if (!homeVideo) {
        return;
    }
    let video = document.querySelector('#homeVideo video');
    if (homeVideo.clientWidth < 1024) {
        homeVideo.style.height = '50vh';
        video.style.height = '50vh';
        if (homeVideo.clientWidth < 500) {
            homeVideo.style.height = '35vh';
            video.style.height = '35vh';
        }
    } else {
        video.style.height = 'auto';
        setVideoHeight();
    }
}

window.onresize = videoResize;

