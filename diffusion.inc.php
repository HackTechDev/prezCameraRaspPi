<section>
	En http avec Mjpeg-Streamer. <br>
</section>
<section>
	1) Installation de paquetage de base : <br>
	<pre>pi@framboisepi ~ $ sudo apt-get install libjpeg62-dev imagemagick subversion</pre>
</section>
<section>
	2) Compilation de Mjpeg-Streamer : <br>
	<pre>pi@framboisepi ~ $ mkdir -p /home/pi/tmp/flux<br>pi@framboisepi ~ $ mkdir mjpeg-streamer<br>pi@framboisepi ~ $ cd mjpeg-streamer/<br>pi@framboisepi ~/mjpeg-streamer $ <br>pi@framboisepi ~ $ svn co https://svn.code.sf.net/p/mjpg-streamer/code/mjpg-streamer/ .<br>pi@framboisepi ~/mjpeg-streamer $ make<br>pi@framboisepi ~/mjpeg-streamer $ sudo make install<br><br></pre>
</section>
<section>
	3) Lancer la diffusion du flux vid&eacute;o en t&acirc;che de fond : <br>
	<pre>pi@framboisepi ~/mjpeg-streamer $ raspistill -w 640 -h 480 -q 5 \ <br>
-o /home/pi/tmp/flux/image.jpg -tl 10000 -t 9999999 -th 0:0:0 &amp;</pre>
</section>
<section>
	4) Lancement du serveur web : <br>
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
	5) Visualiser le flux vid&eacute;o : <br>
	<br>
	Sous Ubuntu 12.04 :<br>
	<a href="http://192.168.1.16:8080/stream.html"><br>
	http://192.168.1.16:8080/stream.html</a><br>
	<br>
    ou <br>
	<a href="http://192.168.1.16:8080/java.html"><br>
	http://192.168.1.16:8080/java.html</a><br>

</section>
<section>
	6) Arr&ecirc;ter tout : <br>
	<pre>pi@framboisepi ~ $ kill $(pgrep raspistill)<br>pi@framboisepi ~ $ kill $(pgrep mjpg_streamer) </pre>
	<br>
</section>
