<div class="card">
    <div class="card-header">
        <h3 class="card-title">Browser Usage</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <div class="chart-responsive">
                    <canvas id="pieChart" height="150"></canvas>
                </div>
                <!-- ./chart-responsive -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
                <ul class="chart-legend clearfix">
                    <li><i class="far fa-circle text-danger"></i> Chrome</li>
                    <li><i class="far fa-circle text-success"></i> IE</li>
                    <li><i class="far fa-circle text-warning"></i> FireFox</li>
                    <li><i class="far fa-circle text-info"></i> Safari</li>
                    <li><i class="far fa-circle text-primary"></i> Opera</li>
                    <li><i class="far fa-circle text-secondary"></i> Navigator</li>
                </ul>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer p-0">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    United States of America
                    <span class="float-right text-danger">
                        <i class="fas fa-arrow-down text-sm"></i>
                        12%</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    India
                    <span class="float-right text-success">
                        <i class="fas fa-arrow-up text-sm"></i> 4%
                      </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    China
                    <span class="float-right text-warning">
                        <i class="fas fa-arrow-left text-sm"></i> 0%
                      </span>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.footer -->
</div>
<!-- /.card -->
