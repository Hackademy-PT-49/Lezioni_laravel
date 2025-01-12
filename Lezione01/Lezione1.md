# World wide web

- Storia 
    -Arpanet 1969
    -Inizio anni 90
        -Cern di Ginevra
        -Definizione protocollo HTTP ad opera di Tim Berners-Lee
        -Primo browser: Mosaic
        -Contenuti in forma di pagine
        -Primo sito Web: https://info.cern.ch/hypertext/WWW/TheProject.html
        -IP internet protocol

-Come funziona internet
    -Architettura client/server - routing

-Cos'è HTTP e come funziona
    -Richieste:
        -Metodi: GET, POST, PUT/PATCH, DELETE, ecc...
        -URI: uniform resource identifier
    -Response:
        -https://developer.mozilla.org/en-US/docs/Web/HTTP/Status

    HTTP : HyperTextTransferProtocol

    -IP

    -DNS: domain name system

    URI vs URL

    Uniform resource identifier e unique resource locator

    Ogni URI identifica in maniera unica e univoca un risorsa
    
# Laravel

    - Cos'è un framework?
        
    - Cos'è Composer e cos'è un dependency manager?
        https://getcomposer.org/

    - Laravel utilizza il pattern MVC - models views controllers  + R routes
    
    - Creazione progetto Laravel
    - Elementi principali e cartelle
    - Documentazione di Laravel 
        -Requisiti
        -Installazione

# Laravel - rotte e viste

    -Introduzione rotte e viste
    -Cos'è Artisan 
        -Artisan è interfaccia da linea di comando di laravel
        -php artisan serve
    -Visualizzare un sito nel browser


    

# Installazione laravel dopo composer

- composer global require laravel/installer
- composer global update

- vado nella cartella di lavoro e faccio: laravel new NomeProgetto


- Dopo creazione progetto risposte alle domande:
- none
- 1
- sqlite
- yes


# Elenco comandi utili

- php artisan serve
- Viste: con estensione .blade.php contengono l'html delle pagine
- Rotte: collegano una richiesta a un'azione
- Passare dati a una vista: view('nomeVista',['nomeVarNellaVista'=>'Valore'])