<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="pager_wrapper gc_blog_pagination">
        @if(isset($data))
            <ul class="pagination">
                @if(isset($data['current_page']))
                    @if($data['current_page'] == 1)
                        <li><a href="{{$data['path'] . '?page=' . $data['current_page']}}" class="disabled"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                    @else
                        <li><a href="{{$data['prev_page_url']}}"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                    @endif
                    @for($i = 1; $i <= $data['last_page']; $i++)
                        @if($data['current_page'] == $i)
                            <li class="active"><a href="{{$data['path'] . '?page=' . $i}}">{{$i}}</a></li>
                        @else
                            <li><a href="{{$data['path'] . '?page=' . $i}}">{{$i}}</a></li>
                        @endif
                    @endfor
                    @if($data['next_page_url'] == null)
                        <li class="disabled"><a href="{{$data['path'] . '?page=' . $data['last_page']}}" class="disabled"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                    @else
                        <li><a href="{{$data['next_page_url']}}"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                    @endif
                @endif
            </ul>
        @endif
    </div>
</div>