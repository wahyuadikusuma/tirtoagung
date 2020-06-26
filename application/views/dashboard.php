    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?= base_url("admin/dashboard")?>">Dashboard</a>
          </li>
        </ol>
        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Grafik</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tabel</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Sub Kategori</th>
                    <th>Stock</th>
                    <th>Harga</th>
                    <th>Rating</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Benang Merah</td>
                    <td>Benang</td>
                    <td>Untuk Jahit</td>
                    <td>61</td>
                    <td>$320,800</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <td>Air Mata Bahagia</td>
                    <td>Air</td>
                    <td>Air Asin</td>
                    <td>~ unlimited</td>
                    <td>$500,800</td>
                    <td>5</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
      </div>
      <!-- /.container-fluid -->