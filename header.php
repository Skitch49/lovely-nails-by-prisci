<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="fr">

<?php global $wp; ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css" />
    <link rel="icon" href="favicon.ico" />


    <?php wp_head() ?>
</head>

<body>
    <header>
        <figure>
            <a href="<?php echo get_option('home'); ?>/">
                <img src="<?php bloginfo('template_url') ?>/assets/images/logo.png" id="logo" alt="Lovely Nail's"></a>
        </figure>
        <div class="menu">


            <nav>
                <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => false,
                    'depth' => 1,
                ])  ?>
                <div class="smart-bar"></div>
            </nav>



            <div class="social-media">
                <div class="social-media-item">
                    <a href="https://www.instagram.com/lovelynailsbyprisci/" target="_blank">
                        <img src="<?php bloginfo('template_url') ?>/assets/images/insta.svg" alt="Instagram">
                    </a>
                </div>
                <div class="social-media-item">
                    <a href="https://www.facebook.com/lovelynailsbyprisci/" target="_blank">
                        <img src="<?php bloginfo('template_url') ?>/assets/images/facebook.svg" alt="Facebook">
                    </a>
                </div>
            </div>
            <a class="btn" href="https://www.planity.com/lovely-nails-by-prisci-37140-saint-nicolas-de-bourgueil" target="_blank">
                RÉSERVER
            </a>
        </div>
        <div class="burger-menu" tabindex="0"><span></span></div>
    </header>
    <script>
        const currentTab = document.querySelector(".current_page_item");
        const tabsSmartBar = document.querySelector(".smart-bar");
        const tabs = document.querySelectorAll("nav li");
        const menu = document.querySelector(".menu");
        const burgerMenu = document.querySelector('.burger-menu');
        burgerMenu.addEventListener("click", toggleMenu);
        burgerMenu.addEventListener("keypress", function(e) {
            if (e.key === 'Enter') {
                toggleMenu()
            }
        });

        function toggleMenu() {
            menu.classList.toggle("active")
            burgerMenu.classList.toggle("open")
        }

        document.addEventListener("DOMContentLoaded", function() {
            updateSmartBar();

            tabs.forEach(tab => {
                tab.addEventListener("mouseenter", handleTabSwitch);
                tab.addEventListener("mouseleave", deleteSmartBar);
            });

            window.addEventListener("resize", updateSmartBar);

            function updateSmartBar() {
                if (window.innerWidth <= 880) {
                    tabsSmartBar.style.width = "0";
                } else {
                    if (currentTab) {
                        tabsSmartBar.style.width = `${currentTab.scrollWidth}px`;
                        tabsSmartBar.style.transform = `translateX(${currentTab.offsetLeft}px)`;
                    }

                }
            }

            function handleTabSwitch(e) {
                if (window.innerWidth > 880) {
                    tabsSmartBar.style.width = `${e.target.offsetWidth+1}px`;
                    tabsSmartBar.style.transform = `translateX(${e.target.offsetLeft-1}px)`;
                }
            }

            function deleteSmartBar(e) {
                if (window.innerWidth > 880) {
                    tabsSmartBar.style.width = `${currentTab.scrollWidth}px`;
                    tabsSmartBar.style.transform = `translateX(${currentTab.offsetLeft}px)`;
                }
            }
        });
    </script>