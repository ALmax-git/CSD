  <footer class="footer dark-background" id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a class="logo d-flex align-items-center" href="index.html">
              <span class="sitename">CSD</span>
            </a>
            <div class="footer-contact pt-3">
              <p>No. C7 Assurance Plaza, Giwa Barrack Road Maiduguri.</p>
              <p>Borno State, NG</p>
            </div>
            <p>+234 70 3212 5158</p>
            <p>+234 80 2840 9874</p>
            <p><strong>Email:</strong> <span>support@csd.com.ng</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        {{-- <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form class="php-email-form" action="forms/newsletter.php" method="post">
            <div class="newsletter-form"><input name="email" type="email"><input type="submit" value="Subscribe">
            </div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div> --}}

      </div>
    </div>
    </div>

    <div class="copyright">
      <div class="container text-center">
        <p>© <span>Copyright</span> <strong class="sitename px-1" data-bs-toggle="modal"
            data-bs-target="#login">CSD</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
          Designed by <a href="mailto:alimustaphashettima@gmail.com/">ALmax</a>
        </div>
      </div>
    </div>

    <form class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false"
      aria-labelledby="loginLabel" aria-hidden="true" tabindex="-1" method="POST" action="{{ route('login') }}">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="loginLabel">Modal title</h1>
            <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            @csrf

            <div>
              <x-label for="email" value="{{ __('Email') }}" />
              <x-input class="form-control" id="email" name="email" type="email" :value="old('email')" required
                autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
              <x-label for="password" value="{{ __('Password') }}" />
              <x-input class="form-control" id="password" name="password" type="password" required
                autocomplete="current-password" />
            </div>

            <div class="mt-4 block">
              <label class="flex items-center" for="remember_me">
                <x-checkbox id="remember_me" name="remember" />
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
              </label>
            </div>

            <div class="mt-4 flex items-center justify-end">
              @if (Route::has('password.request'))
                <a class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"
                  href="{{ route('password.request') }}">
                  {{ __('Forgot your password?') }}
                </a>
              @endif

              <x-button class="ms-4">
                {{ __('Log in') }}
              </x-button>
            </div>

          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
            <button class="btn btn-primary" type="button">Understood</button>
          </div>
        </div>
      </div>
    </form>
  </footer>
