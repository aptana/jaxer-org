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
		<h1>Page Lifecycle</h1>
	</div>
	<div>
		<div class="assets-container">
			<a  style="padding: 0px 0px 10px 20px;" href="images/lifecycle-lifecycle.png" class="highslide" onclick="return hs.expand(this);">
				<img class="medium-inline" src="images/lifecycle-lifecycle.png" alt="Page Lifecycle Drawing" title="Click to enlarge"/>
			</a>
		</div>
	
		<p>The lifecycle of a page has three stages: 
			<ol>
				<li>processing the initial page request on the server</li>
				<li>rendering the page's initial HTML in the browser</li>
				<li>processing any number of proxied functions to the page on the server</li>
			</ol>
		</p>
				
		<h2>Process</h2>
		<p>
			When a page is requested, the page is loaded into Jaxer on the server and is parsed into a 
			<a href="http://en.wikipedia.org/wiki/Document_Object_Model" target="_blank">document object model</a>, or DOM. 
			This DOM (which we'll refer to as <em>DOM1</em>) may be transformed using Javascript and the <a href="/jaxer/api/Jaxer.index-frame.html" target="api">Jaxer API</a> 
			and is then serialized as a page, returned to the browser, and discarded. This initial DOM is never rendered to the 
			screen as it has no visual representation in Jaxer on the server.
		</p>
		
		<p>
			The browser then parses the page into its own DOM, <em>DOM2</em>, and renders the page to the screen. Scripts in the 
			page of the browser may then call back to the original page at the server.
		</p>
		
		<p>
			When a proxy function is called, the server provides a new, empty DOM (<em>DOM3</em>). The proxy function can return 
			data including any serialized portion of its DOM, which may then be programatically injected into the DOM of the 
			page in the browser (<em>DOM2</em>).
		</p>
		
		<div class="note">
			The DOMs of these three phases are separate, are not synchronized, and do not directly interact, which reduces 
			the memory footprint of your application.
		</div>
		
		<div class="note">The only DOM which endures among these three stages is DOM2, the DOM in the browser window.</div>
		
		<h2>Lifecycle in Detail</h2>

		<div class="imgBlock">
			<span class="left">
				<a href="images/jaxer-execution-flow-normal.png" class="highslide" onclick="return hs.expand(this);">
					<img src="images/jaxer-execution-flow-normal.png" alt="" title="Click to enlarge" />
				</a><br>
				Standard Page Flow
			</span>
			<span>
				<a href="images/jaxer-execution-flow-callback.png" class="highslide" onclick="return hs.expand(this);">
					<img src="images/jaxer-execution-flow-callback.png" alt="" title="Click to enlarge" />
				</a><br>
				Flow with Callback/Proxied Functions
			</span>
			 <div class="clear10">&nbsp;</div>
		</div>

		<h3>Stage 1: Server Handles a Page Request</h3>
		<p>
			<ol>
				<li>The page request from the browser is received by the web server, which fetches the appropriate HTML document (either from the file system or perhaps from another "handler" such as PHP or Ruby or Java).</li>
				<li>It then feeds the document to Jaxer, which begins to parse the HTML document. As it does so it builds up the DOM tree.</li>
				<li>When it encounters <tt>&lt;script&gt;</tt> tags it not only adds them to the DOM but <i>may</i> also execute them <i>if</i> they have a <tt>runat</tt> attribute that indicates they should run on the server.</li>
				<li>During the parsing and execution, external content may also be fetched and loaded into the document, via <tt>&lt;script src="..."&gt;&lt;/script&gt;</tt> elements and <tt>Jaxer.load(...)</tt> for JavaScript code, via <tt>&lt;jaxer:include src="..."&gt;&lt;/jaxer:include&gt;</tt> (or <tt>&lt;jaxer:include path="..."&gt;&lt;/jaxer:include&gt;</tt>) for HTML content, or via XMLHttpRequests for any content.</li>
				<li>After the DOM is fully loaded, the <tt>onserverload</tt> event is fired. This is the server-side equivalent of the <tt>onload</tt> event in the browser. It's named differently so your code can react separately to <tt>onserverload</tt> and <tt>onload</tt> events.</li>
				<li>
					Jaxer post-processes the DOM, removing <code>&lt;script&gt;</code> blocks meant only for the server, replacing functions to be proxied with proxy calls, saving (as needed) functions 
					that should be available on proxy calls, and so forth.
				</li>
				<li>Finally, the DOM is serialized back to HTML, which is delivered via the web server to the browser.</li>
			</ol>
		</p>
		
		<h3>Stage 2: Browser Processes the Response</h3>
		<p>
			<ol>
				<li>The browser begins to parse the HTML, building up the DOM.</li>
				<li>When the browser encounters &lt;script&gt; tags it not only adds them to the DOM but also executes them.</li>
				<li>External JavaScript code or any other content might also be loaded.</li>
				<li>The <tt>onload</tt> event fires.</li>
			</ol>
		</p>
		<p>The page is progressively rendered throughout much of this flow, and the user <em>can</em> interact with it.</p>
		
		<h3>Stage 3: Server-side Proxy functions</h3>
		<p>
			<ol>
				<li>When Jaxer receives such a request, it creates a new, empty document unless you specify a different static document as a parameter.</li>
				<li>It retrieves the saved functions marked for availability during proxy function calls to this page.</li>
				<li>If a function called <tt>oncallback</tt> is found, it is executed. This is usually used to create the environment needed, such as loading and preparing Javascript libraries.</li>
				<li>The callback function itself is executed.</li>
				<li>Finally, the result of that execution&mdash;the return value, if the function sends one&mdash;is packaged and as the response to the request.</li>
			</ol>
		</p>
		<p>Again, note that although DOM3 is available within the execution of a proxy function, it is not serialized as HTML nor returned as the response, as is the case during the <em>regular</em> (non-proxied) page processing flow.</p>
		
		<h2>Detailed Lifecycle Code Example</h2>
		<div class="example" id="lifecycleExample">
			<div class="body">
				<div class="example-description">To try this on your computer, put the first code segment into an HTML file, the second into a file named <code>autoload.js</code> and the third into <code>loadTestFile.js</code>, with all three files in the same directory.</div>
				<textarea name="code" class="brush: html;">
<html>
	<head>
		<script type="text/javascript" runat="server">
			// we'll use this to track how many times
			// oncallback is executed
			Jaxer.session['counter'] = 0;
		</script>
			
		<script type="text/javascript" runat="both" src="autoload.js" autoload=true></script>
	
		<script type="text/javascript" runat="server">
			Jaxer.Log.info('At the top of the server-side script block');

			window.onserverload = function() {
				var path = Jaxer.Web.resolve("loadTestFile.js", Jaxer.request.currentFolder);
				Jaxer.load(path);
				Jaxer.Log.info('Inside the onserverload function');
			};
			
			window.oncallback = function() {
				Jaxer.session['counter']++;
				var path = Jaxer.Web.resolve("loadTestFile.js");
				Jaxer.load(path);
				Jaxer.Log.info('Inside the anonymous proxied oncallback function, call #: ' + Jaxer.session['counter'].toString());
				Jaxer.Log.info('Current date is: ' + serverCallableOnly());
				Jaxer.Log.info('');
			};
			
			function serverCallableOnly() {
				return Jaxer.Util.DateTime.toPaddedString(new Date);
			}
			
			function testing() {
				Jaxer.Log.info('Testing function has been called');
			}
			testing.proxy = true;
			
			// Jaxer.Log is not available to the client so this function
			// gives us simple proxy
			function clientLogProxy(msg) {
				Jaxer.Log.info(msg);
			}
			clientLogProxy.proxy = true;

			Jaxer.Log.info('Outside any functions and at the end of the server-side script block');
		</script>
		<script type="text/javascript" runat="client">
			clientLogProxy('At the top of the client-side script block');
			
			// because testing() has turned on its proxy it will execute from the client
			testing();
			
			// since serverCallableOnly cannot be called from the client,
			// the next two lines would not be executed and if you uncomment them
			// you should see an error and none of this block's log messages would be written out
			// var dt = serverCallableOnly();
			// Jaxer.Log.info('Current client date is: ' + dt);

			clientLogProxy('At the end of the client-side script block');
			clientLogProxy(''); // just a blank line for the log
		</script>
	</head>
	<body>
		<h1>Demoing the Jaxer Lifecycle</h1>
		<h2>a/k/a the Execution Sequence</h2>
	</body>
</html></textarea>
			</div>

			<div class="example-title">Autoload.js Contents</div>
			<pre name="code" class="brush: js;">
// the log line is written on every call
Jaxer.Log.info('');
Jaxer.Log.info('Inside autoload.js');

// the alert pops up as normal when called from the client
// but is written to the log when called from the server
alert((Jaxer.isOnServer) ? "On the Server":"On the Client");
Jaxer.Log.info('');</pre>

			<div class="example-title">LoadTestFile.js Contents</div>
			<pre name="code" class="brush: js;">
// since this is only called server-side,
// the alert is actually written to the log file
alert('Inside loadTestFile.js');</pre>
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