<?php require('partials/header.php') ?>

<?php require('partials/nav.php') ?>

<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h2>Hello. Welcome to Home page.</h2>

        <br />
        <br />
        <br />
        <h2 class="font-bold">Posts</h2>
        <?php
        if (empty($posts)) {
            echo '<p>no posts</p>';
        } else {
            echo '<ul class="list-decimal pl-6 mt-4">';
            foreach ($posts as $post) {
                echo '<li>' . $post['title'] . '</li>';
            }
            echo '</ul>';
        }
        ?>
    </div>
</main>

<?php require('partials/footer.php') ?>