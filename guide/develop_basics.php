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
		<h1>Basics</h1>
	</div>
	<div id="mainContent">
		<div class="assets-container">
			<div class="assets toc ">
				<div class="assets-header">Contents</div>
				<ul>
					<li><span><a href="#codeAv">Code Availability</a></span></li>
					<li><span><a href="#entryPoints">Entry Points in Code</a></span></li>
					<li><span><a href="#jaxerDOM">The Jaxer DOM</a></span></li>
					<li><span><a href="#jaxerConfFiles">Jaxer's Configuration Files</a></span></li>
					<li><span><a href="#jaxerConf">Refreshing Jaxer Configuration Files</a></span></li>
					<li><span><a href="#includingContent">Including Content and Scripts</a></span></li>
					<li><span><a href="#i18n">Internationalization and Localization</a></span></li>
				</ul>
			</div>
	
			<div class="assets">
				<div class="assets-header">API Links</div>
				<div class="assets-body">
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Function" target="api">Jaxer Function Object</a></div>
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Request" target="api">Jaxer.Request</a></div>
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Response" target="api">Jaxer.Response</a></div>
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Includer" target="api">Jaxer.Includer</a></div>
				</div>
			</div>
		</div>
		
		<h2 id="codeAv">Code Availability</h2>
		<p>
			To specify whether your JavaScript should run on the client, on the Jaxer server, or both, you add the <code>runat</code> and 
			<code>autoload</code> attributes to your script tags. Both script blocks in HTML files and external JS files are supported.
		</p>
		
		<p>
			A <code>proxy</code> token indicates that the script's functions are available on the server to be called by client-side 
			code. Using the <code>nocache</code> token indicates that the script's functions are not available on the server 
			when <a href="develop_proxies.php">proxy functions</a> are executing since, by default, all server functions are 
			otherwise available.
		</p>
		
		<p>The options for the <code>runat</code> attribute are:</p>
		<table class="narrow">
			<tr><th>Option</th><th>Description</th></tr>
			<tr><td><code>server</code></td><td>available on the server only</td></tr>
			<tr><td><code>server-proxy</code></td><td>available on the server only; also callable as a proxy function from client-side code</td></tr>
			<tr><td><code>server-nocache</code></td><td>available on the server only during initial (DOM1) processing</td></tr>
			<tr><td><code>both</code></td><td>available on the server and the browser</td></tr>
			<tr><td><code>both-proxy</code></td><td>available on the server and the browser and callable as a proxy function from client-side code</td></tr>
			<tr><td><code>both-nocache</code></td><td>available on the server and the browser only during initial (DOM1) processing</td></tr>
			<tr><td><code>client</code></td><td>available on the browser only</td></tr>
		</table>
		
		<p>
			If you don't specify the <code>runat</code> attribute for a script block, it will only be available in the browser (DOM2).
		</p>
		
		<p>Function availability can also be designated by assigning a value to the <a href="http://www.aptana.com/reference/jaxer/api/Function.html" target="api">runat property</a> on a function object.</p>
		
		<h3>The <code>autoload</code> Attribute</h3>
		<p>
			The <code>autoload</code> attribute lets you indicate whether an external included script should be automatically loaded and made available 
			during a callback. A value of <code>true</code> will autoload the external script and make it available upon any callback to the page. The 
			default value is <code>false</code>.
		</p>
		
		<p>
			The difference between <code>autoload=false</code> and <code>runat="server-nocache"</code> or 
			<code>runat="both-nocache"</code> is that the former works at the file level and the latter work at the 
			function/script block level. Auto-loaded scripts will run, including execution of JavaScript contained in it, 
			prior to the <code>oncallback</code> and the actual proxy function called.
		</p>
		
		<h3>Overrides</h3>
		
		<p>
			As Jaxer executes server-side code, certain standard functions&mdash;<code>alert</code>, <code>confirm</code> and <code>prompt</code>&mdash;
			lose their context so alternative implementations are provided that write info-level <a href="develop_logging.php">log messages</a> in place of displaying popups.
		</p>
		
		<h2 id="entryPoints">Entry Points in Code</h2>
		
		<p>
			As with client-side JavaScript, any server-side JavaScript that is outside of a function scope will be executed as 
			it is encountered, whether or not the entire DOM is available. Client-side JavaScript offers a mechanism for 
			delaying script execution until the page has finished loading; namely, the <code>window.onload</code> handler. 
			Jaxer provides an equivalent mechanism on the server side with the <code>window.onserverload</code> handler. 
			Jaxer also provides an <code>oncallback</code> handler, which is invoked prior to execution of a 
			<a href="develop_proxies.php/">proxied callback</a> function.
		</p>
		
		<h3 id="runat-inlined">Inlined runat Script Blocks</h3>
		<div class="example">
			<div class="example-description">Note that Jaxer overrides the alert function on server-executed code to write to the log file.</div>
			<div class="body">
				<textarea name="code" class="brush: html;">
<html>
	<head>
		<script type="text/javascript" runat="server" autoload="true">
			window.onserverload = function() {
				window.alert("Running on the server.");
			};
		</script>
		
		<script type="text/javascript" runat="client">
			window.onload = function() {
				window.alert("Running in the browser.");
			};
		</script>
		
		<script type="text/javascript" runat="both">
			function performTask() {
				if (Jaxer.isOnServer()) {
					window.alert("Running on the server.");
				} else {
					window.alert("Running in the browser.");
				}
			};
		</script>
	</head>
</html></textarea>
			</div>
		</div>

		<h3 id="runat-referenced">Referenced runat Script Blocks</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: html;" nowrap="true">
<html>
	<head>
		<script type="text/javascript" runat="server" autoload="true" src="src/jaxer-include/Server.js"></script>
		<script type="text/javascript" runat="client" src="src/Client.js"></script>
		<script type="text/javascript" runat="both" src="src/Shared.js"></script>
	</head>
</html></textarea>
			</div>
		</div>
		
		<h2 id="jaxerDom">The Jaxer DOM</h2>

		<p>
			The Jaxer environment is based upon the very same Mozilla engine which powers Firefox 3. This means that, for the 
			most part, DOM interaction in Jaxer is the same as interacting with the DOM in a web browser. It parses and executes 
			pages progressively, building up the DOM as it goes along, and allowing JavaScript to interact with whatever DOM 
			has already been built up at the time the JavaScript executes. Any <code>document.write()</code> calls will write 
			to the DOM immediately following the current location on the page. The JavaScript that is part of a page, and 
			loaded into the page, executes within the context of the global window object.
		</p>
		
		<p>
			For each request at the server, Jaxer provides a document object model. This DOM (which we'll refer to as 
			<em>DOM1</em>) can be used to insert data and otherwise transform the page before it is first returned to the 
			browser. You interact with and manipulate the DOM much the same as you would in the browser. Some third party 
			Javascript toolkits, such as <a href="http://www.jquery.com/"  target="_blank">jQuery</a>, can also be used to 
			modify this DOM.
		</p>
		
		<p>
			The document is accessible through the document object, and the root element of the DOM is accessible through the 
			<code>document.documentElement</code> object.
		</p>
		
		<p>
			To ensure that element properties are serialized properly when the DOM is returned to the browser, use 
			<code>element.setAttribute("attr", "value")</code> rather than <code>element.foo = "value"</code>. Form element 
			values set with formElement.value [code font] are an exception; they'll still be serialized as expected. To attach 
			an event handler to an element, use the special Jaxer method 
			<code><a href="http://www.aptana.com/reference/jaxer/api/Jaxer.html#Jaxer.setEvent" target="api">Jaxer.setEvent()</a></code>.
		</p>
		
		<h3 id="transforming-dom">Transforming the DOM</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: html;">
<script type="text/javascript" runat="server">
	window.onserverload = function() {
		var textNode = document.createTextNode("wocka wocka wocka");
		var element = document.getElementById("container");
		element.appendChild(textNode);
	};
</script></textarea>
			</div>
		</div>
		
		<p>
			Some cases must be specially handled because they do not permanently modify the DOM of the page which is returned 
			to the browser. For example, to modify a document's title or to attach an event handler you must use one of the 
			Jaxer functions included to close this gap, such as <code>Jaxer.setTitle</code> and <code>Jaxer.setEvent</code>.
		</p>
		
		<h2 id="jaxerConfFiles">Jaxer's Configuration Files</h2>
		
		<p>Jaxer uses five core configuration files:</p>
		
		<ol>
			<li><strong>config.js:</strong> Core settings, including server mode (defaults to Production, otherwise Development), Mozilla preferences and relative URLs</li>
			<li><strong>JaxerManager.cfg:</strong> Provides override values for the JaxerManager executable, such as maxrequests and min/max processes</li>
			<li><strong>configApps.js:</strong> Holds application-specific settings, discussed in detail in <a href="develop_applications.php">Applications</a></li>
			<li><strong>configLog.js:</strong> Controls logging, discussed in detail in <a href="develop_logging.php">Logging</a></li>
			<li><strong>Jaxer_prefs.js:</strong> This file has been deprecated and any values you set here should instead be set in config.js in the Config.MOZ_PREFS array.</li>
		</ol>
		
		<h3>config.js</h3>

		<p>
			Possibly the most important setting to understand is server mode since it controls whether Jaxer reloads files each time a browser makes a 
			request, optimizes performance by caching bytecode and determines whether errors should be displayed within the served page or in callbacks. The default is set 
			to Production mode and in production mode Jaxer <strong>does not</strong> reload files until the server is restarted, does cache bytecode and 
			does not display error in the served page. Development mode does the opposite.
		</p>
		
		<p>
			To include scripts and access files and so on, Jaxer may need to get that content from the web server. If your web server needs to be 
			reached via a different domain/port than the incoming request, you can configure Jaxer to do so by setting Config.REWRITE_RELATIVE_URL and 
			Config.REWRITE_RELATIVE_URL_REGEX.
		</p>
		
		<p>
			To have Jaxer use MySQL rather than SQLite for its own needs across all your applications on the server, set Config.FRAMEWORK_DB as 
			shown in the commented out block in this file.
		</p>
		
		<p>Config.MOZ_PREFS contains settings for the Mozilla engine inside Jaxer including:</p>
		
		<ul>
			<li>user agent, including related properties such as locale and default character set</li>
			<li>whether NewHTMLEvents are fired for specific element tags</li>
			<li>override the core log level otherwise set in configLog.js</li>
			<li>log the communication between JaxerManager and mod_jaxer for debugging</li>
			<li>Jaxer DOM canvas dimensions</li>
			<li>network proxy</li>
			<li>custom error file to serve if the Jaxer framework cannot be loaded</li>
		</ul>
		
		<p>To see some a more complete list, launch Firefox and browse to about:config</p>
		
		<h3>JaxerManager.cfg</h3>
		
		<p>
			Values in this file can also be set in a separate config file passed as a command line argument or as individual command line arguments 
			when launching Jaxer. The priority when the same argument is specified in more than one of them is
		</p>
		
		<ol>
			<li>JaxerManager.cfg</li>
			<li>Separate config file passed as a command line argument</li>
			<li>Individual command line arguments</li>
		</ol>
		
		<h2 id="jaxerConf">Refreshing Jaxer Configuration Files</h2>
		
		<p>
			In certain circumstances you will want to get a fresh new set of Jaxer configuration files and this is easily done 
			with both standalone Jaxer and the Jaxer bundled inside of Aptana Studio. The files are kept in a folder called 
			<em>local_jaxer/conf</em>. 
		</p>

		<p>
			Standalone Jaxer has this folder directly inside its top-level folder (e.g., on Windows 
			in <em>c:\Program Files\Aptana\Aptana Jaxer</em>, on OS X in <em>Applications/Aptana Jaxer</em>) but in Studio the 
			conf directory is a bit trickier to find and the easiest way to get to it is by right clicking on the Jaxer Internal 
			Server inside the Servers view and choosing <em>Browse local_jaxer folder</em> from the menu. This will select the 
			folder in the File browser.
		</p>
		
		<p style="text-align: center;">
			<a href="images/local_jaxer_conf.png" class="highslide" onclick="return hs.expand(this);">
				<img class="medium-inline" src="images/local_jaxer_conf.png" alt="Local Jaxer Conf dir (OS X)" title="Click to enlarge"/>
			</a>
		</p>
		
		<p>
			In either version once you have the conf folder located you simply rename it, quit Studio or Jaxer and restart the 
			same. As part of the Jaxer startup script the presence of this directory is checked and when not found it's recreated 
			with default copies of the base files written to it.
		</p>
		
		<p>
			The reason for renaming, rather than deleting, the folder is that after you get the fresh files you can port over 
			any changes you made, such as setting the log level to something other than the default or database and path 
			settings for your applications.
		</p>

		<p>
			You must restart Jaxer for the changed files to take effect (same applies to the Jaxer inside Aptana Studio, you 
			need to restart Studio).
		</p>
		
		<h2 id="includingContent">Including Content and Scripts</h2>

		<p>
			Additional HTML content may be injected into the requested page using the <code>&lt;jaxer:include src="..."&gt;</code> and 
			<code>&lt;jaxer:include path="..."&gt;</code> tags; use src to specify a URL (full or relative path is okay) and path to specify a local file reference. 
			An additional technique to load html content is to use the <a href="http://www.aptana.com/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Request" target="api">Jaxer.File</a> 
			object to load content which can then be inserted into the DOM using <code>Element.innerHTML</code>.
		</p>
		
		<h3 id="including-fragments">Including Content with &lt;jaxer:include&gt;</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: html;">
<html>
	<head>
	</head>
	<body>
		<jaxer:include src="jaxer-include/fragment.html"></jaxer:include>
		<jaxer:include path="file://c:/projects/jaxer-include/fragment.html"></jaxer:include>
		<jaxer:include path="file:///Applications/Aptana_Jaxer/public/jaxer-include/fragment.html"></jaxer:include>
	</body>
</html></textarea>
			</div>
		</div>
		
		<h3>Loading Scripts Programatically</h3>
		
		<p>
			<code>Jaxer.load</code> injects JavaScript into the DOM, and you may optionally specify the runat location 
			(defaults to the most recently evaluated value). This is useful when you need to determine the script file 
			to load at run time, during initial load or in a callback, as well as getting around JavaScript's inability 
			to load other JavaScript files.
		</p>

		<h3 id="loading-scripts">Loading Scripts in a Callback</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: html;">
<html>
	<head>
		<script type="text/javascript" runat="server">
			window.oncallback = function() {
				var optionalReferenceUrl = '/path/to/';
				var path = Jaxer.Web.resolve("scriptFile.js", optionalReferenceUrl);
				Jaxer.load(path);
			};
		</script>
	</head>
</html></textarea>
			</div>
		</div>
		
		<h3 id="using-includer">Script Inclusion</h3>
		<div class="example">
			<div class="example-description">Pull in your JavaScript library, from inside another JavaScript file!</div>
			<div class="body">
				<textarea name="code" class="brush: html;">
<html>
	<head>
		<script src="myApp.js" type="text/javascript" runat="server"></script>
	</head>
	<body>

	</body>
</html></textarea>
				<pre name="code" class="brush: js;">
// content of myApp.js
// ...
// other JS code
var lf = new Array;
lf.push(Jaxer.Dir.resolve("lib/myLib1.js", Jaxer.request.currentFolder));
lf.push(Jaxer.Dir.resolve("lib/myLib2.js", Jaxer.request.currentFolder));
lf.push(Jaxer.Dir.resolve("lib/myLib3.js", Jaxer.request.currentFolder));
Jaxer.Util.foreach(lf, function(curItem, index) {
	Jaxer.load(curItem);
});
// ...
// more JS code</pre>
			</div>
		</div>
		
	</div>

<!--	<h2 id="i18n">Internationalization and Localization</h2> -->
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