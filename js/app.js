let deferredPrompt;

if (!window.Promise) {
    window.Promise = Promise;
}

if('serviceWorker' in navigator){
    navigator.serviceWorker.register('/sw.js')
    .then(function(reg){
        console.log("service worker registered: "+reg.scope);
    })
    .catch(function(error){
        console.log(error);
    });
}

window.addEventListener('beforeinstallprompt', (event) => {
    event.preventDefault();
    console.log('before install prompt fired');
    deferredPrompt = event;
    return false;
});

const buttons = document.querySelectorAll('.btn-primary');

/*
(1) vecchio modo
for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', openInstallModal);
}
*/

/* nuovo modo equivalente a (1) */
buttons.forEach(el => el.addEventListener('click', event => openInstallModal(event)));

function openInstallModal(event) {
    event.preventDefault();

    if (deferredPrompt) {
        deferredPrompt.prompt();
        deferredPrompt.userChoice.then((choiceResult) => {
            console.log(choiceResult.outcome);
            if (choiceResult.outcome === 'dismissed') {
                console.log('User canceled installation');
            } else {
                console.log('User added to home screen');
            }
            window.location.href = event.target.getAttribute('href');
        });
        deferredPrompt = null;
    } else {
        window.location.href = event.target.getAttribute('href');
    }
}