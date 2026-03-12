#  Mini Gestionale Biblioteca - Laravel 09

##  Descrizione del progetto

Questo progetto è un **mini gestionale per la gestione di una biblioteca** sviluppato utilizzando **Laravel 12**.

L'applicazione permette agli utenti di registrarsi, effettuare il login e gestire una collezione di libri.

Il sistema di autenticazione è stato implementato utilizzando **Laravel Fortify**, che gestisce login, registrazione, validazione dei form e protezione delle route tramite middleware.

---

#  Tecnologie utilizzate

Il progetto è stato sviluppato utilizzando:

- PHP
- Laravel 12
- Laravel Fortify
- Blade Template Engine
- Bootstrap 5
- SQLite
- Git
- GitHub

---

#  Funzionalità principali

Il gestionale permette di:

- Registrazione utenti
- Login utenti
- Logout utenti
- Visualizzazione lista libri
- Creazione nuovi libri
- Visualizzazione dettagli libro
- Protezione delle pagine tramite autenticazione

---

#  Implementazione degli esercizi

## Esercizio 1 – Installazione Fortify

È stato installato **Laravel Fortify** per gestire il sistema di autenticazione dell'applicazione.

Fortify gestisce:

- registrazione utenti
- login
- logout
- validazione dati
- gestione password

I form utilizzano i seguenti campi:

### Registrazione

- name
- email
- password
- password_confirmation

### Login

- email
- password

---

##  Esercizio 2 – Validazione form

Sono stati testati i form di **login e registrazione** inviando i campi vuoti per verificare il corretto funzionamento della validazione.

Laravel Fortify restituisce automaticamente i messaggi di errore tramite il sistema di validazione.

Gli errori vengono mostrati nelle view tramite Blade utilizzando:

```blade
@error('email')
<span>{{ $message }}</span>
@enderror
```
---

##  Esercizio 3 – Redirect dopo login e registrazione

Dopo una registrazione o un login effettuato con successo, l'utente viene automaticamente reindirizzato alla homepage dell'applicazione ```(/)```.

Questo permette di accedere immediatamente alle funzionalità del gestionale.

---

##  Esercizio 4 – Gestione stato autenticazione

Per mostrare contenuti diversi in base allo stato dell'utente sono state utilizzate le direttive Blade:

```
@auth
@guest

```
**Se l'utente NON è autenticato**

La navbar mostra:

- Login

- Registrati

- Se l'utente è autenticato

- La navbar mostra:

- email dell’utente

- pulsante Logout

Il logout viene gestito tramite form **POST**:

```
<form action="/logout" method="POST">
@csrf
<button type="submit">Logout</button>
</form>

```

---

##  Esercizio 5 – Protezione delle route

Per proteggere alcune pagine è stato utilizzato il middleware **auth**.

Le pagine protette sono:

-creazione libro

-gestione libri

-Nel file ```web.php``` è stato utilizzato il raggruppamento delle route:

```

Route::middleware('auth')->group(function () {

Route::get('/books/create',[BookController::class,'create'])->name('books.create');

});

```

In questo modo solo gli utenti autenticati possono accedere alle funzionalità riservate.

---

###  Interfaccia grafica

L'interfaccia è stata realizzata utilizzando Bootstrap 5.

- Sono state create:

- navbar dinamica

- pagina login

- pagina registrazione

- homepage

- pagine gestione libri

Le pagine di login e registrazione sono state migliorate graficamente con:

- layout centrato

- form più leggibili

- navbar condivisa con il resto dell'applicazione

 ---

 ## Progetto sviluppato da:

**Augusto Borrello**

Hackademy – Full Stack Developer