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
	<div>
		<h1>JaxerManager Command Line Interface (CLI)</h1>
	</div>

	<div id="mainContent">

		<div class="assets-container">
			<div class="assets toc">
				<div class="assets-header">Contents</div>
				<ul>
						<li><span><a href="#precedence">Precedence</a></span></li>
						<li><span><a href="#sendingCommands">Jaxer Commands and Settings</a></span></li>
						<li><span><a href="#runtimeCommands">Commands that can only be issued after JaxerManager has started</a></span></li>
						<li><span><a href="#exActions">Example: Actions against JaxerManager in a command shell</a></span></li>
				</ul>
			</div>
		</div>

		<p>The Jaxer process itself is effectively single-threaded, so a pool of Jaxer processes is used to handle multiple simultaneous requests. JaxerManager is the application that manages the lifecycle of these Jaxer processes, starting them up when it starts and spinning up new ones as the load increases, tearing them down when the load decreases or JaxerManager exits (or when a Jaxer is "misbehaving"), connecting them to the web server to handle requests, and configuring them. When you start up Jaxer, you're really starting up JaxerManager: check your list of processes for a single JaxerManager.exe (or jaxermanager on Mac OS X and Linux) and multiple Jaxer.exe (or jaxer) processes.</p>
		<p>
			JaxerManager listens on one port, its "web port", for requests from the web server, and routes them to Jaxers in its pool. It also 
			listens on a different port, its "command port", for commands. These commands can also usually be specified on the command line 
			when JaxerManager is started, or in a config file loaded when JaxerManager starts (or restarts/reloads).
		</p>
		
		<h2 id="precedence">Precedence</h2>
		<p>When JaxerManager starts, it processes the commands/settings in the following order (last setting wins):</p>
		<ol>
			<li>Defaults hardcoded in the binary</li>
			<li>Default config file</li>
			<li>Config file specified on the command line</li>
			<li>Command line arguments</li>
		</ol>
		
		<h2 id="sendingCommands">Jaxer Commands and Settings</h2>
		
		<p>Commands and settings can be communicated to JaxerManager in three ways, each with its own format:</p>
		
		<ul>
			<li>arguments on the command line, as <code>--&lt;command>=&lt;value></code></li>
			<li>configuration file, one command per line as <code>&lt;command> &lt;value></code></li>
			<li>command port, only after the manager is running using the tellJaxerManager utility as <code>tellJaxerManager -p &lt;port_number> set &lt;command> &lt;value></code></li>
		</ul>
		
		<p>The following table lists all the commands, settings and parameters that JaxerManager understands, and if it can be specified in each of the three manners.</p>

		<p>To see the settings your manager supports, except for those only applicable to the CLI, execute<br /><code>JaxerManager --help</code> at an OS command prompt.</p>
 
		<p>On Windows, JaxerManager can also be run as a service (see details with JaxerManager --help)</p>
 
		<p>Note: The default value is the hardcoded in the manager binary.</p>
		
		<table class="borderedTable">
			<tr><th>Command/Setting</th><th>Value</th><th>Default</th><th>Arguments</th><th>Config&nbsp;File</th><th>CLI</th></tr>
			<tr><td>configfile</td><td>file_path</td><td>None</td><td>yes</td><td>no</td><td>no</td></tr>
			<tr><td colspan="6" class="commentBlock">Specify a config file on the cmdline that will be loaded during startup.</td></tr>
			<tr><td>webport</td><td>port</td><td>4327</td><td>yes</td><td>yes</td><td>no</td></tr>
			<tr><td colspan="6" class="commentBlock">&nbsp;</td></tr>
			<tr><td>commandport</td><td>port</td><td>4328</td><td>yes</td><td>yes</td><td>no</td></tr>
			<tr><td colspan="6" class="commentBlock">&nbsp;</td></tr>
			<tr><td>minprocesses</td><td>integer</td><td>1</td><td>yes</td><td>yes</td><td>yes</td></tr>
			<tr><td colspan="6" class="commentBlock">Minimum number of Jaxer processes.  If set to higher than maxprocesses, then maxprocesses is set to the same value.</td></tr>
			<tr><td>maxprocesses</td><td>integer</td><td>10</td><td>yes</td><td>yes</td><td>yes</td></tr>
			<tr><td colspan="6" class="commentBlock">JaxerManager will not start more Jaxer processes if there are already &lt;number> or more running; if lower than the value of minprocesses, then minprocesses is set to the same value.</td></tr>
			<tr><td>roundrobinjaxers</td><td>on | off</td><td>on</td><td>yes</td><td>yes</td><td>yes</td></tr>
			<tr><td colspan="6" class="commentBlock">Determines if requests will be roundrobined to all idle Jaxers.</td></tr>
			<tr><td>startjaxertimeout</td><td>integer</td><td>>=30</td><td>yes</td><td>yes</td><td>yes</td></tr>
			<tr><td colspan="6" class="commentBlock">JaxerManager will exit if it fails to maintain the minprocesses Jaxers for a consecutive of &lt;number> seconds.  This is mainly to prevent JaxerManager on trying to start Jaxers on a platform it repeatdly fails.  A zero value turns this off.</td></tr>
			<tr><td>jaxeridletimeout</td><td>integer</td><td>>=10</td><td>yes</td><td>yes</td><td>yes</td></tr>
			<tr><td colspan="6" class="commentBlock">Determines when an idle Jaxer process will be killed.</td></tr>
			<tr><td>pingtimeout</td><td>integer</td><td>0</td><td>yes</td><td>yes</td><td>yes</td></tr>
			<tr><td colspan="6" class="commentBlock">Set the timeout of Jaxer Manager that will die if a ping is not received within &lt;number> seconds.</td></tr>
			<tr><td>maxmemory</td><td>integer</td><td>150</td><td>yes</td><td>yes</td><td>yes</td></tr>
			<tr><td colspan="6" class="commentBlock">A hard limit of &lt;number> megabytes of aggregate RAM used is imposed on all Jaxer processes; zero means no limit. The setting affects only newly created Jaxer processes, except on Mac where it affects all processes.</td></tr>
			<tr><td>maxrequests</td><td>integer</td><td>0</td><td>yes</td><td>yes</td><td>yes</td></tr>
			<tr><td colspan="6" class="commentBlock">A Jaxer is terminated after it performs &lt;number> requests. A value of zero is equivalent to infinity.</td></tr>
			<tr><td>requesttimeout</td><td>integer</td><td>20</td><td>yes</td><td>yes</td><td>yes</td></tr>
			<tr><td colspan="6" class="commentBlock">A Jaxer that takes more than &lt;number> seconds to process a request is terminated. A value of zero is equivalent to infinity.</td></tr>
			<tr><td>loglevel</td><td>FATAL |<br />ERROR |<br />WARN |<br />INFO |<br />DEBUG |<br />TRACE</td><td>INFO</td><td>yes</td><td>yes</td><td>yes</td></tr>
			<tr><td colspan="6" class="commentBlock">Specifies the log level for jaxerManager (not Jaxer).</td></tr>
			<tr><td>log:output</td><td>absolute_path</td><td>framework/ JaxerCoreJSConsole.log</td><td>yes</td><td>yes</td><td>no</td></tr>
			<tr><td colspan="6" class="commentBlock">Specifies the logfile or a pipe to a process.  To specify a process, the first character must be '|', and you are responsible for starting that process.</td></tr>
			<tr><td>log:filesize</td><td>integer</td><td>512000</td><td>yes</td><td>yes</td><td>no</td></tr>
			<tr><td colspan="6" class="commentBlock">Logfile size in bytes</td></tr>
			<tr><td>log:numbackups</td><td>integer</td><td>10</td><td>yes</td><td>yes</td><td>no</td></tr>
			<tr><td colspan="6" class="commentBlock">Number of logfile backups to keep.</td></tr>
			<tr><td>pref:&lt;pref_name></td><td>pref_value</td><td>none</td><td>yes</td><td>yes</td><td>yes</td></tr>
			<tr><td colspan="6" class="commentBlock">Preference setting that will be passed to Jaxer.</td></tr>
			<tr><td>cfg:&lt;name></td><td>cfg_value</td><td>none</td><td>yes</td><td>yes</td><td>no</td></tr>
			<tr><td colspan="6" class="commentBlock">config settings that will be passed to Jaxer when it starts up.</td></tr>
		</table> 

		<h2 id="runtimeCommands">Commands that can only be issued after JaxerManager has started</h2> 
		
		<p>Sent in the form of tellJaxerManager -p portNumber &lt;cmd> or tellJaxerManager -p portNumber &lt;cmd> &lt;val>.</p>
		<ul>
			<li><strong>exit:</strong> Immediate, non-graceful termination of all Jaxers and then of JaxerManager.</li>
			<li><strong>stop:</strong> Graceful termination of all Jaxers once they've finished processing, then when they're all dead stop JaxerManager too.</li>
			<li><strong>pause:</strong> Suspend processing of requests</li>
			<li><strong>resume:</strong> Resume processing of requests</li>
			<li><strong>ping:</strong> Test for JaxerManager responsiveness, returns "pong" followed by one of: <code>paused|running|stopping|reloading</code></li>
			<li><strong>reload:</strong> Graceful termination of all Jaxers, followed by loading a named config file (optional, otherwise configuration is unchanged) and restarting of all Jaxer processes.</li>
			<li><strong>restart:</strong> Immediate, non-graceful termination of all Jaxers, followed by loading a named config file (optional, otherwise configuration is unchanged) and restarting of all Jaxer processes</li>
			<li><strong>get version:</strong> Returns the version string</li>
			<li><strong>get [param]:</strong> Returns the value for the specified parameter. If [param] is not a recognized parameter, then "*** bad option" is returned, followed by "\r\n".</li>
			<li><strong>get all:</strong> Returns all parameters and their values in the form of param=value separated by a comma and followed at the end by, "\r\n".</li>
			<li><strong>setconfig [property] [value]:</strong> Sets the specified property on Jaxer.Config to the passed value. Note that [property] may be of the form <code>prop1.subprop1.subsubprop1</code>, example: <code>setconfig DB_CONNECTION_PARAMS.PATH "resource:///../data/appdata.sqlite"</code></li>
		</ul>

		<h3 id="exActions">Actions against JaxerManager in a command shell</h3>
		<div class="example">
			<div class="example-description">You can tell apart the input lines from the output lines because the former always start with tellJaxerManager.</div>
			<div class="body">
				<pre name="code" class="brush: js;">D:\ajam\Aptana Jaxer\jaxer>tellJaxerManager -p 4328 get version
*** 1.0.0.3989_RC_C
 
D:\ajam\Aptana Jaxer\jaxer>tellJaxerManager get all
version=1.0.0.3989_RC_C
commandport=4328
jaxeridletimeout=10
loglevel=INFO
maxmemory=150
maxprocesses=10
maxrequests=1000
minprocesses=1
pingtimeout=0
requesttimeout=0
roundrobinjaxers=on
startjaxertimeout=30
timeout=0
webport=4327
log:filesize=500000
log:numbackups=10
log:output=D:\ajam\Aptana Jaxer\\logs\jaxer.log
 
D:\ajam\Aptana Jaxer\jaxer>tellJaxerManager set maxprocesses 5
*** ok
 
D:\ajam\Aptana Jaxer\jaxer>tellJaxerManager ping
*** pong running
 
D:\ajam\Aptana Jaxer\jaxer>tellJaxerManager maxprocesses
*** Unknown command
 
D:\ajam\Aptana Jaxer\jaxer>tellJaxerManager get maxprocesses
5
 
D:\ajam\Aptana Jaxer\jaxer>tellJaxerManager get foobar
*** bad option
 
D:\ajam\Aptana Jaxer\jaxer>tellJaxerManager stop
*** ok</pre>
			</div>
		</div>
	</div> <!-- end main content -->
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