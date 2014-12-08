<?php



class Webtise_Whitmoreandwhite_Block_Social_Footer extends Mage_Core_Block_Template
{

	public function getInstagramImages()
	{
			$this->hashtag = 'whitmoreandwhite';

			$client_id = 'bb7813192f5c44828cf925c88da3b8de';

			$url = 'https://api.instagram.com/v1/tags/'.$this->hashtag.'/media/recent?client_id='.$client_id;
			$ch = curl_init($url); 
			 
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
			 
			$results = curl_exec($ch); 
			curl_close($ch);
			
			if($results){
				$results = json_decode($results,true);
				foreach($results['data'] as $item){
				    $images[]['low_res'] = $item['images']['low_resolution']['url'];
				    //$images['high_res'] = $item['images']['high_resolution']['url'];
				   
				}
				
				return $images;
			} else{
				return array();
			}
	}
	
	
	public function getPinterestPins()
	{
		$rss = simplexml_load_file("http://www.pinterest.com/whitmorewhite/feed.rss?limit=6") ;       
        return $rss;
       
	}
	
	
	public function parsePinterestdescription($string)
	{
	    $regexp = "/<img[^>]+>/i";
	    preg_match_all($regexp,$string, $result); 
		return $result[0][0];
	}
	
	public function getTweets()
	{
		$cache = Mage::app()->getCache();
		
		$tweets = $cache->load("twitter_feed");
		if(empty($tweets)){
		//$channel = new Zend_Feed_Rss('https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=whitmoreandwhite');
			$settings = array(
			    'oauth_access_token' => "100751158-fV9ndpxM8AjA2OBABx8EtI0F1XK5MCdFIRx16lmN",
			    'oauth_access_token_secret' => "idUYaWToHnXrFr31iE2ifJ1Xz2THfBh9rybNGe7J1bUaG",
			    'consumer_key' => "jptFEb64QDFJUEVa2wzqL9zR0",
			    'consumer_secret' => "cQOfeZz7kDRE40mUP4HiueMZvMElqgUjrkOv4alnsHMiOUhI2Q"
			);
			
			$twitter = new Twitter_Api($settings);
			$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
			$getfield = '?screen_name=whitmorewhite&count=5';
			$requestMethod = "GET";
			$tweets = null;
			$tweets = $twitter->setGetfield($getfield)
	             ->buildOauth($url, $requestMethod)
	             ->performRequest();
	        
	        $cache->save($tweets, "twitter_feed",array("twitter_feed"), 10);

	    }
             
		return json_decode($tweets) ;
	}
	
	public function formatTweet($tweet)
	{
		$formatted_text = preg_replace('/(\b(www\.|http\:\/\/)\S+\b)/', "<a target='_blank' href='$1'>$1</a>", $tweet);
		$formatted_text = preg_replace('/(\b(www\.|https\:\/\/)\S+\b)/', "<a target='_blank' href='$1'>$1</a>", $formatted_text);
		$formatted_text = preg_replace('/\#(\w+)/', "<a target='_blank' href='http://search.twitter.com/search?q=$1'>#$1</a>", $formatted_text);
		$formatted_text = preg_replace('/\@(\w+)/', "<a target='_blank' href='http://twitter.com/$1'>@$1</a>", $formatted_text);

		return $formatted_text;
	}
	
	public function getFacebookFeed()
	{
	
		$cache = Mage::app()->getCache();
		
		$feed = $cache->load("facebook_feed");
		if(empty($feed)){

		$config = array();
			$config['appId'] = '705240759516775';
			$config['secret'] = 'ce46875766ff8565458a59a9a0a928ac';
			$t = '705240759516775|OtPci9a3EuPnaTR8E7NFKFZld7M';
			$facebook = new Facebook_Api($config);
			$feed = $facebook->api('/whitmoreandwhite/feed/', 'get');
			$feed = json_encode($feed);
			$cache->save($feed, "facebook_feed",array("facebook_feed"), 10);
		}

		return json_decode($feed);
	}
}