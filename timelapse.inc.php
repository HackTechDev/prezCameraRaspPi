<section>
	1) R&eacute;pertoire de travail : <br>
	<br>
	- R&eacute;pertoire de stockage des photos :
	<pre>pi@framboisepi ~ $ mkdir TIMELAPSE<br></pre>
	- R&eacute;pertoire de traitement :
	<pre>pi@framboisepi ~ $ mkdir CAMERA<br>pi@framboisepi ~ $ cd CAMERA/<br>pi@framboisepi ~/CAMERA $<br></pre>
</section>
<section>
	2) Script de timelapse : <br>
	<br>
	Ouvrir :
	<pre>timelapse.sh<br></pre>

	Ajouter :
	<pre>#!/bin/sh<br><br>while [ true ]; do<br>        image=photo_$(date -u +"%Y%m%d_%H%M%S").jpg<br>        echo $image<br>        raspistill -o /home/pi/TIMELAPSE/$image<br>        sleep 10;<br>done;<br></pre>

	Action :
	<pre>$ chmod 755 ./timelapse.sh<br></pre>
</section>
<section>
	3) Ex&eacute;cuter le script de timelapse : <br>

	<pre>pi@framboisepi ~/CAMERA $ screen -S timelapse<br>pi@raspberrypi ~/CAMERA $ ./timelapse.sh<br></pre>
    <br>
	Apr&egrave;s quelques heures de prise vue, arr&ecirc;ter le script : <br><strong>[Contr&ocirc;le]
	+ [c]</strong>
</section>
<section>
	4) V&eacute;rification :
	<pre>pi@framboisepi ~/CAMERA $ ls -l ../TIMELAPSE/*.jpg<br>total 1373808             <br>-rwxr-xr-x 1 pi pi       2443966 2013-08-16 17:11 photo_20130816_171108.jpg<br>-rwxr-xr-x 1 pi pi       2446662 2013-08-16 17:11 photo_20130816_171124.jpg<br>-rwxr-xr-x 1 pi pi       2462648 2013-08-16 17:11 photo_20130816_171140.jpg<br>...<br>-rwxr-xr-x 1 pi pi       2875121 2013-08-16 19:20 photo_20130716_192011.jpg<br>-rwxr-xr-x 1 pi pi       2885910 2013-08-16 19:20 photo_20130816_192027.jpg<br>-rwxr-xr-x 1 pi pi       2879237 2013-08-16 19:20 photo_20130816_192043.jpg<br>-rwxr-xr-x 1 pi pi       2887403 2013-08-16 19:21 photo_20130816_192100.jpg<br>-rwxr-xr-x 1 pi pi       2857805 2013-08-16 19:21 photo_20130816_192116.jpg<br></pre>

	Temps de prise : 2 heures 10 minutes.  <br>
	Nombre de photo : 495 <br>
	Temps de prise entre chaque photos : environs 6 sec.
</section>
<section>
	5) Rassembler les noms des fichers dans une liste :
	<pre>pi@framboisepi ~/CAMERA $ ls -tr &gt; liste.txt<br></pre>
</section>
<section>
	6) Conversion des .jpg en video : Installation de mencoder :
	<pre>pi@framboisepi ~/CAMERA $ sudo apt-get install mencoder<br></pre>
</section>
<section>
	7) Cr&eacute;ation de la vid&eacute;o :
	<pre>pi@framboisepi ~/CAMERA $ mencoder -nosound -ovc lavc \<br>
-lavcopts vcodec=mpeg4:aspect=16/9:vbitrate=8000000 -vf scale=1920:1080 \<br> 
-o timelapse.avi -mf type=jpeg:fps=24 mf://@./liste.txt<br>
...
<br>Video stream: 8072.857 kbit/s  (1009107 B/s)  size: 20854881 bytes  20.667 secs  497 frames<br></pre>
	Dur&eacute;e du traitement : ?? min.
	<br>
	Ne voulant pas attendre, j'ai trait&agrave; les images sur un autre ordinateur
	largement plus puissant. <br>
</section>
<section>
	8) Visualisation de la vid&eacute;o :
	<pre>pi@framboisepi ~/CAMERA $ omxplayer timelapse.avi<br></pre>
</section>
<section>
	9) R&eacute;sultat : timelapse.avi <br>
	<br>
	T&eacute;l&eacute;charger la vid&eacute;o : <a href="timelapse/timelapse.avi">timelapse.avi </a><br>
	<br>
	Youtube : <a href="http://www.youtube.com/watch?v=wKKJhv8fYqs">http://www.youtube.com/watch?v=wKKJhv8fYqs</a><br>
</section>
