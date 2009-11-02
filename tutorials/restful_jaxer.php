<?php $sidebar = true; ?>
<?php $active = 'tutorials';?>
<?php $title = 'RESTful Jaxer'; ?>
<?php include('../includes/header.php'); ?>
  <p>Jaxer, the Ajax server, can do a lot more than "just" serve pages and handle callbacks (function calls from your browser back to Jaxer). With Jaxer 1.0, you can easily create a variety of web services: RESTful, RPC-based, and almost anything else you can imagine. Hooks are already in place for a generic web service and for automatic RPC-based services. Here I'll demonstrate a simple RESTful service based on the generic web service hook.<!--break--></p>

  <p>You'll need <a href="http://www.aptana.com/jaxer/download">the latest Jaxer</a> (currently release 1.0) and the local_jaxer/conf folder contents that ship with it. If you've upgraded from a previous version of Jaxer or Aptana Studio (which has Jaxer built in) take a look at the Guide page for instructions on <a href="http://www.aptana.com/jaxer/guide/develop_basics.php#jaxerConf">updating your local_jaxer configuration to 1.0</a>.</p>

  <p><div style="border: 1px solid #33cc33; padding:4px;">Here's a synopsis of all it takes to create a service (RESTful or otherwise):
  <ol>
  <li>create a folder called "jaxer-service"</li>
  <li>put your code file in that folder (or anywhere under that folder if you need more hierarchy)</li>
  </ol>
  Your code is automatically loaded and executed whenever someone calls it. So now let's see how that works.
  </div></p>

  <p>To offer a service through Jaxer, rather than a page, you'll need to put your code where the web server + Jaxer will recognize it as a service. By default, that means somewhere in your docroot where the path to it will contain "jaxer-service" or "jaxer-rpc". In a Studio project, create a folder with one of those names, and put your code in that folder or in a subfolder. For this example, I've created a very simple folder structure, one folder with two files:<br>
  <img src="<?php print WEB_ROOT; ?>/images/REST_folder_structure_1.png"><br>
  This does two things: identifies the JavaScript code to Jaxer as a service, and prevents direct serving of your JavaScript file to a browser.
  </p>

  <p>The service itself is just a JavaScript file that gets loaded (from disk or from cache) and executed every time the service is called. Your code has full access to the information in the request, and needs to set the response as you wish. Here I created a service that simply shows you much of the data available:
  <div style="font-weight: bold">tests.js:</b></div>
  <textarea name="code" class="javascript">// pretty-print an object's properties:
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
  Jaxer.response.headers['Content-Type'] = 'text/plain';</textarea></p>

  <p>The service itself is done. (Of course you can now build an entire services layer, loading other files with Jaxer.load(...).) Now how do we call it? If e.g. the jaxer-service folder is directly under your docroot, just send a request to <b>/jaxer-service/tests</b> (and you can append whatever extra path or query items to this path). </p>

  <p>How does this work? Jaxer ships with two default dispatchers, both in the extensions folder of the framework: serviceDispatcher.js and rpcDispatcher.js. The first one is what we'll use here (implicitly): it handles requests of the form /path/to/jaxer-service/path/to/myservice/any/additional/data that have jaxer-service in their path, and tries to find the corresponding file on disk. So it looks in your document root for /path.js, then for /path/to.js, then for /path/to/jaxer-service.js, and so on. In our case it will find /path/to/jaxer-service/path/to/myservice.js (or rather /jaxer-service/tests.js) and load it. How does the dispatcher get invoked? That's set in your configApps.js file, or in one of your other configApps-like peer files. By default Jaxer ships with services.configApps.js and that adds an app entry to Jaxer.Config.apps which knows to look for "jaxer-service" in the path and call Jaxer.Extensions.ServiceDispatcher.findFile(...); if it succeeds, the app entry has a "handler" property that returns the path to the file, which Jaxer then loads and executes. Note that this is all handled for you by the default configuration: all you have to do is follow the folder naming conventions. Of course, you can now modify this to suit your needs.</p>

  <p>To test this service, I created a simple front-end page called index.html. The source is shown below. Here's what it looks like, including the output from the service:
  <br>
  <img src="<?php print WEB_ROOT; ?>/images/REST_UI_0.png"><br>
  You can change the method, see which ones support having a body and which do not, etc. Note that the calls are made using your browser's XHR (XMLHttpRequest) capabilities, wrapped in this simple example by the Jaxer client-side framework for convenience. </p>

  <p>Note: if you're trying the above in Aptana Studio, it'll work out of the box. If you're trying it with the standalone Jaxer, remove the leading "/" in the URL of the service: use "jaxer-service/tests" instead. That's because Studio needs to do some "magic" remapping between the effective document root and the filesystem.</p>

  <p>Here's the source for the front-end page:
  <div style="font-weight: bold">index.html:</b></div>
  <textarea name="code" class="html"><html>
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
  		<tr><td>return code:</td><td><input type="text" id="statusCode" value="200" size=5> (the response code Jaxer should return)
  			</td>
  		</tr>
  		</table>
  		</form>
  		<tr><td colspan=2><input type="button" value="send" onclick="send()"></td></tr>
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
  </html></textarea></p>


  <p>To summarize, all we needed to do to create the service was to create a JavaScript file somewhere in the document root where its path would contain "jaxer-service". The file will be loaded and executed whenever a request is received for that path (without the ".js" extension). You can add other special paths by adding them to your web server configuration &mdash; see the *.httpd.conf files that ship by default with the standalone Jaxer, and to configApps.js and its peers. </p>

  <p>In a future blog I'll also show an example of an RPC (Remote Procedure Call) service. Jaxer can also easily consume RESTful services server-side, using e.g. Jaxer.Web.get(...), Jaxer.Web.post(...), Jaxer.Web.put(...), Jaxer.Web.del(...), and Jaxer.Web.head(...) &mdash; note that the DELETE action is not invoked via delete(...) because "delete" is a reserved identifier in JavaScript. </p>
<?php include('../includes/footer.php'); ?>
