<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="overflow-x-hidden">

    <?php wp_head();?>

    <div class="content-wrapper border-b-2  relative">
        <div class="content flex items-center justify-between z-20">
            <?php if (ThemeHelper::site_logo()): ?>
            <?php echo ThemeHelper::site_logo();?>
            <?php else: ?>
            <a href="<?php echo ThemeHelper::home_url(); ?>"><?php echo ThemeHelper::site_name();?></a>
            <?php endif ?>
            <div>
                <button class="md:hidden" aria-label="mobile menu button">
                    <img src="<?php echo ThemeHelper::theme_dir_uri();?>/dist/icons/ham.svg"
                        alt="Open Navigation Menu" />
                </button>
                <div id="header-menu-warper"
                    class="translate-x-[100%] absolute shadow-md top-0 right-0 bg-white md:relative h-screen md:h-auto w-2/3 p-4">
                    <span class="w-full flex items-end justify-end">
                        <img src="<?php echo ThemeHelper::theme_dir_uri();?>/dist/icons/close.svg"
                            alt="Close Navigation Menu" />
                    </span>
                    <?php echo Menus::header_menu();?>
                </div>
            </div>
        </div>
    </div>
    <div id="overlay" class="w-screen h-screen fixed top-0 left-0 bg-neutral-light bg-opacity-50 z-10">

    </div>