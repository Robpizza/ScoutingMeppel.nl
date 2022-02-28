<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'slug' => 'hunenhorde',
            'name' => 'Dinsdag Welpen',
            'age' => '{"min":7,"max":11}',
            'icon' => '/images/speltakken/Speltakteken_welpen_2010.png',
            'page_content' => 'PHRhYmxlIHN0eWxlPSJib3JkZXItY29sbGFwc2U6IGNvbGxhcHNlOyB3aWR0aDogOTkuNzE0MyU7IGJvcmRlci1zdHlsZTogbm9uZTsiIGJvcmRlcj0iMSI+CiAgICA8dGJvZHk+CiAgICAgICAgPHRyPgogICAgICAgICAgICA8dGQgc3R5bGU9IndpZHRoOiA0Ny45NTQlOyB2ZXJ0aWNhbC1hbGlnbjogdG9wOyI+CiAgICAgICAgICAgICAgICA8aDM+SHVuZW4gSG9yZGUgZW4gRnJhc2NvbmkgSG9yZGU8L2gzPgogICAgICAgICAgICAgICAgPHAKICAgICAgICAgICAgICAgICAgICBzdHlsZT0ibWFyZ2luOiA2cHggMHB4OyBwYWRkaW5nOiAwcHg7IGxpbmUtaGVpZ2h0OiAxLjVlbTsgY29sb3I6ICMwZjBmMGY7IGZvbnQtZmFtaWx5OiBWZXJkYW5hLCBHZW5ldmEsIEFyaWFsLCAnQml0c3RyZWFtIFZlcmEgU2FucycsICdEZWphVnUgU2FucycsIE1laXJ5bywgJ0hpcmFnaW5vIEtha3UgR290aGljIFBybycsICdNUyBQR290aGljJywgT3Nha2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTRweDsgYmFja2dyb3VuZC1jb2xvcjogI2ZmZmZmZjsiPgogICAgICAgICAgICAgICAgICAgIDxzdHJvbmcgc3R5bGU9Im1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7Ij5XaWUgemlqbiZuYnNwO2RlJm5ic3A7PHNwYW4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBjb2xvcjogIzAwODAwMDsiPjxlbQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+V2VscGVuPC9lbT48L3NwYW4+Pzwvc3Ryb25nPjwvcD4KICAgICAgICAgICAgICAgIDxwCiAgICAgICAgICAgICAgICAgICAgc3R5bGU9Im1hcmdpbjogNnB4IDBweDsgcGFkZGluZzogMHB4OyBsaW5lLWhlaWdodDogMS41ZW07IGNvbG9yOiAjMGYwZjBmOyBmb250LWZhbWlseTogVmVyZGFuYSwgR2VuZXZhLCBBcmlhbCwgJ0JpdHN0cmVhbSBWZXJhIFNhbnMnLCAnRGVqYVZ1IFNhbnMnLCBNZWlyeW8sICdIaXJhZ2lubyBLYWt1IEdvdGhpYyBQcm8nLCAnTVMgUEdvdGhpYycsIE9zYWthLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDE0cHg7IGJhY2tncm91bmQtY29sb3I6ICNmZmZmZmY7Ij4KICAgICAgICAgICAgICAgICAgICBNZWlkZW4gZW4gam9uZ2VucyB0dXNzZW4gZGUgNyBlbiAxMSBqYWFyIGRpZSBoZXQgbGV1ayB2aW5kZW4gb20gaWVkZXJlIHdlZWsgc2FtZW4gaWV0cyBzcG9ydGllZnMgZW4KICAgICAgICAgICAgICAgICAgICBzcGFubmVuZHMgdGUgZG9lbi4gU2FtZW4gbWV0IGRlIGZpZ3VyZW4gdWl0IEp1bmdsZWJvb2sgYmVsZXZlbiB3ZSB2ZXJzY2hpbGxlbmRlIGF2b250dXJlbiwgd2UgZG9lbgogICAgICAgICAgICAgICAgICAgIGRpdCBhYW4gZGUgaGFuZCB2YW4gZWVuIHRoZW1hLiBXZSBvbnR3aWtrZWxlbiB6byB2ZWVsIHZlcnNjaGlsbGVuZGUgdmFhcmRpZ2hlZGVuIGVuIGRpdCBzdGltdWxlZXJ0CiAgICAgICAgICAgICAgICAgICAgb256ZSBmYW50YXNpZS48L3A+CiAgICAgICAgICAgICAgICA8cAogICAgICAgICAgICAgICAgICAgIHN0eWxlPSJtYXJnaW46IDZweCAwcHg7IHBhZGRpbmc6IDBweDsgbGluZS1oZWlnaHQ6IDEuNWVtOyBjb2xvcjogIzBmMGYwZjsgZm9udC1mYW1pbHk6IFZlcmRhbmEsIEdlbmV2YSwgQXJpYWwsICdCaXRzdHJlYW0gVmVyYSBTYW5zJywgJ0RlamFWdSBTYW5zJywgTWVpcnlvLCAnSGlyYWdpbm8gS2FrdSBHb3RoaWMgUHJvJywgJ01TIFBHb3RoaWMnLCBPc2FrYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxNHB4OyBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmZmZmOyI+CiAgICAgICAgICAgICAgICAgICAgJm5ic3A7PC9wPgogICAgICAgICAgICAgICAgPHAKICAgICAgICAgICAgICAgICAgICBzdHlsZT0ibWFyZ2luOiA2cHggMHB4OyBwYWRkaW5nOiAwcHg7IGxpbmUtaGVpZ2h0OiAxLjVlbTsgY29sb3I6ICMwZjBmMGY7IGZvbnQtZmFtaWx5OiBWZXJkYW5hLCBHZW5ldmEsIEFyaWFsLCAnQml0c3RyZWFtIFZlcmEgU2FucycsICdEZWphVnUgU2FucycsIE1laXJ5bywgJ0hpcmFnaW5vIEtha3UgR290aGljIFBybycsICdNUyBQR290aGljJywgT3Nha2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTRweDsgYmFja2dyb3VuZC1jb2xvcjogI2ZmZmZmZjsiPgogICAgICAgICAgICAgICAgICAgIDxzdHJvbmcgc3R5bGU9Im1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7Ij5XYXQgZG9lbiZuYnNwO2RlJm5ic3A7PHNwYW4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBjb2xvcjogIzAwODAwMDsiPjxlbQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+V2VscGVuPC9lbT48L3NwYW4+Pzwvc3Ryb25nPjxicgogICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT0ibWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiIC8+RGUmbmJzcDs8c3Ryb25nIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+PHNwYW4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBjb2xvcjogIzAwODAwMDsiPjxlbQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+V2VscGVuPC9lbT48L3NwYW4+Jm5ic3A7PC9zdHJvbmc+c3BlbGVuIHNhbWVuIGluIGRlCiAgICAgICAgICAgICAgICAgICAganVuZ2xlLCB3ZSBnYWFuIHRpamRlbnMgZGUgb3Brb21zdGVuIG9wIGF2b250dXVyLiBEaXQga2FuIG9wIGFsbGVybGVpIHZlcnNjaGlsbGVuZGUgbWFuaWVyZW4sCiAgICAgICAgICAgICAgICAgICAgZGUmbmJzcDs8c3Ryb25nIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+PHNwYW4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBjb2xvcjogIzAwODAwMDsiPjxlbQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+V2VscGVuPC9lbT48L3NwYW4+Jm5ic3A7PC9zdHJvbmc+aG91ZGVuIHZhbiBidWl0ZW4KICAgICAgICAgICAgICAgICAgICBzcGVsZW4sIG1hYXIgb29rIGJpbm5lbiBvcCBvbnplIEhvcG1hbiBLd2FudCBCYXNpcyAoSEtCKSB6aWpuIGVyIGxldWtlIGFjdGl2aXRlaXRlbiB0ZSBiZWxldmVuLiBXZQogICAgICAgICAgICAgICAgICAgIGxlcmVuIHNwZWxlbmRlcndpanMgaW4gZGUgdmVyc2NoaWxsZW5kZSBsZWVmZ2ViaWVkZW4gdmFuIGRlIGp1bmdsZS48YnIKICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9Im1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IiAvPkRlIGdyb2VwJm5ic3A7PHN0cm9uZwogICAgICAgICAgICAgICAgICAgICAgICBzdHlsZT0ibWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiPjxzcGFuIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBjb2xvcjogIzAwODAwMDsiPjxlbQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+V2VscGVuPC9lbT48L3NwYW4+Jm5ic3A7PC9zdHJvbmc+YmlqIGVsa2FhciBub2VtZW4gd2UKICAgICAgICAgICAgICAgICAgICBkZSBob3JkZSwgZGV6ZSBob3JkZSBpcyB3ZWVyIG9uZGVydmVyZGVlbGQgaW4gbmVzdGVuLjwvcD4KICAgICAgICAgICAgICAgIDxwCiAgICAgICAgICAgICAgICAgICAgc3R5bGU9Im1hcmdpbjogNnB4IDBweDsgcGFkZGluZzogMHB4OyBsaW5lLWhlaWdodDogMS41ZW07IGNvbG9yOiAjMGYwZjBmOyBmb250LWZhbWlseTogVmVyZGFuYSwgR2VuZXZhLCBBcmlhbCwgJ0JpdHN0cmVhbSBWZXJhIFNhbnMnLCAnRGVqYVZ1IFNhbnMnLCBNZWlyeW8sICdIaXJhZ2lubyBLYWt1IEdvdGhpYyBQcm8nLCAnTVMgUEdvdGhpYycsIE9zYWthLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDE0cHg7IGJhY2tncm91bmQtY29sb3I6ICNmZmZmZmY7Ij4KICAgICAgICAgICAgICAgICAgICAmbmJzcDs8L3A+CiAgICAgICAgICAgICAgICA8cAogICAgICAgICAgICAgICAgICAgIHN0eWxlPSJtYXJnaW46IDZweCAwcHg7IHBhZGRpbmc6IDBweDsgbGluZS1oZWlnaHQ6IDEuNWVtOyBjb2xvcjogIzBmMGYwZjsgZm9udC1mYW1pbHk6IFZlcmRhbmEsIEdlbmV2YSwgQXJpYWwsICdCaXRzdHJlYW0gVmVyYSBTYW5zJywgJ0RlamFWdSBTYW5zJywgTWVpcnlvLCAnSGlyYWdpbm8gS2FrdSBHb3RoaWMgUHJvJywgJ01TIFBHb3RoaWMnLCBPc2FrYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxNHB4OyBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmZmZmOyI+CiAgICAgICAgICAgICAgICAgICAgPHN0cm9uZyBzdHlsZT0ibWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiPkNvbnRhY3QgbWV0IGRlJm5ic3A7PHNwYW4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBjb2xvcjogIzAwODAwMDsiPjxlbQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+V2VscGVuJm5ic3A7PC9lbT48L3NwYW4+RnJhc2NvbmkgaG9yZGU8L3N0cm9uZz48YnIKICAgICAgICAgICAgICAgICAgICAgICAgc3R5bGU9Im1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IiAvPk1vY2h0IHUgbmEgaGV0IGxlemVuIHZhbiBkZXplIGluZm9ybWF0aWUgbm9nCiAgICAgICAgICAgICAgICAgICAgaWV0cyZuYnNwO3dpbGxlbiB3ZXRlbiBvZiB2cmFnZW4gZGFuIGt1bnQgdSBvcCB2cmlqZGFnYXZvbmQgbmEgZGUgb3Brb21zdCZuYnNwO2RlIGxlaWRpbmcgYWFuc3ByZWtlbgogICAgICAgICAgICAgICAgICAgIG9mIGVlbiZuYnNwOzxhIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyB0ZXh0LWRlY29yYXRpb24tbGluZTogbm9uZTsgY29sb3I6ICMyZjc2Mjg7IgogICAgICAgICAgICAgICAgICAgICAgICBocmVmPSJtYWlsdG86d2VscGVuQHNjb3V0aW5nbWVwcGVsLm5sP3N1YmplY3Q9aW5mbyUyMHZpYSUyMHdlYnNpdGUlMjAlM0EiPmUtbWFpbDwvYT4mbmJzcDtzdHVyZW4KICAgICAgICAgICAgICAgICAgICBuYWFyOiZuYnNwOzxhIGhyZWY9Im1haWx0bzp3ZWxwZW5Ac2NvdXRpbmdtZXBwZWwubmwiPndlbHBlbkBzY291dGluZ21lcHBlbC5ubDwvYT48L3A+CiAgICAgICAgICAgICAgICA8cAogICAgICAgICAgICAgICAgICAgIHN0eWxlPSJtYXJnaW46IDZweCAwcHg7IHBhZGRpbmc6IDBweDsgbGluZS1oZWlnaHQ6IDEuNWVtOyBjb2xvcjogIzBmMGYwZjsgZm9udC1mYW1pbHk6IFZlcmRhbmEsIEdlbmV2YSwgQXJpYWwsICdCaXRzdHJlYW0gVmVyYSBTYW5zJywgJ0RlamFWdSBTYW5zJywgTWVpcnlvLCAnSGlyYWdpbm8gS2FrdSBHb3RoaWMgUHJvJywgJ01TIFBHb3RoaWMnLCBPc2FrYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxNHB4OyBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmZmZmOyI+CiAgICAgICAgICAgICAgICAgICAgJm5ic3A7PC9wPgogICAgICAgICAgICA8L3RkPgogICAgICAgICAgICA8dGQgc3R5bGU9IndpZHRoOiA0Ny45NTQlOyB0ZXh0LWFsaWduOiByaWdodDsgdmVydGljYWwtYWxpZ246IHRvcDsiPgogICAgICAgICAgICAgICAgPGgyPkh1bmVuaG9yZGU8L2gyPgogICAgICAgICAgICAgICAgPHA+PHN0cm9uZz5UZWFtbGVpZGVyOiZuYnNwOzwvc3Ryb25nPlRvaW5lPGJyIC8+PGEKICAgICAgICAgICAgICAgICAgICAgICAgaHJlZj0ibWFpbHRvOmh1bmVuaG9yZGVAc2NvdXRpbmdtZXBwZWwubmwiPmh1bmVuaG9yZGVAc2NvdXRpbmdtZXBwZWwubmw8L2E+PC9wPgogICAgICAgICAgICAgICAgPHA+PHN0cm9uZz5PcGtvbXN0dGlqZGVuOjxiciAvPjwvc3Ryb25nPkRpbnNkYWdhdm9uZDxiciAvPjE4OjE1IHRvdCAxOTo0NSB1dXI8L3A+CiAgICAgICAgICAgICAgICA8cD48c3Ryb25nPkxlZWZ0aWpkc2dyb2VwOjxiciAvPjwvc3Ryb25nPlZhbiA3IHRvdCAxMSBqYWFyPC9wPgogICAgICAgICAgICA8L3RkPgogICAgICAgIDwvdHI+CiAgICA8L3Rib2R5Pgo8L3RhYmxlPg=='
        ]);
        DB::table('groups')->insert([
            'slug' => 'fransconihorde',
            'name' => 'Vrijdag Welpen',
            'age' => '{"min":7,"max":11}',
            'icon' => '/images/speltakken/Speltakteken_welpen_2010.png',
            'page_content' => 'PHRhYmxlIHN0eWxlPSJib3JkZXItY29sbGFwc2U6IGNvbGxhcHNlOyB3aWR0aDogOTkuNzE0MyU7IGJvcmRlci1zdHlsZTogbm9uZTsiIGJvcmRlcj0iMSI+CiAgICA8dGJvZHk+CiAgICA8dHI+CiAgICA8dGQgc3R5bGU9IndpZHRoOiA0Ny45NTQlOyB2ZXJ0aWNhbC1hbGlnbjogdG9wOyI+CiAgICA8aDM+RnJhc2NvbmkgSG9yZGU8L2gzPgogICAgPHAgc3R5bGU9Im1hcmdpbjogNnB4IDBweDsgcGFkZGluZzogMHB4OyBsaW5lLWhlaWdodDogMS41ZW07IGNvbG9yOiAjMGYwZjBmOyBmb250LWZhbWlseTogVmVyZGFuYSwgR2VuZXZhLCBBcmlhbCwgJ0JpdHN0cmVhbSBWZXJhIFNhbnMnLCAnRGVqYVZ1IFNhbnMnLCBNZWlyeW8sICdIaXJhZ2lubyBLYWt1IEdvdGhpYyBQcm8nLCAnTVMgUEdvdGhpYycsIE9zYWthLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDE0cHg7IGJhY2tncm91bmQtY29sb3I6ICNmZmZmZmY7Ij48c3Ryb25nIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+V2llIHppam4mbmJzcDtkZSZuYnNwOzxzcGFuIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBjb2xvcjogIzAwODAwMDsiPjxlbSBzdHlsZT0ibWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiPldlbHBlbjwvZW0+PC9zcGFuPj88L3N0cm9uZz48L3A+CiAgICA8cCBzdHlsZT0ibWFyZ2luOiA2cHggMHB4OyBwYWRkaW5nOiAwcHg7IGxpbmUtaGVpZ2h0OiAxLjVlbTsgY29sb3I6ICMwZjBmMGY7IGZvbnQtZmFtaWx5OiBWZXJkYW5hLCBHZW5ldmEsIEFyaWFsLCAnQml0c3RyZWFtIFZlcmEgU2FucycsICdEZWphVnUgU2FucycsIE1laXJ5bywgJ0hpcmFnaW5vIEtha3UgR290aGljIFBybycsICdNUyBQR290aGljJywgT3Nha2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTRweDsgYmFja2dyb3VuZC1jb2xvcjogI2ZmZmZmZjsiPk1laWRlbiBlbiBqb25nZW5zIHR1c3NlbiBkZSA3IGVuIDExIGphYXIgZGllIGhldCBsZXVrIHZpbmRlbiBvbSBpZWRlcmUgd2VlayBzYW1lbiBpZXRzIHNwb3J0aWVmcyBlbiBzcGFubmVuZHMgdGUgZG9lbi4gU2FtZW4gbWV0IGRlIGZpZ3VyZW4gdWl0IEp1bmdsZWJvb2sgYmVsZXZlbiB3ZSB2ZXJzY2hpbGxlbmRlIGF2b250dXJlbiwgd2UgZG9lbiBkaXQgYWFuIGRlIGhhbmQgdmFuIGVlbiB0aGVtYS4gV2Ugb250d2lra2VsZW4gem8gdmVlbCB2ZXJzY2hpbGxlbmRlIHZhYXJkaWdoZWRlbiBlbiBkaXQgc3RpbXVsZWVydCBvbnplIGZhbnRhc2llLjwvcD4KICAgIDxwIHN0eWxlPSJtYXJnaW46IDZweCAwcHg7IHBhZGRpbmc6IDBweDsgbGluZS1oZWlnaHQ6IDEuNWVtOyBjb2xvcjogIzBmMGYwZjsgZm9udC1mYW1pbHk6IFZlcmRhbmEsIEdlbmV2YSwgQXJpYWwsICdCaXRzdHJlYW0gVmVyYSBTYW5zJywgJ0RlamFWdSBTYW5zJywgTWVpcnlvLCAnSGlyYWdpbm8gS2FrdSBHb3RoaWMgUHJvJywgJ01TIFBHb3RoaWMnLCBPc2FrYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxNHB4OyBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmZmZmOyI+Jm5ic3A7PC9wPgogICAgPHAgc3R5bGU9Im1hcmdpbjogNnB4IDBweDsgcGFkZGluZzogMHB4OyBsaW5lLWhlaWdodDogMS41ZW07IGNvbG9yOiAjMGYwZjBmOyBmb250LWZhbWlseTogVmVyZGFuYSwgR2VuZXZhLCBBcmlhbCwgJ0JpdHN0cmVhbSBWZXJhIFNhbnMnLCAnRGVqYVZ1IFNhbnMnLCBNZWlyeW8sICdIaXJhZ2lubyBLYWt1IEdvdGhpYyBQcm8nLCAnTVMgUEdvdGhpYycsIE9zYWthLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDE0cHg7IGJhY2tncm91bmQtY29sb3I6ICNmZmZmZmY7Ij48c3Ryb25nIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+V2F0IGRvZW4mbmJzcDtkZSZuYnNwOzxzcGFuIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBjb2xvcjogIzAwODAwMDsiPjxlbSBzdHlsZT0ibWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiPldlbHBlbjwvZW0+PC9zcGFuPj88L3N0cm9uZz48YnIgc3R5bGU9Im1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IiAvPkRlJm5ic3A7PHN0cm9uZyBzdHlsZT0ibWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiPjxzcGFuIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyBjb2xvcjogIzAwODAwMDsiPjxlbSBzdHlsZT0ibWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiPldlbHBlbjwvZW0+PC9zcGFuPiZuYnNwOzwvc3Ryb25nPnNwZWxlbiBzYW1lbiBpbiBkZSBqdW5nbGUsIHdlIGdhYW4gdGlqZGVucyBkZSBvcGtvbXN0ZW4gb3AgYXZvbnR1dXIuIERpdCBrYW4gb3AgYWxsZXJsZWkgdmVyc2NoaWxsZW5kZSBtYW5pZXJlbiwgZGUmbmJzcDs8c3Ryb25nIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+PHNwYW4gc3R5bGU9Im1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IGNvbG9yOiAjMDA4MDAwOyI+PGVtIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+V2VscGVuPC9lbT48L3NwYW4+Jm5ic3A7PC9zdHJvbmc+aG91ZGVuIHZhbiBidWl0ZW4gc3BlbGVuLCBtYWFyIG9vayBiaW5uZW4gb3Agb256ZSBIb3BtYW4gS3dhbnQgQmFzaXMgKEhLQikgemlqbiBlciBsZXVrZSBhY3Rpdml0ZWl0ZW4gdGUgYmVsZXZlbi4gV2UgbGVyZW4gc3BlbGVuZGVyd2lqcyBpbiBkZSB2ZXJzY2hpbGxlbmRlIGxlZWZnZWJpZWRlbiB2YW4gZGUganVuZ2xlLjxiciBzdHlsZT0ibWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiIC8+RGUgZ3JvZXAmbmJzcDs8c3Ryb25nIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+PHNwYW4gc3R5bGU9Im1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IGNvbG9yOiAjMDA4MDAwOyI+PGVtIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+V2VscGVuPC9lbT48L3NwYW4+Jm5ic3A7PC9zdHJvbmc+YmlqIGVsa2FhciBub2VtZW4gd2UgZGUgaG9yZGUsIGRlemUgaG9yZGUgaXMgd2VlciBvbmRlcnZlcmRlZWxkIGluIG5lc3Rlbi48L3A+CiAgICA8cCBzdHlsZT0ibWFyZ2luOiA2cHggMHB4OyBwYWRkaW5nOiAwcHg7IGxpbmUtaGVpZ2h0OiAxLjVlbTsgY29sb3I6ICMwZjBmMGY7IGZvbnQtZmFtaWx5OiBWZXJkYW5hLCBHZW5ldmEsIEFyaWFsLCAnQml0c3RyZWFtIFZlcmEgU2FucycsICdEZWphVnUgU2FucycsIE1laXJ5bywgJ0hpcmFnaW5vIEtha3UgR290aGljIFBybycsICdNUyBQR290aGljJywgT3Nha2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTRweDsgYmFja2dyb3VuZC1jb2xvcjogI2ZmZmZmZjsiPiZuYnNwOzwvcD4KICAgIDxwIHN0eWxlPSJtYXJnaW46IDZweCAwcHg7IHBhZGRpbmc6IDBweDsgbGluZS1oZWlnaHQ6IDEuNWVtOyBjb2xvcjogIzBmMGYwZjsgZm9udC1mYW1pbHk6IFZlcmRhbmEsIEdlbmV2YSwgQXJpYWwsICdCaXRzdHJlYW0gVmVyYSBTYW5zJywgJ0RlamFWdSBTYW5zJywgTWVpcnlvLCAnSGlyYWdpbm8gS2FrdSBHb3RoaWMgUHJvJywgJ01TIFBHb3RoaWMnLCBPc2FrYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxNHB4OyBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmZmZmOyI+PHN0cm9uZyBzdHlsZT0ibWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiPkNvbnRhY3QgbWV0IGRlJm5ic3A7PHNwYW4gc3R5bGU9Im1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IGNvbG9yOiAjMDA4MDAwOyI+PGVtIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+V2VscGVuJm5ic3A7PC9lbT48L3NwYW4+RnJhc2NvbmkgaG9yZGU8L3N0cm9uZz48YnIgc3R5bGU9Im1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IiAvPk1vY2h0IHUgbmEgaGV0IGxlemVuIHZhbiBkZXplIGluZm9ybWF0aWUgbm9nIGlldHMmbmJzcDt3aWxsZW4gd2V0ZW4gb2YgdnJhZ2VuIGRhbiBrdW50IHUgb3AgdnJpamRhZ2F2b25kIG5hIGRlIG9wa29tc3QmbmJzcDtkZSBsZWlkaW5nIGFhbnNwcmVrZW4gb2YgZWVuJm5ic3A7PGEgc3R5bGU9Im1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7IHRleHQtZGVjb3JhdGlvbi1saW5lOiBub25lOyBjb2xvcjogIzJmNzYyODsiIGhyZWY9Im1haWx0bzpmcmFuc2Nvbmlob3JkZUBzY291dGluZ21lcHBlbC5ubD9zdWJqZWN0PWluZm8lMjB2aWElMjB3ZWJzaXRlJTIwJTNBIj5lLW1haWw8L2E+Jm5ic3A7c3R1cmVuIG5hYXI6Jm5ic3A7PGEgaHJlZj0ibWFpbHRvOmZyYW5zY29uaWhvcmRlQHNjb3V0aW5nbWVwcGVsLm5sIj5mcmFuc2Nvbmlob3JkZUBzY291dGluZ21lcHBlbC5ubDwvYT48L3A+CiAgICA8cCBzdHlsZT0ibWFyZ2luOiA2cHggMHB4OyBwYWRkaW5nOiAwcHg7IGxpbmUtaGVpZ2h0OiAxLjVlbTsgY29sb3I6ICMwZjBmMGY7IGZvbnQtZmFtaWx5OiBWZXJkYW5hLCBHZW5ldmEsIEFyaWFsLCAnQml0c3RyZWFtIFZlcmEgU2FucycsICdEZWphVnUgU2FucycsIE1laXJ5bywgJ0hpcmFnaW5vIEtha3UgR290aGljIFBybycsICdNUyBQR290aGljJywgT3Nha2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTRweDsgYmFja2dyb3VuZC1jb2xvcjogI2ZmZmZmZjsiPiZuYnNwOzwvcD4KICAgIDwvdGQ+CiAgICA8dGQgc3R5bGU9IndpZHRoOiA0Ny45NTQlOyB0ZXh0LWFsaWduOiByaWdodDsgdmVydGljYWwtYWxpZ246IHRvcDsiPgogICAgPGgyPkZyYW5zb25pIEhvcmRlPC9oMj4KICAgIDxwPjxzdHJvbmc+VGVhbWxlaWRlcjogRGFuaSZldW1sO2xsZTwvc3Ryb25nPjxiciAvPjxhIGhyZWY9Im1haWx0bzpmcmFuc2Nvbmlob3JkZUBzY291dGluZ21lcHBlbC5ubCI+ZnJhbnNjb25paG9yZGVAc2NvdXRpbmdtZXBwZWwubmw8L2E+PC9wPgogICAgPHA+PHN0cm9uZz5PcGtvbXN0dGlqZGVuOjxiciAvPjwvc3Ryb25nPlZyaWpkYWdhdm9uZDxiciAvPjE4OjMwIHRvdCAyMDowMCB1dXI8L3A+CiAgICA8cD48c3Ryb25nPkxlZWZ0aWpkc2dyb2VwOjxiciAvPjwvc3Ryb25nPlZhbiA3IHRvdCAxMSBqYWFyPC9wPgogICAgPHA+Jm5ic3A7PC9wPgogICAgPC90ZD4KICAgIDwvdHI+CiAgICA8L3Rib2R5PgogICAgPC90YWJsZT4='
        ]);
        DB::table('groups')->insert([
            'slug' => 'scheepsmaatjes',
            'name' => 'Waterwelpen',
            'age' => '{"min":7,"max":11}',
            'icon' => '/images/speltakken/Speltakteken_water_welpen_2010.png',
            'page_content' => 'PHRhYmxlIHN0eWxlPSJib3JkZXItY29sbGFwc2U6IGNvbGxhcHNlOyB3aWR0aDogOTkuNzE0MyU7IGJvcmRlci1zdHlsZTogbm9uZTsiIGJvcmRlcj0iMSI+DQo8dGJvZHk+DQo8dHI+DQo8dGQgc3R5bGU9IndpZHRoOiA0Ny45NTQlOyB2ZXJ0aWNhbC1hbGlnbjogdG9wOyI+DQo8aDM+U2NoZWVwc21hYXRqZXMgV2VscGVuPC9oMz4NCjxwIHN0eWxlPSJtYXJnaW46IDZweCAwcHg7IHBhZGRpbmc6IDBweDsgbGluZS1oZWlnaHQ6IDEuNWVtOyBjb2xvcjogIzBmMGYwZjsgZm9udC1mYW1pbHk6IFZlcmRhbmEsIEdlbmV2YSwgQXJpYWwsICdCaXRzdHJlYW0gVmVyYSBTYW5zJywgJ0RlamFWdSBTYW5zJywgTWVpcnlvLCAnSGlyYWdpbm8gS2FrdSBHb3RoaWMgUHJvJywgJ01TIFBHb3RoaWMnLCBPc2FrYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxNHB4OyBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmZmZmOyI+PHN0cm9uZyBzdHlsZT0ibWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiPjxzcGFuIHN0eWxlPSJjb2xvcjogIzBmMGYwZjsiPldpZSB6aWpuIGRlIDwvc3Bhbj48c3BhbiBzdHlsZT0iY29sb3I6ICMzNTk4ZGI7Ij48c3BhbiBzdHlsZT0iY29sb3I6ICMwMDgwMDA7Ij48ZW0+PHNwYW4gc3R5bGU9ImNvbG9yOiAjMzU5OGRiOyI+U2NoZWVwc21hYXRqZXM8L3NwYW4+PC9lbT48L3NwYW4+PC9zcGFuPjxzcGFuIHN0eWxlPSJjb2xvcjogIzBmMGYwZjsiPj88L3NwYW4+PC9zdHJvbmc+PC9wPg0KPHAgc3R5bGU9Im1hcmdpbjogNnB4IDBweDsgcGFkZGluZzogMHB4OyBsaW5lLWhlaWdodDogMS41ZW07IGNvbG9yOiAjMGYwZjBmOyBmb250LWZhbWlseTogVmVyZGFuYSwgR2VuZXZhLCBBcmlhbCwgJ0JpdHN0cmVhbSBWZXJhIFNhbnMnLCAnRGVqYVZ1IFNhbnMnLCBNZWlyeW8sICdIaXJhZ2lubyBLYWt1IEdvdGhpYyBQcm8nLCAnTVMgUEdvdGhpYycsIE9zYWthLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDE0cHg7IGJhY2tncm91bmQtY29sb3I6ICNmZmZmZmY7Ij48c3BhbiBzdHlsZT0iY29sb3I6ICMwZjBmMGY7IGZvbnQtZmFtaWx5OiBWZXJkYW5hLCBHZW5ldmEsIEFyaWFsLCBCaXRzdHJlYW0gVmVyYSBTYW5zLCBEZWphVnUgU2FucywgTWVpcnlvLCBIaXJhZ2lubyBLYWt1IEdvdGhpYyBQcm8sIE1TIFBHb3RoaWMsIE9zYWthLCBzYW5zLXNlcmlmOyI+PHNwYW4gc3R5bGU9ImZvbnQtc2l6ZTogMTRweDsiPkRlIHNjaGVlcHNtYWF0amVzIGlzIGVlbiB3ZWxwZW5zcGVsdGFrIGRpZSB6aWNoIHJpY2h0IG9wIHdhdGVyYWN0aXZpdGVpdGVuLiBaaXR0ZW4gemUgZGFuIGFsbGVlbiBtYWFyIG9wIGhldCB3YXRlcj8gTmVlLiBEZSBzY2hlZXBzbWFhdGplcyB6aWpuIHZvb3JhbCB0ZSB2aW5kZW4gb3AgaGV0IHNjb3V0aW5nZ2Vib3V3IGVuIHNwZWxlbiBkYWFyIGFsbGVybGVpIHNwZWxsZW4gbWV0IGVlbiBuYXV0aXNjaCB0aW50amUuIEVuIHdhbm5lZXIgaGV0IGluIGRlIHpvbWVyIHdhdCB3YXJtZXIgaXMsIGRhbiB6b2VrZW4gd2UgdWl0ZXJhYXJkIGhldCB3YXRlciBvcCBlbiBnYWFuIHdlIGthbm8mZXVtbDtuLCB2YXJlbiwgc3BlbGxlbiBkb2VuIGFhbiBkZSB3YXRlcmthbnQsIHp3ZW1tZW4gZW4gbm9nIHZlZWwgbWVlci48L3NwYW4+PC9zcGFuPjwvcD4NCjxwIHN0eWxlPSJtYXJnaW46IDZweCAwcHg7IHBhZGRpbmc6IDBweDsgbGluZS1oZWlnaHQ6IDEuNWVtOyBjb2xvcjogIzBmMGYwZjsgZm9udC1mYW1pbHk6IFZlcmRhbmEsIEdlbmV2YSwgQXJpYWwsICdCaXRzdHJlYW0gVmVyYSBTYW5zJywgJ0RlamFWdSBTYW5zJywgTWVpcnlvLCAnSGlyYWdpbm8gS2FrdSBHb3RoaWMgUHJvJywgJ01TIFBHb3RoaWMnLCBPc2FrYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxNHB4OyBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmZmZmOyI+Jm5ic3A7PC9wPg0KPHAgc3R5bGU9Im1hcmdpbjogNnB4IDBweDsgcGFkZGluZzogMHB4OyBsaW5lLWhlaWdodDogMS41ZW07IGNvbG9yOiAjMGYwZjBmOyBmb250LWZhbWlseTogVmVyZGFuYSwgR2VuZXZhLCBBcmlhbCwgJ0JpdHN0cmVhbSBWZXJhIFNhbnMnLCAnRGVqYVZ1IFNhbnMnLCBNZWlyeW8sICdIaXJhZ2lubyBLYWt1IEdvdGhpYyBQcm8nLCAnTVMgUEdvdGhpYycsIE9zYWthLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDE0cHg7IGJhY2tncm91bmQtY29sb3I6ICNmZmZmZmY7Ij48c3Ryb25nIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+TWFhciB3YXQgemlqbiB3ZWxwZW4gZGFuPzwvc3Ryb25nPjxiciBzdHlsZT0ibWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiIC8+PHNwYW4gc3R5bGU9ImNvbG9yOiAjMGYwZjBmOyBmb250LWZhbWlseTogVmVyZGFuYSwgR2VuZXZhLCBBcmlhbCwgQml0c3RyZWFtIFZlcmEgU2FucywgRGVqYVZ1IFNhbnMsIE1laXJ5bywgSGlyYWdpbm8gS2FrdSBHb3RoaWMgUHJvLCBNUyBQR290aGljLCBPc2FrYSwgc2Fucy1zZXJpZjsiPjxzcGFuIHN0eWxlPSJmb250LXNpemU6IDE0cHg7Ij5XZWxwZW4gemlqbiBtZWlkZW4gZW4gam9uZ2VucyB0dXNzZW4gZGUgNyBlbiAxMSBqYWFyIGRpZSBoZXQgbGV1ayB2aW5kZW4gb20gaWVkZXJlIHdlZWsgc2FtZW4gaWV0cyBzcG9ydGllZnMgZW4gc3Bhbm5lbmRzIHRlIGRvZW4uIEFhbiBkZSBoYW5kIHZhbiBlZW4gdmFzdCB0aGVtYSBiZWxldmVuIHdlIHZlcnNjaGlsbGVuZGUgYXZvbnR1cmVuLiBXZSBvbnR3aWtrZWxlbiB6byB2ZWVsIHZlcnNjaGlsbGVuZGUgdmFhcmRpZ2hlZGVuIGVuIGRpdCBzdGltdWxlZXJ0IG9uemUgZmFudGFzaWUuPC9zcGFuPjwvc3Bhbj48L3A+DQo8cCBzdHlsZT0ibWFyZ2luOiA2cHggMHB4OyBwYWRkaW5nOiAwcHg7IGxpbmUtaGVpZ2h0OiAxLjVlbTsgY29sb3I6ICMwZjBmMGY7IGZvbnQtZmFtaWx5OiBWZXJkYW5hLCBHZW5ldmEsIEFyaWFsLCAnQml0c3RyZWFtIFZlcmEgU2FucycsICdEZWphVnUgU2FucycsIE1laXJ5bywgJ0hpcmFnaW5vIEtha3UgR290aGljIFBybycsICdNUyBQR290aGljJywgT3Nha2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTRweDsgYmFja2dyb3VuZC1jb2xvcjogI2ZmZmZmZjsiPiZuYnNwOzwvcD4NCjxwIHN0eWxlPSJtYXJnaW46IDZweCAwcHg7IHBhZGRpbmc6IDBweDsgbGluZS1oZWlnaHQ6IDEuNWVtOyBjb2xvcjogIzBmMGYwZjsgZm9udC1mYW1pbHk6IFZlcmRhbmEsIEdlbmV2YSwgQXJpYWwsICdCaXRzdHJlYW0gVmVyYSBTYW5zJywgJ0RlamFWdSBTYW5zJywgTWVpcnlvLCAnSGlyYWdpbm8gS2FrdSBHb3RoaWMgUHJvJywgJ01TIFBHb3RoaWMnLCBPc2FrYSwgc2Fucy1zZXJpZjsgZm9udC1zaXplOiAxNHB4OyBiYWNrZ3JvdW5kLWNvbG9yOiAjZmZmZmZmOyI+PHN0cm9uZyBzdHlsZT0ibWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiPkdhYW4gZGUmbmJzcDs8c3Ryb25nIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+PHNwYW4gc3R5bGU9ImNvbG9yOiAjMzU5OGRiOyI+PHNwYW4gc3R5bGU9ImNvbG9yOiAjMDA4MDAwOyI+PGVtPjxzcGFuIHN0eWxlPSJjb2xvcjogIzM1OThkYjsiPlNjaGVlcHNtYWF0amVzIDwvc3Bhbj48L2VtPjwvc3Bhbj48L3NwYW4+PC9zdHJvbmc+b29rIG9wIGthbXA/PC9zdHJvbmc+PC9wPg0KPHAgc3R5bGU9Im1hcmdpbjogNnB4IDBweDsgcGFkZGluZzogMHB4OyBsaW5lLWhlaWdodDogMS41ZW07IGNvbG9yOiAjMGYwZjBmOyBmb250LWZhbWlseTogVmVyZGFuYSwgR2VuZXZhLCBBcmlhbCwgJ0JpdHN0cmVhbSBWZXJhIFNhbnMnLCAnRGVqYVZ1IFNhbnMnLCBNZWlyeW8sICdIaXJhZ2lubyBLYWt1IEdvdGhpYyBQcm8nLCAnTVMgUEdvdGhpYycsIE9zYWthLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDE0cHg7IGJhY2tncm91bmQtY29sb3I6ICNmZmZmZmY7Ij48c3BhbiBzdHlsZT0ibWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiPkphLCB3ZSBoZWJiZW4gaW4gaGV0IHZvb3JqYWFyIGVuIGhldCBuYWphYXIgZWVuIG92ZXJuYWNodGluZyBvcCBoZXQgc2NvdXRpbmd0ZXJyZWluIG9tIGVlbiBiZWV0amUgYWFuIGthbXBlcmVuIHRlIHdlbm5lbi4gRGFhcm5hYXN0IGdhYW4gd2UgNSBkYWdlbiBvcCB6b21lcmthbXAgZW4gMyBkYWdlbiBvcCBwaW5rc3RlcmthbXA8L3NwYW4+PC9wPg0KPHAgc3R5bGU9Im1hcmdpbjogNnB4IDBweDsgcGFkZGluZzogMHB4OyBsaW5lLWhlaWdodDogMS41ZW07IGNvbG9yOiAjMGYwZjBmOyBmb250LWZhbWlseTogVmVyZGFuYSwgR2VuZXZhLCBBcmlhbCwgJ0JpdHN0cmVhbSBWZXJhIFNhbnMnLCAnRGVqYVZ1IFNhbnMnLCBNZWlyeW8sICdIaXJhZ2lubyBLYWt1IEdvdGhpYyBQcm8nLCAnTVMgUEdvdGhpYycsIE9zYWthLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDE0cHg7IGJhY2tncm91bmQtY29sb3I6ICNmZmZmZmY7Ij4mbmJzcDs8L3A+DQo8cCBzdHlsZT0ibWFyZ2luOiA2cHggMHB4OyBwYWRkaW5nOiAwcHg7IGxpbmUtaGVpZ2h0OiAxLjVlbTsgY29sb3I6ICMwZjBmMGY7IGZvbnQtZmFtaWx5OiBWZXJkYW5hLCBHZW5ldmEsIEFyaWFsLCAnQml0c3RyZWFtIFZlcmEgU2FucycsICdEZWphVnUgU2FucycsIE1laXJ5bywgJ0hpcmFnaW5vIEtha3UgR290aGljIFBybycsICdNUyBQR290aGljJywgT3Nha2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTRweDsgYmFja2dyb3VuZC1jb2xvcjogI2ZmZmZmZjsiPjxzdHJvbmc+PHNwYW4gc3R5bGU9Im1hcmdpbjogMHB4OyBwYWRkaW5nOiAwcHg7Ij5XaWUgaXMgZGUgbGVpZGluZz88L3NwYW4+PC9zdHJvbmc+PC9wPg0KPHAgc3R5bGU9Im1hcmdpbjogNnB4IDBweDsgcGFkZGluZzogMHB4OyBsaW5lLWhlaWdodDogMS41ZW07IGNvbG9yOiAjMGYwZjBmOyBmb250LWZhbWlseTogVmVyZGFuYSwgR2VuZXZhLCBBcmlhbCwgJ0JpdHN0cmVhbSBWZXJhIFNhbnMnLCAnRGVqYVZ1IFNhbnMnLCBNZWlyeW8sICdIaXJhZ2lubyBLYWt1IEdvdGhpYyBQcm8nLCAnTVMgUEdvdGhpYycsIE9zYWthLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDE0cHg7IGJhY2tncm91bmQtY29sb3I6ICNmZmZmZmY7Ij48c3BhbiBzdHlsZT0ibWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiPkhldCBsZWlkaW5ndGVhbSBiZXN0YWF0IG9wIGRpdCBtb21lbnQgdWl0Ojwvc3Bhbj48L3A+DQo8cCBzdHlsZT0ibWFyZ2luOiA2cHggMHB4OyBwYWRkaW5nOiAwcHg7IGxpbmUtaGVpZ2h0OiAxLjVlbTsgY29sb3I6ICMwZjBmMGY7IGZvbnQtZmFtaWx5OiBWZXJkYW5hLCBHZW5ldmEsIEFyaWFsLCAnQml0c3RyZWFtIFZlcmEgU2FucycsICdEZWphVnUgU2FucycsIE1laXJ5bywgJ0hpcmFnaW5vIEtha3UgR290aGljIFBybycsICdNUyBQR290aGljJywgT3Nha2EsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMTRweDsgYmFja2dyb3VuZC1jb2xvcjogI2ZmZmZmZjsiPjxzcGFuIHN0eWxlPSJtYXJnaW46IDBweDsgcGFkZGluZzogMHB4OyI+Jm5ic3A7IC0gS2FhIChNb25qYSk8L3NwYW4+PC9wPg0KPHAgc3R5bGU9Im1hcmdpbjogNnB4IDBweDsgcGFkZGluZzogMHB4OyBsaW5lLWhlaWdodDogMS41ZW07IGNvbG9yOiAjMGYwZjBmOyBmb250LWZhbWlseTogVmVyZGFuYSwgR2VuZXZhLCBBcmlhbCwgJ0JpdHN0cmVhbSBWZXJhIFNhbnMnLCAnRGVqYVZ1IFNhbnMnLCBNZWlyeW8sICdIaXJhZ2lubyBLYWt1IEdvdGhpYyBQcm8nLCAnTVMgUEdvdGhpYycsIE9zYWthLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDE0cHg7IGJhY2tncm91bmQtY29sb3I6ICNmZmZmZmY7Ij48c3BhbiBzdHlsZT0ibWFyZ2luOiAwcHg7IHBhZGRpbmc6IDBweDsiPiZuYnNwOyAtIFNoYWRhIChNYXJpdCk8L3NwYW4+PC9wPg0KPHAgc3R5bGU9Im1hcmdpbjogNnB4IDBweDsgcGFkZGluZzogMHB4OyBsaW5lLWhlaWdodDogMS41ZW07IGNvbG9yOiAjMGYwZjBmOyBmb250LWZhbWlseTogVmVyZGFuYSwgR2VuZXZhLCBBcmlhbCwgJ0JpdHN0cmVhbSBWZXJhIFNhbnMnLCAnRGVqYVZ1IFNhbnMnLCBNZWlyeW8sICdIaXJhZ2lubyBLYWt1IEdvdGhpYyBQcm8nLCAnTVMgUEdvdGhpYycsIE9zYWthLCBzYW5zLXNlcmlmOyBmb250LXNpemU6IDE0cHg7IGJhY2tncm91bmQtY29sb3I6ICNmZmZmZmY7Ij4mbmJzcDs8L3A+DQo8L3RkPg0KPHRkIHN0eWxlPSJ3aWR0aDogNDcuOTU0JTsgdGV4dC1hbGlnbjogcmlnaHQ7IHZlcnRpY2FsLWFsaWduOiB0b3A7Ij4NCjxoMj5TY2hlZXBzbWFhdGplczwvaDI+DQo8cD48c3Ryb25nPlRlYW1sZWlkZXI6IE4uTi5CPGJyIC8+PC9zdHJvbmc+PHNwYW4gc3R5bGU9ImZvbnQtc2l6ZTogMTJwdDsiPjxhIGhyZWY9Im1haWx0bzpzY2hlZXBzbWFhdGplc0BzY291dGluZ21lcHBlbC5ubCI+c2NoZWVwc21hYXRqZXNAc2NvdXRpbmdtZXBwZWwubmw8L2E+PC9zcGFuPjwvcD4NCjxwPjxzdHJvbmc+T3Brb21zdHRpamRlbjo8YnIgLz48L3N0cm9uZz5aYXRlcmRhZ29jaHRlbmQ8YnIgLz4xMDowMCB0b3QgMTE6MzAgdXVyPC9wPg0KPHA+PHN0cm9uZz5MZWVmdGlqZHNncm9lcDo8YnIgLz48L3N0cm9uZz5WYW4gNyB0b3QgMTEgamFhcjwvcD4NCjwvdGQ+DQo8L3RyPg0KPC90Ym9keT4NCjwvdGFibGU+DQo8cD4mbmJzcDs8L3A+'
        ]);
        DB::table('groups')->insert([
            'slug' => 'scouts',
            'name' => 'Landscouts',
            'age' => '{"min":11,"max":15}',
            'icon' => '/images/speltakken/Speltakteken_scouts_2010.png'
        ]);
        DB::table('groups')->insert([
            'slug' => 'waterscouts',
            'name' => 'Waterscouts',
            'age' => '{"min":11,"max":15}',
            'icon' => '/images/speltakken/Speltakteken_water_scouts_2010.png'
        ]);
        DB::table('groups')->insert([
            'slug' => 'wildevaart',
            'name' => 'Explorers',
            'age' => '{"min":15,"max":18}',
            'icon' => '/images/speltakken/Speltakteken_explorers_2010.png'
        ]);
        DB::table('groups')->insert([
            'slug' => 'roverscouts',
            'name' => 'Roverscouts',
            'age' => '{"min":18,"max":21}',
            'icon' => '/images/speltakken/Speltakteken_roverscouts_2010.png'
        ]);
    }
}
