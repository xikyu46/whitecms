<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar">
                <li>
                    <a href="<?= base_url('admin/page/edit');?>">Page</a>
                </li>
                <li>
                    <a href="<?= base_url('admin/menu/edit');?>"  >Navigation</a>
                </li>
                <li>
                <a  href="<?= base_url('admin/category/edit');?>"> Post</a>
                </li>
                <li>
                    <a href="<?= base_url('admin/extension');?>"> Module</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= base_url('admin/login/out');?>">Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div> 
