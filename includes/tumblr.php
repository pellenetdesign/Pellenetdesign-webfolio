                    <?php
//http://stocklamp.tumblr.com/post/274675902/putting-your-tumblr-posts-on-your-websites-the-easy-way
//http://finlay.tumblr.com/post/529010691/embed-tumblr-into-your-website
//http://www.tumblr.com/docs/en/api#api_read
                     
$xml = simplexml_load_file('http://movingbacktofrance.tumblr.com/api/read/?start=3&num=2&type=text');
$posts = $xml->xpath("/tumblr/posts/post");
                     
foreach($posts as $post) { ?> 
           
<div class="post post-<?php echo $post['type'] ?>">
<div class="post-date"><a href="<?php echo $post['url-with-slug']; ?>"><?php echo date("jS D M, H:i",strtotime($post['date'])); ?></a></div>
 

             
<div class="post-body">
 
<?php if ($post['type'] == 'regular') {  
                                                         
  $small_post = substr($post->{'regular-body'},0,539); ?>
                 
  <?php echo $small_post . ' &hellip;'; } ?>
 

 
  <?php if ($post['type'] == 'photo') {  ?>
    <?php echo $post->{'photo-set'}; ?>
    <?php echo $post->{'<img src="http://25.media.tumblr.com/5e3d84d0db9d121abc4a81ee89f70739/tumblr_mi01ddsgqQ1qdlxioo1_1280.jpg">'}; ?>
    <?php echo $post->{'video-source'}; ?>
    <?php echo $post->{'video-player'}; ?>
  <?php } ?>
 
  <?php if ($post['type'] == 'link') {  ?>
    <?php echo $post->{'link-text'}; ?>
    <p><a href="<?php echo $post->{'link-url'}; ?>"><?php echo $post->{'link-url'}; ?></a>
    <?php echo $post->{'link-description'}; ?>
  <?php } ?>
 
  <?php if ($post['type'] == 'conversation') {  ?>
    <?php echo $post->{'conversation-text'}; ?>
  <?php } ?>
 
  <?php if ($post['type'] == 'video') {  ?>
    <?php echo $post->{'video-caption'}; ?>
    <?php echo $post->{'video-source'}; ?>
    <?php echo $post->{'video-player'}; ?>
  <?php } ?>
               
  <?php if ($post['type'] == 'conversation') {  ?>
    <?php echo $post->{'audio-caption'}; ?>
    <?php echo $post->{'audio-player'}; ?>
    <?php echo $post->{'audio-plays'}; ?>
  <?php } ?>
 
</div><!-- //end post-body -->
             

</div><!-- //end post-->
 
<?php } ?>

<?php
$tumblog = 'username'; // change to your username
// if your Tumblog is self hosted, you need to change the base url to the location of your tumblog
$baseurl = 'http://' . $tumblog . '.tumblr.com';
$request = $baseurl . '/api/read/json';
$ci = curl_init($request);
curl_setopt($ci,CURLOPT_RETURNTRANSFER, TRUE);
$input = curl_exec($ci);
curl_close($ci);
 
// Tumblr JSON doesn't come in standard form, some str replace needed
 
$input = str_replace('var tumblr_api_read = ','',$input);
$input = str_replace(';','',$input);
 
// parameter 'true' is necessary for output as PHP array
 
$value = json_decode($input,true);
$content =  $value['posts'];
$blogInfo = $value['tumblelog'];
 
// the number of items you want to display
$item = 10;
 
// Echo the blog info
echo "<h3><a href=\"" . $baseurl . "\">" . $blogInfo['title'] . "</a></h3>\n";
echo "<h4>" . $blogInfo['description'] . "</h4>\n<hr />\n";
 
// then loop the blog contents
for($i=0;$i<$item;$i++){
	// we need to find out what the post type is, so we can format it appropriately
	// first check to see if it is a regular post
	if($content[$i]['type'] == "regular"){
		// echo title
		if($content[$i]['regular-title'] !== ""){
			echo "<p><a href=\"" . $content[$i]['url-with-slug'] . "\">" . $content[$i]['regular-title'] . "</a></p>\n";
		}else{
		// otherwise use the slug
			echo "<p><a href=\"" . $content[$i]['url-with-slug'] . "\">" . ucwords(str_replace("-"," ",$content[$i]['slug'])) . "</a></p>\n";
		}		
		// then echo the body
		// grab the string length of the post
		$postlength = strlen($content[$i]['regular-body']);
		if($postlength > 120){
			// if it's greater then 120, echo the first 120 characters and then add a read more link
			echo "<p>" . substr($content[$i]['regular-body'],3,123) . "... ";
			echo "<a href=\"" . $content[$i]['url-with-slug'] . "\">Read more</a></p>\n";
		}else{
			// echo the whole body if it's under 120 characters
			echo $content[$i]['regular-body'];
		}
		echo "<hr />\n";
	// then check if it's a link
	}else if($content[$i]['type'] == "link"){
		// if it has a title, use that as the title
		if($content[$i]['link-text'] !== ""){
			echo "<p><a href=\"" . $content[$i]['link-url'] . "\">" . $content[$i]['link-text'] . "</a></p>";
		// otherwise, just use the link as the title
		}else{
			echo "<p><a href=\"" . $content[$i]['link-url'] . "\">" . $content[$i]['link-url'] . "</a></p>";
		}
		// then echo the description if it has one
		if($content[$i]['url-description'] !== ""){
			echo $content[$i]['link-description'] . "\n";
		}
		echo "<hr />\n";
	// then check to see if it's a quote
	}else if($content[$i]['type'] == "quote"){
		// echo the quote
		echo "<p>" . $content[$i]['quote-text'] . "</p>\n";
		// then the source if it has one
		if($content[$i]['quote-source'] !== ""){
			echo "<p>-" . $content[$i]['quote-source'] . "</p>\n";
		}
		echo "<hr />\n";
	// then check to see if it's a photo
	}else if($content[$i]['type'] == "photo"){
		// I know it's not valid to not to specify the width and height, but I was having issues without making them the original size
		echo "<p><a href=\"" . $content[$i]['url-with-slug'] . "\"><img src=\"" . $content[$i]['photo-url-250'] . "\" alt=\"" . $content[$i]['slug'] . "\" /></a></p>\n";
		echo $content[$i]['photo-caption'];
		echo "<hr />\n";
	// then check for audio
	}else if($content[$i]['type'] == "audio"){
		$audioPlayer = trim($content[$i]['audio-player'],"></embed>");
		echo "<embed " . $audioPlayer . " />";
		echo $content[$i]['audio-caption'];
		echo "<hr />\n";
	// then check if it's a video
	}else if($content[$i]['type'] == "video"){
		// Tumblr uses JS to render video hosted by them
		echo "<script src=\"http://assets.tumblr.com/javascript/tumblelog.js\"></script>";
		echo $content[$i]['video-player'];
		if($content[$i]['video-caption'] !== ""){
			echo $content[$i]['video-caption'];
		}
		echo "<hr />";
	}
} // end for
?>
<p><a href="<?php echo $baseurl;?>">Read more posts.</a></p>