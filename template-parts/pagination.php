<div class="pagination">
    <?php
    echo paginate_links(array(
        'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'total'        => $query->max_num_pages,
        'current'      => max(1, get_query_var('paged')),
        'format'       => '?paged=%#%',
        'show_all'     => false,
        'type'         => 'plain',
        'end_size'     => 1,
        'mid_size'     => 1,
        'prev_next'    => false, // change to true if you want to indicate previous and next page
        'prev_text'    => sprintf('<i></i> %1$s', __('Newer Posts', 'text-domain')),
        'next_text'    => sprintf('%1$s <i></i>', __('Older Posts', 'text-domain')),
        'add_args'     => false,
        'add_fragment' => '',
    ));
    ?>
</div>