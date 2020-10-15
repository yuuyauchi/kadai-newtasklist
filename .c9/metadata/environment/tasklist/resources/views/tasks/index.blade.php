{"filter":false,"title":"index.blade.php","tooltip":"/tasklist/resources/views/tasks/index.blade.php","undoManager":{"mark":26,"position":26,"stack":[[{"start":{"row":5,"column":0},"end":{"row":24,"column":10},"action":"insert","lines":["    <h1>メッセージ一覧</h1>","","    @if (count($messages) > 0)","        <table class=\"table table-striped\">","            <thead>","                <tr>","                    <th>id</th>","                    <th>メッセージ</th>","                </tr>","            </thead>","            <tbody>","                @foreach ($messages as $message)","                <tr>","                    <td>{{ $message->id }}</td>","                    <td>{{ $message->content }}</td>","                </tr>","                @endforeach","            </tbody>","        </table>","    @endif"],"id":2}],[{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"remove","lines":["ジ"],"id":3},{"start":{"row":5,"column":11},"end":{"row":5,"column":12},"action":"remove","lines":["ー"]},{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"remove","lines":["セ"]},{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"remove","lines":["ッ"]},{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"remove","lines":["メ"]}],[{"start":{"row":5,"column":8},"end":{"row":5,"column":11},"action":"insert","lines":["タスク"],"id":4}],[{"start":{"row":12,"column":28},"end":{"row":12,"column":29},"action":"remove","lines":["ジ"],"id":5},{"start":{"row":12,"column":27},"end":{"row":12,"column":28},"action":"remove","lines":["ー"]},{"start":{"row":12,"column":26},"end":{"row":12,"column":27},"action":"remove","lines":["セ"]},{"start":{"row":12,"column":25},"end":{"row":12,"column":26},"action":"remove","lines":["ッ"]},{"start":{"row":12,"column":24},"end":{"row":12,"column":25},"action":"remove","lines":["メ"]}],[{"start":{"row":12,"column":24},"end":{"row":12,"column":27},"action":"insert","lines":["タスク"],"id":6}],[{"start":{"row":16,"column":33},"end":{"row":16,"column":34},"action":"remove","lines":["e"],"id":7},{"start":{"row":16,"column":32},"end":{"row":16,"column":33},"action":"remove","lines":["g"]},{"start":{"row":16,"column":31},"end":{"row":16,"column":32},"action":"remove","lines":["a"]},{"start":{"row":16,"column":30},"end":{"row":16,"column":31},"action":"remove","lines":["s"]},{"start":{"row":16,"column":29},"end":{"row":16,"column":30},"action":"remove","lines":["s"]},{"start":{"row":16,"column":28},"end":{"row":16,"column":29},"action":"remove","lines":["e"]},{"start":{"row":16,"column":27},"end":{"row":16,"column":28},"action":"remove","lines":["m"]}],[{"start":{"row":16,"column":27},"end":{"row":16,"column":28},"action":"insert","lines":["t"],"id":8},{"start":{"row":16,"column":28},"end":{"row":16,"column":29},"action":"insert","lines":["a"]},{"start":{"row":16,"column":29},"end":{"row":16,"column":30},"action":"insert","lines":["s"]},{"start":{"row":16,"column":30},"end":{"row":16,"column":31},"action":"insert","lines":["k"]}],[{"start":{"row":7,"column":16},"end":{"row":7,"column":23},"action":"remove","lines":["message"],"id":9},{"start":{"row":7,"column":16},"end":{"row":7,"column":20},"action":"insert","lines":["task"]},{"start":{"row":16,"column":37},"end":{"row":16,"column":44},"action":"remove","lines":["message"]},{"start":{"row":16,"column":37},"end":{"row":16,"column":41},"action":"insert","lines":["task"]},{"start":{"row":18,"column":28},"end":{"row":18,"column":35},"action":"remove","lines":["message"]},{"start":{"row":18,"column":28},"end":{"row":18,"column":32},"action":"insert","lines":["task"]},{"start":{"row":19,"column":28},"end":{"row":19,"column":35},"action":"remove","lines":["message"]},{"start":{"row":19,"column":28},"end":{"row":19,"column":32},"action":"insert","lines":["task"]}],[{"start":{"row":24,"column":10},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":25,"column":4},"end":{"row":26,"column":94},"action":"insert","lines":["{{-- メッセージ作成ページへのリンク --}}","    {!! link_to_route('messages.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}"],"id":11}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"remove","lines":["ジ"],"id":12},{"start":{"row":25,"column":12},"end":{"row":25,"column":13},"action":"remove","lines":["ー"]},{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"remove","lines":["セ"]},{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"remove","lines":["ッ"]},{"start":{"row":25,"column":9},"end":{"row":25,"column":10},"action":"remove","lines":["メ"]}],[{"start":{"row":25,"column":9},"end":{"row":25,"column":10},"action":"insert","lines":["t"],"id":13},{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"insert","lines":["a"]}],[{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"remove","lines":["a"],"id":14},{"start":{"row":25,"column":9},"end":{"row":25,"column":10},"action":"remove","lines":["t"]}],[{"start":{"row":25,"column":9},"end":{"row":25,"column":12},"action":"insert","lines":["タスク"],"id":15}],[{"start":{"row":26,"column":48},"end":{"row":26,"column":49},"action":"remove","lines":["ジ"],"id":16},{"start":{"row":26,"column":47},"end":{"row":26,"column":48},"action":"remove","lines":["ー"]},{"start":{"row":26,"column":46},"end":{"row":26,"column":47},"action":"remove","lines":["セ"]},{"start":{"row":26,"column":45},"end":{"row":26,"column":46},"action":"remove","lines":["ッ"]},{"start":{"row":26,"column":44},"end":{"row":26,"column":45},"action":"remove","lines":["メ"]},{"start":{"row":26,"column":43},"end":{"row":26,"column":44},"action":"remove","lines":["規"]},{"start":{"row":26,"column":42},"end":{"row":26,"column":43},"action":"remove","lines":["新"]}],[{"start":{"row":26,"column":42},"end":{"row":26,"column":45},"action":"insert","lines":["タスク"],"id":17}],[{"start":{"row":26,"column":47},"end":{"row":26,"column":48},"action":"remove","lines":["稿"],"id":18},{"start":{"row":26,"column":46},"end":{"row":26,"column":47},"action":"remove","lines":["投"]}],[{"start":{"row":26,"column":46},"end":{"row":26,"column":48},"action":"insert","lines":["作成"],"id":19}],[{"start":{"row":26,"column":23},"end":{"row":26,"column":30},"action":"remove","lines":["message"],"id":20},{"start":{"row":26,"column":23},"end":{"row":26,"column":27},"action":"insert","lines":["task"]}],[{"start":{"row":16,"column":16},"end":{"row":21,"column":27},"action":"remove","lines":["@foreach ($tasks as $task)","                <tr>","                    <td>{{ $task->id }}</td>","                    <td>{{ $task->content }}</td>","                </tr>","                @endforeach"],"id":21},{"start":{"row":16,"column":16},"end":{"row":22,"column":27},"action":"insert","lines":["@foreach ($messages as $message)","                <tr>","                    {{-- メッセージ詳細ページへのリンク --}}","                    <td>{!! link_to_route('messages.show', $message->id, ['message' => $message->id]) !!}</td>","                    <td>{{ $message->content }}</td>","                </tr>","                @endforeach"]}],[{"start":{"row":16,"column":27},"end":{"row":16,"column":34},"action":"remove","lines":["message"],"id":22},{"start":{"row":16,"column":27},"end":{"row":16,"column":31},"action":"insert","lines":["task"]},{"start":{"row":16,"column":37},"end":{"row":16,"column":44},"action":"remove","lines":["message"]},{"start":{"row":16,"column":37},"end":{"row":16,"column":41},"action":"insert","lines":["task"]},{"start":{"row":19,"column":43},"end":{"row":19,"column":50},"action":"remove","lines":["message"]},{"start":{"row":19,"column":43},"end":{"row":19,"column":47},"action":"insert","lines":["task"]},{"start":{"row":19,"column":57},"end":{"row":19,"column":64},"action":"remove","lines":["message"]},{"start":{"row":19,"column":57},"end":{"row":19,"column":61},"action":"insert","lines":["task"]},{"start":{"row":19,"column":69},"end":{"row":19,"column":76},"action":"remove","lines":["message"]},{"start":{"row":19,"column":69},"end":{"row":19,"column":73},"action":"insert","lines":["task"]},{"start":{"row":19,"column":79},"end":{"row":19,"column":86},"action":"remove","lines":["message"]},{"start":{"row":19,"column":79},"end":{"row":19,"column":83},"action":"insert","lines":["task"]},{"start":{"row":20,"column":28},"end":{"row":20,"column":35},"action":"remove","lines":["message"]},{"start":{"row":20,"column":28},"end":{"row":20,"column":32},"action":"insert","lines":["task"]}],[{"start":{"row":20,"column":49},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":23},{"start":{"row":21,"column":0},"end":{"row":21,"column":20},"action":"insert","lines":["                    "]}],[{"start":{"row":20,"column":20},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":24},{"start":{"row":21,"column":0},"end":{"row":21,"column":20},"action":"insert","lines":["                    "]}],[{"start":{"row":22,"column":16},"end":{"row":22,"column":20},"action":"remove","lines":["    "],"id":25},{"start":{"row":22,"column":12},"end":{"row":22,"column":16},"action":"remove","lines":["    "]},{"start":{"row":22,"column":8},"end":{"row":22,"column":12},"action":"remove","lines":["    "]},{"start":{"row":22,"column":4},"end":{"row":22,"column":8},"action":"remove","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"remove","lines":["    "]},{"start":{"row":21,"column":49},"end":{"row":22,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":20,"column":20},"end":{"row":20,"column":49},"action":"insert","lines":["<td>{{ $task->content }}</td>"],"id":26}],[{"start":{"row":20,"column":40},"end":{"row":20,"column":41},"action":"remove","lines":["t"],"id":27},{"start":{"row":20,"column":39},"end":{"row":20,"column":40},"action":"remove","lines":["n"]},{"start":{"row":20,"column":38},"end":{"row":20,"column":39},"action":"remove","lines":["e"]},{"start":{"row":20,"column":37},"end":{"row":20,"column":38},"action":"remove","lines":["t"]},{"start":{"row":20,"column":36},"end":{"row":20,"column":37},"action":"remove","lines":["n"]},{"start":{"row":20,"column":35},"end":{"row":20,"column":36},"action":"remove","lines":["o"]},{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"remove","lines":["c"]}],[{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"insert","lines":["s"],"id":28},{"start":{"row":20,"column":35},"end":{"row":20,"column":36},"action":"insert","lines":["t"]},{"start":{"row":20,"column":36},"end":{"row":20,"column":37},"action":"insert","lines":["a"]},{"start":{"row":20,"column":37},"end":{"row":20,"column":38},"action":"insert","lines":["t"]},{"start":{"row":20,"column":38},"end":{"row":20,"column":39},"action":"insert","lines":["u"]},{"start":{"row":20,"column":39},"end":{"row":20,"column":40},"action":"insert","lines":["s"]}]]},"ace":{"folds":[],"scrolltop":49.5,"scrollleft":0,"selection":{"start":{"row":20,"column":40},"end":{"row":20,"column":40},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":2,"state":"start","mode":"ace/mode/php"}},"timestamp":1602509308295,"hash":"d408deb2d6f4e6c8ced5a66d54725f1b9f8f6608"}