<?php
include_once("system/datas.php");
include_once("system/functions.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>BirdSentinel</title>
        <link rel="stylesheet" href="/styles/main.css">
        <link rel="stylesheet" href="/styles/card.css">
        <link rel="stylesheet" href="/styles/photos.css">
        <link rel="icon" href="favicon.gif" type="image/gif">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:title" content="BirdSentinel">
        <meta property="og:type" content="website">
        <meta property="og:image" content="https://birdsentinel.com/img/ograph.jpg">
        <meta property="og:author" content="BirdSentinel">
        <meta property="og:description" content="Hello and welcome to my corner of the internet! My name is BirdSentinel, and I'm thrilled to have you here. As a programmer, graphic designer, photographer, and game developer, I wear many hats in the digital realm, and I'm passionate about what I do.">
    </head>
    <body>
        <div class="page-content">
            <div class="header">
                <div class="logo-container">
                    <img src="img/logo.gif"/>
                    <h2>BirdSentinel</h2>
                </div>
            </div>
            <div class="link-container">
                <a class="collapsible">
                    <p>WORK</p>
                    <div class="scrolling_text">
                        <div class="text">
                            <span>[ Development ]</span>
                            <span>[ Games ]</span>
                            <span>[ Graphics ]</span>
                            <span>[ Other ]</span>
                            <span>[ Development ]</span>
                            <span>[ Games ]</span>
                            <span>[ Graphics ]</span>
                            <span>[ Other ]</span>
                            <span>[ Development ]</span>
                            <span>[ Games ]</span>
                            <span>[ Graphics ]</span>
                            <span>[ Other ]</span>
                        </div>
                        <div class="text">
                            <span>[ Development ]</span>
                            <span>[ Games ]</span>
                            <span>[ Graphics ]</span>
                            <span>[ Other ]</span>
                            <span>[ Development ]</span>
                            <span>[ Games ]</span>
                            <span>[ Graphics ]</span>
                            <span>[ Other ]</span>
                            <span>[ Development ]</span>
                            <span>[ Games ]</span>
                            <span>[ Graphics ]</span>
                            <span>[ Other ]</span>
                        </div>
                    </div>
                </a>
                <div class="collapsible-content">
                    <?php
                        createCardSection("Web development", "webdev", $webdev_cards);
                        createCardSection("Games", "games", $games_cards);
                        createCardSection("Other", "other", $other_cards);
                    ?>
                </div>
                <a class="collapsible">
                    <p>ABOUT</p>
                    <div class="scrolling_text">
                        <div class="text">
                            <span>[ Parrots ]</span>
                            <span>[ Drum and Bass ]</span>
                            <span>[ Coding ]</span>
                            <span>[ What else? ]</span>
                            <span>[ Parrots ]</span>
                            <span>[ Drum and Bass ]</span>
                            <span>[ Coding ]</span>
                            <span>[ What else? ]</span>
                            <span>[ Parrots ]</span>
                            <span>[ Drum and Bass ]</span>
                            <span>[ Coding ]</span>
                            <span>[ What else? ]</span>
                        </div>
                        <div class="text">
                            <span>[ Parrots ]</span>
                            <span>[ Drum and Bass ]</span>
                            <span>[ Coding ]</span>
                            <span>[ What else? ]</span>
                            <span>[ Parrots ]</span>
                            <span>[ Drum and Bass ]</span>
                            <span>[ Coding ]</span>
                            <span>[ What else? ]</span>
                            <span>[ Parrots ]</span>
                            <span>[ Drum and Bass ]</span>
                            <span>[ Coding ]</span>
                            <span>[ What else? ]</span>
                        </div>
                    </div>
                </a>
                <div class="collapsible-content">
                    <p class="about-me-description">Hello and welcome to my corner of the internet!<br><br> My name is BirdSentinel, and I'm thrilled to have you here. As a programmer, graphic designer, photographer, and game developer, I wear many hats in the digital realm, and I'm passionate about what I do.</p>
                </div>
                <a class="collapsible">
                    <p>PHOTOS</p>
                    <div class="scrolling_text">
                        <div class="text">
                            <span>[ Japan ]</span>
                            <span>[ Cars ]</span>
                            <span>[ Mood ]</span>
                            <span>[ Landscape ]</span>
                            <span>[ Models ]</span>
                            <span>[ Japan ]</span>
                            <span>[ Cars ]</span>
                            <span>[ Mood ]</span>
                            <span>[ Landscape ]</span>
                            <span>[ Models ]</span>
                            <span>[ Japan ]</span>
                            <span>[ Cars ]</span>
                            <span>[ Mood ]</span>
                            <span>[ Landscape ]</span>
                            <span>[ Models ]</span>
                        </div>
                        <div class="text">
                            <span>[ Japan ]</span>
                            <span>[ Cars ]</span>
                            <span>[ Mood ]</span>
                            <span>[ Landscape ]</span>
                            <span>[ Models ]</span>
                            <span>[ Japan ]</span>
                            <span>[ Cars ]</span>
                            <span>[ Mood ]</span>
                            <span>[ Landscape ]</span>
                            <span>[ Models ]</span>
                            <span>[ Japan ]</span>
                            <span>[ Cars ]</span>
                            <span>[ Mood ]</span>
                            <span>[ Landscape ]</span>
                            <span>[ Models ]</span>
                        </div>
                    </div>
                </a>
                <div class="collapsible-content">
                    <?php sectionTitle("Photography", ""); ?>
                    <div class="photos-container">
                        <div class="flexible-photo-container">
                            <div class="left-side">
                                <div class="photos-box-1x2">
                                    <div name="photo" data-photo="img/photos/photo1.jpg" class="big-picture" style="background-image: url(img/photos/photo1.jpg)"></div>
                                    <div class="right-pictures">
                                        <div name="photo" data-photo="img/photos/photo2.jpg" class="photo" style="background-image: url(img/photos/photo2.jpg)"></div>
                                        <div name="photo" data-photo="img/photos/photo3.jpg" class="photo" style="background-image: url(img/photos/photo3.jpg)"></div>
                                    </div>
                                </div>
                                <div class="landscape-photos">
                                    <div name="photo" data-photo="img/photos/photo6.jpg" class="photo" style="background-image: url(img/photos/photo6.jpg)"></div>
                                    <div name="photo" data-photo="img/photos/photo5.jpg" class="photo" style="background-image: url(img/photos/photo5.jpg)"></div>
                                </div>
                            </div>
                            <div class="right-side">
                                <div name="photo" data-photo="img/photos/photo4.jpg" class="half-photo" style="background-image: url(img/photos/photo4.jpg)"></div>
                                <div name="photo" data-photo="img/photos/photo7.jpg" class="full-photo" style="background-image: url(img/photos/photo7.jpg)"></div>
                                <div name="photo" data-photo="img/photos/photo8.jpg" class="half-photo" style="background-image: url(img/photos/photo8.jpg)"></div>
                            </div>
                        </div>
                        <div class="bottom-side">
                            <div name="photo" data-photo="img/photos/photo10.jpg" class="half-photo" style="background-image: url(img/photos/photo10.jpg)"></div>
                            <div name="photo" data-photo="img/photos/photo9.jpg" class="full-photo" style="background-image: url(img/photos/photo9.jpg)"></div>
                        </div>
                        <h2 class="photo-link">View all my photos on <a target="_blank" href="https://500px.com/p/birdsentinel">500px</a>!</h2>
                    </div>
                </div>
                <a class="duh-element">duh.</a>
            </div>
            <div class="corner-bottom"></div>
            <div class="corner-top"></div>
            <div class="socials-container">
                <div class="socials">
                    <a href="https://github.com/birdsentinel" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. --><path fill="#f1f1f1" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/birdsentinel" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                    </a>
                    <a href="https://www.youtube.com/@BirdSentinel" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. --><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
                    </a>
                </div>
            </div>
            <div class="grain"></div>
            <div id="picture_modal" class="full-screen-item-picture-modal" style="display: none;">
                <span class="loading-circle"></span>
                <img class="modal-img" id="modalimg" src="https://www.vulkancapa.hu/img/marketplace/17/item1.jpg">
            </div>
        </div>
    </body>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;
        
        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
              content.style.maxHeight = null;
            } else {
              content.style.maxHeight = content.scrollHeight + "px";
            } 
          });
        }
    </script>
    <script src="scripts/base.js"></script>
</html>