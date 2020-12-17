<aside class="sidebar">
    <div id="leftside-navigation" class="nano">
      <ul class="nano-content">
        <li>
          <a href="index.html"><i class="fa fa-dashboard"></i><span>Categories</span></a>
        </li>
        @foreach($Families as $Familie)
        <li class="sub-menu">
        @if(count($Familie->subFamily)) <a href="{{route('itembyCaption',$Familie->Id)}}" class="tag">{{count($Familie->subFamily)}}</a> @else <a href="{{route('itembyCaption',$Familie->Id)}}" class="tag">GO</a>  @endif
          <a href="javascipt:void(0);"><span class="icon">{{$Familie->Caption ?? "ds"}}</span></a> 
          <ul>
            @if(count($Familie->subFamily))
         
            @foreach($Familie->subFamily as $subcategory)
  
            <li><a href="{{route('itembysubFamily',$subcategory->Id )}}">{{$subcategory->Caption  ?? "ds"}}</a>
            </li>
            @endforeach
            @endif
          </ul>
        @endforeach
    </ul>
    </div>
  </aside>