<div class="col-md-3 left_col">

    <div class="left_col scroll-view">

    <div class="navbar nav_title">

    <a href="{{ route('admin.portfolios.index') }}" class="site_title"><i class="fa fa-paw"></i> <span></span>Admin</a>

</div>

<div class="clearfix"></div>


<br />

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">

                <ul class="nav child_menu">

                @if(Auth::user() && (Auth::user()->role) == 'admin')

                    <li><a href="{{ route('admin.portfolios.index') }}">Товары</a></li>
                    <li><a href="{{ route('admin.orders.index') }}">Заказы</a></li>
                    <li><a href="{{ route('admin.categories.index') }}">Категории</a></li>
                    <li><a href="{{ route('comenzi.index') }}">Заказы с фото</a></li>
                    <li><a href="{{ route('admin.tags.index') }}">Тэги</a></li>

                @endif


            </li>


        </ul>

    </div>



</div>


    </div>

</div>

