


<header>
            <div class="container-fluid">
                <div class="row header-bg">
                    <div class="col-md-12">
                        <div class="col-md-2 col-md-offset-1 logo-agri">
                            <a href="{{route('index')}}"><img src="{{asset('')}}users/img/logo.png" alt=""></a>
                           <!-- <img src="" alt=""> -->
                        </div>
                        
                        <div class="col-md-8 ">
                            <div class="menu">
                                <div id="cssmenu">
                                    <ul>
                                        <li><a href="{{route('agri_info')}}">Home</a></li>
                                        <li><a href="">Cultivation</a>
                                        
                                            <ul>
                                            @foreach($agriCategorys as $ac)
                                                <li><a href="">{{$ac->name}}</a>
                                                
                                                    <ul>
                                                    @foreach($agriSubCategorys as $asc)
                                                    @if($ac->id == $asc->category_id)
                                                        <li><a href="">{{$asc->name}}</a></li>
                                                        @endif
                                                        @endforeach
                                                    </ul>
                                                
                                                </li>
                                                @endforeach
                                            </ul>
                                            
                                        </li>
                                        <li><a href="{{route('agri_info.conservation')}}">Conservation</a></li>
                                        <li><a href="{{route('agri_info.marketing')}}">Marketing</a></li>
                                        <li><a href="{{route('agri_info.farmer')}}">Farmer's health</a></li>
                                        <li><a href="">Helpdesk</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </header>

        

