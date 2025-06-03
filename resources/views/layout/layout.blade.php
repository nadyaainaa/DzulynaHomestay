<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->
<x-head/>

<body class="<?php echo (isset($bodyClass) ? $bodyClass   : '')?>">

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

     

    <!-- Footer Section Start -->
        <?php 

            if (!isset($footer)) {
                ?>
                <x-footer/>
                <?php
            }
        ?>

    <!--<< All JS Plugins >>-->
    <x-script/>

    
    
    <script src="https://cdn.botpress.cloud/webchat/v2.5/inject.js"></script>
    <script src="https://files.bpcontent.cloud/2025/06/03/14/20250603142653-N0RPP5HS.js"></script>
    
    
    
    
</body>

</html>