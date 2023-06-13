<!-- aside widget -->
@auth
    <div class="aside">
        <ul class="list-links">
            @php
                $userRoles = Auth::user()->roles->pluck('name');
            @endphp
            @if($userRoles->contains('admin'))
                <li class="mn0"><a href="{{route('admin')}}" target="_blank">Admin Panel</a></li>
            @endif
            <li class="mn1"><form action="{{ route('user_logout') }}" method="post" id="logout-form">
                    @csrf
                    <li class="text-center">
                        <button type="submit" style="font-size: large" class="btn btn-link">Logout</button>
                    </li>
                </form></li>
        </ul>
    </div>
@endauth
<!-- /aside widget -->
