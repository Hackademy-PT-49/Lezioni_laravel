# Lezione 14

- Relazione many-to-many come funziona?

- Tabella pivot: creazione e regole di creazione
    - Migrazione up e down associata

    - Regole tabella pivot: nome1_nome2  in cui i nomi sono al singolare e in ordine alfabetico

- Metodi belongsToMany nei modelli

- Inserimento relazione tra categories e articles  N-N

- Utilizzo checkbox come campo di input ( name=categories[] per passare i dati in un array)

- Direttive @selected e @checked blade

- Aggiustamento CRUD per gestire le relazioni N-N:
    - metodo attach()
    - metodo detach()
    - metodo sync()

    - es. $article->categories()->attach($categories);