<section>
	1) Avec GStreamer : Installation de GStreamer : <br>

	<pre>pi@framboisepi ~ $ sudo apt-get install gstreamer-tools \ <br>
gstreamer0.10-plugins-base gstreamer0.10-plugins-good \ <br>
gstreamer0.10-plugins-bad gstreamer0.10-plugins-ugly<br></pre>
</section>
<section>
	2) V&eacute;rification :<br>
	<pre>pi@framboisepi ~ $ gst-inspect<br>
	videocrop:&nbsp; aspectratiocrop: aspectratiocrop<br>
	videocrop:&nbsp; videocrop: Crop<br>
	...<br>
	staticelements:&nbsp; pipeline: Pipeline object<br>
	<br>
	Nombre total&nbsp;:233 greffons, 695 fonctionnalit&eacute;s</pre>
</section>
<section>
	3) Lancement de la diffusion du flux vid&eacute;o :<br>
	<pre>pi@framboisepi ~ $ raspivid -t 0 -w 1280 -h 720 -fps 25 -b 2500000 -p 0,0,640,480 \ <br>
-o - | gst-launch -v fdsrc ! h264parse ! rtph264pay config-interval=1 pt=96 \ <br>
! gdppay ! tcpserversink host=192.168.1.16 port=5000</pre>
</section>
<section>
	4) Lire le flux audio :<br>
	<br>
	Sous Ubuntu 12.04 : <br>
	<br>
	- Installation de GStreamer :<br>
	<pre>[~] &#10132; sudo add-apt-repository ppa:gstreamer-developers/ppa<br>[~] &#10132; sudo apt-get update<br>[~] &#10132; sudo apt-get install gstreamer1.0*<br><br></pre>
	- Lecture du flux :<br>
	<pre>[~] &#10132; gst-launch-1.0 -v tcpclientsrc host=192.168.1.16 port=5000&nbsp; ! gdpdepay \ <br>
! rtph264depay ! avdec_h264 ! videoconvert ! autovideosink sync=false</pre>
</section>
<section>
	5) En http avec Mjpeg-Streamer. <br>
</section>
<section>
	6) Installation de paquetage de base : <br>
	<pre>pi@framboisepi ~ $ sudo apt-get install libjpeg62-dev libjpeg8-dev \ <br>
imagemagick subversion</pre>
</section>
<section>
	7) Compilation de Mjpeg-Streamer : <br>
	<pre>pi@framboisepi ~ $ mkdir -p /home/pi/tmp/flux<br>pi@framboisepi ~ $ mkdir mjpeg-streamer<br>pi@framboisepi ~ $ cd mjpeg-streamer/<br>pi@framboisepi ~/mjpeg-streamer $ <br>pi@framboisepi ~ $ svn co https://svn.code.sf.net/p/mjpg-streamer/code/mjpg-streamer/ .<br>pi@framboisepi ~/mjpeg-streamer $ make<br>pi@framboisepi ~/mjpeg-streamer $ sudo make install<br><br></pre>
</section>
<section>
	8) Lancer la diffusion du flux vid&eacute;o en t&acirc;che de fond : <br>
	<pre>pi@framboisepi ~/mjpeg-streamer $ raspistill -w 640 -h 480 -q 5 \ <br>
-o /home/pi/tmp/flux/image.jpg -tl 100 -t 9999999 -th 0:0:0 &amp;</pre>
</section>
<section>
	9) Lancement du serveur web : <br>
	<pre>pi@framboisepi ~/mjpeg-streamer $ LD_LIBRARY_PATH=./ ./mjpg_streamer \ <br>
-i "input_file.so -f /home/pi/tmp/flux -n image.jpg" \ <br>
-o "output_http.so -w ./www" &amp;<br>
MJPG Streamer Version: svn rev: 3:172<br> 
i: folder to watch...: /home/pi/tmp/flux/<br> 
i: forced delay......: 0<br> 
i: delete file.......: no, do not delete<br> 
i: filename must be..: image.jpg<br> 
o: www-folder-path...: ./www/<br> 
o: HTTP TCP port.....: 8080<br> 
o: username:password.: disabled<br> 
o: commands..........: enabled<br>
<br>
</pre>
</section>
<section>
	10) Visualiser le flux vid&eacute;o : <br>
	<br>
	Sous Ubuntu 12.04 :<br>
	<a href="http://192.168.1.16:8080/stream.html"><br>
	http://192.168.1.16:8080/stream.html</a><br>
	<br>
</section>
<section>
	11) Arr&ecirc;ter tout : <br>
	<pre>pi@framboisepi ~ $ kill $(pgrep raspistill)<br>pi@framboisepi ~ $ kill $(pgrep mjpg_streamer) </pre>
	<br>
</section>
