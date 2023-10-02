# php oop 1

Ciao ragazzi,
esercizio di oggi: PHP Object-oriented programming 1
nome repo: php-oop-1

Oggi continuiamo a lavorare nella stessa repo riprendendo i concetti visti insieme stamattina.

## Traccia

Realizzare una classe Production che sia estesa dalla classe Movie e dalla classe TvSerie.

### Attenzione #1

gli attributi comuni sia a Movie che a TvSerie dovrebbero trovarsi in Production così da essere ereditati correttamente! Qualcosa andrebbe spostato?

### Attenzione #2

occhio ai costruttori! spostando un attributo nella classe genitore, dobbiamo passarlo al costruttore del genitore con parent::\_\_construct(...);

Aggiungiamo anche degli attributi unici per le nuove classi. Per esempio (ma non limitatamente a questi):

per la classe Movie:

- $published_year anno di pubblicazione
- $running_timedurata in minuti

per la classe TvSerie:

- $aired_from_year anno di messa in onda del primo episodio
- $aired_to_year anno di messa in onda dell'ultimo episodio
- $number_of_episodes numero di episodi
- $number_of_seasons numero di stagioni

## Bonus

Creare un array misto di oggetti Movie e TvSerie. Stamparli a schermo in delle cards.
NB: nel foreach della stampa bisognerà distinguere tra Movie e TvSerie per poter stampare correttamente tutte le informazioni. Il metodo get_class() di PHP potrebbe essere d'aiuto :occhiolino:
