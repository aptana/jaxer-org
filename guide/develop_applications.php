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
		<h1>Applications</h1>
	</div>
	<div>
		<div class="assets-container">
			<div class="assets toc">
				<div class="assets-header">Contents</div>
				<ul>
					<li><span><a href="#createApp">Create an Application</a></span></li>
					<li><span><a href="#editConfig">Edit a configApps.js</a></span></li>
					<li><span><a href="#configQA">Configuration Q&A</a></span></li>
					<li><span><a href="#configNewApp">Configuring a New Application</a></span></li>
				</ul>
			</div>
			
			<div class="assets">
				<div class="assets-header">API Links</div>
				<div class="assets-body">
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.App" target="api">Jaxer.App</a></div>
				</div>
			</div>
		</div>
		
		<p>By default, every page belongs to a single Jaxer application: and so the <a href="/reference/jaxer/api/Jaxer.html#Jaxer.application" target="api">Jaxer.application</a> and <a href="/reference/jaxer/api/Jaxer.html#Jaxer.session" target="api">Jaxer.session</a> state containers are shared. To change this behavior, create a new application.</p>
		
		<h2 id="createApp">Create an Application</h2>
		
		<p>
			You can put application-specific settings in either configApps.js or a separate file as long as the separate 
			file's name ends in .configApps.js (for example, myApp.configApps.js). Both choices produce the same results 
			when the application runs, the reason for choosing one way over the other is mostly down to personal preference 
			and convenience.
		</p>
			
		<p>This method of application configurations lets you segregate URL patterns, pages, databases, and resource paths within each application.</p>
		
		<p>
			Jaxer comes with two additional configuration files: aptana.configApps.js and services.configApps.js.
		</p>
		
		<ul>
			<li><strong>aptana.configApps.js:</strong> Holds the settings for the sample applications shipped with Jaxer defines somple simple web</li>
			<li>
				<strong>services.configApps.js:</strong> Contains service dispatchers shipped with Jaxer: a generic one for any jaxer-service request, useful for, say,  
				defining RESTful services, and a more specialized one for Remote Procedure Calls that knows to call your JavaScript functions.
			</li>
		</ul>
		
		<h3>Jaxer comes with three config files</h3>

		<table class="narrow">
			<tr><th>File</th><th>Description</th></tr>
			<tr><td>configApps.js</td><td>Shows you how to switch the default DB used for apps or to configure a new app of your own</td></tr>
			<tr><td>services.configApps.js</td><td>Contains default configurations for the two new service dispatchers shipped as samples with Jaxer</td></tr>
			<tr><td>aptana.configApps.js</td><td>Contains configurations for the samples and tools shipped with Jaxer</td></tr>
		</table>

		<p>Here's where to find them (only after the first time you run Jaxer):</p>
		
		<table>
			<tr><th>Product</th><th>Location</th></tr>
			<tr><td>Jaxer</td><td>Aptana_Jaxer/local_jaxer/conf/</td></tr>
			<tr><td>Aptana Studio</td><td>Aptana_Studio/plugins/com.aptana.jaxer.server/jam/jaxer/framework</td></tr>
		</table>
		
		<div class="note"><b>Note:</b> configApps.js is never overwritten when upgrading Jaxer.</div>
		
		<p>Each session container belongs to the context of an application. So creating an application will affect the sharing of values within two state contexts: application and session. The sessionPage container is not affected because its session values are private to a single page.</p>
		
		<h2 id="editConfig">Edit a configApps.js</h2>
		<p>
			To add an application, insert or <code>unshift</code> an entry into the <code>Config.apps</code> array. These properties must be included:
			<table class="narrow">
				<tr><th>Property</th><th>Description</th></tr>
				<tr><td><code>urlTest</code></td><td>a regular expression or function which evaluates to true if the requested URL matches this specified application. <a href="http://en.wikipedia.org/wiki/Regular_expression#Syntax" target="_blank">Learn more</a> about regular expression patterns.</td></tr>
				<tr><td><code>name</code></td><td>the unique name of this application within Jaxer</td></tr>
				<tr><td><code>appKey</code></td><td>used to identify the <a href="/reference/jaxer/api/Jaxer.html#Jaxer.application" target="api">Jaxer.application</a> container</td></tr>
				<tr><td><code>pageKey</code></td><td>used to identify the <a href="/reference/jaxer/api/Jaxer.html#Jaxer.page" target="api">Jaxer.page</a> container</td></tr>
				<tr><td><code>path</code></td><td>the resource path to use for data. The passed argument <code>resolvedName</code> is the same as specified name of this application object</td></tr>
				<tr><td><code>db</code></td><td>the database configuration to use within this application. The easiest option is use the function <code>smartDB</code> which has been provided in configApps.js</td></tr>
				<tr><td><code>handler</code></td><td>[pending: cutting edge]</td></tr>
			</table>
		</p>
		<p>
			Each of these properties is available to the application as properties of <code>Jaxer.Request.app</code>, an instance of <a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.App" target="api">Jaxer.App</a>. The resolved value of many of these configuration properties may be accessed using uppercase keyed properties of <code>Jaxer.App</code> (<code>PAGE_KEY</code> rather than <code>pageKey</code>).
		</p>
		<p>After modifying <b>configApps.js</b>, Jaxer must be restarted.</p>
		
		<h2 id="configQA">Configuration Q&A</h2>

		<h3>How do I suppress the display of revealing Jaxer errors in the browser</h3>
		
		<p>Jaxer is shipped configured for a development environment, with server-side exception and error handling turned on.</p>

		<p>
			This means messages generated on the server-side will be sent to the browser for simpler debugging and development cycles. If the error occurred before the final 
			processing of the page, the HTML returned to the browser may well contain server-only code. To prevent such code and detailed error messages from being seen by 
			users in a production environment, we strongly recommend you change the <code>Config.DISPLAY_ERRORS</code> setting in <code>local_jaxer/conf/config.js</code> before going live.
		</p>

		<h3 id="configure-error-display">Generate an error that the default configuration displays to the browser</h3>
		<div class="example">
			<pre name="code" class="brush: js;">&lt;script runat='server'>
     throw 'foo';
&lt;/script></pre>
		<img src="images/errors_on.png" style="width: 450px; border: 1px solid #000;" alt="Default error message" title="Default error message" />
		</div>

		<p>Changing to <code>Config.DISPLAY_ERRORS</code> false replaces the message with a more generic version, though the error information is still added to the application log file.</p>
		<p><img src="images/errors_off.png" style="width: 450px; border: 1px solid #000;" alt="User-oriented error message" title="User-oriented error message" /></p>

		<h3>How do I configure Jaxer to use my proxy settings?</h3>
		
		<p>
			Much like any browser can be configured to route its network traffic through a proxy, so too Jaxer supports working with a proxy; in fact it	uses the same 
			preferences as Firefox. To see the list of preferences used on your computer, open the special URL about:config in Firefox and filter for <em>network.proxy</em> 
			where you'll find network.proxy.type, network.proxy.http, network.proxy.http_port and several more. The complete list is available on the 
			<a href="http://developer.mozilla.org/en/docs/Mozilla_Networking_Preferences"></a>Mozilla Networking Preferences page</a>. Jaxer's proxy preferences are kept 
			in <code>local_jaxer/conf/config.js</code>.
		</p>

		<h3 id="configure-error-display">Generate an error that the default configuration displays to the browser</h3>
		<div class="example">
			<pre name="code" class="brush: js;">Config.MOZ_PREFS["network.proxy.type"] = 1; // manual
Config.MOZ_PREFS["network.proxy.http"] = "127.0.0.1";
Config.MOZ_PREFS["network.proxy.http_port"] = 8888;</pre>
		</div>
		
		<h2 id="configNewApp">Configuring a New Application</h2>

		<h3 id="configure-application">Configure a new Jaxer application at the path <code>/myapplication/</code></h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: js;">
Config.apps.unshift({
	urlTest : /myapplication.*/,
	name : "myapplication",
	appKey : function(parsedUrl) {
		return "myapplication";
	}
	pageKey : function(parsedUrl) {
		return parsedUrl.hostAndPort + parsedUrl.pathAndFile;
	},
	path : function(resolvedName) {
		return Dir.combine(Config.DEFAULT_PATH_BASE, resolvedName);
	},
	db : smartDB,
}];
				</textarea>
			
				<div class="example-title">Configuration Test Page: index.html </div>
				<textarea name="code" class="brush: html;">
<html>
	<head>
		<title>My Application</title>
		<script runat="server">
			window.onserverload = function() {
				var output = [];
				output.push("Jaxer.request.app.NAME: " + Jaxer.request.app.NAME);
				output.push("Jaxer.request.app.APP_KEY: " + Jaxer.request.app.APP_KEY);
				output.push("Jaxer.request.app.PAGE_KEY: " + Jaxer.request.app.PAGE_KEY);
				output.push("Jaxer.request.app.PATH: " + Jaxer.request.app.PATH);
				output.push("Jaxer.request.app.DB: " + Jaxer.request.app.DB);
				var text = document.createTextNode(output.join("\n"));
				var element = document.getElementById("output");
				element.appendChild(text);
			};
		</script>
	</head>
	<body>
<pre id="output">

</pre>
	</body>
</html>
				</textarea>

				<div class="example-title">Output of /myapplication/index.html</div>
				<textarea name="code" class="brush: js;">
Jaxer.request.app.NAME: myapplication
Jaxer.request.app.APP_KEY: myapplication
Jaxer.request.app.PAGE_KEY: 127.0.0.1:8081/myapplication/index.html
Jaxer.request.app.PATH: resource:///../local_jaxer/data/myapplication
Jaxer.request.app.DB: [object Object]
				</textarea>

				<div class="example-title">Output of /myapplication/subdirectory/index.html</div>
				<textarea name="code" class="brush: js;">
Jaxer.request.app.NAME: myapplication
Jaxer.request.app.APP_KEY: myapplication
Jaxer.request.app.PAGE_KEY: 127.0.0.1:8081/myapplication/subdirectory/index.html
Jaxer.request.app.PATH: resource:///../local_jaxer/data/myapplication
Jaxer.request.app.DB: [object Object]
				</textarea>
			</div>
		</div>
	</div>
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