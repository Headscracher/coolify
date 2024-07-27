<div>
    <x-slot:title>
        Permissions | Coolify
    </x-slot>
    <x-team.navbar />
    <h2>Server Access</h2>
    <div class="flex gap-2">
        <div class="flex flex-col gap-4">
            <div></div>
            @foreach (currentTeam()->members as $member)
                <div>{{ $member->name }}</div>
            @endforeach
        </div>
        <div class="flex flex gap-4">
            @foreach ($servers as $server)
                <div class="flex flex-col gap-2">
                    <div>{{$server->name}}</div>
                    @foreach (currentTeam()->members as $member)
                        <x-forms.checkbox/>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

</div>
