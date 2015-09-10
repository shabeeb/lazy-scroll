
# lazy-scroll
lazy-scroll  Angularjs plugin for infinate scrolling

How to use lazy-scroll in simple 4 steps 


Download above script (lazy-scroll.min.js) 
you can download the minified version   or you can use the cdn and follow simple 3 steps

Step 1 :

Add script at bottom of page after angularjs
<pre class="lang:default decode:true " title="load plugin">&lt;script src="path-to-script/lazy-scroll.min.js"&gt;&lt;/script&gt;</pre>
Step 2:

Ensure that your application module specifies lazy-scroll as a dependency.
<pre class="lang:default decode:true">var app = angular.module("yourModule",['lazy-scroll']);</pre>
Step 3:

Use the directive by specifying an lazy-scroll attribute on an element.
<pre class="lang:default decode:true ">&lt;div lazy-scroll="paginationFuntion()" lazy-scroll-trigger="80" &gt;</pre>


Thats it . For more details check demo and API documentation here  in <a href="http://shabeebk.com/blog/lazy-scroll-infinite-scrolling-angularjs-plugin/"> my blog | lazy-scroll</a>
