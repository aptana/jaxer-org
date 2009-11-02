<?php $sidebar = true; ?>
<?php $active = 'tutorials';?>
<?php $title = 'DOM Scraping Part 2: Now with Jaxer 1.0'; ?>
<?php include('../includes/header.php'); ?>
  <p>We're finalizing our Jaxer 1.0 release, and I thought I'd go back to Paul's <a href="http://www.aptana.com/node/339">'DOM Scraping' example</a> and see what Jaxer 1.0 has to offer. </p>

  <p>A main new feature is Jaxer.Sandbox, which lets you open new server-side sandboxed 'windows' and load pages into them. You can GET a page from any url, or even POST some content and load back the response. You can control whether JavaScript is executed in the window, whether it honors meta refreshes, whether it loads synchronously or asynchronously, etc. And, most important, the window and its contents have no access to Jaxer and its APIs nor to your app &mdash; but your app has full access to it.</p>

  <p>There's a lot of other new goodness in Jaxer 1.0, as well as the official released version of the Mozilla engine found in Firefox 3. So for example getElementsByClassName is natively implemented (see <a href="http://ejohn.org/blog/getelementsbyclassname-speed-comparison/">John Resig's speed comparison</a>), in addition to the other Mozilla features such as built-in <a href="http://developer.mozilla.org/en/docs/XPath">XPath</a> functionality and a very robust <a href="http://developer.mozilla.org/en/docs/Gecko_DOM_Reference">DOM feature set</a> &mdash; just what you need for some serious 'screen scraping', mashups, and content repurposing.</p>

  <p>Let's see it in action. First, let's grab the same three pages Paul used and extract some choice content elements into our page before sending it to the browser. We'll reuse the same Jaxer.Sandbox instance three times, each time loading a different page into it and grabbing some content by id or by classname. The page is basically a single script block:
  <textarea name="code" class="html">
  <html>
  	<head>
  		<title>DOM Scraping 1.0</title>
  	</head>
  	<body>
  		<script runat="server">
  			...all code here...
  		</script>
  	</body>
  </html>
  </textarea>
  containing the following server-side JavaScript:
  <textarea name="code" class="javascript">
  var sandbox = new Jaxer.Sandbox();
  var item, contents;

  sandbox.open("http://www.news.com/");
  contents = sandbox.document.getElementById("mostPopStories");
  addToPage("News.com Popular Stories", contents);

  sandbox.open("http://www.washingtonpost.com/");
  contents = sandbox.document.getElementsByClassName("top-box-in");
  addToPage("Washington Post", contents);

  sandbox.open("http://ajaxian.com");
  contents = sandbox.document.getElementsByClassName("activitystream");
  addToPage("Ajaxian", contents);
  </textarea>
  and a single helper function that adds the given contents from the sandbox to the current page:
  <textarea name="code" class="javascript">
  function addToPage(title, contents)
  {
  	var div = document.createElement('div');

  	var h2 = document.createElement('h2');
  	h2.innerHTML = title;
  	div.appendChild(h2);

  	if (!(contents instanceof HTMLElement))  contents  = contents[0];
  	div.appendChild(document.importNode(contents, true));

  	document.body.appendChild(div);
  }
  </textarea>
  </p>

  <p>Here's the resulting page:</p>

  <p><img src="<?php print WEB_ROOT; ?>/images/DOM+Scraping+part+2+-+1.png"></p>

  <p>That's not too bad, but the timestamps on the News.com section don't look good, and there are a bunch of JavaScript errors on the browser from left-over JavaScript content that was in the original WashingtonPost.com page. We can quickly clean that up with another, tiny DOM helper function that removes any DOM NodeList you pass to it. And while we're at it we'll also remove the reference to the client-side Jaxer framework since we won't be needing it here. The script block becomes:
  <textarea name="code" class="javascript">
  var sandbox = new Jaxer.Sandbox();
  var item, contents, container;

  sandbox.open("http://www.news.com/");
  contents = sandbox.document.getElementById("mostPopStories");
  container = addToPage("News.com Popular Stories", contents);
  // Remove the timestamps on each item
  removeNodeList(container.getElementsByClassName("datestamp"));

  sandbox.open("http://www.washingtonpost.com/");
  contents = sandbox.document.getElementsByClassName("top-box-in");
  container = addToPage("Washington Post", contents);
  // Remove the script tags so they don't appear on the client
  removeNodeList(container.getElementsByTagName("script"));

  sandbox.open("http://ajaxian.com");
  contents = sandbox.document.getElementsByClassName("activitystream");
  addToPage("Ajaxian", contents);

  function addToPage(title, contents)
  {
  	var div = document.createElement('div');

  	var h2 = document.createElement('h2');
  	h2.innerHTML = title;
  	div.appendChild(h2);

  	if (!(contents instanceof HTMLElement)) contents = contents[0];
  	div.appendChild(document.importNode(contents, true));

  	document.body.appendChild(div);

  	return div; // return the container so it can be further manipulated
  }

  function removeNodeList(nodeList)
  {
  	while (nodeList.length > 0) nodeList[0].parentNode.removeChild(nodeList[0]);
  }

  // We won't need Jaxer client-side:
  Jaxer.response.setClientFramework(null);
  </textarea>
  </p>

  <p>Now that's much better:</p>

  <p><img src="<?php print WEB_ROOT; ?>/images/DOM+Scraping+part+2+-+2.png"></p>

  <p>But if you run this example yourself, you'll see it's slow: each of the original servers is a bit slow to load its entire page, and you have to load all three server-side before your page is ready to be sent to the browser. We could load all three in parallel, using the Jaxer.Sandbox's async capabilities and the Jaxer.Thread.waitFor() method to wait for them to load. But even then the user would see nothing in the browser until the slowest one was done loading server-side. So let's load them asynchronously client-side, by creating a server-side function called getFragment that loads a url and returns some of its contents, and setting getFragment.proxy = true so we can call it asynchronously from the client. The page now has two script blocks, one that runs on the browser and one on the server:
  <textarea name="code" class="html">
  <html>
  	<head>
  		<title>DOM Scraping 1.0</title>
  	</head>
  	<body>
  		<script>
  			...all client-side code here...
  		</script>
  		<script runat="server">
  			...all server-side code here...
  		</script>
  	</body>
  </html>
  </textarea>
  The client-side code is:
  <textarea name="code" class="javascript">
  // On callback, append the results to this page
  function appendHTML(html)
  {
  	document.body.innerHTML += html;
  }
  // onload is used to make sure getFragment is defined before it's called:
  window.onload = function() 
  {
  	Jaxer.Callback.TIMEOUT = 30 * 1000;

  	getFragment.async(appendHTML, "Ajaxian Activity Stream", "http://ajaxian.com", true, "activitystream");

  	getFragment.async(appendHTML, "News.com Popular Stories", "http://www.news.com/", false, "mostPopStories", "datestamp");

  	getFragment.async(appendHTML, "Washington Post", "http://www.washingtonpost.com/", true, "top-box-in");
  }
  </textarea>
  and the server-side code is:
  <textarea name="code" class="javascript">
  // Gets a fragment of the remote page's HTML, after some cleanup
  function getFragment(title, url, isClassName, identifier, classesToRemove)
  {
  	var sandbox = new Jaxer.Sandbox(url);
  	var contents = sandbox.document[isClassName ? 'getElementsByClassName' : 'getElementById'](identifier);
  	var container = addToPage(title, contents);
  	if (classesToRemove)
  	{
  		if (typeof classesToRemove == "string") classesToRemove = [classesToRemove];
  		classesToRemove.forEach(function(className)
  		{
  			removeNodeList(container.getElementsByClassName(className));
  		});
  	}
  	return container.innerHTML;
  }
  getFragment.proxy = true;

  function addToPage(title, contents)
  {
  	var div = document.createElement('div');

  	var h2 = document.createElement('h2');
  	h2.innerHTML = title;
  	div.appendChild(h2);

  	if (!(contents instanceof HTMLElement)) contents = contents[0];
  	div.appendChild(document.importNode(contents, true));

  	document.body.appendChild(div);

  	return div;
  }

  function removeNodeList(nodeList)
  {
  	while (nodeList.length > 0) nodeList[0].parentNode.removeChild(nodeList[0]);
  }
  </textarea>
  The result looks the same as the previous screenshot, but the order in which the sections are displayed may vary, depending on which remote server responds first.</p>
<?php include('../includes/footer.php'); ?>
