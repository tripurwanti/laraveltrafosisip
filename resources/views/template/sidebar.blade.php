<div class="page-sidebar navbar-collapse collapse" style="background-color: #3B5998;" >
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="background-color: #3B5998;">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <li class="sidebar-toggler-wrapper">
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler" >
            </div>
            <!-- END SIDEBAR TOGGLER BUTTON -->
        </li>
        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
        
        <li class="start">
            <a href="{{url('home')}}">
                <i class="icon-home"></i> 
                <span class="title">Home</span>
                <span class="selected"></span>
            </a>
        </li>

        <li>
            <a href="{{route('masterbarang.index')}}">
                <i class="icon-briefcase"></i>
                <span class="title">Master Barang</span>
                <!-- <span class="arrow "></span> -->
            </a>
            
        </li>
        
        <?php //if ($_SESSION['akses_login'] == "Ren UP3"): ?>
            <li class="last <?php // echo $side3; ?>">
                <a href="{{url('stokbarang')}}">
                    <i class="icon-briefcase"></i>
                    <span class="title">Stok Barang</span>
                </a>
            </li>
            <li class="last <?php //echo $side4; ?>">
                <a href="{{url('peminjaman')}}">
                    <i class="icon-users"></i> 
                    <span class="title">Peminjaman</span>
                </a>
            </li>
            <!-- <li class="last <?php //echo $side4; ?>">
                <a href="{{url('pengembalian')}}">
                    <i class="icon-users"></i> 
                    <span class="title">Pengembalin</span>
                </a>
            </li> -->
            <li class="last <?php //echo $side4; ?>">
                <a href="{{url('kehilangan')}}">
                    <i class="icon-users"></i> 
                    <span class="title">Kehilangan</span>
                </a>
            </li>
            <li class="last <?php //echo $side4; ?>">
                <a href="{{url('perawatan')}}">
                    <i class="icon-users"></i> 
                    <span class="title">Perawatan</span>
                </a>
            </li>
        <?php //endif ?>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>
