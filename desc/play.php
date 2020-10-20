<?php 
require_once('config.php');
require_once('include/tvseries.php');
//$short = $_ocim->home_url() .'/?do=play&id='. $id;
$short = seo_tv( $id, $row['name'] ) ;

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

	<title><?php echo $row['name'];?><?php echo $desc_title;?></title>
	<meta name="description" content="<?php echo $_ocim->short($row['overview']);?>">
	<meta name="keywords" content="<?php echo $keywords;?>">

	<link rel="icon" type="image/png" href="/favicon.gif">

        <link href="https://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
		
	<link href="include/css/style.css" rel="stylesheet" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> 
		<script src="https://oss.maxcdn.com/respond/1.3/respond.min.js"></script>
	<![endif]-->

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
</head>
<body>
  <nav class="navbar navbar-custom navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle navbar-default" data-toggle="collapse" data-target="#togglenav">
          <span class="sr-only"></span>
          <i class="fa fa-align-justify"></i>
        </button>
        <a class="navbar-brand" href="#"><i class="fa fa-film"></i> <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?></a>
      </div>
      <div class="collapse navbar-collapse" id="togglenav">
                  
        <ul class="nav navbar-nav navbar-left navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <i class="fa fa-file-video-o"></i> Deskripsi<span class="caret"></span>
            </a>
                                                <ul class="dropdown-menu" role="menu">
                            <li><tr><td></td><td align=right><a href="/desc/" class="fa fa-home" target="_blank" > Home</a></td></tr></li>
                            <li><tr><td></td><td align=right><a href="/desc/airing" class="fa fa-dot-circle-o" target="_blank" > Airing Today</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="/desc/ontheair" class="fa fa-list-alt" target="_blank" > On the Air</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="/desc/popular" class="fa fa-star-half-o" target="_blank" > Popular TV Series</a></td></tr></li>
                                                </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <i class=""></i>Short Link<span class="caret"></span>
            </a>
                                                <ul class="dropdown-menu" role="menu">
              <li><tr><td></td><td align=right><a href="https://v.ht" class="" target="_blank" >VHT</a></td></tr></li>
                            <li><tr><td></td><td align=right><a href="https://goo.gl/" class="" target="_blank" >GOOGLE</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://tinyurl.com/" class="" target="_blank" >TINYURL</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://is.gd" class="" target="_blank" >ISGD</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://bitly.com" class="" target="_blank" >BITLY</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://ow.ly/url/shorten-url" class="" target="_blank" >OWLY</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://bit.do/" class="" target="_blank" >BITDO</a></td></tr></li>
                            <li><tr><td></td><td align=right><a href="https://www.mcaf.ee/" class="" target="_blank" >MC AFEE</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://gg.gg/" class="" target="_blank" >GG.GG</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://de.tk/" class="" target="_blank" >DETIK</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://kro.co/" class="" target="_blank" >KROCO</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://tr.im/" class="" target="_blank" >TRIM</a></td></tr></li>
                                                </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <i class=""></i>Referensi Film<span class="caret"></span>
            </a>
                                                <ul class="dropdown-menu" role="menu">
              <li><tr><td></td><td align=right><a href="https://thetvdb.com/" class="" target="_blank" >CARI FOTO TV</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://www.tvmuse.com" class="" target="_blank" >TV MUSE</a></td></tr></li>
                            <li><tr><td></td><td align=right><a href="https://www.sidereel.com" class="" target="_blank" >SIDEREEL</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://www.airdates.tv" class="" target="_blank" >AIRDATES</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://next-episode.net" class="" target="_blank" >NEXT EPISODE</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://www.rottentomatoes.com" class="" target="_blank" >ROTTEN TOMATOES</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://trakt.tv" class="" target="_blank" >TRAKT TV</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://www.imdb.com" class="" target="_blank" >IMDB</a></td></tr></li>                         
              <li><tr><td></td><td align=right><a href="https://www.themoviedb.org/?language=en" class="" target="_blank" >TMDB</a></td></tr></li> 
                                  </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <i class=""></i>Pelengkap<span class="caret"></span>
            </a>
                                                <ul class="dropdown-menu" role="menu">
              <li><tr><td></td><td align=right><a href="https://histats.com/" class="" target="_blank" >Histats</a></td></tr></li>                                                 
                            <li><tr><td></td><td align=right><a href="https://www.blogger.com" class="" target="_blank" >BLOGGER</a></td></tr></li>
                            <li><tr><td></td><td align=right><a href="https://www.youtube.com/watch?v=lhDPQYdhwfo" class="" target="_blank" >Tutorial Blogspot</a></td></tr></li>
                            <li><tr><td></td><td align=right><a href="https://giphy.com/" class="" target="_blank" >Giphy</a></td></tr></li>
                            <li><tr><td></td><td align=right><a href="https://www.flickr.com/" class="" target="_blank" >Flickr</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://imgur.com/" class="" target="_blank" >Imgur</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://s5.photobucket.com/" class="" target="_blank" >Photobucket</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://www.panoramio.com/" class="" target="_blank" >Panoramio</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://twitpic.com/" class="" target="_blank" >Twitpic</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://twitter.com" class="" target="_blank" >Twitter</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://plus.google.com/" class="" target="_blank" >Google Plus</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://www.linkedin.com/" class="" target="_blank" >Linkedin</a></td></tr></li>                                                 
                            <li><tr><td></td><td align=right><a href="https://www.pinterest.com/" class="" target="_blank" >Pinterest</a></td></tr></li>
                            <li><tr><td></td><td align=right><a href="https://vimeo.com/" class="" target="_blank" >Vimeo</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://www.dailymotion.com/" class="" target="_blank" >DailyMotion</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://www.metacafe.com/" class="" target="_blank" >Metacafe</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://digg.com/" class="" target="_blank" >Digg</a></td></tr></li>                                                 
                            <li><tr><td></td><td align=right><a href="https://www.stumbleupon.com/" class="" target="_blank" >Stumbleupon</a></td></tr></li>
                            <li><tr><td></td><td align=right><a href="https://reddit.com/" class="" target="_blank" >Reddit</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://www.diigo.com/" class="" target="_blank" >Diigo</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://www.scoop.it/" class="" target="_blank" >Scoop it</a></td></tr></li>
              <li><tr><td></td><td align=right><a href="https://www.newsvine.com/" class="" target="_blank" >Newsvine</a></td></tr></li>                                                 
                            <li><tr><td></td><td align=right><a href="https://inbound.org" class="" target="_blank" >Inbound</a></td></tr></li>
                            <li><tr><td></td><td align=right><a href="https://www.bloglovin.com/" class="" target="_blank" >Bloglovin</a></td></tr></li>
              
                                                </ul>
        </ul>
      </div>
    </div>
  </nav>    
    
  <div class="container box-container">

    <div class="row">

    <div class="col-md-12">

      <div class="choice-menu">
        <form class="navbar-form navbar-left hidden-sm" role="search" action="/desc/search.php" method="GET">
          <div class="form-group">
            <input type="text" name="q" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        </form>
        
      </div>
      <div class="row">
<div class="col-md-5 item">
                          <div id="google_translate_element"></div><script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
      }
      </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                      </div>
                      <table width="<?php echo $row3['season_number'];?>0%" border="0">
  <tr>
    <th colspan="7" scope="col"><div></div></th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col"><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea5" cols="17" rows="2" class="bg-primary" id="textarea4">One Click Link Below You Can Watch
►► <?php echo $short;?>

Play Now: <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online
►► <?php echo $short;?>

Full-watch! <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> online FOX 2017,Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online. Genre: <?php echo $genre;?> "Title: Series <?php echo $row3['season_number'];?>, Episode <?php echo $row3['episode_number'];?>" One Click Link Below You Can Watching Television Series From tv.xride-hd Free Download <?php echo $row['name'];?> S0<?php echo $row3['season_number'];?>E<?php echo $row3['episode_number'];?> <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Show <?php echo $row['name'];?> <?php echo $row3['season_number'];?>X<?php echo $row3['episode_number'];?> Full Video Quality HD Streaming <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Live.

Release:  <?php echo date('d F Y', strtotime($row3['air_date']));?>.
Summary: <?php echo $overview;?>

Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Download, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Free, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Live, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Show, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Streaming, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Video HD.

Genre: <?php echo $genre;?>.  
Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?> . 
Season Number: <?php echo $row3['season_number'];?>.  
Episodes Number: <?php echo $row3['episode_number'];?> . 
First Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?>.
Last Air Date: <?php echo date('d F Y', strtotime($row['last_air_date']));?> .
Runtime: <?php echo $runtime;?> min</textarea>      
    &nbsp;FB-1</th>
    <th width="1%" scope="col">&nbsp;</th>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col"><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea2" cols="17" rows="2" class="bg-primary" id="textarea">One Click Link Below You Can Watch
►► <?php echo $short;?>

Play Now: <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online
►► <?php echo $short;?>

Full-watch! <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> online FOX 2017,Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online. Genre: <?php echo $genre;?> "Title: Series <?php echo $row3['season_number'];?>, Episode <?php echo $row3['episode_number'];?>" One Click Link Below You Can Watching Television Series From tv.xride-hd Free Download <?php echo $row['name'];?> S0<?php echo $row3['season_number'];?>E<?php echo $row3['episode_number'];?> <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Show <?php echo $row['name'];?> <?php echo $row3['season_number'];?>X<?php echo $row3['episode_number'];?> Full Video Quality HD Streaming <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Live.

Release:  <?php echo date('d F Y', strtotime($row3['air_date']));?>.
Summary: <?php echo $overview;?>

Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Download, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Free, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Live, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Show, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Streaming, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Video HD.

Genre: <?php echo $genre;?>.  
Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?> . 
Season Number: <?php echo $row3['season_number'];?>.  
Episodes Number: <?php echo $row3['episode_number'];?> . 
First Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?>.
Last Air Date: <?php echo date('d F Y', strtotime($row['last_air_date']));?> .
Runtime: <?php echo $runtime;?> min

<?php echo $row['name'];?> S<?php echo $row3['season_number'];?>E<?php echo $row3['episode_number'];?> 
<?php echo $row['name'];?> S<?php echo $row3['season_number'];?>E0<?php echo $row3['episode_number'];?> 
<?php echo $row['name'];?> SE<?php echo $row3['season_number'];?>EP0<?php echo $row3['episode_number'];?> 
<?php echo $row['name'];?> S0<?php echo $row3['season_number'];?>E0<?php echo $row3['episode_number'];?> 
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> release date
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> Air date
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> Sneek peek</textarea>
    &nbsp;FB-2</th>
    <th width="1%" scope="col">&nbsp;</th>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col"><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="2" class="bg-primary" id="textarea9">Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> ►► 

Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> (2017) Full Episode Online, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>, 720p, <?php echo $row3['season_number'];?>80p, BrRip, DvdRip, CapRip, Telesyc, High Quality, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online, One Click Link Below You Can Watching From HD Special tv.moviehdvideo Free Download, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Free, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Download, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Movie, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Mega-HD, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full HD, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Free, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> New Online.

Genre: <?php echo $genre;?>.  
Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?> . 
Season Number: <?php echo $row3['season_number'];?>.  
Episodes Number: <?php echo $row3['episode_number'];?> . 
First Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?>.
Last Air Date: <?php echo date('d F Y', strtotime($row['last_air_date']));?> .
Runtime: <?php echo $runtime;?> min

Stars : <?php echo $overview;?>

Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Bluray, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Download, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Putlocker, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Live Stream, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Youtube, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Streaming, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Mega HD Video.

<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full Episode,Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>  Watch Online,<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>  Sneep Peek,Where to Download : <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>  Air Date,Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full Episode,Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full Episode Online,Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full Episode HD <?php echo $row3['season_number'];?>80p,<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>  Full Episode</textarea>
    &nbsp;FB-<?php echo $row3['episode_number'];?></th>
    <th width="1%" scope="col">&nbsp;</th>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col"><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="2" class="bg-primary" id="textarea9">Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> ►► 

Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> (2017) Full . Movie Online, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>, 720p, <?php echo $row3['season_number'];?>80p, BrRip, DvdRip, CapRip, Telesyc, High Quality, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online, One Click Link Below You Can Watching From HD Special tv.moviehdvideo Free Download, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Free, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Download, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Movie, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Mega-HD, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full HD, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Free, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> New Online.

Genre: <?php echo $genre;?>.  
Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?> . 
Season Number: <?php echo $row3['season_number'];?>.  
Episodes Number: <?php echo $row3['episode_number'];?> . 
First Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?>.
Last Air Date: <?php echo date('d F Y', strtotime($row['last_air_date']));?> .
Runtime: <?php echo $runtime;?> min

Stars : <?php echo $overview;?>

Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Bluray, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Download, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Putlocker, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Live Stream, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Youtube, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Streaming, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Mega HD Video.</textarea>
    &nbsp;FB-4</th>
    <th width="41%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="2" class="btn-primary" id="textarea9">One Click Link Below You Can Watch
►► <?php echo $short;?>

Play Now: <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online
►► <?php echo $short;?>

Full-watch! <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> online FOX 2017,Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online. Genre: <?php echo $genre;?> "Title: Series <?php echo $row3['season_number'];?>, Episode <?php echo $row3['episode_number'];?>" One Click Link Below You Can Watching Television Series From tv.xride-hd Free Download <?php echo $row['name'];?> S0<?php echo $row3['season_number'];?>E<?php echo $row3['episode_number'];?> <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Show <?php echo $row['name'];?> <?php echo $row3['season_number'];?>X<?php echo $row3['episode_number'];?> Full Video Quality HD Streaming <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Live.

Release:  <?php echo date('d F Y', strtotime($row3['air_date']));?>.
Summary: <?php echo $overview;?>

Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Download, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Free, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Live, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Show, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Streaming, Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Video HD.

Genre: <?php echo $genre;?>.  
Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?> . 
Season Number: <?php echo $row3['season_number'];?>.  
Episodes Number: <?php echo $row3['episode_number'];?> . 
First Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?>.
Last Air Date: <?php echo date('d F Y', strtotime($row['last_air_date']));?> .
Runtime: <?php echo $runtime;?> min

<?php echo $row['name'];?> S<?php echo $row3['season_number'];?>E<?php echo $row3['episode_number'];?> 
<?php echo $row['name'];?> S<?php echo $row3['season_number'];?>E0<?php echo $row3['episode_number'];?> 
<?php echo $row['name'];?> SE<?php echo $row3['season_number'];?>EP0<?php echo $row3['episode_number'];?> 
<?php echo $row['name'];?> S0<?php echo $row3['season_number'];?>E0<?php echo $row3['episode_number'];?> 
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> release date
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> Air date
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> Sneek peek
    </textarea>
    &nbsp;FB-5</td>
    <td>&nbsp;</td>
    <td><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="2" class="btn-primary" id="textarea9"><?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> release date,<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Air date,<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full,<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Sneek peek,<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> preview,

Visit This Link: <?php echo $short;?> ,

<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Promo,<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Details,<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> cast<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> streaming,<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> online,

<?php echo $row['name'];?> S<?php echo $row3['season_number'];?>E<?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> S<?php echo $row3['season_number'];?>E0<?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> SE<?php echo $row3['season_number'];?>EP0<?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> S0<?php echo $row3['season_number'];?>E0<?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> release date
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> Air date
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> Sneek peek

<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> release date
<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Air date
<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full
<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Sneek peek
<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> preview
<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Promo
<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Details
<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> cast
<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> streaming
<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> online

<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> upcoming

<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Airing today

<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> on the air

<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> tiang listrik

<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Popular

<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> now playing

<?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Top Rated
    </textarea>
    &nbsp;FB-6</td>
    <td>&nbsp;</td>
    <td><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea<?php echo $row3['episode_number'];?>" cols="17" rows="2" class="bg-primary" id="textarea2"><?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> .
W-a-t-c-h F-u-l-l Episode Visit  @ <?php echo $short;?> .

Film Info : 
enre: <?php echo $genre;?>.  
Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?> . 
Season Number: <?php echo $row3['season_number'];?>.  
Episodes Number: <?php echo $row3['episode_number'];?> . 
First Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?>.
Last Air Date: <?php echo date('d F Y', strtotime($row['last_air_date']));?> .
Runtime: <?php echo $runtime;?> min

watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> , Download <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> , watch Full <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> , Live <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> .

<?php echo $row['name'];?>
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> S<?php echo $row3['season_number'];?>.E<?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Ep-<?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Free
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Pilot
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Recap
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Trailer
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Promo
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Ending
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full HD
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Preview
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Extended
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> FULL EPISODE

Hey all! This is just a little intro but I'm excited to begin this journey with you all. Please leave your comments
and thoughts down below, subscribe and thanks for watching!

We will post all videos related to movies and tv shows. Most of the credits go to the makers of the tv shows and movies
that I used in this video.</textarea>
      &nbsp;FB-7</td>
    <td>&nbsp;</td>
    <td><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="2" class="btn-primary" id="textarea9">One Click Link Below You Can Watch
►► <?php echo $short;?>

Play Now: <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online
►► <?php echo $short;?>
Film Info : 
enre: <?php echo $genre;?>
Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?> 

Season Number: <?php echo $row3['season_number'];?>
Episodes Number: <?php echo $row3['episode_number'];?>
First Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?>
Last Air Date: <?php echo date('d F Y', strtotime($row['last_air_date']));?> 

Runtime: <?php echo $runtime;?> min

<?php echo $row['name'];?> 7,<?php echo $row['name'];?>,new cast of <?php echo $row['name'];?>,new season of <?php echo $row['name'];?>,next <?php echo $row['name'];?>,cast of new <?php echo $row['name'];?>,<?php echo $row['name'];?> release date,<?php echo $row['name'];?> new season,new <?php echo $row['name'];?>,<?php echo $row['name'];?> new cast,when does the next <?php echo $row['name'];?> air,will there be a season 4 of <?php echo $row['name'];?>,what is the new <?php echo $row['name'];?> about,the cast of <?php echo $row['name'];?>,what night is <?php echo $row['name'];?> on,what is the new <?php echo $row['name'];?>,

<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>,<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>,new cast of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>,new season of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>,next <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>,cast of new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>,<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> release date,<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> new season,new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>,<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> new cast,when does the next <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> air,will there be a season of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>,what is the new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> about,the cast of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>,what night is <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> on,what is the new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>,

Hey all! This is just a little intro but I'm excited to begin this journey with you all. Please leave your comments.
and thoughts down below, subscribe and thanks for watching!

<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,new cast of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,new season of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,next <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,cast of new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> release date,<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> new season,new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> new cast,when does the next <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> air,will there be a season of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,what is the new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> about,the cast of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,what night is <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> on,what is the new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,

We will post all videos related to movies and tv shows. Most of the credits go to the makers of the tv shows and movies
that I used in this video.
    </textarea>
      &nbsp;FB-8</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="<?php echo $row3['season_number'];?>0%" border="0">
  <tr>
    <th colspan="7" scope="col"><div></div></th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col"><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea5" cols="17" rows="1" class="btn-danger" id="textarea4"><?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> 
Watch <?php echo $row['name'];?> S<?php echo $row3['season_number'];?>E<?php echo $row3['episode_number'];?> Full Episodes. : <?php echo $short;?> 

<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> 
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
=====================================
Follow <?php echo $row['name'];?> Twitter: https://twitter.com/
Like Marvel on FaceBook: https://www.facebook.com/

<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
    </textarea>      
    &nbsp;YT-1</th>
    <th width="1%" scope="col">&nbsp;</th>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col"><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea2" cols="17" rows="1" class="btn-danger" id="textarea"><?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> .
Watch <?php echo $row['name'];?> Full Episodes ? <?php echo $short;?> .

=====================================
Follow <?php echo $row['name'];?> Twitter: https://twitter.com/
Like <?php echo $row['name'];?> on FaceBook: https://www.facebook.com/
=====================================

<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full Episode
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> watch Episode
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> download
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> trailer
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> promos Online
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Synopsis
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> online stream
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> HD
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full HD
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Sneak Peak
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> guide
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> tv series
<?php echo $row['name'];?> .
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Preview
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> with
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online Free
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Promo
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Putlocker
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> project free tv
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> gorillavid
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> stream
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> live stream
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> megashare
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Cast
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> spoilers
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> tv shows
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Dailymotion
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Watch Online
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> english subtitles
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> tv project
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online HD
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Length
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Episode live stream
<?php echo $row['name'];?> .

=====================================
Don't miss a minute of <?php echo $row['name'];?> action with the Live Feeds!
Get new episodes of shows you love across devices the next day,
stream live TV, and watch full seasons of OWN fan favorites anytime,
anywhere with OWN All Access.
Try it !

For even more news, stay tuned to:
Tumblr: https://.tumblr.com/
Instagram: https://instagram.com/
Google+: https://plus.google.com/
Pinterest: https://pinterest.com/
Thanks for joining, have fun, and check out and let me
know what you guys think! Feel free to leave a comment, like, and subscribe!

As always, we talk through projects and challenges and cheer each other on in our creative endeavours.
Most of the credits go to the makers of the tv shows and movies that I used in this video.</textarea>
    &nbsp;YT-2</th>
    <th width="1%" scope="col">&nbsp;</th>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col"><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="1" class="btn-danger" id="textarea9"><?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> Episodio Completo (HD)
W-a-t-c-h F-u-l-l Episode Visit  @ <?php echo $short;?> ...
To Watch <?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?>  Watch Online

<?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> Telemundo Novelas
<?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> Telemundo Completo 
watch <?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> , Download <?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> , watch Full <?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> , Live <?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> .

<?php echo $row['name'];?> .
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>.
<?php echo $row['name'];?> S<?php echo $row3['season_number'];?>.E<?php echo $row3['episode_number'];?>.
<?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Ep-<?php echo $row3['episode_number'];?>.
<?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> Free
<?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> Pilot
<?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> Recap
<?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> Trailer
<?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> Promo
<?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> Ending
<?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> Full HD
<?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> Preview
<?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> Full
<?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> Extended
<?php echo $row['name'];?> Temporada <?php echo $row3['season_number'];?> Capitulo <?php echo $row3['season_number'];?> FULL EPISODE

Hey all! This is just a little intro but I'm excited to begin this journey with you all. Please leave your comments
and thoughts down below, subscribe and thanks for watching!

Stay connected with us on:
youtube: https://www.youtube.com
Facebook: https://www.facebook.com
Instagram: https://instagram.com
Twitter: https://www.twitter.com

We will post all videos related to movies and tv shows. Most of the credits go to the makers of the tv shows and movies
that I used in this video.</textarea>
    &nbsp;YT-<?php echo $row3['episode_number'];?></th>
    <th width="1%" scope="col">&nbsp;</th>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col"><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="1" class="btn-danger" id="textarea9">One Click Link Below You Can Watch
►► <?php echo $short;?> ,


Play Now: <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online
►► <?php echo $short;?> ,

Film Info : 
enre: <?php echo $genre;?>
Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?> 

Season Number: <?php echo $row3['season_number'];?>
Episodes Number: <?php echo $row3['episode_number'];?>
First Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?>
Last Air Date: <?php echo date('d F Y', strtotime($row['last_air_date']));?> 

Runtime: <?php echo $runtime;?> min

<?php echo $row['name'];?> 7
<?php echo $row['name'];?>
new cast of <?php echo $row['name'];?>
new season of <?php echo $row['name'];?>
next <?php echo $row['name'];?>
cast of new <?php echo $row['name'];?>
<?php echo $row['name'];?> release date
<?php echo $row['name'];?> new season
new <?php echo $row['name'];?>
<?php echo $row['name'];?> new cast
when does the next <?php echo $row['name'];?> air
will there be a season <?php echo $row3['season_number'];?> of <?php echo $row['name'];?>
what is the new <?php echo $row['name'];?> about
the cast of <?php echo $row['name'];?>
what night is <?php echo $row['name'];?> on
what is the new <?php echo $row['name'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>
new cast of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>
new season of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>
next <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>
cast of new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> release date
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> new season
new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> new cast
when does the next <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> air
will there be a season of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>
what is the new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> about
the cast of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>
what night is <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> on
what is the new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?>
Hey all! This is just a little intro but I'm excited to begin this journey with you all. Please leave your comments.
and thoughts down below, subscribe and thanks for watching!

<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,new cast of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,new season of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,next <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,cast of new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> release date,<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> new season,new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> new cast,when does the next <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> air,will there be a season of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,what is the new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> about,the cast of <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,what night is <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> on,what is the new <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>,

We will post all videos related to movies and tv shows. Most of the credits go to the makers of the tv shows and movies
that I used in this video.
    </textarea>
    &nbsp;YT-4</th>
    <th width="41%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="1" class="btn-info" id="textarea9">Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online [2017] Full. Free.

Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full Series Online Quality HD Streaming Free Download, Rough Night 2017 Online DVD Rip Full HD With English Subtitles Ready For Download.

PLAY HERE >> <?php echo $short;?> .

PLAY HERE >>  .

Watch Movie Free 2017 <?php echo $row3['episode_number'];?>0p, <?php echo $row3['season_number'];?>80p, BrRip, DvdRip, CapRip, Telesyc, High Quality, <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online, <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full HD Free.
Watch Rough Night (2017) Online Download <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>, <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>, <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Online, <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full HD , <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Free Movie 2017, <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Download HD Streaming Free

Genre: <?php echo $genre;?> ,
Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?> ,
Season Number: <?php echo $row3['season_number'];?>,
Episodes Number: <?php echo $row3['episode_number'];?>.
Runtime: <?php echo $runtime;?> min,</textarea>
    &nbsp;YT/FB</td>
    <td>&nbsp;</td>
    <td><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="1" class="btn-success" id="textarea9"><?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> : Juice It Up .
To WATCH <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full Episode! 
Let's join here!: ►► <?php echo $short;?>

Genre: <?php echo $genre;?>
Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?> 
 
Season Number: <?php echo $row3['season_number'];?>  
Episodes Number: <?php echo $row3['episode_number'];?> 

First Air Date: <?php echo date('d F Y', strtotime($row3['air_date']));?>
Last Air Date: <?php echo date('d F Y', strtotime($row['last_air_date']));?> 

Runtime: <?php echo $runtime;?> min

<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>.
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>.
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Ep <?php echo $row3['episode_number'];?>.
<?php echo $row['name'];?> Episode <?php echo $row3['episode_number'];?><br>
<?php echo $row['name'];?> Ep <?php echo $row3['episode_number'];?>.

<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>,
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>,
<?php echo $row['name'];?> S<?php echo $row3['season_number'];?>E<?php echo $row3['episode_number'];?>,
<?php echo $row['name'];?> S<?php echo $row3['season_number'];?>E<?php echo $row3['episode_number'];?>,
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> Free
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> Full HD
<?php echo $row['name'];?> S<?php echo $row3['season_number'];?>E<?php echo $row3['episode_number'];?>F ree

<?php echo $row['name'];?> S<?php echo $row3['season_number'];?>E<?php echo $row3['episode_number'];?> FULL Episode
<?php echo $row['name'];?> Episode <?php echo $row3['episode_number'];?> FULL EPISODE
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Free
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Pilot
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Recap
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Trailer
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Promo
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Ending
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full HD
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Preview
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Extended
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> FULL EPISODE
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Megashare
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> TV Muse
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Dailymotion
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> IMDB
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Themoviedb
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> YouTube
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Keepvid
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Torent
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Daily TV
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Mediafire
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Shared
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> TV Showse
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> download
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> spoilers
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> streaming
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> promo
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> subtitles
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Review
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> convergence 
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> conjugal conjecture
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> line substitution solution
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> dependence transcendence
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> hot tub contamination
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> fetal kick catalyst
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> in HD 1<?php echo $row3['season_number'];?>80p 
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> movie free 

Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full Episodes HD <?php echo $row3['season_number'];?><?php echo $row3['season_number'];?>0p
Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full Episodes
Watch <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>
<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> free 
Where to Download <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full Episodes

Watch Tv Show & Video is HERE! 
Do not miss the latest movies or take your favorite genre on our website! 
Hey all! This is just a little intro but I'm excited to begin this journey with you all. Please leave your comments 
and thoughts down below, subscribe and thanks for watching! 

Stay connected with us on: 
youtube: https://www.youtube.com 
Facebook: https://www.facebook.com 
Instagram: https://instagram.com 
Twitter: https://www.twitter.com 

We will post all videos related to movies and tv shows. Most of the credits go to the makers of the tv shows and movies 
that I used in this video



<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> : Juice It Up    </textarea>
    &nbsp;Daily/medium</td>
    <td>&nbsp;</td>
    <td><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea<?php echo $row3['episode_number'];?>" cols="17" rows="1" class="alert-info" id="textarea2">Watch <?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> Full Episode HD 720p ,<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> Release Date,<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> Air Date,<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> cast,<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> Spoiler,<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> Last Airdate

<?php echo $overview;?>

W-A-T-C-H N-O-W : ? <?php echo $short;?> .

Watch Full <?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?>, Watch Full <?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Download, Watch Full <?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full, Watch Full <?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Live, Watch Full <?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Show, Watch Full <?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Streaming, Watch Full <?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Video HD

<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Megashare
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> TV Muse
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Dailymotion
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> IMDB
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> 
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Themoviedb
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> YouTube
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Keepvid
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Torent
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Daily TV
<?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?>, Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Mediafire

<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> convergence 

<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> conjugal conjecture

<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> line substitution solution

<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> dependence transcendence

<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> hot tub contamination

<?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> fetal kick catalyst
    </textarea>
      &nbsp;Forum</td>
    <td>&nbsp;</td>
    <td><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="1" class="alert-success" id="textarea9"><?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> ,Tv series,popular tv sereis ,tv schedule,full epside,fullmovie,airing today,Streaming,HD,Download,Horror,Family,Comedy,Drama,Action,Documentary,Animation,DivRip,BluRay
    </textarea>
      &nbsp;tags/KW</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="<?php echo $row3['season_number'];?>0%" border="0">
  <tr>
    <th colspan="7" scope="col"><div></div></th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col"><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea5" cols="17" rows="1" class="alert-warning" id="textarea4"><?php echo $row['name'];?> - [S<?php echo $row3['season_number'];?>E<?php echo $row3['episode_number'];?>] Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> | Full Episodes
    
    </textarea>      
    &nbsp;Judul-1</th>
    <th width="1%" scope="col">&nbsp;</th>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col"><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea2" cols="17" rows="1" class="alert-warning" id="textarea"><?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> - Episode <?php echo $row3['episode_number'];?> | [S<?php echo $row3['season_number'];?>E<?php echo $row3['episode_number'];?>] Full Episodes
      </textarea>
    &nbsp;Judul-2</th>
    <th width="1%" scope="col">&nbsp;</th>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col">
      <textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="1" class="alert-warning" id="textarea9"><?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> - Episode <?php echo $row3['episode_number'];?> Full epsiodes
    </textarea>
    &nbsp;Judul-<?php echo $row3['episode_number'];?></th>
    <th width="1%" scope="col">&nbsp;</th>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col"><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="1" class="alert-warning" id="textarea9"><?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> - Episode <?php echo $row3['episode_number'];?> </textarea>
    &nbsp;Judul-4</th>
    <th width="41%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="1" class="alert-warning" id="textarea9"><?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full.Movie online</textarea>
    &nbsp;Judul-5</td>
    <td>&nbsp;</td>
    <td><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="1" class="alert-warning" id="textarea9"><?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> ENG SUB</textarea>
    &nbsp;Judul-6</td>
    <td>&nbsp;</td>
    <td>&nbsp;<textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea4" cols="17" rows="1" class="alert-warning" id="textarea<?php echo $row3['episode_number'];?>">watch! <?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Watch online</textarea>
      Judul-7</td>
    <td>&nbsp;</td>
    <td><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="1" class="bg-warning" id="textarea9">Full-watch! [S<?php echo $row3['season_number'];?>E<?php echo $row3['episode_number'];?>] <?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> online (2017) HD
    </textarea>
      &nbsp;Judul-8</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
                      <table width="<?php echo $row3['season_number'];?>0%" border="0">
  <tr>
    <th colspan="7" scope="col"><div></div></th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col"><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea5" cols="17" rows="1" class="alert-warning" id="textarea4">Full-watch! <?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full.Movie online
    </textarea>      
    &nbsp;Judul-9</th>
    <th width="1%" scope="col">&nbsp;</th>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col"><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea2" cols="17" rows="1" class="alert-warning" id="textarea">Full-watch! <?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> online (2017) HD</textarea>
    &nbsp;Judul-<?php echo $row3['season_number'];?></th>
    <th width="1%" scope="col">&nbsp;</th>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col"><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="1" class="alert-warning" id="textarea9">Full-watch! <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> online
    </textarea>
    &nbsp;Judul-11</th>
    <th width="1%" scope="col">&nbsp;</th>
    <th width="<?php echo $row3['episode_number'];?>%" scope="col"><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="1" class="alert-warning" id="textarea9"><?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> : Juice It Up</textarea>
    &nbsp;Judul-12</th>
    <th width="41%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="1" class="alert-warning" id="textarea9"><?php echo $row['name'];?> <?php echo $row3['season_number'];?>x<?php echo $row3['episode_number'];?> "Releas Date" Season <?php echo $row3['season_number'];?> - Episode <?php echo $row3['episode_number'];?> | Full Episodes -
    </textarea>
    &nbsp;Judul-1<?php echo $row3['episode_number'];?></td>
    <td>&nbsp;</td>
    <td><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="1" class="alert-warning" id="textarea9">Full-watch! <?php echo $row['name'];?> Season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> online</textarea>
    &nbsp;Judul-<?php echo $row3['episode_number'];?></td>
    <td>&nbsp;</td>
    <td><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea<?php echo $row3['episode_number'];?>" cols="17" rows="1" class="alert-warning" id="textarea2">Watch <?php echo $row['name'];?> season <?php echo $row3['season_number'];?> Episode <?php echo $row3['episode_number'];?> Full.Movie online</textarea>
      &nbsp;Judul-15</td>
    <td>&nbsp;</td>
    <td><textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea9" cols="17" rows="1" class="alert-warning" id="textarea9"><?php echo $row['name'];?> s0<?php echo $row3['season_number'];?>.e0<?php echo $row3['episode_number'];?>] | Season <?php echo $row3['season_number'];?> - Episode <?php echo $row3['episode_number'];?> | FullShow
    </textarea>
      &nbsp;Judul-16</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
                      </div>
      </div>  
      <div class="row" style="margin-top:25px;">
      <div class="col-md-12">
          <div class="row">
            <div class="col-sm-4 col-xs-12">
                    <table class="table table-striped">
            <thead><caption class="text-center">Seasons List</caption></thead>
                                                <tbody> 
              <tr>
								<td><ul><?php echo $season_desc;?></li></ul></td>
							</tr>
                              </tbody>
          </table>
        </div>
		<?php if (!$_id[2] AND $row3 != null ):?>
		<div class="col-md-12">
		<h3 class="text-center">Episodes List</h3>
			<?php
                  	if ($row3['episodes']!=null) {
                      		foreach( $row3['episodes'] as $episodes) {

                                        if ($episodes['still_path']!=null) {
                                           	$still_path = 'https://image.tmdb.org/t/p/original'.$episodes['still_path'];
                                       	}else{
                                           	$still_path = '/include/images/no-backdrop.png';
                                        }	
                        	?>
				<div class="col-md-4 col-sm-6 col-xs-12 media">
						<h4 class="media-heading" style="font-size: 14px;font-weight: 700;"><a href="<?php echo $_ocim->home_url();?>/desc/play.php?id=<?php echo $id;?>-<?php echo $episodes['episode_number'];?>" title="<?php echo $episodes['name'];?>">Episode <?php echo $episodes['episode_number'];?> : <?php echo $episodes['name'];?></a></h4>
						<div style="font-size:12px;"><?php echo date('d F Y', strtotime($row3['air_date']));?></div>
				</div>
				<?php 
                                }   
                        }
                        ?>
		</div>
        	<?php endif;?>
        <div class="col-sm-8 col-xs-12">
          <table class="table table-striped">
                       <tbody>
              <tr><th colspan="<?php echo $row3['episode_number'];?>">URL TV::  <label>Big Images Random</label>
                    <textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea20" class="form-control"><?php echo $images;?></textarea>
                    <label>Small Images</label>
                                        <textarea style="color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"style="outline: 3px solid red; color: white; background-image: url('https://orig14.deviantart.net/f011/f/2007/104/e/e/umbrella_corp__psp_by_k_m4n.jpg')"name="textarea" class="form-control"><?php echo $images_small;?></textarea></th></tr>
              <tr><th>Short Link:</th><td>:</td><td> <?php echo $results['data']['url'];?></td></tr>
                  </tbody>
          </table>
        </div>
        
                	<?php if (!$_id[2] AND $row2 != null ):?>
		<div class="col-md-12">
		<h3 class="text-center">Episodes List</h3>
			<?php
                  	if ($row2['episodes']!=null) {
                      		foreach( $row2['episodes'] as $episodes) {

                                        if ($episodes['still_path']!=null) {
                                           	$still_path = 'https://image.tmdb.org/t/p/w185'.$episodes['still_path'];
                                       	}else{
                                           	$still_path = '/include/images/no-backdrop.png';
                                        }	
                        	?>
				<div class="col-md-4 col-sm-6 col-xs-12 media">
						<h4 class="media-heading" style="font-size: 14px;font-weight: 700;"><a href="<?php echo $_ocim->home_url();?>/desc/play.php?id=<?php echo $id;?>-<?php echo $episodes['episode_number'];?>" title="<?php echo $episodes['name'];?>">Episode <?php echo $episodes['episode_number'];?> : <?php echo $episodes['name'];?></a></h4>
						<div style="font-size:12px;"><?php echo date('d F Y', strtotime($episodes['air_date']));?></div>
				</div>
				<?php 
                                }   
                        }
                        ?>
		</div>
        	<?php endif;?>
      </div>
      </div>
    </div>

              </div>
  </div>
		</div>
	</div>
<?php include('footer.php');?>