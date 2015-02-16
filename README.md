# monyt-nginx
Nginx configuration file to serve Monyt's Android app's php

Disclaimer: I have nothing to do with the Monyt Android app, nor it's script. I simply find it to be useful, and made this nginx configuration file to serve it's php file (or any php file).

You can find more info on Monyt's Android app here:
https://play.google.com/store/apps/details?id=com.emoticode.monyt&hl=en

You can find monyt script's url in the previous link.

Simply copy the script to /var/www/php, with the name 'monyt.php', and after setting up nginx you will be able to load the php from 'php.your-domain.com/monyt.php'.
