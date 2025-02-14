    
@extends('admin.admin_master')
@section('admin')


<header class="header_area">
     @include('admin.head')
 </header>
<aside class="sidebar-wrapper ">
     @include('admin.sidemenu')
</aside>
    <h2>Admin Notifications</h2>
    <ul class="list-group">
        @foreach($notifications as $notification)
            <li class="list-group-item {{ $notification->is_read ? 'text-muted' : '' }}">
                {{ $notification->message }}
                <small class="text-secondary d-block">{{ $notification->created_at->diffForHumans() }}</small>
            </li>
        @endforeach
    </ul>
@endsection
