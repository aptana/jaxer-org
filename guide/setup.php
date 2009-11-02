<?php ob_start(); ?>
		<link rel="stylesheet" type="text/css" href="style/jquery.treeview.css"/>
		<link rel="stylesheet" type="text/css" href="style/guide.css"/>
		<link rel="stylesheet" type="text/css" href="style/devices.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="style/highslide.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="style/highslide-html.css"/>
		<script type="text/javascript" src="lib/jquery/jquery-1.2.6.js"></script>
		<script type="text/javascript" src="lib/jquery/jquery.cookie.js" ></script>
		<script type="text/javascript" src="lib/jquery/jquery.treeview.js" ></script>
		<script type="text/javascript" src="lib/jquery/jquery.bigtarget.1.0.1.js"></script>
		<script type="text/javascript" src="lib/highslide/highslide-full.js"></script>
		<script type="text/javascript" src="lib/aptana/jxrGuideFull.js"></script>
<?php $head = ob_get_clean(); ?>
<?php $active = 'guide';?>
<?php include('../includes/header.php'); ?>
					<div id="content">
						<table id="holdsContent" cellpadding="0" cellspacing="0">
							<tr style="padding-top:0px;">
								<td id="leftSidebar">
									<div class="guide guide-navigation">
										<div class="navigation" id="mainTOC">
											<h3 class="navigation-master">Jaxer Guide</h3>
											<ul id="navigation-tree" class="filetree bigTarget">
												<li class="area"><span class="file"><a href="index.php" class="published">Introduction</a></span></li>
												<li class="area"><span class="folder"><a href="setup.php" class="published">Setup</a></span></li>
												<li class="area"><span class="folder">Develop</span>
													<ul id="develop">
														<li class="area"><span class="folder">Application Level Concepts</span>
														<ul>
															<li><span class="file"><a href="develop_basics.php" class="published">Basics</a></span></li>
															<li><span class="file"><a href="develop_lifecycle.php" class="published">Page Lifecycle</a></span></li>
															<li><span class="file"><a href="develop_applications.php" class="published">Applications</a></span></li>
															<li><span class="file"><a href="develop_requests.php" class="published">Requests and Responses</a></span></li>
															<li><span class="file"><a href="develop_proxies.php" class="published">Proxy Functions</a></span></li>
															<li><span class="file"><a href="develop_state.php" class="published">State and Event Handlers</a></span></li>
															<li><span class="file"><a href="develop_sandbox.php" class="published">Sandbox</a></span></li>
															<li><span class="file"><a href="develop_security.php" class="published">Security</a></span></li>
														</ul>
														</li>
														<li class="area"><span class="folder">Persistent Storage</span>
														<ul>
															<li><span class="file"><a href="develop_folders.php" class="published">Folders</a></span></li>
															<li><span class="file"><a href="develop_files.php" class="published">Files</a></span></li>
															<li><span class="file"><a href="develop_databases.php" class="published">Databases</a></span>
															<li><span class="file"><a href="develop_working_databases.php" class="published">Working with Database Content</a></span><!--
																<ul>
																	<li><span class="file"><a href="develop_databases.php/#managedAccess" class="published">Managed Access</a></span></li>
																	<li><span class="file"><a href="develop_databases.php/#perApp" class="published">Per-Application Managed Access</a></span></li>
																	<li><span class="file"><a href="develop_databases.php/#dynamicAccess" class="published">Dynamic, Configurable Access</a></span></li>
																	<li><span class="file"><a href="develop_databases.php/#jaxerDB" class="published">Jaxer.DB</a></span></li>
																	<li><span class="file"><a href="develop_databases.php/#jxrResultSet" class="published">Queries That Return Data: Jaxer.DB.ResultSet</a></span></li>
																	<li><span class="file"><a href="develop_databases.php/#dataTypes" class="published">Data Types</a></span></li>
																</ul> -->
															</li>
															<li><span class="file"><a href="develop_logging.php" class="published">Logging</a></span></li>
														</ul>
														</li>
														<li class="area"><span class="folder">Communications</span>
														<ul>
															<li><span class="file"><a href="develop_web_services.php" class="published">Web Services</a></span></li>
															<li><span class="file"><a href="develop_web-requests.php" class="published">Web Requests</a></span></li>
															<li><span class="file"><a href="develop_urls.php" class="published">URLs</a></span></li>
															<li><span class="file"><a href="develop_email.php" class="published">Email</a></span></li>
															<li><span class="file"><a href="develop_sockets.php" class="published">Sockets</a></span></li>
														</ul>
														</li>
														<li class="area"><span class="folder">Utilities</span>
														<ul>
															<li><span class="file"><a href="develop_utility.php" class="published">The Utility Namespaces</a></span></li>
															<li><span class="file"><a href="develop_processes.php" class="published">Processes</a></span></li>
															<li><span class="file"><a href="develop_command-line.php" class="published">Command Line Interface</a></span></li>
															<li><span class="file"><a href="develop_xml.php" class="published">XML</a></span></li>
															<li><span class="file"><a href="develop_mozilla.php" class="published">Mozilla Features</a></span></li>
															<li><span class="file"><a href="develop_building_jaxer.php" class="published">Building Jaxer</a></span></li>
														</ul>
														<li class="area"><span class="folder">Advanced Topics</span>
														<ul>
															<li><span class="file"><a href="advanced.php#nsm" class="published">Using __noSuchMethod__</a></span></li>
															<li><span class="file"><a href="advanced.php#jExts" class="published">Writing Jaxer Extensions</a></span></li>
														</ul>
													</li>
												</ul>
												</li>
												<li class="area"><span class="folder">Debug</span>
													<ul id="debug">
														<li><span class="file"><a href="debug_debug_settings.php" class="published">Debug Settings</a></span></li>
														<li><span class="file"><a href="debug_apache.php" class="published">Apache</a></span></li>
														<li><span class="file"><a href="debug_ssl-errors.php" class="published">SSL Errors</a></span></li>
													</ul>
												</li>
												<li class="area" style="display: none;"><span class="file"><a href="configure/" class="not-drafted">Configure</a></span></li>
												<li class="area" style="display: none;"><span class="file"><a href="extend/" class="not-drafted">Extend</a></span></li>
												<li class="area" style="display: none;"><a href="architecture/" class="not-drafted">Architecture</a></li>
											</ul>
										</div>
										
									</div>
								</td>
								<td valign="top">
									<div id="section-container">
										<div id="section-content" class="guide guide-content devices">
	
	<div><h1>Setting Up Jaxer</h1></div>
		
	<div class="assets-container">
		<div class="assets toc">
			<div class="assets-header">Contents</div>
			<ul>
				<li><span><a href="#download">Download and Install</a></span></li>
				<li><span><a href="#existingJaxer">Use Jaxer with an Existing Apache</a></span>
				<li><span><a href="#previewConf">Preview Jaxer Apps in Studio with an External Server</a></span>
				<li><span><a href="#asService">Set up Jaxer as a Service/Server</a></span></li>
				<li><span><a href="#launchingJaxer">Launching Jaxer</a></span></li>
				<li><span><a href="#firstRun">First Run</a></span></li>
				<li><span><a href="#validateInstallation">Validate Your Installation</a></span></li>
				<li><span><a href="#exposeContent">Content Visibility</a></span></li>
				<li><span><a href="#uninstallingJaxer">Uninstalling Jaxer</a></span></li>
				<li><span><a href="#troubleshooting">Troubleshooting</a></span></li>
				<li><span><a href="setup_jetty.php">Using Jaxer with Jetty</a></span></li>
			</ul>
		</div>
	</div>
	
	<h3>Jaxer in Aptana Studio</h3>
	
	<p>
		To simplify the development process, Aptana Studio includes Jaxer and you don't need to separately install or uninstall Jaxer. These instructions are for 
		installing Jaxer on a machine on which Studio isn't or when a separate instance is desirable and generally speaking do not apply to using Jaxer inside Studio. 
		All the other pages in this guide, except where explicitly noted, apply equally to using Jaxer standalone or in Studio.
	</p>

	<h2 id="download">Download and Install</h2>
	
	<p>First <a href="http://aptana.com/jaxer/download/" target="_blank">download Jaxer</a></p>

	<h3>OS-specific Installation Instructions</h3>
	<ul>
		<li><strong>Windows:</strong> Unzip the download to the folder where you want to install Jaxer (<a href="images/windows-dir-before.png" class="highslide" onclick="return hs.expand(this);">see expected results</a>).</li>
		<li><strong>OS X:</strong> Launch the DMG and drag the Aptana_Jaxer folder to the Applications folder. Jaxer can reside inside other folders, if needed for your purposes. (<a href="images/mac-location.png" class="highslide" onclick="return hs.expand(this);">see expected results</a>).</li>
		<li><strong>Linux:</strong>  <a href="#" onclick="return hs.htmlExpand(this, {contentId: 'linux-install'});">Detailed instructions</a></li>
	</ul>

	<p><strong>Samples and Tools:</strong> Bundled applications can be found in <code>&lt;Jaxer install folder>/jaxer/aptana</code></p>
	
	<h3>Updating to a New Version of Jaxer</h3>
	
	<p>The standard Studio update process will let you know there's a newer version of Jaxer for Studio available.</p>

	<p>For the standalone Jaxer Package:</p>

	<ol>
		<li>Stop Jaxer if it's running.</li>
		<li>Delete the jaxer folder inside your Aptana Jaxer (or Aptana_Jaxer or AptanaJaxer) folder.</li>
		<li><a href="http://www.aptana.com/jaxer/download">Download Jaxer_update.zip</a> and unzip it into your Aptana Jaxer (or Aptana_Jaxer or AptanaJaxer) folder, which creates a new jaxer folder.</li>
	</ol>

	<p>All your data and settings will be preserved as they aren't kept in the overwritten folder.</p>

	
	<h2 id="existingJaxer">Use Jaxer with an Existing Apache</h2>

	<p>
		Jaxer installs its own Apache instance, which should not interfere with an existing Apache install. However, should you prefer to use Jaxer with 
		an existing Apache instance, Jaxer comes with OS-specific httpd.conf files for Linux, Windows and OS X. You should use the version for your 
		operating system, including it with and include directive in the main Apache httpd.conf; including the file instead of copying the contents into 
		the main conf file means changes and updates will be much simpler. These files are located in the <code>&lt;Jaxer install dir&gt;/jaxer/confs</code> 
		folder.
	</p>
	<p>
		<strong>Windows:</strong> You'll need to edit the supplied conf file to enter path information specific to your installation; all the places 
		requiring change can be found by searching the file for the string ${ and replacing the placeholder starting from the $ character and including 
		the open and close braces and the string in between with the correct values. The specific tokens are:
	</p>
	<ul>
		<li><strong>${ANCHOR}:</strong> the root directory of your install, the folder in which you unzipped the Jaxer package</li>
		<li><strong>${WINDIR}:</strong> the Windows install dir, i.e. C:\Windows</li>
		<li><strong>${JAXER_WEB_PORT}:</strong> the port on which Jaxer listens for connections from the web server; its displayed by Jaxer on startup: <code>JaxerManager 1.0.3.4544 (web 4327, command 4328)</code></li>
	</ul>
	
	<p>
		<strong>Mac OS X:</strong> On this platform mod_jaxer is compiled as a 32 bit executable. If you are running a 64-bit Apache you need to recompile 
		mod_jaxer to 64 bit mode, then copy the resulting .so file into /Applications/Aptana_Jaxer/jaxer/connectors. 
		<a href="http://www.aptana.com/jaxer/download">Grab the Jaxer Connectors source code first</a>!
	</p>

	<ol>
		<li>Switch to mod_jaxer folder in exploded source: <code>cd ~/Downloads/1.0.0.4310/products/server/src/connectors/apache/apache-modules/mod_jaxer</code></li>
		<li>Compile: <code>/usr/sbin/apxs -Wc,-arch -Wc,ppc64  -Wl,-arch -Wl,ppc64 -c -Wc,-arch -Wc,x86_64  -Wl,-arch -Wl,x86_64  -c -o mod_jaxer.so *.c</code></li>
		<li>Copy: <code>cp .libs/mod_jaxer.so /Applications/Aptana_Jaxer/jaxer/connectors</code></li>
		<li>Restart Apache: <code>sudo apachectl graceful</code></li>
	</ol>
	
	<h2 id="withWamp">Using Jaxer with WAMP or XAMPP</h2>
	
	<p>
		Methodology used in developing these instructions: download the <a href="http://www.wampserver.com/en/">WAMP</a> or 
		<a href="http://www.apachefriends.org/en/xampp.html">XAMPP</a> package, install and test that it works, grab the Jaxer update (you don't need 
		the Apache stuff for this) and then wire that into the default WAMP/XAMPP install. These instructions are Windows-specific, the key difference 
		for OS X and Linux are to use the conf file and paths appropriate for your OS.
	</p>
	
	<ol>
		<li>Unzip the contents of jaxer_update.zip to your WAMP/XAMP's bin directory (e.g., <code>C:\wamp\bin\jaxer</code> or <code>C:\xamp\jaxer</code>)</li>
		<li>Copy <code>jaxer\confs\jaxer-win.httpd.conf</code> to <code>C:\wamp\bin\apache\apache2.2.8\conf\extra</code> or <code>C:\xampp\apache\conf\extra</code> </li>
		<li>Include the Jaxer conf in <code>C:\wamp\bin\apache\apache2.2.8\conf\httpd.conf</code> or <code>C:\xampp\apache\conf\httpd.conf</code>: <pre>Include conf/extra/jaxer-win.httpd.conf</pre></li>
		<li>Replace all the ENV tokens in jaxer-win.httpd.conf with actual paths (as described in the Windows Apache note previously)</li>
		<li>
			Create the required jaxer folders inside the C:\wamp or C:\xamp folder:
			<ul>
				<li>logs</li>
				<li>local_jaxer</li>
				<li>local_jaxer\conf</li>
				<li>local_jaxer\data</li>
				<li>local_jaxer\extensions</li>
			</ul>
		</li>
		<li>Copy the default contents from <code>C:\wamp\default_local_jaxer\conf</code> to <code>C:\wamp\local_jaxer\conf</code> (or <code>C:\xamp\default_local_jaxer\conf</code> to <code>C:\xamp\local_jaxer\conf</code>)</li>
		<li>Verify the installation (<code>C:\wamp\bin\apache\apache2.2.8\bin\httpd -t</code> or <code>C:\xamp\apache\bin\httpd -t</code>)</li>
	</ol>
	
	<p>
		As the install location chosen is inline with the filesystem layout and different from the regular Jaxer setup, the logs and local_jaxer 
		folders are not in the standard location as a peer of the Jaxer folder, so we need to make a few changes to the shipped scripts. Edit 
		<code>bin\jaxer\StartJaxer.bat</code> and change the following settings:
	</p>
	
	<pre name="code" class="brush: bash;"># As shipped
if not defined JAXER_LOG_OUTPUT set JAXER_LOG_OUTPUT=%~dp0\..\logs\jaxer.log
if not defined JAXER_TEMP set JAXER_TEMP=%~dp0\..\tmp
if not defined JAXER_CFG set JAXER_CFG=%~dp0\..\local_jaxer\conf\JaxerManager.cfg
		
# WAMP values
if not defined JAXER_LOG_OUTPUT set JAXER_LOG_OUTPUT=%~dp0\..\..\logs\jaxer.log
if not defined JAXER_TEMP set JAXER_TEMP=%~dp0\..\..\tmp
if not defined JAXER_CFG set JAXER_CFG=%~dp0\..\..\local_jaxer\conf\JaxerManager.cfg</pre>

	<p>
		The  conf and extension folder locations are defined in <code>jaxer\framework\config.js</code> and you need to change those references, in this 
		case by changing the relative path to point one folder further up the tree:
	</p>
	
	<pre name="code" class="brush: bash;">LOCAL_CONF_DIR: ('LOCAL_CONF_DIR' in Jaxer.Config) ? Jaxer.Config.LOCAL_CONF_DIR : "../../local_jaxer/conf", // It may have been set before this point, if you're in Jaxer Framework dev mode
LOCAL_EXTENSIONS_DIR: ('LOCAL_EXTENSIONS_DIR' in Jaxer.Config) ? Jaxer.Config.LOCAL_EXTENSIONS_DIR : "../../local_jaxer/extensions",</pre>

	<p>Finally, start Apache, run <code>bin/jaxer/StartJaxer.bat</code> and open <a href="http:/localhost/aptana">http:/localhost/aptana</a> in your web browser.</p>

	<p>
		At this point WAMP/XMP and Jaxer should be running together. If you want to serve content through the default www folder you'll need to add the Jaxer 
		processing directives to that entry in the base <code>C:\wamp\bin\apache\apache2.2.8\conf\httpd.conf</code> or <code>C:\xamp\apache\conf\httpd.conf</code> file.
	</p>
	
	<h2 id="previewConf">Preview Jaxer Apps in Studio with an External Server</h2>
	
	<p>
		Once you've set up Jaxer to work with an external web server such as Apache, WAMP, XAMP or similar, you can configure Aptana Studio to take advantage of it 
		for previews while you develop your applications. This requires a few configuration changes. 
	</p>
	
	<ol>
		<li>Edit the web server conf file to allow it to process documents from your Aptana Studio workspace.</li>
		<li>
			In Studio, configure the preview preferences for your project. The following instructions assume you want to set up a workspace project called myProj to be served through a WAMP instance:</p>
			<ol type="a">
				<li>Right click myProj in the Project browser and choose <em>Preferences</em></li>
				<li>Select the HTML Preview panel</li>
				<li>Check the <em>Override workspace settings</em> checkbox</li>
				<li>Select <em>Use absolute URL</em> as the Preview Type</li>
				<li>Enter the URL for the project (<code>http://localhost/studio/myProj</code>)</li>
				<li>Check the <em>Append project relative path</em> checkbox</li>
				<li>Click Apply, then OK </li>
			</ol>
		</li>
		<li>
			Create a new conf file, for example named <code>jaxer-workspace.httpd.conf</code>, with the following content in the web server's <code>conf\extra</code> folder.
			<textarea name="code"class="brush: bash;"><Directory "C:\path\to\your\workspace">
    JaxerFilter .html .xhtml .htm .php
    JaxerFilterContentType text/html
                   
    Order Deny,Allow
	Allow from all
</Directory>
Alias /studio "C:\path\to\your\workspace"</textarea>
		</li>
		<li>Add this line to your server's <code>conf\httpd.conf</code> file: <code>Include conf/extra/jaxer-workspace.httpd.conf</code></li>
	</ol>

	<p>After you restart the Apache daemon, requests to http://localhost/studio/&lt;PROJECTNAME> will now served by your server.</p>

	<h2 id="asService">Set up Jaxer as a Service/Server</h2>

	<p>
		For production or even very heavy development phases you may prefer to have Jaxer running at all times rather than launching it manually, as described in the 
		next section. You should understand that Jaxer must be started separately from Apache, configuring mod_jaxer alone is not sufficient.
	</p>
	
	<p>
		Running Jaxer as a service on Linux and OS X is no different from how you normally launch Jaxer except that you must set up a mechanism to ensure Jaxer runs 
		when the computer is on.
	</p>
	
	<p>
		Also on Linux and OS X only, the user as which Jaxer runs must have write permissions on certain folders, especially for log files and folders in which any 
		files the application itself writes are stored.
	</p>
		
	<h3>Windows</h3>
	
	<p>
		We include command line arguments in JaxerManager to install and uninstall Jaxer as a service, as well as start service and stop service commands. You can pass 
		the full set of <a href="develop_command-line.php">command line configuration options</a> with the Install argument.
	</p>
	
	<pre name="code" class="brush: bash;">JaxerManager -i[nstall] [JaxerManager options]
JaxerManager -u[ninstall]
JaxerManager -s[tart]
JaxerManager -stop</pre>

	<h3>OS X</h3>

	<p>
		<span style="float: left; margin-right: 15px;"><img src="images/lingon_setup.png" style="width: 200px; margin-top: 0px;" alt="Lingon Setup" /></span>This OS does not include a simple tool for ensuring certain applications run constantly so we recommend you consider using a free, open source utility called 
		<a href=" the user as which Jaxer runs">Lingon</a>. Lingon is a graphical user interface for creating an editing launchd configuration files written by 
		Peter Borg. You can use launchd on a Mac to launch scripts and applications whenever something special happens or at a specific time or periodically.
	</p>
	
	<p>
		As shown in this image, 
		to configure Lingon you simply enter a name (e.g., com.aptana.jaxer), the full path to the start script supplied with Jaxer (/Applications/Aptana_Jaxer/scripts/start.sh) 
		and check the Run at startup or login option.
	</p><br class="clearfix">
	
	<h3>Linux</h3>
	
	<p>
		This is one area in which the distros differ greatly. We will post the more popular (among Jaxer developer community) distros but if you have instructions 
		for another one please post it to the <a href="http://forums.aptana.com/viewforum.php?f=32">Installing and Configuring Jaxer</a> forum and we'll add it here.
	</p>
	
	<h3>Ubuntu and Red Hat</h3>
	
	<p>
		<strong>Note:</strong> These instructions should work for Ubuntu and other Debian-based distros and Red Hat and its kin, however, the further away you get... Slackware 
		is apparently an example of too far away.
	</p>
	
	<ul>
		<li>touch /etc/init.d/jaxer</li>
		<li>chmod +x /etc/init.d/jaxer </li>
		<li>open /etc/init.d/jaxer and copy in the following script</li>
	</ul>
	
	<pre name="code" class="brush: bash;">#!/bin/sh
#
# Aptana Jaxer initscript
#
case "$1" in
	start)
		echo "Starting jaxer..."
		/opt/AptanaJaxer/scripts/start.sh
		echo "Jaxer started."
		&nbsp;;;
	stop)
		echo "Stopping jaxer..."
		/opt/AptanaJaxer/scripts/stop.sh
		echo "Jaxer stopped."
		&nbsp;;;
	force-reload|restart)
		/opt/AptanaJaxer/scripts/stop.sh
		echo "Jaxer stopped."
		/opt/AptanaJaxer/scripts/start.sh
		echo "Jaxer successfully restarted."
		&nbsp;;;
	*)
		echo "Usage: /etc/init.d/jaxer {start|stop|restart|force-reload}"
		exit 1
		&nbsp;;;
esac
exit 0</pre>
	
	<p>You can now start, stop, or restart Jaxer by running <pre>/etc/init.d/jaxer {start|stop|restart}</pre></p>

	<p><b>Using the Service command</b></p>
	
	<p>
		To control Jaxer using the <code>service</code> command, run <code>service jaxer {start|stop|restart}</code>. Red Hat includes the service command, on Ubuntu sysvconfig 
		must be installed: <code>apt-get install sysvconfig -y</code>.
	</p>

	<p><b>Auto-launching Jaxer</b></p>
	
	<p>To set your server so Jaxer runs automatically at startup time, refer to the distro specific instructions in the following list.</p>
	
	<ul>
		<li>Ubuntu/Debian: <code>update-rc.d jaxer defaults</code></li>
		<li>Red Hat, SUSE: two commands, <code>chkconfig jaxer --add</code> and then <code>chkconfig jaxer on --level 2,3,5</code></li>
		<li>Gentoo: <code>rc-update add jaxer default</code></li>
	</ul>

	<h2 id="launchingJaxer">Launching Jaxer</h2>

	<ul>
		<li><strong>Windows:</strong> Open the <b>Aptana Jaxer</b> folder, double-click <code>StartServers.bat</code> and open <code>http://localhost:8081</code> in a web browser</li>
		<li><strong>OS X:</strong> Open the <code>Aptana_Jaxer</code> folder (inside <code>Applications</code>), and double-click the <code>Jaxer Launcher</code></li>
		<li><strong>Linux:</strong> In a terminal window run <code>/opt/AptanaJaxer/scripts/start.sh</code> and in a browser open <code>http://localhost:8081/aptana/</code></li>
	</ul>
	
	<p>
		Launching starts Jaxer, JaxerManager and the Apache server, displays the Jaxer console, and opens the Jaxer Start Page 
		in your default web browser. 
	</p>
		
	<p>On OS X you also get the <a href="images/mac-jaxer-launcher.png" class="highslide" onclick="return hs.expand(this);" title="Click to enlarge">Jaxer Launcher window</a>.</p>
	
	<h2 id="firstRun">First Run</h2>
	<p>The first time Jaxer runs several folders are created in <code>&lt;Jaxer install dir&gt;</code> directory.</p>

	<p style="text-align: center;">
		<a href="images/windows-dir-after.png" class="highslide" onclick="return hs.expand(this);">
			<img class="medium-inline" src="images/windows-dir-after.png" alt="Post Run Folder (Windows)" title="Click to enlarge"/>
		</a>
		<a href="images/mac-content.png" class="highslide" onclick="return hs.expand(this);">
			<img class="medium-inline" style="height: 95px; width: auto;margin-left: 10px;" src="images/mac-content.png" alt="Post Run Folder" title="Click to enlarge"/>
		</a>
	</p>
	
	<h2 id="validateInstallation">Validate Your Installation</h2>
	<p>Click the <b>Server Diagnostics</b> link in the sidebar to run the diagnostics application. Good install results will look like this:</p>

	<p style="text-align: center;">
		<a href="images/mac-diagnostics.png" class="highslide" onclick="return hs.expand(this);">
			<img class="medium-inline" src="images/mac-diagnostics.png" alt="Server Diagnostics (OS X)" title="Click to enlarge"/>
		</a>
		<a href="images/linux-diagnostics.png" class="highslide" onclick="return hs.expand(this);">
			<img class="medium-inline" style="margin-left: 10px;" src="images/linux-diagnostics.png" alt="Server Diagnostics (Linux)" title="Click to enlarge"/>
		</a>
	</p>

	<h3>Additional diagnostics</h3>
	<ul>
		<li><b>Components diagnostics:</b> Runs the Jaxer server unit test suite to help identify any subsytem issues</li>
		<li><b>jQuery Compatibility:</b> Runs the jQuery test suite</li>
	</ul>
	
	<h2 id="exposeContent">Content Visibility</h2>
	<p>
		Content placed inside the <b>Aptana Jaxer/public</b> directory is accessible from the root of the web server. For example, the contents of a folder named
		<b>test</b> will be accessible from at <code>http://localhost:8081/test/</code>.
	</p>
	
	<h2 id="uninstallingJaxer">Uninstalling Jaxer</h2>
	<p>Delete the <code>&lt;Jaxer install dir&gt;</code> folder.</p>
	
	<h2 id="troubleshooting">Troubleshooting</h2>
	
	<h3>Port not available</h3>
	<p>
		This error message occurs when a Jaxer package starts up and attempts bind to a port number already in use by another 
		server or application, most commonly another instance of Apache. The Apache default port is 8081 and the Jaxer defaults 
		are 4327 (used for Apache to talk to Jaxer) and 4328 (CLI port for talking to JaxerManager, also used by Aptana Studio).
	</p>
	<p>
		The three ports can be set in StartServers.bat on Windows and in &lt;Jaxer install dir&gt;/scripts/StartJaxer.sh on Linux and OS X, 
		preferably just after the JAXER_LOG_OUTPUT setting; on OS X the default Apache port can be changed on the Jaxer 
		Launcher preferences dialog.
	</p>

	<div class="example-title">Port settings in StartServers.bat/StartJaxer.sh</div>
	<pre name="code" class="brush: bash;">set JAXER_APACHE_PORT=80
set JAXER_WEB_PORT=4327
set JAXER_COMMAND_PORT=4328</pre>

	<h3>Linux Dependencies</h3>
	<p>
		If you're running a server or headless version of Linux and Jaxer will not start you're most likely missing certain 
		required X/graphical libraries (our standards-based Mozilla core has dependencies although there is no actual 
		rendering on screen); the simplest solution is to install Firefox using your distribution's package manager:
		<ul>
			<li>Fedora: <code>yum install firefox-devel</code></li>
			<li>Debian: <code>apt-get install firefox-devel</code></li>
		</ul>
	</p>
	
	<h4>Dependencies not found</h4>
	<p>The <code>ldd</code> command displays the Jaxer dependencies which could not found - which you may then install using the package manager:</p>
	<pre name="code" class="brush: bash;">export LD_LIBRARY_PATH=/opt/AptanaJaxer/jaxer
ldd /opt/AptanaJaxer/jaxer/jaxer</pre>
	
	<h3>CentOS 5.1 Issues</h3>
	<p>On CentOS 5.1 if you see a stream of "Jaxer creation failed" messages when running start.sh from the command line, then you may need to install the sqlite and firefox-devel packages:</p>
	<pre name="code" class="brush: bash;">yum install sqlite
yum install firefox-devel</pre>
	
	<h3>Fedora 8 Issues</h3>
	<p>On Fedora 8 if you get an error message about a missing libexpat.so.1 library, then you will need to create a symlink where libexpat.so.1 points to libexpat.so.0.</p>
	<pre name="code" class="brush: bash; toolbar: false;">ln -s /lib64/libexpat.so.0 /lib64/libexpat.so.1</pre>
	
	<h3>Out of Memory</h3>
	<p>If the Jaxer server crashes with an "Out of Memory" exception, you may have to increase the memory defaults. A simple way to do this would be to set no maximum limits for the Jaxer process. Run this command before starting Jaxer:</p>
	<pre name="code" class="brush: bash; toolbar: false;">ulimit -s unlimited</pre>

	<div id="linux-install" class="highslide-html-content">
		<div class="highslide-header">
			<ul>
				<li class="highslide-close"><a href="#" onclick="return hs.close(this)"><img src="lib/highslide/graphics/close.png" alt="Close" /></a></li>
			</ul>
		</div>
		<div class="highslide-body">
			<h2>Detailed Linux Installation Instructions</h2>
			<ol>	
				<li>If the <code>/opt</code> top level directory does not exist, create it: <code>mkdir /opt</code></li>
				<li>Move the download to <code>/opt</code> directory: <code>mv Jaxer_package_withApache.zip /opt/Jaxer_package_withApache.zip</code></li>
				<li>Change to the <code>/opt</code> directory: <code>cd /opt</code></li>
				<li>Unzip the download: <code>unzip Jaxer_package_withApache.zip</code></li>
				<li>Open up access privileges: <code>chmod -R a+x AptanaJaxer</code></li>
				<li>Edit the Apache configuration file: <code>vi /opt/AptanaJaxer/Apache22/conf/httpd.conf</code></li>
				<li>Change ServerName: <code>ServerName www.yourdomain.com:8081</code></li>
				<li>At the end of the file append the username under which Apache should run: <code>User username</code></li>
			</ol>	
		
			<h3>Configuring Jaxer for Outside Access</h3>
			<p>
				By default, this installation only allows connections from 127.0.0.1 and localhost so to grant wider access you 
				must edit the Jaxer configuration file: <code>vi /opt/AptanaJaxer/jaxer/framework/config.js</code>.
			</p>
			<ul>
				<li>Find the line near the bottom containing <code><em>REWRITE_RELATIVE_URL</em></code> and uncomment it.</li>
				<li>Change the URL to <code>http://localhost:8081</code> and save the file. The port to use in that URL should match the port Apache is using, but may be omitted entirely if Apache uses port 80.</li>
				<li>If Jaxer is already running, you need to stop and start Jaxer to activate these changes.</li>
			</ul>
		</div>
	</div>
	
	<h3><em>Jaxer is not defined</em> error</h3>
	
	<p>
		If you see this message, check that your Jaxer server is running. If you're inside Aptana Studio, the Jaxer toolbar button should be showing the green light and 
		if it's not click the toolbar button to restart Jaxer server. For standalone Jaxer, follow the <a href="#launchingJaxer">Launch instructions</a> for your operating system.
	</p>
	
	<h3>Could not set System.homeFolder</h3>
	
	<p>
		On some system configurations, an error may be logged during startup when Jaxer tries to determine the location of the home folder. This may be caused by an 
		invalid or erroneous setting for the HOME environment variable. Make sure that the <code>HOME</code> environment variable references a location that is both a 
		valid folder and is accessible to the user running Jaxer. This error can be ignored; however further attempts to use the <code>Jaxer.System.homeFolder</code> 
		property will result in additional instances of the exception being written to the logs.
	</p>
	
</div>
									</div>
									<div id="example-template" style="display:none;">
										<a onclick="return showHighslide(this);" class="highslide example-link"></a>
										<div class="highslide-html-content">
											<div class="highslide-header">
												<ul>
													<li class="highslide-move"><a href="#" onclick="return false">Move</a></li>
													<li class="highslide-close"><a href="#" onclick="return hs.close(this)">Close</a></li>
												</ul>
											</div>
											<div class="highslide-body">
												<div class="example-title"></div>
												<div class="example-description"></div>
												<div class="example-body" style="overflow-y:scroll;"></div>
											</div>
											<div class="highslide-footer">
												<div>
													<span class="highslide-resize" title="Resize">
														<span></span>
													</span>
												</div>
											</div>
											<div id="closebutton" class="highslide-overlay closebutton" onclick="return hs.close(this)" title="Close"></div>
										</div>
									</div>
								</td>
							</tr>
						</table>	
					</div>
<?php include('../includes/footer.php'); ?>