@extends('layout.layout')

@php
     $header = 'false';
     $breadcrumb = 'false';
     $footer = 'false';
@endphp

@section('content')
<div id="sidebar" class="sidebar active">
    <button id="sidebarToggle"><i class="fas fa-bars"></i></button>
    <ul class="menu">
        <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li><a href="#"><i class="fas fa-users"></i> Users</a></li>
        <!-- Add more links as needed -->
    </ul>
</div>
<div class="admin-dashboard">
    <div class="admin-header">
        <h2>Admin Dashboard</h2>
        <div class="admin-user">
            <span>Welcome, {{ Auth::user()->name }}</span>
            <div class="user-avatar" onclick="toggleDropdown()">
                <i class="fas fa-user"></i>
                <div class="dropdown-menu" id="userDropdown">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="admin-stats">
        <div class="stat-card">
            <div class="stat-icon" style="background-color: rgba(92, 48, 253, 0.1); color: var(--theme);">
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-content">
                <h3>1,254</h3>
                <p>Total Users</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon" style="background-color: rgba(135, 96, 253, 0.1); color: var(--theme-2);">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="stat-content">
                <h3>542</h3>
                <p>Total Orders</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon" style="background-color: rgba(236, 230, 255, 0.1); color: var(--theme-4);">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="stat-content">
                <h3>$12,540</h3>
                <p>Total Revenue</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon" style="background-color: rgba(43, 43, 107, 0.1); color: var(--theme-3);">
                <i class="fas fa-box-open"></i>
            </div>
            <div class="stat-content">
                <h3>324</h3>
                <p>Products</p>
            </div>
        </div>
    </div>

    <div class="admin-content">
        
        <div class="recent-orders">
            <div class="section-header">
                <h3>Recent Orders</h3>
                <a href="#" class="link-btn">View All <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#ORD-0001</td>
                            <td>John Doe</td>
                            <td>12 May 2023</td>
                            <td>$120.00</td>
                            <td><span class="status completed">Completed</span></td>
                            <td><a href="#" class="action-btn"><i class="fas fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>#ORD-0002</td>
                            <td>Jane Smith</td>
                            <td>11 May 2023</td>
                            <td>$85.50</td>
                            <td><span class="status processing">Processing</span></td>
                            <td><a href="#" class="action-btn"><i class="fas fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>#ORD-0003</td>
                            <td>Robert Johnson</td>
                            <td>10 May 2023</td>
                            <td>$220.00</td>
                            <td><span class="status pending">Pending</span></td>
                            <td><a href="#" class="action-btn"><i class="fas fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>#ORD-0004</td>
                            <td>Emily Davis</td>
                            <td>09 May 2023</td>
                            <td>$65.75</td>
                            <td><span class="status completed">Completed</span></td>
                            <td><a href="#" class="action-btn"><i class="fas fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>#ORD-0005</td>
                            <td>Michael Wilson</td>
                            <td>08 May 2023</td>
                            <td>$150.00</td>
                            <td><span class="status cancelled">Cancelled</span></td>
                            <td><a href="#" class="action-btn"><i class="fas fa-eye"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="quick-stats">
            <div class="chart-container">
                <div class="section-header">
                    <h3>Sales Overview</h3>
                    <select class="nice-select">
                        <option>This Week</option>
                        <option>This Month</option>
                        <option>This Year</option>
                    </select>
                </div>
                <div class="chart-placeholder">
                    <!-- This would be replaced with your actual chart (Chart.js, etc.) -->
                    <div class="chart-dummy">
                        <div class="chart-bar" style="height: 30%;"></div>
                        <div class="chart-bar" style="height: 60%;"></div>
                        <div class="chart-bar" style="height: 45%;"></div>
                        <div class="chart-bar" style="height: 80%;"></div>
                        <div class="chart-bar" style="height: 50%;"></div>
                        <div class="chart-bar" style="height: 70%;"></div>
                        <div class="chart-bar" style="height: 90%;"></div>
                    </div>
                    <div class="chart-labels">
                        <span>Mon</span>
                        <span>Tue</span>
                        <span>Wed</span>
                        <span>Thu</span>
                        <span>Fri</span>
                        <span>Sat</span>
                        <span>Sun</span>
                    </div>
                </div>
            </div>

            <div class="recent-users">
                <div class="section-header">
                    <h3>Recent Users</h3>
                    <a href="#" class="link-btn">View All <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="user-list">
                    <div class="user-item">
                        <div class="user-avatar">
                            <img src="https://via.placeholder.com/40" alt="User">
                        </div>
                        <div class="user-info">
                            <h4>John Doe</h4>
                            <p>john@example.com</p>
                        </div>
                        <span class="user-status active">Active</span>
                    </div>
                    <div class="user-item">
                        <div class="user-avatar">
                            <img src="https://via.placeholder.com/40" alt="User">
                        </div>
                        <div class="user-info">
                            <h4>Jane Smith</h4>
                            <p>jane@example.com</p>
                        </div>
                        <span class="user-status inactive">Inactive</span>
                    </div>
                    <div class="user-item">
                        <div class="user-avatar">
                            <img src="https://via.placeholder.com/40" alt="User">
                        </div>
                        <div class="user-info">
                            <h4>Robert Johnson</h4>
                            <p>robert@example.com</p>
                        </div>
                        <span class="user-status active">Active</span>
                    </div>
                    <div class="user-item">
                        <div class="user-avatar">
                            <img src="https://via.placeholder.com/40" alt="User">
                        </div>
                        <div class="user-info">
                            <h4>Emily Davis</h4>
                            <p>emily@example.com</p>
                        </div>
                        <span class="user-status active">Active</span>
                    </div>
                    <div class="user-item">
                        <div class="user-avatar">
                            <img src="https://via.placeholder.com/40" alt="User">
                        </div>
                        <div class="user-info">
                            <h4>Michael Wilson</h4>
                            <p>michael@example.com</p>
                        </div>
                        <span class="user-status inactive">Inactive</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('sidebarToggle').onclick = function () {
        document.getElementById('sidebar').classList.toggle('active');
    };

    function toggleDropdown() {
        const dropdown = document.getElementById('userDropdown');
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    }
</script>


@endsection
