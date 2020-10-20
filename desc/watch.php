<?php 
require_once('config.php');
require_once('include/movies.php');
//$short = $_ocim->home_url() .'/?do=watch&id='. $id ;
$short = seo_movie( $id, $row['title'] ) ;
  function get_tiny_url($url)  {  
	$ch = curl_init();  
	$timeout = 5;  
	curl_setopt($ch,CURLOPT_URL,'https://tinyurl.com/api-create.php?url='.$url);  
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
	$data = curl_exec($ch);  
	curl_close($ch);  
	return $data;  
	}

//daftar disini https://bitly.com/a/oauth_apps
require_once('include/bitly.php');
$client_id = '';
$client_secret = '';
$user_access_token = '7f0330fdf15ad747b94aa6b8efbf421a11efe6a7';
$user_login = '';
$user_api_key = '';

$params = array();
$params['access_token'] = $user_access_token;
$params['longUrl'] = $short;
$params['domain'] = 'bit.ly'; // alternatif domain : bit.ly,bitly.com,j.mp
$results = bitly_get('shorten', $params);
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>)</title>
	<meta name="description" content="<?php echo $_ocim->short($row['overview']);?>">
	<meta name="keywords" content="<?php echo $keywords;?>">

	<link rel="icon" type="image/png" href="/favicon.gif">

        <link href="//fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

	<link href="include/css/style.css" rel="stylesheet" type="text/css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function selectText(obj) {      // adapted from Denis Sadowski (via StackOverflow.com)
            if (document.selection) {
                var range = document.body.createTextRange();
                range.moveToElementText(obj);
                range.select();
            }
            else if (window.getSelection) {
                var range = document.createRange();
                range.selectNode(obj);
                window.getSelection().addRange(range);
            }
        }
    </script>
    <style>

h1 {
    text-transform: uppercase;
    color: #4CAF50;
}

p {
    text-indent: 50px;
    letter-spacing: 3px;
    
}

a {
    text-decoration: none;
    color: #008CBA;
}
</style>
</head>
<body>
	<nav class="navbar navbar-custom navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle navbar-default" data-toggle="collapse" data-target="#togglenav">
					<span class="sr-only"></span>
					<i class="fa fa-align-justify"></i>
				</button>
				<a class="navbar-brand" href="<?php echo $_ocim->home_url();?>/desc"><i class="fa fa-film"></i> <?php echo $config->title;?></a>
			</div>
			<div class="collapse navbar-collapse" id="togglenav">
				<form class="navbar-form navbar-left hidden-sm" role="search" action="/desc/search.php" method="GET">
					<div class="form-group">
						<input type="text" name="q" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
				</form>
					
				              <table width="100%" border="1" >
  <tr>
    <th width="27%" align="left" scope="col"><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea3" id="textarea3" cols="50" rows="2" color="red">¦ <?php echo $row['title'];?>  </textarea></th>
    <th width="28%" scope="col"><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea4" id="textarea4" cols="50" rows="2" color="red">[HD~720p] WATCH <?php echo $row['title'];?>  FULL MOVIE ONLINE </textarea></th>
    <th width="45%" scope="col"><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea5" id="textarea5" cols="50" rows="2" color="red"><?php echo $row['title'];?>  </textarea></th>
  </tr>
  <tr>
    <td colspan="3"><table width="100%" border="1">
      <tr>
        <th scope="col"><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="10" rows="2"><?php echo $row['title'];?>  FULL MOVIE ONLINE</textarea>&nbsp;</th>
        <th scope="col"><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="10" rows="2">[HD~720p] <?php echo $row['title'];?>  FULL MOVIE ONLINE</textarea>&nbsp;</th>
        <th scope="col"><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="10" rows="2"><?php echo $row['title'];?>  Online” Free {Putlocker}</textarea>&nbsp;</th>
        <th scope="col"><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="10" rows="2"><?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) - streamtvmovies.net</textarea>&nbsp;</th>
        <th scope="col"><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="10" rows="2">Watch <?php echo $row['title'];?>  #FuLL’Movie’Online</textarea>&nbsp;</th>
        <th scope="col"><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="10" rows="2">Watch <?php echo $row['title'];?>  ‘Full”Movie’ FREE</textarea>&nbsp;</th>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td><table width="309" border="1">
      <tr>
        <th scope="col"><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="10" rows="2"><?php echo $row['title'];?>  ‘[Full’Movie]Online</textarea>&nbsp;</th>
        <th scope="col"><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="10" rows="2"><?php echo $row['title'];?> </textarea>&nbsp;</th>
        <th scope="col"><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="10" rows="2">¦ <?php echo $row['title'];?> ‘FuLL’MoVIE’TORRENT DOWNLOAD</textarea>&nbsp;</th>
        <th scope="col"><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="10" rows="2">¦ <?php echo $row['title'];?> ‘[Full’Movie]Online</textarea>&nbsp;</th>
      </tr>
    </table></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea2" id="textarea2" cols="50" rows="2" color="red">Watch <?php echo $row['title'];?> Full Movies Online

VISIT THIS LINK : [[ <?php echo $short;?> ]]

<?php echo $row['title'];?> Full Movie in HD 1080p, Watch <?php echo $row['title'];?> Full Movie in HD, Watch <?php echo $row['title'];?> Online, <?php echo $row['title'];?> Full Movie, Watch <?php echo $row['title'];?> Full Movie Free Online Streaming

Watch <?php echo $row['title'];?> Full Movie Online Free ,Watch <?php echo $row['title'];?> Full Movie Download Free , Online <?php echo $row['title'];?> Watch Full Movie for Free ,watch <?php echo $row['title'];?> full movies online ,<?php echo $row['title'];?> Full Movie Online HD | Watch Online Movies ,Find <?php echo $row['title'];?> Full Movies Online Instantly? ,<?php echo $row['title'];?> <?php echo $row['title'];?> cast,<?php echo $row['title'];?> <?php echo $row['title'];?> uk release date,<?php echo $row['title'];?> trailer ,<?php echo $row['title'];?> uncharted ,<?php echo $row['title'];?> renegades ,

<?php echo $row['title'];?> Full Movie Megashare
<?php echo $row['title'];?> Full Movie Youtube
<?php echo $row['title'];?> Full Movie Vioz
<?php echo $row['title'];?> Full Movie Putlocker
<?php echo $row['title'];?> Full Movie instanmovie
<?php echo $row['title'];?> Full Movie Dailymotion
<?php echo $row['title'];?> Full Movie IMDB
<?php echo $row['title'];?> Full Movie MOJOboxoffice
<?php echo $row['title'];?> Full Movie Streaming
<?php echo $row['title'];?> Full Movie HD p
<?php echo $row['title'];?> Full Movie HDQ
<?php echo $row['title'];?> Full Movie Megavideo
<?php echo $row['title'];?> Full Movie Tube
<?php echo $row['title'];?> Full Movie Download
<?php echo $row['title'];?> Full Movie Torent
<?php echo $row['title'];?> Full Movie HIGH quality definitons

Watch <?php echo $row['title'];?> Full Movie Megashare
Watch <?php echo $row['title'];?> Full Movie Youtube
Watch <?php echo $row['title'];?> Full Movie Vioz
Watch <?php echo $row['title'];?> Full Movie Putlocker
Watch <?php echo $row['title'];?> Full Movie instanmovie
Watch <?php echo $row['title'];?> Full Movie Dailymotion
Watch <?php echo $row['title'];?> Full Movie IMDB
Watch <?php echo $row['title'];?> Full Movie MOJOboxoffice
Watch <?php echo $row['title'];?> Full Movie tvmuse
Watch <?php echo $row['title'];?> Full Movie wikipedia
Watch <?php echo $row['title'];?> Full Movie streamtvmovies.tk
Watch <?php echo $row['title'];?> Full Movie Streaming
Watch <?php echo $row['title'];?> Full Movie HD 1080p

</textarea>      &nbsp;</td>
    <td><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="50" rows="2" color="red">Watch <?php echo $row['title'];?> Full Movies Online

VISIT THIS LINK : [[ <?php echo $short;?> ]]


<?php echo $row['title'];?> Stuart, Kevin and Bob are recruited by Scarlet Overkill, a super-villain who, alongside her inventor husband Herb, hatches a plot to take over the world.<br><br>

<?php echo $row['title'];?> in HD 1080p, Watch <?php echo $row['title'];?> in HD, Watch <?php echo $row['title'];?> Online, <?php echo $row['title'];?> Full Movie, Watch <?php echo $row['title'];?> Full Movie Free Online Streaming 

Watch <?php echo $row['title'];?> Movies Online Free ,Watch <?php echo $row['title'];?> Online Download Free  , Online <?php echo $row['title'];?> Watch Movies for Free ,watch <?php echo $row['title'];?> full movies online ,<?php echo $row['title'];?> Movies Online HD | Watch Online Movies ,Find <?php echo $row['title'];?> Full Movies Online Instantly? ,<?php echo $row['title'];?> <?php echo $row['title'];?> cast,<?php echo $row['title'];?> <?php echo $row['title'];?> uk release date,<?php echo $row['title'];?> trailer ,<?php echo $row['title'];?> uncharted ,<?php echo $row['title'];?> renegades ,

<?php echo $row['title'];?> Full Movie Megashare
<?php echo $row['title'];?> Full Movie Youtube
<?php echo $row['title'];?> Full Movie Vioz
<?php echo $row['title'];?> Full Movie Putlocker
<?php echo $row['title'];?> Full Movie instanmovie
<?php echo $row['title'];?> Full Movie Dailymotion
<?php echo $row['title'];?> Full Movie IMDB
<?php echo $row['title'];?> Full Movie MOJOboxoffice
<?php echo $row['title'];?> Full Movie Streaming
<?php echo $row['title'];?> Full Movie HD p
<?php echo $row['title'];?> Full Movie HDQ
<?php echo $row['title'];?> Full Movie Megavideo
<?php echo $row['title'];?> Full Movie Tube
<?php echo $row['title'];?> Full Movie Download
<?php echo $row['title'];?> Full Movie Torent
<?php echo $row['title'];?> Full Movie HIGH quality definitons

Watch <?php echo $row['title'];?> Full Movie Megashare 

Watch <?php echo $row['title'];?> Full Movie Youtube 

Watch <?php echo $row['title'];?> Full Movie Vioz 

Watch <?php echo $row['title'];?> Full Movie Putlocker 

Watch <?php echo $row['title'];?> Full Movie instanmovie 

Watch <?php echo $row['title'];?> Full Movie Dailymotion 

Watch <?php echo $row['title'];?> Full Movie IMDB 

Watch <?php echo $row['title'];?> Full Movie MOJOboxoffice

Watch <?php echo $row['title'];?> Full Movie tvmuse

Watch <?php echo $row['title'];?> Full Movie wikipedia

Watch <?php echo $row['title'];?> Full Movie streamtvmovies.tk  

Watch <?php echo $row['title'];?> Full Movie Streaming 

Watch <?php echo $row['title'];?> Full Movie HD 1080p</textarea>&nbsp;</td>
    <td><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="50" rows="2" color="red"><?php echo $row['title'];?>  FULL MOVIE 


[HD~720p] WATCH <?php echo $row['title'];?>  FULL MOVIE ONLINE 

WATCH <?php echo $row['title'];?>  FULL MOVIE ONLINE

<?php echo $row['title'];?>  FULL MOVIE ONLINE

[HD~720p] <?php echo $row['title'];?>  FULL MOVIE ONLINE



<?php echo $row['title'];?>  Online” Free {Putlocker}

Watch <?php echo $row['title'];?>  #FuLL’Movie’Online

Watch <?php echo $row['title'];?>  ‘Full”Movie’ FREE

<?php echo $row['title'];?>  ‘[Full’Movie]Online


¦ <?php echo $row['title'];?> ‘FuLL’MoVIE’TORRENT DOWNLOAD


¦ <?php echo $row['title'];?> ‘[Full’Movie]Online


¦ <?php echo $row['title'];?> 

<?php echo $row['title'];?> 


Watch <?php echo $row['title'];?>  Full Movie HD and 4k videos On Vimeo

VISIT THIS LINK : [[ ##### ]]

<?php echo $row['title'];?> Stuart, Kevin and Bob are recruited by Scarlet Overkill, a super-villain who, alongside her inventor husband Herb, hatches a plot to take over the world.<br><br>

Watch <?php echo $row['title'];?> Full Movie on vimeo HD ,<?php echo $row['title'];?> Full Movie in HD 1080p, <?php echo $row['title'];?> Full Movie on vimeo ,Watch <?php echo $row['title'];?> Full Movie in HD, Watch <?php echo $row['title'];?> Full Movie Online, <?php echo $row['title'];?> Full Movie, Watch <?php echo $row['title'];?> Full Movie Free Online Streaming 

Watch <?php echo $row['title'];?> Movies Online Free ,Watch <?php echo $row['title'];?> Online Download Free  , Online <?php echo $row['title'];?> Watch Movies for Free ,watch <?php echo $row['title'];?> full movies online ,<?php echo $row['title'];?> Full Movies Online HD | Watch Online Movies ,Find <?php echo $row['title'];?> Full Movies Online Instantly? ,<?php echo $row['title'];?> <?php echo $row['title'];?> cast,<?php echo $row['title'];?> <?php echo $row['title'];?> uk release date,<?php echo $row['title'];?> trailer ,<?php echo $row['title'];?> uncharted ,<?php echo $row['title'];?> renegades ,

<?php echo $row['title'];?> Full Movie Megashare
<?php echo $row['title'];?> Full Movie on vimeo
<?php echo $row['title'];?> Full Movie Youtube
<?php echo $row['title'];?> Full Movie Vioz
<?php echo $row['title'];?> Full Movie Putlocker
<?php echo $row['title'];?> Full Movie instanmovie
<?php echo $row['title'];?> Full Movie Dailymotion
<?php echo $row['title'];?> Full Movie IMDB
<?php echo $row['title'];?> Full Movie MOJOboxoffice
<?php echo $row['title'];?> Full Movie Streaming
<?php echo $row['title'];?> Full Movie HD p
<?php echo $row['title'];?> Full Movie HDQ
<?php echo $row['title'];?> Full Movie Megavideo
<?php echo $row['title'];?> Full Movie Tube
<?php echo $row['title'];?> Full Movie Download
<?php echo $row['title'];?> Full Movie Torent
<?php echo $row['title'];?> Full Movie HIGH quality definitons

Watch <?php echo $row['title'];?> Full Movie Megashare 

Watch <?php echo $row['title'];?> Full Movie Youtube 

Watch <?php echo $row['title'];?> Full Movie Vioz 

Watch <?php echo $row['title'];?> Full Movie Putlocker 

Watch <?php echo $row['title'];?> Full Movie instanmovie 

Watch <?php echo $row['title'];?> Full Movie Dailymotion 

Watch <?php echo $row['title'];?> Full Movie IMDB 

Watch <?php echo $row['title'];?> Full Movie MOJOboxoffice

Watch <?php echo $row['title'];?> Full Movie tvmuse

Watch <?php echo $row['title'];?> Full Movie wikipedia

Watch <?php echo $row['title'];?> Full Movie streamtvmovies.tk  

Watch <?php echo $row['title'];?> Full Movie Streaming 

Watch <?php echo $row['title'];?> Full Movie HD 1080p

Watch <?php echo $row['title'];?> Full Movie on vimeo</textarea>&nbsp;</td>
  </tr>
  <tr>
    <td><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="50" rows="2" color="red"><?php echo $row['title'];?>  Full Movie Streaming Online in HD-720p Video Quality

91 Min | 4K ULTRAHD | FULL HD (1080p) | FREE TRIAL

VISIT THIS LINK : <?php echo $short;?>

<?php echo $row['title'];?> Stuart, Kevin and Bob are recruited by Scarlet Overkill, a super-villain who, alongside her inventor husband Herb, hatches a plot to take over the world.
<?php echo $row['title'];?> in HD 1080p, Watch <?php echo $row['title'];?> in HD, Watch <?php echo $row['title'];?> Online, <?php echo $row['title'];?> Full Movie, Watch <?php echo $row['title'];?> Full Movie Free Online Streaming 

<?php echo $row['title'];?> Full Movie

Watch <?php echo $row['title'];?>  Full Movie Online

<?php echo $row['title'];?>  Full Movie

Where to Download <?php echo $row['title'];?>  Full Movie ?

Watch <?php echo $row['title'];?> Full Movie

Watch <?php echo $row['title'];?> Full Movie Online

Watch <?php echo $row['title'];?> Full Movie HD 1080p

<?php echo $row['title'];?>  Full Movie

          </textarea>&nbsp;</td>
    <td><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea6" id="textarea6" cols="50" rows="2" color="red"><?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie FREE, Download <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie, <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie Online, <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie, <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Movie Online ( HD Streaming and Download ), <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie Online (English Subtitle) Director: Paul Greengrass, Christopher Rouse

PLAY HERE [[ VISIT THIS LINK : <?php echo $short;?> ]]
DOWNLOAD HERE [[ VISIT THIS LINK : <?php echo $short;?> ]]

<?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie FREE
#<?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie
Download <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie
<?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie Online
<?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie
<?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Movie Online ( HD Streaming and Download ),
<?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie Online (English Subtitle)
Watch <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie FREE
Watch <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie Online
Watch <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie HD Streaming Online
Watch <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie Torrent
Watch <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie Putlocker
Watch <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie HD Torrent
Watch <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie Online HD Hindi Subtitle
Watch <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie in French
Watch <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie
Download <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie HD
Watch <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> <?php echo date('Y', strtotime($row['air_date']));?> [[Full Movie]]
Watch <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie Streaming FREE Online HD
Watch <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie <?php echo date('Y', strtotime($row['air_date']));?> BoxOffice
<?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie HD Subtitles English Free
<?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> #FuLL Movie (Online) (Free) (English)(HD)

          </textarea>      &nbsp;</td>
    <td><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="50" rows="2" color="red"><?php echo $row['title'];?>  Full Movie Streaming Online in HD-720p Video Quality

91 Min | 4K ULTRAHD | FULL HD (1080p) | FREE TRIAL

VISIT THIS LINK : <?php echo $short;?>

<?php echo $row['title'];?> Stuart, Kevin and Bob are recruited by Scarlet Overkill, a super-villain who, alongside her inventor husband Herb, hatches a plot to take over the world.<br><br>

<?php echo $row['title'];?> in HD 1080p, Watch <?php echo $row['title'];?> in HD, Watch <?php echo $row['title'];?> Online, <?php echo $row['title'];?> Full Movie, Watch <?php echo $row['title'];?> Full Movie Free Online Streaming 

Watch <?php echo $row['title'];?> Movies Online Free ,Watch <?php echo $row['title'];?> Online Download Free  , Online <?php echo $row['title'];?> Watch Movies for Free ,watch <?php echo $row['title'];?> full movies online ,<?php echo $row['title'];?> Movies Online HD | Watch Online Movies ,Find <?php echo $row['title'];?> Full Movies Online Instantly? ,<?php echo $row['title'];?> <?php echo $row['title'];?> cast,<?php echo $row['title'];?> <?php echo $row['title'];?> uk release date,<?php echo $row['title'];?> trailer ,<?php echo $row['title'];?> uncharted ,<?php echo $row['title'];?> renegades ,

<?php echo $row['title'];?>  Megashare
<?php echo $row['title'];?>  Youtube
<?php echo $row['title'];?>  Vioz
<?php echo $row['title'];?>  Putlocker
<?php echo $row['title'];?>  instanmovie
<?php echo $row['title'];?>  Dailymotion
<?php echo $row['title'];?>  IMDB
<?php echo $row['title'];?>  MOJOboxoffice
<?php echo $row['title'];?>  Streaming
<?php echo $row['title'];?>  HD p
<?php echo $row['title'];?>  HDQ
<?php echo $row['title'];?>  Megavideo
<?php echo $row['title'];?>  Tube
<?php echo $row['title'];?>  Download
<?php echo $row['title'];?>  Torent
<?php echo $row['title'];?>  HIGH quality definitons

Watch <?php echo $row['title'];?>  Megashare 

Watch <?php echo $row['title'];?>  Youtube 

Watch <?php echo $row['title'];?>  Vioz  

Watch <?php echo $row['title'];?>  Putlocker 

Watch <?php echo $row['title'];?>  instanmovie 

Watch <?php echo $row['title'];?>  Dailymotion 

Watch <?php echo $row['title'];?>  IMDB 

Watch <?php echo $row['title'];?>  MOJOboxoffice

Watch <?php echo $row['title'];?>  tvmuse

Watch <?php echo $row['title'];?>  wikipedia

Watch <?php echo $row['title'];?>  streamtvmovies.tk  

Watch <?php echo $row['title'];?>  Streaming 

Watch <?php echo $row['title'];?>  HD 1080p</textarea>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="30" rows="2"><?php echo $row['title'];?> Full Movie ,

Watch <?php echo $row['title'];?>  Full Movie Online ,

<?php echo $row['title'];?>  Full Movie Streaming Online in HD-720p Video Quality ,

<?php echo $row['title'];?>  Full Movie ,

Where to Download <?php echo $row['title'];?>  Full Movie ? ,

Watch <?php echo $row['title'];?> Full Movie ,

Watch <?php echo $row['title'];?> Full Movie Online ,

Watch <?php echo $row['title'];?> Full Movie HD 1080p ,

<?php echo $row['title'];?>  Full Movie

          </textarea>&nbsp;<textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="30" rows="2"><?php echo $row['title'];?> Watch online on vimeo

CLICK HERE :: <?php echo $short;?>
CLICK HERE :: <?php echo $short;?>
<?php echo $row['title'];?>  Online Free Full Movie HD, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Online Free Full Movie Putlocker Live Stream, Watch <?php echo $row['title'];?>  Online, <?php echo $row['title'];?>  Watch Online, Watch <?php echo $row['title'];?> Live Stream, Watch <?php echo $row['title'];?> Online,Watch!! <?php echo $row['title'];?> Watch Online Free, Download <?php echo $row['title'];?>, Full-Lenght <?php echo $row['title'];?> Film, <?php echo $row['title'];?> Torrent Download,[DVDRip] WATCH <?php echo $row['title'];?>  ONLINE FULL Movie.. full.. movie.. Str.eam.ing.. onl.i.n.e. free online
<?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) - IMDb, <?php echo $row['title'];?> | Movies, <?php echo $row['title'];?>, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) - Rotten Tomatoes, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) | Fandango, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) - Movie | Movie.fone, <?php echo $row['title'];?> Movie Review - Best Movies, Books ... '<?php echo $row['title'];?>' () Final Trailer - Movie ... <?php echo $row['title'];?> Official Trailer #2 () - Charlize Theron, Rooney Mara Animated Movie HD, <?php echo $row['title'];?> - Movie Trailers - Tunes, AMC Theatres: <?php echo $row['title'];?>, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Movie Photos and Stills ... <?php echo $row['title'];?> News | Movie News | Movies. com, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Movie Trailer | Movie-full. com, <?php echo $row['title'];?> Official Teaser Trailer #1 () - Rooney Mara Animated Movie HD, <?php echo $row['title'];?> - Trailers & Videos - Rotten Tomatoes, <?php echo $row['title'];?> Movie Trailer - Watch at CS! OJO COPAS AE TO COKDJANCOK | OFFICIAL SITE | IN CINEMAS ... New <?php echo $row['title'];?> Trailer Takes You to a New World, <?php echo $row['title'];?> Movie | Official, Enter for a Chance to Win a Magical Trip Laika Studios. <?php echo $row['title'];?> | Movie Tickets & Showtimes ... <?php echo $row['title'];?> Reviews - Metacritic, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) - The Movie Database (TMDb), <?php echo $row['title'];?> - Official Final Trailer ( ...<?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) online Film watch, watch <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Film online, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Disney online Film, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>), watch online <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Disney in hindi, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Film free Film, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Disney online full Film, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) hd full Film in hindi, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) free online, watch <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Film online, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Disney free full Film download , <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Film Film clip, watch <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Disney , download <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) , <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Film free online Film, watch <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Disney online full Film, download <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Disney free, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) full Film part 2, watch Film <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Film , <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Disney full Film in hindi, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Film complete Film in hindi , <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Film Film download, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Film Film part 2, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) part 1 full Film, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) free online watch, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Film free full Film, free <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Film Film, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Disney Film clips, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Film free, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) full Film part 1, free <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) Disney full Film, <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) full Film free download, watch online <?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>) full Film,Watch NOW!! <?php echo $row['title'];?> Online Free, Watch <?php echo $row['title'];?> Full Movie, Watch <?php echo $row['title'];?>  Full Movie Free Streaming Online with English Subtitles ready for download, <?php echo $row['title'];?>  720p, 1080p, BrRip, DvdRip, High Quality</textarea></td>
    <td><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="30" rows="2">Watch <?php echo $row['title'];?>  ,<?php echo $row['title'];?> Full Movie Online Free ,Watch <?php echo $row['title'];?> Full Movie Download Free , Online <?php echo $row['title'];?> Watch Full Movie for Free ,watch <?php echo $row['title'];?> full movies online ,<?php echo $row['title'];?> Full Movie Online HD | Watch Online Movies ,Find <?php echo $row['title'];?> Full Movies Online Instantly? ,<?php echo $row['title'];?> <?php echo $row['title'];?> cast,<?php echo $row['title'];?> <?php echo $row['title'];?> uk release date,<?php echo $row['title'];?> trailer ,<?php echo $row['title'];?> uncharted ,<?php echo $row['title'];?> renegades ,

91 Min | 4K ULTRAHD | FULL HD (1080p) | FREE TRIAL

VISIT THIS LINK : [[ <?php echo $short;?> ]]

<?php echo $row['title'];?> Stuart, Kevin and Bob are recruited by Scarlet Overkill, a super-villain who, alongside her inventor husband Herb, hatches a plot to take over the world.

<?php echo $row['title'];?> Full Movie in HD 1080p, Watch <?php echo $row['title'];?> Full Movie in HD, Watch <?php echo $row['title'];?> Online, <?php echo $row['title'];?> Full Movie, Watch <?php echo $row['title'];?> Full Movie Free Online Streaming

<?php echo $row['title'];?> in HD 1080p, Watch <?php echo $row['title'];?> in HD, Watch <?php echo $row['title'];?> Online, <?php echo $row['title'];?> Full Movie, Watch <?php echo $row['title'];?> Full Movie Free Online Streaming 

<?php echo $row['title'];?> Full Movie

Watch <?php echo $row['title'];?>  Full Movie Online

<?php echo $row['title'];?>  Full Movie

Where to Download <?php echo $row['title'];?>  Full Movie ?

Watch <?php echo $row['title'];?> Full Movie

Watch <?php echo $row['title'];?> Full Movie Online

Watch <?php echo $row['title'];?> Full Movie HD 1080p

<?php echo $row['title'];?>  Full Movie

          </textarea>&nbsp;</td>
    <td><textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea1" id="textarea1" cols="30" rows="2">[[Watch]] <?php echo $row['title'];?>  Full movie , <?php echo $row['title'];?> Full movie <?php echo $row['title'];?> Online Free . Watch Now!! <?php echo $row['title'];?> Online Video<?php echo $row['title'];?> (2010)” submitted just now by . {watchtvmovies . Status in the third film, in which Batman will play Oscar champ 

WATCH NOW : [[ <?php echo $short;?> ]]

DOWNLOAD NOW : [[ <?php echo $short;?> ]]

Watch <?php echo $row['title'];?> Online Free Full Movie Putlocker <?php echo $row['title'];?> (2010), <?php echo $row['title'];?> .<?php echo $row['title'];?> (2010):  

Watch <?php echo $row['title'];?> Free Movie Watch <?php echo $row['title'];?> Movie Online, Download <?php echo $row['title'];?> <?php echo date('Y', strtotime($row['air_date']));?> Full Movie Online Free DVDRip HD Watch <?php echo $row['title'];?> Full Movie Free Online Watch <?php echo $row['title'];?> Online Dailymotion 

Watch ‘<?php echo $row['title'];?> watchtvmovies Inc 2 Movie Vids Movie watchING Putlocker 1080 p*WATCH[<?php echo $row['title'];?> (2010): ]Full Movie watchING Online Free HD Download <?php echo $row['title'];?> Online My <?php echo $row['title'];?> online Putlocker1080 Download My <?php echo $row['title'];?> movie720p My Big Fat Greek Wedding My <?php echo $row['title'];?> (full “movie) torrent Download Video for Watch My <?php echo $row['title'];?> Download 

<?php echo $row['title'];?> Megashare
<?php echo $row['title'];?> Youtube
<?php echo $row['title'];?> Vioz
<?php echo $row['title'];?> Putlocker
<?php echo $row['title'];?> instanmovie
<?php echo $row['title'];?> Dailymotion
<?php echo $row['title'];?> IMDB
<?php echo $row['title'];?> MOJOboxoffice
<?php echo $row['title'];?> watching
<?php echo $row['title'];?> HD p
<?php echo $row['title'];?> HDQ
<?php echo $row['title'];?> Megavideo
<?php echo $row['title'];?> Tube
<?php echo $row['title'];?> Download
<?php echo $row['title'];?> Torent
<?php echo $row['title'];?> HIGH quality definitons
<?php echo $row['title'];?> Mediafire
<?php echo $row['title'];?> Shared
<?php echo $row['title'];?> Full Movie
<?php echo $row['title'];?> Full
<?php echo $row['title'];?> watching Full
<?php echo $row['title'];?> HDQ full
<?php echo $row['title'];?> Download Subtitle
<?php echo $row['title'];?> Subtitle English
<?php echo $row['title'];?> Download Full
<?php echo $row['title'];?> watching 

Watch <?php echo $row['title'];?> Megashare 

Watch <?php echo $row['title'];?> Youtube 

Watch <?php echo $row['title'];?> Vioz 

Watch <?php echo $row['title'];?> Putlocker 

Watch <?php echo $row['title'];?> instanmovie 

Watch <?php echo $row['title'];?> Dailymotion 

Watch <?php echo $row['title'];?> IMDB 

Watch <?php echo $row['title'];?> MOJOboxoffice

Watch <?php echo $row['title'];?> tvmuse

Watch <?php echo $row['title'];?> wikipedia

Watch <?php echo $row['title'];?> watchtvmovies.tk  

Watch <?php echo $row['title'];?> watching 

Watch <?php echo $row['title'];?> HD 1080p

<?php echo $row['title'];?> Full Movie ,<?php echo $row['title'];?> Full Movie Online ,<?php echo $row['title'];?> Full movie free ,Watch <?php echo $row['title'];?> Full Movie ,Watch <?php echo $row['title'];?> Full Movie Online , Watch <?php echo $row['title'];?> Full movie free
                        </textarea>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
			</div>
		</div>
	</nav>		

					
				<ul class="nav navbar-nav navbar-left navbar-right">
	  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-film"></i> Movie <span class="caret"></span>
						</a>
                                                <ul class="dropdown-menu" role="menu">
							<li><a href="/desc/"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="/desc/playing"><i class="fa fa-dot-circle-o"></i> Now Playing</a></li>
							<li><a href="/desc/toprated"><i class="fa fa-list-alt"></i> Top Rated</a></li>
							<li><a href="/desc/upcoming"><i class="fa fa-star-half-o"></i> Upcoming</a></li>
                                                </ul>
				  </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-file-video-o"></i> TV Show<span class="caret"></span>
						</a>
                                                <ul class="dropdown-menu" role="menu">
							<li><a href="/desc/tv"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="/desc/airing"><i class="fa fa-dot-circle-o"></i> TV shows Airing</a></li>
							<li><a href="/desc/ontheair"><i class="fa fa-list-alt"></i> On the Air</a></li>
							<li><a href="/desc/popular"><i class="fa fa-star-half-o"></i> Popular TV Series</a></li>
                                                </ul>
					</li>
			  </ul>
			</div>
		</div>
	</nav>		
		
	<div class="container box-container">

		<div class="row">

		<div class="col-md-12">

			<div class="choice-menu">
				<a class="btn btn-success" href="/">Home</a>
				<a class="btn btn-primary active" href="./">Description</a>
			</div>

			<h1 class="text-center media-heading"><?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>)</h1>

			<div class="row" style="margin-top:25px;">
			<div class="col-md-12">
			        <div class="row">
				<div class="col-sm-4 col-xs-12">
					<img src="<?php echo $images;?>" alt="<?php echo $row['title'];?> (<?php echo date('Y', strtotime($row['air_date']));?>)" class="img-responsive thumbnail" style="margin:0 auto;">
                                        <div class="text-center">
                                                <label>Big Images Random</label>
                                                <textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"class="form-control"><?php echo $images;?></textarea>
                                                <label>Small Images</label>
                                                <textarea style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"class="form-control"><?php echo $images_small;?></textarea>

                                        </div>

				</div>
				<div class="col-sm-8 col-xs-12">

<table class="table table-striped">
						<thead><caption class="text-center">Title Generate</caption></thead>
                                                <tbody>	
							<tr>
								<td><?php echo $row['title'];?> Full Movie<br>
Watch <?php echo $row['title'];?>  Full Movie Online<br>
<?php echo $row['title'];?>  Full Movie Streaming Online in HD-720p Video Quality<br>
<?php echo $row['title'];?>  Full Movie<br>
Where to Download <?php echo $row['title'];?>  Full Movie ?<br>
Watch <?php echo $row['title'];?> Full Movie<br>
Watch <?php echo $row['title'];?> Full Movie Online<br>
Watch <?php echo $row['title'];?> Full Movie HD 1080p<br>
<?php echo $row['title'];?>  Full Movie</td>

							</tr>
 			                        </tbody>
					</table>
					<table class="table table-striped">
						<thead><caption class="text-center">Description Generate</caption></thead>
                                                <tbody>	
							<tr>
								<td onClick="selectText(this);">
Watch <?php echo $row['title'];?> Full Movies Online Free HD @ <?php echo $short;?><br><br>
<?php echo $row['title'];?> Official Teaser Trailer #1 () - Sandra Bullock Universal Pictures Movie HD<br><br>
Movie Synopsis:<br>
<?php echo $row['title'];?> Stuart, Kevin and Bob are recruited by Scarlet Overkill, a super-villain who, alongside her inventor husband Herb, hatches a plot to take over the world.<br><br>
<?php echo $row['title'];?> in HD 1080p, Watch <?php echo $row['title'];?> in HD, Watch <?php echo $row['title'];?> Online, <?php echo $row['title'];?> Full Movie, Watch <?php echo $row['title'];?> Full Movie Free Online Streaming </td>
							</tr>
 			                        </tbody>
					</table>
					<table class="table table-striped">
                                                <tbody>
							<tr><th width="150">Title</th><td>:</td><td><?php echo $row['title'];?></td></tr>
							<tr><th>Original Title</th><td>:</td><td><?php echo $row['title'];?></td></tr>
							<tr><th>Target URL:</th><td>:</td><td> <?php echo $results['data']['url'];?></td></tr>
							<tr><th>Target short URL:</th><td>:</td><td> <?php echo $short;?></td></tr>
 			                        </tbody>
					</table>
				</div>
				</div>
			</div>
			
			</div>
		</div>

		</div>
	</div>
		</div>
	</div>
<?php include('footer.php');?>