<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Theme</title>
    <?php wp_head(); ?>
</head>
<body>
    
    <header>
        <nav class="header-menu">
            <?php wp_nav_menu(['theme_location' => 'header-menu']); ?>
        </nav>
    </header>

    <main>
        <h1>Welcome to Parent Theme</h1>
    </main>
