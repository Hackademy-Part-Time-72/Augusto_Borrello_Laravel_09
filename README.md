# 📚 Mini Gestionale Biblioteca - Laravel

Questo progetto è un **mini gestionale per la gestione di una biblioteca** sviluppato con **Laravel**.

Permette di gestire un elenco di libri attraverso un sistema **CRUD completo**.

---

# 🚀 Funzionalità

Il progetto implementa le operazioni CRUD:

* Visualizzare tutti i libri
* Inserire un nuovo libro
* Modificare un libro esistente
* Eliminare un libro

Ogni libro contiene le seguenti informazioni:

* Titolo
* Autore
* Numero di pagine
* Anno di pubblicazione
* Immagine di copertina

---

# 🛠 Tecnologie utilizzate

* Laravel
* PHP
* MySQL
* Blade
* Bootstrap

---

# 📂 Struttura principale del progetto

```
app/
 ├── Models
 │    └── Book.php
 ├── Http
 │    └── Controllers
 │         └── BookController.php

resources/
 └── views
      └── books
           ├── index.blade.php
           ├── create.blade.php
           └── edit.blade.php
```

---

# ⚙️ Installazione del progetto

Clonare il repository:

```
git clone <repository-url>
```

Entrare nella cartella del progetto:

```
cd nome-progetto
```

Installare le dipendenze:

```
composer install
```

Configurare il file `.env` con i dati del database.

Eseguire le migration:

```
php artisan migrate
```

Avviare il server Laravel:

```
php artisan serve
```

---

# 📌 Rotte principali

Il progetto utilizza le **resource routes** di Laravel:

```
Route::resource('books', BookController::class);
```

Questo genera automaticamente:

* books.index
* books.create
* books.store
* books.edit
* books.update
* books.destroy

---

# 🎓 Scopo del progetto

Questo progetto è stato sviluppato come esercizio per apprendere:

* Architettura MVC in Laravel
* Gestione CRUD
* Blade templating
* Gestione database con migration
* Routing in Laravel
