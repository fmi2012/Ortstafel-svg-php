#!/bin/sh

echo -n "Bitte Text Oben eingeben:          ";
read sh_text_oben;
echo -n "Bitte Schriftgröße Oben eingeben:  ";
read sh_size_oben;
echo -n "Bitte Text unten eingeben:         ";
read sh_text_unten;
echo -n "Bitte Schriftgröße unten eingeben: ";
read sh_size_unten;
echo -n "Bitte Dateinamen angeben:          ";
read dateiname

php Ortstafel-svg.php -- "font_size_oben=${sh_size_oben}&font_size_unten=${sh_size_unten}&text_oben=${sh_text_oben}&text_unten=${sh_text_unten}" > $dateiname 

