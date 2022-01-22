<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book-open"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Check List</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <table class="table text-white" id="todoList ">
        <tbody id="todoLists"></tbody>
    </table>
    <div class="add mb-3 p-3">
        <div class="form-group">
            <input type="text" class="form-control" id="inputTodo" placeholder="リスト" />
        </div>
        <button id="addBtn" class="btn btn-primary">追加</button>
        <script src="js/sidebarbtn.js"></script>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>