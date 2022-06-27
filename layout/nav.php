<header class="header">
    <div class="header-content">
        <a href="">
            <img class="header-logo" src="img/iteyplus.png" alt="ITEYplus (Instituto Tecnico Empresarial el Yopal) logo">
        </a>
        <img 
        class="header-btn" 
        id="header_btn" 
        src="img/bars-min.png" >
    </div>
</header>
<nav class="nav-bar">
        <ul class="nav-menu">
            <li>
                <a class="link" href="home">
                <i class="fa fa-house"></i> home
                </a>
            </li>
            <li>
                <a class="link" href="salud">
                <i class="fa fa-heart"></i> salud
                </a>
            </li>
            <li>
                <a class="link" href="foro">
                <i class="fa fa-comment"></i> foro
                </a>
            </li>
            <li>
                <form action="search" method="get">
                    <label for="search">
                        <input class="input" type="search" 
                    name="q" 
                    id="search"
                    placeholder="search">

                    <button type="submit">
                       <i class="fa fa-magnifying-glass"></i> 
                    </button>
                    
                    </label>
                </form>
            </li>
        </ul>
        <ul class="nav-user">
            <li>
                <img class="user-img" src="https://picsum.photos/200/200" alt="">
            </li>
           <details>
            <summary>
                <span>
                    user
                </span>
            </summary>
            <ul>
                    <li>
                        <a class="link" href="logout">
                            logout
                        </a>
                    </li>
                </ul>
        </details> 
        </ul>
        
</nav>