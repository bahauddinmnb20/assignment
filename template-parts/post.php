<?php
/**
 * The post 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package assignment
 */
?>
<div class="card">
<div class="post-card">
<div class="post-card-image">
    <a href="<?php the_permalink();?>">
       <?php 
        if(has_post_thumbnail( )){
            the_post_thumbnail('full',['class' =>'']);
        }
       ?>
    </a>
</div>
<div class="post-card-content">
    <a href="<?php the_permalink();?>" class="categorie">

    <?php
    $categories=get_the_category();
    $separator=', ';
    $result  = '';

    if($categories){
    foreach($categories as $category){
    $result .=$category -> cat_name .$separator;
    }
    echo trim($result,$separator);
    }
    ?>

    </a>  
    <h5><a href="post-default.html"><?php the_title();?></a> </h5>
    <p>
        <?php the_content();?>
    </p>
    <div class="post-card-info">
        <ul class="list-inline">
            <li><a href="<?php the_permalink()?>"> <img src="<?php echo get_avatar_url(get_the_author_meta('ID'));?>" alt=""></a></li>
            <li>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php the_author();?></a>
            </li>
            <li class="dot"></li>
            <li><?php the_time('F j,Y');?></li>
        </ul>
    </div>
</div>
</div><!--/-->
</div>

