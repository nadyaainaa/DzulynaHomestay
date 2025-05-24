<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->
<x-head/>

<body class="<?php echo (isset($bodyClass) ? $bodyClass   : '')?>" style="background-color: #EAE5E5;">

    <!-- Preloader Start -->
    <x-preloader/>

    <!-- Back To Top Start -->
    <x-backtotop/>

    <!-- Offcanvas Area Start -->
    <x-Offcanvas/>

    <!-- Header Area Start -->
    <?php 

        if (!isset($header)) {
            ?>
            <x-header/>
            <?php
        }
    ?>

    <!--<< Breadcrumb Section Start >>-->
    <?php 

        if (!isset($breadcrumb)) {
            ?>
            <x-breadcrumb title='{{ $title}}' subTitle='{{ $subTitle}}' subTitle2='{{ $subTitle2}}'/>
            <?php
        }
    ?>

     @yield('content')

    <!--<< All JS Plugins >>-->
    <x-script/>

</body>

</html>