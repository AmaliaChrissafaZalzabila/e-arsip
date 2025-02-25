<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <!-- Main charts -->
    <div class="row">
      <div class="col-xl-7">
      </div>
      <!-- Quick stats boxes -->
      <div class="row">
      <div class="col-lg-4">
            <!-- Current server load -->
            <div class="card bg-pink text-white">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="dropdown d-inline-flex ms-auto">
                      <i class="ph-folder"></i>
                  </div>
                </div>
                <div>
                  Dokumen
                  <h3 class="mb-0">5</h3>
                </div>
              </div>

              <div class="rounded-bottom overflow-hidden" id="server-load"></div>
            </div>
            <!-- /current server load -->
          </div>

          <div class="col-lg-4">
            <!-- Current server load -->
            <div class="card bg-pink text-white">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="dropdown d-inline-flex ms-auto">
                  <i class="ph-envelope"></i>
                  </div>
                </div>
                <div>
                  Surat Masuk
                  <h3 class="mb-0">10</h3>
                </div>
              </div>

              <div class="rounded-bottom overflow-hidden" id="server-load"></div>
            </div>
            <!-- /current server load -->
          </div>

          <div class="col-lg-4">
            <!-- Current server load -->
            <div class="card bg-pink text-white">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="dropdown d-inline-flex ms-auto">
                  <i class="ph-envelope-open"></i>
                  </div>
                </div>
                <div>
                  Surat Keluar
                  <h3 class="mb-0">2</h3>
                </div>
              </div>

              <div class="rounded-bottom overflow-hidden" id="server-load"></div>
            </div>
            <!-- /current server load -->
          </div>

          <div class="col-lg-4">
            <!-- Current server load -->
            <div class="card bg-pink text-white">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="dropdown d-inline-flex ms-auto">
                  <i class="ph-file"></i>
                  </div>
                </div>

                <div>
                  Jenis Dokumen
                  <h3 class="mb-0">7</h3>
                </div>
              </div>

              <div class="rounded-bottom overflow-hidden" id="server-load"></div>
            </div>
            <!-- /current server load -->
          </div>

          <div class="col-lg-4">
            <!-- Current server load -->
            <div class="card bg-pink text-white">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="dropdown d-inline-flex ms-auto">
                  <i class="ph-chart-line"></i>
                  </div>
                </div>
                <div>
                  Unit Kerja/Bagian
                  <h3 class="mb-0">3</h3>
                </div>
              </div>
              <div class="rounded-bottom overflow-hidden" id="server-load"></div>
            </div>
            <!-- /current server load -->
          </div>

          <div class="col-lg-4">
            <!-- Current server load -->
            <div class="card bg-pink text-white">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="dropdown d-inline-flex ms-auto">
                  <i class="ph-users"></i>
                  </div>
                </div>
                <div>
                  Pengguna
                  <h3 class="mb-0">8</h3>
                </div>
              </div>

              <div class="rounded-bottom overflow-hidden" id="server-load"></div>
            </div>
            <!-- /current server load -->
          </div>
          </div>
        </div>
        <!-- /quick stats boxes -->
      <div class="col-xl-5">
        
      </div>
    </div>
    <!-- /main charts -->

        <!-- Daily sales -->
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <h5 class="mb-0">Aktivitas Hari Ini</h5>
            <div class="d-flex align-items-center ms-auto">
              <div class="dropdown d-inline-flex ms-3">
                <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                  <i class="ph-gear"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a href="#" class="dropdown-item">
                    <i class="ph-arrows-clockwise me-2"></i>
                    Update data
                  </a>
                  <a href="#" class="dropdown-item">
                    <i class="ph-list-dashes me-2"></i>
                    Detailed log
                  </a>
                  <a href="#" class="dropdown-item">
                    <i class="ph-chart-line me-2"></i>
                    Statistics
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <i class="ph-eraser me-2"></i>
                    Clear list
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="chart" id="sales-heatmap"></div>
          </div>

          <div class="table-responsive">
            <table class="table text-nowrap">
              <thead>
                <tr>
                  <th>Dokumen</th>
                  <th>Surat Masuk</th>
                  <th>Surat Keluar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <a href="#" class="d-inline-block me-3">
                      </a>
                      <div>
                      <a href="#">show all-></a>
                      </div>
                    </div>
                  </td>
                  <td>
                    <a href="#">show all-></a>
                  </td>
                  <td>
                  <a href="#">show all-></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /daily sales -->

        <!-- Dashboard content -->
    <div class="row">
      <div class="col-xl-8">
      </div>
          <div class="col-sm-6">
            <!-- Productivity goal -->
            <div class="card text-center">
              <div class="card-body">
                <!-- Progress counter -->
                <div class="svg-center" id="goal-progress"></div>
                <!-- /progress counter -->

                <!-- Bars -->
                <div id="goal-bars"></div>
                <!-- /bars -->
              </div>
            </div>
            <!-- /productivity goal -->
          </div>
        </div>
        <!-- /progress counters -->

        <!-- Daily financials -->
        <div class="card">
          <div class="card-header d-flex align-items-center">
            <div>
              <h2 class="fw-bold">Statistik</h2>
              <h5 class="card-subtitle card-subtitle-dash">Statistik Dokumen berdasarkan Jenis Dokumen</h5>
                    </div>
            <div class="ms-auto">
              <label class="form-check form-switch form-check-reverse">
                <input type="checkbox" class="form-check-input" id="realtime" checked />
                <span class="form-check-label">Realtime</span>
              </label>
            </div>
          </div>

          <div class="card-body">
            <div class="chart mb-3" id="bullets"></div>

            <div class="d-flex mb-3">
              <div class="me-3">
                <div class="bg-pink bg-opacity-10 text-pink lh-1 rounded-pill p-2">
                  <i class="ph-chart-line"></i>
                </div>
              </div>
              <div class="flex-fill">
                Stats for July, 6: <span class="fw-semibold">1938</span> orders, $4220 revenue
                <div class="text-muted fs-sm">2 hours ago</div>
              </div>
            </div>

            <div class="d-flex mb-3">
              <div class="me-3">
                <div class="bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2">
                  <i class="ph-check"></i>
                </div>
              </div>
              <div class="flex-fill">
                Invoices <a href="#">#4732</a> and <a href="#">#4734</a> have been paid
                <div class="text-muted fs-sm">Dec 18, 18:36</div>
              </div>
            </div>

            <div class="d-flex mb-3">
              <div class="me-3">
                <div class="bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2">
                  <i class="ph-users"></i>
                </div>
              </div>
              <div class="flex-fill">
                Affiliate commission for June has been paid
                <div class="text-muted fs-sm">36 minutes ago</div>
              </div>
            </div>

            <div class="d-flex mb-3">
              <div class="me-3">
                <div class="bg-warning bg-opacity-10 text-warning lh-1 rounded-pill p-2">
                  <i class="ph-arrow-counter-clockwise"></i>
                </div>
              </div>
              <div class="flex-fill">
                Order <a href="#">#37745</a> from July, 1st has been refunded
                <div class="text-muted fs-sm">4 minutes ago</div>
              </div>
            </div>

            <div class="d-flex">
              <div class="me-3">
                <div class="bg-teal bg-opacity-10 text-teal lh-1 rounded-pill p-2">
                  <i class="ph-arrow-bend-double-up-right"></i>
                </div>
              </div>
              <div class="flex-fill">
                Invoice <a href="#">#4769</a> has been sent to <a href="#">Robert Smith</a>
                <div class="text-muted fs-sm">Dec 12, 05:46</div>
              </div>
            </div>
          </div>
        </div>
        <!-- /daily financials -->
      </div>
    </div>
    <!-- /dashboard content -->
  </div>
  <!-- /content area -->
</div>
<!-- /main content -->