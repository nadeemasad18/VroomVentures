<x-header/>
<body>

  <!-- 
    - #HEADER
  -->

 <x-navbar/>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home">
        <div class="container">

          <div class="hero-content">
            <h2 class="h1 hero-title">Rev Up Your Journey</h2>

            <p class="hero-text">
              Ignite Your Travel Experience!
            </p>
          </div>

          <div class="hero-banner"></div>

          <form action="" class="hero-form">

            <div class="input-wrapper bg-dark text-white">
              <label for="input-1" class="input-label bg-dark text-white">Car, model, or brand</label>

              <input type="text" name="car-model" id="input-1" class="input-field"
                placeholder="What car are you looking?">
            </div>

            <div class="input-wrapper bg-dark text-white">
              <label for="customRange1" class="form-label">Price range</label>
              <input type="range" class="form-range" id="customRange1" min="50" max="100">
              {{-- <label for="input-2" class="input-label">Price Range</label>

              <input type="text" name="monthly-pay" id="input-2" class="input-field" placeholder="Add an amount in $"> --}}
            </div>

            <div class="input-wrapper bg-dark text-white">
              <label for="input-3" class="input-label bg-dark text-white">Availability</label>

              <input type="date" name="year" id="input-3" class="input-field" placeholder="Add a minimal make year">
            </div>
            <div class="input-wrapper bg-dark">
            <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </form>

        </div>
      </section>





      <!-- 
        - #FEATURED CAR
      -->

      <section class="section featured-car" id="featured-car">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Featured cars</h2>

            <a href="#" class="featured-car-link">
              <span>View more</span>

              <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
          </div>

          <ul class="featured-car-list">

            <li>
              <div class="featured-car-card ">

                <figure class="card-banner">
                  <img src="https://images.pexels.com/photos/8253060/pexels-photo-8253060.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="BMW M4 Competition" loading="lazy" width="440" height="300"
                    class="w-100 text-white  ">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper ">
                    <h3 class="h3 card-title text-white ">
                      <a href="#">Toyota RAV4</a>
                    </h3>

                    <data class="year text-white" value="2021">2021</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item text-white">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text text-white">4 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>

                      <span class="card-item-text text-white">Hybrid</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>

                      <span class="card-item-text text-white">6.1km / 1-litre</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>

                      <span class="card-item-text text-white">Automatic</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper text-white">

                    <p class="card-price text-white">
                      <strong>$440</strong> / month
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <i class="fa-regular fa-heart text-white fa-lg"></i>
                    </button>

                    <button class="btn text-white border border-bottom">Rent now</button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="featured-car-card ">

                <figure class="card-banner">
                  <img src="https://images.pexels.com/photos/8253060/pexels-photo-8253060.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="BMW M4 Competition" loading="lazy" width="440" height="300"
                    class="w-100 text-white  ">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper ">
                    <h3 class="h3 card-title text-white ">
                      <a href="#">Toyota RAV4</a>
                    </h3>

                    <data class="year text-white" value="2021">2021</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item text-white">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text text-white">4 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>

                      <span class="card-item-text text-white">Hybrid</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>

                      <span class="card-item-text text-white">6.1km / 1-litre</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>

                      <span class="card-item-text text-white">Automatic</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper text-white">

                    <p class="card-price text-white">
                      <strong>$440</strong> / month
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <i class="fa-regular fa-heart text-white fa-lg"></i>
                    </button>

                    <button class="btn text-white border border-bottom">Rent now</button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="featured-car-card ">

                <figure class="card-banner">
                  <img src="https://images.pexels.com/photos/8253060/pexels-photo-8253060.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="BMW M4 Competition" loading="lazy" width="440" height="300"
                    class="w-100 text-white  ">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper ">
                    <h3 class="h3 card-title text-white ">
                      <a href="#">Toyota RAV4</a>
                    </h3>

                    <data class="year text-white" value="2021">2021</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item text-white">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text text-white">4 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>

                      <span class="card-item-text text-white">Hybrid</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>

                      <span class="card-item-text text-white">6.1km / 1-litre</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>

                      <span class="card-item-text text-white">Automatic</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper text-white">

                    <p class="card-price text-white">
                      <strong>$440</strong> / month
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <i class="fa-regular fa-heart text-white fa-lg"></i>
                    </button>

                    <button class="btn text-white border border-bottom">Rent now</button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="featured-car-card ">

                <figure class="card-banner">
                  <img src="https://images.pexels.com/photos/8253060/pexels-photo-8253060.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="BMW M4 Competition" loading="lazy" width="440" height="300"
                    class="w-100 text-white  ">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper ">
                    <h3 class="h3 card-title text-white ">
                      <a href="#">Toyota RAV4</a>
                    </h3>

                    <data class="year text-white" value="2021">2021</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item text-white">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text text-white">4 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>

                      <span class="card-item-text text-white">Hybrid</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>

                      <span class="card-item-text text-white">6.1km / 1-litre</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>

                      <span class="card-item-text text-white">Automatic</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper text-white">

                    <p class="card-price text-white">
                      <strong>$440</strong> / month
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <i class="fa-regular fa-heart text-white fa-lg"></i>
                    </button>

                    <button class="btn text-white border border-bottom">Rent now</button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="featured-car-card ">

                <figure class="card-banner">
                  <img src="https://images.pexels.com/photos/8253060/pexels-photo-8253060.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="BMW M4 Competition" loading="lazy" width="440" height="300"
                    class="w-100 text-white  ">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper ">
                    <h3 class="h3 card-title text-white ">
                      <a href="#">Toyota RAV4</a>
                    </h3>

                    <data class="year text-white" value="2021">2021</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item text-white">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text text-white">4 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>

                      <span class="card-item-text text-white">Hybrid</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>

                      <span class="card-item-text text-white">6.1km / 1-litre</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>

                      <span class="card-item-text text-white">Automatic</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper text-white">

                    <p class="card-price text-white">
                      <strong>$440</strong> / month
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <i class="fa-regular fa-heart text-white fa-lg"></i>
                    </button>

                    <button class="btn text-white border border-bottom">Rent now</button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="featured-car-card ">

                <figure class="card-banner">
                  <img src="https://images.pexels.com/photos/8253060/pexels-photo-8253060.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="BMW M4 Competition" loading="lazy" width="440" height="300"
                    class="w-100 text-white  ">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper ">
                    <h3 class="h3 card-title text-white ">
                      <a href="#">Toyota RAV4</a>
                    </h3>

                    <data class="year text-white" value="2021">2021</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item text-white">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text text-white">4 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>

                      <span class="card-item-text text-white">Hybrid</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>

                      <span class="card-item-text text-white">6.1km / 1-litre</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>

                      <span class="card-item-text text-white">Automatic</span>
                    </li>

                  </ul>

                  <div class="card-price-wrapper text-white">

                    <p class="card-price text-white">
                      <strong>$440</strong> / month
                    </p>

                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <i class="fa-regular fa-heart text-white fa-lg"></i>
                    </button>

                    <button class="btn text-white border border-bottom">Rent now</button>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #GET START
      -->

      <section class="section get-start">
        <div class="container">

          <h2 class="h2 section-title">Get started with 4 simple steps</h2>

          <ul class="get-start-list">

            <li>
              <div class="get-start-card">

                <div class="card-icon icon-1">
                  <ion-icon name="person-add-outline"></ion-icon>
                </div>

                <h3 class="card-title">Create a profile</h3>

                <p class="card-text">
                  If you are going to use a passage of Lorem Ipsum, you need to be sure.
                </p>

                <a href="#" class="card-link">Get started</a>

              </div>
            </li>

            <li>
              <div class="get-start-card">

                <div class="card-icon icon-2">
                  <ion-icon name="car-outline"></ion-icon>
                </div>

                <h3 class="card-title">Tell us what car you want</h3>

                <p class="card-text">
                  Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                </p>

              </div>
            </li>

            <li>
              <div class="get-start-card">

                <div class="card-icon icon-3">
                  <ion-icon name="person-outline"></ion-icon>
                </div>

                <h3 class="card-title">Match with seller</h3>

                <p class="card-text">
                  It to make a type specimen book. It has survived not only five centuries, but also the leap into
                  electronic
                </p>

              </div>
            </li>

            <li>
              <div class="get-start-card">

                <div class="card-icon icon-4">
                  <ion-icon name="card-outline"></ion-icon>
                </div>

                <h3 class="card-title">Make a deal</h3>

                <p class="card-text">
                  There are many variations of passages of Lorem available, but the majority have suffered alteration
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog">
        <div class="container">

          <h2 class="h2 section-title">Our Blog</h2>

          <ul class="blog-list has-scrollbar">

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/blog-1.jpg" alt="Opening of new offices of the company" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="#" class="btn card-badge">Company</a>

                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">Opening of new offices of the company</a>
                  </h3>

                  <div class="card-meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-01-14">January 14, 2022</time>
                    </div>

                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                      <data value="114">114</data>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/blog-2.jpg" alt="What cars are most vulnerable" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="#" class="btn card-badge">Repair</a>

                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">What cars are most vulnerable</a>
                  </h3>

                  <div class="card-meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-01-14">January 14, 2022</time>
                    </div>

                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                      <data value="114">114</data>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/blog-3.jpg" alt="Statistics showed which average age" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="#" class="btn card-badge">Cars</a>

                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">Statistics showed which average age</a>
                  </h3>

                  <div class="card-meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-01-14">January 14, 2022</time>
                    </div>

                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                      <data value="114">114</data>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/blog-4.jpg" alt="What´s required when renting a car?" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="#" class="btn card-badge">Cars</a>

                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">What´s required when renting a car?</a>
                  </h3>

                  <div class="card-meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-01-14">January 14, 2022</time>
                    </div>

                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                      <data value="114">114</data>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/blog-5.jpg" alt="New rules for handling our cars" loading="lazy"
                      class="w-100">
                  </a>

                  <a href="#" class="btn card-badge">Company</a>

                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">New rules for handling our cars</a>
                  </h3>

                  <div class="card-meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-01-14">January 14, 2022</time>
                    </div>

                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>

                      <data value="114">114</data>
                    </div>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>
<x-footer/>




 