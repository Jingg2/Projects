<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once 'Header.php'; ?>

    <div class="home">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <h1>
                    Beauty is skin deep 🪞
                </h1>
                <p> Cara will have to learn to love herself first to win at love </p>
                <img src="img/image1.png" alt="">
            </div>
            <div class="mySlides fade">
                <h1>
                    Fiction 🤝Kasiyahan
                </h1>
                <p>Mga na-curate na kuwentong nakabibighani mula sa unang pahina</p>
                <img src="img/image2.png" alt="">
            </div>
            <div class="mySlides fade">
                <h1>
                    Magic isn't real 🔮
                </h1>
                <p> Until Odeth wakes up as Olivia Valencourt...</p>
                <img src="img/image3.png" alt="">
            </div>
            <div class="mySlides fade">
                <h1>
                    Divina is abducted...
                </h1>
                <p>Can Claret and her allies seek revenge?</p>
                <img src="img/image4.png" alt="">
            </div>

            <h1>
                <asp:Label ID="lblWelcome" runat="server" Text="Welcome Home"></asp:Label>
            </h1>
        </div>
        <section class="yourStory">
            <div class="container">
                <div class="story-header">Your Stories</div>
                <div class="story-section-container">
                    <span class="arrows left-arrow">&#9664;</span>
                    <div class="story-section">
                        <div class="story">
                                <a href="/stories/story1.php"><img src="/img/story1.jpg" alt=""></a>
                                <div class="parts-left">36 parts left</div>
                        </div>
                        <div class="story">
                        <a href="/stories/story2.php"><img src="/img/story2.jpg" alt=""></a>
                            <div class="parts-left">34 parts left</div>
                        </div>
                        <div class="story">
                        <a href="/stories/story3.php"><img src="/img/story3.jpg" alt=""></a>
                            <div class="parts-left">9 parts left</div>
                        </div>
                        <div class="story">
                        <a href="/stories/story4.php"><img src="/img/story4.jpg" alt=""></a>
                            <div class="parts-left">71 parts left</div>
                        </div>
                        <div class="story">
                        <a href="/stories/story5.php"><img src="/img/story5.jpg" alt=""></a>
                            <div class="parts-left">3 parts left</div>
                        </div>
                    </div>
                    <span class="arrows right-arrow">&#9654;</span>
                </div>
            </div>
        </section>

        <section class="topTen">
            <div class="container">
                <div class="story-header">Up Coming Stories</div>
                <div class="story-section-container">
                    <span class="arrows left-arrow">&#9664;</span>
                    <div class="story-section">
                        <div class="story">
                            <img src="img/top1.jpg" alt="Story 1">
                            <div class="story-title">Story 1</div>
                            <div class="parts-left">139 parts left</div>
                        </div>
                        <div class="story">
                            <img src="img/top2.jpg" alt="Story 2">
                            <div class="story-title">Story 2</div>
                            <div class="parts-left">92 parts left</div>
                        </div>
                        <div class="story">
                            <img src="img/top3.jpg" alt="Story 3">
                            <div class="story-title">Story 3</div>
                            <div class="parts-left">199 parts left</div>
                        </div>
                        <div class="story">
                            <img src="img/top4.jpg" alt="Story 4">
                            <div class="story-title">Story 4</div>
                            <div class="parts-left">13 parts left</div>
                        </div>
                        <div class="story">
                            <img src="img/topStory5.jpg" alt="Story 5">
                            <div class="story-title">Story 5</div>
                            <div class="parts-left">3 parts left</div>
                        </div>
                    </div>
                    <span class="arrows right-arrow">&#9654;</span>
                </div>
            </div>s
        </section>


        <script src="script.js"></script>
    </div>
</body>

</html>
