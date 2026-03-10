# Progetto Laravel - Gestione Libri

## Descrizione

Questo progetto Laravel permette di gestire una lista di libri con le seguenti funzionalità:

* Creazione di un libro
* Upload di una copertina
* Visualizzazione dei libri
* Invio email alla creazione del libro
* Visualizzazione immagine random se la copertina non è presente

---

## Tecnologie utilizzate

* PHP
* Laravel
* MySQL
* Bootstrap
* Mailtrap
* TablePlus

---

## Struttura del progetto

### Model

`app/Models/Book.php`

Gestisce i dati dei libri nel database.

---

### Controller

`app/Http/Controllers/BookController.php`

Gestisce:

* index → visualizza i libri
* create → form creazione libro
* store → salva libro e immagine

---

### Request Validation

`app/Http/Requests/BookStoreRequest.php`

Valida i dati inseriti nel form.

---

### Migration

Tabella **books**

Campi:

* id
* name
* pages
* year
* image
* created_at
* updated_at

---

### Upload immagini

Le immagini vengono salvate in:

```
storage/app/public/images
```

e rese pubbliche tramite:

```
php artisan storage:link
```

---

### Email

Alla creazione del libro viene inviata una mail tramite **Mailtrap**.

Classe mail:

```
app/Mail/SendMail.php
```

View email:

```
resources/views/email.blade.php
```

---

### Immagini random

Se un libro non ha immagine viene mostrata un'immagine random tramite:

```
https://picsum.photos
```

---

## Avvio del progetto

Installare dipendenze

```
composer install
```

Creare file env

```
cp .env.example .env
```

Generare chiave

```
php artisan key:generate
```

Migrazioni database

```
php artisan migrate
```

Creare link storage

```
php artisan storage:link
```

Avviare server

```
php artisan serve
```

---

## URL applicazione

```
http://127.0.0.1:8000
```

---

## Autore

Augusto Borrello
