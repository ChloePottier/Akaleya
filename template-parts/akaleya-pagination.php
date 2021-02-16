<div class="col-12" id="pagination">
<?php $total_pages = $loop->max_num_pages;

if ($total_pages > 1) :
    $big = 999999999;
    $current_page = max(1, get_query_var('paged'));
    echo '';
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '/page/%#%',
        'current' => $current_page,
        'total' => $total_pages,
        'prev_text'    => __('« prev'),
        'next_text'    => __('next »'),
    ));
else :
    echo '<p>Page introuvable</p>';
endif;?>
</div>