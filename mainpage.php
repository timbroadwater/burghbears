<?php 

/*
Template Name: Mainpage Template
*/

get_header(); ?>

<div class="home-feature">
  <img src="<?php bloginfo('template_directory'); ?>/images/feature.jpg" alt="The Burgh Bears"/>
</div>
<div class="home-about">
  <div class="wrap">
	<h1>Who Are The Burgh Bears?</h1>
	<hr />
	<p>The Burgh Bears are a non-profit social group for bears and their admirers, created to both promote social/recreational activities for its members, as well as charitable fundraising for the local community. We are based in Pittsburgh, Pennsylvania, but have members from many surrounding states, and our electronic membership is worldwide.</p>
	<p>We think that having a local bear club is important. While the whole bear movement has grown enormously over the past decade, there are still many gay men who do not see themselves or their attractions reflected in the general public’s opinion of attractiveness. Bear clubs provide an alternative space, support structure, and friendship for these men. We are not out to set up some narrow definition of who or what is a “bear” — it’s just not a very good idea and can lead to silly things like bear beauty pageants!</p>
	<br>
	<a href="/about" class="button"><i class="fa fa-question"></i>Learn More</a>
	<a href="/member" class="button"><i class="fa fa-user"></i>Be A Member</a>
  </div>
</div>
<div class="home-events">
  <div class="wrap">
	<h1>Burgh Bear Events</h1>
	<hr />	
	<table id="recevents" align="center" border="0" cellspacing="0" cellpadding="0">
	  <tbody>
		<tr>
		  <td align="left" valign="top"><i class="fa fa-cutlery"></i></td>
		  <td align="left" valign="top"><p><span class="marker">First Wednesday of Every Month</span> Join us for some dinner at Mineo’s Pizza (2128 Murray Avenue) at 8:00 P.M., then strike it out with bowling at Forward Lanes (5844 Forward Avenue) starting approximately at 9:00 P.M.</p></td>
		</tr>
		<tr>
		  <td align="left" valign="top"><i class="fa fa-comments"></i></td>
		  <td align="left" valign="top"><p><span class="marker">Second Tuesday of Every Month</span> We’ll discuss the latest club business and upcoming events in the monthly meeting at the Blue Moon Bar (5115 Butler Street), with dinner to follow at a local eatery.</p></td>
		</tr>
		<tr>
		  <td align="left" valign="top"><i class="fa fa-glass"></i></td>
		  <td align="left" valign="top"><p><span class="marker">Fourth Saturday of Every Month</span> We’re have our Burgh Bears Bar Night. 9:00 P.M. at Blue Moon Bar (5115 Butler Street) 9:00 P.M. then heading to PTown (4740 Baum Blvd) around 10:00 P.M.</p></td>
		</tr>
	  </tbody>
	</table>
	<a href="/events" class="button"><i class="fa fa-calendar-o"></i>More Events</a>
	<a href="mailto:info@burghbears.org" class="button"><i class="fa fa-paper-plane-o"></i>Suggest Events</a>
  </div>
</div>
<div class="home-maul">
  <div class="wrap">
	<h1>Burgh Bears Maul</h1>
	<hr />	
	
	<!-- Editable Content on Homepage -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
	<?php the_content(); ?>
	<div class="entry-links"><?php wp_link_pages(); ?></div>
	</div>
	<?php endwhile; endif; ?>
	
  </div>
</div>
<div class="home-member">
  <div class="wrap">
	<h1>Member Information</h1>
	<hr />	
	<p>The Burgh Bears, a social group for bears and their admirers, does not discriminate or limit membership in any way other than age (you must be 21 or older to join). Annual dues are $20 for an individual membership, and $15 more per member per household ($35 per couple, $55 if you have three members living at one address, and so on). You do not have to be a member to participate in Burgh Bears activities, especially if you are new to the group. Check out and connect with the Burgh Bears on <a href="https://www.facebook.com/groups/179098975321/">Facebook</a> or <a href="https://twitter.com/burghbears">Twitter</a> to learn more about our activities.</p>
    <br><br>
	  <a href="https://www.facebook.com/groups/179098975321/" class="button"><i class="fa fa-facebook"></i>Facebook</a>
	<a href="https://twitter.com/burghbears" class="button"><i class="fa fa-twitter"></i>Twitter</a>
  </div>
</div>
<div class="home-community">
  <div class="wrap">
	<h1>Burgh Bears Community</h1>
	<hr />	
	<div class="logos">
	  <a href="http://www.bearguide.net/"><img class="alignnone size-full wp-image-920" src="http://www.burghbears.org/wp-content/uploads/2011/12/bearguide.jpg" alt="bearguide" width="189" height="115" /></a>
	  <a href="http://www.beartshirts.com/" target="_blank"><img class="mobileimg alignnone size-full wp-image-845" src="http://www.burghbears.org/wp-content/uploads/2011/12/web-header-logo-art-88.png" alt="web header logo art 88" width="535" height="103" border="0" /></a>
	  <a href="http://www.glccpgh.org/" target="_blank"><img class="alignnone size-full wp-image-848" src="http://www.burghbears.org/wp-content/uploads/2011/12/logo3.gif" alt="logo3" width="207" height="80" /></a>
	  <a href="http://www.patf.org/" target="_blank"><img class="alignnone size-full wp-image-890" title="The Pittsburgh Aids Task Force" src="http://www.burghbears.org/wp-content/uploads/2011/12/patf.gif" alt="The Pittsburgh Aids Task Force" width="160" height="74" /></a>
	  <a href="http://rccpittsburgh.com/" target="_blank"><img class="mobileimg alignnone size-full wp-image-891" title="The Renaissance City Choir of Pittsburgh" src="http://www.burghbears.org/wp-content/uploads/2011/12/ren.jpg" alt="The Renaissance City Choir of Pittsburgh" width="300" height="67" /></a>
	  <a href="http://www.swconline.org/" target="_blank"><img class="mobileimg alignnone size-full wp-image-892" title="The Shepherd Wellness Community" src="http://www.burghbears.org/wp-content/uploads/2011/12/shepard.jpg" alt="The Shepherd Wellness Community" width="281" height="97" /></a>
	  <a href="http://www.arktosbears.org/" target="_blank"><img class="mobileimg alignnone size-full wp-image-893" title="Arktos Bears" src="http://www.burghbears.org/wp-content/uploads/2011/12/arktos.png" alt="Arktos Bears" width="150" height="160" /></a>
	  <a href="http://svbears.org/" target="_blank"><img class="alignnone size-full wp-image-894 mobileimg" title="The Steel Valley Bears" src="http://www.burghbears.org/wp-content/uploads/2011/12/svb.jpg" alt="The Steel Valley Bears" width="140" height="140" /></a>
	  <a href="http://buffalobears.org/" target="_blank"><img class="mobileimg alignnone size-full wp-image-896" title="The Buffalo Bears" src="http://www.burghbears.org/wp-content/uploads/2011/12/buffalo.gif" alt="The Buffalo Bears" width="300" height="100" /></a>
	  <a href="https://persadcenter.org/" target="_blank"><img class="alignnone size-full wp-image-899 mobileimg" title="Persad" src="http://www.burghbears.org/wp-content/uploads/2013/08/persad.png" alt="Persad" width="132" height="127" /></a>
	  <a href="http://www.capitalcitybears.com/"><img class="alignnone size-full wp-image-909 mobileimg" title="Capital City Bears" src="http://www.burghbears.org/wp-content/uploads/2011/12/CCB-175px.jpg" alt="Capital City Bears" width="117" height="150" /></a>
	  <a href="http://www.jerseyfur.org/"><img class="alignnone size-full wp-image-922" src="http://www.burghbears.org/wp-content/uploads/2011/12/paw.jpg" alt="paw" width="110" height="110" /></a>
	</div>
  </div>
</div>
<div class="home-gallery">
  <div class="wrap">
	<h1>Burgh Bears Gallery</h1>
	<hr />	
	
	<div class="popup-gallery">
	  
	  <a href="<?php bloginfo('template_directory'); ?>/images/gallery/1.jpg" title="The Cleaner"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/1t.jpg"></a>
	  <a href="<?php bloginfo('template_directory'); ?>/images/gallery/2.jpg" title="The Cleaner"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/2t.jpg"></a>
	  <a href="<?php bloginfo('template_directory'); ?>/images/gallery/3.jpg" title="The Cleaner"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/3t.jpg"></a>
	  <a href="<?php bloginfo('template_directory'); ?>/images/gallery/4.jpg" title="The Cleaner"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/4t.jpg"></a>
	  <a href="<?php bloginfo('template_directory'); ?>/images/gallery/5.jpg" title="The Cleaner"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/5t.jpg"></a>
	  <a href="<?php bloginfo('template_directory'); ?>/images/gallery/6.jpg" title="The Cleaner"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/6t.jpg"></a>
	  <a href="<?php bloginfo('template_directory'); ?>/images/gallery/7.jpg" title="The Cleaner"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/7t.jpg"></a>
	  <a href="<?php bloginfo('template_directory'); ?>/images/gallery/8.jpg" title="The Cleaner"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/8t.jpg"></a>
	  <a href="<?php bloginfo('template_directory'); ?>/images/gallery/9.jpg" title="The Cleaner"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/9t.jpg"></a>
	  <a href="<?php bloginfo('template_directory'); ?>/images/gallery/10.jpg" title="The Cleaner"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/10t.jpg"></a>
	  <a href="<?php bloginfo('template_directory'); ?>/images/gallery/11.jpg" title="The Cleaner"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/11t.jpg"></a>
	  <a href="<?php bloginfo('template_directory'); ?>/images/gallery/12.jpg" title="The Cleaner"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/12t.jpg"></a>
	  <a href="<?php bloginfo('template_directory'); ?>/images/gallery/13.jpg" title="The Cleaner"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/13t.jpg"></a>
	  <a href="<?php bloginfo('template_directory'); ?>/images/gallery/14.jpg" title="The Cleaner"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/14t.jpg"></a>
	  <a href="<?php bloginfo('template_directory'); ?>/images/gallery/15.jpg" title="The Cleaner"><img src="<?php bloginfo('template_directory'); ?>/images/gallery/15t.jpg"></a>
	  
  	</div>
	<a href="/gallery" class="button"><i class="fa fa-camera"></i>More Photos</a>
	
  </div>
</div>
<?php get_footer(); ?>