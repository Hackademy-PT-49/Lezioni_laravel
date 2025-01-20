# Recap lezione precedente

   -Componenti
   -Passaggio dati ai componenti
   -npm e bundling asset

# Lezione 5

## Form in laravel

    -Tipo di dati: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input
    -Errore 419
    -CSRF token

    -Richieste post
    -$request->all() e $request->input('campo')

    -redirect & with()
    -messaggi flash e sessione

## Invio mail

        -php artisan make:mail
        -analisi classe e mailable
        -passaggio dati alla mail
        -SMTP e testing via mailpit

# Extra
    - asset()
    - validazione e errori
    - helper old('name') - nei campi di input inserisco value={{old('nomecampo')}} e se vengo reindirizzato alla stessa pagina mantengo  gli input vecchi
        

# Form essentials

        - action specifica l'uri dell'azione che verrà eseguita all'invio del form
        - method specifica il metodo della richiesta
        - @csrf token per abilitare le richieste del form(è necessario nei form con method diverso da GET)
        - per ogni campo di input devo specificare l'attributo name
        - ci serve un button di tipo submit per far partire la richiesta del form

# Mail

    - php artisan make:mail NomeMail
    - specifichiamo nella sezione content della mail quale vista verrà inviata
    - nella sezione envelope indichiamo da chi, l'oggetto e a chi viene inviata la mail