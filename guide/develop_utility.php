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
		<h1>The Utility Namespaces</h1>
	</div>
	<div id="mainContent">

		<div class="assets-container">
			<div class="assets toc">
				<div class="assets-header">Contents</div>
				<ul>
					<li><span><a href="#crc32">CRC32</a></span></li>
					<li><span><a href="#cookies">Cookies</a></span></li>
					<li><span><a href="#datetime">DateTime</a></span></li>
					<li><span><a href="#jDom">DOM</a></span></li>
					<li><span><a href="#math">Math</a></span></li>
					<li><span><a href="#multiHash">MultiHash</a></span></li>
					<li><span><a href="#stopWatch">Stopwatch</a></span></li>
					<li><span><a href="#jString">String</a></span></li>
				</ul>
			</div>
	
			<div class="assets">
				<div class="assets-header">API Links</div>
				<div class="assets-body">
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Util" target="api">Jaxer.Util</a></div>
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Util.CRC32" target="api">Jaxer.Util.CRC32</a></div>
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Util.Cookies" target="api">Jaxer.Util.Cookies</a></div>
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Util.DateTime" target="api">Jaxer.Util.DateTime</a></div>
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Util.DOM" target="api">Jaxer.Util.DOM</a></div>
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Util.MultiHash" target="api">Jaxer.Util.MultiHash</a></div>
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Util.Stopwatch" target="api">Jaxer.Util.Stopwatch</a></div>
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Util.String" target="api">Jaxer.Util.String</a></div>
				</div>
			</div>
		</div>
		
		<!-- Discuss the properties and methods of the Jaxer.Util object. Provide usage examples. -->
		<p>Jaxer includes a range of utility functionality grouped into this umbrella namespace, many of which are used by other parts of the framework.</p>
		
		<h2>Jaxer.Util</h2>
		
		<ul>
			<li><strong>clone:</strong> clones an object (actually any argument) and returns the clone. If obj is of type "object", then the clone is created from the same constructor (but without any arguments). For a deep clone, every (enumerable) property is itself cloned; otherwise, every (enumerable) property is simply copied (by value or reference).</li>
			<li><strong>protectedClone:</strong> creates a new object whose private prototype (the one used when looking up property values) will be set to the object passed into this function. This allows for the resulting clone object to add new properties and to redefine property values without affecting the master object. If access to the master object is required, the cloned object contains a <code>$parent</code> property which can be used for that purpose.</li>
			<li><strong>concatArrays:</strong> returns an array whose elements consist of the elements of all the arrays or array-like objects passed in as arguments, with null or undefined elements skipped</li>
			<li><strong>extend:</strong> extends an object by (shallow) cloning it and then copying all (enumerable) properties from the extensions object to the new cloned object</li>
			<li><strong>filter:</strong> creates a new array containing the elements of an existing array which meet a function-based criteria</li>
			<li><strong>filterInPlace:</strong> removes items from an existing array which do not meet a function-based criteria</li>
			<li><strong>findInGlobalContext:</strong> finds a named object within the global context ('window', in the browser) to which the second argument is ultimately parented.</li>
			<li><strong>foreach:</strong> applies a function to each element in an array</li>
			<li><strong>getPropertyNames:</strong> get all, or filtered subset of, the property names from an object as a hash or object</li>
			<li><strong>hasProperties:</strong> determine if the object contains all properties in a list of names</li>
			<li><strong>isDate:</strong> tests whether the given object is a Date object (even if it's from a different global context)</li>
			<li><strong>isEmptyObject:</strong> tests whether the given object is devoid of any (enumerable) properties</li>
			<li><strong>isNativeFunction:</strong> tests whether the given function is native</li>
			<li><strong>isNativeFunctionSource:</strong> tests whether the given string is the source of a native function</li>
			<li><strong>map:</strong> creates a new array by applying the result of a function to each of the items in the array</li>
			<li><strong>mapInPlace:</strong> replaces each member of an array with the result of a function passed each item as a parameter</li>
			<li><strong>safeSetValues:</strong> if a property on <em>values</em> is not defined on the target object, add that property and associated value to the target object; the target object's [proto] chain is included in the search for each property.</li>
			<li><strong>sleep:</strong> pauses processing for a specified number of milliseconds</li>
		</ul>
	
		<h2 id="crc32">CRC32</h2>
		
		<p>
			CRC32 stands for 32-bit <a href="http://en.wikipedia.org/wiki/Cyclic_redundancy_check">Cyclic redundancy check</a>, generally used as a checksum 
			to detect accidental alteration of data during transmission or storage. There are two ways to get a CRC32 from Jaxer: <code>getCRC</code> builds 
			the checksum from an array of bytes and <code>getStringCRC</code> builds the checksum from a string.
		</p>
	
		<h3 id="exCRC32">Using CRC32</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: js;">
var fl, fc, fca, csarr, csstr;
fl = new Jaxer.File('/path/to/your/file.ext');
fl.open();
fc = fl.read();
csstr = Jaxer.Utils.CRC.getStringCRC(fc);
fca = fl.readAllLines();
csarr = Jaxer.Utils.CRC.getCRC

Jaxer.Log.info('CRC32 for ' + fl.path + ' as a string is ' + csstr);
Jaxer.Log.info('CRC32 for ' + fl.path + ' as an array of bytes is ' + csarr);
				</textarea>
			</div>
		</div>
		
		<h2 id="cookies">Cookies</h2>
		<p>Cookies are a mainstay of web applications, used to overcome the lack of continuous state presented by browser-based interactions.</p>
		<ul>
			<li><strong>getAll:</strong> Generates an object containing all cookie keys and values from the current request</li>
			<li><strong>get:</strong> Retrieves the value of a specified cookie key</li>
			<li><strong>set:</strong> Store a named value into your cookie</li>
			<li><strong>parseSetCookieHeaders:</strong> Parse the HTTP response's Set-Cookie string into an array</li>
		</ul>
		
		<h3 id="exCookie">Using Cookies</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: js;">var rhdrs, phdrs, ckie, ckies;

rhdrs = Jaxer.Response.headers["Set-Cookie"];
phdrs = Jaxer.Utils.Cookies.parseSetCookieHeaders(rhdrs).toString();
ckie1 = Jaxer.Utils.Cookies.get('cookie_name');
Jaxer.Utils.Cookies.set('cookie_name', ckie1 + ' new value');
ckie2 = Jaxer.Utils.Cookies.get('cookie_name');
ckies = Jaxer.Utils.Cookies.getAll().toString();

Jaxer.Log.info('Parsed Set Cookie header is ' + phdrs);
Jaxer.Log.info('Original cookie_name value is ' + ckie1);
Jaxer.Log.info('Changed cookie_name value is ' + ckie2);
Jaxer.Log.info('Flattened value of all cookies is ' + ckies);
				</textarea>
			</div>
		</div>
		
		<h2 id="DateTime">DateTime</h2>
	
		<p>A single convenience method, <code>toPaddedString</code>, converts a Date object into a nicely formatted string.</p>
		
		<pre name="code" class="brush: js;">
var now = new Date;
var pdd = Jaxer.Utils.DateTime.toPaddedString(now);
alert(pdd);</pre>
		
		<h2 id="jDom">DOM</h2>
	
		<p>Functions and other objects that extend JavaScript's DOM capabilities, primarily for adding, inserting and replacing script blocks to the document. All the methods (except hashToAttributesString) 
		take a string or array of strings as the contents parameter, which is embedded into the newly created element's innerHTML, and return the new &lt;script>.</p>
		
		<ul>
			<li><strong>hashToAttributesString:</strong> Converts an object's properties into an attribute string you can use to create a DOM element</li>
			<li><strong>createScript:</strong> Makes a new script element based on the attributes passed in</li>
			<li><strong>replaceWithScript:</strong> Replace a specified element in the DOM with a new script element</li>
			<li><strong>insertScriptAtBeginning:</strong> Creates a new script element and adds it as the first child of a specified element in the DOM</li>
			<li><strong>insertScriptBefore:</strong> Creates a new script element and adds it before a specified element in the DOM</li>
			<li><strong>insertScriptAfter:</strong> Creates a new script element and adds it as the next sibling of the specified element in the DOM</li>
			<li><strong>insertScriptAtEnd:</strong> Creates a new script element and adds it as the last child of a specified element in the DOM</li>
			<li><strong>insertHTML:</strong> Injects HTML content into the DOM, this is the HTML equivalent of Jaxer.load and the programmatic equivalent of the &lt;jaxer:include> element but with a bit more control.</li>
		</ul>
		
		<h3 id="exDOM">Manipulating the DOM</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: js;">// Store the contents of the script block to a variable
var tscript = 'var ts1, ts2;' +
'function testing(v1) {' +
'' +;
'  return v1*v1;' +;
'}' +;
'' +;
'ts1 = testing(22);' +;
'ts2 = testing(33);' +;
'' +;
'alert(\'First test gets \' + ts1);' +;
'alert(\'Second test gets \' + ts2);' +;
'';

var hd = document.getElementById('head');
var atts = new Array();
atts['nm1'] = 11;
atts['nm2'] = 44;
atts['nm3'] = 55;
var as = Jaxer.Util.DOM.hashToAttributesString(atts);
var nscript0 = Jaxer.Util.DOM.createScript(document, tscript, as);
var nscript1 = Jaxer.Util.DOM.insertScriptAtBeginning(document, tscript, hd);
var nscript2 = Jaxer.Util.DOM.insertScriptAtEnd(document, tscript, hd);
var nscript3 = Jaxer.Util.DOM.insertScriptBefore(document, tscript, nscript2);
var nscript4 = Jaxer.Util.DOM.insertScriptAfter(document, tscript, nscript2);
				</textarea>
			</div>
		</div>
		
		<h2 id="math">Math</h2>
	
		<p>
			Two simple integer-related functions: <code>forceInteger</code> converts a string or number into an integer (numbers are rounded down) and 
			<code>isInteger</code> checks if a variable stores an integer value.
		</p>
	
		<pre name="code" class="brush: js;">
var num1 = 23.333;
var str1 = '23.333';
var isAnInt = Jaxer.Utils.Math.isInteger(num1) ? 'is':'is not';

var msg1 = 'num1 starts as ' + num1 + ' and ' + isAnInt + ' an integer, num1 as an integer is ' + 
				Jaxer.Utils.Math.forceInteger(num1);
var msg2 = 'str1 starts as ' + str1 + ' and as an integer is ' + 
				Jaxer.Utils.Math.forceInteger(str1);</pre>
		
		<h2 id="multiHash">MultiHash</h2>
	
		<p>Create and manipulate a hash whose members are primitive values or Arrays of primitive values</p>
		
		<ul>
			<li><strong>add:</strong> Adds the name-value pair to the MultiHash, creating the name if it doesn't already exist and converting it to an array if it currently exists as a primitive</li>
			<li><strong>remove:</strong> Removes the name-value pair from the MultiHash, removing the name entirely if the existing value is a primitive, stepping an array of values to a primitive if only one value remains or simply removing the specified value from an array of values when multiple values remain</li>
			<li><strong>diff:</strong> Returns the difference between two MultiHash objects</li>
		</ul>
	
		<h3 id="exMultiHash">Using a MultiHash</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: js;">var mh1, mh2, df;
mh1 = new Array();
Jaxer.Util.MultiHash.add(mh1, 'nm1', [1,2,3,4,5]);
Jaxer.Util.MultiHash.add(mh1, 'nm2', [21,22,23,24,25]);
Jaxer.Util.MultiHash.add(mh1, 'nm3', 31,32,33,34,35]);
mh2 = new Array();
Jaxer.Util.MultiHash.add(mh2, 'nm1', [1,2,3,4,5]);
Jaxer.Util.MultiHash.add(mh2, 'nm2', [211,122,213,124,251]);
Jaxer.Util.MultiHash.add(mh2, 'nm3', [331,332,333,334,353]);
Jaxer.Util.MultiHash.add(mh2, 'nm4', [431,342,334,434,354]);
Jaxer.Util.MultiHash.remove(mh2, 'nm3', [354]);

df = Jaxer.Util.MultiHash.diff(mh1,mh2);

Jaxer.Log.info('Diff of mh1 and mh2 is ' + df.toString());
				</textarea>
			</div>
		</div>
		
		<h2 id="stopwatch">Stopwatch</h2>
		
		<p>Sophisticated timing functionality:</p>
		<ul>
			<li><strong>clocks:</strong> A hash of named clocks</li>
			<li><strong>laps:</strong> A hash of named laps</li>
			<li><strong>timings:</strong> A hash containing all current timers</li>
			<li><strong>flush:</strong> Gets the current contents of all timers; writes them to the log or passes them to a callback you specify</li>
			<li><strong>lap:</strong> Adds an element to the laps array for a given timer, the element's value is the difference of the current time and the start of the lap</li>
			<li><strong>lapcount:</strong> The number of laps for a given timer</li>
			<li><strong>reset:</strong> Destroys all current timers and clocks</li>
			<li><strong>start:</strong> Starts a clock</li>
			<li><strong>stop:</strong> Stops a clock and adds the elapsed time to the timer with the same label&mdash;the elapsed time is independent of any lap calls which may have been made since starting the clock</li>
		</ul>
		
		<h3 id="exStopwatch">Profiling Your Code</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: js;">
var clock, workLap1, workLap2;
Jaxer.Util.Stopwatch.start('masterClock');
// run your setup code
// start the lap timer
Jaxer.Util.Stopwatch.lap('workTimer');
// run the code to be profiled
// mark the first 'lap'
Jaxer.Util.Stopwatch.lap('workTimer');
// capture the first lap time
workLap1 = Jaxer.Util.Stopwatch.laps('workTimer');
// run the code to be profiled again
// mark the second 'lap'
Jaxer.Util.Stopwatch.lap('workTimer');
// capture the second lap time
workLap1 = Jaxer.Util.Stopwatch.laps('workTimer');
// run the teardown code
Jaxer.Util.Stopwatch.stop('masterClock');
// get the overall task time
clock = Jaxer.Util.Stopwatch.clocks.masterClock;

// capture the results
var msg = 'Overall Task Time: ' + clock + '\nFirst Lap: ' + 
		workLap1 + '\nSecond Lap: ' + workLap2;

// write the data to the log too
Jaxer.Util.Stopwatch.flush();

// log the results
Jaxer.Log.info(msg);
				</textarea>
			</div>
		</div>
		
		<h2 id="jString">String</h2>
	
		<p>Extensions to JavaScript's string capabilities.</p>
	
		<p><strong>Important Note:</strong> Neither escapeForJS nor escapeForSQL provide complete protection for your application against XSS, XSRF and other malicious input attacks!</p>
		<ul>
			<li><strong>grep:</strong> Regular expression matching against a string</li>
			<li><strong>escapeForJS:</strong> Prepares a string for use in a JavaScript statement</li>
			<li><strong>escapeForSQL:</strong> Prepares a string for use in a SQL statement</li>
			<li><strong>singleQuote:</strong> Wraps a string inside single quotes</li>
			<li><strong>startsWith:</strong> Determines if a string starts with another string, with or without cases matching</li>
			<li><strong>endsWith:</strong> Determines if a string ends with another string, with or without cases matching</li>
			<li><strong>trim:</strong> Removes a character or characters of your choice (whitespace by default) from the beginning, end or both of a string</li>
			<li><strong>upperCaseToCamelCase:</strong> </li>
		</ul>
		
		<h3 id="exString">Grep a File for Links</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: js;">
var p = '/tmp/foo.dat'; 
var f = new Jaxer.File(p); 
var lines = f.readAllLines();
var links = new Array;
var reg = '^(http|https):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/ix';
links = Jaxer.String.grep(lines, reg);
Jaxer.Util.foreach(links, function(curItem, index) {
	Jaxer.Log.info('Link ' + index + ': ' + curItem);
});
				</textarea>
			</div>
		</div>

	</div> <!-- end #mainContent -->
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