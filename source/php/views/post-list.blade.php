<div class="grid" data-equal-container>
    @if (!$hideTitle && !empty($post_title))
    <div class="grid-xs-12">
        <h4 class="box-title">{!! apply_filters('the_title', $post_title) !!}</h4>
    </div>
    @endif

    @foreach ($posts as $post)
    <div class="grid-xs-12">
        <a href="{{ $post->permalink }}" class="box box-news box-news-horizontal" data-equal-item>
            @if (get_the_post_thumbnail($post))
            <div class="box-image-container">

                <?php foreach (["post_tag"] as $k => $taxonomy) : $terms = wp_get_post_terms($post->ID, $taxonomy) ?>
                    <ul class="tags-<?php echo $taxonomy; ?> pos-absolute-topright">
                        <?php foreach ($terms as $term) : ?>
                            <li class="tag tag-<?php echo $term->taxonomy; ?> tag-<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endforeach; ?>

                <img src="{{ get_the_post_thumbnail_url($post) }}" alt="{{ $post->post_title }}" class="box-image">
            </div>
            @endif

            <div class="box-content">
                <h3 class="text-highlight">{{ apply_filters('the_title', $post->post_title) }}</h3>

                {!! isset(get_extended($post->post_content)['main']) ? apply_filters('the_excerpt', wp_trim_words(wp_strip_all_tags(strip_shortcodes(get_extended($post->post_content)['main'])), 30, null)) : '' !!}

                <p><span class="link-item"><?php _e('Read more', 'modularity'); ?></span></p>
            </div>
        </a>
    </div>
    @endforeach
    @if($num_pages > 1)
    <div class="grid-lg-12">
        <a class="read-more" href="?posts_per_page=-1"><?php _e('Show more', 'modularity'); ?></a>
    </div>
    @endif
</div>