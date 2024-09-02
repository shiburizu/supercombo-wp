<div class="panel sc-panel bg-dark">
<div class="panel-header px-0 pb-0">
    <h4 class="panel-title text-center mb-2 text-bold">SuperCombo Community</h4>
    <ul class="tab tab-block">
        <li class="tab-item active" onclick="openTab(event, 'discussions')">
            <a>Forum Posts</a>
        </li>
        <li class="tab-item" onclick="openTab(event, 'edits')">
            <a>Wiki Edits</a>
        </li>
    </ul>
</div>
<div class="panel-body py-2 px-0">
<div id="discussions" class="tab-content">
    <?php get_template_part( 'front-forums' ); ?>
</div>
<div id="edits" class="tab-content" style="display:none;">
    <?php get_template_part( 'front-wiki' ); ?>
</div>
</div>
</div>