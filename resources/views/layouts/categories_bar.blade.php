<style>
    .down{
        max-width: 10px;
    }
</style>
<div class="col-lg-3 mobile_none">
    <div class="{{ $side }}_sidebar_area">
        <aside class="right_widgets cat_widgets">
            <div class="l_w_title">
                <h3>@lang('translations.categories')</h3>
            </div>
            <div class="widgets_inner">
                <ul class="list">
                    <?php $name = session('locale') == 'ru' ? 'name_ru' : 'name' ?>
                    @foreach($categories as $categ)
                        @if($categ->subcategories()->count() > 0)
                            <li>
                                <a href="{{ url('/' . $categ->slug  ) }}">{{ $categ->$name }} <img class="pull-right down" src="/images/icons/down.png" alt=""></a>
                                <ul class="list">
                                    <?php $sub = $categ->subCategories()->pluck( $name, 'slug'); ?>
                                    @foreach($sub as $key => $subCat)
                                        <li>
                                            <a href="{{ url('/' . $key ) }}">{{ $subCat }}</a>
                                        </li>
                                    @endforeach
                                    <li>
                                        <a href="{{ url('/' . $categ->slug) }}">{{ $name == 'name_ru' ? 'Все' : 'Toate ' }}</a>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li>
                                <a href="{{ url('/' . $categ->slug  ) }}">{{ $categ->$name }}</a>
                            </li>
                        @endif
                    @endforeach

                </ul>
            </div>
        </aside>
        <aside class="left_widgets cat_widgets">
            <div class="l_w_title">
                <h3>@lang('translations.contains')</h3>
            </div>
            <div class="widgets_inner">
                <ul class="list">
                    @foreach($tags_categories as $tag)
                        <li>
                            <a style="font-size: 22px" href="/category/tag/{{ $tag->name }}">{{ $tag->$name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </div>
</div>
