<?php 
use App\Models\Orders;

require_once "resources/views/LayoutHeader.php";
?>
    <title>   EliteTools - Main
</title>

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
	
<!-- Items ShowRoom -->
<div class="block block-rounded">
  <div class="slider-items card text-center border-0 shadow-sm rounded" style="height: 200;"> 
            <div>
          <div class="card-body" style="padding: 10px; text-align: center; position: relative;">
                <!-- 70x70 Picture Based on Type -->
                <div class="d-flex align-items-center justify-content-center mb-2">
                                        <img src="https://www.metalheat.co.uk/wp-content/uploads/2018/11/kisspng-logo-royal-dutch-shell-petroleum-industry-oil-decal-5ac19d18b8eec7.1215187515226381047575.png" 
                           alt="Shell" 
                           style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
                                </div>

              <div class="block-content tab-content">
                  <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                       aria-labelledby="ecom-product-info-tab" tabindex="0">
                      <table class="table table-striped table-borderless">
                          <tbody>
                            <tr>
                              <td style="width: 30%; text-align: left; padding-right: 20px;">Type</td>
                              <td style="width: 70%; text-align: right;">
                                  Shell
                              </td>
                          </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">ID</td>
                                  <td style="width: 70%; text-align: right;">
                                      76
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">DA</td>
                                  <td style="width: 70%; text-align: right;">
                                      7
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">PA</td>
                                  <td style="width: 70%; text-align: right;">
                                      11
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                  </td>
                                  <td style="text-align: right;">
                                      $3.00
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                  </td>
                                  <td style="text-align: right;">
                                      Jan 12 2025
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                  </td>
                                  <td style="text-align: right;">
                                      Seller1
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
                            <a href="shells" class="btn btn-primary" target="_blank">View Shells</a>
                    </div>
      </div>
            <div>
          <div class="card-body" style="padding: 10px; text-align: center; position: relative;">
                <!-- 70x70 Picture Based on Type -->
                <div class="d-flex align-items-center justify-content-center mb-2">
                                        <img src="https://www.metalheat.co.uk/wp-content/uploads/2018/11/kisspng-logo-royal-dutch-shell-petroleum-industry-oil-decal-5ac19d18b8eec7.1215187515226381047575.png" 
                           alt="Shell" 
                           style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
                                </div>

              <div class="block-content tab-content">
                  <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                       aria-labelledby="ecom-product-info-tab" tabindex="0">
                      <table class="table table-striped table-borderless">
                          <tbody>
                            <tr>
                              <td style="width: 30%; text-align: left; padding-right: 20px;">Type</td>
                              <td style="width: 70%; text-align: right;">
                                  Shell
                              </td>
                          </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">ID</td>
                                  <td style="width: 70%; text-align: right;">
                                      81
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">DA</td>
                                  <td style="width: 70%; text-align: right;">
                                      5
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">PA</td>
                                  <td style="width: 70%; text-align: right;">
                                      10
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                  </td>
                                  <td style="text-align: right;">
                                      $2.00
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                  </td>
                                  <td style="text-align: right;">
                                      Jan 16 2025
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                  </td>
                                  <td style="text-align: right;">
                                      Seller1
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
                            <a href="shells" class="btn btn-primary" target="_blank">View Shells</a>
                    </div>
      </div>
            <div>
          <div class="card-body" style="padding: 10px; text-align: center; position: relative;">
                <!-- 70x70 Picture Based on Type -->
                <div class="d-flex align-items-center justify-content-center mb-2">
                                        <img src="https://www.metalheat.co.uk/wp-content/uploads/2018/11/kisspng-logo-royal-dutch-shell-petroleum-industry-oil-decal-5ac19d18b8eec7.1215187515226381047575.png" 
                           alt="Shell" 
                           style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
                                </div>

              <div class="block-content tab-content">
                  <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                       aria-labelledby="ecom-product-info-tab" tabindex="0">
                      <table class="table table-striped table-borderless">
                          <tbody>
                            <tr>
                              <td style="width: 30%; text-align: left; padding-right: 20px;">Type</td>
                              <td style="width: 70%; text-align: right;">
                                  Shell
                              </td>
                          </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">ID</td>
                                  <td style="width: 70%; text-align: right;">
                                      82
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">DA</td>
                                  <td style="width: 70%; text-align: right;">
                                      7
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">PA</td>
                                  <td style="width: 70%; text-align: right;">
                                      20
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                  </td>
                                  <td style="text-align: right;">
                                      $2.00
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                  </td>
                                  <td style="text-align: right;">
                                      Jan 16 2025
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                  </td>
                                  <td style="text-align: right;">
                                      Seller1
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
                            <a href="shells" class="btn btn-primary" target="_blank">View Shells</a>
                    </div>
      </div>
            <div>
          <div class="card-body" style="padding: 10px; text-align: center; position: relative;">
                <!-- 70x70 Picture Based on Type -->
                <div class="d-flex align-items-center justify-content-center mb-2">
                                        <img src="https://www.metalheat.co.uk/wp-content/uploads/2018/11/kisspng-logo-royal-dutch-shell-petroleum-industry-oil-decal-5ac19d18b8eec7.1215187515226381047575.png" 
                           alt="Shell" 
                           style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
                                </div>

              <div class="block-content tab-content">
                  <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                       aria-labelledby="ecom-product-info-tab" tabindex="0">
                      <table class="table table-striped table-borderless">
                          <tbody>
                            <tr>
                              <td style="width: 30%; text-align: left; padding-right: 20px;">Type</td>
                              <td style="width: 70%; text-align: right;">
                                  Shell
                              </td>
                          </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">ID</td>
                                  <td style="width: 70%; text-align: right;">
                                      101
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">DA</td>
                                  <td style="width: 70%; text-align: right;">
                                      13
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">PA</td>
                                  <td style="width: 70%; text-align: right;">
                                      17
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                  </td>
                                  <td style="text-align: right;">
                                      $3.00
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                  </td>
                                  <td style="text-align: right;">
                                      Jan 16 2025
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                  </td>
                                  <td style="text-align: right;">
                                      Seller1
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
                            <a href="shells" class="btn btn-primary" target="_blank">View Shells</a>
                    </div>
      </div>
            <div>
          <div class="card-body" style="padding: 10px; text-align: center; position: relative;">
                <!-- 70x70 Picture Based on Type -->
                <div class="d-flex align-items-center justify-content-center mb-2">
                                        <img src="https://www.metalheat.co.uk/wp-content/uploads/2018/11/kisspng-logo-royal-dutch-shell-petroleum-industry-oil-decal-5ac19d18b8eec7.1215187515226381047575.png" 
                           alt="Shell" 
                           style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
                                </div>

              <div class="block-content tab-content">
                  <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                       aria-labelledby="ecom-product-info-tab" tabindex="0">
                      <table class="table table-striped table-borderless">
                          <tbody>
                            <tr>
                              <td style="width: 30%; text-align: left; padding-right: 20px;">Type</td>
                              <td style="width: 70%; text-align: right;">
                                  Shell
                              </td>
                          </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">ID</td>
                                  <td style="width: 70%; text-align: right;">
                                      100
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">DA</td>
                                  <td style="width: 70%; text-align: right;">
                                      3
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">PA</td>
                                  <td style="width: 70%; text-align: right;">
                                      4
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                  </td>
                                  <td style="text-align: right;">
                                      $3.00
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                  </td>
                                  <td style="text-align: right;">
                                      Jan 16 2025
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                  </td>
                                  <td style="text-align: right;">
                                      Seller1
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
                            <a href="shells" class="btn btn-primary" target="_blank">View Shells</a>
                    </div>
      </div>
            <div>
          <div class="card-body" style="padding: 10px; text-align: center; position: relative;">
                <!-- 70x70 Picture Based on Type -->
                <div class="d-flex align-items-center justify-content-center mb-2">
                                        <img src="https://knight.domains/support/wp-content/uploads/2022/05/cpanel-1.png" 
                           alt="cPanel" 
                           style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
                                </div>

              <div class="block-content tab-content">
                  <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                       aria-labelledby="ecom-product-info-tab" tabindex="0">
                      <table class="table table-striped table-borderless">
                          <tbody>
                            <tr>
                              <td style="width: 30%; text-align: left; padding-right: 20px;">Type</td>
                              <td style="width: 70%; text-align: right;">
                                  cPanel
                              </td>
                          </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">ID</td>
                                  <td style="width: 70%; text-align: right;">
                                      88
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">DA</td>
                                  <td style="width: 70%; text-align: right;">
                                      12
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">PA</td>
                                  <td style="width: 70%; text-align: right;">
                                      22
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                  </td>
                                  <td style="text-align: right;">
                                      $5.00
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                  </td>
                                  <td style="text-align: right;">
                                      Jan 16 2025
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                  </td>
                                  <td style="text-align: right;">
                                      Seller1
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
                            <a href="cpanels" class="btn btn-primary" target="_blank">View cPanels</a>
                    </div>
      </div>
            <div>
          <div class="card-body" style="padding: 10px; text-align: center; position: relative;">
                <!-- 70x70 Picture Based on Type -->
                <div class="d-flex align-items-center justify-content-center mb-2">
                                        <img src="https://knight.domains/support/wp-content/uploads/2022/05/cpanel-1.png" 
                           alt="cPanel" 
                           style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
                                </div>

              <div class="block-content tab-content">
                  <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                       aria-labelledby="ecom-product-info-tab" tabindex="0">
                      <table class="table table-striped table-borderless">
                          <tbody>
                            <tr>
                              <td style="width: 30%; text-align: left; padding-right: 20px;">Type</td>
                              <td style="width: 70%; text-align: right;">
                                  cPanel
                              </td>
                          </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">ID</td>
                                  <td style="width: 70%; text-align: right;">
                                      120
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">DA</td>
                                  <td style="width: 70%; text-align: right;">
                                      4
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">PA</td>
                                  <td style="width: 70%; text-align: right;">
                                      4
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                  </td>
                                  <td style="text-align: right;">
                                      $7.00
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                  </td>
                                  <td style="text-align: right;">
                                      Jan 16 2025
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                  </td>
                                  <td style="text-align: right;">
                                      Seller1
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
                            <a href="cpanels" class="btn btn-primary" target="_blank">View cPanels</a>
                    </div>
      </div>
            <div>
          <div class="card-body" style="padding: 10px; text-align: center; position: relative;">
                <!-- 70x70 Picture Based on Type -->
                <div class="d-flex align-items-center justify-content-center mb-2">
                                        <img src="https://knight.domains/support/wp-content/uploads/2022/05/cpanel-1.png" 
                           alt="cPanel" 
                           style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
                                </div>

              <div class="block-content tab-content">
                  <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                       aria-labelledby="ecom-product-info-tab" tabindex="0">
                      <table class="table table-striped table-borderless">
                          <tbody>
                            <tr>
                              <td style="width: 30%; text-align: left; padding-right: 20px;">Type</td>
                              <td style="width: 70%; text-align: right;">
                                  cPanel
                              </td>
                          </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">ID</td>
                                  <td style="width: 70%; text-align: right;">
                                      155
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">DA</td>
                                  <td style="width: 70%; text-align: right;">
                                      3
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">PA</td>
                                  <td style="width: 70%; text-align: right;">
                                      14
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                  </td>
                                  <td style="text-align: right;">
                                      $6.00
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                  </td>
                                  <td style="text-align: right;">
                                      Jan 16 2025
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                  </td>
                                  <td style="text-align: right;">
                                      Seller1
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
                            <a href="cpanels" class="btn btn-primary" target="_blank">View cPanels</a>
                    </div>
      </div>
            <div>
          <div class="card-body" style="padding: 10px; text-align: center; position: relative;">
                <!-- 70x70 Picture Based on Type -->
                <div class="d-flex align-items-center justify-content-center mb-2">
                                        <img src="https://knight.domains/support/wp-content/uploads/2022/05/cpanel-1.png" 
                           alt="cPanel" 
                           style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
                                </div>

              <div class="block-content tab-content">
                  <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                       aria-labelledby="ecom-product-info-tab" tabindex="0">
                      <table class="table table-striped table-borderless">
                          <tbody>
                            <tr>
                              <td style="width: 30%; text-align: left; padding-right: 20px;">Type</td>
                              <td style="width: 70%; text-align: right;">
                                  cPanel
                              </td>
                          </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">ID</td>
                                  <td style="width: 70%; text-align: right;">
                                      55
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">DA</td>
                                  <td style="width: 70%; text-align: right;">
                                      3
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">PA</td>
                                  <td style="width: 70%; text-align: right;">
                                      12
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                  </td>
                                  <td style="text-align: right;">
                                      $5.00
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                  </td>
                                  <td style="text-align: right;">
                                      Jan 16 2025
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                  </td>
                                  <td style="text-align: right;">
                                      Seller1
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
                            <a href="cpanels" class="btn btn-primary" target="_blank">View cPanels</a>
                    </div>
      </div>
            <div>
          <div class="card-body" style="padding: 10px; text-align: center; position: relative;">
                <!-- 70x70 Picture Based on Type -->
                <div class="d-flex align-items-center justify-content-center mb-2">
                                        <img src="https://knight.domains/support/wp-content/uploads/2022/05/cpanel-1.png" 
                           alt="cPanel" 
                           style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
                                </div>

              <div class="block-content tab-content">
                  <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                       aria-labelledby="ecom-product-info-tab" tabindex="0">
                      <table class="table table-striped table-borderless">
                          <tbody>
                            <tr>
                              <td style="width: 30%; text-align: left; padding-right: 20px;">Type</td>
                              <td style="width: 70%; text-align: right;">
                                  cPanel
                              </td>
                          </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">ID</td>
                                  <td style="width: 70%; text-align: right;">
                                      210
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">DA</td>
                                  <td style="width: 70%; text-align: right;">
                                      3
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 30%; text-align: left; padding-right: 20px;">PA</td>
                                  <td style="width: 70%; text-align: right;">
                                      10
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                  </td>
                                  <td style="text-align: right;">
                                      $1.00
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                  </td>
                                  <td style="text-align: right;">
                                      Jan 16 2025
                                  </td>
                              </tr>
                              <tr>
                                  <td style="width: 20%; text-align: left; padding-right: 20px;">
                                      <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                  </td>
                                  <td style="text-align: right;">
                                      Seller1
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
                            <a href="cpanels" class="btn btn-primary" target="_blank">View cPanels</a>
                    </div>
      </div>
        </div>
</div>
  
  <style>/* Items ShowRoom Slider */
.slider-items .slick-slide {
    padding: 0 5px; /* Reduce spacing between slides */
}

.slider-items .card-body {
    padding: 10px !important; /* Reduce padding */
}

.slider-items img {
    width: 70px; /* Ensure image size */
    height: 70px; /* Ensure image size */
    object-fit: cover; /* Maintain aspect ratio */
    border-radius: 8px; /* Rounded corners */
}

.slider-items .table {
    font-size: 0.8em; /* Reduce font size */
    margin-top: 5px; /* Reduce spacing */
}

.slider-items .table th,
.slider-items .table td {
    padding: 0.2rem; /* Reduce cell padding */
}
  </style>
  
    <!-- End Items ShowRoom -->   
      <!-- Accounts ShowRoom -->
    <div class="block block-rounded">
      <div class="slider card text-center border-0 shadow-sm rounded" style="height: 300;"> 
                    <div>
              <div class="card-body" style="padding: 20px; text-align: center; position: relative;">
                                    <div class="position-relative product-container">
                    <img class="img-fluid options-item w-100" 
                    style="height: 200px; object-fit: cover;"
                    src="../storage/images/section_image/1723994004_66c20f9497893.jpg" 
                    alt="Facebook"
                    loading="lazy">
                                            <div class="item-info-overlay">
                          <div class="rounded-info-block">
                              Facebook accounts with 11$ price
                          </div>
                      </div>
                                        </div>
                    
                  <div class="block-content tab-content">
                      <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                          aria-labelledby="ecom-product-info-tab" tabindex="0">
                          <table class="table table-striped table-borderless">
                              <thead>
                                  <tr>
                                      <th colspan="2" class="product-name">Facebook</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Email</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Password</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                      </td>
                                      <td style="text-align: right;">
                                          $11.00
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                      </td>
                                      <td style="text-align: right;">
                                          Sep 27 2024
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                      </td>
                                      <td style="text-align: right;">
                                          Seller2
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
  
                                    <p class="card-text" style="font-size: 1.1em; color: #007bff;">
                      <a href="product/20" class="btn btn-primary">View</a>
                  </p>
                                </div>
          </div>
                    <div>
              <div class="card-body" style="padding: 20px; text-align: center; position: relative;">
                                    <div class="position-relative product-container">
                    <img class="img-fluid options-item w-100" 
                    style="height: 200px; object-fit: cover;"
                    src="../storage/images/section_image/1723994004_66c20f9497893.jpg" 
                    alt="Facebook"
                    loading="lazy">
                                            <div class="item-info-overlay">
                          <div class="rounded-info-block">
                              Facebook accounts with 10$ price
                          </div>
                      </div>
                                        </div>
                    
                  <div class="block-content tab-content">
                      <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                          aria-labelledby="ecom-product-info-tab" tabindex="0">
                          <table class="table table-striped table-borderless">
                              <thead>
                                  <tr>
                                      <th colspan="2" class="product-name">Facebook</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Email</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Password</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                      </td>
                                      <td style="text-align: right;">
                                          $10.00
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                      </td>
                                      <td style="text-align: right;">
                                          Sep 27 2024
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                      </td>
                                      <td style="text-align: right;">
                                          Seller2
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
  
                                    <p class="card-text" style="font-size: 1.1em; color: #007bff;">
                      <a href="product/11" class="btn btn-primary">View</a>
                  </p>
                                </div>
          </div>
                    <div>
              <div class="card-body" style="padding: 20px; text-align: center; position: relative;">
                                    <div class="position-relative product-container">
                    <img class="img-fluid options-item w-100" 
                    style="height: 200px; object-fit: cover;"
                    src="../storage/images/section_image/1723994004_66c20f9497893.jpg" 
                    alt="Facebook"
                    loading="lazy">
                                            <div class="item-info-overlay">
                          <div class="rounded-info-block">
                              Facebook accounts with 11$ price
                          </div>
                      </div>
                                        </div>
                    
                  <div class="block-content tab-content">
                      <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                          aria-labelledby="ecom-product-info-tab" tabindex="0">
                          <table class="table table-striped table-borderless">
                              <thead>
                                  <tr>
                                      <th colspan="2" class="product-name">Facebook</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Email</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Password</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                      </td>
                                      <td style="text-align: right;">
                                          $11.00
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                      </td>
                                      <td style="text-align: right;">
                                          Sep 27 2024
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                      </td>
                                      <td style="text-align: right;">
                                          Seller2
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
  
                                    <p class="card-text" style="font-size: 1.1em; color: #007bff;">
                      <a href="product/21" class="btn btn-primary">View</a>
                  </p>
                                </div>
          </div>
                    <div>
              <div class="card-body" style="padding: 20px; text-align: center; position: relative;">
                                    <div class="position-relative product-container">
                    <img class="img-fluid options-item w-100" 
                    style="height: 200px; object-fit: cover;"
                    src="../storage/images/section_image/1723994392_66c2111898364.jpg" 
                    alt="Telegram"
                    loading="lazy">
                                            <div class="item-info-overlay">
                          <div class="rounded-info-block">
                              telegram accounts with 11$ price
                          </div>
                      </div>
                                        </div>
                    
                  <div class="block-content tab-content">
                      <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                          aria-labelledby="ecom-product-info-tab" tabindex="0">
                          <table class="table table-striped table-borderless">
                              <thead>
                                  <tr>
                                      <th colspan="2" class="product-name">Telegram</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Email</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Password</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                      </td>
                                      <td style="text-align: right;">
                                          $11.00
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                      </td>
                                      <td style="text-align: right;">
                                          Sep 27 2024
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                      </td>
                                      <td style="text-align: right;">
                                          Seller2
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
  
                                    <p class="card-text" style="font-size: 1.1em; color: #007bff;">
                      <a href="product/28" class="btn btn-primary">View</a>
                  </p>
                                </div>
          </div>
                    <div>
              <div class="card-body" style="padding: 20px; text-align: center; position: relative;">
                                    <div class="position-relative product-container">
                    <img class="img-fluid options-item w-100" 
                    style="height: 200px; object-fit: cover;"
                    src="../storage/images/section_image/1737236480_678c20005ad9a.jpeg" 
                    alt="Twitter [ X ]"
                    loading="lazy">
                                            <div class="item-info-overlay">
                          <div class="rounded-info-block">
                              twitter accounts with mixed range prices
                          </div>
                      </div>
                                        </div>
                    
                  <div class="block-content tab-content">
                      <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                          aria-labelledby="ecom-product-info-tab" tabindex="0">
                          <table class="table table-striped table-borderless">
                              <thead>
                                  <tr>
                                      <th colspan="2" class="product-name">Twitter [ X ]</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Email</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Password</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                      </td>
                                      <td style="text-align: right;">
                                          $11.00
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                      </td>
                                      <td style="text-align: right;">
                                          Sep 27 2024
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                      </td>
                                      <td style="text-align: right;">
                                          Seller2
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
  
                                    <p class="card-text" style="font-size: 1.1em; color: #007bff;">
                      <a href="product/41" class="btn btn-primary">View</a>
                  </p>
                                </div>
          </div>
                    <div>
              <div class="card-body" style="padding: 20px; text-align: center; position: relative;">
                                    <div class="position-relative product-container">
                    <img class="img-fluid options-item w-100" 
                    style="height: 200px; object-fit: cover;"
                    src="../storage/images/section_image/1723994392_66c2111898364.jpg" 
                    alt="Telegram"
                    loading="lazy">
                                            <div class="item-info-overlay">
                          <div class="rounded-info-block">
                              telegram accounts with 11$ price
                          </div>
                      </div>
                                        </div>
                    
                  <div class="block-content tab-content">
                      <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                          aria-labelledby="ecom-product-info-tab" tabindex="0">
                          <table class="table table-striped table-borderless">
                              <thead>
                                  <tr>
                                      <th colspan="2" class="product-name">Telegram</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Email</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Password</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                      </td>
                                      <td style="text-align: right;">
                                          $11.00
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                      </td>
                                      <td style="text-align: right;">
                                          Sep 27 2024
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                      </td>
                                      <td style="text-align: right;">
                                          Seller2
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
  
                                    <p class="card-text" style="font-size: 1.1em; color: #007bff;">
                      <a href="product/26" class="btn btn-primary">View</a>
                  </p>
                                </div>
          </div>
                    <div>
              <div class="card-body" style="padding: 20px; text-align: center; position: relative;">
                                    <div class="position-relative product-container">
                    <img class="img-fluid options-item w-100" 
                    style="height: 200px; object-fit: cover;"
                    src="../storage/images/section_image/1723994004_66c20f9497893.jpg" 
                    alt="Facebook"
                    loading="lazy">
                                            <div class="item-info-overlay">
                          <div class="rounded-info-block">
                              Facebook accounts with 10$ price
                          </div>
                      </div>
                                        </div>
                    
                  <div class="block-content tab-content">
                      <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                          aria-labelledby="ecom-product-info-tab" tabindex="0">
                          <table class="table table-striped table-borderless">
                              <thead>
                                  <tr>
                                      <th colspan="2" class="product-name">Facebook</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Email</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Password</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                      </td>
                                      <td style="text-align: right;">
                                          $10.00
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                      </td>
                                      <td style="text-align: right;">
                                          Sep 27 2024
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                      </td>
                                      <td style="text-align: right;">
                                          Seller2
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
  
                                    <p class="card-text" style="font-size: 1.1em; color: #007bff;">
                      <a href="product/15" class="btn btn-primary">View</a>
                  </p>
                                </div>
          </div>
                    <div>
              <div class="card-body" style="padding: 20px; text-align: center; position: relative;">
                                    <div class="position-relative product-container">
                    <img class="img-fluid options-item w-100" 
                    style="height: 200px; object-fit: cover;"
                    src="../storage/images/section_image/1723994004_66c20f9497893.jpg" 
                    alt="Facebook"
                    loading="lazy">
                                            <div class="item-info-overlay">
                          <div class="rounded-info-block">
                              some information about my current items
                          </div>
                      </div>
                                        </div>
                    
                  <div class="block-content tab-content">
                      <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                          aria-labelledby="ecom-product-info-tab" tabindex="0">
                          <table class="table table-striped table-borderless">
                              <thead>
                                  <tr>
                                      <th colspan="2" class="product-name">Facebook</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Email</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Password</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                      </td>
                                      <td style="text-align: right;">
                                          $20.00
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                      </td>
                                      <td style="text-align: right;">
                                          Aug 25 2024
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                      </td>
                                      <td style="text-align: right;">
                                          Seller2
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
  
                                    <p class="card-text" style="font-size: 1.1em; color: #007bff;">
                      <a href="product/3" class="btn btn-primary">View</a>
                  </p>
                                </div>
          </div>
                    <div>
              <div class="card-body" style="padding: 20px; text-align: center; position: relative;">
                                    <div class="position-relative product-container">
                    <img class="img-fluid options-item w-100" 
                    style="height: 200px; object-fit: cover;"
                    src="../storage/images/section_image/1723994004_66c20f9497893.jpg" 
                    alt="Facebook"
                    loading="lazy">
                                            <div class="item-info-overlay">
                          <div class="rounded-info-block">
                              Facebook accounts with 10$ price
                          </div>
                      </div>
                                        </div>
                    
                  <div class="block-content tab-content">
                      <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                          aria-labelledby="ecom-product-info-tab" tabindex="0">
                          <table class="table table-striped table-borderless">
                              <thead>
                                  <tr>
                                      <th colspan="2" class="product-name">Facebook</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Email</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Password</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                      </td>
                                      <td style="text-align: right;">
                                          $10.00
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                      </td>
                                      <td style="text-align: right;">
                                          Sep 27 2024
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                      </td>
                                      <td style="text-align: right;">
                                          Seller2
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
  
                                    <p class="card-text" style="font-size: 1.1em; color: #007bff;">
                      <a href="product/9" class="btn btn-primary">View</a>
                  </p>
                                </div>
          </div>
                    <div>
              <div class="card-body" style="padding: 20px; text-align: center; position: relative;">
                                    <div class="position-relative product-container">
                    <img class="img-fluid options-item w-100" 
                    style="height: 200px; object-fit: cover;"
                    src="../storage/images/section_image/1723994004_66c20f9497893.jpg" 
                    alt="Facebook"
                    loading="lazy">
                                            <div class="item-info-overlay">
                          <div class="rounded-info-block">
                              Facebook accounts with 11$ price
                          </div>
                      </div>
                                        </div>
                    
                  <div class="block-content tab-content">
                      <div class="tab-pane pull-x active" id="ecom-product-info" role="tabpanel"
                          aria-labelledby="ecom-product-info-tab" tabindex="0">
                          <table class="table table-striped table-borderless">
                              <thead>
                                  <tr>
                                      <th colspan="2" class="product-name">Facebook</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Email</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 30%; text-align: left; padding-right: 20px;">Password</td>
                                      <td style="width: 70%; text-align: right;">
                                                                                        <i class="fa fa-check text-success"></i>
                                                                                </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-dollar-sign text-muted me-1"></i> Price
                                      </td>
                                      <td style="text-align: right;">
                                          $11.00
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fa fa-fw fa-calendar text-muted me-1"></i> Date
                                      </td>
                                      <td style="text-align: right;">
                                          Sep 27 2024
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="width: 20%; text-align: left; padding-right: 20px;">
                                          <i class="fab fa-fw fa-mailchimp text-muted me-1"></i> Seller
                                      </td>
                                      <td style="text-align: right;">
                                          Seller2
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
  
                                    <p class="card-text" style="font-size: 1.1em; color: #007bff;">
                      <a href="product/23" class="btn btn-primary">View</a>
                  </p>
                                </div>
          </div>
                </div>
  </div>
  
  <style>.product-name {
      color: inherit !important;
      background-color: transparent !important;
  }
  
  @media (prefers-color-scheme: dark) {
      .product-name {
          border-bottom: 2px solid rgba(255, 255, 255, 0.1);
      }
  }
  
  .product-container {
      position: relative;
      width: 100%;
      height: 200px;
      overflow: hidden;
      cursor: pointer;
      border-radius: 8px;
  }
  
  .options-item {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: all 0.5s ease;
  }
  
  .item-info-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      padding: 15px;
      display: flex;
      justify-content: center;
      transition: all 0.4s ease;
      background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0) 100%);
  }
  
  .rounded-info-block {
      background-color: rgba(0, 0, 0, 0.2);
      color: white;
      padding: 8px 15px;
      border-radius: 12px;
      backdrop-filter: blur(2px);
      -webkit-backdrop-filter: blur(2px);
      font-size: 1em;
      word-wrap: break-word;
      max-width: 90%;
      text-align: center;
      transform: translateY(-5px);
      transition: all 0.4s ease;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
      border: 1px solid rgba(255, 255, 255, 0.1);
  }
  
  /* Hover Effects */
  .product-container:hover .options-item {
      transform: scale(1.05);
  }
  
  .product-container:hover .item-info-overlay {
      background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0) 100%);
  }
  
  .product-container:hover .rounded-info-block {
      background-color: rgba(0, 0, 0, 0.4);
      transform: translateY(0);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
      border: 1px solid rgba(255, 255, 255, 0.2);
  }
  
  /* Table Styles */
  .table {
      margin-top: 15px;
  }
  
  .table th {
      background-color: #f8f9fa;
      border-bottom: 2px solid #dee2e6;
  }
  
  /* Button Styles */
  .btn-primary {
      transition: all 0.3s ease;
      box-shadow: 0 2px 4px rgba(0, 123, 255, 0.1);
  }
  
  .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 123, 255, 0.2);
  }
  
  /* Responsive Styles */
  @media (max-width: 768px) {
      .product-container {
          height: 180px;
      }
      
      .rounded-info-block {
          font-size: 0.9em;
          padding: 6px 12px;
      }
      
      .table td, .table th {
          padding: 0.5rem;
      }
  }
  
  @media (max-width: 576px) {
      .product-container {
          height: 200px;
      }
      
      .table td, .table th {
          padding: 0.5rem;
          font-size: 0.9em;
      }
  
      .slider .card-body {
          padding: 15px !important;
      }
  }
  
  /* Slick Slider Custom Styles */
  .slick-prev, .slick-next {
      z-index: 1;
  }
  
  .slick-prev {
      left: 10px;
  }
  
  .slick-next {
      right: 10px;
  }
  
  .slick-dots {
      bottom: -35px;
  }
  
  .slick-dots li button:before {
      font-size: 12px;
  }
  </style>
  
    <!-- End Accounts ShowRoom -->

<!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                  <i class="fas fa-newspaper text-primary"></i>                   System News and Events
                </h2>
              </div>
              <div class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3">
     				 <!-- Become A seller Mode -->
      
            <!-- Become a Seller Button -->
        <a class="btn btn-sm btn-alt-primary" href="become-seller">
            <i class="fa fa-user-plus me-1"></i> Become a Seller
        </a>
                  </div>
            </div>
          </div>
        </div>
        <!-- END Hero -->
    <div class="content">
      <!-- Timeline -->
      <!--
          Available classes for timeline list:

          'timeline'                                      A normal timeline with icons to the left in all screens
          'timeline timeline-centered timeline-alt'       A centered timeline with odd events to the left and even events to the right (screen width > 1200px)
          'timeline timeline-centered'                    A centered timeline with all events to the left. You can add the class 'timeline-event-alt'
                                                          to 'timeline-event' elements to position them to the right (screen width > 1200px) (useful, if you
                                                          would like to have multiple events to the left or to the right section)
      -->
      <ul class="timeline timeline-alt">
        <!-- Update Event -->
                <ul class="timeline timeline-alt">
            <li class="timeline-event">
                <div class="timeline-event-icon bg-danger">
                    <i class="fab fa-mailchimp"></i>
                </div>
                <div class="timeline-event-block block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">📢 Premium Account Marketplace</h3>
                        <div class="block-options">
                            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                                4 weeks ago
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="d-flex fs-sm">
                            <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                                <img class="img-avatar img-avatar48 img-avatar-thumb" src="https://png.pngtree.com/png-vector/20240612/ourmid/pngtree-monkey-smoke-sigarate-png-image_12720609.png" alt="">
                            </a>
                            <div class="flex-grow-1">
                                <p>
                                    <a class="fw-semibold" href="javascript:void(0)"></a>
                                    🌎 Featuring verified gaming accounts, dating profiles, and API access solutions. Browse our curated selection of trusted accounts. 🌎
                                </p>
                                <p>
                                    <a class="text-dark me-2" href="#">
                                        <i class="fa fa-user fa-fw text-muted"></i> Administrator
                                    
                                    <a class="text-dark me-2" href="javascript:void(0)">
                                        <i class="fa fa-heart fa-fw text-muted"></i> Like
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
            <ul class="timeline timeline-alt">
            <li class="timeline-event">
                <div class="timeline-event-icon bg-danger">
                    <i class="fab fa-mailchimp"></i>
                </div>
                <div class="timeline-event-block block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">💲 Free Bonus</h3>
                        <div class="block-options">
                            <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                                1 month ago
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="d-flex fs-sm">
                            <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                                <img class="img-avatar img-avatar48 img-avatar-thumb" src="https://png.pngtree.com/png-vector/20240612/ourmid/pngtree-monkey-smoke-sigarate-png-image_12720609.png" alt="">
                            </a>
                            <div class="flex-grow-1">
                                <p>
                                    <a class="fw-semibold" href="javascript:void(0)"></a>
                                    🎁 Receive a 25% bonus on all deposits of $50 or more 🎁
                                </p>
                                <p>
                                    <a class="text-dark me-2" href="#">
                                        <i class="fa fa-user fa-fw text-muted"></i> Sales
                                    
                                    <a class="text-dark me-2" href="javascript:void(0)">
                                        <i class="fa fa-heart fa-fw text-muted"></i> Like
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
            <!-- END Update Event -->



        <!-- News Event -->
                <li class="timeline-event">
          <div class="timeline-event-icon bg-success">
            <i class="fa fa-calendar"></i>
          </div>
          <div class="timeline-event-block block">
            <div class="block-header block-header-default">
              <h3 class="block-title">🆕 Account Promotion</h3>
              <div class="block-options">
                <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                  1 month ago
                </div>
              </div>
            </div>
            <div class="block-content">
              <div class="d-flex fs-sm push">
                            <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                                <img class="img-avatar img-avatar48 img-avatar-thumb" src="https://img.freepik.com/premium-photo/monkey-with-sunglasses-his-head_81048-832.jpg" alt="">
                            </a>
                <div class="flex-grow-1">
                  <p>
                    Upgrade your account to [ Premium Seo Buyer] status and get access to many extra features 

Unmask Hosts information  [ Domain &amp; IP &amp; Google Indexing &amp; Domain Authority &amp; Page Authority &amp; Request Shells and pay after checking Shells
                     <a class="fw-semibold"></a>
                  </p>
                  <p>
                    <a class="text-dark me-2" href="#">
                        <i class="fa fa-user fa-fw text-muted"></i> Support
                    </a>
                    
                    <a class="text-dark me-2" href="javascript:void(0)">
                        <i class="fa fa-heart fa-fw text-muted"></i> Like
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </li>
                <li class="timeline-event">
          <div class="timeline-event-icon bg-success">
            <i class="fa fa-calendar"></i>
          </div>
          <div class="timeline-event-block block">
            <div class="block-header block-header-default">
              <h3 class="block-title">⚠️ Important Note</h3>
              <div class="block-options">
                <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                  4 weeks ago
                </div>
              </div>
            </div>
            <div class="block-content">
              <div class="d-flex fs-sm push">
                            <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                                <img class="img-avatar img-avatar48 img-avatar-thumb" src="https://img.freepik.com/premium-photo/monkey-with-sunglasses-his-head_81048-832.jpg" alt="">
                            </a>
                <div class="flex-grow-1">
                  <p>
                    We don&#039;t have ICQ or any other communication tool you can contact us only with the ticket system and telegram will be activated soon
                     <a class="fw-semibold"></a>
                  </p>
                  <p>
                    <a class="text-dark me-2" href="#">
                        <i class="fa fa-user fa-fw text-muted"></i> Support
                    </a>
                    
                    <a class="text-dark me-2" href="javascript:void(0)">
                        <i class="fa fa-heart fa-fw text-muted"></i> Like
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </li>
                <!-- END Photos Event -->

        <!-- System Event -->
        <li class="timeline-event">
          <div class="timeline-event-icon bg-dark">
            <i class="fa fa-cogs"></i>
          </div>
          <div class="timeline-event-block block">
            <div class="block-header block-header-default">
              <h3 class="block-title">System</h3>
              <div class="block-options">
                <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                  1 month ago
                </div>
              </div>
            </div>
            <div class="block-content">
              <div class="alert alert-success d-flex align-items-center justify-content-between" role="alert">
                <div class="flex-grow-1 me-3">
                  <p class="mb-0">WaXa Platform successfully <a class="alert-link" href="javascript:void(0)">updated</a> to v1.0!</p>
                </div>
                <div class="flex-shrink-0">
                  <i class="fa fa-fw fa-check-circle"></i>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- END System Event -->

      </ul>
      <!-- END Timeline -->
    </div>
      </main>
      <!-- Footer -->
    
    <script>
  $(document).ready(function(){
      $('.slider').slick({
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3000,
          responsive: [
              {
                  breakpoint: 1024,
                  settings: {
                      slidesToShow: 2,
                      slidesToScroll: 1,
                      infinite: true,
                      dots: true
                  }
              },
              {
                  breakpoint: 768,
                  settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      dots: true
                  }
              }
          ]
      });
  });
  </script>
  <script>
    $(document).ready(function(){
        $('.slider-items').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4, // Show 6 items at a time
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        dots: true
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true
                    }
                }
            ]
        });
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
      tooltipTriggerList.forEach(tooltipTriggerEl => {
          new bootstrap.Tooltip(tooltipTriggerEl, {
              boundary: 'window',
              trigger: 'hover focus'
          });
      });
    
      document.querySelectorAll('.block-link-pop').forEach(block => {
          const progressBar = block.querySelector('.progress-bar');
          if(progressBar) {
              const originalWidth = progressBar.style.width;
              block.addEventListener('mouseenter', () => {
                  progressBar.style.width = '100%';
              });
              block.addEventListener('mouseleave', () => {
                  progressBar.style.width = originalWidth;
              });
          }
      });
    
      document.querySelectorAll('.block-link-pop').forEach(block => {
          block.addEventListener('click', function(e) {
              const ripple = document.createElement('div');
              ripple.style.position = 'absolute';
              ripple.style.width = '20px';
              ripple.style.height = '20px';
              ripple.style.background = 'rgba(255,255,255,0.4)';
              ripple.style.borderRadius = '50%';
              ripple.style.transform = 'scale(0)';
              ripple.style.pointerEvents = 'none';
              
              const rect = block.getBoundingClientRect();
              ripple.style.left = e.clientX - rect.left - 10 + 'px';
              ripple.style.top = e.clientY - rect.top - 10 + 'px';
              
              block.appendChild(ripple);
              
              setTimeout(() => {
                  ripple.style.transition = 'transform 0.6s ease-out, opacity 0.6s ease-out';
                  ripple.style.transform = 'scale(10)';
                  ripple.style.opacity = '0';
              }, 10);
    
              setTimeout(() => ripple.remove(), 600);
          });
      });
    });
    </script>
  </body>
</html>