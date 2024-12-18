<nav aria-label="Main Navigation">
    <div>
    <a href="https://tresoar.nl"><img class="logo" src=" {{ asset('assets/icons/tresoar_logo.svg') }} " alt="Tresoar Logo" aria-label="Tresoar Home"></a>
    <div class="tresoar-links">
    <a href="/" class="active"><p class="body1">E-Depot</p></a>

    </div>
    </div>
    <ul>
        <li><a href="/" aria-label="Favorites"><img src="{{ asset('assets/icons/heart.svg') }}" alt=""></a></li>
        <li><a href="en/about" aria-label="Profile"><img src="{{ asset('assets/icons/user.svg') }}" alt=""></a></li>
        <li class="dropdown-toggle" onclick="toggleDropdown()"><img src="{{ asset('assets/icons/globe.svg') }}" alt="">  <span>{{__('all.locale')}}</span></li>
        <div id="dropdown-menu" class="dropdown-menu">
            <a href="{{ route('locale.switch', 'en') }}"><img src="{{ asset('assets/icons/globe.svg') }}" alt=""> EN</a>
            <a href="{{ route('locale.switch', 'nl') }}"><img src="{{ asset('assets/icons/globe.svg') }}" alt=""> NL</a>
            <a href="{{ route('locale.switch', 'fy') }}"><img src="{{ asset('assets/icons/globe.svg') }}" alt=""> FY</a>
        </div>
    </ul>
    {{-- Fix the Href links --}}
</nav>
<style>
    .dropdown-menu {
        display: none;
        position: absolute;
        top: 15px;
        right: calc(((100vw - 1320px) / 2) - 10px);
        background-color: var(--white);

        min-width: 66px;
        z-index: 998;
    }

    .dropdown-menu a {
        color: var(--dark-pink);
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        border: 1px solid var(--dark-pink);
        padding: 5px 10px;
        text-decoration: none;
        display: block;
        margin: 0px;
    }

    .dropdown-menu a:hover {
        background-color: var(--dark-pink);
        color: var(--light-pink);
    }
</style>

<script>
    function toggleDropdown() {
        const menu = document.getElementById('dropdown-menu');
        menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
    }

    // Close the dropdown when clicking outside
    document.addEventListener('click', function (event) {
        const menu = document.getElementById('dropdown-menu');
        const button = document.querySelector('.dropdown-toggle');
        if (!menu.contains(event.target) && !button.contains(event.target)) {
            menu.style.display = 'none';
        }
    });
</script>