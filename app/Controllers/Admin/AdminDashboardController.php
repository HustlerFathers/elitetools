<?php
namespace App\Controllers;

use App\Core\Session;
use App\Core\Database; // Added import for Database
use App\Models\User;
use App\Models\Rdp;
use App\Models\Shell;
use App\Models\Cpanel;
use App\Models\Mailer;
use App\Models\Smtp;
use App\Models\Lead;
use App\Models\Account;
use App\Models\Scampage;
use App\Models\Tutorial;
use App\Models\BankAccount;
use App\Models\Resseller;
use App\Models\Tickets;
use App\Models\Reports;
use App\Models\Orders;
use App\Models\News;
use App\Models\Banks;
use App\Helpers\CsrfHelper;
use App\Controllers\Controller;

use App\Libraries\Admin\Template as AdminTemplate;
use App\Libraries\Buyer\Template as BuyerTemplate;

class AdminController extends Controller
{


   /**
     * This method retrieves the row counts for various bank log tables.
     * Adjust the queries and table names as needed.
     *
     * @return array
     */


 



    public function OrderIndex()
    {
        Session::start();
        $userId = Session::get('user_id');

        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }

        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }

        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');

        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'Orders Dashboard'
        ];

        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');

        $template->assign('partials/header', 'partials/header', $data);
        $template->assign('content', 'orders/index', $data);
        $template->assign('partials/footer', 'partials/footer', $data);

        $template->display();
    }

    public function RdpIndex()
    {
        Session::start();
        $userId = Session::get('user_id');

        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }
        
        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }
        
        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');
        
        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'RDP Management'
        ];
        
        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        
        $template->assign('partials/header', 'partials/header', $data);
        $template->assign('content', 'rdp/index', $data);
        $template->assign('partials/footer', 'partials/footer', $data);
        
        $template->display();
    }

    public function ShellIndex()
    {
        Session::start();
        $userId = Session::get('user_id');
        
        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }
        
        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }
        
        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');
        
        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'Shell Management'
        ];
        
        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        
        $template->assign('partials/header', 'partials/header', $data);
        $template->assign('content', 'shell/index', $data);
        $template->assign('partials/footer', 'partials/footer', $data);
        
        $template->display();
    }

    public function CpanelIndex()
    {
        Session::start();
        $userId = Session::get('user_id');
        
        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }
        
        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }
        
        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');
        
        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'CPanel Management'
        ];
        
        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        
        $template->assign('partials/header', 'partials/header', $data);
        $template->assign('content', 'cpanel/index', $data);
        $template->assign('partials/footer', 'partials/footer', $data);
        
        $template->display();
    }

    public function MailerIndex()
    {
        Session::start();
        $userId = Session::get('user_id');
        
        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }
        
        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }
        
        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');
        
        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'Mailer Management'
        ];
        
        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        
        $template->assign('partials/header', 'partials/header', $data);
        $template->assign('content', 'mailer/index', $data);
        $template->assign('partials/footer', 'partials/footer', $data);
        
        $template->display();
    }

    public function SmtpIndex()
    {
        Session::start();
        $userId = Session::get('user_id');
        
        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }
        
        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }
        
        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');
        
        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'SMTP Management'
        ];
        
        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        
        $template->assign('partials/header', 'partials/header', $data);
        $template->assign('content', 'smtp/index', $data);
        $template->assign('partials/footer', 'partials/footer', $data);
        
        $template->display();
    }

    public function LeadIndex()
    {
        Session::start();
        $userId = Session::get('user_id');
        
        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }
        
        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }
        
        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');
        
        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'Lead Management'
        ];
        
        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        
        $template->assign('partials/header', 'partials/header', $data);
        $template->assign('content', 'lead/index', $data);
        $template->assign('partials/footer', 'partials/footer', $data);
        
        $template->display();
    }

    public function AccountIndex()
    {
        Session::start();
        $userId = Session::get('user_id');
        
        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }
        
        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }
        
        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');
        
        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'Account Management'
        ];
        
        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        
        $template->assign('partials/header', 'partials/header', $data);
        $template->assign('content', 'account/index', $data);
        $template->assign('partials/footer', 'partials/footer', $data);
        
        $template->display();
    }

    public function ScampageIndex()
    {
        Session::start();
        $userId = Session::get('user_id');
        
        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }
        
        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }
        
        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');
        
        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'Scampage Management'
        ];
        
        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        
        $template->assign('partials/header', 'partials/header', $data);
        $template->assign('content', 'scampage/index', $data);
        $template->assign('partials/footer', 'partials/footer', $data);
        
        $template->display();
    }

    public function TutorialIndex()
    {
        Session::start();
        $userId = Session::get('user_id');
        
        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }
        
        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }
        
        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');
        
        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'Tutorial Management'
        ];
        
        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        
        $template->assign('partials/header', 'partials/header', $data);
        $template->assign('content', 'tutorial/index', $data);
        $template->assign('partials/footer', 'partials/footer', $data);
        
        $template->display();
    }

    public function BankAccountIndex()
    {
        Session::start();
        $userId = Session::get('user_id');
        
        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }
        
        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }
        
        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');
        
        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'Bank Account Management'
        ];
        
        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        
        $template->assign('partials/header', 'partials/header', $data);
        $template->assign('content', 'bankaccount/index', $data);
        $template->assign('partials/footer', 'partials/footer', $data);
        
        $template->display();
    }

    public function RessellerIndex()
    {
        Session::start();
        $userId = Session::get('user_id');
        
        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }
        
        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }
        
        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');
        
        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'Resseller Management'
        ];
        
        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        
        $template->assign('partials/header', 'partials/header', $data);
        $template->assign('content', 'resseller/index', $data);
        $template->assign('partials/footer', 'partials/footer', $data);
        
        $template->display();
    }

    public function TicketsIndex()
    {
        Session::start();
        $userId = Session::get('user_id');
        
        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }
        
        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }
        
        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');
        
        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'Tickets Management'
        ];
        
        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        
        $template->assign('partials/header', 'partials/header', $data);
        $template->assign('content', 'tickets/index', $data);
        $template->assign('partials/footer', 'partials/footer', $data);
        
        $template->display();
    }

    public function ReportsIndex()
    {
        Session::start();
        $userId = Session::get('user_id');
        
        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }
        
        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }
        
        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');
        
        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'Reports Management'
        ];
        
        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        
        $template->assign('partials/header', 'partials/header', $data);
        $template->assign('content', 'reports/index', $data);
        $template->assign('partials/footer', 'partials/footer', $data);
        
        $template->display();
    }

    public function NewsIndex()
    {
        Session::start();
        $userId = Session::get('user_id');
        
        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }
        
        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }
        
        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');
        
        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'News Management'
        ];
        
        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        
        $template->assign('partials/header', 'partials/header', $data);
        $template->assign('content', 'news/index', $data);
        $template->assign('partials/footer', 'partials/footer', $data);
        
        $template->display();
    }

    public function AdminToolsvisIndex()
    {
        Session::start();
        $userId = Session::get('user_id');
        
        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            header("Location: /login");
            exit;
        }
        
        if ($user->resseller !== "1") {
            header("Location: ../");
            exit;
        }
        
        $csrf_token   = CsrfHelper::generateToken();
        $bearer_token = Session::get('api_token');
        
        $data = [
            'user'         => $user,
            'csrf_token'   => $csrf_token,
            'bearer_token' => $bearer_token,
            'page_title'   => 'Dashboard'
        ];
        
        $template = new AdminTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        
        $template->assign('admin/partials/header', 'admin/partials/header', $data);
        $template->assign('content', 'admin/toolsvis/index', $data);
        $template->assign('admin/partials/footer', 'admin/partials/footer', $data);
        
        $template->display();
    }




    public function getData($unused = null)
    {
        $show = filter_input(INPUT_GET, 'show', FILTER_SANITIZE_STRING);
        $draw = intval(filter_input(INPUT_GET, 'draw', FILTER_VALIDATE_INT)) ?: 1;
    
        $filters = [];
        $country = filter_input(INPUT_GET, 'country', FILTER_SANITIZE_STRING);
        $resseller = filter_input(INPUT_GET, 'resseller', FILTER_SANITIZE_STRING);
        if ($country) $filters['country'] = $country;
        if ($resseller) $filters['resseller'] = $resseller;
    
        Session::start();
        $userId = Session::get('user_id');
    
        if (!$userId || !($user = User::findById($userId))) {
            return $this->json(['error' => 'Unauthorized']);
        }
    
        if ($user->resseller !== "1") {
            return $this->json(['error' => 'Forbidden']);
        }
    
        $allowedBanks = [
            "huntingtonbanks", "chasebanks", "citibanks", "suntrustbanks",
            "woodforestbanks", "pncbanks", "nfcubanks", "boabanks", "bbvabanks",
            "rbcbanks", "tdbanks", "scotiabanks", "barclaybanks", "hsbcbanks",
            "llyodbanks", "coinzoombanks"
        ];
    
        $showLower = strtolower($show);
        if (in_array($showLower, $allowedBanks)) {
            $data = BankAccount::getAvailableByType($show, $filters);
        } elseif ($showLower === 'allbanks') {
            $data = BankAccount::getAllAvailableBanks($filters);
        } else {
            switch ($showLower) {
                case 'rdps':       $data = Rdp::getAvailable(); break;
                case 'stufs':      $data = Shell::getAvailable(); break;
                case 'cpanels':    $data = Cpanel::getAvailable(); break;
                case 'mailers':    $data = Mailer::getAvailable(); break;
                case 'smtps':      $data = Smtp::getAvailable(); break;
                case 'leads':      $data = Lead::getAvailable(); break;
                case 'accounts':   $data = Account::getAvailable(); break;
                case 'scampages':  $data = Scampage::getAvailable(); break;
                case 'tutorials':  $data = Tutorial::getAvailable(); break;
                default:           $data = []; break;
            }
        }
    
        $total = count($data);
        return $this->json([
            'draw' => $draw,
            'recordsTotal' => $total,
            'recordsFiltered' => $total,
            'data' => $data,
            'csrf_token' => CsrfHelper::generateToken(),
            'bearer_token' => Session::get('api_token')
        ]);
    }

    public function delete()
    {
        Session::start();
        $userId = Session::get('user_id');
        if (!$userId || !($user = User::findById($userId))) {
            return $this->json(['error' => 'Unauthorized']);
        }
    
        if ($user->resseller !== "1") {
            return $this->json(['error' => 'Forbidden']);
        }
    
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $table = filter_input(INPUT_GET, 'table', FILTER_SANITIZE_STRING);
        if (!$id || !$table) {
            return $this->json(['error' => 'Invalid parameters']);
        }
    
        $allowedBanks = [
            "huntingtonbanks", "chasebanks", "citibanks", "suntrustbanks",
            "woodforestbanks", "pncbanks", "nfcubanks", "boabanks", "bbvabanks",
            "rbcbanks", "tdbanks", "scotiabanks", "barclaybanks", "hsbcbanks",
            "llyodbanks", "coinzoombanks"
        ];
    
        $tableLower = strtolower($table);
        $result = false;
    
        if (in_array($tableLower, $allowedBanks)) {
            $result = BankAccount::deleteByType($id, $table, $user->username);
        } else {
            switch ($tableLower) {
                case 'rdps':       $result = Rdp::delete($id); break;
                case 'stufs':      $result = Shell::delete($id); break;
                case 'cpanels':    $result = Cpanel::delete($id); break;
                case 'mailers':    $result = Mailer::delete($id); break;
                case 'smtps':      $result = Smtp::delete($id); break;
                case 'leads':      $result = Lead::delete($id); break;
                case 'accounts':   $result = Account::delete($id); break;
                case 'scampages':  $result = Scampage::delete($id); break;
                case 'tutorials':  $result = Tutorial::delete($id); break;
                default:
                    return $this->json(['error' => 'Invalid table type']);
            }
        }
    
        return $this->json($result === true
            ? ['success' => 'Item deleted successfully']
            : ['error' => 'Deletion failed']
        );
    }

    private function json(array $response)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response);
        exit;
    }

    // ------------------------------
    // Helper methods for authentication and template creation
    // ------------------------------

    private function getAuthenticatedUser()
    {
        Session::start();
        $userId = Session::get('user_id');
        if (!$userId || !($user = User::findById($userId))) {
            Session::destroy();
            $this->redirect('/login');
        }
        return $user;
    }

    private function createTemplate($type = 'admin')
    {
        $template = $type === 'admin' ? new AdminTemplate() : new BuyerTemplate();
        $template->setViewsPath('app/Views');
        $template->setExtension('php');
        return $template;
    }

    // ------------------------------
    // Admin Dashboard Page
    // ------------------------------

public function adminMainIndex()
{
    $user = $this->getAuthenticatedUser();
    if ($user->resseller !== "1") {
        $this->redirect('/');
    }

    $usersCount     = User::countAll();
    $ticketsPending = Tickets::countPendingTickets();
    $reportsPending = Reports::countPendingReports();
    $sellersCount   = Resseller::countAll();
    $lastTickets    = Tickets::getLastTickets(5);
    $lastUsers      = User::getLastUsers(5);
    $topSellers     = Resseller::getTopSellersForWeek(5);

    $salesData = [];
    for ($i = 4; $i >= 1; $i--) {
        $startDate = date('Y-m-d', strtotime("-$i days"));
        $endDate   = date('Y-m-d', strtotime("-" . ($i - 1) . " days"));
        $sales     = Orders::sumSalesBetween("$startDate 00:00:00", "$endDate 00:00:00");
        $salesData[] = [
            'day'   => date('l', strtotime($startDate)),
            'sales' => $sales
        ];
    }

    $registrationData = [];
    for ($i = 3; $i >= 0; $i--) {
        $date  = date('Y-m-d', strtotime("-$i days"));
        $count = User::countByRegistrationDate($date);
        $registrationData[] = [
            'day'   => date('l', strtotime($date)),
            'count' => $count
        ];
    }

    // Fetch available accounts for specific bank types.
    $huntingtonbanks = \App\Models\BankAccount::getAvailableByType('huntingtonbanks');
    $chasebanks      = \App\Models\BankAccount::getAvailableByType('chasebanks');

    $data = [
        'user'              => $user,
        'usersCount'        => $usersCount,
        'ticketsPending'    => $ticketsPending,
        'reportsPending'    => $reportsPending,
        'sellersCount'      => $sellersCount,
        'lastTickets'       => $lastTickets,
        'lastUsers'         => $lastUsers,
        'topSellers'        => $topSellers,
        'salesData'         => $salesData,
        'registrationData'  => $registrationData,
        'csrf_token'        => \App\Helpers\CsrfHelper::generateToken(),
        'bearer_token'      => \App\Core\Session::get('api_token'),
        'page_title'        => 'Admin Dashboard',
        // Pass the bank arrays to the view so you can count them in your header
        'huntingtonbanks'   => $huntingtonbanks,
        'chasebanks'        => $chasebanks
    ];

    $template = $this->createTemplate('admin');
    $template->assign('admin/partials/header', 'admin/partials/header', $data);
    $template->assign('content', 'admin/main/index', $data);
    $template->assign('admin/partials/footer', 'admin/partials/footer', $data);
    $template->display();
}
    // ------------------------------
    // Buyer Dashboard Page
    // ------------------------------
    
    public function buyerMainIndex()
    {
        $user = $this->getAuthenticatedUser();
        $ordersByUser     = Orders::findByBuyer($user->username);
        $allOrdersCount   = Orders::countAllOrders();
        $completedCount   = Orders::countCompletedOrders();
        $reportedCount    = Orders::countReportedOrders();
        $rejectedCount    = Orders::countRejectedOrders();
        $tickets          = Tickets::findByUser($user->username);
        $ticketsCount     = count($tickets);
        $newAdminReplies  = Tickets::countNewAdminReplies();
        $refundedCount    = Tickets::countRefundedTickets();
        $reportsCount     = (new Reports())->countActiveReports($user->id);
        $news             = News::findAll() ?: [];
    
        $data = [
            'user'            => $user,
            'orders'          => $ordersByUser,
            'allOrdersCount'  => $allOrdersCount,
            'completedCount'  => $completedCount,
            'reportedCount'   => $reportedCount,
            'rejectedCount'   => $rejectedCount,
            'ticketsCount'    => $ticketsCount,
            'newAdminReplies' => $newAdminReplies,
            'refundedCount'   => $refundedCount,
            'reportsCount'    => $reportsCount,
            'news'            => $news,
            'csrf_token'      => CsrfHelper::generateToken(),
            'bearer_token'    => Session::get('api_token'),
            'tableConfig'     => $this->tableConfig ?? [],
            'page_title'      => 'Dashboard'
        ];
    
        $template = $this->createTemplate('buyer');
        $template->assign('buyer/partials/header', 'buyer/partials/header', $data);
        $template->assign('content', 'main/index', $data);
        $template->assign('buyer/partials/footer', 'buyer/partials/footer', $data);
        $template->display();
    }
    
    // ------------------------------
    // Additional helper methods
    // ------------------------------

    protected function jsonResponse($data, $statusCode = 200)
    {
        header('Content-Type: application/json');
        http_response_code($statusCode);
        echo json_encode($data);
        exit();
    }
    
    private function handleSessionAndUser()
    {
        Session::start();
        $user_id = Session::get('user_id');
        if (!$user_id) {
            Session::destroy();
            $this->redirect('/login');
            return null;
        }
    
        $user = User::findById($user_id);
        if (!$user) {
            Session::destroy();
            $this->redirect('/login');
            return null;
        }
        return $user;
    }
    
    // ------------------------------
    // Rendering index pages using the Template class
    // ------------------------------
    
    /**
     * Render index pages for a bank using the Template class.
     *
     * @param string $bankName The bank key (e.g. "chase", "hsbc", etc.)
     * @param mixed $banks Bank data array.
     */

    /**
     * Render index pages for a bank using the Template class.
     * The view path is built dynamically using the region.
     *
     * For example:
     *  - If $bankName is "barclay", the region is UK so view is "banks/uk/barclay-log-full-info/index"
     *  - If $bankName is "chase", the region is USA so view is "banks/usa/chase-log-full-info/index"
     *  - If $bankName is "td", the region is Canada so view is "banks/canada/td-log-full-info/index"
     *
     * @param string $bankName The bank key.
     * @param array  $banks    The bank data.
     */
    private function renderIndex(string $bankName, $banks)
    {
        $user = $this->handleSessionAndUser();
        if (is_null($user)) return;
    
        $csrf_token = CsrfHelper::generateToken();
        // Load countrycodes if needed.
        $countrycodes = require 'config/countrycodes.php';
    
        // Define a mapping from bank names to regions.
        // Adjust the arrays as needed for your application.
        $regionMapping = [
            'usa'    => ['chase', 'huntington', 'citi', 'suntrusat', 'woodforest', 'pnc', 'nfcu', 'boa', 'bbva', 'cashapp', 'cashapp-verified'],
            'canada' => ['td', 'rbc', 'bmo'],
            'uk'     => ['barclay', 'hsbc', 'llyod', 'coinzoom']
        ];
    
        // Determine region (default to USA if not found)
        $region = 'usa';
        foreach ($regionMapping as $r => $banksInRegion) {
            if (in_array(strtolower($bankName), $banksInRegion)) {
                $region = $r;
                break;
            }
        }
    
        // Prepare data for the view
        $data = [
            'user'        => $user,
            'banks'       => $banks,
            'csrf_token'  => $csrf_token,
            'page_title'  => ucfirst($bankName) . ' Banks',
            'countrycodes'=> $countrycodes
        ];
    
        $template = $this->createTemplate('buyer');
        $template->assign('partials/header', 'partials/header', $data);
    
        // Build the view path dynamically based on region and bank name.
        // For example: "banks/uk/barclay-log-full-info/index"
        $contentView = "banks/{$region}/{$bankName}-log-full-info/index";
    
        $template->assign('content', $contentView, $data);
        $template->assign('partials/footer', 'partials/footer', $data);
        $template->display();
    }
    
    /**
     * Generic method to get bank data.
     *
     * @param string $bankDataMethod The static method of the Banks model.
     */
    private function getBankData($bankDataMethod)
    {
        try {
            $banks = call_user_func(['App\Models\Banks', $bankDataMethod], $_GET);
            if (!$banks) {
                return $this->jsonResponse(['error' => 'No data found'], 404);
            }
            $response = [
                'draw'            => intval($_GET['draw'] ?? 1),
                'recordsTotal'    => count($banks),
                'recordsFiltered' => count($banks),
                'data'            => array_map(function ($bank) {
                    return [
                        'id'           => $bank['id'] ?? '',
                        'acctype'      => $bank['acctype'] ?? '',
                        'country'      => $bank['country'] ?? '',
                        'country_code' => strtolower($bank['country_code'] ?? 'us'),
                        'infos'        => $bank['infos'] ?? '',
                        'price'        => $bank['price'] ?? 0,
                        'date'         => $bank['date'] ?? '',
                        'resseller'    => $bank['resseller'] ?? '',
                        'bankname'     => $bank['bankname'] ?? '',
                        'balance'      => $bank['balance'] ?? 0
                    ];
                }, $banks)
            ];
            return $this->jsonResponse($response);
        } catch (\Exception $e) {
            error_log("Error in getBankData: " . $e->getMessage());
            return $this->jsonResponse(['error' => 'Server error'], 500);
        }
    }
    
    /**
     * Updated purchase method that handles the purchase logic for a given bank table.
     *
     * @param string $bankTable The name of the bank table (e.g., "chasebanks")
     * @return void
     */
    public function buy($bankTable)
    {
        Session::start();
        $db = Database::connect();
        $user_id = Session::get('user_id');
        if (!$user_id) {
            return $this->jsonResponse(['error' => 'Unauthorized'], 403);
        }
        $itemId = $_POST['id'] ?? null;
        $token  = $_POST['_token'] ?? null;
        if (!$itemId || !$token || !CsrfHelper::validateToken($token)) {
            return $this->jsonResponse(['error' => 'Invalid parameters or CSRF token.'], 400);
        }
        // Fetch user details
        $stmt = $db->prepare("SELECT * FROM users WHERE id = ?");
        if (!$stmt) {
            error_log("User query prepare failed: " . $db->error);
            return $this->jsonResponse(['error' => 'Server error.'], 500);
        }
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        if (!$user) {
            return $this->jsonResponse(['error' => 'User not found.'], 404);
        }
        // Fetch item details using the dynamic bank table
        $query = "SELECT * FROM `$bankTable` WHERE id = ? AND sold = 0";
        $stmt = $db->prepare($query);
        if (!$stmt) {
            error_log("Item query prepare failed for table $bankTable: " . $db->error);
            return $this->jsonResponse(['error' => 'Server error.'], 500);
        }
        $stmt->bind_param("i", $itemId);
        $stmt->execute();
        $item = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        if (!$item) {
            return $this->jsonResponse(['error' => 'Item not found or already sold.'], 404);
        }
        // Check user balance
        if ($user['balance'] < $item['price']) {
            return $this->jsonResponse(['error' => 'Insufficient balance.'], 400);
        }
        // Set default values for missing fields
        $login     = $item['login'] ?? 'N/A';
        $password  = $item['pass'] ?? 'N/A';
        $url       = $item['url'] ?? 'N/A';
        $infos     = $item['infos'] ?? 'No info available';
        $acctype   = $item['acctype'] ?? 'Unknown';
        $resseller = $item['resseller'] ?? 'Unknown';
        // Deduct balance from the user and update purchase count
        $newBalance = $user['balance'] - $item['price'];
        $stmt = $db->prepare("UPDATE users SET balance = ?, ipurchassed = ipurchassed + 1 WHERE id = ?");
        if (!$stmt) {
            error_log("User update prepare failed: " . $db->error);
            return $this->jsonResponse(['error' => 'Server error.'], 500);
        }
        $stmt->bind_param("di", $newBalance, $user_id);
        $stmt->execute();
        $stmt->close();
        // Mark the item as sold in the dynamic bank table
        $date = date("Y-m-d H:i:s");
        $stmt = $db->prepare("UPDATE `$bankTable` SET sold = 1, sto = ?, dateofsold = ? WHERE id = ?");
        if (!$stmt) {
            error_log("Item update prepare failed for table $bankTable: " . $db->error);
            return $this->jsonResponse(['error' => 'Server error.'], 500);
        }
        $stmt->bind_param("ssi", $user['username'], $date, $itemId);
        $stmt->execute();
        $stmt->close();
        // Insert a record for the purchase into the orders table
        $stmt = $db->prepare("INSERT INTO orders (s_id, buyer, type, date, country, infos, url, login, pass, price, resseller) 
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            error_log("Order insert prepare failed: " . $db->error);
            return $this->jsonResponse(['error' => 'Server error.'], 500);
        }
        $stmt->bind_param("issssssssds", 
                          $itemId, $user['username'], $acctype, $date, $item['country'], $infos, 
                          $url, $login, $password, $item['price'], $resseller);
        $stmt->execute();
        $stmt->close();
        // Update reseller sales stats in the resseller table
        $stmt = $db->prepare("UPDATE resseller SET allsales = allsales + ?, soldb = soldb + ? WHERE username = ?");
        if (!$stmt) {
            error_log("Resseller update prepare failed: " . $db->error);
            return $this->jsonResponse(['error' => 'Server error.'], 500);
        }
        $stmt->bind_param("dds", $item['price'], $item['price'], $resseller);
        $stmt->execute();
        $stmt->close();
        return $this->jsonResponse(["success" => "Purchase successful."]);
    }
    
    // ------------------------------
    // USA Banks Endpoints
    // ------------------------------
    public function getChaseIndex() { $this->renderIndex('chase', Banks::getChaseBanks([])); }
    public function getHuntingtonIndex() { $this->renderIndex('huntington', Banks::getHuntingtonBanks([])); }
    public function getCitiIndex() { $this->renderIndex('citi', Banks::getCitiBanks([])); }
    public function getSuntrusatIndex() { $this->renderIndex('suntrusat', Banks::getSuntrusatBanks([])); }
    public function getWoodforestIndex() { $this->renderIndex('woodforest', Banks::getWoodforestBanks([])); }
    public function getPNCIndex() { $this->renderIndex('pnc', Banks::getPNCBanks([])); }
    public function getNFCUIndex() { $this->renderIndex('nfcu', Banks::getNFCUBanks([])); }
    public function getBOAIndex() { $this->renderIndex('boa', Banks::getBOABanks([])); }
    public function getBBVAIndex() { $this->renderIndex('bbva', Banks::getBBVABanks([])); }
    public function getCashAppIndex() { $this->renderIndex('cashapp', Banks::getCashAppBanks([])); }
    public function getCashAppVerifiedIndex() { $this->renderIndex('cashapp-verified', Banks::getCashAppVerifiedBanks([])); }
    
    public function getChaseData() { $this->getBankData('getChaseBanks'); }
    public function getHuntingtonData() { $this->getBankData('getHuntingtonBanks'); }
    public function getCitiData() { $this->getBankData('getCitiBanks'); }
    public function getSuntrusatData() { $this->getBankData('getSuntrusatBanks'); }
    public function getWoodforestData() { $this->getBankData('getWoodforestBanks'); }
    public function getPNCData() { $this->getBankData('getPNCBanks'); }
    public function getNFCUData() { $this->getBankData('getNFCUBanks'); }
    public function getBOAData() { $this->getBankData('getBOABanks'); }
    public function getBBVAData() { $this->getBankData('getBBVABanks'); }
    public function getCashAppData() { $this->getBankData('getCashAppBanks'); }
    public function getCashAppVerifiedData() { $this->getBankData('getCashAppVerifiedBanks'); }
    
    public function buyChase() { $this->buy('chasebanks'); }
    public function buyHuntington() { $this->buy('huntingtonbanks'); }
    public function buyCiti() { $this->buy('citibanks'); }
    public function buySuntrusat() { $this->buy('suntrusatbanks'); }
    public function buyWoodforest() { $this->buy('woodforestbanks'); }
    public function buyPNC() { $this->buy('pncbanks'); }
    public function buyNFCU() { $this->buy('nfcubanks'); }
    public function buyBOA() { $this->buy('boabanks'); }
    public function buyBBVA() { $this->buy('bbvabanks'); }
    public function buyCashApp() { $this->buy('cashapp'); }
    public function buyCashAppVerified() { $this->buy('cashappverified'); }
    
    // ------------------------------
    // UK Banks Endpoints
    // ------------------------------
    public function getBarclayIndex() { $this->renderIndex('barclay', Banks::getBarclayBanks([])); }
    public function getHSBCIndex() { $this->renderIndex('hsbc', Banks::getHSBCBanks([])); }
    public function getLlyodIndex() { $this->renderIndex('llyod', Banks::getLlyodBanks([])); }
    
    public function getBarclayData() { $this->getBankData('getBarclayBanks'); }
    public function getHSBCData() { $this->getBankData('getHSBCBanks'); }
    public function getLlyodData() { $this->getBankData('getLlyodBanks'); }
    
    public function buyBarclay() { $this->buy('barclaybanks'); }
    public function buyHSBC() { $this->buy('hsbcbanks'); }
    public function buyLlyod() { $this->buy('llyodbanks'); }
    
    // ------------------------------
    // Canadian Banks Endpoints
    // ------------------------------
    public function getTDIndex() { $this->renderIndex('td', Banks::getTDBanks([])); }
    public function getRBCIndex() { $this->renderIndex('rbc', Banks::getRBCBanks([])); }
    public function getBMOIndex() { $this->renderIndex('bmo', Banks::getBMOBanks([])); }
    
    public function getTDData() { $this->getBankData('getTDBanks'); }
    public function getRBCData() { $this->getBankData('getRBCBanks'); }
    public function getBMOData() { $this->getBankData('getBMOBanks'); }
    
    public function buyTD() { $this->buy('tdbanks'); }
    public function buyRBC() { $this->buy('rbcbanks'); }
    public function buyBMO() { $this->buy('bmobanks'); }
}