<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">
        <?php include "sidebar.php"; ?>

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                </li>
                <!-- END TOGGLE NAVIGATION -->
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <?php $this->load->view($content); ?>
        </div>
        <!-- END PAGE CONTAINER -->
    </div>
    <!-- END PAGE CONTENT -->

    <?php include "footer.php"; ?>
</body>

</html>