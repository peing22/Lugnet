<!-- Sidopanel med widget-area -->
<aside>
    <!-- Widget-area -->
    <?php
    if (is_active_sidebar('sidebar-widget')) : ?>
        <div class="sidebar-widget">
            <ul>
                <?php dynamic_sidebar('sidebar-widget'); ?>
            </ul>
        </div>
    <?php endif; ?>
</aside>