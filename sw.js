self.addEventListener('install', function(event){
    //console.log("installing service worker", event);
    event.waitUntil(
        caches.open("static")
        .then(function(cache){
            /*
            cache.add("/")
            cache.add("/index.php");
            */
            cache.add("/offline.php");
            cache.add("/favicon.ico");
            /*cache.add("/styles/style.css");
            cache.add("/js/app.js");
            */
            cache.add("https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css");
            cache.add("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css");
            cache.add("https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js");
        

        })
    );

});
self.addEventListener('activate', function(event){
    //console.log("activating service worker", event);
    return self.clients.claim();
});
self.addEventListener('fetch', function(event){
    //console.log("fetching something", event);
   event.respondWith(
       caches.match(event.request)
       .then(function(response){
           if (response){
               return response; 
           }
           else {
               return fetch(event.request)
               /*.then(function(res){
                   return caches.open("dynamic")
                   .then(function(cache){
                       cache.put(event.request.url,res.clone());
                       return(res)
                   })
               }
               )*/
            }
       })
       .catch(function (err) {
        return caches.open("static")
            .then(function (cache) {
                return cache.match('/offline.php');
            });
    })
   )
});