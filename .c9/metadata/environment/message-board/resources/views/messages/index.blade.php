{"filter":false,"title":"index.blade.php","tooltip":"/message-board/resources/views/messages/index.blade.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":6,"column":4},"end":{"row":24,"column":10},"action":"remove","lines":["@if (count($messages) > 0)","        <table class=\"table table-striped\">","            <thead>","                <tr>","                    <th>id</th>","                    <th>メッセージ</th>","                </tr>","            </thead>","            <tbody>","                @foreach ($messages as $message)","                <tr>","                    {{-- メッセージ詳細ページへのリンク --}}","                    <td>{!! link_to_route('messages.show', $message->id, ['message' => $message->id]) !!}</td>","                    <td>{{ $message->content }}</td>","                </tr>","                @endforeach","            </tbody>","        </table>","    @endif"],"id":10},{"start":{"row":6,"column":4},"end":{"row":26,"column":10},"action":"insert","lines":["@if (count($messages) > 0)","        <table class=\"table table-striped\">","            <thead>","                <tr>","                    <th>id</th>","                    <th>タイトル</th>","                    <th>メッセージ</th>","                </tr>","            </thead>","            <tbody>","                @foreach ($messages as $message)","                <tr>","                    {{-- メッセージ詳細ページへのリンク --}}","                    <td>{!! link_to_route('messages.show', $message->id, ['message' => $message->id]) !!}</td>","                    <td>{{ $message->title }}</td>","                    <td>{{ $message->content }}</td>","                </tr>","                @endforeach","            </tbody>","        </table>","    @endif"]}],[{"start":{"row":26,"column":10},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":11},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":27,"column":4},"end":{"row":28,"column":28},"action":"insert","lines":["{{-- ページネーションのリンク --}}","    {{ $messages->links() }}"],"id":12}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":28,"column":28},"end":{"row":28,"column":28},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1602553797299,"hash":"b8248a4fc5cf500465b10a9bff9f2e0aed841499"}