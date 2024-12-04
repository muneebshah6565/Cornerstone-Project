<?php get_header(); ?>

<!-- Hero Section Start -->
<?php
$hero_section = get_field('hero_section_fields');

if ($hero_section) :
    $title = $hero_section['hero_section_title'];
    $subtitle = $hero_section['hero_section_subtitle'];
    $background_image = $hero_section['hero_section_background_image'];
    ?>  

    <section class="hero-section" style="background-image: url('<?php echo esc_url($background_image); ?>');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if ($title) : ?>
                        <h1><?php echo esc_html($title); ?></h1>
                    <?php endif; ?>

                    <?php if ($subtitle) : ?>
                        <h3><?php echo esc_html($subtitle); ?></h3>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<!-- Hero Section End -->

<!-- About Section Start -->

<?php
$about_section = get_field('about_section_fields');

if ($about_section) :
    $abTitle = $about_section['about_title'];
    $abDesc = $about_section['about_description'];
    $aboutFeatures = $about_section['about_features'];

    // echo '<pre>';
    // var_dump($aboutFeatures);
    // echo '</pre>';
    ?>  

    <section class="about-section section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if ($abTitle) : ?>
                        <h2><?php echo esc_html($abTitle); ?></h2>
                    <?php endif; ?>

                    <?php if ($abDesc) : ?>
                        <p class="mt-3"><?php echo esc_html($abDesc); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row mt-4">
             <?php
                if($aboutFeatures){
                    $address_icon=$aboutFeatures['address_icon'];
                    $address_text=$aboutFeatures['address'];
                    $phone_icon=$aboutFeatures['phone_number_icon'];
                    $phone_text=$aboutFeatures['phone_number'];
                    $follow_icon=$aboutFeatures['follow_icon'];
                    $follow_text=$aboutFeatures['follow_text'];
                    $success_icon=$aboutFeatures['success_stories_icon'];
                    $success_text=$aboutFeatures['success_stories_text'];
                    ?>
                <div class="col-lg-3 mb-4 cardColumn">
                <?php if ($address_text) : ?>
                    <div class="customCard">
                        <img class="cardImage" src="<?php echo esc_url($address_icon); ?>" alt="">
                        <h5 class="cardHeading"><?php echo esc_html($address_text); ?></h5>
                    </div> 
                    <?php endif; ?>  
                </div>
                <div class="col-lg-3 mb-4 cardColumn">
                <?php if ($phone_text) : ?>
                    <div class="customCard">
                        <img class="cardImage" src="<?php echo esc_url($phone_icon); ?>" alt="">
                        <h5 class="cardHeading"><?php echo esc_html($phone_text); ?></h5>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-3 mb-4 cardColumn">
                <?php if ($follow_text) : ?>
                    <div class="customCard">
                        <img class="cardImage" src="<?php echo esc_url($follow_icon); ?>" alt="">
                        <h5 class="cardHeading"><?php echo esc_html($follow_text); ?></h5>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-3 mb-4 cardColumn">
                <?php if ($success_text) : ?>
                    <div class="customCard">
                        <img class="cardImage" src="<?php echo esc_url($success_icon); ?>" alt="">
                        <h5 class="cardHeading"><?php echo esc_html($success_text); ?></h5>
                    </div>
                    <?php endif; ?>
                </div>

                    <?php
                }
             ?>
            </div>
        </div>

    </section>

<?php endif; ?>

<!-- About Section End -->

<!-- Accreditation Section Start -->

<?php
$accreditation_sec = get_field('accreditation_section_fields');

if ($accreditation_sec) :
    $ac_Title = $accreditation_sec['accreditation_section_title'];
    $ac_Desc = $accreditation_sec['accreditation_section_description'];
    $ac_Image = $accreditation_sec['accreditation_section_image'];

    // echo '<pre>';
    // var_dump($aboutFeatures);
    // echo '</pre>';
    ?>  

    <section class="accreditation-sec section-spacing">
        <div class="container">
            <div class="row accreditation-column">
                <div class="col-lg-12">
                    <?php if ($ac_Title) : ?>
                        <h2><?php echo esc_html($ac_Title); ?></h2>
                    <?php endif; ?>

                    <?php if ($ac_Desc) : ?>
                        <p class="mt-3"><?php echo esc_html($ac_Desc); ?></p>
                    <?php endif; ?>

                    <?php if ($ac_Image) : ?>
                        <img src="<?php echo esc_url($ac_Image); ?>" alt=""/>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </section>

<?php endif; ?>


<!-- Accreditation Section End -->

<!-- Take Virtual Tour Section Start -->

<?php
$tour_section = get_field('virtual_tour_fields');

if ($tour_section) :
    $tour_Title = $tour_section['virtual_tour_title'];
    $tour_Video = $tour_section['virtual_tour_video_url'];
    $tour_Thumbnail = $tour_section['virtual_tour_video_thumbnail'];

    // echo '<pre>';
    // var_dump($tour_section);
    // echo '</pre>';
    // ?>  

    <section class="tour-section section-spacing">
        <div class="container">
            <div class="row tour-column">
                <div class="col-lg-12">
                    <?php if ($tour_Title) : ?>
                        <h2><?php echo esc_html($tour_Title); ?></h2>
                    <?php endif; ?>

                    <?php if ($tour_Video) : ?>
                        <div class="video-section mt-2">
                            <div class="video-wrapper">
                            <?php if ($tour_Thumbnail) : ?>
                                <div class="video-thumbnail" style="background-image:url('<?php echo esc_url($tour_Thumbnail); ?>')">
                                <div class="thumbnail-overlay"></div>
                                <i class="play-button bi bi-play-circle"></i>
                                </div>
                                <?php endif; ?>
                                <div class="video-container" style="display: none;">
                                    <iframe
                                        id="youtube-player" 
                                        src="<?php echo esc_url($tour_Video); ?>" 
                                        frameborder="0" 
                                        allow="autoplay; encrypted-media" 
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                     </div>

                    <?php endif; ?>
                </div>
            </div>
        </div>

    </section>

<?php endif; ?>

 <!-- Take Virtual Tour Section End -->


 <!-- Videos Slider Section Start -->
<?php
$vid_sec_title=get_field('video_section_title');
$slide_URL1 = get_field('slide_1_video_url');
$slide_URL2 = get_field('slide_2_video_url');
$slide_URL3 = get_field('slide_3_video_url');
$slide_Thumb1=get_field('slide_1_thumbnail');
$slide_Thumb2=get_field('slide_2_thumbnail');
$slide_Thumb3=get_field('slide_3_thumbnail');

if (!empty($vid_sec_title) && !empty($slide_URL1) && !empty($slide_URL2) && !empty($slide_URL3) &&
    !empty($slide_Thumb1) && !empty($slide_Thumb2) && !empty($slide_Thumb3)) {

    // echo '<pre>';
    // var_dump($aboutFeatures);
    // echo '</pre>';
    ?>  
     <section class="slider-section section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if ($vid_sec_title) : ?>
                        <h2><?php echo esc_html($vid_sec_title); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <div id="custom-slider">
                        <div class="slider-container">
                            <button class="slider-btn" id="prev-btn"><i class="bi bi-arrow-left-circle"></i>                            </button>
                            <div class="slider">
                                <div class="slide active"> <!-- Slide 1 -->
                                <?php if ($slide_URL1) : ?>
                                        <div class="video-section mt-2">
                                            <div class="video-wrapper">
                                            <?php if ($slide_Thumb1) : ?>
                                                <div class="video-thumbnail" style="background-image:url('<?php echo esc_url($slide_Thumb1); ?>')">
                                                <div class="thumbnail-overlay"></div>
                                                <i class="play-button bi bi-play-circle"></i>
                                                </div>
                                                <?php endif; ?>
                                                <div class="video-container" style="display: none;">
                                                    <iframe
                                                        id="youtube-player" 
                                                        src="<?php echo esc_url($slide_URL1); ?>" 
                                                        frameborder="0" 
                                                        allow="autoplay; encrypted-media" 
                                                        allowfullscreen></iframe>
                                                </div>
                                            </div>
                                    </div>

                                    <?php endif; ?>
                                </div>
                                <div class="slide"> <!-- Slide 2 -->
                                <?php if ($slide_URL2) : ?>
                                        <div class="video-section mt-2">
                                            <div class="video-wrapper">
                                            <?php if ($slide_Thumb2) : ?>
                                                <div class="video-thumbnail" style="background-image:url('<?php echo esc_url($slide_Thumb2); ?>')">
                                                <div class="thumbnail-overlay"></div>
                                                <i class="play-button bi bi-play-circle"></i>
                                                </div>
                                                <?php endif; ?>
                                                <div class="video-container" style="display: none;">
                                                    <iframe
                                                        id="youtube-player" 
                                                        src="<?php echo esc_url($slide_URL2); ?>" 
                                                        frameborder="0" 
                                                        allow="autoplay; encrypted-media" 
                                                        allowfullscreen></iframe>
                                                </div>
                                            </div>
                                    </div>

                                    <?php endif; ?>
                                </div>
                                <div class="slide"> <!-- Slide 3 -->
                                <?php if ($slide_URL3) : ?>
                                        <div class="video-section mt-2">
                                            <div class="video-wrapper">
                                            <?php if ($slide_Thumb3) : ?>
                                                <div class="video-thumbnail" style="background-image:url('<?php echo esc_url($slide_Thumb3); ?>')">
                                                <div class="thumbnail-overlay"></div>
                                                <i class="play-button bi bi-play-circle"></i>
                                                </div>
                                                <?php endif; ?>
                                                <div class="video-container" style="display: none;">
                                                    <iframe
                                                        id="youtube-player" 
                                                        src="<?php echo esc_url($slide_URL3); ?>" 
                                                        frameborder="0" 
                                                        allow="autoplay; encrypted-media" 
                                                        allowfullscreen></iframe>
                                                </div>
                                            </div>
                                    </div>

                            <?php endif; ?>
                                </div>
                            </div>
                            <button class="slider-btn" id="next-btn"><i class="bi bi-arrow-right-circle"></i></button>
                        </div>
                        <div class="thumbnail-container">
                            <div class="thumbnail active">
                            <?php if (!empty($slide_Thumb1)) : ?>
                                <img src="<?php echo esc_url($slide_Thumb1); ?>" width="80px" height="50px" alt="Thumbnail 1">
                                <i class="thumb-play-button bi bi-play-circle"></i>
                             <?php endif; ?>
                            </div>
                            <div class="thumbnail">
                            <?php if (!empty($slide_Thumb1)) : ?>
                                <img src="<?php echo esc_url($slide_Thumb2); ?>" width="80px" height="50px" alt="Thumbnail 2">
                                <i class="thumb-play-button bi bi-play-circle"></i>
                            <?php endif; ?>
                            </div>
                            <div class="thumbnail">
                            <?php if (!empty($slide_Thumb1)) : ?>
                                <img src="<?php echo esc_url($slide_Thumb3); ?>" width="80px" height="50px" alt="Thumbnail 3">
                                <i class="thumb-play-button bi bi-play-circle"></i>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>

                 </div>
            </div>
        </div>
    </section>

<?php } ?>

<!-- Videos Slider Section End -->


<!-- Specialized Programs Start -->

<?php
$programs_section = get_field('our_specialized_programs_fields');

if ($programs_section) :
    $programSecTitle = $programs_section['programs_section_title'];
    $programSecSubtitle = $programs_section['programs_section_subtitle'];
    $allprograms = $programs_section['specialized_programs'];

    // echo '<pre>';
    // var_dump($aboutFeatures);
    // echo '</pre>';
    ?>  

    <section class="programs-section section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if ($programSecTitle) : ?>
                        <h2><?php echo esc_html($programSecTitle); ?></h2>
                    <?php endif; ?>

                    <?php if ($programSecSubtitle) : ?>
                        <p class="mt-3"><?php echo esc_html($programSecSubtitle); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row mt-2 g-4">
             <?php
                if($allprograms){
                    $program_image_1=$allprograms['program_image_1'];
                    $program_title_1=$allprograms['program_title_1'];
                    $program_image_2=$allprograms['program_image_2'];
                    $program_title_2=$allprograms['program_title_2'];
                    $program_image_3=$allprograms['program_image_3'];
                    $program_title_3=$allprograms['program_title_3'];
                    $program_image_4=$allprograms['program_image_4'];
                    $program_title_4=$allprograms['program_title_4'];
                    $program_image_5=$allprograms['program_image_5'];
                    $program_title_5=$allprograms['program_title_5'];
                    $program_image_6=$allprograms['program_image_6'];
                    $program_title_6=$allprograms['program_title_6'];
                    $program_image_7=$allprograms['program_image_7'];
                    $program_title_7=$allprograms['program_title_7'];
                    ?>
                
                    <!-- Row 1 -->
                        <div class="col-md-6">
                        <div class="programCard text-center p-4">
                            <div class="programImage mb-3">
                             <img src="<?php echo esc_url($program_image_1); ?>" alt="">
                            </div>
                            <p class="programHeading"><?php echo esc_html($program_title_1); ?></p>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="programCard text-center p-4">
                            <div class="programImage mb-3">
                            <img src="<?php echo esc_url($program_image_2); ?>" alt="">
                            </div>
                            <p class="programHeading"><?php echo esc_html($program_title_2); ?></p>
                        </div>
                        </div>

                        <!-- Row 2 -->
                        <div class="col-md-6">
                        <div class="programCard text-center p-4">
                            <div class="programImage mb-3">
                            <img src="<?php echo esc_url($program_image_3); ?>" alt="">
                            </div>
                            <p class="programHeading"><?php echo esc_html($program_title_3); ?></p>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="programCard text-center p-4">
                            <div class="programImage mb-3">
                            <img src="<?php echo esc_url($program_image_4); ?>" alt="">
                            </div>
                            <p class="programHeading"><?php echo esc_html($program_title_4); ?></p>
                        </div>
                        </div>

                        <!-- Row 3 -->
                        <div class="col-md-6">
                        <div class="programCard text-center p-4">
                            <div class="programImage mb-3">
                            <img src="<?php echo esc_url($program_image_5); ?>" alt="">
                            </div>
                            <p class="programHeading"><?php echo esc_html($program_title_5); ?></p>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="programCard text-center p-4">
                            <div class="programImage mb-3">
                            <img src="<?php echo esc_url($program_image_6); ?>" alt="">
                            </div>
                            <p class="programHeading"><?php echo esc_html($program_title_6); ?></p>
                        </div>
                        </div>

                        <!-- Last Row -->
                        <div class="col-md-6 mx-auto">
                        <div class="programCard text-center p-4">
                            <div class="programImage mb-3">
                            <img src="<?php echo esc_url($program_image_7); ?>" alt="">
                            </div>
                            <p class="programHeading"><?php echo esc_html($program_title_7); ?></p>
                        </div>
                        </div>
                    <?php
                }
             ?>
            </div>
        </div>

    </section>

<?php endif; ?>

<!-- Specialized Programs End -->

<!-- FAQs Start -->
<?php
$faqsTitle = get_field('faqs_title');
$allFAQs=get_field('all_faqs');

if ($allFAQs) :

    // echo '<pre>';
    // var_dump($aboutFeatures);
    // echo '</pre>';
    ?>  

    <section class="faqs-section section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if ($faqsTitle) : ?>
                        <h2><?php echo esc_html($faqsTitle); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row mt-1 g-4">
             <?php
                if($allFAQs){
                    $faq_question_1=$allFAQs['faq_question_1'];
                    $faq_answer_1=$allFAQs['faq_answer_1'];
                    $faq_question_2=$allFAQs['faq_question_2'];
                    $faq_answer_2=$allFAQs['faq_answer_2'];
                    $faq_question_3=$allFAQs['faq_question_3'];
                    $faq_answer_3=$allFAQs['faq_answer_3'];
                    ?>
                
                    <div class="accordion" id="accordionExample">
                    <?php if ($faq_question_1) : ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <?php echo esc_html($faq_question_1); ?>
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <?php echo esc_html($faq_answer_1); ?>
                        </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if ($faq_question_2) : ?>
                    <div class="accordion-item mt-3">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <?php echo esc_html($faq_question_2); ?>
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <?php echo esc_html($faq_answer_2); ?>
                        </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if ($faq_question_3) : ?>
                    <div class="accordion-item mt-3">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <?php echo esc_html($faq_question_3); ?>
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <?php echo esc_html($faq_answer_3); ?>
                        </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    </div>
                

                       
                    <?php
                }
             ?>
            </div>
        </div>

    </section>

<?php endif; ?>
<!-- FAQs End -->

<!-- Price Detail Section Start -->

<?php
$priceTitle = get_field('price_section_title');
$descContent=get_field('price_section_description');
$priceDesc = wp_strip_all_tags($descContent);
$priceBtn1=get_field('price_section_button_1_text');
$priceBtn2=get_field('price_section_button_2_text');

if ($priceTitle) :

    if($priceDesc) :

    // echo '<pre>';
    // var_dump($aboutFeatures);
    // echo '</pre>';
    ?>  

    <section class="price-section pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if ($priceTitle) : ?>
                        <h2><?php echo esc_html($priceTitle); ?></h2>
                    <?php endif; ?>

                    <?php if ($priceDesc) : ?>
                        <p><?php echo esc_html($priceDesc); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-auto text-center mt-2">
                <?php if ($priceBtn1) : ?>
                <button type="button" class="customButtonDesign"><?php echo esc_html($priceBtn1); ?></button>
                <?php endif; ?>
                </div>
                <div class="col-md-auto text-center mt-2">
                <?php if ($priceBtn2) : ?>
                <button type="button" class="customButtonDesign"><?php echo esc_html($priceBtn2); ?></button>
                <?php endif; ?>
                </div>
            </div>
        </div>

    </section>

    <?php endif; ?>

<?php endif; ?>

<!-- Price Detail Section End -->


<?php get_footer(); ?>
