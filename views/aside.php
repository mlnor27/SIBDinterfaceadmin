<aside>
    <div id="sidebar"  class="nav-collapse ">
        <ul class="sidebar-menu">
            <?php
            global $content;
            foreach ($content["table"] as $c) {
                echo '<li class="active" >
                    <a class="" href = "'.WEBROOT.$c['Table_name'].'/index" >
                        <span >'.$c["Table_name"].'</span >
                    </a >
                </li >';
            }
            ?>
            <!-- sidebar menu end-->
    </div>
</aside>