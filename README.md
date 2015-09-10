
# lazy-scroll
lazy-scroll  Angularjs plugin for infinate scrolling

How to use lazy-scroll in simple 4 steps 

Step 1:
Download above script (lazy-scroll.min.js) 

Step 2:
Add script in  &lt;script src="path-to-script/lazy-scroll.min.js"&gt;&lt;/script&gt;

Step 3:
Ensure that your application module specifies lazy-scroll as a dependency.
 var app = angular.module("yourModule",['lazy-scroll']);

Step 4:
 Use the directive by specifying an lazy-scroll attribute on an element.
 
 &lt;div  lazy-scroll="paginationFuntion()" 
            lazy-scroll-trigger="80"
           &gt;

Thats it . For more details check demo and API documentation here  lazy-scroll
