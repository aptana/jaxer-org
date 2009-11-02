<?php $title = 'FAQ';?>
<?php include('includes/header.php'); ?>
<style>
  .clear-block.clear {
    display:none;
  }
</style>
<div id="node-31" class="node">
  <h2>
    As a developer, how does the GPL v3 affect my existing work that I developed under other licenses?
  </h2>
  <div class="content">
    <p>
      Any code you write and own copyright to, which is not a work based on Aptana Studio or Jaxer code, can be distributed in any manner under any license. However, for example, if you create and distribute a combination of your own code with Aptana Studio or Jaxer, or you otherwise create a work based on an Aptana product, then the whole work must be GPL'd or you must obtain a separate license from Aptana.
    </p>
  </div><!-- 31 -->
  <div class="clear-block clear">
    <div class="meta">
      <div class="terms">
        <ul class="links inline">
          <li class="first taxonomy_term_10">
            <a href="/taxonomy/term/10" rel="tag" title="" class="taxonomy_term_10">faq</a>
          </li>
          <li class="taxonomy_term_9">
            <a href="/taxonomy/term/9" rel="tag" title="" class="taxonomy_term_9">jaxer</a>
          </li>
          <li class="taxonomy_term_4">
            <a href="/taxonomy/term/4" rel="tag" title="" class="taxonomy_term_4">legal</a>
          </li>
          <li class="last taxonomy_term_6">
            <a href="/taxonomy/term/6" rel="tag" title="" class="taxonomy_term_6">studio</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="node-19" class="node">
  <h2>
    Can I make changes, add to, or combine Aptana products with other things and and redistribute the result?
  </h2>
  <div class="content">
    <p>
      You can change any of Aptana Studio's or Jaxer's GPL'd source code and create derivative works as long as everything you add or change is all licensed under the GPLv3 and made publicly available.
    </p>
  </div><!-- 19 -->
  <div class="clear-block clear">
    <div class="meta">
      <div class="terms">
        <ul class="links inline">
          <li class="first taxonomy_term_10">
            <a href="/taxonomy/term/10" rel="tag" title="" class="taxonomy_term_10">faq</a>
          </li>
          <li class="taxonomy_term_9">
            <a href="/taxonomy/term/9" rel="tag" title="" class="taxonomy_term_9">jaxer</a>
          </li>
          <li class="taxonomy_term_4">
            <a href="/taxonomy/term/4" rel="tag" title="" class="taxonomy_term_4">legal</a>
          </li>
          <li class="last taxonomy_term_6">
            <a href="/taxonomy/term/6" rel="tag" title="" class="taxonomy_term_6">studio</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="node-18" class="node">
  <h2>
    Can I redistribute Aptana Studio or Jaxer as is, without any modifications?
  </h2>
  <div class="content">
    <p>
      Yes. If you just want to redistribute the software <em>as is</em>, in source or binary form, commercially or as open source, you are free to do so under the terms of the GPL.
    </p>
  </div><!-- 18 -->
  <div class="clear-block clear">
    <div class="meta">
      <div class="terms">
        <ul class="links inline">
          <li class="first taxonomy_term_10">
            <a href="/taxonomy/term/10" rel="tag" title="" class="taxonomy_term_10">faq</a>
          </li>
          <li class="taxonomy_term_9">
            <a href="/taxonomy/term/9" rel="tag" title="" class="taxonomy_term_9">jaxer</a>
          </li>
          <li class="taxonomy_term_4">
            <a href="/taxonomy/term/4" rel="tag" title="" class="taxonomy_term_4">legal</a>
          </li>
          <li class="last taxonomy_term_6">
            <a href="/taxonomy/term/6" rel="tag" title="" class="taxonomy_term_6">studio</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="node-29" class="node">
  <h2>
    Can I repackage Aptana Studio or Jaxer and distribute it?
  </h2>
  <div class="content">
    <p>
      Yes, the GPL explicitly permits you to do so but your derivative work must also be released under the GPL 3 or later license. If you need to make modifications, add or remove plugins or otherwise create a work based on Aptana Studio or Jaxer, and you cannot make those changes available under the GPL, contact us for a commercial license.
    </p>
  </div><!-- 29 -->
  <div class="clear-block clear">
    <div class="meta">
      <div class="terms">
        <ul class="links inline">
          <li class="first taxonomy_term_10">
            <a href="/taxonomy/term/10" rel="tag" title="" class="taxonomy_term_10">faq</a>
          </li>
          <li class="taxonomy_term_9">
            <a href="/taxonomy/term/9" rel="tag" title="" class="taxonomy_term_9">jaxer</a>
          </li>
          <li class="taxonomy_term_4">
            <a href="/taxonomy/term/4" rel="tag" title="" class="taxonomy_term_4">legal</a>
          </li>
          <li class="last taxonomy_term_6">
            <a href="/taxonomy/term/6" rel="tag" title="" class="taxonomy_term_6">studio</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="node-119" class="node">
  <h2>
    Do I have to use JavaScript for all my application or web site - what about Java, PHP, Ruby, .NET, etc.?
  </h2>
  <div class="content">
    <p>
      For many Ajax developers, who are already doing great things with JavaScript, HTML, and CSS on the browser, the prospects of doing everything that way, even on the server side, is very appealing.
    </p>
    <p>
      But Java, PHP, Ruby, and other server-side platforms have tremendous established bases, strong developer communities, and powerful tools to make them compelling environments for back-end development. And indeed the vast majority of modern web applications use one of these platforms for their back-end layer.
    </p>
    <p>
      The front-end of all these applications is almost invariably HTML, JavaScript, and CSS, because that's the common denominator of the browsers users use to access these applications. So Ajax technologies are almost inevitable — the only question is where is the boundary between Ajax technologies and the back-end platform. Usually, the answer is the internet: Ajax runs on the browser, the back-end runs on the server, and <em>something</em> serves as the presentation layer to bridge them. What is that something? We think it makes a lot of sense for that something to be Ajax itself: that way, the entire presentation layer can be in one paradigm, and it can interface cleanly to the back-end layer through established APIs architected for logical information flow across layers and not for public internet security or user-interface concerns.
    </p>
    <p>
      Jaxer extends Ajax to the server to allow a single paradigm for the entire presentation layer, and furthermore makes client-to-server calling trivial, so the presentation layer can focus on the user interaction and not on low-level communications between browser and server. Jaxer already supports interfacing with back-end platforms via web service calls, and will soon offer native connectivity too.
    </p>
  </div><!-- 119 -->
  <div class="clear-block clear">
    <div class="meta">
      <div class="terms">
        <ul class="links inline">
          <li class="first taxonomy_term_10">
            <a href="/taxonomy/term/10" rel="tag" title="" class="taxonomy_term_10">faq</a>
          </li>
          <li class="taxonomy_term_23">
            <a href="/taxonomy/term/23" rel="tag" title="" class="taxonomy_term_23">general</a>
          </li>
          <li class="last taxonomy_term_9">
            <a href="/taxonomy/term/9" rel="tag" title="" class="taxonomy_term_9">jaxer</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="node-36" class="node">
  <h2>
    GPL License Exception
  </h2>
  <div class="content">
    <p>
      Aptana, as part of the GPL liense exception, explicitly excludes the following EPL-licensed files, features and plugins. A '*' indicates any version of that item. Please reference the specific version of your product on the list below:<br>
      Aptana Studio Build 1.1.0.*
    </p>
    <ul>
      <li>startup.jar
      </li>
      <li>Aptana.exe
      </li>
      <li>Aptana.app (Mac launcher)
      </li>
      <li>Aptana (Linux launcher)
      </li>
      <li>com.adobe.spry.1.5_1.5.0.*.jar
      </li>
      <li>com.aptana.ide.documentation_1.1.0.*.jar
      </li>
      <li>com.aptana.ide.editors.codeassist_1.1.0.*.jar
      </li>
      <li>com.aptana.ide.epl_1.1.0.*.jar
      </li>
      <li>com.aptana.ide.feature.frameworks_1.1.0.*.jar
      </li>
      <li>com.aptana.ide.feature.rcp_1.1.0.*.jar
      </li>
      <li>com.aptana.ide.feature.xul_1.1.0.*.jar
      </li>
      <li>com.aptana.ide.internet.proxy_1.1.0.*.jar
      </li>
      <li>com.aptana.ide.intro_1.1.0.*.jar
      </li>
      <li>com.aptana.ide.js.docgen_1.1.0.*.jar
      </li>
      <li>com.aptana.ide.libraries.internal_0.2.9.*.jar
      </li>
      <li>com.aptana.ide.libraries_0.2.9.*.jar
      </li>
      <li>com.aptana.ide.rcp.main_1.1.0.*.jar
      </li>
      <li>com.aptana.ide.rcp_1.1.0.*.jar
      </li>
      <li>com.aptana.ide.update_1.1.0.*.jar
      </li>
      <li>com.aptana.ide.xul_1.1.0.*.jar
      </li>
      <li>com.extjs.ext.1.0_1.0.1.*.jar
      </li>
      <li>com.ibm.icu.nl1_3.4.5.v200609270227.jar
      </li>
      <li>com.ibm.icu.nl2_3.4.5.v200609270227.jar
      </li>
      <li>com.ibm.icu.nl2a_3.4.5.v200609270227.jar
      </li>
      <li>com.ibm.icu_3.4.5.20061213.jar
      </li>
      <li>com.jquery.1.2_1.1.3.*.jar
      </li>
      <li>com.mochikit.1.4_1.4.0.*.jar
      </li>
      <li>com.yahoo.yui.2.2_2.2.0.*.jar
      </li>
      <li>net.mootools.1.1_1.1.1.*.jar
      </li>
      <li>org.aflax.1.0_1.0.0.*.jar
      </li>
      <li>org.apache.lucene_1.4.103.v20060601.jar
      </li>
      <li>org.dojotoolkit.dojo.0.9_0.4.3.*.jar
      </li>
      <li>org.eclipse.atf.mozilla.ide.core_0.2.1.v200703161053.jar
      </li>
      <li>org.eclipse.atf.mozilla.swt.browser.carbon.macosx_0.2.1.v200703161053.jar
      </li>
      <li>org.eclipse.atf.mozilla.swt.browser.win32.win32.x86_0.2.1.v200703161053.jar
      </li>
      <li>org.eclipse.atf.mozilla.swt.browser_0.2.1.v200703161053.jar
      </li>
      <li>org.eclipse.compare.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.compare.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.compare.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.compare_3.2.1.M20060711.jar
      </li>
      <li>org.eclipse.core.commands.nl1_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.commands.nl2_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.commands.nl2a_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.commands_3.2.0.I20060605-1400.jar
      </li>
      <li>org.eclipse.core.contenttype.nl1_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.contenttype.nl2_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.contenttype.nl2a_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.contenttype_3.2.0.v20060603.jar
      </li>
      <li>org.eclipse.core.expressions.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.core.expressions.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.core.expressions.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.core.expressions_3.2.2.r322_v20070109a.jar
      </li>
      <li>org.eclipse.core.filebuffers.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.core.filebuffers.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.core.filebuffers.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.core.filebuffers_3.2.1.r321_v20060721.jar
      </li>
      <li>org.eclipse.core.filesystem.linux.x86_1.0.0.v20060603.jar
      </li>
      <li>org.eclipse.core.filesystem.macosx_1.0.0.v20060603.jar
      </li>
      <li>org.eclipse.core.filesystem.nl1_1.0.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.filesystem.nl2_1.0.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.filesystem.nl2a_1.0.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.filesystem.win32.x86_1.0.0.v20060603.jar
      </li>
      <li>org.eclipse.core.filesystem_1.0.0.v20060603.jar
      </li>
      <li>org.eclipse.core.jobs.nl1_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.jobs.nl2_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.jobs.nl2a_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.jobs_3.2.0.v20060603.jar
      </li>
      <li>org.eclipse.core.resources.compatibility_3.2.0.v20060603.jar
      </li>
      <li>org.eclipse.core.resources.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.core.resources.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.core.resources.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.core.resources.win32_3.2.0.v20060603.jar
      </li>
      <li>org.eclipse.core.resources_3.2.2.R32x_v20061218.jar
      </li>
      <li>org.eclipse.core.runtime.compatibility.auth.nl1_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.runtime.compatibility.auth.nl2_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.runtime.compatibility.auth.nl2a_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.runtime.compatibility.auth_3.2.0.v20060601.jar
      </li>
      <li>org.eclipse.core.runtime.compatibility.nl1_3.1.100.v200609270227.jar
      </li>
      <li>org.eclipse.core.runtime.compatibility.nl2_3.1.100.v200609270227.jar
      </li>
      <li>org.eclipse.core.runtime.compatibility.nl2a_3.1.100.v200609270227.jar
      </li>
      <li>org.eclipse.core.runtime.compatibility.registry_3.2.1.R32x_v20060907.jar
      </li>
      <li>org.eclipse.core.runtime.compatibility_3.1.100.v20060603.jar
      </li>
      <li>org.eclipse.core.runtime.nl1_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.runtime.nl2_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.runtime.nl2a_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.core.runtime_3.2.0.v20060603.jar
      </li>
      <li>org.eclipse.core.variables.nl1_3.1.100.v200609270227.jar
      </li>
      <li>org.eclipse.core.variables.nl2_3.1.100.v200609270227.jar
      </li>
      <li>org.eclipse.core.variables.nl2a_3.1.100.v200609270227.jar
      </li>
      <li>org.eclipse.core.variables_3.1.100.v20060605.jar
      </li>
      <li>org.eclipse.debug.core.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.debug.core.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.debug.core.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.debug.core_3.2.1.v20060823.jar
      </li>
      <li>org.eclipse.debug.ui.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.debug.ui.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.debug.ui.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.debug.ui_3.2.2.r322_v20070202.jar
      </li>
      <li>org.eclipse.eclipsemonkey.doms_0.1.10.*.jar
      </li>
      <li>org.eclipse.eclipsemonkey.lang.javascript_0.1.10.*.jar
      </li>
      <li>org.eclipse.eclipsemonkey.ui_0.1.10.*.jar
      </li>
      <li>org.eclipse.eclipsemonkey_0.1.10.*.jar
      </li>
      <li>org.eclipse.eclipsemonkey_0.1.10.*.jar
      </li>
      <li>org.eclipse.equinox.common.nl1_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.equinox.common.nl2_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.equinox.common.nl2a_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.equinox.common_3.2.0.v20060603.jar
      </li>
      <li>org.eclipse.equinox.preferences.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.equinox.preferences.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.equinox.preferences.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.equinox.preferences_3.2.1.R32x_v20060717.jar
      </li>
      <li>org.eclipse.equinox.registry.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.equinox.registry.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.equinox.registry.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.equinox.registry_3.2.1.R32x_v20060814.jar
      </li>
      <li>org.eclipse.help.appserver.nl1_3.1.100.v200609270227.jar
      </li>
      <li>org.eclipse.help.appserver.nl2_3.1.100.v200609270227.jar
      </li>
      <li>org.eclipse.help.appserver.nl2a_3.1.100.v200609270227.jar
      </li>
      <li>org.eclipse.help.appserver_3.1.100.v20060602.jar
      </li>
      <li>org.eclipse.help.base.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.help.base.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.help.base.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.help.base_3.2.2.R322_v20061207.jar
      </li>
      <li>org.eclipse.help.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.help.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.help.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.help.ui.nl1_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.help.ui.nl2_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.help.ui.nl2a_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.help.ui_3.2.0.v20060602.jar
      </li>
      <li>org.eclipse.help.webapp.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.help.webapp.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.help.webapp.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.help.webapp_3.2.2.R322_v20061114.jar
      </li>
      <li>org.eclipse.help_3.2.2.R322_v20061213.jar
      </li>
      <li>org.eclipse.jface.databinding.nl1_1.0.0.v200609270227.jar
      </li>
      <li>org.eclipse.jface.databinding.nl2_1.0.0.v200609270227.jar
      </li>
      <li>org.eclipse.jface.databinding.nl2a_1.0.0.v200609270227.jar
      </li>
      <li>org.eclipse.jface.databinding_1.0.0.I20060605-1400.jar
      </li>
      <li>org.eclipse.jface.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.jface.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.jface.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.jface.text.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.jface.text.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.jface.text.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.jface.text_3.2.2.r322_v20070104.jar
      </li>
      <li>org.eclipse.jface_3.2.2.M20061214-1200.jar
      </li>
      <li>org.eclipse.ltk.core.refactoring.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ltk.core.refactoring.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ltk.core.refactoring.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ltk.core.refactoring_3.2.1.r321_v20060823.jar
      </li>
      <li>org.eclipse.ltk.ui.refactoring.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ltk.ui.refactoring.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ltk.ui.refactoring.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ltk.ui.refactoring_3.2.2.r322_v20070124.jar
      </li>
      <li>org.eclipse.osgi.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.osgi.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.osgi.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.osgi_3.2.2.R32x_v20070118.jar
      </li>
      <li>org.eclipse.rcp.nl1_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.rcp.nl2_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.rcp.nl2a_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.rcp.nls1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.rcp.nls2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.rcp.nls2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.rcp_3.2.0.v20060605.jar
      </li>
      <li>org.eclipse.rcp_3.2.2.r322_v20070104-8pcviKVqd8J7C1U.jar
      </li>
      <li>org.eclipse.search.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.search.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.search.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.search_3.2.1.r321_v20060726.jar
      </li>
      <li>org.eclipse.swt.carbon.macosx_3.2.2.v3236.jar
      </li>
      <li>org.eclipse.swt.carbon.macosx_3.3.0.v3346.jar
      </li>
      <li>org.eclipse.swt.gtk.linux.x86_3.2.2.v3236.jar
      </li>
      <li>org.eclipse.swt.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.swt.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.swt.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.swt.win32.win32.x86_3.2.2.v3236.jar
      </li>
      <li>org.eclipse.swt.win32.win32.x86_3.3.0.v3345f.jar
      </li>
      <li>org.eclipse.swt_3.2.2.v3236b.jar
      </li>
      <li>org.eclipse.team.core.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.team.core.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.team.core.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.team.core_3.2.2.M20061114.jar
      </li>
      <li>org.eclipse.team.ui.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.team.ui.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.team.ui.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.team.ui_3.2.1.M200608151725.jar
      </li>
      <li>org.eclipse.text.nl1_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.text.nl2_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.text.nl2a_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.text_3.2.0.v20060605-1400.jar
      </li>
      <li>org.eclipse.tomcat.nl1_4.1.130.v200609270227.jar
      </li>
      <li>org.eclipse.tomcat.nl2_4.1.130.v200609270227.jar
      </li>
      <li>org.eclipse.tomcat.nl2a_4.1.130.v200609270227.jar
      </li>
      <li>org.eclipse.tomcat_4.1.130.v20060601.jar
      </li>
      <li>org.eclipse.ui.browser.nl1_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.ui.browser.nl2_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.ui.browser.nl2a_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.ui.browser_3.2.0.v20060602.jar
      </li>
      <li>org.eclipse.ui.cheatsheets.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.cheatsheets.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.cheatsheets.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.cheatsheets_3.2.1.R321_v20060720.jar
      </li>
      <li>org.eclipse.ui.console.nl1_3.1.100.v200609270227.jar
      </li>
      <li>org.eclipse.ui.console.nl2_3.1.100.v200609270227.jar
      </li>
      <li>org.eclipse.ui.console.nl2a_3.1.100.v200609270227.jar
      </li>
      <li>org.eclipse.ui.console_3.1.100.v20060605.jar
      </li>
      <li>org.eclipse.ui.editors.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.editors.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.editors.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.editors_3.2.1.r321_v20060721.jar
      </li>
      <li>org.eclipse.ui.externaltools_3.1.101.r321_v20060802.jar
      </li>
      <li>org.eclipse.ui.forms.nl1_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.ui.forms.nl2_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.ui.forms.nl2a_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.ui.forms_3.2.0.v20060602.jar
      </li>
      <li>org.eclipse.ui.ide.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.ide.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.ide.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.ide_3.2.1.M20060915-1030.jar
      </li>
      <li>org.eclipse.ui.intro.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.intro.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.intro.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.intro_3.2.2.R322_v20061214.jar
      </li>
      <li>org.eclipse.ui.navigator.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.navigator.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.navigator.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.navigator.resources.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.navigator.resources.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.navigator.resources.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.navigator.resources_3.2.1.M20060906-0800b.jar
      </li>
      <li>org.eclipse.ui.navigator_3.2.1.M20060913-0800.jar
      </li>
      <li>org.eclipse.ui.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.views.properties.tabbed_3.2.1.M20060830-0800.jar
      </li>
      <li>org.eclipse.ui.views_3.2.1.M20060906-0800.jar
      </li>
      <li>org.eclipse.ui.win32_3.2.0.I20060605-1400.jar
      </li>
      <li>org.eclipse.ui.workbench.compatibility_3.2.0.I20060605-1400.jar
      </li>
      <li>org.eclipse.ui.workbench.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.workbench.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.workbench.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.ui.workbench.texteditor.nl1_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.ui.workbench.texteditor.nl2_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.ui.workbench.texteditor.nl2a_3.2.0.v200609270227.jar
      </li>
      <li>org.eclipse.ui.workbench.texteditor_3.2.0.v20060605-1400.jar
      </li>
      <li>org.eclipse.ui.workbench_3.2.2.M20070119-0800.jar
      </li>
      <li>org.eclipse.ui_3.2.1.M20061108.jar
      </li>
      <li>org.eclipse.update.configurator.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.update.configurator.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.update.configurator.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.update.configurator_3.2.2.R32x_v20070111.jar
      </li>
      <li>org.eclipse.update.core.linux_3.2.0.v20060605.jar
      </li>
      <li>org.eclipse.update.core.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.update.core.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.update.core.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.update.core.win32_3.2.2.R32x_v20061214.jar
      </li>
      <li>org.eclipse.update.core_3.2.3.R32x_v20070118.jar
      </li>
      <li>org.eclipse.update.ui.nl1_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.update.ui.nl2_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.update.ui.nl2a_3.2.1.v200609270227.jar
      </li>
      <li>org.eclipse.update.ui_3.2.2.R32x_v20070111.jar
      </li>
      <li>org.mozilla.rhino_1.6.2.jar
      </li>
      <li>org.mozilla.xpcom_1.8.1.3-20070320.jar
      </li>
      <li>org.mozilla.xulrunner.carbon.macosx_1.8.1.3-20070404.jar
      </li>
      <li>org.mozilla.xulrunner.win32.win32.x86_1.8.1.3-20070404.jar
      </li>
      <li>org.openrico.rico.2.0_2.0.0.*.jar
      </li>
      <li>org.prototypejs.prototype.1.5_1.5.0.*.jar
      </li>
      <li>org.scriptaculous.1.7_1.7.0.*.jar
      </li>
      <li>Tidy.jar
      </li>
      <li>css-validator.jar
      </li>
      <li>jaxen.jar
      </li>
      <li>commons-logging.jar
      </li>
      <li>xercesImp.jar
      </li>
      <li>xmlParserAPIs.jar
      </li>
      <li>derbytools.jar
      </li>
      <li>derbynet.jar
      </li>
      <li>derbyLocale_*.jar
      </li>
      <li>derbyclient.jar
      </li>
      <li>derby.jar
      </li>
      <li>saxon.jar
      </li>
    </ul>
  </div><!-- 36 -->
  <div class="clear-block clear">
    <div class="meta">
      <div class="terms">
        <ul class="links inline">
          <li class="first taxonomy_term_10">
            <a href="/taxonomy/term/10" rel="tag" title="" class="taxonomy_term_10">faq</a>
          </li>
          <li class="taxonomy_term_8">
            <a href="/taxonomy/term/8" rel="tag" title="" class="taxonomy_term_8">GPL</a>
          </li>
          <li class="taxonomy_term_9">
            <a href="/taxonomy/term/9" rel="tag" title="" class="taxonomy_term_9">jaxer</a>
          </li>
          <li class="last taxonomy_term_4">
            <a href="/taxonomy/term/4" rel="tag" title="" class="taxonomy_term_4">legal</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="node-213" class="node">
  <h2>
    How do I update my Jaxer to a later version?
  </h2>
  <div class="content">
    <p>
      If you're using the Jaxer in Studio, the regular Studio update process will let you know there's a newer version of Studio, and you can update it directly.
    </p>
    <p>
      If you're using the standalone Jaxer Package...
    </p>
    <ol>
      <li>Stop Jaxer if it's running.
      </li>
      <li>Delete the <strong>jaxer</strong> folder in your Aptana Jaxer (or AptanaJaxer) folder.
      </li>
      <li>
        <a href="<?php print WEB_ROOT;?>download">Download Jaxer_update.zip</a> and unzip it into your Aptana Jaxer (or AptanaJaxer) folder, which creates a new <strong>jaxer</strong> folder.
      </li>
    </ol>
    <p>
      All your data and settings will be preserved—they're not kept in the overwritten folder.
    </p>
  </div><!-- 213 -->
  <div class="clear-block clear">
    <div class="meta">
      <div class="terms">
        <ul class="links inline">
          <li class="first taxonomy_term_10">
            <a href="/taxonomy/term/10" rel="tag" title="" class="taxonomy_term_10">faq</a>
          </li>
          <li class="taxonomy_term_23">
            <a href="/taxonomy/term/23" rel="tag" title="" class="taxonomy_term_23">general</a>
          </li>
          <li class="last taxonomy_term_9">
            <a href="/taxonomy/term/9" rel="tag" title="" class="taxonomy_term_9">jaxer</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="node-117" class="node">
  <h2>
    How does Jaxer compare with Google Web Toolkit (GWT)?
  </h2>
  <div class="content">
    <p>
      Jaxer and GWT both address the question of how to unify the development paradigms across client and server. But they take very different approaches, at least to the UI part of web applications. GWT appeals to developers who would rather not write HTML or JavaScript at all, and instead have it generated automatically from their Java code. With GWT the developer writes server Java code for to describe the UI, and GWT autogenerates it. Jaxer appeals to those who want to write the HTML and JavaScript themselves, use any combination of Ajax libraries, and be in complete control of what appears on the user's browser. With Jaxer the developer writes the UI as they desire, in the familiar Ajax way, and designate certain parts to run on the server.
    </p>
    <p>
      With GWT you end up writing pure Java for your entire application, except if you want to take more control of your UI than what GWT offers for you out of the box, in which case you end up mixing Java, HTML, and JavaScript, and you're back to the issues Jaxer and GWT were trying to solve.
    </p>
    <p>
      With Jaxer you end up writing pure Ajax (HTML and JavaScript and CSS) for your entire application, except if you want the back-end of the application to be in Java (or some other language). But Jaxer will natively support connectivity to Java and other languages, beyond the network-layer (web services) integration already in Jaxer beta. So you will be able to keep your entire presentation layer in a single paradigm — Ajax — and have your business logic layer in Java. And since the interface between them will be on the server, you will not be forced to expose your Java APIs as web services on the public internet.
    </p>
  </div><!-- 117 -->
  <div class="clear-block clear">
    <div class="meta">
      <div class="terms">
        <ul class="links inline">
          <li class="first taxonomy_term_10">
            <a href="/taxonomy/term/10" rel="tag" title="" class="taxonomy_term_10">faq</a>
          </li>
          <li class="taxonomy_term_23">
            <a href="/taxonomy/term/23" rel="tag" title="" class="taxonomy_term_23">general</a>
          </li>
          <li class="last taxonomy_term_9">
            <a href="/taxonomy/term/9" rel="tag" title="" class="taxonomy_term_9">jaxer</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="node-32" class="node">
  <h2>
    If I make modifications or customizations to Aptana products for internal use, must I make these changes publicly available?
  </h2>
  <div class="content">
    <p>
      No. If you keep these modifications internal to your organization, you do not have to make your changes publicly available. If you wish to redistribute the modifications outside of your organization, you must either contact Aptana for a commercial license or release it under the GPL.
    </p>
  </div><!-- 32 -->
  <div class="clear-block clear">
    <div class="meta">
      <div class="terms">
        <ul class="links inline">
          <li class="first taxonomy_term_10">
            <a href="/taxonomy/term/10" rel="tag" title="" class="taxonomy_term_10">faq</a>
          </li>
          <li class="taxonomy_term_9">
            <a href="/taxonomy/term/9" rel="tag" title="" class="taxonomy_term_9">jaxer</a>
          </li>
          <li class="taxonomy_term_4">
            <a href="/taxonomy/term/4" rel="tag" title="" class="taxonomy_term_4">legal</a>
          </li>
          <li class="last taxonomy_term_6">
            <a href="/taxonomy/term/6" rel="tag" title="" class="taxonomy_term_6">studio</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="node-212" class="node">
  <h2>
    If I run my software on Jaxer do I need to license my software under the GPL?
  </h2>
  <div class="content">
    <p>
      Running your software on the Jaxer server <strong>does not</strong> at all compel you to license your software under the GPL. Jaxer itself is licensed under the Gnu Public License version 3 (the GPL) in order to keep it free to use and distribute and extend, as long as distributed extensions to Jaxer itself are offered back to the community under the GPL. But software programs that run on top of Jaxer are not bound by the Jaxer GPL license. Indeed we place no restrictions on the software you run on top of Jaxer, in terms of licensing or anything else.
    </p>
    <p>
      While most of Jaxer runs on the server, a small part of Jaxer is a client-side library that by default gets embedded in the pages Jaxer serves to the browser. Alternatively, Jaxer's configuration can be changed so pages it serves reference the client-side Jaxer library through a &lt;script src="..."&gt;&lt;/script&gt; tag. To alleviate any concerns you may have that such automatic distribution of a small piece of Jaxer might create a derivative work and thereby entangle your software with Jaxer's license, we're in the process of formulating an explicit "classpath" exception to the GPL license for Jaxer: that exception will state that we explicitly grant you an exception to distribute the client-side part of Jaxer and dynamically link it with your own software regardless of the terms of your software's license.
    </p>
    <p>
      In short, please feel free to develop software for running on Jaxer without being concerned that Jaxer's license will somehow restrict your software's license. Jaxer's license does not affect any software you yourself write or obtain from a third party. Indeed, as long as you are not deriving software from Jaxer and redistributing that Jaxer-derived software, the only effect of the Jaxer license on you is to make sure Jaxer remains free and open to you.
    </p>
  </div><!-- 212 -->
  <div class="clear-block clear">
    <div class="meta">
      <div class="terms">
        <ul class="links inline">
          <li class="first taxonomy_term_10">
            <a href="/taxonomy/term/10" rel="tag" title="" class="taxonomy_term_10">faq</a>
          </li>
          <li class="taxonomy_term_9">
            <a href="/taxonomy/term/9" rel="tag" title="" class="taxonomy_term_9">jaxer</a>
          </li>
          <li class="last taxonomy_term_4">
            <a href="/taxonomy/term/4" rel="tag" title="" class="taxonomy_term_4">legal</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="node-118" class="node">
  <h2>
    Is Jaxer just another Server-Side JavaScript (SSJS) platform?
  </h2>
  <div class="content">
    <p>
      No.
    </p>
    <p>
      We realized from the beginning that to really solve the problems we were tackling — making Ajax development seamless on client and server — we would need full Ajax capabilities on the server, as well as transparent calling of server-side functions from the browser. That requires a full web engine on the server side: a world-class HTML, JavaScript, and CSS parser, DOM engine, JavaScript interpreter and runtime, all fully integrated with each other, extensible, and with a large, established, and active developer community to guarantee a long life. We chose the Mozilla engine that powers the Firefox browser, and enhanced it with what any industrial-strength server needs. But we kept three principles at the forefront: it needed to be super easy to understand and use; it needed to feel like an Ajax platform, with familiar HTML/DOM and JavaScript conventions; and it needed to be extremely extensible <strong>using only Ajax</strong> (no C/C++ or even XPCOM needed in many cases).
    </p>
    <p>
      So if all you want to do is run JavaScript on the server, of course you can do that easily with Jaxer, and you can do that with various Rhino-based and other platforms too. But if you need to manipulate the HTML DOM on the server, if you want to use an Ajax library there, if you want to call server-side JavaScript from the browser as easily as you call browser-side JavaScript, etc. — then you need a true Ajax server.
    </p>
  </div><!-- 118 -->
  <div class="clear-block clear">
    <div class="meta">
      <div class="terms">
        <ul class="links inline">
          <li class="first taxonomy_term_10">
            <a href="/taxonomy/term/10" rel="tag" title="" class="taxonomy_term_10">faq</a>
          </li>
          <li class="taxonomy_term_23">
            <a href="/taxonomy/term/23" rel="tag" title="" class="taxonomy_term_23">general</a>
          </li>
          <li class="last taxonomy_term_9">
            <a href="/taxonomy/term/9" rel="tag" title="" class="taxonomy_term_9">jaxer</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="node-171" class="node">
  <h2>
    What about security?
  </h2>
  <div class="content">
    <p>
      Please see the <a href="<?php print WEB_ROOT;?>guide/develop_security.php">Jaxer Security page</a>.
    </p>
  </div><!-- 171 -->
  <div class="clear-block clear">
    <div class="meta">
      <div class="terms">
        <ul class="links inline">
          <li class="first taxonomy_term_10">
            <a href="/taxonomy/term/10" rel="tag" title="" class="taxonomy_term_10">faq</a>
          </li>
          <li class="taxonomy_term_23">
            <a href="/taxonomy/term/23" rel="tag" title="" class="taxonomy_term_23">general</a>
          </li>
          <li class="last taxonomy_term_9">
            <a href="/taxonomy/term/9" rel="tag" title="" class="taxonomy_term_9">jaxer</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="node-120" class="node">
  <h2>
    What about server functions calling the browser (server push)?
  </h2>
  <div class="content">
    <p>
      The original and still prevalent interaction between browsers and web servers is a (more or less) stateless request from the browser followed by a response from the server, and that's it. With the addition of XMLHttpRequest (or similar mechanisms) to allow request-response communications without refreshing the page, Remote Procedure Calls (RPC) are very natural to implement, and now Jaxer makes them downright trivial: a client-side function can simply call a server-side function that's been designated with the "proxy" flag, as easily as calling another client-side function. Since in many cases the user interface is driven by user interaction events on the client, it's often sufficient to have client-server communications initiated from the client.
    </p>
    <p>
      But there is also value in some cases for server-initiated communications, e.g. when the server has updated data, say in a collaborative application where the server coordinates interactions between users. Such "server push" functionality can be achieved by polling the server for new information, or by relying on long-lived HTTP connections between the browser and the web server ("<a href="http://en.wikipedia.org/wiki/Comet_%28programming%29" target="_blank">Comet</a>") . Jaxer easily supports polling models (e.g. see the Jaxer sample "<a href="/node/44">Chat</a>" which uses a very simple polling loop), while support for Comet is being investigated.
    </p>
  </div><!-- 120 -->
  <div class="clear-block clear">
    <div class="meta">
      <div class="terms">
        <ul class="links inline">
          <li class="first taxonomy_term_10">
            <a href="/taxonomy/term/10" rel="tag" title="" class="taxonomy_term_10">faq</a>
          </li>
          <li class="taxonomy_term_23">
            <a href="/taxonomy/term/23" rel="tag" title="" class="taxonomy_term_23">general</a>
          </li>
          <li class="last taxonomy_term_9">
            <a href="/taxonomy/term/9" rel="tag" title="" class="taxonomy_term_9">jaxer</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="node-21" class="node">
  <h2>
    Why does Aptana use a dual licensing model?
  </h2>
  <div class="content">
    <p>
      Aptana wants to make our products available to everyone, and we want to continue to make the source code available and encourage outside contributions.
    </p>
    <p>
      By adopting a dual license model, Aptana can remain open source and encourage the freedom of development and contribution that has made us who we are. In addition, it makes it easier to use our software in situations where the GPL is not an option.
    </p>
    <p>
      The dual licensing model sustains both innovation and growth. If a company sells a version of Aptana Studio or Jaxer, or a work based on it, and cannot contribute the code back to the community, we ask that they contact us for a commercial license. On the other hand, developers that want to create better open-source software can continue to do so under the GPL and ensure that everyone benefits from each other's contributions.
    </p>
  </div>
</div>
<?php include('includes/footer.php'); ?>
