{if Configuration::get('PH_BLOG_DISPLAY_MORE')}
<div class="simpleblog__listing__post__wrapper__content__footer">
    {if $is_category eq false && Configuration::get('PH_BLOG_DISPLAY_CATEGORY')}
    <div class="simpleblog__listing__post__wrapper__content__footer__category">
        {if $isWarehouse|default:false}
        <i class="fa fa-tags"></i>
        {else}
        <i class="material-icons">label</i>
        {/if}
        <a href="{$post.category_url}" title="{$post.category}" rel="category">{$post.category}</a>
    </div>
    {/if}
</div>
{/if}