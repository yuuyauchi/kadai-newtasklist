{"filter":false,"title":"MessagesTableSeeder.php","tooltip":"/message-board/database/seeds/MessagesTableSeeder.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":13,"column":7},"end":{"row":13,"column":10},"action":"remove","lines":[" //"],"id":2},{"start":{"row":13,"column":7},"end":{"row":24,"column":11},"action":"insert","lines":[" DB::table('messages')->insert([","            'title' => 'test title 1',","            'content' => 'test content 1'","        ]);","        DB::table('messages')->insert([","            'title' => 'test title 2',","            'content' => 'test content 2'","        ]);","        DB::table('messages')->insert([","            'title' => 'test title 3',","            'content' => 'test content 3'","        ]);"]}],[{"start":{"row":13,"column":8},"end":{"row":24,"column":11},"action":"remove","lines":["DB::table('messages')->insert([","            'title' => 'test title 1',","            'content' => 'test content 1'","        ]);","        DB::table('messages')->insert([","            'title' => 'test title 2',","            'content' => 'test content 2'","        ]);","        DB::table('messages')->insert([","            'title' => 'test title 3',","            'content' => 'test content 3'","        ]);"],"id":3},{"start":{"row":13,"column":8},"end":{"row":18,"column":9},"action":"insert","lines":["for($i = 1; $i <= 100; $i++) {","            DB::table('messages')->insert([","                'title' => 'test title ' . $i,","                'content' => 'test content ' . $i","            ]);","        }"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":18,"column":9},"end":{"row":18,"column":9},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1602553251325,"hash":"87ea653701b962e9d2bd664b1a521ec16218954d"}