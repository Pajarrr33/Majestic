

        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Favorite Product
                                    </div>
                                    <div class="card-body">
                                        <canvas id="favorite" width="100%" height="40"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Transactions
                                        <select name="recap" id="" class="float-right">
                                            <option value="Daily">Daily</option>
                                            <option value="Weekly">Weekly</option>
                                            <option value="Monthly">Monthly</option>
                                        </select>
                                        
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <canvas id="recap_daily" width="100%" height="40"></canvas>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <canvas id="recap_weekly" width="100%" height="40" style="display: none;"></canvas>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <canvas id="recap_monthly" width="100%" height="40" style="display: none;"></canvas>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <script>
                    function getWeekRange(weekNumber, year) {
                        var firstDay = new Date(year, 0, 1);
                        var daysToAdd = (weekNumber - 1) * 7 - firstDay.getDay();
                        var startDate = new Date(year, 0, 1 + daysToAdd);
                        var endDate = new Date(startDate.getFullYear(), startDate.getMonth(), startDate.getDate() + 6);
                        return startDate.toLocaleDateString() + ' - ' + endDate.toLocaleDateString();
                    }

                    function getMonthlyRange(MonthNumber, year) {
                        var firstDay = new Date(year, 0, 1);
                        var daysToAdd = (MonthNumber - 1) * 30 - firstDay.getDay();
                        var startDate = new Date(year, 0, 1 + daysToAdd);
                        var endDate = new Date(startDate.getFullYear(), startDate.getMonth(), startDate.getDate() + 29);
                        return startDate.toLocaleDateString() + ' - ' + endDate.toLocaleDateString();
                    }

                    var favoriteItems = <?php echo json_encode($favorite); ?>;
                    var dailyTransactions = <?php echo json_encode($dailyTransactions); ?>;
                    var weeklyData = <?php echo json_encode($weeklyTransactions); ?>;
                    var monthlyData = <?php echo json_encode($monthlyTransactions); ?>;
                    var yearlyData = <?php echo json_encode($yearlyTransactions); ?>;

                    var dailyBackground = [
                        '#8ecae6',
                        '#219ebc',
                        '#126782',
                        '#023047',
                        '#ffb703',
                        '#fd9e02',
                        '#fb8500'
                    ]

                    var weeklyBackground = [
                        '#e63946',
                        '#f1faee',
                        '#a8dadc',
                        '#457b9d',
                        '#1d3557'
                    ]

                    var monthlyBackground = [
                        '#fbf8cc',
                        '#fde4cf',
                        '#ffcfd2',
                        '#f1c0e8',
                        '#cfbaf0',
                        '#a3c4f3',
                        '#90dbf4',
                        '#8eecf5',
                        '#98f5e1',
                        '#b9fbc0',
                        '#2dc653',
                        '#b7efc5'
                    ]

                    // Definisikan array warna latar belakang
                    var backgroundColors = [
                        '#edede9', // Warna untuk bagian pertama
                        '#d6ccc2', // Warna untuk bagian kedua
                        '#f5ebe0',
                        '#e3d5ca',
                        '#d5bdaf'
                        // ... dan seterusnya
                    ];

                    
                    var favoriteItemNames = [];
                    var favoriteItemCounts = [];

                    for (var productId in favoriteItems) {
                        favoriteItemNames.push(favoriteItems[productId].name);
                        favoriteItemCounts.push(favoriteItems[productId].count);
                    }

                    var dailyLabels = dailyTransactions.map(item => item.formatted_date);
                    var dailyValues = dailyTransactions.map(item => item.total_amount);

                    var weeklyLabels = weeklyData.map(item => 'Week ' + item.week_number + ' (' + getWeekRange(item.week_number, new Date().getFullYear()) + ')');;
                    var weeklyValues = weeklyData.map(item => item.total_amount);

                    var monthlyLabels = monthlyData.map(item => 'Month ' + item.month_number + ' (' + getMonthlyRange(item.month_number ,  new Date().getFullYear()) + ')');;
                    var monthlyValues = monthlyData.map(item => item.total_amount);

                    var favoriteItemsChart = new Chart(document.getElementById('favorite'), {
                        type: 'doughnut', // Anda dapat mengganti dengan jenis grafik yang sesuai
                        data: {
                            labels: favoriteItemNames,
                            datasets: [{
                                label: 'Total Purchase',
                                data: Object.values(favoriteItems).map(item => item.count),
                                backgroundColor: backgroundColors, // Warna latar belakang
                                borderColor: backgroundColors, // Warna garis tepi
                                borderWidth: 1
                            }]
                        },
                        options: {
                            
                        }
                    })

                    var dailyChart = new Chart(document.getElementById('recap_daily'), {
                        type: 'bar',
                        data: {
                            labels: dailyLabels,
                            datasets: [{
                                label: 'Total Daily transactions',
                                data: dailyValues,
                                backgroundColor: dailyBackground,
                                borderColor:dailyBackground,
                                borderWidth: 1
                            }]
                        },
                        options: {
                            locale: 'id-ID',
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        callbacks: (value,index,values) => {
                                            return 'Rp ' + value.toLocaleString('id-ID');
                                        }
                                    }
                                }
                            },
                            indexAxis: 'y'
                        }
                    });

                    var weeklyChart = new Chart(document.getElementById('recap_weekly'), {
                        type: 'bar',
                        data: {
                            labels: weeklyLabels,
                            datasets: [{
                                label: 'Total weekly transactions',
                                data: weeklyValues,
                                backgroundColor: weeklyBackground,
                                borderColor: weeklyBackground,
                                borderWidth: 1
                            }]
                        },
                        
                        options: {
                            locale: 'id-ID',
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        callbacks: (value,index,values) => {
                                            return 'Rp ' + value.toLocaleString('id-ID');
                                        }
                                    }
                                }
                            },
                            indexAxis: 'y'
                        }
                    });

                    var MonthlyChart = new Chart(document.getElementById('recap_monthly'), {
                        type: 'bar',
                        data: {
                            labels: monthlyLabels,
                            datasets: [{
                                label: 'Total Montly transactions',
                                data:monthlyValues,
                                backgroundColor: monthlyBackground,
                                borderColor: monthlyBackground,
                                borderWidth: 1
                            }]
                        },
                        
                        options: {
                            locale: 'id-ID',
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        callbacks: (value,index,values) => {
                                            return 'Rp ' + value.toLocaleString('id-ID');
                                        }
                                    }
                                }
                            },
                            indexAxis: 'y'
                        }
                    });

                    $(document).ready(function(){
                        $("select[name=recap]").on("change" , function() {
                            var recap_type = $("select[name=recap]").find(":selected").val();
                            if(recap_type == "Daily") 
                            {
                                $("#recap_daily").show();
                                $("#recap_weekly").css("display", "none");
                                $("#recap_monthly").css("display", "none");
                            } 
                            else if(recap_type == "Weekly") 
                            {
                                $("#recap_weekly").show();
                                $("#recap_daily").css("display", "none");
                                $("#recap_monthly").css("display", "none");
                            } 
                            else if(recap_type == "Monthly") 
                            {
                                $("#recap_monthly").show();
                                $("#recap_daily").css("display", "none");
                                $("#recap_weekly").css("display", "none");
                            }
                        })
                    })
                </script>

