<div class="breadcrumb-wrapper section-padding bg-cover" style="background-image: url('{{ asset('assets/img/breadcrumb.jpg') }}')">
    <div class="container">
        <div class="page-heading">
            <h1 class="wow fadeInUp" data-wow-delay=".3s"><?php echo (isset($title) ? $title   : '')?></h1>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="{{ route('index') }}"><?php echo (isset($subTitle) ? $subTitle   : '')?></a>
                </li>
                <li>
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="style-2"><?php echo (isset($subTitle2) ? $subTitle2   : '')?></li>
            </ul>
        </div>
    </div>
</div>