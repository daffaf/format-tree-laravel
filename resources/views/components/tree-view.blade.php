<div class="treeview">
    <div class="treeview-title">
        <span class="arrow-title">
            <i class="bi bi-plus-square-fill"></i>
        </span>
        <h5>{{ $title }}</h5>
    </div>
    <div class="treeview-content">
        @foreach($items as $item)
        <div class="category">
            <strong class="category-title">
                @if($hasSub && $item->{$subitems}->isNotEmpty())
                    <span class="arrow">
                        <i class="bi bi-caret-right-fill"></i>
                    </span>
                @elseif ($hasSub)
                <i class="bi bi-caret-right"></i>               
                @else
                @endif
                {{ $item->name }}
            </strong>
            @if($hasSub && $item->{$subitems}->isNotEmpty())
                <ul class="sub-category">
                    @foreach($item->{$subitems} as $sub)
                        <li>{{ $sub->name }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        @endforeach
    </div>
   
</div>
