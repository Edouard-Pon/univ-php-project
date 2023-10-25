<?php

namespace app\views;

class ProfileView
{
    public function show($data, $posts): void
    {
        ob_start();
        ?>
        <div class="category-feed">
            WIP
        </div>
        <div class="feed">
            <div>
                <title>User Profile</title>
                <h1>User Profile</h1>

                <!-- Display user information here -->
                <p>Name: <?php echo $data['username']; ?></p>
                <p>Nickname: <?php echo $data['nickname']; ?></p>
                <p>Email: <?php echo $data['email']; ?></p>
                <p>Phone: <?php echo $data['number']; ?></p>
                <p>Location: <?php echo $data['location']; ?></p>
                <p>Gender: <?php echo $data['gender']; ?></p>
                <p>Last Login: <?php echo $data['lastco']; ?></p>

                <h2>Profile picture</h2>
                <img src="<?= $data['profile_picture'] ?>" alt="Image">
            </div>
            <h3>Your posts</h3>
            <?php
            foreach ($posts as $post) {
                include('posts/post.php');
            }
            ?>
        </div>

        <div class="navbar">
            <?= $data['username'] ?>
            <?php include('partials/navbar.php') ?>
        </div>
        <?php
        (new Layout('PasX - Profil', ob_get_clean(), 'profile'))->show();
    }
}
?>
