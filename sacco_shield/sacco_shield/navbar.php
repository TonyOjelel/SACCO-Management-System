<style>
</style>
<!-- <nav id="sidebar" class='mx-lt-5 bg-white' >
		 
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=loans" class="nav-item nav-loans"><span class='icon-field'><i class="fa fa-file-invoice-dollar"></i></span> Loans</a>	
				<a href="index.php?page=payments" class="nav-item nav-payments"><span class='icon-field'><i class="fa fa-money-bill"></i></span> Payments</a>
				<a href="index.php?page=borrowers" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-user-friends"></i></span> Borrowers</a>
				<a href="index.php?page=borrowers" class="nav-item nav-borrowers"><span class='icon-field'><i class="fa fa-user-friends"></i></span> Member Dasboard</a>
				<a href="index.php?page=plan" class="nav-item nav-plan"><span class='icon-field'><i class="fa fa-list-alt"></i></span> Loan Plans</a>	
				<a href="index.php?page=loan_type" class="nav-item nav-loan_type"><span class='icon-field'><i class="fa fa-th-list"></i></span> Loan Types</a>		
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				<a href="ajax.php?action=logout" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-lock"></i></span> Logout</a>
				
			<?php endif; ?>
		</div>

</nav>
 -->

<!-- 
<nav id="sidebar" class='mx-lt-5 bg-white'>
    <div class="sidebar-list">
        <a href="index.php?page=home" class="nav-item nav-home">
            <span class='icon-field'><i class="fa fa-home"></i></span> Home
        </a>
        <div class="dropdown">
            <a href="#" class="nav-item nav-loans dropdown-toggle" id="loansDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class='icon-field'><i class="fa fa-file-invoice-dollar"></i></span> Loans
            </a>
            <ul class="dropdown-menu" aria-labelledby="loansDropdown">
                <li><a class="dropdown-item" href="index.php?page=loans">All Loans</a></li>
                <li><a class="dropdown-item" href="index.php?page=apply_loan">Apply for Loan</a></li>
                <li><a class="dropdown-item" href="index.php?page=loan_payments">Loan Payments</a></li>
                <li><a class="dropdown-item" href="index.php?page=approved_loans">Approved Loans</a></li>
                <!-- Add more specific loan-related pages in dropdown -->
            <!-- </ul>
        </div>
        <a href="index.php?page=payments" class="nav-item nav-payments">
            <span class='icon-field'><i class="fa fa-money-bill"></i></span> Payments
        </a>
        <a href="index.php?page=borrowers" class="nav-item nav-borrowers">
            <span class='icon-field'><i class="fa fa-user-friends"></i></span> Borrowers
        </a>
        <div class="dropdown">
            <a href="#" class="nav-item nav-dashboard dropdown-toggle" id="dashboardDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class='icon-field'><i class="fa fa-user"></i></span> Dashboard
            </a>
            <ul class="dropdown-menu" aria-labelledby="dashboardDropdown">
                <li><a class="dropdown-item" href="index.php?page=member_dashboard">Member Dashboard</a></li>
                <li><a class="dropdown-item" href="index.php?page=admin_dashboard">Admin Dashboard</a></li>
                <!-- Add more dashboard-related pages in dropdown -->
            <!-- </ul>
        </div>
        <a href="index.php?page=plan" class="nav-item nav-plan">
            <span class='icon-field'><i class="fa fa-list-alt"></i></span> Loan Plans
        </a>
        <a href="index.php?page=loan_type" class="nav-item nav-loan_type">
            <span class='icon-field'><i class="fa fa-th-list"></i></span> Loan Types
        </a>
        <?php if($_SESSION['login_type'] == 1): ?>
            <a href="index.php?page=users" class="nav-item nav-users">
                <span class='icon-field'><i class="fa fa-users"></i></span> Users
            </a>
            <a href="index.php?page=manage_settings" class="nav-item nav-settings">
                <span class='icon-field'><i class="fa fa-cog"></i></span> Manage Settings
            </a>
            <a href="ajax.php?action=logout" class="nav-item nav-logout">
                <span class='icon-field'><i class="fa fa-lock"></i></span> Logout
            </a>
        <?php endif; ?>
    </div>
</nav> --> --> -->




<nav id="sidebar" class='mx-lt-5 bg-white'>
    <div class="sidebar-list">
        <a href="index.php?page=home" class="nav-item nav-home">
            <span class='icon-field'><i class="fa fa-home"></i></span> Home
        </a>
        <div class="dropdown">
            <a href="#" class="nav-item nav-finance dropdown-toggle" id="financeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class='icon-field'><i class="fa fa-dollar-sign"></i></span> Finance
            </a>
            <ul class="dropdown-menu" aria-labelledby="financeDropdown">
                <li><a class="dropdown-item" href="index.php?page=loans">All Loans</a></li>
                <li><a class="dropdown-item" href="index.php?page=apply_loan">Apply for Loan</a></li>
                <li><a class="dropdown-item" href="index.php?page=loan_payments">Loan Payments</a></li>
                <li><a class="dropdown-item" href="index.php?page=approved_loans">Approved Loans</a></li>
                <li><a class="dropdown-item" href="index.php?page=shares">Shares</a></li>
                <li><a class="dropdown-item" href="index.php?page=members">Members</a></li>
                <li><a class="dropdown-item" href="index.php?page=deposits">Deposits</a></li>
                <!-- Add more specific finance-related pages in dropdown -->
            </ul>
        </div>
        <a href="index.php?page=payments" class="nav-item nav-payments">
            <span class='icon-field'><i class="fa fa-money-bill"></i></span> Member Savings
        </a>
        <div class="dropdown">
            <a href="#" class="nav-item nav-dashboard dropdown-toggle" id="dashboardDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class='icon-field'><i class="fa fa-user"></i></span> Dashboard
            </a>
            <ul class="dropdown-menu" aria-labelledby="dashboardDropdown">
                <li><a class="dropdown-item" href="index.php?page=member_dashboard">Member Dashboard</a></li>
                <li><a class="dropdown-item" href="index.php?page=admin_dashboard">Admin Dashboard</a></li>
                <!-- Add more dashboard-related pages in dropdown -->
            </ul>
        </div>
        <a href="index.php?page=plan" class="nav-item nav-plan">
            <span class='icon-field'><i class="fa fa-list-alt"></i></span> Loan Plans
        </a>
        <a href="index.php?page=loan_type" class="nav-item nav-loan_type">
            <span class='icon-field'><i class="fa fa-th-list"></i></span> Loan Types
        </a>
        <?php if($_SESSION['login_type'] == 1): ?>
            <a href="index.php?page=users" class="nav-item nav-users">
                <span class='icon-field'><i class="fa fa-users"></i></span> Staff
            </a>
            <a href="index.php?page=manage_settings" class="nav-item nav-settings">
                <span class='icon-field'><i class="fa fa-cog"></i></span> Manage Settings
            </a>
            <a href="ajax.php?action=logout" class="nav-item nav-logout">
                <span class='icon-field'><i class="fa fa-lock"></i></span> Logout
            </a>
        <?php endif; ?>
    </div>
</nav>





<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
