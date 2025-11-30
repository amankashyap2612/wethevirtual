<!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-4" data-bg-img="<?=base_url("images");?>/<?= $image_detail[$page_info->banner_img]; ?>">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36"><?= $page_info->page_heading; ?></h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li class="active"><?= $page_info->page_url; ?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>