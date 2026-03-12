# 📚 Mini Gestionale Biblioteca - Laravel 09

## 📖 Descrizione del progetto

Questo progetto è stato sviluppato utilizzando **Laravel 12** e rappresenta un **mini gestionale per la gestione dei libri di una biblioteca**.

Il progetto implementa il sistema di autenticazione tramite **Laravel Fortify** e permette agli utenti autenticati di gestire i libri della biblioteca.

---

# 🛠 Tecnologie utilizzate

- PHP
- Laravel 12
- Laravel Fortify
- SQLite
- Blade Template Engine
- Bootstrap 5
- Git / GitHub

---

# 🧩 Esercizio 1 – Installazione Fortify

È stato installato e configurato **Laravel Fortify** per gestire il sistema di autenticazione.

Le funzionalità implementate sono:

- Registrazione utenti
- Login utenti
- Logout utenti

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

# ⚠️ Esercizio 2 – Validazione form

Sono stati testati i form di **login e registrazione** inviandoli con i campi vuoti.

Laravel Fortify restituisce automaticamente i messaggi di errore tramite il sistema di validazione.

I messaggi vengono mostrati nelle view utilizzando Blade:

```blade
@error('email')
<span>{{ $message }}</span>
@enderror

---

# 🔐 Esercizio 3 – Test autenticazione

Sono stati effettuati test di:

-registrazione utente

-login utente

In caso di autenticazione corretta l’utente viene reindirizzato alla homepage del sito ```(/).