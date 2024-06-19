<?php include("h.php"); ?>
<!-- #region -->

<!-- Add this JavaScript code at the end of your 'aside.php' file -->
<!-- Add this JavaScript code at the end of your 'aside.php' file -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Function to update the pending count
    function updatePendingCount() {
        $.ajax({
            url: 'get_pending_count.php',
            type: 'GET',
            data: { dept: '<?= $dept ?>' }, // Pass the department as a parameter
            success: function (response) {
                // Update the count in the menu item
                $('#pendingCount').text(response);
            },
            error: function () {
                // Handle any errors here
            }
        });
    }

    // Update the count initially when the page loads
    updatePendingCount();

    // Periodically update the count (e.g., every 30 seconds)
    setInterval(updatePendingCount, 1000); // Adjust the interval as needed
</script>



<aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item" > <a class="sidebar-link waves-effect waves-dark sidebar-link" style="text-decoration: none;" href="main" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" style="text-decoration: none;" href="profile" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Profile</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" style="text-decoration: none;" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-edit"></i><span class="hide-menu">Bonafide</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="bonafide" aria-expanded="false">
                                        <i class="mdi mdi-note-plus"></i>
                                                                            <span class="hide-menu"> Bonafide Requests 
                                        <span class="badge rounded-pill bg-warning text-dark" id="pendingCount">0</span>
                                    </span>


                                    </a>
                                </li>
						  
                             </ul>
                        </li>
						<?php
						if($role=="HOD")
						{ ?>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="hview" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">View faculty</span></a></li>
						<?php } ?>
						
						<?php
						if($s=="admin")
						{ ?>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="hview" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">View faculty</span></a></li>
						<?php } ?>
						
						
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link active" style="text-decoration: none;" href="pwd" aria-expanded="false"><i class="ti-key"></i><span class="hide-menu">Change Password</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>