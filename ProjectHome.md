<h4>3/3/10 Update: after upgrading our Kayako instance to v4, I realized how hard coded I had made the board...seriously considering some core rewrites to build more dynamics into it...who knows maybe even tying into v4's new API...mmm...tasty.</h4>

Details of Project: http://blog.mattsatorius.com/technology/web-design/wccc-production-systems-status-board/

Admittedly, some of the code for departments has been hard coded, so this project is a checkout and implement at your own risk!

<b>I also offer custom status boards for your specific application, and have built some driven completely by Wordpress to allow for your customization.  If interested, please contact me at <a href='http://www.sators.com/'>http://www.sators.com/</a></b>

The sizing has been formated to a 720p screen.

General list to begin getting the board connected (though more tweaks will likely be needed):
<ol>
<li>Update the /statusboard/db_connect.php file with your Kayako MySQL database</li>

<li>Inport the /statusboard.sql file into your Kayako MySQL database (that was entered into step 1).  Following this, you should have a new table called "statusboard" that properties such as the RSS feeds, countdown timers, twitter search, etc. can be adjusted at.</li>

<li>Weather: In /data-weather.php line 30, replace USIL0070 with your weather location code from <a href='http://weather.yahoo.com/'>http://weather.yahoo.com/</a> (i.e. <a href='http://weather.yahoo.com/forecast/USIL0070_c.html?force_units=1'>http://weather.yahoo.com/forecast/USIL0070_c.html?force_units=1</a>)</li>

<li>Axis Webcam - change the URL in /index.php line 70 with the URL of your webcam of choice</li>

<li>To do testing, you can load each of the /data-{}.php files which should return a JSON of feed it is pulling.  If no data is returned, open up that data file and confirm contents match your board data.<ul><li>If data is not displaying correctly or matching as desired, check SQL queries that status/department IDs are matching up.</li></ul></li>
</ol>