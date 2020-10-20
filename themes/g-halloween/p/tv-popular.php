<?php
/**
 * The template for displaying page Most Popular TV Series
 *
 * @author www.ocimscripts.com
 * @subpackage TMDB TWO 1.0
 *
 */
$hack_title = 'Most Popular TV Series';
$hack_description = 'Browse Most Popular TV Shows on '.site_path();
get_header(); ?>
<body>

  
<div class="header-pad"></div>
 
<div id="main" class="page-detail">
    <div class="container">
        <div class="pad"></div>
         

            <!--ON THE AIR-->
            <div class="movies-list-wrap mlw-related">
                <div class="ml-title ml-title-page">
                                       <span>POPULAR</span>
                </div>
                <div class="movies-list movies-list-full">
                  <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_tv('home_tv_popular_',$page, 'getPopularTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 18) as $row ) {
                ?>
                            <div class="ml-item">
            <a href="<?php echo seo_tv($row['id'],$row['title']);?>" data-jtip="#f-featured-3317" class="ml-mask jt" title="<?php echo $row['title'];?> <?php echo date('Y', strtotime( $row['release_date'] ) );?>">
                                    <span class="mli-eps">Full<i>HD</i></span>
                                <span class="thumb mli-thumb" style="background-image: url(<?php echo $row['poster_path'];?>)"></span>
                <span class="mli-info"><h2><?php echo $row['title'];?> <?php echo date('Y', strtotime( $row['release_date'] ) );?><br></br></h2></span>
                <span class="mli-info"><h2><?php echo $networks;?></h2></span>
            </a>

            <div id="f-featured-3317"   class="ml-mask jt" style="display: none; position: relative;">
                <div class="jtip-quality">HD</div>
                <div class="jtip-top">
                
                    <div class="clearfix"></div>
                </div>
                 
                                                   
                                <div class="jtip-bottom">
                   <a href="#" class="btn btn-block btn-success"><i class="fa fa-play-circle mr10"></i>Login</a>
                    <button onclick="#" class="btn btn-block btn-default mt10 btn-favorite-3317 add-favorite" data-target="#pop-login" data-toggle="modal">
                        Add to favorite                    </button>
                </div>
            </div>
             
        </div> 
		<?php 
                }
        endif; 
        ?>
            
        
            
                  
                    </div>
            </div>
           
        </div>
    </div>
</div>


<?php get_footer(); ?>