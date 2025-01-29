## Lista comandi utili e relativa spiegazione:
# Installazione laravel
- php artsan serve   : lancia server del progetto
- npm i        : installa npm all'interno del progetto, crea la cartella node_modules e importa vite
- npm i bootstrap    : installa bootstrap usando npm
- @vite(['resources/css/app.css','resources/js/app.js'])    da mettere nell'head del layout importa css e js
- npm run build           : compatta css e js in file nella cartella public, fare prima della messa in produzione sito
- npm run dev             : server sviluppo locale vite-> aggiornamento tempo reale pagine

# Database

- php artisan migrate     : esegue le funzioni up() delle migrazioni non ancora lanciate
- php artisan migrate:rollback     : esegue le funzioni down() delle migrazioni presenti nell'ultimo batch lanciato
- php artisan migrate:fresh      : cancella database e rilancia tutte le migrazioni
- php artisan migrate:refresh     : lancia prima tutte le down() e poi tutte le up() utile per verificare che siano state scritte correttamente
- php artisan migrate:status         : mostra stato attuale migrazioni

# Cloning progetto
- git clone linkrepo       : clona la repository in local
- composer install        : reinstalla vendor e dipendenze di laravel per il progetto clonato
- php artisan key:generate         : genera chiave dell'applicazione nel .env

# Artisan
- php artisan make:view    cartella.nome            : crea una vista
- php artisan route:list      : mostra lista rotte con definizioni e info
- php artisan make:component NomeComponente --view            : genera componente anonimo
- php artisan make:component NomeComp                         : genera componente normale
- php artisan make:controller NomeController                  : genera controller
- php artisan make:request NomeFormRequest                    : genera request custom per validazione e autorizzazione rotte
- php artisan make:mail NomeMail                              : genera classe Mailable, inviabile per tramite Mailer di laravel
- php artisan make:model NomeModello                           : genera modello nome come tabella db, al singolare prima lettera ogni parola maiuscola

# Cache
- php artisan view:clear                     : pulisce la cache delle viste, utile se elimino classe di componenti non anonimi
- php artisan optimize:clear                  : pulisce tutte le cache di laravel
