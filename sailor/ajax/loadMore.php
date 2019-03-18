<div class="cbp-loadMore-block1">

    
<?php
    include_once '../include/functions.php';
    include_once '../include/pro_functions.php';
?>
    
    <?php       
         $pro=listprodefault();
         foreach($pro as $val):        
     ?>
    <li class="graphic web-design cbp-item">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="admin/<?php echo $val['img']; ?>" alt="" width="100%" height="100%">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="admin/<?php echo $val['img']; ?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Shopping Gallery<br>by Cosmin Capitanu">مشاهده</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title"><?php echo $val['title']; ?></div>
        <div class="cbp-l-grid-projects-desc"><?php echo $val['text']; ?></div>
    </li>
    
    <?php endforeach; ?>
    
    
    
</div>
