<?php

if (isset($_GET['message']) && !empty($_GET['message']) && isset($_GET['type']) && !empty($_GET['type'])) {
    echo '<p class="' . $_GET['type'] . '">' . $_GET['message'] . '</p>';
}
