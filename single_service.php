<?php

// Template Name: Single Service

get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WordPress Speed Optimization</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php 
    $hero_button_label = get_field('hero_button_label');
    $hero_button_link = get_field('hero_button_link');
    $second_heading = get_field('second_heading');
    $second_description = get_field('second_description');
    $second_button_label = get_field('second_button_label');
    $second_button_link = get_field('second_button_link');
    $third_heading = get_field('third_heading');
    $third_description = get_field('third_description');
    $third_button_label = get_field('third_button_label');
    $third_button_link = get_field('third_button_link');
?>
    <header class="hero bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="display-4 fw-bold mb-3"><?php the_title(); ?></h1>
                    <p class="lead mb-4"><?php the_content(); ?></p>
                    <?php if ($hero_button_label && $hero_button_link): ?>
                        <button class="btn btn-light btn-lg">
                            <a href="<?php echo esc_url($hero_button_link); ?>" class="button-link"><?php echo esc_html($hero_button_label); ?></a>
                        </button>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6">
                <?php if (has_post_thumbnail()): ?>
                    <div class="featured-image">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </header>

    <section class="signs py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="display-10 fw-bold mb-3">
                        <span class="text-primary"><?php echo esc_html($second_heading); ?></span>
                        <!-- <span class="text-primary">5 Signs</span> Your WordPress <span class="text-primary">Site</span><br>
                        Needs a<span class="text-primary">Speed Boost</span> -->
                    </h2>
                    <p class="lead"><?php echo esc_html($second_description); ?></p>
                </div>
                <div class="col-lg-6 d-flex justify-content-end align-items-end">
                <?php if ($second_button_label && $second_button_link): ?>
                    <button class="btn btn-primary btn-lg">
                        <a href="<?php echo esc_url($second_button_link); ?>" class="button-link"><?php echo esc_html($second_button_label); ?></a>
                    </button>
                <?php endif; ?>
                </div>
                <?php if (have_rows('images_and_text')): ?>
                    <div class="row g-4 text-center">
                        <?php while (have_rows('images_and_text')): the_row(); 
                            $image = get_sub_field('image');
                            $text = get_sub_field('text');
                        ?>
                        <div class="col-md-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <?php if ($image): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="mb-3" style="max-width: 80px;">
                                    <?php endif; ?>
                                    <?php if ($text): ?>
                                        <h5 class="card-title"><?php echo esc_html($text); ?></h5>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="solution py-5 bg-primary text-white">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 d-flex flex-column">
            <h2 class="display-5 fw-bold mb-3"><?php echo esc_html($third_heading); ?></h2>
            <p class="lead mb-4"><?php echo esc_html($third_description); ?></p>
            <?php if ($third_button_label && $third_button_link): ?>
				<div class="text-left">
                    <button class="btn btn-light btn-lg">
                        <a href="<?php echo esc_url($third_button_link); ?>" class="button-link"><?php echo esc_html($third_button_label); ?></a>
                    </button>
				</div>
                <?php endif; ?>
			</div>
            <?php if (have_rows('l_images_and_text')): ?>
                <div class="col-lg-6 text-center align-items-center">
                    <?php
                    $counter = 0; // Counter to group items into rows
                    ?>
                    <div class="row g-4 pb-3">
                        <?php while (have_rows('l_images_and_text')): the_row(); 
                            $image = get_sub_field('image'); // Get the image subfield
                            $text = get_sub_field('text');   // Get the text subfield
                            $counter++;
                        ?>
                        <div class="col-md-4">
                            <div class="card bg-white text-dark h-100">
                                <div class="card-body">
                                    <?php if ($image): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="mb-3" style="max-width: 50px;">
                                    <?php endif; ?>
                                    <?php if ($text): ?>
                                        <h6 class="card-title"><?php echo esc_html($text); ?></h6>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php if ($counter % 3 === 0): // Close and open a new row every 3 items ?>
                            </div>
                            <div class="row g-4 pb-3">
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        </div>
    </section>

    <section class="difference py-5 bg-light">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-3">
                See the <span class="text-primary">Difference</span> Our <span class="text-primary">Speed</span><br>
                <span class="text-primary">Optimization Services</span> Can Make
            </h2>
            <p class="lead mb-5">Unleash its full potential with our expert speed optimization services. Increase conversions, improve SEO, and boost user experience.</p>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://via.placeholder.com/600x300?text=Graph" alt="Performance Graph" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h3 class="display-4 fw-bold">250+</h3>
                                    <p class="mb-0">Happy Client</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h3 class="display-4 fw-bold">250+</h3>
                                    <p class="mb-0">Happy Client</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h3 class="display-4 fw-bold">250+</h3>
                                    <p class="mb-0">Happy Client</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    <h3 class="display-4 fw-bold">250+</h3>
                                    <p class="mb-0">Happy Client</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-dark py-5 bg-dark text-white">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-3">See the Difference Speed Makes. Guaranteed</h2>
            <p class="lead mb-4">Offer guarantees or performance improvement promises.</p>
            <button class="btn btn-light btn-lg">
				<a href="https://wpsupportify.com/book-a-meeting/" class="button-link">Get Free Consultation</a>
			</button>
        </div>
    </section>

    <section class="faq py-5">
        <div class="container">
            <h2 class="display-5 fw-bold text-center mb-5">FAQs</h2>
            <?php if (have_rows('faq')): ?>
                <div class="accordion" id="faqAccordion">
                    <?php
                    $faq_counter = 1; // Counter to assign unique IDs for accordion items
                    while (have_rows('faq')): the_row();
                        $question = get_sub_field('question'); // Get the question subfield
                        $answer = get_sub_field('answer');     // Get the answer subfield
                    ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading<?php echo $faq_counter; ?>">
                            <button class="accordion-button <?php echo $faq_counter === 1 ? '' : 'collapsed'; ?>" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#faq<?php echo $faq_counter; ?>" 
                                    aria-expanded="<?php echo $faq_counter === 1 ? 'true' : 'false'; ?>" 
                                    aria-controls="faq<?php echo $faq_counter; ?>">
                                <?php echo esc_html($question); ?>
                            </button>
                        </h2>
                        <div id="faq<?php echo $faq_counter; ?>" 
                            class="accordion-collapse collapse <?php echo $faq_counter === 1 ? 'show' : ''; ?>" 
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?php echo wp_kses_post($answer); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        $faq_counter++; // Increment the counter
                    endwhile;
                    ?>
                </div>
            <?php else: ?>
                <p class="text-center">No FAQs available at the moment.</p>
            <?php endif; ?>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
get_footer();
?>