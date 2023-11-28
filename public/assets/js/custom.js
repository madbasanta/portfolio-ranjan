// window ready no jquery
document.addEventListener('DOMContentLoaded', function () {
    console.log('ready');
    document.querySelector('.main-about').click();
    Object.assign(document.querySelector('#home').style, {
        'margin-top' : '-100px'
    });
    setTimeout(() => {
        let navHeight = document.querySelector('#header').clientHeight;
        Object.assign(document.querySelector('#homeVideo').style, {
            'height' : `calc(100vh - ${ navHeight - 80 }px)`
        }); 
    }, 1000);
    document.querySelector('.main-home').remove();

    document.querySelectorAll('#navbar .nav-link').forEach(function(element) {
        element.addEventListener('click', function() {
            let hash = new URL(this.href).hash;
            let that = this;
            if(document.body.querySelectorAll(hash).length === 1) {
                return;
            }
            fetch(hash.replace('#', '/')).then(function(response) {
                return response.text();
            }).then(function(html) {
                if(document.body.querySelectorAll(hash).length === 0) {
                    document.body.insertAdjacentHTML('beforeend', html);
                }
                that.click();
            });
        });
    });
});