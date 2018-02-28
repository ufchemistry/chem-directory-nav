<?php
/*
Plugin Name: UF Chemistry Department Directory Navigation
Description: Use [chem-directory-nav url="/directory/" searchtext="Search Directory"] to insert dropdown navigation and search field for UF Chemistry Directory, using the Connections plugin.
Author: Steven M. Kobb
Version: 1.0.0
BuildDate: 20180228
*/


add_shortcode( 'chem-directory-nav', 'show_nav' );
function show_nav( $atts ) {
	if (empty($atts['searchtext']) ) { $thisSearchtext = "Search Directory"; }
	else { $thisSearchtext = $atts['searchtext']; }
	if (!empty($atts['url']) ) {
		$thisUrl = $atts['url'];
		$thisUrl2 = $atts['url'];
		if (!empty($atts['url_faculty']) ) { $thisUrl2 = $atts['url_faculty']; }

		$nav_text = "<div name" .  $thisUrl . "=\"top2\" style=\"float: right; padding-right: 25px; padding-top:12px;\"><form style=\"padding-top: 0px;\" action=\"" .  $thisUrl . "\" method=\"get\"><span class=\"cn-search\" style=\"padding-top: 0px;\"><label style=\"padding-top: 0px;\" for=\"cn-s\">" .  $thisSearchtext . "</label><input id=\"cn-search-input\" style=\"padding-top: 0px; margin-top:3px !important;\" name=\"cn-s\" type=\"text\" value=\"\" placeholder=\"Search\" /><input id=\"cn-search-submit\" class=\"cn-search-button\" tabindex=\"-1\" name=\"\" type=\"submit\" value=\"\" /></span></form></div>
<div style=\"float: left; padding-top: 19px;\"><a href=\"/directory/\">All Personnel</a> or </div>

<div id=\"research_nav_outer_wrap\" style=\"padding-bottom:0px; margin-bottom:0px;\"><nav id=\"research_nav_wrap\" style=\"height:24px !important; padding-top: 15px; padding-right: 20px; padding-bottom:0px; margin-bottom:0px;\">
<ul>
<li style=\"display: block; vertical-align: bottom; height:19px; padding-bottom: 0px; margin-bottom: 0px; padding-left:0px;\"><span style=\"display: block; padding-bottom: 0px; padding-top: 0px; margin-bottom: 0px; margin-top: 3px; outline: 1px solid #00206d; outline-offset:3px;\"><img src=\"/wp-content/plugins/connections/assets/images/icons/search.png\" alt=\"Select\" width=\"18\" height=\"13\" border=\"0\" /> Select a Category&nbsp;&nbsp;</span><ul style=\" vertical-align: top; padding-top: 0px; margin-top: 3px; margin-left:8px !important;\">
<li><a href=\"" .  $thisUrl . "?cn-cat=3\">All Personnel</a></li>
<li><a href=\"/research/divisions/\">Divisions</a>
<ul>
<li><a href=\"" .  $thisUrl . "?cn-cat=74\">Analytical Division</a></li>
<li><a href=\"" .  $thisUrl . "?cn-cat=1586\">Chemical Biology Division</a></li>
<li><a href=\"" .  $thisUrl . "?cn-cat=46\">Inorganic Division</a></li>
<li><a href=\"" .  $thisUrl . "?cn-cat=79\">Organic Division</a></li>
<li><a href=\"" .  $thisUrl . "?cn-cat=50\">Physical Division</a></li>
</ul>
</li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=6\">Faculty Positions</a>
<ul>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=168\">affiliate, courtesy, or joint</a></li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=166\">emeritus</a></li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=82\">lecturer</a></li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=35\">research</a></li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=44\">scientist</a></li>
</ul>
</li>
<li><a href=\"#\">Non-Faculty Positions</a>
<ul>
<li><a href=\"" .  $thisUrl . "?cn-cat=183\">scientific</a></li>
<li><a href=\"" .  $thisUrl . "?cn-cat=11\">staff</a></li>
</ul>
</li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=5\">Research Areas</a>
<ul>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=13\">analytical</a></li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=19\">bioanalytical</a></li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=14\">biochemistry</a></li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=21\">biophysical</a></li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=15\">inorganic</a></li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=23\">nanochemistry</a></li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=16\">organic</a></li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=25\">organometallic</a></li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=17\">physical</a></li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=27\">polymer</a></li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=28\">synthesis</a></li>
<li><a href=\"" .  $thisUrl2 . "?cn-cat=29\">theoretical</a></li>
</ul>
</li>
<li><a href=\"#\">Research Group Websites</a>
<ul>
<li><a href=\"https://www.researchgate.net/profile/Alexander_Angerhofer\" target=\"_blank\" rel=\"noopener noreferrer\">Angerhofer Group</a></li>
<li><a href=\"http://aponick.chem.ufl.edu/Aponick_Research/\" target=\"_blank\" rel=\"noopener noreferrer\">Aponick Group</a></li>
<li><a href=\"https://people.clas.ufl.edu/rodbartl/\" target=\"_blank\" rel=\"noopener noreferrer\">Bartlett Group</a></li>
<li><a href=\"https://bowers.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Bowers Group</a></li>
<li><a href=\"http://brucat.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Brucat Group</a></li>
<li><a href=\"http://bruner.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Bruner Group</a></li>
<li><a href=\"http://butcher.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Butcher Group</a></li>
<li><a href=\"https://cao.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Cao Group</a></li>
<li><a href=\"http://castellano.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Castellano Group</a></li>
<li><a href=\"https://christou.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Christou Group</a></li>
<li><a href=\"https://colina.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Colina Group</a></li>
<li><a href=\"https://dolbier.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Dolbier Group</a></li>
<li><a href=\"http://fanucci.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Fanucci Group</a></li>
<li><a href=\"https://grenninglab.com/\" target=\"_blank\" rel=\"noopener noreferrer\">Grenning Group</a></li>
<li><a href=\"https://guo.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Guo Group</a></li>
<li><a href=\"https://horenstein.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Horenstein Group</a></li>
<li><a href=\"http://kleiman.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Kleiman Group</a></li>
<li><a href=\"https://martin.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Martin Group</a></li>
<li><a href=\"http://lmwhite.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">McElwee-White Group</a></li>
<li><a href=\"http://miller.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Miller Group</a></li>
<li><a href=\"http://murray.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Murray Group</a></li>
<li><a href=\"https://omenetto.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Omenetto Group</a></li>
<li><a href=\"http://polfer.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Polfer Group</a></li>
<li><a href=\"https://richardson.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Richardson Group</a></li>
<li><a href=\"https://roitberg.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Roitberg Group</a></li>
<li><a href=\"https://savin.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Savin Group</a></li>
<li><a href=\"https://sites.google.com/site/stantonresearchgroup/\" target=\"_blank\" rel=\"noopener noreferrer\">Stanton Group</a></li>
<li><a href=\"https://people.clas.ufl.edu/jds2/\" target=\"_blank\" rel=\"noopener noreferrer\">Stewart Group</a></li>
<li><a href=\"http://sumerlin.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Sumerlin Group</a></li>
<li><a href=\"https://talham.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Talham Group</a></li>
<li><a href=\"https://tan.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Tan Group</a></li>
<li><a href=\"https://toth.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Toth Group</a></li>
<li><a href=\"https://veige.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Veige Group</a></li>
<li><a href=\"http://wagener.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Wagener Group</a></li>
<li><a href=\"http://wei.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Wei Group</a></li>
<li><a href=\"https://yost.chem.ufl.edu/\" target=\"_blank\" rel=\"noopener noreferrer\">Yost Group</a></li>
</ul>
</li>

</ul>
</nav></div>
<p class=\"clearfloat\"> </p>";

		return $nav_text;
	}
}
?>