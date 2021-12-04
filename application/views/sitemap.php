<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo base_url();?></loc> 
        <priority>1.0</priority>
    </url>
    <?php foreach($items as $item) { ?>
    <url>
        <loc><?= base_url();?>products/<?= $item->slug;?></loc>
        <priority>0.5</priority>
    </url>
    <?php } ?>
    <url>
        <loc><?= base_url();?>/services</loc>
        <priority>0.5</priority>
    </url>
     <url>
        <loc><?= base_url();?>/contact</loc>
        <priority>0.5</priority>
    </url>
     <url>
        <loc><?= base_url();?>/cart</loc>
        <priority>0.5</priority>
    </url>
     <url>
        <loc><?= base_url();?>/login</loc>
        <priority>0.5</priority>
    </url>
     <url>
        <loc><?= base_url();?>/Create-account</loc>
        <priority>0.5</priority>
    </url>
    
</urlset> 
