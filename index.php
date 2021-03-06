<?php
require_once 'assets/config/config.php';
$_SESSION['api_key'] = bin2hex(random_bytes(32)); // 64 characters long
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />
        <title>The Challenge Day Quiz</title>
        <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="assets/css/challenge_style.css">
        <script type="text/javascript"src="assets/js/game.js" defer></script>
    </head>
    <body>
        <noscript>
        <h1>Sorry, but you need Javascript enabled to use this website.</h2>
        </noscript>
        <div id="page">
            <section class="main">
                <div id="header">
                    <div id="startBtn">
                        <a class="logo" id="customBtn" title="Start Button" href="index.php"><span>Start Button</span></a>
                    </div>
                </div>
                <div id="quiz">
                    <form id="gameCat" action="game.php" method="post">
                        <select id="selectCat" class="select-css" name="category" tabindex="1">
                            <option value="photography">Photography</option>
                            <option value="movie">Movie</option>
                            <option value="space">Space</option>
                        </select>
                    </form>
                    <div id="gameTitle">
                        <h2 class="gameTitle">Trivia Game</h2>
                    </div>
                    <div class="triviaContainer" data-key="<?php echo $_SESSION['api_key']; ?>" data-records=" ">             
                        <div id="mainGame">
                            <div id="headerStyle" data-user="">
                                <h2>Time Left: <span id="clock"></span></h2>
                            </div>
                            <hr class="hrStyle">
                            <div id="triviaSection" data-correct="">
                                <div id="questionBox">
                                    <h2 id="question">What is the Question?</h2>
                                </div>
                                <div id="buttonContainer"></div>
                            </div>
                            <hr class="hrStyle">
                            <div id="playerStats">
                                <h2 id="score">Score 0 Points</h2>
                                <h2 id="percent">100 percent</h2>
                            </div>
                            <div id="nextStyle">
                                <button id="next" class="nextBtn">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="triviaInfo">
                    <h2>Welcome to Challenge Day Quiz</h2>
                    <p>This is a vanilla javascript quiz that I have been developing over the years and the playability is starting to get there. However, over the next few weeks I will be improving the game play where there will be high scores, game difficulty and other great improvements.</p>
                </div>
            </section> <!-- End of Section -->
            <footer>
                &copy; The Miniature Photographer
                <div class="content">
                    <a class="menuExit" title="The Miniature Photographer" href="https://www.miniaturephotographer.com/">The Miniature Photographer</a>
                    <!--        <a title="Terms of Service" href="#">Terms of Service</a>-->
                </div>
            </footer>
        </div>
</body>
</html>
