# 🌌 Mappa delle Stelle - Progetto GPOI

Benvenuti nel repository del progetto **Mappa delle Stelle**. Questo applicativo web permette la gestione dinamica di un catalogo astronomico, consentendo di visualizzare, aggiungere e modificare costellazioni e corpi celesti.

## 🛠️ Tecnologie Utilizzate

Il progetto è stato sviluppato seguendo un'architettura modulare:
* **Backend:** PHP 8.x
* **Database:** MySQL (Relazionale)
* **Frontend:** HTML5, CSS3 (Layout Responsivo)
* **Versionamento:** Git & GitHub (Seguendo il modello Git Flow)

## 📂 Struttura del Progetto

La gerarchia delle cartelle è organizzata per separare la logica dalla presentazione:
* `/PHP`: Contiene tutti i moduli di gestione (index, catalogo, aggiunta/modifica costellazioni).
* `/CSS`: Contiene il foglio di stile globale `style.css`.
* `/SQL`: Contiene il dump del database `database.sql` necessario per il setup.
* `README.md`: Documentazione del progetto.


## 📈 Gestione del Progetto (Git Flow)

Durante lo sviluppo abbiamo adottato una metodologia **Agile** supportata da Git:
1.  **Develop Branch:** Utilizzato come base per l'integrazione delle funzionalità.
2.  **Feature Branches:** Ogni nuova funzione (es. `feature/aggiungi-costellazione`) è stata sviluppata in isolamento.
3.  **Release:** Fase finale di test e bug-fixing prima del merge nel ramo `main`.

## 👨‍💻 Sviluppatori
* **Rayan Baaddi** - Sviluppo Backend, Gestione Database e Logica Git.
* **Gianluca Loss** - Sviluppo Frontend, Query SQL e Presentazione.
