<li class="nav-item">
    <form id="logout-form" action="{{ url('/logout') }}" method="post" style="display: none;">
        @csrf
    </form>
    <a class="nav-link" style="color: #f13f3f" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="nav-icon cil-account-logout" style="color: #f13f3f"></i>
        Logout
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('home') }}">
        <i class="nav-icon cil-speedometer"></i>
        Dashboard
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('pendaftaran') }}">
        <i class="nav-icon cil-description"></i>
        Pendaftaran
    </a>
</li>
<li class="nav-title">Master Data</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('agama') }}">
        <i class="nav-icon cil-book"> </i>
            Agama
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('divisi') }}">
        <i class="nav-icon cil-people"></i>
        Divisi
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('izin_ortu') }}">
        <i class="nav-icon cil-chat-bubble"></i>
        Izin Orang Tua
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('kelas') }}">
        <i class="nav-icon cil-school"></i>
        Kelas
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('periode') }}">
        <i class="nav-icon cil-library-building"></i>
        Periode
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('walas') }}">
        <i class="nav-icon cil-contact"></i>
        Walas
    </a>
</li>

