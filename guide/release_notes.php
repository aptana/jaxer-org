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
										<div class="releaseNotes"><h2>Release 1.0.3:</h2>
<ul class="posts">
	<li class="post add">The Jaxer Guide has been significantly updated, with expanded coverage of setting up Jaxer and database functionality as well as a search tool.</li>
	<li class="post add">Fixed resultset handling of empty cols</li>
	<li class="post add">Added native support for ODBC on Linux and Mac platform.</li>
	<li class="post add">Correctly set the appKey to use the 'name' of the current Application as defined in the applications configApps.js, this fixes the issue whereby session was shared amongst different applications. </li>
	<li class="post add">Jaxer.Socket - removed the assumption of iso8859-1 and replaced with default of utf8</li>
	<li class="post add">Improved format of reported exceptions to increase readability</li>
	<li class="post add">Moved from a single large serverframework file, to individual included modules, this allows exceptions to refer to the module, and makes it easier for developers to work with the framework.</li>
	<li class="post bug">[JXR-400] Handle large response headers properly.</li>
	<li class="post bug">[JXR-404] Allow unlimited value length in form fields</li>
	<li class="post bug">[JXR-399] Support Unicode I/O in Jaxer.Process</li>
	<li class="post bug">[JXR-418] Jaxer.request.parsedUrl.queryParts not unencoding entirely, fixed the single replace for '+' with a global replace</li>
	<li class="post bug">[JXR-421] added fix for Jaxer.File.readline to correctly handle Macline endings   </li>  
	<li class="post bug">[JXR-422] added support for extra SMTP headers </li>
	<li class="post bug">[JXR-431] Share connection pools among the same workers</li>
	<li class="post bug">[JXR-402] implement configurable nsIDOMScreen values</li>
</ul><h2>Release 1.0.2:</h2>
<ul class="posts">
    <li class="post add">
    	Add onsslcerterror support to the Jaxer Sandbox, to support working with SSL connections
		that may not have proper certificates. This was already implemented for Jaxer.XHR.
    </li>
    <li class="post add">
    	Add Jaxer.Util.createObject to support creating objects from their constructor names 
		and an arbitrary (not known in advance) number of parameters. Also enhanced
		Jaxer.Util.findInGlobalContext to support namespaced names.
    </li>
    <li class="post add">
    	Add Jaxer.Util.DOM.insertHTML to allow injection of any HTML content in the DOM.
		It is the HTML equivalent of Jaxer.load, and the programmatic equivalent of
		the &lt;jaxer:include&gt; element (but with a bit more control).
    </li>
    <li class="post add">
		Support addEventListener for the serverload event, and even for onload (controllable
        through Jaxer.Config.ONLOAD_ENABLED and per-request via Jaxer.onloadEnabled).
        Similarly for the afterprocesscallbacks event.
        (JXR-91)
    </li>
    <li class="post add">
		Build into Jaxer Core (i.e. Mozilla) support for __noSuchMethod__ on the anonymous global
		object. It works exactly the same as, e.g., window.__noSuchMethod__ and allows
		dealing with previously-undefined tokens.
        (https://bugzilla.mozilla.org/show_bug.cgi?id=466239)
    </li>
	<li class="post bug">
		Fixed several issues with Jaxer.DB.ResultSet that occur when there are no rows (no data).
		These arise in particular when trying to serialize (to JSON) a resultset with no rows.
	</li>
	<li class="post bug">
		Corrected an inconsistency in the API for Jaxer.DB.ResultSet. The result is that
		the singleRow, firstRow, and finalRow properties now return the row as an object
		with column-named properties rather than as an Array. <b>Note</b> that this may break
		code that was relying on these (inconsistent) APIs!
	</li>
</ul>
<h2>Release 1.0.1:</h2>
<ul class="posts">
    <li class="post add">
    	Great simplified how developers can build Jaxer from source on their own
    </li>
	<li class="post bug">
		Fix bug in most of the Util.DOM methods that insert script tags: 
	discrepancy between how they were documented (correct) and the params they take (wrong).
	</li>
    <li class="post bug">
    	Correct and improve when and how the type attribute of emitted script elements 
		is used (JXR-338)
    </li>
    <li class="post add">
    	Add new JaxerManager command line options to restrict the local network
		interface on which it is listening: webinterfacelocalip and commandinterfacelocalip (JXR-395)
    </li>
    <li class="post add">
    	Added an onlocationchange event handler to Jaxer.Sandbox to detect, and optionally
		cancel, the location (URL) of the Sandbox's content from being changed
    </li>
    <li class="post add">
    	Fixes to serviceDispatcher and rpcDispatcher: 
		interpret the findFile() method's first argument as a true (native OS) path on disk;
		do not allow a path part of ".." (so you cannot go above the service root);
		restrict looking for the .js file at or above the service root.
    </li>
</ul>
<h2>Release 1.0.0:</h2>
<div>
	<p>Much has been added and improved in Jaxer 1.0 &mdash; too much to capture in these release notes.</p>
	<p>For more information on what has changed, and for guidelines on migrating applications based on the Jaxer beta (0.9.x) APIs to Jaxer 1.0 APIs, please refer to <a href="http://www.aptana.com/docs/index.php/Migrating_from_Jaxer_beta">the beta to 1.0 Migration Guide</a>.</p>
</div>
<h2>Release 0.9.7:</h2>
<ul class="posts">
    <li class="post add">Added informative error messages to DB.MySQL, using 
	whatever information MySQL gave about the error (JXR-153)
    </li>
    <li class="post add">Added a removeAll() method to the Jaxer.Container prototype
	so you can now clear out your session, sessionPage, page, or application containers
	(JXR-166)
    </li>
	<li class="post bug">Addressed threading issues in JaxerManager running on 
	some operating systems (JXR-176)
	</li>
    <li class="post add">Added a Jaxer.Util.isEmptyObject(obj) to determine whether
	an object has no (enumerable) properties
    </li>
    <li class="post add">createDB (and hence also Jaxer.DB.createDB) now returns a connection
	object (JXR-168)
    </li>
    <li class="post add">Improvements to scriptdoc (and hence to content assist and help docs)
    </li>
	<li class="post add">Use the latest recommended optimization options from Mozilla
	(http://mxr.mozilla.org/mozilla/source/tools/tinderbox-configs/firefox/win32/mozconfig)
	</li>
    <li class="post bug">Fixed GTK issue that caused a problem when using the canvas element
	on some operating systems (JXR-102)
    </li>
</ul>

<h2>Pre 0.9.7 Releases</h2>

<p><a href="http://www.aptana.com/node/216/">Archived Release Notes</a></p></div>
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