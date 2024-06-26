<div class="dropdown category-dropdown"> <a data-toggle="dropdown" href="#"><span
    class="change-text">Select Category</span> <i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu category-change">
@foreach ($categories as $item)
    <li><a href="{#}">{{ $item->name }}</a></li>
@endforeach
</ul>
</div>