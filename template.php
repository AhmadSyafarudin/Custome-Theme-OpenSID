<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view($folder_themes . '/commons/meta') ?>
    <?php $this->load->view($folder_themes . '/commons/source_css') ?>
    <?php $this->load->view($folder_themes . '/commons/source_js') ?>
</head>

<<<<<<< HEAD
<body class="fixed-header sidebar-right-close sidebar-left-close">
    <?php if ($this->uri->segment(2) == 'kategori' && empty($judul_kategori)) : ?>
        <?php $this->load->view($folder_themes . '/commons/404') ?>
    <?php else : ?>
        <?php $this->load->view($folder_themes . '/commons/header') ?>
        <?php $this->load->view($folder_themes . '/commons/sidebar') ?>
        <?php $this->load->view($folder_themes . '/commons/pembangunan') ?>
=======
<body class="fixed-header sidebar-right-close sidebar-left-close" style="background : #F8F9FA;">
    <?php if ($this->uri->segment(2) == 'kategori' && empty($judul_kategori)) : ?>
        <?php $this->load->view($folder_themes . '/commons/404') ?>
    <?php else : ?>
<<<<<<< HEAD
        <?php $this->load->view($folder_themes . '/commons/header') ?>
        <?php $this->load->view($folder_themes . '/commons/sidebar') ?>
        <?php $this->load->view($folder_themes . '/commons/StatistikPenduduk') ?>
=======
        <?php $this->load->view($folder_themes . '/partials/artikel/artikel') ?>
>>>>>>> 4cd32b9d6589d4e3dcff50b966a59b3a8265474a
>>>>>>> 9ca19233b75dcd867583d6b036e7b453848c3cc9

    <?php endif ?>
</body>

</html>