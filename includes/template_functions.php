<?php 
function getBlogList(){
	$data = array();
	$data[] = array("id" => "2","title" => "Install the latest Cloud Tools version","description" => "Google Cloud SDK is a set of tools that you can use to manage resources and applications hosted on Google Cloud Platform. These include the gcloud, gsutil, and bq command line tools. The gcloud command-line tool is downloaded along with the Cloud SDK; a comprehensive guide to gcloud can be found in gcloud Overview.
Additionally, gcloud reference documents all of the gcloud CLI's functionality.", "created_date" => "2017-02-03","like_count" => 125, "comment_count" => 0,"category_name" => "Travel");
	$url = 'https://www.googleapis.com/books/v1/volumes?q=english';
	// create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, $url);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch); 
	return json_decode($output,true);
}
?>