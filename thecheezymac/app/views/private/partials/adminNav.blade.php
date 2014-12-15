<ul class="nav nav-tabs">
    <li role="presentation" data-link="dashboard"><a href="/webadmin/dashboard"><i class="fa fa-cogs"></i> Dashboard</a></li>
    <li role="presentation" data-link="news"><a href="/webadmin/news"><i class="fa fa-newspaper-o"></i> News</a></li>
    <li role="presentation" data-link="blog"><a href="/webadmin/blog"><i class="fa fa-file-o"></i> Blog</a></li>
    <li role="presentation" data-link="users"><a href="/webadmin/users"><i class="fa fa-users"></i> Users</a></li>
    <li role="presentation" data-link="category"><a href="/webadmin/category"><i class="fa fa-folder"></i> Menu Categories</a></li>
    <li role="presentation" data-link="menu"><a href="/webadmin/menu"><i class="fa fa-cutlery"></i> Menu</a></li>
</ul>
<script>
    $activeLink = "<?php echo Request::segment(2); ?>";
    $(".nav-tabs li").each(function()
    {
        if($activeLink == $(this).attr('data-link'))
        {
            $(this).addClass('active');
        }
    });
</script>