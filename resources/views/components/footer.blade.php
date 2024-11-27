<footer>
    <div class="footer-1">
    <img src="{{ asset('assets/icons/logo-digitale-overheid.svg') }}" alt="Logo Dutch Government">
    <div class="main-footer">
        <div id="logo-footer">
         <img src="{{ asset('assets/icons/tresoar_logo.svg') }}" alt="Tresoar's Logo">
        </div>
    <div class="links">
        <ul>
            <li><a href="/" aria-label="Home Page">Home</a></li>
            <li><a href="/about" aria-label="About Page">About</a></li>
            <li><a href="/contact" aria-label="Contact Page">Contact</a></li>
        </ul>
    </div>
    <div class="follow-us">
        <p>Follow us</p>
        <ul>
            <li><a href="https://www.facebook.com/tresoar" aria-label="Facebook"><img src="{{ asset('assets/icons/heart.svg') }}" alt="Facebook"></a></li>
            <li><a href="https://www.twitter.com/tresoar" aria-label="Twitter"><img src="{{ asset('assets/icons/heart.svg') }}" alt="Twitter"></a></li>
            <li><a href="https://www.instagram.com/tresoar" aria-label="Instagram"><img src="{{ asset('assets/icons/heart.svg') }}" alt="Instagram"></a></li>
        </ul>
    </div>
    <div class="newsletter-signup">
        <p>Sign-up for our Newsletter</p>
        <form action="">
            @csrf
            <div class="newsletter-email-input">
            <input type="email" placeholder="Email" aria-label="Email Address">
            <button type="submit" aria-label="Submit"><div class="icon"><img src="{{ asset('assets/icons/arrow-right.svg') }}" alt="submit"></div></button>
            </div>
        </form>
    </div>
</div>
</div>
{{-- <div class="footer-2">
    <p> <span>&copy;</span> {{ date('Y') }} Tresoar E-Depot. All rights reserved.</p>
</div> --}}
    
</footer>