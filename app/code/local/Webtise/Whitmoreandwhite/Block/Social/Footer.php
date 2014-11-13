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
	
	public function getTweets()
	{
		//$channel = new Zend_Feed_Rss('https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=whitmoreandwhite');
		return $tweets = array();
	}
	
	public function getFacebook()
	{
		
	}
}