# Recap lezione precedente

   -named routes e helper route()
   -rotte parametriche
   -passaggio dati tramite view()

# Lezione 3
    -Estensioni suggerite:
       laravel blade snippets e laravel snippets di winnie lin
       php namespace resolver


    -clone progetto
    -Architettura MVC
    -SOC separation of concerns
    -Controller e sua funzione
    -Creazione controller (php artisan make:controller NomeController)
    -Aggiornamento progetto

    -namespaces e keyword use

    

# Extra

    -config()
    -asset() per importare fogli di stile

    ?? operatore di coalescenza nulla


# Procedura cloning progetto

    - git clone link-repo
    - cd nomeProgetto per entrare nella cartella
    - composer install 
        serve a reinstallare tutte le dipendenze di laravel e la cartella vendor
    - creare il file .env copiando il .env.example gia disponibile e rinominandolo
    - php artisan key:generate
         serve a generare la chiave di criptatura dell'applicazione

    - php artisan migrate  per creare il database di cui laravel ha bisogno
    - rispondiamo yes quando ci viene chiesto se creare il database

