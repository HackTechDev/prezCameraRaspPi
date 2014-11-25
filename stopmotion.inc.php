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
<pre>
pi@framboisepi ~/STOPMOTION $ git clone https://github.com/ntoll/AnimationStudio.git
</pre>
</section>
<section>
5) Lancement de l'application : <br>
<pre>
pi@framboisepi ~/STOPMOTION $ cd AnimationStudio/
pi@framboisepi ~/STOPMOTION/AnimationStudio $ python ./AnimationStudio.py
</pre>
</section>
<section>
Pi-Mation
</section>
<section>
1) Installation des d&eacute;pendances :<br>
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
2) T&eacute;l&eacute;chargement : <br>
<pre>
pi@framboisepi ~/STOPMOTION $ git clone https://github.com/russb78/pi-mation.git
pi@framboisepi ~/STOPMOTION $ cd pi-mation/pi-mation/
pi@framboisepi ~/STOPMOTION/pi-mation/pi-mation $ 
</pre>
</section>
<section>
3) Lancement de l'application : <br>
<pre>
pi@framboisepi ~/STOPMOTION/pi-mation/pi-mation $ chmod 755 ./pi-mation.py
pi@framboisepi ~/STOPMOTION/pi-mation/pi-mation $ ./pi-mation.py
</pre>
</section>


