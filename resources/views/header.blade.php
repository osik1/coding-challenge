<header>
        <div class="items">
            <div class="logos">
                <div class="edapp-logo">
                    <a href=""><img src="{{ asset('assets/materials/e-ADAPP-logo-23.png')}}" alt=""></a>
                    <a href=""class="sd-logo"><img src="{{ asset('assets/materials/3sdclTHE 2.png')}}" alt=""></a>
                </div>

            </div>
            <div class="icons">
                <div class="search-sec">
                    <form action="search" method="post">
                        <input type="text" name="search-term" class="search-input" placeholder="type to search">
                    </form>
                </div>
                <div class="lamp">
                    <a href=""><img src="{{ asset('assets/materials/lamp.png')}}" alt=""></a>
                </div>
                <div class="chats">
                    <a href=""><img src="{{ asset('assets/materials/language.png')}}" alt=""></a>
                </div>
                <div class="profile-pic">
                        <img id="drop" class="dropbtn"  src="{{ asset('assets/materials/bored-6945309_1920.png')}}" alt="">
                    <div id="myDropdown" class="dropdown-content">
                        <a href=""><i class="fa-regular fa-user"></i> Profile</a>
                        <a href="{{ url('/')}}"><i class="fa-light fa-arrow-right-from-bracket"></i> Logout</a>
                    </div>
                </div>
                <div class="username">
                    <p>Kwame Anim</p><p class="title">Farmer</p>
                </div>
            </div>

        </div>
    </header>