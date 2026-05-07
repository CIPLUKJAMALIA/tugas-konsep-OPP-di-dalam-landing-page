<!-- HERO -->

<section class="hero" id="home">

    <div class="hero-left">

        <img src="assets/images/hero.jpg" alt="">

    </div>

    <div class="hero-right">

        <h1>
            Explore The Beauty of Papuma Beach
        </h1>

        <p>
            Discover the exotic beach, blue ocean,
            and beautiful sunset at Papuma Beach.
        </p>

        <p>
            Enjoy unforgettable beach adventures,
            relaxing vibes, and amazing sea views in Jember.
        </p>

        <div class="hero-button">

            <img src="assets/images/road.jpg" alt="">

            <a href="#tour">
                BOOK A TOUR NOW →
            </a>

        </div>

    </div>

</section>

<!-- ABOUT -->

<section class="about" id="about">

    <div class="about-left">

        <h1>
            About Papuma Beach
        </h1>

        <p>
            Papuma Beach is one of the most famous beaches
            located in Jember, East Java.
        </p>

        <p>
            Known for its white sand, unique coral rocks,
            and beautiful ocean scenery, Papuma Beach
            is a favorite destination for tourists.
        </p>

    </div>

    <div class="about-right">

        <img src="assets/images/about.jpg" alt="">

    </div>

</section>

<!-- FEATURES -->

<section class="features">

    <div class="title">

        <h1>
            Beach Travel, The Easy Way!
        </h1>

        <p>
            Comfortable and unforgettable holiday experience
        </p>

    </div>

    <div class="feature-container">

        <div class="feature-card">

            <div class="icon">★</div>

            <h2>Easy Booking</h2>

        </div>

        <div class="feature-card">

            <div class="icon">▲</div>

            <h2>Adventure Tour</h2>

        </div>

        <div class="feature-card">

            <div class="icon">▣</div>

            <h2>Local Guide</h2>

        </div>

    </div>

</section>

<!-- TOUR -->

<section class="tour" id="tour">

    <div class="tour-title">

        <h1>Popular Destination</h1>

        <p>
            Discover Beautiful Places Around Papuma Beach
        </p>

    </div>

    <div class="tour-container">

        <?php foreach($tempat as $t): ?>

        <div class="tour-card">

            <img src="assets/images/<?= $t['gambar']; ?>" alt="">

            <div class="tour-body">

                <div class="rating">
                    ⭐ <?= $t['rating']; ?>
                </div>

                <h2><?= $t['nama']; ?></h2>

                <p><?= $t['lokasi']; ?></p>

            </div>

        </div>

        <?php endforeach; ?>

    </div>

</section>

<!-- PACKAGE -->

<section class="package" id="package">

    <h1>Tour Package</h1>

    <div class="package-container">

        <div class="package-card">

            <h2>Basic Package</h2>

            <p>1 Day Tour</p>

            <h1>Rp 300K</h1>

            <button>Choose</button>

        </div>

        <div class="package-card active">

            <h2>Premium Package</h2>

            <p>2 Day + Hotel</p>

            <h1>Rp 750K</h1>

            <button>Choose</button>

        </div>

        <div class="package-card">

            <h2>Family Package</h2>

            <p>Group Holiday</p>

            <h1>Rp 1.2JT</h1>

            <button>Choose</button>

        </div>

    </div>

</section>

<!-- CONTACT -->

<section class="contact" id="contact">

    <h1>Contact Us</h1>

    <form>

        <input type="text" placeholder="Your Name">

        <input type="email" placeholder="Your Email">

        <textarea placeholder="Your Message"></textarea>

        <button type="submit">
            Send Message
        </button>

    </form>

</section>