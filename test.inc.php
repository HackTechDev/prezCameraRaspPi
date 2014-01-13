<section>
	Image
</section>
<section>
	1) Installation d'un visualisateur d'image : <br>
	<pre>pi@framboisepi ~ $ sudo apt-get install gqview</pre>
</section>
<section>
	2) Capturer une image :
	<pre>pi@framboisepi ~ $ raspistill -o image.jpg<br></pre>
</section>
<section>
	3) V&eacute;rification :
	<pre>pi@framboisepi ~ $ ls -l image.jpg <br>-rw-r--r-- 1 pi pi 2527753 janv.  9 19:14 image.jpg<br></pre>

	Taille de l'image : 2592x1944 px
</section>
<section>
	4) Visualiser l'image : <br>

	<pre>pi@framboisepi ~ $ gqview image.jpg </pre>
</section>
<section>
	Vid&eacute;o.
</section>
<section>
	1) Capturer une vid&eacute;o :&nbsp;<br>

	<pre>pi@framboisepi ~ $ raspivid -o video.h264 -t 10000<br></pre>

	Dur&eacute;e de la vid&eacute;o : 10 sec. =&gt; 10000
	millisec.<br>
</section>
<section>
	2) V&eacute;rification :
	<pre>pi@framboisepi ~ $ ls -l video.h264 <br>-rw-r--r-- 1 pi pi 20902952 janv.  9 19:27 video.h264<br></pre>
</section>
<section>
	3) Visualiser la vid&eacute;o avec le lecteur de vid&eacute;o par d&eacute;faut OmxPlayer :
	<pre>pi@framboisepi ~ $ omxplayer video.h264</pre>
</section>
<section>
	4) Convertir la vid&eacute;o en .mp4 : Installation du logiciel de conversion :<br>

	<pre>pi@framboisepi ~ $ sudo apt-get install -y gpac  <br></pre>
</section>
<section>
	5) Conversion :
	<pre>pi@framboisepi ~ $ MP4Box -fps 30 -add video.h264 video.mp4<br>AVC-H264 import - frame size 1920 x 1080 at 30.000 FPS<br>AVC Import results: 297 samples - Slices: 5 I 292 P 0 B - 0 SEI - 5 IDR<br>Saving to video.mp4: 0.500 secs Interleaving<br></pre>
</section>
<section>   
	6) V&eacute;rification :
	<pre>pi@framboisepi ~ $ ls -l video.mp4 <br>-rw-r--r-- 1 pi pi 20904999 janv.  9 19:47 video.mp4<br></pre>
</section>
<section>
	7) Truc et astuce : <br>
	<br>
	- D&eacute;sactivation de la led rouge de la cam&eacute;ra : <br>
	<br>
	Ouvrir :
	<pre>/boot/config.txt<br></pre>

	Ajouter &agrave; la fin :
	<pre>disable_camera_led=1<br></pre>
	Action :<br>
	<pre>$ sudo reboot</pre>
</section>
