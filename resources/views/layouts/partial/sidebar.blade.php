<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>HRM ADMIN</h3>
        <ul class="nav side-menu">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Trang chủ </a></li>

            <li>
                <a href="javascript:;">
                    <i class="fa fa-user"></i> Quản lý tài khoản <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('user-admin.index') }}">Danh sách tài khoản</a></li>
                    <li><a href="{{ route('user-admin.create') }}">Tạo mới tài khoản</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-group"></i> Phân quyền admin<span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('role.index') }}">Vai trò</a></li>
                    <li><a href="{{ route('permission.index') }}">Quyền</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-cc"></i> Quản lý giao dịch <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('transaction-manager.index') }}">Danh sách giao dịch</a></li>
                    <li><a href="{{ route('transaction-manager.individual') }}">Giao dịch cá nhân</a></li>
                    <li><a href="{{ route('transaction-manager.manager') }}">Thống kê doanh thu</a></li>
                    <li><a href="{{ route('transaction-manager.create') }}">Giao dịch</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
