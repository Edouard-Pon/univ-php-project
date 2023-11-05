<?php

namespace app\views\explorer;

use app\views\layouts\Layout;

class Explorer
{
    public function show($searchResults = null): void
    {
        ob_start();
        ?>
        <form method="POST" action="/explorer">
            <input type="text" name="query" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
        <?php
        if ($searchResults != null) {
            // Loop through $searchResults to display the results.
            foreach ($searchResults as $result) {
                // Display the search results (e.g., titles, usernames, category names).
                echo $result['post_text'] . '<br>';
                echo $result['username'] . '<br>';
                echo $result['category_name'] . '<br>';
            }
        }
        ?>
        <?php
        (new Layout('PasX - Profil', ob_get_clean(), 'profile'))->show();
        // CHANGE STYLE LATER
    }
}
