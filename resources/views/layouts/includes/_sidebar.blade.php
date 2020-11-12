<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li>
                    <a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a>
                </li>
                @if(auth()->user()->role == 'admin')
                    <li>
                        <a href="/siswa" class=""><i class="lnr lnr-user"></i> <span>Data Siswa</span></a>
                    </li>
                    <li>
                        <a href="/guru" class=""><i class="lnr lnr-user"></i> <span>Data Guru</span></a>
                    </li>
                @endif
                <li>
                    <a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Jadwal Mata Pelajaran</span></a>
                </li>
            </ul>
        </nav>
    </div>
</div>