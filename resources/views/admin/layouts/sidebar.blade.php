<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="{{ url('dashboard') }}" >
            <span class="text">TEX & TEX TUNISIA</span>
        </a>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>
    
    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
              
                
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-bar-chart-2"></i><span>Catégories</span></a>
                    <div class="submenu-content"> 
                        <a href="{{ url('categories') }}" class="menu-item">Liste des catégories</a>
                        <a href="{{ url('create-categorie') }}" class="menu-item">Créer catégorie</a>
                        <a href="{{ url('create-sous-categorie') }}" class="menu-item">Créer sous catégorie</a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-box"></i><span>Produits</span></a>
                    <div class="submenu-content">
                        <a href="{{ url('create-produits') }}" class="menu-item"><i class="ik-shopping-bag2"></i> Créer produit</a>
                        <a href="{{ url('produits') }}" class="menu-item"><i class="ik-shopping-bag2"></i>Liste des produits</a>
                    </div>
                </div>
                {{-- <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-command"></i><span>Best Seller</span></a>
                    <div class="submenu-content">
                        <a href="{{ url('create-bestseller') }}" class="menu-item">Créer best seller</a>
                        <a href="{{ url('bestseller') }}" class="menu-item">Liste des best seller</a>
                    </div>
                </div>      --}}
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-gitlab"></i><span>Carousels</span></a>
                    <div class="submenu-content">
                        <a href="{{ url('create-carousel') }}" class="menu-item">Créer carousel</a>
                        <a href="{{ url('carousel') }}" class="menu-item">Liste des carousels</a>
                    </div>
                </div>
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-credit-card"></i><span>Informations</span></a>
                    <div class="submenu-content">
                        <!-- <a href="{{ url('create-information') }}" class="menu-item">Créer information</a> -->
                        <a href="{{ url('information') }}" class="menu-item">Liste des informations</a>
                    </div>
                </div>                
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-credit-card"></i><span>À propos</span></a>
                    <div class="submenu-content">
                        <a href="{{ url('create-propos-admin') }}" class="menu-item">Créer propos</a>
                        <a href="{{ url('propos-admin') }}" class="menu-item">Liste des proposs</a>
                    </div>
                </div>                
                <div class="nav-item has-sub">
                    <a href="#"><i class="ik ik-edit"></i><span>Contact</span></a>
                    <div class="submenu-content">
                        <a href="{{ url('contact-admin') }}" class="menu-item">Liste des contacts</a>
                    </div>
                </div> 
            </nav>
        </div>
    </div>
</div>