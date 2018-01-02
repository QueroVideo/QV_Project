<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Auth;

class Usuario extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;

    protected $primaryKey = 'usu_id';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = "usuarios";

    public function verificaAutorizacao($perfil)
    {
        $id_usuario = Auth::id();
        return DB::table('autorizacoes')
            ->leftJoin('autorizacoes_perfis', 'autorizacoes.aut_id', '=', 'autorizacoes_perfis.aut_id')
            ->Join('perfis', 'perfis.per_id', '=', 'autorizacoes_perfis.per_id')
            ->Join(DB::raw("(select *
                                 from usuarios
                                 where usu_id = $id_usuario) as usuario"), 'usuario.usu_perfil', '=', 'perfis.per_id')
            ->where([['autorizacoes.aut_nome', $perfil],
                     ['autorizacoes_perfis.per_id', Auth::user()->usu_perfil],
                     ['usuario.usu_inativo', '<>', 1],
                     ['perfis.per_inativo', '<>', 1],
            ])->count();
    }
}
