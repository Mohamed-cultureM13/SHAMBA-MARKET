 <!-- Sidebar -->
 <div class="sidebar-fixed position-fixed py-5">

<div class="list-group list-group-flush">
    <a href="#" class="list-group-item active waves-effect">
        <i class="fa fa-pie-chart mr-3"></i>SHAMBA-MARKET
    </a>

    <a href="{{url('a-orders')}}" class="list-group-item list-group-item-action waves-effect">
        <i class="fa fa-money mr-3"></i>Orders</a>

    <a href="{{url('a-products')}}" class="list-group-item list-group-item-action waves-effect">
        <i class="fa fa-table mr-3"></i>Products</a>

    <a href="{{url('users')}}" class="list-group-item list-group-item-action waves-effect">
        <i class="fa fa-users mr-3"></i>Users</a>

    <a href="{{url('admin-profile/'.auth()->user()->id)}}" class="list-group-item list-group-item-action waves-effect">
        <i class="fa fa-user mr-3"></i>Profile</a>
</div>

</div>
<!-- Sidebar -->
