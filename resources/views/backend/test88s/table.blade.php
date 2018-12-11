<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th>{{ __('labels.backend.test88s.table.name') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($test88s as $test88)
        <tr>
             
                <td>{{  $test88->name }}</td>   
                

               <td>{!! $test88->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>