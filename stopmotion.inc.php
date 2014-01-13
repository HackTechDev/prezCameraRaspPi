<section>
Animation Studio
</section>
<section>
1) Paquetage de base :<br>
<pre>
pi@framboisepi ~ $ sudo apt-get install -y libav-tools
pi@framboisepi ~ $ sudo apt-get install -y python-imaging-tk
</pre>
</section>
<section>
3) Répertoire de travail <br>
<pre>
pi@framboisepi ~ $ mkdir STOPMOTION
pi@framboisepi ~ $ cd STOPMOTION/
</pre>
</section>
<section>
4) Téléchargement <br>
<br>
<a href="https://drive.google.com/file/d/0B87aGq7vEpoFTkR6RmJDaGVqN2M/edit?usp=sharing">https://drive.google.com/file/d/0B87aGq7vEpoFTkR6RmJDaGVqN2M/edit?usp=sharing</a>
</section>
<section>
5) Téléchargement des ressources : blankScreen.gif <br>
<br>
<a href="https://docs.google.com/file/d/0B87aGq7vEpoFYTl6ZlAyWnBES0k/edit">https://docs.google.com/file/d/0B87aGq7vEpoFYTl6ZlAyWnBES0k/edit</a>
</section>
<section>
6) Lancement de l'application : <br>
<pre>
pi@framboisepi ~/STOPMOTION $ python ./AnimationStudio.py
</pre>
</section>
<section>
Pi-Mation
</section>
<section>
1) Mise-&agrave;-jour du système :<br>
<pre>
pi@framboisepi ~ $ sudo apt-get update && sudo apt-get upgrade
</pre>
</section>
<section>
2) Mise-&agrave;-jour du micro-logiciel : <br/>
<pre>
pi@framboisepi ~ $ sudo rpi-update
</pre>
Red&egrave;marrer le RaspPi.
</section>
<section>
3) Installation des d&eacute;pendances :<br>
<br>
- Outils d'installation pour Python : <br>
<pre>
pi@framboisepi ~ $ sudo apt-get install python-setuptools
</pre>
- Biblioth&egrave;que de gestion de la cam&eacute;ra en Python :<br>
<pre>
pi@framboisepi ~ $ sudo easy_install picamera
</pre>
- Biblioth&egrave;que Pygame : <br>
<pre>
pi@framboisepi ~ $ sudo apt-get install python-pygame
</pre>
- Outils de gestion vidéo : <br>
<pre>
pi@framboisepi ~ $ sudo apt-get install libav-tools 
</pre>
</section>
<section>
4) Installation d'un lecteur vid&eacute;o : <br>
<pre>
pi@framboisepi ~ $ sudo apt-get install omxplayer
</pre>
</section>
<section>
5) R&eacute;pertoire de travail : <br>
<pre>
pi@framboisepi ~ $ mkdir -p STOPMOTION/PIMATION
pi@framboisepi ~ $ cd STOPMOTION/PIMATION/
</pre>
</section>
<section>
6) T&eacute;l&eacute;chargement : <br>
<pre>
pi@framboisepi ~/STOPMOTION/PIMATION $ git clone https://github.com/russb78/pi-mation.git
pi@framboisepi ~/STOPMOTION/PIMATION $ cd pi-mation/pi-mation/
pi@framboisepi ~/STOPMOTION/PIMATION/pi-mation/pi-mation $ 
</pre>
</section>
<section>
7) Lancement de l'application : <br>
<pre>
pi@framboisepi ~/STOPMOTION/PIMATION/pi-mation/pi-mation $ chmod 755 ./pi-mation.py
pi@framboisepi ~/STOPMOTION/PIMATION/pi-mation/pi-mation $ ./pi-mation.py
</pre>
</section>


