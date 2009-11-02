<?php $title = 'Benchmarks';?>
<?php include('includes/header.php'); ?>
<script language="javascript" src="<?php print WEB_ROOT;?>guide/lib/sh/scripts/shBrushRuby.js" type="text/javascript"></script>
<script language="javascript" src="<?php print WEB_ROOT;?>guide/lib/sh/scripts/shBrushPhp.js" type="text/javascript"></script>

<div class="content">
  <p>
    As we get ready to release Jaxer 1.0, we put together a few simple benchmarks to see how it performs relative to a couple of other web platforms: PHP and Rails. <img src="<?php print WEB_ROOT; ?>images/jaxer_benchmarks0_individuals_2.png" width="540" height="300" style="float:right; padding-left: 30px; padding: 10px;"> We wanted to answer a simple question: <b>how does Jaxer, with its server-side DOM and JavaScript, perform relative to these other popular alternatives?</b>
  </p>
  <p>
    This was not designed to be an all-encompassing shoot-out, or a detailed study of everything you might want to do in a web app. Instead, we took a few common tasks — making database requests, using JSON, etc. — and implemented them as you might expect in the three platforms. We made enough DB requests and JSON calls and so on to give us a reasonable number of milliseconds to measure. But we also wanted to make the repetitions representative of what you might find on somewhat intensive real-world page, so we're not making a million DB requests, just a hundred, for instance. And we included one benchmark of serving an almost-static page: the "almost" was to make sure we were measuring the time the platform took to really read through the page, in case it had dynamic content in it. (Otherwise, if the page were truly static, you could always arrange for the web server to serve it without involving the platform.)<br clear="left">
  </p>
  <p>
    The first chart shows how long each platform took to perform the task. For the "static" page, we measured the total time taken to serve the request, as measured by the external web client making the request (over the local network). For the other benchmarks, we measured the time taken to perform the specific task itself, excluding the overhead of setting up and tearing down the benchmark, <img src="<?php print WEB_ROOT; ?>images/jaxer_benchmarks0_combined_2.png" height="400" width="365" style="float:right; padding-left: 30px; padding: 10px"> serving the test page, etc. That allowed us to combine these tests and assess what an entire page would take to serve, if it had static content <em>and</em> database requests <em>and</em> some JSON manipulation and so on. Of course your mileage may vary: your app may have less DB requests, more JSON, less IO, whatever. But remember the question we're trying to answer: how does Jaxer perform relative to other accepted platforms for several common tasks? We believe these benchmarks answer that: <b>Jaxer performance is very much comparable to PHP and Rails</b>.
  </p>
  <p>
    Of course, <a href="http://arstechnica.com/news.ars/post/20080822-firefox-to-get-massive-javascript-performance-boost.html">significant boosts to JavaScript performance</a> are around the corner for Firefox (see Brendan's <a href="http://weblogs.mozillazine.org/roadmap/archives/2008/09/tracemonkey_update.html">TraceMonkey article</a>). Since Jaxer is built on the same engine as Firefox, those same improvements will soon be in Jaxer too... With the imminent and massive improvements to JavaScript performance coming to the Mozilla engine.
  </p>
  <p>
    Now let's take a closer look at these tests below. All were run multiple times on a Macbook Pro (2.5 GHz Intel Core 2 Duo) with 4 GB of RAM.
  </p>
  <hr>
  <br>
  <h3>
    The "Static" Page
  </h3>
  <p>
    We grabbed a copy of one of our blog pages (<a href="http://www.aptana.com/node/467">Aptana Acquires Pydev</a>) and saved it locally. We turned it into a .php file with a smidgen of PHP in it; we threw in a short &lt;script runat="server"&gt;...&lt;script&gt; for Jaxer; and created a simple view out of it for Rails. Jaxer was the slowest to serve this page, and not surprisingly: it needs to parse and create the entire DOM of the page to allow server-side manipulation. Still, under 20 ms is pretty good, and is usually dwarfed by weightier tasks such as DB queries.
  </p>
  <hr>
  <br>
  <h3>
    Loops
  </h3>
  <p>
    To measure raw iteration speed we created some very simple loops with and without a bit of variable manipulation. This time Jaxer was far faster than PHP or Rails: at least for simple, common for loops, Mozilla's SpiderMonkey JavaScript engine is no slouch.
  </p>
  <table cellpadding="0" cellspacing="0">
    <tr>
      <td class="bmplatform">
        PHP
      </td>
      <td class="bmplatform">
        Jaxer
      </td>
      <td class="bmplatform">
        Rails
      </td>
    </tr>
    <tr>
      <td valign="top">
        <textarea name="code" class="php">
for($a = 0; $a &lt; 10000; ++$a)
    {
      // do nothing
    }

    for($a = 0; $a &lt; 10000; ++$a)
    {
      $b = $a;
    }

    for($a = 0; $a &lt; 10000; ++$a)
    {
      $b = $a;
      for($c = 0; $c &lt; 10; ++$c)
      {
        $d = $c;
      }
    }

    $a = 0;
    while($a &lt; 10000)
    {
      ++$a;
    }
 
</textarea>
      </td>
      <td valign="top">
        <textarea name="code" class="javascript">
for(var a = 0; a &lt; 10000; ++a)
    {
      // do nothing
    }

    for(var a = 0; a &lt; 10000; ++a)
    {
      var b = a;
    }

    for(var a = 0; a &lt; 10000; ++a)
    {
      var b = a;
      for(var c = 0; c &lt; 10; ++c)
      {
        var d = c;
      }
    }

    var a = 0;
    while(a &lt; 10000)
    {
      ++a;
    }
 
</textarea>
      </td>
      <td valign="top">
        <textarea name="code" class="rails">
10000.times do |a|
          # do nothing        
        end
        10000.times do |a|
          b = a
        end
        10000.times do |a|
          b = a
          10.times do |c|
            d = c
          end
        end
        a = 0
        while a &lt; 10000
          a += 1
        end
 
</textarea>
      </td>
    </tr>
  </table>
  <hr>
  <br>
  <h3>
    JSON
  </h3>
  <p>
    Using JavaScript literals as a serialization format predates Ajax, and has become an incredibly prevalent cross-platform data format. We created a simple JSON structure and a more complex one, and measured a variety of encoding and decoding tasks. All three platforms now have native JSON support, so all three performed very well in this benchmark.
  </p>
  <div class="bmplatform">
    PHP
  </div>
  <textarea name="code" class="php">
 $json_string = '{"c": "c", "a": "a", "d": {"three": "3", "one": "1", "two": "2"}, "b": [1, 2, 3, 4, 5, 6, 7, 8, 9]}';
    $json_data = array(
      'a' =&gt; 'a',
      'b' =&gt; array(1,2,3,4,5,6,7,8,9),
      'c' =&gt; 'c',
      'd' =&gt; array(
        'one' =&gt; '1',
        'two' =&gt; '2',
        'three' =&gt; '3'
      )
    );
    $complex_json_string = '[{"id": "0001","type": "donut","name": "Cake","ppu": 0.55,"batters":{"batter":[{ "id": "1001", "type": "Regular" },{ "id": "1002", "type": "Chocolate" },{ "id": "1003", "type": "Blueberry" },{ "id": "1004", "type": "Devil\'s Food" }]},"topping":[{ "id": "5001", "type": "None" },{ "id": "5002", "type": "Glazed" },{ "id": "5005", "type": "Sugar" },{ "id": "5007", "type": "Powdered Sugar" },{ "id": "5006", "type": "Chocolate with Sprinkles" },{ "id": "5003", "type": "Chocolate" },{ "id": "5004", "type": "Maple" }]},{"id": "0002","type": "donut","name": "Raised","ppu": 0.55,"batters":{"batter":[{ "id": "1001", "type": "Regular" }]},"topping":[{ "id": "5001", "type": "None" },{ "id": "5002", "type": "Glazed" },{ "id": "5005", "type": "Sugar" },{ "id": "5003", "type": "Chocolate" },{ "id": "5004", "type": "Maple" }]},{"id": "0003","type": "donut","name": "Old Fashioned","ppu": 0.55,"batters":{"batter":[{ "id": "1001", "type": "Regular" },{ "id": "1002", "type": "Chocolate" }]},"topping":[{ "id": "5001", "type": "None" },{ "id": "5002", "type": "Glazed" },{ "id": "5003", "type": "Chocolate" },{ "id": "5004", "type": "Maple" }]}]';

    for($i = 0; $i &lt; 10; ++$i)
    {
      $decoded_a = json_decode($json_string,true);
      $decoded_b = json_decode($complex_json_string,true);
      json_encode($json_data);
      json_encode($decoded_b);
    }

    $output = '';
    for($i = 0; $i &lt; 10; ++$i)
    {
      $decoded = json_decode($complex_json_string,true);
      foreach($decoded as $x =&gt; $item)
      {
        if($item['id'] == '0001')
        {
          $decoded[$x]['type'] = 'fancy donut';
          break;
        }
      }
      $output .= json_encode($decoded);
    }
</textarea>
  <div class="bmplatform">
    Jaxer
  </div>
  <textarea name="code" class="javascript">

    var json_string = '{"c": "c", "a": "a", "d": {"three": "3", "one": "1", "two": "2"}, "b": [1, 2, 3, 4, 5, 6, 7, 8, 9]}';
    var json_data = {
      a: 'a',
      b: [1,2,3,4,5,6,7,8,9],
      c: 'c',
      d: {
        one: '1',
        two: '2',
        three: '3'
      }
    };
    var complex_json_string = '[{"id": "0001","type": "donut","name": "Cake","ppu": 0.55,"batters":{"batter":[{ "id": "1001", "type": "Regular" },{ "id": "1002", "type": "Chocolate" },{ "id": "1003", "type": "Blueberry" },{ "id": "1004", "type": "Devil\'s Food" }]},"topping":[{ "id": "5001", "type": "None" },{ "id": "5002", "type": "Glazed" },{ "id": "5005", "type": "Sugar" },{ "id": "5007", "type": "Powdered Sugar" },{ "id": "5006", "type": "Chocolate with Sprinkles" },{ "id": "5003", "type": "Chocolate" },{ "id": "5004", "type": "Maple" }]},{"id": "0002","type": "donut","name": "Raised","ppu": 0.55,"batters":{"batter":[{ "id": "1001", "type": "Regular" }]},"topping":[{ "id": "5001", "type": "None" },{ "id": "5002", "type": "Glazed" },{ "id": "5005", "type": "Sugar" },{ "id": "5003", "type": "Chocolate" },{ "id": "5004", "type": "Maple" }]},{"id": "0003","type": "donut","name": "Old Fashioned","ppu": 0.55,"batters":{"batter":[{ "id": "1001", "type": "Regular" },{ "id": "1002", "type": "Chocolate" }]},"topping":[{ "id": "5001", "type": "None" },{ "id": "5002", "type": "Glazed" },{ "id": "5003", "type": "Chocolate" },{ "id": "5004", "type": "Maple" }]}]';

    for(var i = 0; i &lt; 10; ++i)
    {
      var decoded_a = Jaxer.Serialization.fromJSONString(json_string);
      var decoded_b = Jaxer.Serialization.fromJSONString(complex_json_string);
      Jaxer.Serialization.toJSONString(decoded_a);
      Jaxer.Serialization.toJSONString(decoded_b);
    }

    var output = '';
    for(var i = 0; i &lt; 10; ++i)
    {
      var decoded = Jaxer.Serialization.fromJSONString(complex_json_string);
      for(var x = 0; x &lt; decoded.length; ++x)
      {
        if(decoded[x]['id'] == '0001')
        {
          decoded[x]['type'] = 'fancy donut';
        }
      }
      output += Jaxer.Serialization.toJSONString(decoded);
    }
</textarea>
  <div class="bmplatform">
    Rails
  </div>
  <textarea name="code" class="rails">
     json_string = '{"c": "c", "a": "a", "d": {"three": "3", "one": "1", "two": "2"}, "b": [1, 2, 3, 4, 5, 6, 7, 8, 9]}'
        json_data = {
          :a =&gt; 'a',
          :b =&gt; [1,2,3,4,5,6,7,8,9],
          :c =&gt; 'c',
          :d =&gt; {
            :one =&gt; '1',
            :two =&gt; '2',
            :three =&gt; '3'
          }
        }
        complex_json_string = '[{"id": "0001","type": "donut","name": "Cake","ppu": 0.55,"batters":{"batter":[{ "id": "1001", "type": "Regular" },{ "id": "1002", "type": "Chocolate" },{ "id": "1003", "type": "Blueberry" },{ "id": "1004", "type": "Devil\'s Food" }]},"topping":[{ "id": "5001", "type": "None" },{ "id": "5002", "type": "Glazed" },{ "id": "5005", "type": "Sugar" },{ "id": "5007", "type": "Powdered Sugar" },{ "id": "5006", "type": "Chocolate with Sprinkles" },{ "id": "5003", "type": "Chocolate" },{ "id": "5004", "type": "Maple" }]},{"id": "0002","type": "donut","name": "Raised","ppu": 0.55,"batters":{"batter":[{ "id": "1001", "type": "Regular" }]},"topping":[{ "id": "5001", "type": "None" },{ "id": "5002", "type": "Glazed" },{ "id": "5005", "type": "Sugar" },{ "id": "5003", "type": "Chocolate" },{ "id": "5004", "type": "Maple" }]},{"id": "0003","type": "donut","name": "Old Fashioned","ppu": 0.55,"batters":{"batter":[{ "id": "1001", "type": "Regular" },{ "id": "1002", "type": "Chocolate" }]},"topping":[{ "id": "5001", "type": "None" },{ "id": "5002", "type": "Glazed" },{ "id": "5003", "type": "Chocolate" },{ "id": "5004", "type": "Maple" }]}]';

        10.times do
          decoded_a = JSON.parse(json_string)
          decoded_b = JSON.parse(complex_json_string)
          decoded_a.to_json
          decoded_b.to_json
        end

        10.times do
          decoded = JSON.parse(complex_json_string)
          decoded.each_with_index do |item,x|
            if(item['id'] == '0001')
              decoded[x]['type'] = 'fancy donut'
            end
          end
          output += decoded.to_json
        end
</textarea>
  <hr>
  <br>
  <h3>
    IO
  </h3>
  <p>
    To measure typical file I/O performance, we created a 1 KB string and wrote it to a file, then appended a 100 KB string, and read the whole thing back, and repeated it a few times. Jaxer came out somewhat slower than the other platforms: some of this may be due to the extra conversions between JavaScript's native utf8 encoding and the filesystem, but we'll need to go back and dig deeper.
  </p>
  <div class="bmplatform">
    PHP
  </div>
  <textarea name="code" class="php">
 //write 1kb
    for($i = 0; $i &lt; 5; ++$i)
    {
      $handle = fopen($path.'/test_'.$i.'.txt','w');
      fwrite($handle,$chars);
      fclose($handle);
    }

    //append 100kb
    for($i = 0; $i &lt; 5; ++$i)
    {
      $handle = fopen($path.'/test_'.$i.'.txt','a');
      fwrite($handle,$chars_repeated);
      fclose($handle);

    }

    //read them all back multiple times
    for($i = 0; $i &lt; 5; ++$i)
    {
      $contents = file_get_contents($path.'/test_'.$i.'.txt');
    }
</textarea>
  <div class="bmplatform">
    Jaxer
  </div>
  <textarea name="code" class="javascript">
//write 1kb
    for (var i = 0; i &lt; 5; ++i)
    {
      Jaxer.File.write(path + '/test_' + i + '.txt', chars);
    }

    //append 100kb
    for (var i = 0; i &lt; 5; ++i)
    {
      Jaxer.File.append(path + '/test_' + i + '.txt', chars_repeated);
    }

    //read them all back multiple times
    for (var i = 0; i &lt; 5; ++i)
    {
      var contents = path + Jaxer.File.read(path + '/test_' + i + '.txt');
    }
</textarea>
  <div class="bmplatform">
    Rails
  </div>
  <textarea name="code" class="rails">
     #write 1kb
        5.times do |i|
          handle = File.open(path + '/test_' + i.to_s + '.txt','w')
          handle.write chars
          handle.close
        end

        #write 100kb
        5.times do |i|
          handle = File.open(path + '/test_' + i.to_s + '.txt','a')
          handle.write chars_repeated
          handle.close
        end

        5.times do |i|
          contents = File.read(path + '/test_' + i.to_s + '.txt')
        end
</textarea>
  <hr>
  <br>
  <h3>
    DB
  </h3>
  <p>
    To measure database performance, we tried to level the playing field as much as possible by coding straight SQL statements. We also emphasized SELECTs over DML queries because most apps read much more than they write. Jaxer came out somewhere between PHP and Rails, with half its time spent wrapping the raw MySQL data in easier-to-manipulate JavaScript structures. Of course in real-world apps you're likely to use prepared statements, and very often (esp. in Rails, and soon in Jaxer too) an Object-Relational Mapping such as ActiveRecord to abstract out the SQL calls.
  </p>
  <div class="bmplatform">
    PHP
  </div>
  <textarea name="code" class="php">
 for($i = 0; $i &lt; 10; ++$i)
    {
      mysql_query('INSERT INTO aptana_benchmark_test (a,b,c) VALUES("'.$chars.'","'.$chars.'","'.$chars_repeated.'")',$connection);
    }

    for($i = 0; $i &lt; 100; ++$i)
    {
      mysql_query('SELECT * FROM aptana_benchmark_test WHERE id = '.($i + 1),$connection);
    }

    for($i = 0; $i &lt; 10; ++$i)
    {
      mysql_query('UPDATE aptana_benchmark_test SET a="'.$chars2.'",b ="'.$chars2.'",c="'.$chars2_repeated.'" WHERE id = '.($i + 1),$connection);
    }

    for($i = 0; $i &lt; 10; ++$i)
    {
      mysql_query('DELETE FROM aptana_benchmark_test WHERE id = '.($i + 1),$connection);
    }
</textarea>
  <div class="bmplatform">
    Jaxer
  </div>
  <textarea name="code" class="javascript">
for (var i=0; i&lt;10; i++)
    {
      conn.execute('INSERT INTO aptana_benchmark_test (a,b,c) VALUES("' + chars + '","' + chars + '","' + chars_repeated + '")');
    }

    for (var i=0; i&lt;100; ++i)
    {
      conn.execute('SELECT * FROM aptana_benchmark_test WHERE id = ' + (i + 1));
    }

    for (var i = 0; i &lt; 10; ++i)
    {
      conn.execute('UPDATE aptana_benchmark_test SET a="' + chars2 + '",b ="' + chars2 + '",c="' + chars2_repeated + '" WHERE id = ' + (i + 1));

    }

    for (var i = 0; i &lt; 10; ++i)
    {
      conn.execute('DELETE FROM aptana_benchmark_test WHERE id = ' + (i + 1));
    }
</textarea>
  <div class="bmplatform">
    Rails
  </div>
  <textarea name="code" class="rails">
     10.times do |i|
          ActiveRecord::Base.connection.execute('INSERT INTO aptana_benchmark_test (a,b,c) VALUES("' + chars + '","' + chars + '","' + chars_repeated + '")')
        end

        100.times do |i|
          ActiveRecord::Base.connection.execute('SELECT * FROM aptana_benchmark_test WHERE id = ' + (i + 1).to_s);
        end

        10.times do |i|
          ActiveRecord::Base.connection.execute('UPDATE aptana_benchmark_test SET a="' + chars2 + '",b ="' + chars2 + '",c="' + chars2_repeated + '" WHERE id = ' + (i + 1).to_s);
        end

        10.times do |i|
          ActiveRecord::Base.connection.execute('DELETE FROM aptana_benchmark_test WHERE id = ' + (i + 1).to_s);
        end
</textarea>
  <hr>
  <br>
  <h3>
    Scrape
  </h3>
  <p>
    Finally, we included some page scraping tests. Many web apps mash up other content, repurpose it, or extract data from remote sources. In our case we read in the same blog page as in the static example, and navigated it in a variety of ways. PHP was fastest here, with Jaxer slightly behind and Rails a distant third. Looking for a moment beyond performance, Jaxer is the only platform that would allow scraping of true Ajax web pages, for example pages that created their content "client-side" via Ajax calls.
  </p>
  <div class="bmplatform">
    PHP
  </div>
  <textarea name="code" class="php">
 //find search input box
    for($i = 0; $i &lt; 5; ++$i)
    {
      $contents = file_get_contents('./static.html');
      $dom = new DOMDocument();
      @$dom-&gt;loadHTML($contents);

      //find by xpath
      $xpath = new DOMXPath($dom);
      $inputs = $xpath-&gt;evaluate("/html/body//form//input");
      $node = false;
      foreach($inputs as $input)
      {
        if($input-&gt;getAttribute('id') == 'edit-search-block-form-keys')
        {
          $node = $input;
        }
      }
      $divs = $xpath-&gt;evaluate('/html/div[@id="gbar"]');

      //find by DOM
      $inputs = $dom-&gt;getElementsByTagName('input');
      foreach($inputs as $input)
      {
        if($input-&gt;getAttribute('id') == 'edit-search-block-form-keys')
        {
          $node = $input;
        }
      }
      $bar = $dom-&gt;getElementById('edit-search-block-form-keys');
    }
</textarea>
  <div class="bmplatform">
    Jaxer
  </div>
  <textarea name="code" class="javascript">
var sandbox = new Jaxer.Sandbox(null,null,{
      allowJavaScript: false,
      allowMetaRedirects: false,
      allowSubFrames: false
    });

    for(var i = 0; i &lt; 5; ++i)
    {
      sandbox.setContents(Jaxer.File.read(Jaxer.Dir.combine(Jaxer.request.currentFolder,'static.html')));

      //find by xpath
      var inputs = sandbox.document.evaluate("/html/body//form//input",sandbox.document,null,XPathResult.ORDERED_NODE_SNAPSHOT_TYPE,null);
      var search_input = null;

      for(var x = 0; x &lt; inputs.snapshotLength; ++x)
      {
        if(inputs.snapshotItem(x).id == 'edit-search-block-form-keys')
        {
          search_input = inputs.snapshotItem(x);
        }
      }
      var divs = sandbox.document.evaluate('/html/div[@id="edit-search-block-form-keys"]',sandbox.document,null,XPathResult.ORDERED_NODE_SNAPSHOT_TYPE,null);

      //find by DOM
      var inputs = sandbox.document.getElementsByTagName('input');
      for(var x = 0; x &lt; inputs.length; ++x)
      {
        if(inputs[x].id == 'edit-search-block-form-keys')
        {
          search_input = inputs[x];
        } 
      }
      var bar = sandbox.document.getElementById('edit-search-block-form-keys');
    }
</textarea>
  <div class="bmplatform">
    Rails
  </div>
  <textarea name="code" class="rails">
     5.times do
          #typical blog page queries
          doc = Hpricot(open(RAILS_ROOT + '/public/static.html'))
          inputs = doc/"/html/body//form//input"
          node = inputs.find{|input| input.attributes['id'] &amp;&amp; input.attributes['id'] == 'edit-search-block-form-keys'}
          divs = doc/'/html/div[@id="edit-search-block-form-keys"]'
          inputs = doc/'input'
          divs = doc/'#edit-search-block-form-keys'
        end
</textarea>
  <hr>
  <br>
  <h3>
    Try it yourself
  </h3>
  <p>
    You can <a href="http://aptana.com/system/files/jaxer_benchmarks0_0.zip">download the complete source</a> we used to generate and display these results, and try them yourself. The README file should have the instructions you need. You can grab Apache+Jaxer from <a href="http://aptana.com/jaxer/download">the Aptana download site</a>, Apache+PHP+MySQL from several places such as <a href="http://www.apachefriends.org/en/xampp.html">XAMPP</a>, and Ruby and Rails from <a href="http://www.rubyonrails.org/">RubyOnRails.org</a> (if it isn't already on your platform — you'll need Rails 2.1.0, the json Ruby gem, and to run the tests in production mode).
  </p>
</div>
<?php include('includes/footer.php'); ?>
