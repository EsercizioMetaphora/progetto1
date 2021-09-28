if('serviceWorker' in navigator){
    navigator.serviceWorker.register('/sw.js')
    .then(function(reg){
        console.log("service worker registered: "+reg.scope);
    })
    .catch(function(error){
        console.log(error);
    });
}