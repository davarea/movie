<?php include('header.php');?>
<div class="container box-container">
        <div class="row">        <div class="col-md-12">
                <div class="row">
                        <div class="page-header text-center tittle h3" style="color: #f29e37; border: 5px solid #0500040a; background: #000000a6;">MOVIES</div>
                        			
				<?php
                  	if ( empty( $page ) ) {
                        	$page = 1;
                        }
			$Movie = $tmdb->getNowPlayingMovies($page);
                  	if ($Movie['results'] != null) {
                                $i = 0;
                      		foreach($Movie['results'] as $row) {

                                        if ($row['poster_path']!=null) {
                                           	$image = '//i1.wp.com/image.tmdb.org/t/p/original'.$row['poster_path'].'?resize=300,450';
                                        }elseif ($row['backdrop_path']!=null) {
                                        	$image = '//i1.wp.com/image.tmdb.org/t/p/original'.$row['backdrop_path'].'?resize=300,450';
                                       	}else{
                                           	$image = '//i1.wp.com/'.$_ocim->get_domain($_ocim->home_url()).'/include/images/no-poster-w185.jpg?resize=300,450';
                                        }	
                                ?>	
				<div class="col-md-2 col-sm-4 col-xs-6">
					<div class="movie-list text-center" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $row['original_title'];?>">
						<a href="<?php echo $_ocim->home_url();?>/desc/watch.php?id=<?php echo $row['id'];?>">
							<img src="<?php echo $image;?>?resize=300,450" alt="San Andreas" class="img-responsive">

							<div class="label label-info movie-list-title nowrap"><?php echo $row['original_title'];?></div>
                                                </a>
					</div>
				</div>
				<?php 
                                if ($i++ == 17) break;
                                }   
                        }
                        ?>
				                        <div class="clearfix"></div>
		</div>

                <div class="row">
                        <div class="page-header text-center tittle h3" style="color: #f29e37; border: 5px solid #0500040a; background: #000000a6;">TV SHOWS</div>
                        			
						<?php
                  	if ( empty( $page ) ) {
                        	$page = 1;
                        }
			$Movie = $tmdb->getPopularTVShows($page);
                  	if ($Movie['results'] != null) {
                                $i = 0;
                      		foreach($Movie['results'] as $row) {

                                        if ($row['poster_path']!=null) {
                                           	$image = '//i1.wp.com/image.tmdb.org/t/p/original'.$row['poster_path'].'?resize=300,450';
                                        }elseif ($row['backdrop_path']!=null) {
                                        	$image = '//i1.wp.com/image.tmdb.org/t/p/original'.$row['backdrop_path'].'?resize=300,450';
                                       	}else{
                                           	$image = '//i1.wp.com/'.$_ocim->get_domain($_ocim->home_url()).'/include/images/no-poster-w185.jpg?resize=300,450';
                                        }	
                                ?>
				<div class="col-md-2 col-sm-4 col-xs-6">
					<div class="movie-list text-center" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $row['original_title'];?>">
						<a href="<?php echo $_ocim->home_url();?>/desc/play.php?id=<?php echo $row['id'];?>">
							<img src="<?php echo $image;?>?resize=300,450" class="img-responsive">

							<div class="label label-info movie-list-title nowrap"><?php echo $row['original_name'];?></div>
                                                </a>
					</div>
				</div>
				<?php 
                                if ($i++ == 17) break;
                                }   
                        }
                        ?>
											

                        <div class="clearfix"></div>

		</div>
	</div>		</div>
	</div>
<?php include('footer.php');?>