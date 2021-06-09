<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <form method="get" action="{{asset('coffee/search/{name}')}}"
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">

            <input type="text" class="form-control bg-light border-0 small" name="name" value="{{ $request->name ?? '' }}"  placeholder="Ten san pham..."
                   aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <!-- Example single danger button -->
        </div>

        <!-- Nav Item - Alerts -->


        <!-- Nav Item - Messages -->

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <div class="topbar-divider d-none d-sm-block"></div>

        <div class="topbar-divider d-none d-sm-block"></div>

    </ul>

</nav>
{{--Top Bar--}}
