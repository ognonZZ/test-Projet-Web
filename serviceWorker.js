// const staticCacheName = "cache-v1";
// const assets = ["/", "index.html"];

// // ajout fichiers en cache
// self.addEventListener("install", (e) => {
//     e.waitUntil(
//         caches.open(staticCacheName).then((cache) => {
//             cache.addAll(assets);
//         })
//     );
// });

// self.addEventListener("fetch", (event) => {
//     event.respondWith(
//         caches.match(event.request).then(function(response) {
//             // Cache hit - return response
//             if (response) {
//                 return response;
//             }

//             // IMPORTANT: Cloner la requête.
//             // Une requete est un flux et est à consommation unique
//             // Il est donc nécessaire de copier la requete pour pouvoir l'utiliser et la servir
//             var fetchRequest = event.request.clone();

//             return fetch(fetchRequest).then(function(response) {
//                 if (!response || response.status !== 200 || response.type !== "basic") {
//                     return response;
//                 }

//                 // IMPORTANT: Même constat qu'au dessus, mais pour la mettre en cache
//                 var responseToCache = response.clone();

//                 caches.open(staticCacheName).then(function(cache) {
//                     cache.put(event.request, responseToCache);
//                 });

//                 return response;
//             });
//         })
//     );
// });

// // // // supprimer caches
// self.addEventListener("activate", (e) => {
//     e.waitUntil(
//         caches.keys().then((keys) => {
//             return Promise.add(
//                 keys
//                 .filter((key) => key !== staticCacheName)
//                 .map((key) => caches.delete(key))
//             );
//         })
//     );
// });


var cacheName = 'todoAppCache';
var filesToCache = [
    '/',
    'Accueil.php'
];

// install service worker
self.addEventListener('install', function(e) {
    console.log('[ServiceWorker] Install');
    e.waitUntil(
        caches.open(cacheName).then(function(cache) {
            console.log('[ServiceWorker] Caching app shell');
            return cache.addAll(filesToCache);
        })
    );
});

// active service worker
self.addEventListener('activate', function(e) {
    console.log('[ServiceWorker] Activate');
    e.waitUntil(
        caches.keys().then(function(keyList) {
            return Promise.all(keyList.map(function(key) {
                if (key !== cacheName) {
                    console.log('[ServiceWorker] Removing old cache', key);
                    return caches.delete(key);
                }
            }));
        })
    );
    return self.clients.claim();
});;



self.addEventListener('fetch', function(event) {
    event.respondWith(
        caches.match(event.request)
        .then(function(response) {
            // Cache hit - return response
            if (response) {
                return response;
            }

            return fetch(event.request).then(
                function(response) {
                    // Check if we received a valid response
                    if (!response || response.status !== 200 || response.type !== 'basic') {
                        return response;
                    }

                    // IMPORTANT: Clone the response. A response is a stream
                    // and because we want the browser to consume the response
                    // as well as the cache consuming the response, we need
                    // to clone it so we have two streams.
                    var responseToCache = response.clone();

                    caches.open(cacheName)
                        .then(function(cache) {
                            cache.put(event.request, responseToCache);
                        });

                    return response;
                }
            );
        })
    );
});