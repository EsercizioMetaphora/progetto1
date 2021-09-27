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

setTimeout(function(){
    console.log("set timeout");
    if(deferredPrompt){
        deferredPrompt.prompt();
        deferredPrompt = null;
    }
}, 2000) ;
