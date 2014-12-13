<ul class="nav nav-tabs">
    <li role="presentation" data-link="dashboard"><a href="/webadmin/dashboard">Dashboard</a></li>
    <li role="presentation" data-link="news"><a href="/webadmin/news">News</a></li>
    <li role="presentation" data-link="blog"><a href="/webadmin/blog">Blog</a></li>
    <li role="presentation" data-link="users"><a href="/webadmin/users">Users</a></li>
    <li role="presentation" data-link="category"><a href="/webadmin/category">Menu Categories</a></li>
    <li role="presentation" data-link="menu"><a href="/webadmin/menu">Menu</a></li>
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