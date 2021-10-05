<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">{{env('APP_NAME',"Mentor Me Program")}}</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                       
                       

                       
                        <li class="divider">Masterfile</li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>Information</span></a>
                            <ul class="sub-menu">
                                <li><a href="{{route('system.info.index')}}">All records</a> </li>
                                <li><a href="{{route('system.info.create')}}">Create New</a> </li>
                            </ul>
                        </li>
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>