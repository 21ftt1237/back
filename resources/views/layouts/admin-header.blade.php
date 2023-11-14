@auth
    @php
        $loggedIn = true;
    @endphp
@else
    @php
        $loggedIn = false;
    @endphp
@endauth

<header>
<div class="admin-landing-page">
    <div class="navbar">
        <div class="logo" id="storeName" data-value="7"><a href="{{ url('Dashboard-adm') }}">Bruzone</a></div>
        <button class="view-button" onclick="togglePopup2()">ORDERS</button>
        <button class="edit-button" onclick="togglePopup()">EDIT</button>
        <!-- Add your other header elements here -->

        <a href="{{ url('Dashboard-adm') }}" class="nav-link">HOME</a>
        <a href="#" class="nav-link">ABOUT US</a>
        <a href="{{ url('profiletest') }}" class="nav-link">MY ACCOUNT</a>
        <a href="{{ url('Help/help') }}" class="nav-link-last">HELP</a>
        
	@if($loggedIn)
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-sign-up" id="sub">Logout</button>
            </form>
        @endif
    </div>
    </div>
</header>
