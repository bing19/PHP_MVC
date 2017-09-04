
<ul>
    <?php foreach ($news as $new) { ?>
    <li>
        <h2><?php echo $new->news_title ?></h2>
        <p><?php echo $new->news_text ?></p>
        <a href="article.php?id=<?php echo $new->news_id ?>" >Подробнее</a>
    </li>
   <?php } ?>
</ul>