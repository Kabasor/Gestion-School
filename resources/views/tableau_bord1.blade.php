@extends('layouts.default')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style">
                        <li>
                            <h4 class="page-title">Dashboard 2</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xl-8">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Sales</strong> Chart</h2>
                    </div>
                    <div class="body">
                        <div class="recent-report__chart">
                            <div id="barChart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card comp-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="m-t-5 m-b-20">Orders</h4>
                                <h3 class="f-w-700 col-green">2,365</h3>
                                <p class="m-b-0">40% High Then Last Month</p>
                            </div>
                            <div class="col-auto">
                                <div class="chart chart-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card comp-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="m-t-5 m-b-20">New Client</h4>
                                <h3 class="f-w-700 col-orange">258</h3>
                                <p class="m-b-0">10% Less Then Last Month</p>
                            </div>
                            <div class="col-auto">
                                <div class="chart chart-pie"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card comp-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="m-t-5 m-b-20">Profit</h4>
                                <h3 class="f-w-700 col-cyan">$5,698</h3>
                                <p class="m-b-0">13% High Then Last Month</p>
                            </div>
                            <div class="col-auto">
                                <div class="chart compositebar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>User</strong> Project List</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless">
                                <thead>
                                    <tr>
                                        <th>Cust.</th>
                                        <th>Project</th>
                                        <th>Assign Date</th>
                                        <th>Team</th>
                                        <th>Status</th>
                                        <th>Priority</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-img"><img src="../../assets/images/user/user1.jpg" alt="">
                                        </td>
                                        <td>
                                            <h6 class="mb-1">Wordpress Website</h6>
                                            <p class="m-0">
                                                Assigned to<span class="col-green"> Airi Satou</span>
                                            </p>
                                        </td>
                                        <td>12-05-2019</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm"><img class="rounded-circle"
                                                        src="../../assets/images/user/user5.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm"><img class="rounded-circle"
                                                        src="../../assets/images/user/user2.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm"><img class="rounded-circle"
                                                        src="../../assets/images/user/user9.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm"><span class="badge">+2</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge col-red">High</span></td>
                                        <td>
                                            <div class="progress-xs not-rounded progress shadow-style">
                                                <div class="progress-bar progress-bar-danger width-per-40"
                                                    role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-img"><img src="../../assets/images/user/user8.jpg" alt="">
                                        </td>
                                        <td>
                                            <h6 class="mb-1">Android Game App</h6>
                                            <p class="m-0">
                                                Assigned to<span class="col-green"> Sarah Smith </span>
                                            </p>
                                        </td>
                                        <td>22-05-2019</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm"><img class="rounded-circle"
                                                        src="../../assets/images/user/user1.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm"><img class="rounded-circle"
                                                        src="../../assets/images/user/user3.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm"><span class="badge">+4</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge col-green">Low</span></td>
                                        <td>
                                            <div class="progress-xs not-rounded progress shadow-style">
                                                <div class="progress-bar progress-bar-success width-per-30"
                                                    role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-img"><img src="../../assets/images/user/user5.jpg" alt="">
                                        </td>
                                        <td>
                                            <h6 class="mb-1">Java Web Service</h6>
                                            <p class="m-0">
                                                Assigned to<span class="col-green"> Airi Satou</span>
                                            </p>
                                        </td>
                                        <td>27-06-2019</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm"><img class="rounded-circle"
                                                        src="../../assets/images/user/user4.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm"><img class="rounded-circle"
                                                        src="../../assets/images/user/user2.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm"><img class="rounded-circle"
                                                        src="../../assets/images/user/user9.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm"><span class="badge">+3</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge col-blue">Medium</span></td>
                                        <td>
                                            <div class="progress-xs not-rounded progress shadow-style">
                                                <div class="progress-bar width-per-80" role="progressbar"
                                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-img"><img src="../../assets/images/user/user7.jpg" alt="">
                                        </td>
                                        <td>
                                            <h6 class="mb-1">Blize Admin Template</h6>
                                            <p class="m-0">
                                                Assigned to<span class="col-green"> Cara Stevens</span>
                                            </p>
                                        </td>
                                        <td>11-04-2019</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm"><img class="rounded-circle"
                                                        src="../../assets/images/user/user8.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm"><img class="rounded-circle"
                                                        src="../../assets/images/user/user5.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm"><span class="badge">+1</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge col-red">High</span></td>
                                        <td>
                                            <div class="progress-xs not-rounded progress shadow-style">
                                                <div class="progress-bar progress-bar-danger width-per-40"
                                                    role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    <span class="sr-only">40%</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="table-img"><img src="../../assets/images/user/user4.jpg" alt="">
                                        </td>
                                        <td>
                                            <h6 class="mb-1">Wedding IOS App</h6>
                                            <p class="m-0">
                                                Assigned to<span class="col-green"> John Doe</span>
                                            </p>
                                        </td>
                                        <td>19-05-2019</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list">
                                                <li class="avatar avatar-sm"><img class="rounded-circle"
                                                        src="../../assets/images/user/user9.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm"><img class="rounded-circle"
                                                        src="../../assets/images/user/user6.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm"><img class="rounded-circle"
                                                        src="../../assets/images/user/user8.jpg" alt="user">
                                                </li>
                                                <li class="avatar avatar-sm"><span class="badge">+3</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge col-green">Low</span></td>
                                        <td>
                                            <div class="progress-xs not-rounded progress shadow-style">
                                                <div class="progress-bar progress-bar-success width-per-77"
                                                    role="progressbar" aria-valuenow="77" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">mode_edit</i>
                                            </button>
                                            <button class="btn tblActnBtn">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <!-- line chart -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Revenue</strong> Chart</h2>
                    </div>
                    <div class="body">
                        <div class="row text-center p-t-10">
                            <div class="col-sm-4 col-6">
                                <h4 class="margin-0">$ 209 </h4>
                                <p class="text-muted"> Today's Income</p>
                            </div>
                            <div class="col-sm-4 col-6">
                                <h4 class="margin-0">$ 837 </h4>
                                <p class="text-muted">This Week's Income</p>
                            </div>
                            <div class="col-sm-4 col-6">
                                <h4 class="margin-0">$ 3410 </h4>
                                <p class="text-muted">This Month's Income</p>
                            </div>
                        </div>
                        <div id="amchartLineDashboard" class="amChartHeight"></div>
                    </div>
                </div>
            </div>
            <!-- Bar chart with line -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Revenue</strong> Chart</h2>
                    </div>
                    <div class="body">
                        <div id="dumbbellPlotChart" class="amChartHeight"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
