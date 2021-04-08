@extends('layouts.app')
@section('main')

                    <!-- Sidebar -->
                    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                        <!-- Sidebar - Brand -->
                        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                            <div class="sidebar-brand-icon rotate-n-15">
                                <i class="fas fa-laugh-wink"></i>
                            </div>
                            <div class="sidebar-brand-text mx-3">Coffee <sup>7030</sup></div>
                        </a>

                        <!-- Divider -->
                        <hr class="sidebar-divider my-0">

                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <i class="fas fa-fw fa-tachometer-alt"></i>
                                <span>Dashboard</span></a>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Heading -->
                        <div class="sidebar-heading">
                            Website Design
                        </div>

                        <!-- Nav Item - Utilities Collapse Menu -->
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-cog"></i>
                                <span>Posts</span>
                            </a>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Post selection</h6>
                                    <a class="collapse-item" href="{{route('dashboard.posts')}}">All Posts</a>
                                    <a class="collapse-item" href="{{route('dashboard.posts.create')}}">Create Post</a>
                                </div>
                            </div>
                        </li>
                        <!-- Nav Item - Utilities Collapse Menu -->
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-cog"></i>
                                <span>Comments & Reviews</span>
                            </a>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">selection</h6>
                                    <a class="collapse-item" href="{{route('dashboard.comments')}}">All Comments</a>
                                    <a class="collapse-item" href="{{route('dashboard.reviews')}}">All Reviews</a>
                                </div>
                            </div>
                        </li>
                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-cog"></i>
                                <span>Images</span>
                            </a>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Images selection</h6>
                                    <a class="collapse-item" href="{{route('dashboard.hero')}}">Hero Images</a>
                                    <a class="collapse-item" href="{{route('dashboard.categories')}}">Categories Images</a>
                                </div>
                            </div>
                        </li>




                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Heading -->
                        <div class="sidebar-heading">
                            Shop settings
                        </div>

                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                                <i class="fas fa-fw fa-folder"></i>
                                <span>products</span>
                            </a>
                            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">product :settings</h6>
                                    <a class="collapse-item" href="{{route('dashboard.products')}}">all products</a>

                                    <div class="collapse-divider"></div>
                                    <h6 class="collapse-header">Add products</h6>
                                    <a class="collapse-item" href="{{route('dashboard.products.create')}}">Add</a>

                                </div>
                            </div>
                        </li>



                        <!-- Nav Item - Tables -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard.sales')}}">
                                <i class="fas fa-fw fa-table"></i>
                                <span>Sales summery</span></a>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider d-none d-md-block">

                        <!-- Sidebar Toggler (Sidebar) -->
                        <div class="text-center d-none d-md-inline">
                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                        </div>

                    </ul>
                    <!-- End of Sidebar -->

                    @yield('content')


@endsection
