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
        <h1>Mozilla SpiderMonkey Features</h1>
    </div>

	<p>
		Jaxer is based on the Mozilla engine, the same core that powers Firefox 3, but without the rendering capabilities<sup>*</sup>. And this simple fact unlocks a 
		lot of power that's been built up over many years by Mozilla developers.
	</p>
	
	<p>Unless your apps and sites have targeted Firefox exclusively &mdash; unlikely, given its market share &mdash; they could not rely on JavaScript features beyond version 1.4. And how about the numerous extensions that have been developed for Firefox, some of which actually ship with the browser? Most developers don't even know about them, and they couldn't rely on them being available to most of their target audience.</p>
	
	<p>But now all that Firefox 3 goodness is under the hood of your Jaxer, on the server side, under your full control: </p>

	<ul>
		<li>JavaScript 1.7 and 1.8 generators</li>
		<li>iterators</li>
		<li>array comprehensions</li>
		<li>Microformats, anyone? The built-in Microformats.js provides access to hCard, hCalendar, and other types</li>
		<li>native JSON parsing and encoding</li>
		<li>XSLT transformations through the XSLTProcessor object</li>
		<li>RDF subsystem</li>
		<li>base64 encoding and decoding</li>
		<li>rich SOA stack with SOAP and WSDL</li>
	</ul>
	
	<p class="note"><span style="font-weight: bold; color: #ff0000;">*</span> You can do some server-side rendering with the appropriate graphics libraries installed.</p>
	
	<p>
		There are all sorts of hidden gems to discover: did you know there's a very nice Jaxer Shell in Aptana Studio that lets 
		you execute against a live Jaxer server? Try typing the following snippet in the Jaxer Shell 
		to see that we've just scratched the surface of what's available.
	</p>
	
	<h3>All properties in the Jaxer namespace</h3>
	<pre name="code" class="brush: js;">Connecting to Jaxer Console application...
Connected...
var tmp = [];
for (var p in Jaxer)
{
	tmp.push("Jaxer." + p);
}
print(tmp.sort().join("\n"));
Jaxer.AUTOLOAD_ATTR
Jaxer.AUTOLOAD_ATTR_FALSE_REGEXP
Jaxer.App
Jaxer.BinarySocket
Jaxer.CacheManager
Jaxer.Callback
Jaxer.CallbackManager
Jaxer.ClientError
Jaxer.Config
Jaxer.Container
Jaxer.CoreEvents
Jaxer.DB
Jaxer.Dir
Jaxer.DirUtils
Jaxer.Exception
Jaxer.Extensions
Jaxer.File
Jaxer.FileUtils
Jaxer.Filesystem
Jaxer.FunctionInfo
Jaxer.Includer
Jaxer.Log
Jaxer.NetworkUtils
Jaxer.Overrides
Jaxer.PROXY_ATTR
Jaxer.Process
Jaxer.RUNAT_ANY_BOTH_REGEXP
Jaxer.RUNAT_ANY_SERVER_REGEXP
Jaxer.RUNAT_ATTR
Jaxer.RUNAT_BOTH_AND_CACHE
Jaxer.RUNAT_BOTH_AND_PROXY
Jaxer.RUNAT_BOTH_BASE
Jaxer.RUNAT_BOTH_NO_CACHE
Jaxer.RUNAT_CLIENT
Jaxer.RUNAT_NO_CACHE_REGEXP
Jaxer.RUNAT_SEPARATOR
Jaxer.RUNAT_SERVER_AND_CACHE
Jaxer.RUNAT_SERVER_AND_PROXY
Jaxer.RUNAT_SERVER_BASE
Jaxer.RUNAT_SERVER_NO_CACHE
Jaxer.Request
Jaxer.Response
Jaxer.SIMPLE_PARSE
Jaxer.SMTP
Jaxer.SRC_ATTR
Jaxer.Sandbox
Jaxer.ScriptInfo
Jaxer.ScriptProcessor
Jaxer.Serialization
Jaxer.SessionManager
Jaxer.Socket
Jaxer.System
Jaxer.TYPE_ATTR
Jaxer.TextParser
Jaxer.Thread
Jaxer.Util
Jaxer.Web
Jaxer.XHR
Jaxer.__newFunctions
Jaxer.__tempLoad
Jaxer.afterClientFramework
Jaxer.application
Jaxer.beforeClientFramework
Jaxer.buildNumber
Jaxer.clientData
Jaxer.corePreferences
Jaxer.embeddedClientFramework
Jaxer.enabled
Jaxer.evaluateScriptsIfDisabled
Jaxer.fatalError
Jaxer.fatalErrorLogged
Jaxer.fatalErrorPage
Jaxer.frameworkLoaded
Jaxer.include
Jaxer.isCallback
Jaxer.isHeadCreated
Jaxer.isHeadInitialized
Jaxer.isOnServer
Jaxer.isServerStartedFired
Jaxer.lastLoadedFragment
Jaxer.lastScriptRunat
Jaxer.load
Jaxer.loadAllExtensions
Jaxer.loadExtension
Jaxer.notifyFatal
Jaxer.page
Jaxer.proxies
Jaxer.request
Jaxer.response
Jaxer.responseErrorPage
Jaxer.session
Jaxer.sessionPage
Jaxer.setEvent
Jaxer.setTitle
Jaxer.unloadExtension</pre>
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