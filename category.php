<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quick Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a>
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span>+91 9455544334</a>
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> support@quickquiz.ml</a>
          </div>
          <div class="col-lg-3 text-right">
            <a href="login.html" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
            <a href="register.html" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.php" class="d-block">
              <img src="images/logo.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="index.php" class="nav-link text-left">Home</a>
                </li>
                <li class="active">
                  <a href="category.php" class="nav-link text-left">Category</a>
                </li>
               
                <li>
                    <a href="contact.html" class="nav-link text-left">Contact</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>

        </div>
      </div>

    </header>

<!--Head ends here-->

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Category</h2>
              <p>Choose the one which best suits you!</p>
            </div>
          </div>
        </div>
      </div>


    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Category</span>
      </div>
    </div>

<!--category starts-->
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                    <a href="quiz_Type.php?cat=<?php echo 'General knowledge' ?>"><img src="images/gk.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>General Knowledge</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>A know-it-all?</h2>
                    <p class="desc mb-4">General knowledge is information that has been accumulated over time through various mediums.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'General knowledge' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Books' ?>"><img src="images/books.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Books</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Bookworm?</h2>

                    <p class="desc mb-4">If you only read the books that everyone else is reading, you can only think what everyone else is thinking.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Books' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Film' ?>"><img src="images/film.jpg" alt="Image" class="img-fluid"></a>

                    <div class="category"><h3>Film</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>MovieBuff?</h2>

                    <p class="desc mb-4">Cinema is not only about making people dream. It's about changing things and making people think.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Film' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Music' ?>"><img src="images/music.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Music</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Melophile?</h2>
                    <p class="desc mb-4">Music gives a soul to the universe, wings to the mind, flight to the imagination and life to everything.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Music' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Threatres' ?>"><img src="images/theatre.jpg" alt="Image" class="img-fluid"></a>

                    <div class="category"><h3>Threatres</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Shakespeare? </h2>

                    <p class="desc mb-4">I wish the stage were as narrow as the wire of a tighrope dancer so that no incompetent would dare step upon it.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Threatres' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Telivision' ?>"><img src="images/tv.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Telivision</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Big Bang!</h2>

                    <p class="desc mb-4">I find television very educating. Every time somebody turns on the set, I go into the other room and read a book.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Telivision' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                    <a href="quiz_Type.php?cat=<?php echo 'Video games' ?>"><img src="images/vg.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Video games</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Fortnite/PUBG</h2>
                    <p class="desc mb-4">Everything is decided here... you cannot comprehend the magnitude, the rapture and the tragedy of this moment.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Video games' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>

             <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Cartoon' ?>"><img src="images/cartoon.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Cartoon </h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Tom & Jerry</h2>

                    <p class="desc mb-4">The cartoon me writes the books cartoon people read in the cartoon world, because they need things to read there too.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Cartoon' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Science and Nature' ?>"><img src="images/science.jpg" alt="Image" class="img-fluid"></a>

                    <div class="category"><h3>Science and Nature</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Scientist?</h2>
                    <p class="desc mb-4">I felt my lungs inflate with the onrush of scenery—air, mountains, trees, people. I thought, "This is what it is to be happy".</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Science and Nature' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Computer' ?>"><img src="images/computer.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Computer</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Bite for Byte!</h2>
                    <p class="desc mb-4">What a computer is to me is the most remarkable tool that we have ever come up with. It's the equivalent of a bicycle for our minds.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Computer' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Mathematics' ?>"><img src="images/math.jpg" alt="Image" class="img-fluid"></a>

                    <div class="category"><h3>Mathematics</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>2+2=5?</h2>

                    <p class="desc mb-4">Mathematics expresses values that reflect the cosmos, including orderliness, balance, harmony, logic, and abstract beauty.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Mathematics' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Mythology' ?>"><img src="images/myth.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Mythology</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Zeus?</h2>

                    <p class="desc mb-4">I believe in everything until it's disproved. So I believe in fairies, the myths, dragons. It all exists, even if it's in your mind.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Mythology' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                    <a href="quiz_Type.php?cat=<?php echo 'Sports' ?>"><img src="images/sports.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Sports</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Home Run.</h2>
                    <p class="desc mb-4">The strength of the team is each individual member. The strength of each member is the team.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Sports' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Geography' ?>"><img src="images/geo.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Geography</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Columbus!</h2>

                    <p class="desc mb-4">Everywhere's been where it is ever since it was first put there. It's called geography.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Geography' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'History' ?>"><img src="images/history.jpg" alt="Image" class="img-fluid"></a>

                    <div class="category"><h3>History</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Greeks and Romans</h2>

                    <p class="desc mb-4">If you don't know history, then you don't know anything. You are a leaf that doesn't know it is part of a tree. </p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'History' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Politics' ?>"><img src="images/politics.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Politics</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Vote!</h2>
                    <p class="desc mb-4">You're not to be so blind with patriotism that you can't face reality. Wrong is wrong, no matter who does it or says it</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Politics' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Art' ?>"><img src="images/art.jpg" alt="Image" class="img-fluid"></a>

                    <div class="category"><h3>Art</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Science is a ART</h2>

                    <p class="desc mb-4">Every child is an artist. The problem is how to remain an artist once he grows up.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Art' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Celebrities' ?>"><img src="images/celebs.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Celebrities</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Playboy.</h2>

                    <p class="desc mb-4">Never throughout history has a man who lived a life of ease left a name worth remembering.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Celebrities' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Animals' ?>"><img src="images/animals.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Animals</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>so CUTE!!!!</h2>

                    <p class="desc mb-4">Intelligence is more important than strength, that is why earth is ruled by men and not by animals.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Animals' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Vehicles' ?>"><img src="images/vehicles.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Vehicles</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Highway to Hell</h2>

                    <p class="desc mb-4">Every wheel wish to be the wheel of a car, and not of just some ordinary vehicle.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Vehicles' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Comics' ?>"><img src="images/comics.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Comics</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>Bring me Thanos</h2>

                    <p class="desc mb-4">Whosoever holds this hammer, if he be worthy, shall possess the power of Thor.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Comics' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Gadgets' ?>"><img src="images/gadgets.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Gadgets</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>J.A.R.V.I.S</h2>

                    <p class="desc mb-4">Man should never work for the machine, machine should work for the man.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Gadgets' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Japanese Anime' ?>"><img src="images/anime.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Japanese Anime </h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>weaboo?</h2>

                    <p class="desc mb-4">Even when our eyes are closed, there's a whole world that exists outside ourselves and our dreams.</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Japanese Anime' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>

             <div class="col-lg-4 col-md-6 mb-4">
                <div class="course-1-item">
                    <figure class="thumnail">
                            <a href="quiz_Type.php?cat=<?php echo 'Board games' ?>"><img src="images/chess.jpg" alt="Image" class="img-fluid"></a>
                    <div class="category"><h3>Board games</h3></div>
                    </figure>
                    <div class="course-1-content pb-4">
                    <h2>CheckMate!</h2>

                    <p class="desc mb-4">We do not stop playing because we grow old, we grow old because we stop playing!</p>
                    <p><a href="quiz_Type.php?cat=<?php echo 'Board games' ?>" class="btn btn-primary rounded-0 px-4">Start Quiz</a></p>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>

<!-- category ends here -->


    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-mortarboard"></span>
              <h3>Our Philosphy</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-school-material"></span>
              <h3>Academics Principle</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-library"></span>
              <h3>Key of Success</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
          </div>
        </div>
      </div>


      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="copyright">
                  <p>
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>
