<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!---logo 
			   <div><img src="gps_logo.png" alt="GPS BHILAI" height="60" width="60"></div>--->


            </div>
            <h1>
                <center> CBST Public School</center>
            </h1>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">                   

                    <li>
                        <a href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="bus/index.php"><i class="fa fa-bus "></i>BUS</a>
                    </li>
                    <li>
                        <a href="branch.php"><i class="fa fa-university "></i>Class</a>
                    </li>

                    <li>
                        <a href="fees.php"><i class="fa fa-dollar "></i>Fees</a>
                    </li>

                    <li>
                        <a href="transaction_history.php"><i class="fa fa-dollar "></i>Transaction</a>
                    </li>


                    <?php if($_SESSION['rainbow_role'] == 'admin'): ?>

                    <li>
                        <a href="student.php"><i class="fa fa-users "></i>Student</a>
                    </li>

                    <li>
                        <a href="expense.php"><i class="fa fa-dollar "></i>Expense</a>
                    </li>

                    <li>
                        <a href="report.php"><i class="fa fa-file-text "></i>Report </a>
                    </li>
                    <li>
                        <a href="tc.php"><i class="fa fa-file-text "></i>Generate TC </a>
                    </li>

                    <li>
                        <a href="custom_tc.php"><i class="fa fa-file-text "></i>Custom TC </a>
                    </li>
                    <!--li>
                        <a href="manage_subject.php"><i class="fa fa-file-text "></i>Subject </a>
                    </li-->

                    <li>
                        <a href="student_log.php"><i class="fa fa-file-text "></i>Print All </a>
                    </li>

                    <?php endif ?>

                    <li>
                        <a href="setting.php"><i class="fa fa-cogs "></i>Setting</a>
                    </li>

                    <li>
                        <a href="logout.php"><i class="fa fa-power-off "></i>Logout</a>
                    </li>


                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->