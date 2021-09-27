const CACHE_STATIC_VERSION = '5';
const CACHE_DYNAMIC_VERSION = '6';

self.addEventListener('install', function (event) {
    console.log("installing service worker", event);
    event.waitUntil(
        caches.open('static-v' + CACHE_STATIC_VERSION)
            .then(function (cache) {
                console.log("[Service Worker] Pre caching");
                /*cache.add('/');
                cache.add('/index.php');
                cache.add('/js/app.js');*/
                cache.addAll([
                    '/',
                    '/favicon.ico',
                    '/index.php',
                    '/js/app.js',
                    'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js',
                    'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css',
                    'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css',
                    'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/fonts/bootstrap-icons.woff2?8bd4575acf83c7696dc7a14a966660a3',
                    'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/fonts/bootstrap-icons.woff?8bd4575acf83c7696dc7a14a966660a3'
                ]);
            }));
});
self.addEventListener('activate', function (event) {
    console.log("activating service worker", event);
    event.waitUntil(
        caches.keys()
            .then(function (keylist) {
                    return Promise.all(keylist.map(function (key) {
                        if (key !== 'static-v' + CACHE_STATIC_VERSION && key !== 'dynamic-v' + CACHE_DYNAMIC_VERSION) {
                            console.log("[Service Worker] Removing old cache", key);
                            return caches.delete(key);
                        }
                    }));
                }
            )
    );
    return self.clients.claim();
});
self.addEventListener('fetch', function (event) {
    //console.log("fetching something", event);
    event.respondWith(
        caches.match(event.request)
            .then(function (response) {

                if (response) {
                    console.log("cache: ", event.request);
                    return response;
                } else {
                    return fetch(event.request)
                        .then(function (res) {
                            return caches.open('dynamic-v' + CACHE_DYNAMIC_VERSION)
                                .then(function (cache) {
                                    cache.put(event.request.url, res.clone());
                                    return res;
                                })
                        });
                }
                // return response ? response : fetch(event.request);
            })
    );
});
