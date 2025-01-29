# Lezione 8 - Modelli e migrazioni


# MySQL e TablePlus

- Installazione MySQL e TablePlus

- Configurazione TablePlus

- Ripasso di utilizzo MySQL RDBMS

# Laravel e MySQL

- Configurazione .env

# Migrations 

- Cos'è una migration: è un file che descrive delle modifiche da fare al database

- Creare una migration: https://laravel.com/docs/11.x/migrations#introduction
    - Up(): contiene delle operazione eseguite quando lancio il comando php artisan migrate
    - Down(): serve ad annullare tutte le modifiche fatte dalla funzione up() quando lancio il comando php artisan migrate:rollback
    - Schema
    - Dati nella migration:
        - Tipo numerico: https://dev.mysql.com/doc/refman/8.0/en/numeric-types.html
        - Tipo stringa: https://dev.mysql.com/doc/refman/8.0/en/string-types.html
        - Tipo tempo: https://dev.mysql.com/doc/refman/8.0/en/date-and-time-types.html

    - Conversione articoli da array a database

    - php artisan migrate
    - php artisan migrate:status
    - php artisan migrate:rollback
    - php artisan migrate:rollback --step=NBatchDaAnnullareInsieme  es. 3
    - php artisan migrate:fresh  
    - php artisan migrate:refresh

# Models

- Cos'è un modello e a cosa serve in laravel: è un'"interfaccia" per interagire con la tabella corrispondente sul database
- Cenni Eloquent ORM: object relational mapping 
- Creazione modello article:
    - $article = new Article seguito da $article->save();
    - Article::create(['nomeColonna'=>'Valore','nomeColonna'=>'Valore','nomeColonna'=>'Valore']);
    - se utilizziamo create() dobbiamo specificare nel modello la proprietà protected $fillable = ['colonne_che_posso_inserire_a_database'];
- Inserimento dati nel database tramite modello
- Recuperare dati dal database:
    - Article::all(); restituisce una collection con all'interno degli oggetti di classe article che rappresentano i record

# Extra 

- Usare form per caricare i dati a database