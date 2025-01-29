## Lista comandi utili e relativa spiegazione:
# Installazione laravel
- php artsan serve   : lancia server del progetto
- npm i        : installa npm all'interno del progetto, crea la cartella node_modules e importa vite
- npm i bootstrap    : installa bootstrap usando npm
- @vite(['resources/css/app.css','resources/js/app.js'])    da mettere nell'head del layout importa css e js

# Database

- php artisan migrate     : esegue le funzioni up() delle migrazioni non ancora lanciate
- php artisan migrate:rollback     : esegue le funzioni down() delle migrazioni presenti nell'ultimo batch lanciato
- php artisan migrate:fresh      : cancella database e rilancia tutte le migrazioni
- php artisan migrate:refresh     : lancia prima tutte le down() e poi tutte le up() utile per verificare che siano state scritte correttamente