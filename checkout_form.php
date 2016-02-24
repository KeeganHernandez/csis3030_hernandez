<?php
include("global.php");
include("header.php");
?>

<div id="container">

    <header>
	
    		
        <nav>
	<div class="width">
    			<ul class="sf-menu dropdown">
        	<li class="selected"><a href="index.html">Home</a></li>
            <li><a class="has_submenu" href="examples.html">Examples</a>
            	<ul>
                	<li><a href="noslides.html">Static Text Page</a></li>
                    <li><a href="page.html">Static Frontpage</a></li>
                    <li><a href="#">Another link</a></li>
                </ul>
            </li>
	     <li><a href="three-column.html">Three Column</a></li>
            <li><a class="has_submenu" href="#">Products</a>
            	<ul>
                	<li><a href="#">Product One</a></li>
                    <li><a href="#">Product Two</a></li>
                    <li><a href="#">Product Three</a></li>
                </ul>
            </li>
            <li><a href="#">Contact</a></li>
        </ul>

    </div>
	
		<div class="clear"></div>
	
    </nav>

    <h1><a href="/">Home</a></h1>


    <div id="slides-container" class="slides-container width">
        <div id="slides">
            <div>
                
		   <img src="images/tree.jpg" alt="Placeholder image" />

                    <h2>Tristique sem vitae metus ornare </h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque venenatis sagittis enim. Maecenas ligula erat, egestas congue, varius nec, sagittis nec, purus. In neque.</p>
                                  	
			<p><a href="#" class="button button-slider">Lorem ipsum dolor</a>
<a href="#" class="button button-reversed button-slider">Maecenas ligula!</a></p>
                    

            
                
            </div>
            
        
	
	 <div>
            	<h2>Have fun with slides!</h2>
                <p>These slides can contain anything a webpage can! HTML, Javascript, images, flash or whatever! They're completely easy to edit and add to as well, no need to bother editing or even going anywhere near some confusing Javascript files, simply add a &lt;div&gt;&lt;/div&gt; tag with your slider content to the "slides" container and an extra slide control - it takes just seconds to do!</p>
                
            </div>
 
         
		</div>
        <div class="controls"><span class="jFlowNext"><span>Next</span></span><span class="jFlowPrev"><span>Prev</span></span></div>        
        <div id="myController" class="hidden">
		<!-- COPY AND PASTE SLIDE CONTROL FOR EACH NEW SLIDE -->
		<span class="jFlowControl">Slide 1</span>
		<span class="jFlowControl">Slide 2</span>
	</div>
    </div>


    </header>




    <div id="body" class="width">



		<section id="content" class="two-column with-right-sidebar">

	    <article>
            
            <?php
if ($errormessage != "") {
    echo "<div style='color:red'>". $errormessage . "</div>";
    }
?>
            
            <h2>Checkout</h2>
            <form action="checkout_process.php" method="post">
                First Name: <input type="text" name="firstname"><br/><br/>
                Address: <input type="text" name="address"><br/><br/>
                City: <input type="text" name="city"><br/><br/>
                State: <input type="text" name="state"><br/><br/>
                ZIP: <input type="text" name="zip"><br/><br/>
                <input type="submit" value="submit">
            </form>
		
		</article>
	
		<article class="expanded">

            		<h2>Buy unbranded</h2>
			<div class="article-info">Posted on <time datetime="2013-05-14">14 May</time> by <a href="#" rel="author">Joe Bloggs</a></div>

			
            <p>Purchasing a template license for 8.00 GBP (at time of writing around 12 USD) gives you the right to remove any branding including links, logos and source tags relating to ZyPOP. As well as waiving the attribution requirement, your payment will also help us provide continued support for users as well as creating new web templates. Find out more about how to buy at the licensing page on our website which can be accessed at <a href="http://zypopwebtemplates.com/licensing" title="template license">http://zypopwebtemplates.com/licensing</a></p>

<h3>Lorem lipsum</h3>

<p>Morbi fermentum condimentum felis, commodo vestibulum sem mattis sed. Aliquam magna ante, mollis vitae tincidunt in, malesuada vitae turpis. Sed aliquam libero ut velit bibendum consectetur. Quisque sagittis, est in laoreet semper, enim dui consequat felis, faucibus ornare urna velit nec leo. Maecenas condimentum velit vitae est lobortis fermentum. In tristique sem vitae metus ornare luctus tempus nisl volutpat. Integer et est id nisi tempus pharetra sagittis et libero.</p>


		<a href="#" class="button">Read more</a>
		<a href="#" class="button button-reversed">Comments</a>
		</article>
        </section>
        
        <aside class="sidebar big-sidebar right-sidebar">
	
	
            <ul>	
               <li>
                    <h4>Blocklist</h4>
                    <ul class="blocklist">
                        <li><a class="selected" href="index.html">Home Page</a></li>
                        <li><a href="examples.html">Style Examples</a>
				<ul>
					<li><a href="page.html">Static slide page</a></li>
					<li><a href="noslides.html">No slides page</a></li>
				</ul>
			</li>
                        <li><a href="three-column.html">Three column layout example</a></li>
                        <li><a href="#">Sed aliquam libero ut velit bibendum</a></li>
                        <li><a href="#">Maecenas condimentum velit vitae</a></li>
                    </ul>
                </li>
                
               

		
               
                <li>
			<h4>News</h4>
			<ul class="newslist">
				<li>
					<p><span class="newslist-date">Jul 21</span>
			                   Quisque hendrerit lorem sit amet dui viverra dictum. Phasellus imperdiet magna sit amet arcu tristique ultricies ut in dui.</p>
				</li>

<li>
					<p><span class="newslist-date">May 09</span>
			                   Mauris et felis semper, congue dui ac, iaculis ipsum. Fusce non rhoncus risus, quis luctus nisl. Donec vitae velit tincidunt, tincidunt felis eu, suscipit nibh. </p>
 
				</li>
			</ul>
                </li>
	
   		<li>
                    <h4>Maecenas varius</h4>
                    <ul>
				<li><a href="#">Nam cursus nisi nec viverra iaculis</a></li>
				<li><a href="#">Integer lacinia risus id nibh vestibulum</a></li>
				<li><a href="#">Mauris eget ante ut elit rutrum ornare </a></li>
				<li><a href="#">Vivamus quis orci et suscipit consequa</a></li>
				<li><a href="#">Nam eget tellus adipiscin hendrerit</a></li>
			</ul>
                </li>
                
            </ul>
		
        </aside>
    	<div class="clear"></div>
    </div>
    <footer>

         <p>&copy; YourSite 2014. <a href="http://zypopwebtemplates.com/">Free HTML5 Templates</a> by ZyPOP</p>
      
    </footer>
</div>

<?php
include("footer.php");
?>