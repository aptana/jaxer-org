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
		<h1>State and Events</h1>
	</div>
	<div>
		<div class="assets-container">
			<div class="assets toc">
				<div class="assets-header">Contents</div>
				<ul>
					<li><span><a href="#contexts">Contexts</a></span></li>
					<li><span><a href="#usingContainers">Using the State Containers</a></span></li>
					<li><span><a href="#passingToClient">Passing Data to the Client</a></span></li>
					<li><span><a href="#eventHandlers">Jaxer and Event Handlers</a></span></li>
					<li><span><a href="#eventListeners">Event Listeners</a></span></li>
				</ul>
			</div>
		
			<div class="assets">
				<div class="assets-header">API Links</div>
				<div class="assets-body">
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.html" target="api">Jaxer</a></div>
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Container" target="api">Jaxer.Container</a></div>
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.SessionManager" target="api">Jaxer.SessionManager</a></div>
				</div>
			</div>
		</div>
		
		<p>
			Jaxer provides four state contexts, with each state having its own container to persist values. To illustrate session 
			state: when a user closes and then reopens a browser window of a web application yet remains logged in, the state 
			of that user's session remains in effect.
		</p>

		<h2 id="contexts">Contexts</h2>

		<p>The four states, from the narrowest scope to the broadest, are:</p>

		<ul>
			<li><code>Jaxer.sessionPage:</code> Values stored in the private context of a single page and belong to a specific session, and as such will endure over the entirety of that session, expiring when the user's session expires.</li>
			<li>
				<code>Jaxer.session:</code> A session is automatically created within the context of an application, expiring when the user's session expires. Session containers are 
				not shared among applications so if a user is working with two distinct Jaxer web applications, that user has a separate session container for each application.
			</li>
			<li>
				<code>Jaxer.page:</code> Persist values within the private context of a single page and shared within the application and among sessions. This is analogous to a 
				static member of a class in Java&mdash;the container belongs to the page yet the values are static within the application. This container only expires when the Jaxer 
				server is shutdown.
			</li>
			<li>
				<code>Jaxer.application:</code> Stores values accessible within a single application. The application container is always available when any user accesses a page 
				belonging to an application. An application container might be used to cache shared, rarely changed data originally loaded from disk or a database; your application code 
				is reponsible for managing the cache and updating the session as necessary. This container and its values expire only when the Jaxer server is shutdown.
			</li>
		</ul>
		
		<h2 id="usingContainers">Using the State Containers</h2>
		<p>
			Even though each state is stored internally as a <a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Container" target="api">Jaxer.Container</a> object, you don't 
			interact though the Container API; instead, your code treats each state as if it were a normal JavaScript associative array:</p>

		<pre name="code" class="brush: js;">
Jaxer.session["username"] = "Bullwinkle";
var username = Jaxer.session["username"];
var exists = ("username" in Jaxer.session);
delete Jaxer.session["username"];
Jaxer.session = {};
Jaxer.application["app_key"] = "s0m3h4sh";
var app_key = Jaxer.application["app_key"];
var akExists = ("app_key" in Jaxer.application);</pre>

		<h2 id="passingToClient">Passing Data to the Client</h2>

		<p>The <a class="highlight" href="/reference/jaxer/api/Jaxer.html#Jaxer.clientData" target="api">Jaxer.clientData</a> container is used to send data from the server to the client at the end of server-side page processing. Using <code>Jaxer.clientData</code> is a simpler technique to pass data to the browser at the initial page request than using hidden form elements to pass values.</p>

		<p>When Jaxer begins to process a page at the server, <code>Jaxer.clientData</code> object is empty: {} . If you set any property on this object, the entire object will be serialized to JSON at the end of processing on the server, and will be automatically deserialized by Jaxer in the browser. This data is referenced in the browser also as <code>Jaxer.clientData</code>. If no data was added at the server, <code>Jaxer.clientData</code> is not created in the browser.</p>

		<h2>Session State and Scaling</h2>

		<p>Jaxer stores session state in the database it's configured to use. If scalability is required, it's best to configure Jaxer to use an external database instead of the internal SQLite database. Multiple Jaxer servers will then be able to share session data upon requests.</p>

		<div id="session-state">
			<div class="body">
				<textarea name="code" class="brush: html;">
<html>
	<head>
		<title>Working with Session State</title>
		<script type="text/javascript" runat="server-proxy">
			
			function loginUser(username, password) {
				
				if ((username == "admin") && (password == "sesame")) {
					if (Jaxer.session["username"] == "admin") {
						Jaxer.Log.info("Admin user is already logged in.");
					} else {
						Jaxer.Log.info("Logging in admin user.");
						Jaxer.session["username"] = username;
					}
				}
			}
			loginUser.proxy = true;
			
			function performAdminTask() {
				
				if (Jaxer.session["username"] == "admin") {
					return "The admin task has been completed.";
				}
			}
			performAdminTask.proxy = true;
			
			function logoutUser() {
				
				if ("username" in Jaxer.session) {
					delete Jaxer.session["username"];
				}
			}
			logoutUser.proxy = true;
			
		</script>
		<script type="text/javascript" runat="client">
			
			window.onload = function() {
				
				loginUser("admin", "sesame");
				var result = performAdminTask();
				window.alert("result: " + result);
				logoutUser();
			};
			
		</script>
	</head>
</html></textarea>
			</div>
		</div>

		<h2 id="eventHandlers">Jaxer and Event Handlers</h2>
		
		<p>
			Typically the interesting events in a web application occur on the client: a document finishes loading, the user 
			clicks a link or submits a form, or hovers her mouse over an image. Because the events happen after the server 
			completes its processing by default the events aren't available to handle with Jaxer.
		</p>
		
		<p>
			Your code can, though, in <a href="http://en.wikipedia.org/wiki/Unobtrusive_JavaScript">unobtrusive fashion</a>, assign 
			handlers for events dynamically in processing the DOM before it gets streamed to the user's browser. Since one powerful 
			use case for Jaxer is to build pages dynamically on the server <code>Jaxer.setEvent()</code> is a convenient way to assign such 
			handlers.
		</p>

		<pre name="code" class="brush: js;">function clickMe() {
  // do something interesting here
 }
 
var inp = Document.getElementById('someElement');

// your first instinct is the following line but it doesn't work:
// inp.onclick = clickMe;

// instead, use setEvent:
Jaxer.setEvent("onclick", input, clickMe);

// the generated client side code you'll see using View Source
// should be similar to:
<div id="someElement" onclick="clickMe();"></div>
	</div>
</div></pre>

		<h2 id="eventListeners">Event Listeners</h2>
		
		<p>
			Your Jaxer apps can leverage <code>window.addEventListener</code> to hook into events in the browser in an unobtrusive manner. Jaxer adds the following 
			events to those you can listen on:
		</p>
		
		<ol>
			<li>serverload</li>
			<li>aftercallbackprocessing</li>
			<li>load</li>
		</ol>
		
		<div id="eventListenersExample">
			<div class="body">
				<textarea name="code" class="brush: html;">
<html>
	<head>
        <script runat="server">
        	/* Simple listeners for each of the three events */
			function OnServerLoadListener() { Jaxer.Log.info("OnServerLoadListener called") }
			function OnLoadListener() { Jaxer.Log.info("OnLoadListener called") }
			function OnAfterCallbackProcessingListener() { Jaxer.Log.info("OnAfterCallbackProcessingListener called") }
			
			/* Add the listeners */
			window.addEventListener("serverload", OnServerLoadListener, false);
			window.addEventListener("load", OnLoadListener, false);
			window.addEventListener("aftercallbackprocessing", OnAfterCallbackProcessingListener, false);
			
			window.onload = function() { Jaxer.Log.info('window.onload called') };
			window.onserverload = function() { Jaxer.Log.info('window.onserverload called') };
			window.onaftercallbackprocessing = function() { Jaxer.Log.info("window.onaftercallbackprocessing") };
        </script>
    </head>
    <body onserverload="Jaxer.Log.info('BODY.onserverload called')"
		onaftercallbackprocessing="Jaxer.Log.info('BODY.onaftercallbackprocessing called')"
		onload="alert('On the client! The body.onload is never called server-side.')">

<h2>Results in the Jaxer Log should be:</h2>
<pre>
[INFO] [JS Framework] [framework.] OnServerLoadListener called
[INFO] [JS Framework] [framework.] BODY.onserverload called
[INFO] [JS Framework] [framework.] OnLoadListener called
[INFO] [JS Framework] [framework.] window.onload called
[INFO] [JS Framework] [framework.] OnAfterCallbackProcessingListener called
[INFO] [JS Framework] [framework.] BODY.onaftercallbackprocessing called
</pre>
</body>
</html></textarea>
			</div>
		</div>

<p>
	Note that the <code>window.onserverload</code> and <code>window.onaftercallbackprocessing</code> event handlers have been replaced with values from 
	the body element. Similarly, making the <code>window.on&lt;event&gt;</code> assignment after the body element will replace handlers specified in body attributes.
</p>
<p>The behavior of events listeners assigned to the <code>load</code> event is controlled through the <code>Jaxer.Config.ONLOAD_ENABLED</code> configuration option as 
well as per-request via the <code>Jaxer.onloadEnabled</code> runtime value (which defaults to true). As always, the body's <code>onload</code> event handler is never 
executed server-side.</p>
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