<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="{{route('index')}}" class="w-75 h-100">
    <image class="navbar-toggler" data-toggle="collapse" src="{{asset('/images/yamadogu1.png')}}" width="40%" height="40%">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <img class="nav-brand" src="{{asset('/logos/navi_icon.svg')}}" width="30" height="30" alt="">
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav w-75 justify-content-center">
            <li class="nav-item bg-light ml-lg-5">
                <a class="navbar-brand" href="{{route('new')}}">
                <img src="{{asset('/logos/icon_new.svg')}}" width="30" height="30" class="d-inline-block align-top" alt="">    
                新商品</a>
            </li>
            <li class="nav-item bg-light ml-lg-5">
                <a class="navbar-brand" href="{{route('wear')}}">
                <img src="{{asset('/logos/icon_kiru.svg')}}" width="30" height="30" class="d-inline-block align-top" alt="">    
                ウェア</a>
            </li>
            <li class="nav-item bg-light ml-lg-5">
                <a class="navbar-brand" href="{{route('shoes')}}">
                <img src="{{asset('/logos/icon_aruku.svg')}}" width="30" height="30" class="d-inline-block align-top" alt="">    
                登山靴</a>
            </li>
            <li class="nav-item bg-light ml-lg-5">
                <a class="navbar-brand" href="{{route('bag')}}">
                <img src="{{asset('/logos/icon_seou.svg')}}" width="30" height="30" class="d-inline-block align-top" alt="">    
                ザック</a>
            </li>
            <li class="nav-item bg-light ml-lg-5">
                <a class="navbar-brand" href="{{route('tent')}}">
                <img src="{{asset('/logos/icon_sumu.svg')}}" width="30" height="30" class="d-inline-block align-top" alt="">    
                テント</a>
            </li>
            <li class="nav-item bg-light ml-lg-5">
                <a class="navbar-brand" href="{{route('cart')}}">
                @if(session()->get('count')==0||session()->get('count')==null)
                <img src="{{asset('/logos/icon_cart.svg')}}" width="35" height="35" class="d-inline-block align-top" alt="">
                @else
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44.75 58.12"><defs><style>.cls-1{fill:red;}</style></defs><title>navi_icon_05_1</title><g id="レイヤー_2" data-name="レイヤー 2"><g id="レイヤー_1-2" data-name="レイヤー 1"><path class="cls-1" d="M8.62,48.45c.06-.74.09-1.56.09-2.18a6.06,6.06,0,0,0-.05-.79l1.44,0a13.09,13.09,0,0,0-.13,1.9c0,.38,0,.56-.06,1l3.63,0a2.9,2.9,0,0,0,1.05-.1l.63.55a2.24,2.24,0,0,0-.12.92A47.32,47.32,0,0,1,14.69,55c-.37,2.21-.85,2.78-2.32,2.78a9.07,9.07,0,0,1-1.88-.23,3.22,3.22,0,0,0-.21-1.35,6.87,6.87,0,0,0,2,.38c.71,0,.95-.35,1.22-1.79a35,35,0,0,0,.36-5.17h-4A10.85,10.85,0,0,1,8.6,54a10.69,10.69,0,0,1-4,4,3.77,3.77,0,0,0-.93-1.08A8.75,8.75,0,0,0,7.61,53a9.34,9.34,0,0,0,.9-3.44l-2.65,0a10.45,10.45,0,0,0-1.59.07l0-1.33a8.54,8.54,0,0,0,1.63.1Z"/><path class="cls-1" d="M18.55,51.12a16.31,16.31,0,0,0,2.07.09h8.43a12.77,12.77,0,0,0,2-.09V52.6a17.73,17.73,0,0,0-2-.07h-8.4a16.6,16.6,0,0,0-2.08.07Z"/><path class="cls-1" d="M36.61,58.12a11.1,11.1,0,0,0,.09-1.74V47.25a8.85,8.85,0,0,0-.09-1.65h1.51a12,12,0,0,0-.07,1.69V50a39.47,39.47,0,0,1,6.7,3.17L44,54.43a31.87,31.87,0,0,0-5.52-2.94,3.23,3.23,0,0,1-.49-.25,9.7,9.7,0,0,1,.06,1.23v3.91a13.46,13.46,0,0,0,.07,1.74Z"/><path class="cls-1" d="M32.7,25.54H15.05a2.48,2.48,0,0,1-2.41-1.88L7.21,1.72H.86A.85.85,0,0,1,0,.86.85.85,0,0,1,.86,0H8.55l1.54,6.2H37.52a2.48,2.48,0,0,1,2.35,3.26L35.05,23.85A2.48,2.48,0,0,1,32.7,25.54Z"/><path class="cls-1" d="M10.51,7.92l3.8,15.33a.77.77,0,0,0,.74.57H32.7a.75.75,0,0,0,.71-.52L38.24,8.91a.75.75,0,0,0-.72-1Z"/><rect class="cls-1" x="29.01" y="27.95" width="5.31" height="5.31" rx="2.54" ry="2.54"/><rect class="cls-1" x="13.66" y="27.95" width="5.31" height="5.31" rx="2.54" ry="2.54"/></g></g></svg>
                @endif
                </a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{'search'}}" method="get">
            <input class="form-control mr-sm-2" type="text" placeholder="検索..." aria-label="検索..." name="word">
            <button type="submit" class="btn btn-outline-secondary my-2 my-sm-0">検索</button>
        </form>
    </div>
</nav>
