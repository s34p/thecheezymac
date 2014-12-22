<ul class="nav nav-tabs">
    <li role="presentation" data-link="dashboard"><a href="/webadmin/dashboard"><i class="fa fa-cogs"></i> Dashboard</a></li>
    <li role="presentation" data-link="news"><a href="/webadmin/news"><i class="fa fa-newspaper-o"></i> News</a></li>
    <li role="presentation" data-link="blog"><a href="/webadmin/blog"><i class="fa fa-file-o"></i> Blog</a></li>
    <?php

        $user = \Sentry::findUserById(Session::get('id'));

        $admin = \Sentry::findGroupByName('admins');
    ?>

    @if($user->inGroup($admin))
    <li role="presentation" data-link="users"><a href="/webadmin/users"><i class="fa fa-users"></i> Users</a></li>
    <li role="presentation" data-link="category"><a href="/webadmin/category"><i class="fa fa-folder"></i> Menu Categories</a></li>
    <li role="presentation" data-link="menu"><a href="/webadmin/menu"><i class="fa fa-cutlery"></i> Menu</a></li>
    <li role="presentation" data-link="gallery"><a href="/webadmin/gallery"><i class="fa fa-image"></i> Gallery</a></li>
    <li role="presentation" data-link="comments"><a href="/webadmin/comments"><i class="fa fa-comment"></i> Comments</a></li>
    <li role="presentation" data-link="newsletter"><a href="/webadmin/newsletter"><i class="fa fa-envelope"></i> NewsLetter</a></li>
    <li role="presentation" data-link="winners"><a href="/webadmin/winners"><i class="fa fa-gift"></i> Winners</a></li>
    @endif
        <li role="presentation"><a href="/webadmin/logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
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