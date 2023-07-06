<?php $backgroundImg = wp_get_attachment_image_url (get_post_thumbnail_id($post->ID), 'full'); ?>

<section id="banner_container" style=" background: url('<?php echo $backgroundImg;?>') no-repeat;">
