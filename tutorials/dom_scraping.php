<?php $sidebar = true; ?>
<?php $active = 'tutorials';?>
<?php $title = "'DOM Scraping' and Cross Domain Mashups with Aptana Jaxer"; ?>
<?php include('../includes/header.php'); ?>
  One of the things I was working on recently is 'screen scraping' some data from several sites and presenting them in a single page. Of course Jaxer seems like the perfect tool for this as I can go fetch the data server-side, pull it all together, then present the final page to the browser. It was so exciting to see this work that I thought I'd make this post to share my experience with you!
  <p></p>

  We’re working now on adding support in Jaxer for being able to programmatically create 'window' objects, filling them with content from a remote URL, having that content actually execute, then being able to go into that window object and pull DOM elements out. <i>(Update: see <a href="http://www.aptana.com/node/429">the Jaxer 1.0 version</a>.)</i>
  <p></p>

  Unfortunately for me, that work isn't ready yet, so I wanted to see if there was some workaround I could use until it was ready. Well, after some research and trial and error, a workaround was found. The only catch with this code is that if there is any JavaScript on the page(s) you are fetching, that code will not execute, that’s coming soon.
  <p></p>

  Note that all of the code below can be contained within a single script tag:
  <p></p>

  <textarea name="code" class="html" cols='150' rows='15'>
  &lt;script runat='server'>...all code here...&lt;/script>
  </textarea>
  <p></p>

  So, the first thing I wanted to do is make it really easy to fetch a remote document and grab out some content. I didn't want to use string matching or regular expressions of any kind, I wanted to use my trusted 'getElementById' to fetch named elements directly. (Of course I ran into sites that don't name their elements, but fortunately many use named classes, so I had to fetch them that way, but I get ahead of myself.)
  <p></p>

  Let's get started. The following two lines is all that is required to fetch a remote URL synchronously on the server and then pull out a named element:
  <p></p>

  <textarea name="code" class="javascript" cols='150' rows='15'>
  var doc = getDocumentFromURL("http://www.news.com/");
  var item = doc.getElementById("mostPopStories");
  </textarea>
  <p></p>

  Now that we have 'item' as the element we were trying to fetch, we just have to add that element to our current blank page. I created a simple function called 'addElementToPage(title, element)' that takes care of this for me. Here's the next line:
  <p></p>

  <textarea name="code" class="javascript" cols='150' rows='15'>
  addElementToPage("News.com Popular Stories", item);
  </textarea>
  <p></p>

  That's it. Now I do that 2 more times to fetch content from 2 other sites.
  <p></p>

  <textarea name="code" class="javascript" cols='150' rows='15'>
  doc = getDocumentFromURL("http://ajaxian.com");
  item = getElementsByClass('activitystream', doc)[0];
  addElementToPage("Ajaxian Activity Stream", item);

  doc = getDocumentFromURL("http://www.washingtonpost.com/");
  item = getElementsByClass("top-box-in", doc)[0];
  addElementToPage("Washington Post", item);
  </textarea>
  <p></p>

  You'll notice that I didn't use getElementById() as those elements were not named, but fortunately they had class names associated with them. I found a convenient function called getElementsByClass() that I used in this case. Since it returns an array of elements, I use the [0] index to retrieve the first item in the list, which in my case, is probably the only item.
  <p></p>

  Believe it or not, that's basically it. At this point, your three 'DOM fragments' have been fetched and inserted into your new document. Here's the result:
  <p></p>

  <img src="<?php print WEB_ROOT; ?>/images/DOMScraping.png">
  <p></p>

  Following are the convenience functions that help make the magic happen. The first function is addElementToPage(). It very simply just creates an H2 tag and sets the title and a DIV tag which contains the contents of the fetched element:
  <p></p>

  <textarea name="code" class="javascript" cols='150' rows='15'>
  function addElementToPage(title, element)
  {
      var el = document.importNode(element, true);

      var h2 = document.createElement('h2');
      h2.innerHTML = title;
      document.body.appendChild(h2);

      var div = document.createElement('div');
      div.appendChild(el);

      document.body.appendChild(div);
  }
  </textarea>
  <p></p>

  This next function, getDocumentFromURL(), is the one that does most of the work. (I found some good info on the subject of HTML to DOM here: http://jszen.blogspot.com/2007/02/how-to-parse-html-strings-into-dom.html) It first goes and retrieves the remote page. Then it creates a 'document fragment' from the contents of the fetched site. That fragment is then added to a dynamically created IFRAME. Finally, the Document object from the IFRAME is fetched and returned. In short, we can pass in a URL, get the string value, place it into an IFRAME, then pull out the resulting Document object so that we can work on it.
  <p></p>

  <textarea name="code" class="javascript" cols='150' rows='15'>
  function getDocumentFromURL(url)
  {
      // Get remote site
      var string = Jaxer.Web.get(url);

      // Parse the string into a doc fragment
      var range = document.createRange();
      range.selectNode(document.body);
      var parsedHTML = range.createContextualFragment(string);

      // Create the iframe that will contain the site we loaded
      var iframe = document.createElement("iframe");
      document.body.appendChild(iframe);

      // Import from doc fragment into the iframe
      var el = iframe.contentDocument.importNode(parsedHTML, true);
      iframe.contentDocument.body.appendChild(el);

      var newDoc = iframe.contentDocument;

      // delete the iframe as we don't need it any more
      document.body.removeChild(iframe);

      return newDoc;
  }
  </textarea>
  <p></p>

  This final function was found at http://www.dustindiaz.com/getelementsbyclass/ and walks a node looking for an element with a specific class name. It was used in the case where elements don't have ID's, so a class name is used instead.
  <p></p>

  <textarea name="code" class="javascript" cols='150' rows='15'>
              function getElementsByClass(searchClass, node, tag)
  			{
                  var classElements = new Array();
                  if (node == null) 
                      node = document;
                  if (tag == null) 
                      tag = '*';
                  var els = node.getElementsByTagName(tag);
                  var elsLen = els.length;
                  var pattern = new RegExp("(^|\\\\s)" + searchClass + "(\\\\s|$)");
                  for (i = 0, j = 0; i < elsLen; i++) {
                      if (pattern.test(els[i].className)) {
                          classElements[j] = els[i];
                          j++;
                      }
                  }
                  return classElements;
              }
  </textarea>
  <p></p>

  What's exciting about this sample is that it is relatively simple, uses the full power of server-side JavaScript and more importantly, Jaxer's cool server-side DOM capability to enable real 'DOM scraping'. Once window object creation is finished in Jaxer (real soon now), then you'll be able to fetch remote pages, execute their integrated code, then proceed to fetch out items from the resulting DOM.
  <p></p>
  <i><b>Update: see <a href="http://www.aptana.com/node/429">the Jaxer 1.0 version</a>.</b></i>

  
<?php include('../includes/footer.php'); ?>
