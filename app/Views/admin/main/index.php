  <div class="row g-3 mb-4">
      <!-- Balance Card -->
    <!-- Balance Card -->
<div class="col-6 col-lg-3 col-xl-2">
    <a class="block block-rounded block-link-pop bg-body-extra-light h-100" 
       href="add-balance"
       data-bs-toggle="tooltip" 
       data-bs-placement="top"
       title="Manage Your Account Balance">
        <div class="block-content block-content-full p-3">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <div class="fs-sm fw-semibold text-uppercase text-muted mb-2">
                        <i class="fas fa-coins me-1"></i> Account Balance
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="fs-2 fw-bold text-danger">
                            $<?php echo number_format($user->balance, 2); ?>
                        </div>
                        <div class="ms-3">
                            <i class="fas fa-face-sad-tear fa-lg text-danger animate-bounce"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="progress mt-2" style="height: 4px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="5"></div>
            </div>
        </div>
    </a>
</div>

<!-- Orders Card -->
<div class="col-6 col-lg-3 col-xl-2">
    <a class="block block-rounded block-link-pop bg-body-extra-light h-100" 
       href="orders"
       data-bs-toggle="tooltip" 
       data-bs-placement="top"
       title="View Your Order History">
        <div class="block-content block-content-full p-3">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <div class="fs-sm fw-semibold text-uppercase text-muted mb-2">
                        <i class="fas fa-shopping-bag me-1 animate-slide"></i> Total Orders
                    </div>
                    <div class="fs-2 fw-bold text-primary">
                        <?= htmlspecialchars($allOrdersCount ?? 0); ?>
                    </div>
                </div>
                <i class="fas fa-receipt fa-2x text-primary opacity-25 animate-float"></i>
            </div>
        </div>
        <div class="block-content py-2 bg-body-light">
            <p class="fw-medium fs-sm text-primary mb-0">
                <i class="fas fa-arrow-up me-1"></i> Total Orders
            </p>
        </div>
    </a>
</div>

<!-- Tickets Card -->
<div class="col-6 col-lg-3 col-xl-2">
    <a class="block block-rounded block-link-pop bg-body-extra-light h-100" 
       href="tickets"
       data-bs-toggle="tooltip" 
       data-bs-placement="top"
       title="Manage Support Tickets">
        <div class="block-content block-content-full p-3">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <div class="fs-sm fw-semibold text-uppercase text-muted mb-2">
                        <i class="fas fa-headset me-1 text-warning"></i> Open Tickets
                    </div>
                    <div class="fs-2 fw-bold text-warning">
                        <?= htmlspecialchars($ticketsCount ?? 0); ?>
                    </div>
                </div>
                <div class="position-relative">
                    <i class="fas fa-headphones-alt fa-2x text-warning opacity-25"></i>
                </div>
            </div>
            <div class="fs-sm text-muted mt-2">
                <span class="text-success">
                    <i class="fas fa-check-circle me-1 animate-pop"></i> All resolved
                </span>
            </div>
        </div>
    </a>
</div>


<!-- Reports Card -->
<div class="col-6 col-lg-3 col-xl-2">
    <a class="block block-rounded block-link-pop bg-body-extra-light h-100" 
       href="reports"
       data-bs-toggle="tooltip" 
       data-bs-placement="top"
       title="View System Reports">
        <div class="block-content block-content-full p-3">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <div class="fs-sm fw-semibold text-uppercase text-muted mb-2">
                        <i class="fas fa-flag-checkered me-1 animate-pulse"></i> Active Reports
                    </div>
                    <div class="fs-2 fw-bold text-info">
                        <?= htmlspecialchars($reportsCount ?? 0); ?>
                    </div>
                </div>
                <i class="fas fa-chart-area fa-2x text-info opacity-25 animate-float"></i>
            </div>
            <div class="fs-sm text-muted mt-2">
                <span class="text-success">
                    <i class="fas fa-check-circle me-1 animate-pop"></i> No Active Reports
                </span>
            </div>
        </div>
    </a>
</div>

<style>/* Animation Keyframes */
  @keyframes dot-pulse {
      0% { transform: scale(0.8); opacity: 0.5; }
      50% { transform: scale(1.2); opacity: 1; }
      100% { transform: scale(0.8); opacity: 0.5; }
  }

  @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-5px); }
  }

  @keyframes headphone {
      0%, 100% { 
          transform: rotate(0deg) translateY(0);
          opacity: 0.25;
      }
      25% { 
          transform: rotate(15deg) translateY(-3px);
          opacity: 0.4;
      }
      75% { 
          transform: rotate(-15deg) translateY(3px);
          opacity: 0.4;
      }
  }

  @keyframes sound-wave {
      0% { 
          transform: scale(0.8);
          opacity: 0;
      }
      100% { 
          transform: scale(1.8); 
          opacity: 0;
      }
  }

  @keyframes tilt {
      0%, 100% { transform: rotate(0deg); }
      25% { transform: rotate(3deg); }
      75% { transform: rotate(-3deg); }
  }

  @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-8px); }
  }

  @keyframes slide {
      0%, 100% { transform: translateX(0); }
      50% { transform: translateX(5px); }
  }

  @keyframes pop {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.2); }
  }

  /* Animation Classes */
  .animate-bounce { animation: bounce 1.5s ease-in-out infinite; }
  .animate-headphone { 
      animation: headphone 2s ease-in-out infinite; 
      position: relative;
  }
  .animate-headphone::before,
  .animate-headphone::after {
      content: '';
      position: absolute;
      border: 2px solid #ffc107;
      border-radius: 50%;
      width: 30px;
      height: 30px;
      animation: sound-wave 1.5s linear infinite;
  }
  .animate-headphone::before {
      animation-delay: 0.2s;
  }
  .animate-headphone::after {
      animation-delay: 0.5s;
  }
  .animate-tilt { animation: tilt 2s ease-in-out infinite; }
  .animate-float { animation: float 3s ease-in-out infinite; }
  .animate-slide { animation: slide 2s ease-in-out infinite; }
  .animate-pop { animation: pop 1s ease-in-out infinite; }
  .animate-pulse { animation: dot-pulse 1.5s infinite linear; }

  /* Shared Styles */
  .dot-pulse {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      display: inline-block;
  }

  .block-link-pop {
      transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
      border: 1px solid rgba(0,0,0,0.075);
      transform-origin: center;
  }
  
  .block-link-pop:hover {
      transform: translateY(-5px) scale(1.02);
      box-shadow: 0 12px 24px rgba(0,0,0,0.08);
      border-color: rgba(0,0,0,0.1);
  }

  .progress {
      background-color: rgba(0,0,0,0.05);
      overflow: visible;
  }

  .progress-bar {
      position: relative;
      overflow: visible;
      transition: width 0.5s ease-in-out;
  }

  .progress-bar::after {
      content: '';
      position: absolute;
      right: -4px;
      top: -2px;
      width: 8px;
      height: 8px;
      background: inherit;
      border-radius: 50%;
  }
</style>
<!-- End Stats Section -->
	

  <div class="row">
    <div class="col-xl-8 col-xxl-9 d-flex flex-column">
      <div class="block block-rounded flex-grow-1 d-flex flex-column">
        <div class="block-header block-header-default">
          <h3 class="block-title">Earnings Summary</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
              <i class="si si-refresh"></i>
            </button>
            <button type="button" class="btn-block-option">
              <i class="si si-settings"></i>
            </button>
          </div>
        </div>
        <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
          <canvas id="js-chartjs-earnings" width="954" height="450" style="display: block; box-sizing: border-box; height: 150px; width: 318px;"></canvas>
        </div>
        <div class="block-content bg-body-light">
          <div class="row items-push text-center w-100">
            <div class="col-sm-4">
              <dl class="mb-0">
                <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                  <i class="fa fa-caret-up fs-base text-success"></i>
                  <span>2.5%</span>
                </dt>
                <dd class="fs-sm fw-medium text-muted mb-0">Customer Growth</dd>
              </dl>
            </div>
            <div class="col-sm-4">
              <dl class="mb-0">
                <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                  <i class="fa fa-caret-up fs-base text-success"></i>
                  <span>3.8%</span>
                </dt>
                <dd class="fs-sm fw-medium text-muted mb-0">Page Views</dd>
              </dl>
            </div>
            <div class="col-sm-4">
              <dl class="mb-0">
                <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                  <i class="fa fa-caret-down fs-base text-danger"></i>
                  <span>1.7%</span>
                </dt>
                <dd class="fs-sm fw-medium text-muted mb-0">New Products</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-xxl-3 d-flex flex-column">
      <div class="row items-push flex-grow-1">
        <div class="col-md-6 col-xl-12">
          <div class="block block-rounded d-flex flex-column h-100 mb-0">
            <div class="block-content flex-grow-1 d-flex justify-content-between">
              <dl class="mb-0">
                <dt class="fs-3 fw-bold">570</dt>
                <dd class="fs-sm fw-medium text-muted mb-0">Total Orders</dd>
              </dl>
              <div>
                <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-danger bg-danger-light">
                  <i class="fa fa-caret-down me-1"></i>
                  2.2%
                </div>
              </div>
            </div>
            <div class="block-content p-1 text-center overflow-hidden">
              <canvas id="js-chartjs-total-orders" style="height: 90px; display: block; box-sizing: border-box; width: 350px;" width="1050" height="270"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-12">
          <div class="block block-rounded d-flex flex-column h-100 mb-0">
            <div class="block-content flex-grow-1 d-flex justify-content-between">
              <dl class="mb-0">
                <dt class="fs-3 fw-bold">$5,234.21</dt>
                <dd class="fs-sm fw-medium text-muted mb-0">Total Earnings</dd>
              </dl>
              <div>
                <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                  <i class="fa fa-caret-up me-1"></i>
                  4.2%
                </div>
              </div>
            </div>
            <div class="block-content p-1 text-center overflow-hidden">
              <canvas id="js-chartjs-total-earnings" style="height: 90px; display: block; box-sizing: border-box; width: 350px;" width="1050" height="270"></canvas>
            </div>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="block block-rounded d-flex flex-column h-100 mb-0">
            <div class="block-content flex-grow-1 d-flex justify-content-between">
              <dl class="mb-0">
                <dt class="fs-3 fw-bold">264</dt>
                <dd class="fs-sm fw-medium text-muted mb-0">New Customers</dd>
              </dl>
              <div>
                <div class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                  <i class="fa fa-caret-up me-1"></i>
                  9.3%
                </div>
              </div>
            </div>
            <div class="block-content p-1 text-center overflow-hidden">
              <canvas id="js-chartjs-new-customers" style="height: 90px; display: block; box-sizing: border-box; width: 350px;" width="1050" height="270"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Recent Orders</h3>
      <div class="block-options space-x-1">
        <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#one-dashboard-search-orders" data-class="d-none">
          <i class="fa fa-search"></i>
        </button>
        <div class="dropdown d-inline-block">
          <button type="button" class="btn btn-sm btn-alt-secondary" id="dropdown-recent-orders-filters" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-flask"></i>
            Filters
            <i class="fa fa-angle-down ms-1"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-md dropdown-menu-end fs-sm" aria-labelledby="dropdown-recent-orders-filters">
            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
              Pending
              <span class="badge bg-primary rounded-pill">20</span>
            </a>
            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
              Active
              <span class="badge bg-primary rounded-pill">72</span>
            </a>
            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
              Completed
              <span class="badge bg-primary rounded-pill">890</span>
            </a>
            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between" href="javascript:void(0)">
              All
              <span class="badge bg-primary rounded-pill">997</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="one-dashboard-search-orders" class="block-content border-bottom d-none">
      <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
        <div class="push">
          <div class="input-group">
            <input type="text" class="form-control form-control-alt" id="one-ecom-orders-search" name="one-ecom-orders-search" placeholder="Search all orders..">
            <span class="input-group-text bg-body border-0">
              <i class="fa fa-search"></i>
            </span>
          </div>
        </div>
      </form>
    </div>
    <div class="block-content block-content-full">
      <div class="table-responsive">
        <table class="table table-hover table-vcenter">
          <thead>
            <tr>
              <th>Order ID</th>
              <th class="d-none d-xl-table-cell">Customer</th>
              <th>Status</th>
              <th class="d-none d-sm-table-cell text-center">Profit</th>
              <th class="d-none d-sm-table-cell text-end">Created</th>
              <th class="d-none d-sm-table-cell text-end">Value</th>
            </tr>
          </thead>
          <tbody class="fs-sm">
                                      <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00925                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Jack Greene</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 19%;"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">19%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">18 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$1349,90</strong>
                </td>
              </tr>
                          <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00924                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Carol White</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Digital Nomad</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Pending</span>
                </td>
                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 17%;"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">17%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">13 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$1700,32</strong>
                </td>
              </tr>
                          <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00923                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Ryan Flores</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Product Designer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                </td>
                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 5%;"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">5%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">8 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$1629,95</strong>
                </td>
              </tr>
                          <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00922                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Amber Harvey</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                </td>
                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 2%;"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">2%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">20 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$492,56</strong>
                </td>
              </tr>
                          <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00921                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Carol Ray</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Application Manager</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                </td>
                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 6%;"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">6%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">16 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$1805,84</strong>
                </td>
              </tr>
                          <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00920                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Jose Mills</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Application Manager</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                </td>
                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 11%;"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">11%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">23 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$945,54</strong>
                </td>
              </tr>
                          <tr>
                <td>
                  <a class="fw-semibold" href="javascript:void(0)">
                    ORD.00919                  </a>
                  <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Jose Mills</a>
                  <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                </td>
                <td>
                  <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                </td>
                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-success" style="width: 9%;"></div>
                  </div>
                  <p class="fs-xs fw-semibold mb-0">9%</p>
                </td>
                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">22 min ago</td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>$359,13</strong>
                </td>
              </tr>
                      </tbody>
        </table>
      </div>
    </div>
    <div class="block-content block-content-full bg-body-light">
      <nav aria-label="Photos Search Navigation">
        <ul class="pagination pagination-sm justify-content-end mb-0">
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
              Prev
            </a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="javascript:void(0)">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0)" aria-label="Next">
              Next
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>
  </main>