<!DOCTYPE html>
<html>

<head>
    <title>Movie Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </link>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="styles/styles.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-rtl">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Logo" width="150" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="navbar-toggler-icon" style="color: white;"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"><span>HOME</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">OUR SCREENS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SCHEDULE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MOVIE LIBRARY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LOCATION & CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="header-content text-center">
    </header>

    <div class="container mt-4">
        <h1>MOVIE LIBRARY</h1>
        <p class="mt-3">Dive into our Cinematic Oasis, a curated movie library that transcends genres and eras. Uncover timeless classics, blockbuster hits, and hidden gems, each offering a unique cinematic experience. From heartwarming dramas to pulse-pounding adventures, explore a world of storytelling brilliance. With user-friendly features, build your collection effortlessly. Cinematic Oasis - Your Gateway to Cinematic Wonders!</p>
    </div>

    <section class="movie-library-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Collect your favourites</h2>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="input-group">
                        <button style="width: 15%;" class="btn search-btn disabled" type="button" id="searchMovieBtn"><i class="fas fa-search"></i></button>
                        <select id="movieSearch" class="form-control" multiple="multiple" style="width: 85%;">
                            <!-- Options will be dynamically added here -->
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row" id="movieCardsContainer">
                <div class="col-lg-4 col-md-6 movie-card">
                    <div class="card bg-dark text-white position-relative">
                        <img src="img/batman.png" class="card-img-top" alt="Movie Poster">
                        <button type="button" class="close-btn" onclick="removeMovieCard(this)" title="Remove">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="card-body">
                            <h5 class="card-title">Batman Returns</h5>
                            <p class="card-text"></p>
                            <p>After witnessing his parents' death, Bruce learns the art of fighting to confront injustice. When he returns to Gotham as Batman, he decides to stop a secret society that intends to destroy the city.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 movie-card">
                    <div class="card bg-dark text-white position-relative">
                        <img src="img/horse.png" class="card-img-top" alt="Movie Poster">
                        <button type="button" class="close-btn" onclick="removeMovieCard(this)" title="Remove">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="card-body">
                            <h5 class="card-title">Wild Wild West</h5>
                            <p class="card-text"></p>
                            <p>Special Agent Jim West and inventive US Marshal Artemus Gordon are ordered by President Ulysses Grant to team up to save the world from Dr Arliss Loveless's enormous steam-powered tarantula.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 movie-card">
                    <div class="card bg-dark text-white position-relative">
                        <img src="img/spiderman.png" class="card-img-top" alt="Movie Poster">
                        <button type="button" class="close-btn" onclick="removeMovieCard(this)" title="Remove">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="card-body">
                            <h5 class="card-title">The Amazing Spiderman</h5>
                            <p class="card-text"></p>
                            <p>Peter Parker, an outcast high school student, gets bitten by a radioactive spider and attains superpowers. While unraveling his parents' disappearance, he must fight against the Lizard.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <h2 class="mt-20">How to reach us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur.</p>
            <div class="row">
                <div class="col-md-5 pl-md-4 pr-md-4 order-md-0">
                    <form id="contactForm" action="functions.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label text-grey">First Name <span class="text-danger">*</span></label>
                                <input name="first_name" type="text" class="form-control" id="first_name">
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label text-grey">Last Name <span class="text-danger">*</span></label>
                                <input name="last_name" type="text" class="form-control" id="last_name">
                            </div>
                            <div class="col-md-12">
                                <label for="email" class="form-label text-grey">Email <span class="text-danger">*</span></label>
                                <input name="email" type="text" class="form-control" id="email">
                            </div>
                            <div class="col-md-12">
                                <label for="phone" class="form-label text-grey">Phone</label>
                                <input name="phone" type="text" class="form-control" id="phone">
                            </div>
                            <div class="col-md-12">
                                <label for="message" class="form-label text-grey">Message <span class="text-danger">*</span></label>
                                <textarea name="message" class="form-control" id="message"></textarea>
                                <div id="messageHelp" class="form-text text-white"><span class="text-danger">*</span>required fields</div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <input name="terms" type="checkbox" class="form-check-input" id="terms">
                                <label class="form-check-label" for="terms"><span class="text-grey">I agree to the </span><u>Terms & Conditions</u></label>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-warning text-white float-end">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 order-md-1">
                    <div class="contact-map embed-responsive embed-responsive-21by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.3807403172596!2d79.940426!3d6.8448775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25069caa2f53b%3A0xe7eae3a8b1f1214d!2seBEYONDS%20eBusiness%20%26%20Digital%20Solutions!5e0!3m2!1sen!2slk!4v1705647038353!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="d-flex start-center-paragraph">
                        <span>IT Group</span>
                        <span>C. Salvador de Madariaga, 1</span>
                        <span>28027 Madrid</span>
                        <span>Spain</span>
                    </p>
                </div>
                <div class="col-md-6 social-icons">
                    <p class="d-flex align-center-paragraph">
                        <span>Follow us on</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p class="text-grey">Copyright © 2022 IT Hote ls. All rights reserved.</p>
                </div>
                <div class="col-md-6">
                    <p class="text-grey">Photos by Felix Mooneeram & Serge Kutuzov on Unsplash</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        // Function to remove a movie card
        function removeMovieCard(closeBtn) {
            const movieCard = closeBtn.closest('.movie-card');
            movieCard.remove();
        }

        document.addEventListener('DOMContentLoaded', function() {
            const movieCardsContainer = document.getElementById('movieCardsContainer');
            const movieSearchInput = $('#movieSearch');

            // Function to create a movie card
            function createMovieCard(movie) {
                const card = document.createElement('div');
                card.classList.add('col-lg-4', 'col-md-6', 'movie-card');

                // Function to truncate text to a certain number of characters
                function truncateText(text, limit) {
                    if (text.length > limit) {
                        return text.substring(0, limit) + '...';
                    }
                    return text;
                }

                card.innerHTML = `
                    <div class="card bg-dark text-white position-relative">
                        <img src="${movie.image}" class="card-img-top" alt="Movie Poster">
                        <button type="button" class="close-btn" onclick="removeMovieCard(this)" title="Remove">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="card-body">
                            <h5 class="card-title">${movie.text}</h5>
                            <p class="card-text">${truncateText(movie.summary || 'No summary available', 250)}</p>
                        </div>
                    </div>
                `;
                return card;
            }

            // Function to add a movie card to the container
            function addMovieCard(movie) {
                const movieCard = createMovieCard(movie);
                movieCardsContainer.appendChild(movieCard);
            }

            // Function to fetch movie details from the API
            async function fetchMovieDetails(searchQuery) {
                try {
                    const response = await fetch(`http://api.tvmaze.com/search/shows?q=${searchQuery}`);
                    const data = await response.json();
                    return data.map(item => ({
                        name: item.show.name,
                        image: item.show.image ? item.show.image.medium : 'placeholder_image.png',
                        summary: item.show.summary
                    }));
                } catch (error) {
                    console.error('Error fetching movies:', error);
                    return [];
                }
            }

            // Initialize Select2
            movieSearchInput.select2({
                placeholder: 'Search movie and add to your collection',
                minimumInputLength: 1,
                ajax: {
                    delay: 250, // Add a small delay to avoid making too many requests
                    processResults: function(data) {
                        console.log(data);
                        return {
                            results: data.map(item => ({
                                id: item.show.id,
                                text: item.show.name,
                                image: item.show.image ? item.show.image.medium : 'placeholder_image.png',
                                summary: item.show.summary
                            }))
                        };
                    },
                    url: function(params) {
                        return `http://api.tvmaze.com/search/shows?q=${params.term}`;
                    },
                    dataType: 'json'
                },
                templateResult: function(data) {
                    if (!data.id) {
                        return data.text; // Return custom text for the loading indicator
                    }

                    // Customize the appearance of each result in the dropdown
                    const $result = $(
                        `<div class="select2-result">
                            <span class="select2-title">${data.text}</span>
                        </div>`
                    );

                    return $result;
                }
            });

            // Handle selection event
            movieSearchInput.on('select2:select', async function(e) {
                const selectedMovie = e.params.data;
                addMovieCard(selectedMovie);
                movieSearchInput.val(null).trigger('change'); // Clear the selected option
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');

            contactForm.addEventListener('submit', function(event) {
                if (!validateForm()) {
                    event.preventDefault(); // Prevent form submission if validation fails
                }
            });

            function validateForm() {
                const firstName = document.getElementById('first_name').value;
                const lastName = document.getElementById('last_name').value;
                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
                const message = document.getElementById('message').value;
                const termsCheckbox = document.getElementById('terms');

                // Add more fields as needed

                if (firstName.trim() === '') {
                    alert('Please enter your First Name.');
                    return false;
                }

                if (lastName.trim() === '') {
                    alert('Please enter your Last Name.');
                    return false;
                }

                if (email.trim() === '' || !isValidEmail(email)) {
                    alert('Please enter a valid Email.');
                    return false;
                }

                if (phone.trim() !== '' && !isValidPhoneNumber(phone)) {
                    alert('Please enter a valid 10-digit Phone Number.');
                    return false;
                }

                if (message.trim() === '' || countWords(message) < 30) {
                    alert('Please enter a message with a minimum of 30 words.');
                    return false;
                }

                if (!termsCheckbox.checked) {
                    alert('Please agree to the Terms & Conditions.');
                    return false;
                }

                return true;
            }

            function isValidEmail(email) {
                // Basic email validation using a regular expression
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }

            function isValidPhoneNumber(phoneNumber) {
                // Basic 10-digit phone number validation using a regular expression
                const phoneRegex = /^\d{10}$/;
                return phoneRegex.test(phoneNumber);
            }

            function countWords(text) {
                // Count words by splitting on spaces
                return text.split(/\s+/).filter(function(word) {
                    return word.length > 0;
                }).length;
            }
        });
    </script>
</body>

</html>