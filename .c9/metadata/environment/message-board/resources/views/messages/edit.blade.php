{"filter":false,"title":"edit.blade.php","tooltip":"/message-board/resources/views/messages/edit.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":9,"column":12},"end":{"row":18,"column":33},"action":"remove","lines":["{!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","","                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}","","            {!! Form::close() !!}"],"id":6},{"start":{"row":9,"column":12},"end":{"row":23,"column":33},"action":"insert","lines":["{!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","","                <div class=\"form-group\">","                    {!! Form::label('title', 'タイトル:') !!}","                    {!! Form::text('title', null, ['class' => 'form-control']) !!}","                </div>","","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","","                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}","","            {!! Form::close() !!}"]}]]},"ace":{"folds":[],"scrolltop":21.5,"scrollleft":0,"selection":{"start":{"row":23,"column":33},"end":{"row":23,"column":33},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1602478214979,"hash":"aa366ec4a7a03ac79ccefe7ac4b15d00e8035ffe"}