<div class="container" >
    <h3>{{ ucfirst($container_type) }}</h3>
    <ul>
        <li><i class="fa fa-folder"></i> <span>Folder</span>
            <ul>
                <li><i class="fa fa-file-code-o"></i> <a href="#"><span>File 1</span></a></li>
                <li><i class="fa fa-file-code-o"></i> <a href="#"><span>File 2</span></a></li>
                <li><i class="fa fa-file-code-o"></i> <a href="#"><span>File 3</span></a></li>
            </ul>

        </li>
    </ul>
    <ul>
        <li><i class="fa fa-folder"></i> <span>Other</span>
            <ul>
            @foreach ($containers as $container)
                <li><i class="fa fa-file-code-o"></i> <a href="/{{ $container_type }}/{{ $container->_id }}"><span>{{$container->name}}</span></a></li>
            @endforeach
            </ul>

        </li>
    </ul>
    <ul>
        <li>
            <form action="/{{ $container_type }}/create">
            <button class="btn btn btn-primary">Add</button>
            </form>
        </li>
    </ul>
</div>


<div class="container" style="margin-top:100px">

    <ul>
        <li><i class="fa fa-folder"></i> <span>Assets</span></li>
        <li><i class="fa fa-folder"></i> <span>Block</span></li>
        <li><i class="fa fa-folder"></i> <span>Pages</span></li>
        <li><i class="fa fa-folder"></i> <span>Template</span></li>
    </ul>

</div>