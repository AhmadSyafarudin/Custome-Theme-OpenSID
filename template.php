<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view($folder_themes . '/commons/meta') ?>
    <?php $this->load->view($folder_themes . '/commons/source_css') ?>
    <?php $this->load->view($folder_themes . '/commons/source_js') ?>
</head>

<body class="fixed-header sidebar-right-close sidebar-left-close">
    <?php if ($this->uri->segment(2) == 'kategori' && empty($judul_kategori)) : ?>
        <?php $this->load->view($folder_themes . '/commons/404') ?>
    <?php else : ?>
        <?php $this->load->view($folder_themes . '/partials/artikel/artikel') ?>

    <?php endif ?>
</body>

</html>