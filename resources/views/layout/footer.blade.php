<div id="navi">


    <a href="{{ route('message') }}">
        @if($routeAll->action['namespace'] == 'message')
            <img id="message" class="navi-tubiao" src="/common/pictures/1/message2.png" />
        @else
            <img id="message" class="navi-tubiao" src="/common/pictures/1/message.png" />
        @endif
    </a>

    <a href="{{ route('CategoryAll') }}">
        @if($routeAll->action['namespace'] == 'post')
            <img id="community" class="navi-tubiao" src="/common/pictures/1/community2.png" />
        @else
            <img id="community" class="navi-tubiao" src="/common/pictures/1/community.png" />
        @endif
    </a>

    <a href="{{ route('user') }}">
        @if($routeAll->action['namespace'] == 'user')
            <img id="myself" class="navi-tubiao" src="/common/pictures/1/myself2.png" />
        @else
            <img id="myself" class="navi-tubiao" src="/common/pictures/1/myself.png" />
        @endif
    </a>

</div>
