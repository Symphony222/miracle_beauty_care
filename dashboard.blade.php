@extends('layouts.admin')
@section('page-title', 'Dashboard')

@section('content')
<div class="container mx-auto">
    <!-- Overview Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white overflow-hidden shadow rounded-lg border-lavender border">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-lavender rounded-md p-3">
                        <i class="fas fa-users text-beauty text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Total Customers</dt>
                            <dd>
                                <div class="text-lg font-semibold text-gray-900">{{ $totalUsers }}</div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-lavender-light px-4 py-4 sm:px-6">
                <div class="text-sm">
                    <a href="{{ route('admin.customers.index') }}" class="font-medium text-beauty hover:text-beauty-dark flex items-center">
                        View all customers
                        <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow rounded-lg border-lavender border">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-lavender rounded-md p-3">
                        <i class="fas fa-user-shield text-beauty text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Total Admins</dt>
                            <dd>
                                <div class="text-lg font-semibold text-gray-900">{{ $totalAdmins }}</div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-lavender-light px-4 py-4 sm:px-6">
                <div class="text-sm">
                    <a href="#" class="font-medium text-beauty hover:text-beauty-dark flex items-center">
                        Manage admin accounts
                        <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow rounded-lg border-lavender border">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-lavender rounded-md p-3">
                        <i class="fas fa-calendar-alt text-beauty text-xl"></i>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Today's Appointments</dt>
                            <dd>
                                <div class="text-lg font-semibold text-gray-900">{{ $totalAdmins ?? 0 }}</div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-lavender-light px-4 py-4 sm:px-6">
                <div class="text-sm">
                    <a href="{{ route('admin.appointments.index') }}" class="font-medium text-beauty hover:text-beauty-dark flex items-center">
                        View all appointments
                        <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="mb-8">
        <h2 class="text-lg font-playfair font-semibold text-beauty mb-4">Recent Activity</h2>
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul class="divide-y divide-gray-200">
                @forelse($recentActivities as $activity)
                    <li>
                        <div class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="min-w-0 flex-1 flex items-center">
                                    <div class="flex-shrink-0">
                                        <div class="h-10 w-10 rounded-full bg-lavender flex items-center justify-center">
                                            <i class="fas fa-{{ $activity->icon }} text-beauty"></i>
                                        </div>
                                    </div>
                                    <div class="min-w-0 flex-1 px-4">
                                        <div>
                                            <p class="text-sm font-medium text-beauty">{{ $activity->title }}</p>
                                            <p class="text-sm text-gray-500">{{ $activity->description }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ml-5 flex-shrink-0">
                                    <span class="text-xs text-gray-500">{{ $activity->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                @empty
                    <li>
                        <div class="px-6 py-4 text-center text-gray-500">
                            No recent activity found
                        </div>
                    </li>
                @endforelse
            </ul>
        </div>
    </div>

    <!-- Quick Actions -->
    <div>
        <h2 class="text-lg font-playfair font-semibold text-beauty mb-4">Quick Actions</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="{{ route('admin.appointments.create') }}" class="flex items-center p-4 bg-white shadow rounded-lg border-lavender border transition-all hover:shadow-lg">
                <div class="p-3 rounded-full bg-lavender text-beauty mr-4">
                    <i class="fas fa-calendar-plus"></i>
                </div>
                <div>
                    <h3 class="font-medium">New Appointment</h3>
                    <p class="text-sm text-gray-500">Schedule a client service</p>
                </div>
            </a>
            
            <a href="{{ route('admin.customers.create') }}" class="flex items-center p-4 bg-white shadow rounded-lg border-lavender border transition-all hover:shadow-lg">
                <div class="p-3 rounded-full bg-lavender text-beauty mr-4">
                    <i class="fas fa-user-plus"></i>
                </div>
                <div>
                    <h3 class="font-medium">Add Offers</h3>
                    <p class="text-sm text-gray-500">Create a new offer</p>
                </div>
            </a>
            
            <a href="{{ route('admin.services.create') }}" class="flex items-center p-4 bg-white shadow rounded-lg border-lavender border transition-all hover:shadow-lg">
                <div class="p-3 rounded-full bg-lavender text-beauty mr-4">
                    <i class="fas fa-spa"></i>
                </div>
                <div>
                    <h3 class="font-medium">Add Service</h3>
                    <p class="text-sm text-gray-500">Create a new service</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection