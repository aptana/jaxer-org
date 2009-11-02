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
		<h1>Web Services</h1>
	</div>
	<div>

	<div class="assets-container">
		<div class="assets toc ">
			<div class="assets-header">Contents</div>
			<ul>
				<li><span><a href="#calling">Calling a REST API and processing a JSON return</a></span></li>
				<li><span><a href="#publishing">Publishing a REST API</a></span></li>
				<li><span><a href="#soapAPI">SOAP API</a></span></li>
			</ul>
		</div>

		<div class="assets">
			<div class="assets-header">Resource and API Links</div>
			<div class="assets-body">
                <div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Web" target="api">Jaxer.Web</a></div>
                <div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Serialization" target="api">Jaxer.Serialization</a></div>
                <div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Request" target="api">Jaxer.Request</a></div>
                <div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Response" target="api">Jaxer.Response</a></div>
                <div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Config" target="api">Jaxer.Config</a></div>
			</div>
		</div>
	</div>
		
	<h2 id="calling">Calling a REST API and processing a JSON return</h2>

	<p>Consuming web services is a great way to add functionality and content to a web application but doing so inside JavaScript typically requires writing a server-side proxy for your client JavaScript code to avoid cross-domain restrictions and with Jaxer, you do the same thing except there's no need to write the server side proxy as that's taken care of for you.</p>

	<p>This first example is a bare-bones spell checker. The example picks up some text from the user, sends it off for checking and displays the corrected text. The heavy lifting of checking the spelling is offloaded to a web service which offers a <a href="http://en.wikipedia.org/wiki/Representational_State_Transfer">REST API</a>; the only thing we need to do to call it is to construct an URL and execute a HTTP GET call to the web service.</p>

	<p>This web service returns JSON.  We'll convert this to a JavaScript object on the server and let Jaxer shoot it out to the client as the return from the proxy function.</p>

	<h3 id="spell-checker">A RESTful Spell Checker</h3>
	<div class="example">
		<div class="body">
			<textarea name="code" class="brush: html; class-name: narrowSH;"><html>
    <head>
        <title>Spell Checker</title>
		<script runat='server-proxy'>
			function getSuggestions(text) {
				var url = 'http://search.yahooapis.com/WebSearchService/V1/spellingSuggestion/';
				url += '<your-yahoo-api-key>';
				url += '&output=json';
				url += '&query=' + text;
				var suggestion = Jaxer.Web.get(url);
				return Jaxer.Serialization.fromJSONString(suggestion);
			}
		</script>
		<script>
			function spellCheck() {
				var inputEl = document.getElementById('to-check');	
				var suggestion = getSuggestions(inputEl.value);
				if(suggestion.ResultSet && suggestion.ResultSet.Result) {
					inputEl.value = suggestion.ResultSet.Result;
				} else {
					alert('No suggestions...');
				}
			}
		</script>
    </head>
    <body>
		<input id='to-check' type='text' value='Spell Checker'>
		<br/>
		<button onclick='spellCheck()'>Check Spelling</button>
	</body>
</html></textarea>
		</div>
	</div>

	<p>The client side script, spellCheck, reads the text from an input and calls the server-side function getSuggestions, then updates the text in the input if appropriate.</p>

	<p>On the server side, we add the text to be checked onto the end of an URL and then call <code>Jaxer.Web.get</code> to fetch from the web service. The JSON returned from the web service is for the query string is 'Spell Checker':</p>

	<pre name="code" class="brush: js; toolbar: false;">{"ResultSet":{"Result":"Spell Checker"}}</pre>

	<p>This gets converted into a JavaScript object with a utility method call <code>Jaxer.Serialization.fromJSONString</code>. The server-side function returns this to the client via the normal Jaxer proxy mechanism.</p>

	<p><em>Note:</em> To run this example, you'll need a Yahoo API key.</p>
	
	<h3>Jaxer.Web.get and HTTP 500 errors</h3>
	
	<p>
		Should you encounter this error result, the cause is a disconnect between mod_jaxer and JaxerManager. The entire request was sent by mod_jaxer and the problem occured in 
		getting the response from JaxerManager, from something like the connection between the two being closed. This should rarely or ever happen in most Jaxer setups.
	</p>

	<h2 id="publishing">Publishing a REST API</h2>
	
	<p>The other half of the equation is making your own services available through a REST API, which is also supported by Jaxer.</p>
	
	<p>Here's a synopsis of all it takes to create a service (RESTful or otherwise):</p>

	<ul>
		<li>Create a folder called "jaxer-service"</li>
		<li>Put your code file in that folder (or anywhere under that folder if you need more hierarchy)</li>
	</ul>

	<p>
		Your code is automatically loaded and executed whenever someone calls it. To offer a service through Jaxer your code must be in a special type of location where 
		the web server and Jaxer will recognize it as a service. By default that means a directory in the docroot where the path contains either <em>jaxer-service</em> 
		or <em>jaxer-rpc</em>. This also prevents direct serving of your JavaScript file to a browser.
	</p>
	
	<h3>Inside the Service</h3>
	
	<p>
		The service itself is just a JavaScript file that gets loaded (from disk or from cache) and executed every time the service is called. Your code has full access 
		to the information in the request, and needs to set the response to return the value promised by your API. The following example provides a very simple example 
		which shows all the data available to your code.
	</p>

	<h3 id="testJS">Service's JavaScript</h3>
	<div class="example">
		<div class="body">
			<pre name="code" class="brush: js;">// pretty-print an object's properties:
function printObj(obj, indent)
{
	indent = indent || '';
	var lines = [];
	for (var p in obj)
	{
		if (typeof obj[p] == "function") continue;
		lines.push(indent + p + ": " + obj[p]);
	}
	return lines.join('\n');
}

// in this sample, the HTTP status code to return is passed in the request:
var statusCodeToReturn = Jaxer.request.data.statusCode;

// set the response contents to reflect the request information available:
Jaxer.response.setContents(
	printObj({
		'action (method)': '\n\t' + Jaxer.request.action, 
		'resource': '\n\t' + Jaxer.request.parsedUrl.pathParts.slice(1).join("/"),
		'request headers': '\n' + printObj(Jaxer.request.headers, '\t'),
		'request body': '\n\t' + Jaxer.request.body,
		'data': '\n' + printObj(Jaxer.request.data, '\t'), 
		'request': '\n' + printObj(Jaxer.request, '\t'),
		'environment variables': '\n' + printObj(Jaxer.request.env, '\t')
	}), 
	statusCodeToReturn);

// the Content-Type can be anything appropriate for your service:
Jaxer.response.headers['Content-Type'] = 'text/plain';</pre>
		</div>
	</div>

	<h3>Calling Your Service</h3>
	
	<p>
		Calling a Jaxer service is as simple as loading the URL of the file: if the file for your service is in the <code>&lt;docroot>/jaxer-service</code> folder in a 
		file named <code>myService.js</code>, hitting <code>http://example.com/jaxer-service/myService.js</code> is the client code need do. Parameters are easy to 
		handle in the form of a query string and, alternatively, you may set up your service to use extra path parts as the way to pass in the necessary information. 
	</p>
	
	<ul>
		<li>Query string: <code>http://example.com/jaxer-service/myService.js?id=123&name=yourName</code></li>
		<li>Path parts: <code>http://example.com/jaxer-service/myService.js/123/yourName</code> or <code>http://example.com/jaxer-service/myService.js/id/123/name/yourName</code></li>
	</ul>

	<p>The query string can be retrieved by calling <code>Jaxer.request.parsedUrl.query</code>, the path via <code>Jaxer.request.parsedUrl.pathParts</code>.</p>
	
	<h3>How It Works</h3>
	
	<p>
		Jaxer ships with two default dispatchers, both in the extensions folder of the framework: serviceDispatcher.js and rpcDispatcher.js. The former is what we'll use 
		here implicitly: it handles requests of the form <code>/path/to/jaxer-service/path/to/myService/any/additional/data</code> that have <em>jaxer-service</em> in the path, and 
		tries to find the corresponding file on disk. The dispatcher looks in your document root for <code>/path.js</code>, then for <code>/path/to.js</code>, then for 
		<code>/path/to/jaxer-service.js</code> and so on. In our case it will find <code>/path/to/jaxer-service/path/to/myService.js</code> (or rather 
		<code>/jaxer-service/myService.js</code>) and load it.  
	</p>
		
	<p>
		How is the dispatcher invoked? That's set in your configApps.js file or any of the configApps-like peer files. By default Jaxer ships with services.configApps.js; 
		that adds an app entry to <code>Jaxer.Config.apps</code>, which knows to look for <em>jaxer-service</em> in the path and call 
		<code>Jaxer.Extensions.ServiceDispatcher.findFile(...)</code>. If it succeeds the app entry has a <em>handler</em> property that returns the path to the file, 
		which Jaxer then loads and executes. This is all handled by the default configuration as long as you follow the folder naming conventions and understanding how the 
		mechanism works, you can modify this to suit differing needs should the default not be sufficient.
	</p>

	<h3>The Result</h3>

	<p style="text-align: center;"><a href="http://www.aptana.com/system/files/REST_UI_0.png" class="highslide" onclick="return hs.expand(this);">
		<img src="http://www.aptana.com/system/files/REST_UI_0.png" class="medium-inline" alt="REST API results" title="Click to enlarge" />
	</a></p>
		
	<h3 id="testHTML">Calling the Test Service</h3>
	<div class="example">
		<div class="body">
			<textarea name="code" class="brush: html;"><html>
    <head>
        <title>RESTful Jaxer</title>
    </head>
    <body>
        <h1>RESTful Jaxer</h1>
		<script runat="server">//Nothing - just embeds the Jaxer client framework</script>
		<h3>What to send:</h3>
		<form>
			<table>
				<tr><td>url:</td><td><input type="text" id="url" value="/jaxer-service/tests" size=30></td></tr>
				<tr><td>query params:</td><td><input type="text" id="queryParams" value="a=12&b=banana" size=30></td></tr>
				<tr><td>HTTP action (method):</td>
					<td>
						<input type="radio" name="httpAction" value="GET" checked="true">GET 
						<input type="radio" name="httpAction" value="POST">POST 
						<input type="radio" name="httpAction" value="PUT">PUT 
						<input type="radio" name="httpAction" value="DELETE">DELETE 
						<input type="radio" name="httpAction" value="HEAD">HEAD 
						<input type="radio" name="httpAction" value="OPTIONS">OPTIONS 
					</td>
				</tr>
				<tr><td>content type:</td><td><input type="text" id="contentType" value="application/x-www-form-urlencoded" size=30></td></tr>
				<tr><td>request body:</td><td><input type="text" id="body" value="c=42&d=plum" size=30></td></tr>
				<tr><td>return code:</td><td><input type="text" id="statusCode" value="200" size=5> (the response code Jaxer should return)</td></tr>
				<tr><td colspan=2><input type="button" value="send" onclick="send()"></td></tr>
			</table>
		</form>
		<hr>
		<h3>Response:</h3>
		<pre id="result" style="margin: 0pt"></pre>
		<script>
			function $(id) { return document.getElementById(id); }
			function $$(id) { return $(id).value; }
			function getRadio(form, name)
			{
				var elts = form.elements[name];
				for (var i=0; i<elts.length; i++)
				{
					if (elts[i].checked) return elts[i].value;
				}
			}
			function send()
			{
				var result = Jaxer.XHR.send($$('body'), 
				{
					url: $$('url') + '?' + $$('queryParams') + "&statusCode=" + $$('statusCode'),
					method: getRadio(document.forms[0], 'httpAction'),
					cacheBuster: false,
					async: false,
					contentType: $$('contentType')
				});
				$('result').innerHTML = result;
			}
		</script>
    </body>
</html></textarea>
		</div>
	</div>
		
<div style="display: none;">
	<h2 id="wsdlProxy">WSDL Proxy</h2>
	<h3>[Waiting – We may strike this]</h3>
</div>

	<h2 id="soapAPI">SOAP API</h2>
	<h3 style="display: none;">[This should work – doesn't currently – Waiting on fix]</h3>
	
	<p><a href="en.wikipedia.org/wiki/SOAP">SOAP</a> is a widely-used <a href="http://www.w3.org/TR/soap/">Web Service protocol</a> that has native support in Jaxer. The protocol is based on XML messages typically transported over HTTP.  The Jaxer API for SOAP lets you work with JavaScript 
	objects, binds them to XML messages and makes the making the network call to the server. You'll need a few pieces of information from the service's WSDL to use the API.</p>
	
	<p>For instance, let's say your looking for a house and want to pick up a bargain in the foreclosure market.  There happens to be a SOAP based Web Service available with you in mind.  The follow code calls the Web Service and displays a list of houses in foreclosure for a selected zip code:</p>

	<h3 id="soapAPI">Checking for Foreclosures</h3>
	<div class="example">
		<div class="body">
			<textarea name="code" class="brush: html;"><html>
<head>
<script runat="server-proxy">
/* 
SOAP service description:
http://xmethods.net/ve2/ViewListing.po?key=uuid:926B4EB0-1F40-4D43-3EF2-8DF5500F8E42
WSDL:  http://www.foreclosuredatabank.com/soapserver.php?wsdl
*/

function doSoap(){
    
    var soapCall = new SOAPCall();
    soapCall.transportURI = "http://www.foreclosuredatabank.com/soapserver.php";
    
    var param1 = new SOAPParameter();
    param1.value = "20148";
    param1.name = "zipcode";
    var myParamArray = [param1];
    
    soapCall.encode(0, "latestProperties", "urn:server.latestProperties", 0, null, myParamArray.length, myParamArray);
    var cheapHouses = soapCall.invoke();
    
    var soapReturn = '';
    if (cheapHouses.fault) {
        alert("An error occured: " + returnObject.fault.faultString);
    }
    else {
      var response = cheapHouses.getParameters(false, {});
      soapReturn = response[0].value
    }
    return soapReturn;
}
</script>
<script>
	function getProperties() {
		document.getElementById('results').innerHTML = doSoap();
	} 
</script>
</head>
<body onload="getProperties();">
<div id='results'></div>
</body>
</html></textarea>
		</div>
	</div>

	<p>The Mozilla SOAP API in Jaxer has <a href="http://lxr.mozilla.org/mozilla/source/extensions/webservices/docs/Soap_Scripts_in_Mozilla.html">detailed documentation</a> so we'll just cover the parts need in this example. The first step is to create a new SOAPCall object and set the transportURI, which is in the service section of the WSDL:</p>

	<div class="example" id="soapCall">
	<div class="body">
	<textarea name="code" class="brush: xml;">
<service name="server.latestProperties">
	<port name="server.latestPropertiesPort" binding="tns:server.latestPropertiesBinding">
		<soap:address location="http://www.foreclosuredatabank.com/soapserver.php"/>
	</port>
</service></textarea>
	</div>

	<p>Next, create the call parameters found in the message section of the WSDL:</p>

	<div class="example" id="latestPropertiesRequest">
	<div class="body">
	<textarea name="code" class="brush: xml;">
<message name="latestPropertiesRequest">
	<part name="zipcode" type="xsd:string"/>
</message></textarea>
	</div>

	<p>The parameters are instances of SOAPParameter.  We'll choose a zip code to search for houses:</p>
	<div class="example" id="SOAPParameter">
	<div class="body">
		<pre name="code" class="brush: js;">
var param1 = new SOAPParameter();
param1.value = "20148";
param1.name = "zipcode";</pre>
	</div>

	<p>The last bit of setup is the call to SOAPCall.encode():</p>
	<pre name="code" class="brush: js; toolbar: false;">soapCall.encode(0, "latestProperties", "urn:server.latestProperties", 0, null, myParamArray.length, myParamArray);</pre>
	<p>The operation name (latestProperties) and input namespaceURI (urn:server.latestProperties) are taken from the binding portion of the WSDL:</p>

	<div class="example" id="soapbinding">
	<div class="body">
		<textarea name="code" class="brush: xml;">
<binding name="server.latestPropertiesBinding" type="tns:server.latestPropertiesPortType">
<soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http"/>
	<operation name="latestProperties">
		<soap:operation soapAction="urn:server.latestProperties#latestProperties" style="rpc"/>
		<input>
			<soap:body use="encoded" namespace="urn:server.latestProperties" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
		</input>
		<output>
			<soap:body use="encoded" namespace="urn:server.latestProperties" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
		</output>
	</operation>
</binding></textarea>
	</div>

	<p>With the parameters set, the actual call is made with SOAPCall.invoke() and the return is read via getParameters() to fetch the list of SOAPResponses. The returned list of properties is the one and only response we expect.</p>
	<p>The SOAP response happens to be HTML formatted text, so it gets passed back by the proxy function for the client to display.</p>

	<h2>XML-RPC</h2>

	<p><a href="http://www.xmlrpc.com/">XML-RPC</a> is a very simple protocol for web services.  If you like lightweight, this is the Web Service protocol for you. Jaxer doesn't have specific support for XML-RPC, but it does have excellent tools that make short work of executing XML-RPC.</p>
	
	<p>The following example shows the typical strategy for a calling a Web Service from Jaxer – do the heavy lifting on the server side where you can us the excellent cross-domain calling capabilities as well the dependable Mozilla JavaScript API. </p>


	<h3 id="xml-rpc">Get and display the current time from a time server</h3>
	<div class="example">
		<div class="body">
			<textarea name="code" class="brush: js;"><html>
	<head>
	<script runat="server-proxy">
		function doGetTime() {
			var callParams = 
			<methodCall>
				<methodName>currentTime.getCurrentTime</methodName>
				<params/>
			</methodCall>;
			
			var options = {
				as: 'text',
				async: false,
				contentType: 'text/xml',
				method: 'POST',
				url: 'http://time.xmlrpc.com/RPC2'
			};

			var response = Jaxer.XHR.send(callParams.toXMLString(), options);
			var theTime = 
			/<dateTime.iso8601>([^<]+)<\/dateTime.iso8601>/
			.exec(response)[1];
			return theTime;
		}
	</script>
	<script>
		function getTime() {
			document.getElementById('the-time').innerHTML = doGetTime();
		}
	</script>
	</head>
	<body onload="getTime();">
		<div id='the-time'></div>
	</body>
</html></textarea>
		</div>
	</div>
	
	<p>The work is done here by the function executed in on Jaxer server, doGetTime().  The first thing to notice is that the XML-RPC data is assembled using an E4X XML literal.</p>

	<p>To make the XML-RPC call, we must execute an HTTP Post with a content type of 'text/xml'. 
	The preferred function to use when POST-ing is Jaxer.Web.post(), but this works only for a content type of 'application/x-www-form-urlencoded' so we need to drop down to a lower-level API. 
	Prepare the required options (content type and return type of text or xml) in an options object and call the Web Service with Jaxer.XHR.send().</p>

	<p>In this case, the response is collected as text; the returned string is fairly small:</p>

	<div class="example" id="xmlrpcPost">
		<div class="body">
			<textarea name="code" class="brush: xml;">
<?xml version="1.0"?>
<methodResponse>
  <params>
    <param>
      <value><dateTime.iso8601>20080603T14:26:25</dateTime.iso8601></value>
    </param>
  </params>
</methodResponse></textarea>
		</div>
	</div>

	<h2>Microformats</h2>

	<h3 style="display: none;">[I 've had no luck getting micro formats to work – the following example should work yet doesn't – any suggestions?]</h3>

	<p><a href="http://microformats.org/">Microformats</a> aren't necessarily Web Services, they're more of a Semantic Web construct, but are frequently used in a similar fashion as a remote data store.</p>

	<p>Jaxer has the capability to detect and parse these microformats:</p>
	<ul>
		<li><a href="http://microformats.org/wiki/adr">adr</a></li>
		<li><a href="http://microformats.org/wiki/geo">geo</a></li>
		<li><a href="http://microformats.org/wiki/hcard">hCard</a></li>
		<li><a href="http://microformats.org/wiki/hcalendar">hCalendar</a></li>
		<li><a href="http://microformats.org/wiki/rel-tag">rel-tag</a></li>
	</ul><br>

	<h3 id="microformat1">Scanning a document and collecting the microfomats</h3>
	<div class="example">
		<div class="body">
			<textarea name="code" class="brush: html;">
<html>
    <head>
        <script runat='server'>
			function goMicro() {
				Jaxer.Includer.load("resource:///modules/Microformats.js"); 
								
				var hFound = Microformats.get('hCard', document.getElementById('b'));
				alert('hFound: ' + hFound.length);

				var aFound = Microformats.get('adr', document.getElementById('b'));
				alert('aFound: ' + aFound.length);
			}
        </script>
    </head>
    <body onserverload="goMicro()" id="b">
    	<!-- Contact information from http://technorati.com/about/contact.html -->
        <div class="vcard">
        <div class="fn org" style="margin:0;padding:0">
            Technorati
        </div>
        <div class="adr" style="margin:0;padding:0">
            <div class="street-address" style="margin:0;padding:0">
                665 3rd Street, Suite 207
            </div>
            <span class="locality">San Francisco</span>, <span class="region">CA</span>
            <span class="postal-code">94107</span>
        </div>
    </body>
</html></textarea>
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