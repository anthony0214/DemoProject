<nav>
    <ul>
        <li><a 
            class="{{ request()->is("/") ? 'active' : '' }}"
            href="/">HOME</a></li>
        <li><a 
            class="{{ request()->is("cars") ? 'active' : '' }}"
            href="cars">CARS</a></li>
        <li><a 
            class="{{ request()->is("contact-us") ? 'active' : '' }}"
            href="#">CONTACT US</a></li>
        
    </ul>
</nav>