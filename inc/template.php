<?php
$args = array(
    'post_type' => 'quizzes',
    'posts_per_page' => 10,
    'orderby' => 'date',
    'order' => 'ASC'
);
$quizzes = new WP_Query( $args );
?>
<form action="">
		<?php foreach ( $quizzes->posts as  $quiz) : ?>
            <h2><?php echo $quiz->post_title; ?></h2>
            <?php
                $option1 = get_post_meta($quiz->ID, 'option_1', true);
                $option2 = get_post_meta($quiz->ID, 'option_2', true);
                $answer = get_post_meta($quiz->ID, 'answer', true);
            ?>
            <span style="display:none;"><?php echo $answer; ?></span>
            <input type="radio" name="options" value="<?php echo $option1; ?>">
                    <label><?php echo $option1; ?></label><br>
                    <input type="radio" name="options" value="<?php echo $option2; ?>">
                    <label><?php echo $option2; ?></label><br>
			
		<?php endforeach; ?>
        <input type="submit" value="Result">
</form>