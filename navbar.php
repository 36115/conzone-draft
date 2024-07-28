<style>
    .form-check-input:checked {
        background-color: #3282fc;
        border-color: #3282fc; 
    }
    .text-primary {
        color: #3282fc !important; 
    }

    [data-bs-theme="light"] .navbar-brand {
        color: #000;
    }

    [data-bs-theme="dark"] .navbar-brand {
        color: #fff;
    }

    [data-bs-theme="light"] .bg-light, 
    [data-bs-theme="light"] .navbar.bg-light {
        background-color: #f8f9fa !important;
    }

    [data-bs-theme="dark"] .bg-light, 
    [data-bs-theme="dark"] .navbar.bg-light {
        background-color: #333a41 !important;
    }

    [data-bs-theme="light"] .nav-link:hover {
        background-color: rgba(0, 0, 0, 0.05);
    }

    [data-bs-theme="dark"] .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.05);
    }

    .nav-link {
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        border-radius: 0.25rem;
    }

    @media (max-width: 991.98px) {
        .navbar-collapse .d-flex {
            flex-direction: column;
            align-items: flex-start !important;
        }

        .navbar-collapse .nav-link,
        .navbar-collapse .btn,
        .navbar-collapse .dropdown {
            margin: 0.5rem 0;
        }
    }
    .nav-link {
        padding: 0.5rem 1rem;
        font-size: 1rem;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }

    .nav-link i {
        margin-right: 0.5rem;
        font-size: 1.2rem;
    }

    [data-bs-theme="light"] .nav-link:hover {
        background-color: rgba(0, 0, 0, 0.05);
        transform: translateY(-2px);
    }

    [data-bs-theme="dark"] .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.05);
        transform: translateY(-2px);
    }

    .btn-nav {
        padding: 0.5rem 1rem;
        font-size: 1rem;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }

    .btn-nav i {
        margin-right: 0.5rem;
        font-size: 1.2rem;
    }

    .btn-primary.rounded-pill {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    [data-bs-theme="light"] .btn-primary {
        background-color: #0d6efd;
        border-color: #0d6efd;
        color: #fff;
    }

    [data-bs-theme="light"] .btn-primary:hover {
        background-color: #0b5ed7;
        border-color: #0a58ca;
    }

    [data-bs-theme="dark"] .btn-primary {
        background-color: #3d8bfd;
        border-color: #3d8bfd;
        color: #fff;
    }

    [data-bs-theme="dark"] .btn-primary:hover {
        background-color: #3282fc;
        border-color: #3282fc;
        color: #fff;
    }

    [data-bs-theme="dark"] .btn-outline-secondary {
        color: #fff;
        border-color: #fff;
    }

    [data-bs-theme="dark"] .btn-outline-secondary:hover {
        color: #000;
        background-color: #fff;
        border-color: #fff;
    }

    .dropdown-menu {
        border-radius: 15px;
        overflow: hidden;
    }

    .collapse.show {
        max-height: 200px;
        overflow-y: auto;
    }

    .bg-primary {
    background-color: #3d81dd !important;
    }

    .dropdown-menu {
    --bs-dropdown-link-active-bg: #3d81dd !important;
    }

    body {
        font-family: 'Mitr', sans-serif;
    }

    #form-card {    
        transition: all 0.1s ease;
    }

    #form-card:hover {
        transform: scale(1.003);
    }

    .card {
        border-radius: 15px;
    }

    .card:hover {   
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .btn-rounded {
        border-radius: 25px;
    }

    .sticky-top {
        top: 20px;
    }

    .card-header:first-child {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .list-group-flush>.list-group-item:last-child {
        border-radius: 15px;
    }

    [data-bs-theme="light"] .btn-outline-secondary {
        color: #000;
        border-color: #000;
    }

    [data-bs-theme="light"] .btn-outline-secondary:hover {
        color: #fff;
        background-color: #000;
        border-color: #000; 
    }

    [data-bs-theme="dark"] .btn-outline-secondary {
        color: #fff;
        border-color: #fff;
    }

    [data-bs-theme="dark"] .btn-outline-secondary:hover {
        color: #000;
        background-color: #fff;
        border-color: #fff; 
    }

    [data-bs-theme="dark"] .btn-outline-secondary:hover {
        color: #000;
        background-color: #fff;
        border-color: #fff; 
    }

    [data-bs-theme="light"] .border-light {
        border-color: #000 !important;
    }

    [data-bs-theme="dark"] .border-light {
        border-color: #fff !important;
    }

    .form-control, .form-select, .btn {
        border-radius: 50px;
    }

    textarea.form-control {
        border-radius: 15px;
    }
</style>
<nav class="navbar bg-light navbar-expand-lg fixed-top mb-5 py-3">
    <div class="container">
        <a class="navbar-brand" href="index.php">ConZone</a>
        <a id="themeToggle" class="btn btn-outline-secondary rounded-pill ms-auto me-2">
            <i class="bi bi-circle-half theme-icon-active"></i>
        </a>
        <button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bi bi-list-nested"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="ms-auto d-flex align-items-center">
                <a class="nav-link rounded-pill me-3" aria-current="page" href="index.php">
                    <i class="bi bi-house-door"></i> Home
                </a>
                <a class="nav-link rounded-pill me-3" href="forums.php">
                    <i class="bi bi-chat-square-text"></i> Forums
                </a>
                <a class="nav-link rounded-pill me-3" href="rules.php">
                    <i class="bi bi-journal-bookmark-fill"></i> Rules
                </a>
                <a class="nav-link rounded-pill me-3" href="about.php">
                    <i class="bi bi-info-circle"></i> About Us
                </a>
                <a class="btn btn-primary rounded-pill btn-nav me-3" href="login.php">
                    <i class="bi bi-box-arrow-in-right"></i> Login / Register
                </a>
            </div>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    (() => {
    'use strict'

    const getStoredTheme = () => localStorage.getItem('theme')
    const setStoredTheme = (theme) => localStorage.setItem('theme', theme)

    const getPreferredTheme = () => {
        const storedTheme = getStoredTheme()
        if (storedTheme) {
            return storedTheme
        }
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
    }

    const setTheme = (theme) => {
        if (theme === 'auto') {
            document.documentElement.setAttribute('data-bs-theme', window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
        } else {
            document.documentElement.setAttribute('data-bs-theme', theme)
        }
    }

    const showActiveTheme = (theme) => {
        const themeToggle = document.querySelector('#themeToggle')
        const themeIcon = themeToggle.querySelector('i')
        
        if (theme === 'light') {
            themeIcon.className = 'bi bi-sun-fill theme-icon-active'
        } else if (theme === 'dark') {
            themeIcon.className = 'bi bi-moon-stars-fill theme-icon-active'
        } else {
            themeIcon.className = 'bi bi-circle-half theme-icon-active'
        }
    }

    setTheme(getPreferredTheme())

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
        const storedTheme = getStoredTheme()
        if (storedTheme !== 'light' && storedTheme !== 'dark') {
            setTheme(getPreferredTheme())
        }
    })

    window.addEventListener('DOMContentLoaded', () => {
        showActiveTheme(getPreferredTheme())

        document.querySelector('#themeToggle').addEventListener('click', () => {
            const currentTheme = getStoredTheme() || 'auto'
            let newTheme
            
            switch(currentTheme) {
                case 'light':
                    newTheme = 'dark'
                    break
                case 'dark':
                    newTheme = 'auto'
                    break
                default:
                    newTheme = 'light'
            }

            setStoredTheme(newTheme)
            setTheme(newTheme)
            showActiveTheme(newTheme)
        })
    })
})()
</script>