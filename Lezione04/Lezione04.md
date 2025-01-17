# Recap lezione precedente

   -Controller
   -Modifica rotta tramite controller
   -compact

# Lezione 4

    -Componenti
        -Principio DRY - Don't repeat yourself
        -Componenti e componenti anonimi
            -Componenti normali: vista + classe 
                -Creazione componente: php artisan make:component nomeComponente 
            -Componenti anonimi: vista 
                -Creazione componente anonimo: php artisan make:component nomeComponente --view
        -creazione componenti e refactoring del sito
        -passaggio di variabili tramite attributi
        -passaggio dati tramite slot
    
    -Bundling asset
        -cosa è vite
        -installazione npm: node package manager
        -installazione bootstrap
        -config vite
        -npm run dev vs run build
        -linkare js e css al layout

    

# Extra

    
    -asset()
    -$loop per foreach


# Comandi utili

php artisan make:component NomeComponent --view


# Bundling asset

- npm install nella root del mio progetto
- npm i bootstrap
- Importare bootstrap dentro i file app.css e app.js
- @import 'bootstrap'; in app.css
- import 'bootstrap'; in app.js
- Inserire nell'head delle viste in cui voglio importare css e js
- @vite(['resources/css/app.css','resources/js/app.js'])
- npm run dev o npm run build