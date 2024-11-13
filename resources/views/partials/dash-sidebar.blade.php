<nav class="sidebar  " style="width: 300px;">
    <ul class="list-unstyled">
        <div class="container-fluid list-con">
            <li class="list"><a href="{{route('dashboard')}}" class="text-white">Dashboard</a></li> 
        </div>
        <div class="container-fluid list-con">
            <li class="list"><a href="{{ route('addmenu') }}" class="text-white">Add Menu</a></li>
        </div>
        <div class="container-fluid list-con">
            <li class="list">
                <!-- <a href="view-menu" class="text-white">View Menu</a> -->
                <a href="{{ route('view-menu') }}" class="text-white">View Menu</a>
            </li>
        </div>
    </ul>
</nav>