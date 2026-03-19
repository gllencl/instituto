<?php
return [
    "students"=>[
        'role'=>"student",
    ],
    "teachers"=>[
        'role'=>"teacher",
    ],
    "projects"=>[
        "fields"=>['name','description','hours','start_date'],
    ],
    "users"=>[
        'fields'=>['name','email','password','phone','dni','department'],
    ],
    "guests"=>[
        'role'=>"guest",
    ], //Usaario registrado  pero no es estudiante ni profesor
    "tasks"=>[],
];
